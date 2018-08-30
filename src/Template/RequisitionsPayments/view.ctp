<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RequisitionsPayment $requisitionsPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requisitions Payment'), ['action' => 'edit', $requisitionsPayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requisitions Payment'), ['action' => 'delete', $requisitionsPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitionsPayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requisitions Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisitions Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requisitionsPayments view large-9 medium-8 columns content">
    <h3><?= h($requisitionsPayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $requisitionsPayment->has('payment') ? $this->Html->link($requisitionsPayment->payment->id, ['controller' => 'Payments', 'action' => 'view', $requisitionsPayment->payment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisition') ?></th>
            <td><?= $requisitionsPayment->has('requisition') ? $this->Html->link($requisitionsPayment->requisition->id, ['controller' => 'Requisitions', 'action' => 'view', $requisitionsPayment->requisition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($requisitionsPayment->id) ?></td>
        </tr>
    </table>
</div>
