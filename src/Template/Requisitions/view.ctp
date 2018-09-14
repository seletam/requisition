<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requisition'), ['action' => 'edit', $requisition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requisition'), ['action' => 'delete', $requisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requisitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requisitions view large-9 medium-8 columns content">
    <h3><?= h($requisition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Regnumber') ?></th>
            <td><?= h($requisition->regnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reqnumber') ?></th>
            <td><?= h($requisition->reqnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $requisition->has('service') ? $this->Html->link($requisition->service->name, ['controller' => 'Services', 'action' => 'view', $requisition->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoiceno') ?></th>
            <td><?= h($requisition->invoiceno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suppliername') ?></th>
            <td><?= h($requisition->suppliername) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($requisition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoicedate') ?></th>
            <td><?= h($requisition->invoicedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createddate') ?></th>
            <td><?= h($requisition->createddate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Request') ?></h4>
        <?= $this->Text->autoParagraph(h($requisition->request)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($requisition->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Chequeno') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Chequedate') ?></th>
                <th scope="col"><?= __('Documentnumber') ?></th>
                <th scope="col"><?= __('Narration') ?></th>
                <th scope="col"><?= __('Collectedby') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($requisition->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->chequeno) ?></td>
                <td><?= h($payments->amount) ?></td>
                <td><?= h($payments->chequedate) ?></td>
                <td><?= h($payments->documentnumber) ?></td>
                <td><?= h($payments->narration) ?></td>
                <td><?= h($payments->collectedby) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
