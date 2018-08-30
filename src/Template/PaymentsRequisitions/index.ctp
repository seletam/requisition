<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentsRequisition[]|\Cake\Collection\CollectionInterface $paymentsRequisitions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payments Requisition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentsRequisitions index large-9 medium-8 columns content">
    <h3><?= __('Payments Requisitions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('payment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paymentsRequisitions as $paymentsRequisition): ?>
            <tr>
                <td><?= $paymentsRequisition->has('payment') ? $this->Html->link($paymentsRequisition->payment->id, ['controller' => 'Payments', 'action' => 'view', $paymentsRequisition->payment->id]) : '' ?></td>
                <td><?= $paymentsRequisition->has('requisition') ? $this->Html->link($paymentsRequisition->requisition->id, ['controller' => 'Requisitions', 'action' => 'view', $paymentsRequisition->requisition->id]) : '' ?></td>
                <td><?= $this->Number->format($paymentsRequisition->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paymentsRequisition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentsRequisition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentsRequisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentsRequisition->id)]) ?>
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
