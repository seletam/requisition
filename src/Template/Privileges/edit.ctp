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
            echo $this->Form->control('module');
        ?>
    </fieldset>
	 <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	
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
                <td><?=  $this->Form->input('', ['type'=>'checkbox', 'label' => '', $privilege->roles[0]->is_read => 1 ? 'checked' : ' ', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->input('is_read', ['type'=>'checkbox', 'name' => 'is_read[]', 'label' => '', $privilege->roles[0]->is_read => 1 ? 'checked' : '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->input('is_create', ['type'=>'checkbox', 'name' => 'is_create[]', 'label' => '', $privilege->roles[0]->is_create => 1 ? 'checked' : '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->input('is_view', ['type'=>'checkbox', 'name' => 'is_view[]', 'label' => '', $privilege->roles[0]->is_view => 1 ? 'checked' : '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->input('is_update', ['type'=>'checkbox', 'name' => 'is_update[]', 'label' => '', $privilege->roles[0]->is_update => 1 ? 'checked' : '', 'class' => 'checkbox']); ?></td>
                <td><?=  $this->Form->input('is_delete', ['type'=>'checkbox', 'name' => 'is_delete[]', 'label' => '', $privilege->roles[0]->is_delete => 1 ? 'checked' : '', 'class' => 'checkbox']); ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>