<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RequisitionsPayments Controller
 *
 * @property \App\Model\Table\RequisitionsPaymentsTable $RequisitionsPayments
 *
 * @method \App\Model\Entity\RequisitionsPayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequisitionsPaymentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Requisitions', 'Payments']
        ];
        $requisitionsPayments = $this->paginate($this->RequisitionsPayments);

        $this->set(compact('requisitionsPayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Requisitions Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requisitionsPayment = $this->RequisitionsPayments->get($id, [
            'contain' => ['Requisitions', 'Payments']
        ]);

        $this->set('requisitionsPayment', $requisitionsPayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requisitionsPayment = $this->RequisitionsPayments->newEntity();
        if ($this->request->is('post')) {
            $requisitionsPayment = $this->RequisitionsPayments->patchEntity($requisitionsPayment, $this->request->getData());
            if ($this->RequisitionsPayments->save($requisitionsPayment)) {
                $this->Flash->success(__('The requisitions payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisitions payment could not be saved. Please, try again.'));
        }
        $requisitions = $this->RequisitionsPayments->Requisitions->find('list', ['limit' => 200]);
        $payments = $this->RequisitionsPayments->Payments->find('list', ['limit' => 200]);
        $this->set(compact('requisitionsPayment', 'requisitions', 'payments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requisitions Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requisitionsPayment = $this->RequisitionsPayments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requisitionsPayment = $this->RequisitionsPayments->patchEntity($requisitionsPayment, $this->request->getData());
            if ($this->RequisitionsPayments->save($requisitionsPayment)) {
                $this->Flash->success(__('The requisitions payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisitions payment could not be saved. Please, try again.'));
        }
        $requisitions = $this->RequisitionsPayments->Requisitions->find('list', ['limit' => 200]);
        $payments = $this->RequisitionsPayments->Payments->find('list', ['limit' => 200]);
        $this->set(compact('requisitionsPayment', 'requisitions', 'payments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requisitions Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requisitionsPayment = $this->RequisitionsPayments->get($id);
        if ($this->RequisitionsPayments->delete($requisitionsPayment)) {
            $this->Flash->success(__('The requisitions payment has been deleted.'));
        } else {
            $this->Flash->error(__('The requisitions payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
