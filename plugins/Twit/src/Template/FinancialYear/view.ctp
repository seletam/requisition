<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FinancialYear $financialYear
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Financial Year'), ['action' => 'edit', $financialYear->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Financial Year'), ['action' => 'delete', $financialYear->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financialYear->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Financial Year'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Financial Year'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="financialYear view large-9 medium-8 columns content">
    <h3><?= h($financialYear->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($financialYear->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($financialYear->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Financialyear') ?></th>
            <td><?= h($financialYear->financialyear) ?></td>
        </tr>
    </table>
</div>
