<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Budget Controller
 *
 * @property \App\Model\Table\BudgetTable $Budget
 *
 * @method \App\Model\Entity\Budget[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BudgetController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Services', 'Fiscals']
        ];
        $budget = $this->paginate($this->Budget);

        $this->set(compact('budget'));
    }

    /**
     * View method
     *
     * @param string|null $id Budget id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $budget = $this->Budget->get($id, [
            'contain' => ['Services', 'Fiscals']
        ]);

        $this->set('budget', $budget);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $budget = $this->Budget->newEntity();
        if ($this->request->is('post')) {
            $budget = $this->Budget->patchEntity($budget, $this->request->getData());
            if ($this->Budget->save($budget)) {
                $this->Flash->success(__('The budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The budget could not be saved. Please, try again.'));
        }
		$currentDate = date('Y-m-d H:i:s');
		//debug($currentDate);
        $services = $this->Budget->Services->find('list', ['limit' => 200]);
        $fiscals = $this->Budget->Fiscals->find('list', ['limit' => 200])->where(['active ' =>  1]);
        $this->set(compact('budget', 'services', 'fiscals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Budget id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $budget = $this->Budget->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $budget = $this->Budget->patchEntity($budget, $this->request->getData());
            if ($this->Budget->save($budget)) {
                $this->Flash->success(__('The budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The budget could not be saved. Please, try again.'));
        }
        $services = $this->Budget->Services->find('list', ['limit' => 200]);
        $fiscals = $this->Budget->Fiscals->find('list', ['limit' => 200])->where(['active ' =>  1]);
        $this->set(compact('budget', 'services', 'fiscals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Budget id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $budget = $this->Budget->get($id);
        if ($this->Budget->delete($budget)) {
            $this->Flash->success(__('The budget has been deleted.'));
        } else {
            $this->Flash->error(__('The budget could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
