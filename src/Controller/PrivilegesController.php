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
        $privilege = $this->Privileges->Roles->newEntity();
		$resources = $this->privileges();
        if ($this->request->is('post')) {
            $privilege = $this->Privileges->patchEntity($privilege, $this->request->getData());
				($privilege->is_delete[0]);
				($privilege->is_create[0]);
				($privilege->is_read[0]);
			if ($this->Privileges->Roles->save($privilege)) {
					$this->Flash->success(__('The privilege has been saved.'));

					return $this->redirect(['action' => 'index']);
				}
            $this->Flash->error(__('The privilege could not be saved. Please, try again.'));
        }
        $this->set(compact('privilege', 'resources'));
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
            'contain' => ['Roles']
        ]);
		$resources = $this->privileges();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $privilege = $this->Privileges->Roles->patchEntity($privilege, $this->request->getData());
            if ($this->Privileges->save($privilege)) {
                $this->Flash->success(__('The privilege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilege could not be saved. Please, try again.'));
        }
        $this->set(compact('resources', 'privilege'));
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
	
		public function getControllers() {
    $files = scandir('../src/Controller/');
    $results = [];
	//$results = ['actionName' => $results];
    $ignoreList = [
        '.', 
        '..', 
        'Component', 
        'AppController.php',
		'ErrorController.php',
		'PagesController.php',
		'MenuController.php'
    ];
    foreach($files as $file){
		if(!in_array($file, $ignoreList)) {
			$controller = explode('.', $file)[0];
			array_push($results, str_replace('Controller', '', $controller));           
		}
    }
    return $results;
}
public function getActions($controllerName) {

    $className = 'App\\Controller\\'.$controllerName.'Controller';
	if($className == "App\Controller\AuthController"){
		$className = "App\Controller\UsersController";
	}
	
    $class = new \ReflectionClass($className);
	
    $actions = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
	
    $results = [$controllerName => []];
    //$results = ['ControllerName' => $results];
    $ignoreList = ['beforeFilter', 'afterFilter', 'initialize', 'BeforeRender', 'isAuthorised', 'Auth', 'logout', 'login', 'getResources', 'getControllers', 'getActions'];

    foreach($actions as $action){
		if($action->class == $className && !in_array($action->name, $ignoreList)){
            array_push($results[$controllerName], $action->name);
        }
    }
    return $results;
}
	public function privileges(){
		$controllers = $this->getControllers();
		$resources = [];
		foreach($controllers as $controller){
			$actions = $this->getActions($controller);
			$resource = array($actions);
			array_push($resources, $actions);
		}
		
		return $resources;
	}	 
}
