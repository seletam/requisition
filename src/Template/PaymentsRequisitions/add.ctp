<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentsRequisition $paymentsRequisition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Payments Requisitions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisitions'), ['controller' => 'Requisitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisition'), ['controller' => 'Requisitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentsRequisitions form large-9 medium-8 columns content">
    <?= $this->Form->create($paymentsRequisition) ?>
    <fieldset>
        <legend><?= __('Add Payments Requisition') ?></legend>
        <?php
            echo $this->Form->control('payment_id', ['options' => $payments, 'empty' => true]);
            echo $this->Form->control('requisition_id', ['options' => $requisitions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
