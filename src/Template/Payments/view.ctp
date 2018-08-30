<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
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
    <h3><?= h($payment->id) ?></h3>
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Chequeno') ?></th>
            <td><?= h($payment->chequeno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= h($payment->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documentnumber') ?></th>
            <td><?= h($payment->documentnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collectedby') ?></th>
            <td><?= h($payment->collectedby) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chequedate') ?></th>
            <td><?= h($payment->chequedate) ?></td>
        </tr>
    </table>
    
		<h4><?= __('Narration') ?></h4>
        <?= $this->Text->autoParagraph(h($payment->narration)); ?>
    
        
        <?php if (!empty($payment->requisitions)): ?>
		<h4><?= __('Related Requisitions') ?></h4>
        <table class="table table-bordered">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Regnumber') ?></th>
                <th scope="col"><?= __('Reqnumber') ?></th>
                <th scope="col"><?= __('Request') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Invoiceno') ?></th>
                <th scope="col"><?= __('Suppliername') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($payment->requisitions as $requisitions): ?>
            <tr>
                <td><?= h($requisitions->id) ?></td>
                <td><?= h($requisitions->regnumber) ?></td>
                <td><?= h($requisitions->reqnumber) ?></td>
                <td><?= h($requisitions->request) ?></td>
                <td><?= h($requisitions->service_id) ?></td>
                <td><?= h($requisitions->invoiceno) ?></td>
                <td><?= h($requisitions->suppliername) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requisitions', 'action' => 'view', $requisitions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requisitions', 'action' => 'edit', $requisitions->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Requisitions', 'action' => 'delete', $requisitions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitions->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>