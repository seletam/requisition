<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fiscals Controller
 *
 * @property \App\Model\Table\FiscalsTable $Fiscals
 *
 * @method \App\Model\Entity\Fiscal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FiscalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fiscals = $this->paginate($this->Fiscals);

        $this->set(compact('fiscals'));
    }

    /**
     * View method
     *
     * @param string|null $id Fiscal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fiscal = $this->Fiscals->get($id, [
            'contain' => ['Budget' => 'Services']
        ]);

        $this->set('fiscal', $fiscal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fiscal = $this->Fiscals->newEntity();
        if ($this->request->is('post')) {
            $fiscal = $this->Fiscals->patchEntity($fiscal, $this->request->getData());
            if ($this->Fiscals->save($fiscal)) {
                $this->Flash->success(__('The fiscal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiscal could not be saved. Please, try again.'));
        }
        $this->set(compact('fiscal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fiscal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fiscal = $this->Fiscals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fiscal = $this->Fiscals->patchEntity($fiscal, $this->request->getData());
            if ($this->Fiscals->save($fiscal)) {
                $this->Flash->success(__('The fiscal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiscal could not be saved. Please, try again.'));
        }
        $this->set(compact('fiscal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fiscal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fiscal = $this->Fiscals->get($id);
        if ($this->Fiscals->delete($fiscal)) {
            $this->Flash->success(__('The fiscal has been deleted.'));
        } else {
            $this->Flash->error(__('The fiscal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
