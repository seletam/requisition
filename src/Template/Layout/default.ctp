<?php
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
	echo $this->Html->script('jquery.min.js');
	echo $this->Html->script('jquery.dataTables.js');
	echo $this->Html->script('dataTables.bootstrap4.js');
	echo $this->Html->script('Chart.min.js');
	echo $this->Html->script('sb-admin.min.js');
	echo $this->Html->script('datatables-demo.js');
	echo $this->Html->script('chart-area-demo.js');
	echo $this->Html->css('sb-admin.css');
	echo $this->Html->css('dataTables.bootstrap4.css');
	echo $this->Html->css('all.min.css');
	echo $this->Html->css('requisition.css');
	echo $this->Html->css('bootstrap.min.css');
	echo $this->Html->script('jquery.easing.min.js');
	echo $this->Html->script('bootstrap.bundle.min.js');?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">School Auditing</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <!--<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">-->
          <div class="input-group-append">
            <!--<button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>-->
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0 ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Menu</span>
          </a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Budget</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
		    <?= $this->Html->link(__('List Budget'), ['action' => 'index']) ?>
			<?= $this->Html->link(__('New Budget'), ['controller' => 'Budget', 'action' => 'add']) ?>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown1">
            <a class="dropdown-item" href="login.html">List Account</a>
            <a class="dropdown-item" href="register.html">New Account</a>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown2">
            <a class="dropdown-item" href="login.html">List Account</a>
            <a class="dropdown-item" href="register.html">New Account</a>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown3">
            <a class="dropdown-item" href="login.html">List Account</a>
            <a class="dropdown-item" href="register.html">New Account</a>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown4">
            <a class="dropdown-item" href="login.html">List Account</a>
            <a class="dropdown-item" href="register.html">New Account</a>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown5">
            <a class="dropdown-item" href="login.html">List Account</a>
            <a class="dropdown-item" href="register.html">New Account</a>
          </div>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Accounts</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown6">
            <a class="dropdown-item" href="login.html">List Account</a>
            <a class="dropdown-item" href="register.html">New Account</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
			<?= $this->Flash->render() ?>    
			<?= $this->fetch('content') ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
			<?= $this->Html->link('Logout2', ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-primary']);	?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>