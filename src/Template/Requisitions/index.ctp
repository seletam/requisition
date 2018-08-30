<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition[]|\Cake\Collection\CollectionInterface $requisitions
 */
?>
<div class="row top-header-inner">
<div class="col-md-3">
    <ul class="list-group">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="col-md-9">
    <h3><?= __('Requisitions') ?></h3>
    <table class="table table-bordered">
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
</div>
</div>