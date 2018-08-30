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
    <?= $this->Form->create($requisition) ?>
    <fieldset>
        <legend><?= __('Edit Requisition') ?></legend>
        <?php
            echo $this->Form->control('regnumber');
            echo $this->Form->control('reqnumber');
            echo $this->Form->control('request');
            echo $this->Form->control('service_id', ['options' => $services, 'empty' => true]);
            echo $this->Form->control('invoiceno');
            echo $this->Form->control('invoicedate');
            echo $this->Form->control('suppliername');
            echo $this->Form->control('createddate');
            echo $this->Form->control('payments._ids', ['options' => $payments]);
            echo $this->Form->control('requisitions._ids', ['options' => $requisitions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
