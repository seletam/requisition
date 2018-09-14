<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="card mb-3">
    <div class="card-header">Edit User</div>
    <div class="card-body">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?php
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('employeeid');
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->control('createddate', ['empty' => true]);
            echo $this->Form->control('privilege_id', ['options' => $privileges, 'empty' => true]);
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>