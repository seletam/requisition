<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Privileges Controller
 *
 * @property \App\Model\Table\PrivilegesTable $Privileges
 *
 * @method \App\Model\Entity\Privilege[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrivilegesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $privileges = $this->paginate($this->Privileges);

        $this->set(compact('privileges'));
    }

    /**
     * View method
     *
     * @param string|null $id Privilege id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $privilege = $this->Privileges->get($id, [
            'contain' => ['Menu', 'Roles']
        ]);

        $this->set('privilege', $privilege);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $privilege = $this->Privileges->newEntity();
        if ($this->request->is('post')) {
            $privilege = $this->Privileges->patchEntity($privilege, $this->request->getData());
            if ($this->Privileges->save($privilege)) {
                $this->Flash->success(__('The privilege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilege could not be saved. Please, try again.'));
        }
        $this->set(compact('privilege'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Privilege id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $privilege = $this->Privileges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $privilege = $this->Privileges->patchEntity($privilege, $this->request->getData());
            if ($this->Privileges->save($privilege)) {
                $this->Flash->success(__('The privilege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilege could not be saved. Please, try again.'));
        }
        $this->set(compact('privilege'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Privilege id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $privilege = $this->Privileges->get($id);
        if ($this->Privileges->delete($privilege)) {
            $this->Flash->success(__('The privilege has been deleted.'));
        } else {
            $this->Flash->error(__('The privilege could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
