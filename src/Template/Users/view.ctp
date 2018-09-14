<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="card mb-3">
        <div class="card-header">View</div>
        <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('First name') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last name') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= h($user->department->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->privilege->name) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Employee#') ?></th>
            <td><?= h($user->employeeid) ?></td>
        </tr>
    </table>
	 <?php if (!empty($user->accesses)): ?>
    <div class="table">
        <h4><?= __('Related Accesses') ?></h4>
        <table class="table table-bordered">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Module Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->accesses as $accesses): ?>
            <tr>
                <td><?= h($accesses->id) ?></td>
                <td><?= h($accesses->user_id) ?></td>
                <td><?= h($accesses->module_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accesses', 'action' => 'view', $accesses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accesses', 'action' => 'edit', $accesses->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Accesses', 'action' => 'delete', $accesses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accesses->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
