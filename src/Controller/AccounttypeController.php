<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AccountType Controller
 *
 * @property \App\Model\Table\AccountTypeTable $AccountType
 *
 * @method \App\Model\Entity\AccountType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $accountType = $this->paginate($this->AccountType);

        $this->set(compact('accountType'));
    }

    /**
     * View method
     *
     * @param string|null $id Account Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountType = $this->AccountType->get($id, [
            'contain' => []
        ]);

        $this->set('accountType', $accountType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountType = $this->AccountType->newEntity();
        if ($this->request->is('post')) {
            $accountType = $this->AccountType->patchEntity($accountType, $this->request->getData());
            if ($this->AccountType->save($accountType)) {
                $this->Flash->success(__('The account type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account type could not be saved. Please, try again.'));
        }
        $this->set(compact('accountType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Account Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountType = $this->AccountType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountType = $this->AccountType->patchEntity($accountType, $this->request->getData());
            if ($this->AccountType->save($accountType)) {
                $this->Flash->success(__('The account type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The account type could not be saved. Please, try again.'));
        }
        $this->set(compact('accountType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Account Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountType = $this->AccountType->get($id);
        if ($this->AccountType->delete($accountType)) {
            $this->Flash->success(__('The account type has been deleted.'));
        } else {
            $this->Flash->error(__('The account type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
