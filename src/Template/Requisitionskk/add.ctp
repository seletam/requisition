<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<div class="row top-header-inner">
<div class="col-md-3">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="col-md-9">
    <?= $this->Form->create($requisition) ?>
    <fieldset>
        <legend><?= __('Add Requisition') ?></legend>
        <?php
            echo $this->Form->control('pay_reg_number');
            echo $this->Form->control('req_number');
            echo $this->Form->control('request');
            echo $this->Form->control('service_id', ['options' => $services, 'empty' => true]);
            echo $this->Form->control('invoice_no');
            //echo $this->Form->control('invoice_date');
            echo $this->Form->control('supplier_name');
            echo $this->Form->control('cheque_no');
            echo $this->Form->control('amount');
            //echo $this->Form->control('cheque_date');
            echo $this->Form->control('document_number');
            echo $this->Form->control('narration');
            echo $this->Form->control('collected_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
