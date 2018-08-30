<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilege $privilege
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
    <?= $this->Form->create($privilege) ?>
    <fieldset>
        <legend><?= __('Role') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('is_superadmin');
        ?>
    </fieldset>
	<legend><?= __('Permissions') ?></legend>
	<table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Module's Name</th>
                <th></th>
                <th>View</th>
                <th>Create</th>
                <th>Read</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
			$i=0;
			foreach ($resources as $cntr): 
			$value = key($cntr);
			?>
           <tr>
                <td><?= $i+1 ?></td>
                <td><?= key($cntr) ?><?= $this->Form->hidden('module', ['value' => $value])?></td>
                <td><?=  $this->Form->control('list_all', ['type'=>'checkbox', 'name' => 'is_list', 'label' => '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->control('is_read', ['type'=>'checkbox', 'name' => 'is_read[]', 'label' => '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->control('is_create', ['type'=>'checkbox', 'name' => 'is_create[]', 'label' => '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->control('is_view', ['type'=>'checkbox', 'name' => 'is_view[]', 'label' => '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->control('is_update', ['type'=>'checkbox', 'name' => 'is_update[]', 'label' => '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->inpcontrolut('is_delete', ['type'=>'checkbox', 'name' => 'is_delete[]', 'label' => '','class' => 'checkbox']); ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
	<?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
