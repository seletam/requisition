<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Budget $budget
 */
?>
<div class="card mb-3">
        <div class="card-header">Edit Budget</div>
        <div class="card-body">
    <?= $this->Form->create($budget) ?>
    <fieldset>
        <?php
			echo $this->Form->control('fiscal_id', ['options' => $fiscals, 'empty' => true]);
			echo $this->Form->control('service_id', ['options' => $services, 'empty' => true]);
            echo $this->Form->control('amount');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>