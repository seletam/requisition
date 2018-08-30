<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<div class="row">
<div class="col-md-3 top-header-inner">
    <ul class="list-group">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-md-9">
    <h3><?= h($requisition->id) ?></h3>
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Pay Reg Number') ?></th>
            <td><?= h($requisition->pay_reg_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Req Number') ?></th>
            <td><?= h($requisition->req_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $requisition->service->name ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice No') ?></th>
            <td><?= h($requisition->invoice_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier Name') ?></th>
            <td><?= h($requisition->supplier_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($requisition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Date') ?></th>
            <td><?= h($requisition->invoice_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($requisition->created_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Request') ?></h4>
        <?= $this->Text->autoParagraph(h($requisition->request)); ?>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-9">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($requisition->payments)): ?>
        <table class="table table-bordered">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cheque No') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Cheque Date') ?></th>
                <th scope="col"><?= __('Document Number') ?></th>
                <th scope="col"><?= __('Narration') ?></th>
                <th scope="col"><?= __('Collected By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($requisition->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->cheque_no) ?></td>
                <td><?= h($payments->amount) ?></td>
                <td><?= h($payments->cheque_date) ?></td>
                <td><?= h($payments->document_number) ?></td>
                <td><?= h($payments->narration) ?></td>
                <td><?= h($payments->collected_by) ?></td>
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
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-9">
        <h4><?= __('Related Requisitions') ?></h4>
        <?php if (!empty($requisition->requisitions)): ?>
        <table class="table table-bordered">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pay Reg Number') ?></th>
                <th scope="col"><?= __('Req Number') ?></th>
                <th scope="col"><?= __('Request') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Invoice No') ?></th>
                <th scope="col"><?= __('Invoice Date') ?></th>
                <th scope="col"><?= __('Supplier Name') ?></th>
                <th scope="col"><?= __('Created Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($requisition->requisitions as $requisitions): ?>
            <tr>
                <td><?= h($requisitions->id) ?></td>
                <td><?= h($requisitions->pay_reg_number) ?></td>
                <td><?= h($requisitions->req_number) ?></td>
                <td><?= h($requisitions->request) ?></td>
                <td><?= h($requisitions->service_id) ?></td>
                <td><?= h($requisitions->invoice_no) ?></td>
                <td><?= h($requisitions->invoice_date) ?></td>
                <td><?= h($requisitions->supplier_name) ?></td>
                <td><?= h($requisitions->created_date) ?></td>
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
</div>