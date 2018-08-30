<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RequisitionsPayment $requisitionsPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $requisitionsPayment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $requisitionsPayment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Requisitions Payments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisitionsPayments form large-9 medium-8 columns content">
    <?= $this->Form->create($requisitionsPayment) ?>
    <fieldset>
        <legend><?= __('Edit Requisitions Payment') ?></legend>
        <?php
            echo $this->Form->control('payment_id', ['options' => $payments, 'empty' => true]);
            echo $this->Form->control('requisition_id', ['options' => $requisitions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
