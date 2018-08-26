<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Menu Controller
 *
 * @property \App\Model\Table\MenuTable $Menu
 *
 * @method \App\Model\Entity\Menu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
            'contain' => ['Privileges']
        ];
        $menu = $this->paginate($this->Menu);

        $this->set(compact('menu'));
    }

    /**
     * View method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menu = $this->Menu->get($id, [
            'contain' => ['Privileges']
        ]);

        $this->set('menu', $menu);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $menu = $this->Menu->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
		$controllers = $this->getControllers();
        $privileges = $this->Menu->Privileges->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'privileges', 'controllers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $menu = $this->Menu->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
		$controllers = $this->getControllers();
        $privileges = $this->Menu->Privileges->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'privileges', 'controllers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menu->get($id);
        if ($this->Menu->delete($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
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

	 $this->set(compact('resources'));
	}
	
	public function roles(){
		$menu = $this->Menu->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
		$privilege = $this->Menu->Privileges->find()->contain(['Roles', 'Menu']);
		$controllers = $this->getControllers();
		$resources = [];
		foreach($controllers as $controller){
			$actions = $this->getActions($controller);
			array_push($resources, $actions);
		}

	 $this->set(compact('menu', 'resources', 'privilege'));
	}
	
	public function sidebar(){
		$menu = $this->Menu->find()->contain(['Privileges'])->where(['is_active' => 1, 'AND' => ['privilege_id' => 1]]);
        $this->set(compact('menu'));
	}
}
