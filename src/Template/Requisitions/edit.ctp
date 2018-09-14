<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $requisition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $requisition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisitions form large-9 medium-8 columns content">
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
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
