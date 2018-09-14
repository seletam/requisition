<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Requisition Login</title>

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

  <body class="bg-dark">

  <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <?= $this->Form->create(null); ?>
            <div class="form-group">
              <div class="form-label-group">
			   <?= $this->Form->input('username', ["class" => "form-control", "placeholder" => "Username", "autofocus"=>true]); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                 <?= $this->Form->input('password', ["class" => "form-control", "placeholder" => "Password", "required"=>true]); ?>
              </div>
            </div>
			 <?= $this->Form->button('Login', array('class' => 'btn btn-large btn-primary')); ?>
         <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>