<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Privileges'), ['controller' => 'Privileges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Privilege'), ['controller' => 'Privileges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accesses'), ['controller' => 'Accesses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access'), ['controller' => 'Accesses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $user->has('department') ? $this->Html->link($user->department->name, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Privilege') ?></th>
            <td><?= $user->has('privilege') ? $this->Html->link($user->privilege->name, ['controller' => 'Privileges', 'action' => 'view', $user->privilege->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employeeid') ?></th>
            <td><?= $this->Number->format($user->employeeid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createddate') ?></th>
            <td><?= h($user->createddate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Accesses') ?></h4>
        <?php if (!empty($user->accesses)): ?>
        <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accesses', 'action' => 'delete', $accesses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accesses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
