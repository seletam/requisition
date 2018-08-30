<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requisitions Controller
 *
 * @property \App\Model\Table\RequisitionsTable $Requisitions
 *
 * @method \App\Model\Entity\Requisition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequisitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Services']
        ];
        $requisitions = $this->paginate($this->Requisitions);

        $this->set(compact('requisitions'));
    }

    /**
     * View method
     *
     * @param string|null $id Requisition id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requisition = $this->Requisitions->get($id, [
            'contain' => ['Services', 'Payments']
        ]);

        $this->set('requisition', $requisition);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requisition = $this->Requisitions->newEntity();    
		$payment = $this->Requisitions->Payments->newEntity();		
        if ($this->request->is('post')) {
            $requisition = $this->Requisitions->patchEntity($requisition, $this->request->getData());
			$payment = $this->Requisitions->Payments->patchEntity($payment, $this->request->getData());
			
            
		    if ($this->Requisitions->save($requisition)) {
				$requisition['_ids'] = $requisition->id;
				$this->Requisitions->Payments->save($payment);
				$payment['_ids'] = $payment->id;
				//($payment_id = $payment->id)
				
                $this->Flash->success(__('The requisition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisition could not be saved. Please, try again.'));
        }
        $services = $this->Requisitions->Services->find('list', ['limit' => 200]);
        $payments = $this->Requisitions->Payments->find('list', ['limit' => 200]);
        $requisitions = $this->Requisitions->RequisitionsPayments->find('list', ['limit' => 200]);
        $this->set(compact('requisition', 'services', 'payments', 'requisitions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requisition id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requisition = $this->Requisitions->get($id, [
            'contain' => ['Payments', 'Requisitions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requisition = $this->Requisitions->patchEntity($requisition, $this->request->getData());
            if ($this->Requisitions->save($requisition)) {
                $this->Flash->success(__('The requisition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisition could not be saved. Please, try again.'));
        }
        $services = $this->Requisitions->Services->find('list', ['limit' => 200]);
        $payments = $this->Requisitions->Payments->find('list', ['limit' => 200]);
        $requisitions = $this->Requisitions->RequisitionsPayments->find('list', ['limit' => 200]);
        $this->set(compact('requisition', 'services', 'payments', 'requisitions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requisition id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requisition = $this->Requisitions->get($id);
        if ($this->Requisitions->delete($requisition)) {
            $this->Flash->success(__('The requisition has been deleted.'));
        } else {
            $this->Flash->error(__('The requisition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}