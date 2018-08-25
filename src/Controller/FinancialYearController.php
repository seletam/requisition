<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FinancialYear Controller
 *
 * @property \App\Model\Table\FinancialYearTable $FinancialYear
 *
 * @method \App\Model\Entity\FinancialYear[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FinancialYearController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $financialYear = $this->paginate($this->FinancialYear);

        $this->set(compact('financialYear'));
    }

    /**
     * View method
     *
     * @param string|null $id Financial Year id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $financialYear = $this->FinancialYear->get($id, [
            'contain' => []
        ]);

        $this->set('financialYear', $financialYear);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $financialYear = $this->FinancialYear->newEntity();
        if ($this->request->is('post')) {
            $financialYear = $this->FinancialYear->patchEntity($financialYear, $this->request->getData());
            if ($this->FinancialYear->save($financialYear)) {
                $this->Flash->success(__('The financial year has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The financial year could not be saved. Please, try again.'));
        }
        $this->set(compact('financialYear'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Financial Year id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $financialYear = $this->FinancialYear->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $financialYear = $this->FinancialYear->patchEntity($financialYear, $this->request->getData());
            if ($this->FinancialYear->save($financialYear)) {
                $this->Flash->success(__('The financial year has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The financial year could not be saved. Please, try again.'));
        }
        $this->set(compact('financialYear'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Financial Year id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $financialYear = $this->FinancialYear->get($id);
        if ($this->FinancialYear->delete($financialYear)) {
            $this->Flash->success(__('The financial year has been deleted.'));
        } else {
            $this->Flash->error(__('The financial year could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
