<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Income Controller
 *
 * @property \App\Model\Table\IncomeTable $Income
 *
 * @method \App\Model\Entity\Income[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IncomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AccountTypes']
        ];
        $income = $this->paginate($this->Income);

        $this->set(compact('income'));
    }

    /**
     * View method
     *
     * @param string|null $id Income id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $income = $this->Income->get($id, [
            'contain' => ['AccountTypes']
        ]);

        $this->set('income', $income);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $income = $this->Income->newEntity();
        if ($this->request->is('post')) {
            $income = $this->Income->patchEntity($income, $this->request->getData());
            if ($this->Income->save($income)) {
                $this->Flash->success(__('The income has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income could not be saved. Please, try again.'));
        }
        $accountTypes = $this->Income->AccountTypes->find('list', ['limit' => 200]);
        $this->set(compact('income', 'accountTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Income id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $income = $this->Income->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $income = $this->Income->patchEntity($income, $this->request->getData());
            if ($this->Income->save($income)) {
                $this->Flash->success(__('The income has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income could not be saved. Please, try again.'));
        }
        $accountTypes = $this->Income->AccountTypes->find('list', ['limit' => 200]);
        $this->set(compact('income', 'accountTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Income id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $income = $this->Income->get($id);
        if ($this->Income->delete($income)) {
            $this->Flash->success(__('The income has been deleted.'));
        } else {
            $this->Flash->error(__('The income could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
