<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row top-header-inner">
<div class="col-md-3">
    <ul class="list-group">
        <li class="active"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Menu Access'), ['controller' => 'Users', 'action' => 'getResources']) ?></li>
    </ul>
</div>
<div class="col-md-9">
    <h3><?= __('Access Control') ?></h3>
    <table class="table table-bordered">
        <thead>
				<tr>
				<th>Controller</th>
				<th>Rights</th>
				<th>Rights></th>
				<th>Rights</th>
				<th>Rights</th>
				<th>Rights</th>
            </tr>
        </thead>
        <tbody>
            <?php 
			
			$i = 0;
			foreach ($resources as $resource): ?>
			<?php foreach ($resource as $resourcer): ?>
				<?php $index = key($resource) ?>
				<tr>
				<td><?= $index ?></td>
				<?php
				for($i=0;$i<count($resourcer);$i++){ ?>
					 <td><input type="checkbox" name="name[]" class="checkbox boxPosition"><?= $resourcer[$i] ?> </td>
				<?php }
				?>
            </tr>
			<?php echo $i; $i++; endforeach; ?>
			<?php  endforeach; ?>
        </tbody>
    </table>
</div>
