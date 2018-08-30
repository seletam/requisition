<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentsRequisition $paymentsRequisition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payments Requisition'), ['action' => 'edit', $paymentsRequisition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payments Requisition'), ['action' => 'delete', $paymentsRequisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentsRequisition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments Requisitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payments Requisition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymentsRequisitions view large-9 medium-8 columns content">
    <h3><?= h($paymentsRequisition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $paymentsRequisition->has('payment') ? $this->Html->link($paymentsRequisition->payment->id, ['controller' => 'Payments', 'action' => 'view', $paymentsRequisition->payment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisition') ?></th>
            <td><?= $paymentsRequisition->has('requisition') ? $this->Html->link($paymentsRequisition->requisition->id, ['controller' => 'Requisitions', 'action' => 'view', $paymentsRequisition->requisition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paymentsRequisition->id) ?></td>
        </tr>
    </table>
</div>