# Requisition
School project for PO and requisition 


#Cakephp Project Installation


#Bootstrap installation
    
    composer require holt59/cakephp3-bootstrap-helpers:dev-master

#Load a plugin - "/config/bootstrap.php" file:
    
    Plugin::load('Bootstrap');

#Enable Bootstrap functions "/controller/AppController.php" file:
	
    public $helpers = [
			'Form' => [
				'className' => 'Bootstrap.Form'
			],
			'Html' => [
				'className' => 'Bootstrap.Html'
			],
			'Modal' => [
				'className' => 'Bootstrap.Modal'
			],
			'Navbar' => [
				'className' => 'Bootstrap.Navbar'
			],
			'Paginator' => [
				'className' => 'Bootstrap.Paginator'
			],
			'Panel' => [
				'className' => 'Bootstrap.Panel'
			]
	];

#Global bootstrap invoke inside "Template/Layout/default.ctp" file:
	
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	echo $this->Html->script([
			'https://code.jquery.com/jquery-1.12.4.min.js',
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
	]);

