<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RequisitionsPayment[]|\Cake\Collection\CollectionInterface $requisitionsPayments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Requisitions Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisitionsPayments index large-9 medium-8 columns content">
    <h3><?= __('Requisitions Payments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisition_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisitionsPayments as $requisitionsPayment): ?>
            <tr>
                <td><?= $this->Number->format($requisitionsPayment->id) ?></td>
                <td><?= $requisitionsPayment->has('payment') ? $this->Html->link($requisitionsPayment->payment->id, ['controller' => 'Payments', 'action' => 'view', $requisitionsPayment->payment->id]) : '' ?></td>
                <td><?= $requisitionsPayment->has('requisition') ? $this->Html->link($requisitionsPayment->requisition->id, ['controller' => 'Requisitions', 'action' => 'view', $requisitionsPayment->requisition->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $requisitionsPayment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requisitionsPayment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requisitionsPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitionsPayment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
