<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Privileges'), ['controller' => 'Privileges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Privilege'), ['controller' => 'Privileges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roles view large-9 medium-8 columns content">
    <h3><?= h($role->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Privilege') ?></th>
            <td><?= $role->has('privilege') ? $this->Html->link($role->privilege->name, ['controller' => 'Privileges', 'action' => 'view', $role->privilege->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Create') ?></th>
            <td><?= $this->Number->format($role->is_create) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Read') ?></th>
            <td><?= $this->Number->format($role->is_read) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Edit') ?></th>
            <td><?= $this->Number->format($role->is_edit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Delete') ?></th>
            <td><?= $this->Number->format($role->is_delete) ?></td>
        </tr>
    </table>
</div>
