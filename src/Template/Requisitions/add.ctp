<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisition $requisition
 */
?>
<div class="card mb-3">
    <div class="card-header">Add Requisition</div>
    <div class="card-body">
    <?= $this->Form->create($requisition) ?>
    <fieldset>
        <?php
            echo $this->Form->control('regnumber');
            echo $this->Form->control('reqnumber');
            echo $this->Form->control('request');
            echo $this->Form->control('service_id', ['options' => $services, 'empty' => true]);
            echo $this->Form->control('invoiceno');
            //echo $this->Form->control('invoicedate');
            echo $this->Form->control('suppliername');
			//echo $this->Form->control('createddate'); 
            echo $this->Form->hidden('payments._ids');
			echo $this->Form->control('payments.chequeno');
            /*echo $this->Form->control('payments.1.amount');
            echo $this->Form->control('payments.2.documentnumber');
            echo $this->Form->control('payments.3.narration');
            echo $this->Form->control('payments.4.collectedby');
            echo $this->Form->hidden('requisition._ids');*/
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>