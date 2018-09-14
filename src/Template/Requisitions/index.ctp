<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition[]|\Cake\Collection\CollectionInterface $requisitions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisitions index large-9 medium-8 columns content">
    <h3><?= __('Requisitions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regnumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reqnumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoiceno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoicedate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suppliername') ?></th>
                <th scope="col"><?= $this->Paginator->sort('createddate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisitions as $requisition): ?>
            <tr>
                <td><?= $this->Number->format($requisition->id) ?></td>
                <td><?= h($requisition->regnumber) ?></td>
                <td><?= h($requisition->reqnumber) ?></td>
                <td><?= $requisition->has('service') ? $this->Html->link($requisition->service->name, ['controller' => 'Services', 'action' => 'view', $requisition->service->id]) : '' ?></td>
                <td><?= h($requisition->invoiceno) ?></td>
                <td><?= h($requisition->invoicedate) ?></td>
                <td><?= h($requisition->suppliername) ?></td>
                <td><?= h($requisition->createddate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $requisition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requisition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id)]) ?>
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
