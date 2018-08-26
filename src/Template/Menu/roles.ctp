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
				<th>Role</th>
				<th>Controller</th>
				<th>Rights</th>
				<th>Rights</th>
				<th>Rights</th>
				<th>Rights</th>
				<th>Rights</th>
            </tr>
        </thead>
        <tbody>
            <?php 
			$i = 0;
			$j = 0;
			?>
			<?php foreach ($privilege as $prv): ?>
			<?php foreach ($resources as $resource): ?>
			<?php foreach ($resource as $resourcer): ?>
				<?php $index = key($resource) ?>
				<tr>
				<td id="<?= $prv->id ?>"><?= $prv->name ?></td>
				<td><?= $index ?></td>
				<?php
				for($i=0;$i<count($resourcer);$i++){ ?>
					<?php 
					$methodName;
					if($resourcer[$i] == "edit"){ 
						 $methodName = "is_edit[]";
					}else if($resourcer[$i] == "index"){
						$methodName = "is_read[]";
					}else if($resourcer[$i] == "add"){
						$methodName = "is_create[]";
					}else if($resourcer[$i] == "delete"){
						$methodName = "is_delete[]";
					}else {
						$methodName = $resourcer[$i] . "[]";
					}?>
					 <td><input type="checkbox" name="<?= $methodName ?>" <?= $prv->id == 1 ? 'checked' : '' ?>><?= $resourcer[$i] ?> </td>
				<?php }
				?>
            </tr>
			<?php $i++; endforeach; ?>
			<?php  endforeach; ?>
			<?php  endforeach; ?>
        </tbody>
    </table>
	 <?= $this->Form->create($menu) ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
