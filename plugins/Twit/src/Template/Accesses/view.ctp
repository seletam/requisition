<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Access $access
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Access'), ['action' => 'edit', $access->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Access'), ['action' => 'delete', $access->id], ['confirm' => __('Are you sure you want to delete # {0}?', $access->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accesses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accesses view large-9 medium-8 columns content">
    <h3><?= h($access->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $access->has('user') ? $this->Html->link($access->user->id, ['controller' => 'Users', 'action' => 'view', $access->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module Name') ?></th>
            <td><?= h($access->module_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($access->id) ?></td>
        </tr>
    </table>
</div>
