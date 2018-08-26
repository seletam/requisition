<?php
namespace App\Controller;

use App\Controller\AppController;
use ReflectionClass;
use ReflectionMethod;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenuController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departments']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__("Invalid username or passowrd, try again"));
            //var_dump($user);
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
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
		'AuthController.php',
		'ErrorController.php',
		'PagesController.php',
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
    $ignoreList = ['beforeFilter', 'afterFilter', 'initialize', 'BeforeRender', 'isAuthorised', 'Auth', 'logout', 'login', 'getResources', 'getControllers', 'getActions', 'edit', 'delete'];

    foreach($actions as $action){
		if($action->class == $className && !in_array($action->name, $ignoreList)){
            array_push($results[$controllerName], $action->name);
        }
    }
    return $results;
}
	public function menu(){
		$controllers = $this->getControllers();
		$resources = [];
		foreach($controllers as $controller){
			$actions = $this->getActions($controller);
			$resource = array($actions);
			array_push($resources, $actions);
		}

	 $this->set(compact('resources'));
	}
}
