<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountType $accountType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account Type'), ['action' => 'edit', $accountType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account Type'), ['action' => 'delete', $accountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Account Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accountTypes view large-9 medium-8 columns content">
    <h3><?= h($accountType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($accountType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($accountType->id) ?></td>
        </tr>
    </table>
</div>
