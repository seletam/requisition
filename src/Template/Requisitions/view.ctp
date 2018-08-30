<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
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
    <h3><?= h($requisition->id) ?></h3>
    <table class="table table-striped">
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
  
    <h4><?= __('Request') ?></h4>
    <?= $this->Text->autoParagraph(h($requisition->request)); ?>
  
    <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($requisition->payments)): ?>
        <table class="table table-bordered">
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
    
		<h4><?= __('Related Requisitions') ?></h4>
        <?php if (!empty($requisition->requisitions)): ?>
        <table class="table table-bordered">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Regnumber') ?></th>
                <th scope="col"><?= __('Reqnumber') ?></th>
                <th scope="col"><?= __('Request') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Invoiceno') ?></th>
                <th scope="col"><?= __('Invoicedate') ?></th>
                <th scope="col"><?= __('Suppliername') ?></th>
                <th scope="col"><?= __('Createddate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($requisition->requisitions as $requisitions): ?>
            <tr>
                <td><?= h($requisitions->id) ?></td>
                <td><?= h($requisitions->regnumber) ?></td>
                <td><?= h($requisitions->reqnumber) ?></td>
                <td><?= h($requisitions->request) ?></td>
                <td><?= h($requisitions->service_id) ?></td>
                <td><?= h($requisitions->invoiceno) ?></td>
                <td><?= h($requisitions->invoicedate) ?></td>
                <td><?= h($requisitions->suppliername) ?></td>
                <td><?= h($requisitions->createddate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requisitions', 'action' => 'view', $requisitions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requisitions', 'action' => 'edit', $requisitions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Requisitions', 'action' => 'delete', $requisitions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>