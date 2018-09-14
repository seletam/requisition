<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Requisition process';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
<?php
echo $this->Html->css('requisition.css');
echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
echo $this->Html->script([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
]);?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
     <?php echo $this->Navbar->create('School PO', ['class' => 'main-header', 'fixed' => 'top', 'inverse' => true]);
echo $this->Navbar->beginMenu();
    echo $this->Navbar->link('Link', '/', ['class' => 'active']);
    echo $this->Navbar->link('Blog', ['controller' => 'pages', 'action' => 'test']);
    echo $this->Navbar->beginMenu('Dropdown');
        echo $this->Navbar->header('Header 1');
        echo $this->Navbar->link('Action');
        echo $this->Navbar->link('Another action');
        echo $this->Navbar->link('Something else here');
        echo $this->Navbar->divider();
        echo $this->Navbar->header('Header 2');
        echo $this->Navbar->link('Another action');
    echo $this->Navbar->endMenu();
echo $this->Navbar->endMenu();
echo $this->Navbar->beginMenu();
echo $this->Navbar->link('Logout', ['controller' => 'users', 'action' => 'logout'], ['class' => 'navbar-right']);	
echo $this->Navbar->endMenu();
echo $this->Navbar->end();
?>
    
    <div class="container">
		<?= $this->Flash->render() ?>    
		<?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
