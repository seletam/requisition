<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Income $income
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Income'), ['action' => 'edit', $income->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Income'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Income'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="income view large-9 medium-8 columns content">
    <h3><?= h($income->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Account Type') ?></th>
            <td><?= $income->has('account_type') ? $this->Html->link($income->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $income->account_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($income->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($income->Amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Services Id') ?></th>
            <td><?= $this->Number->format($income->services_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($income->created) ?></td>
        </tr>
    </table>
</div>
