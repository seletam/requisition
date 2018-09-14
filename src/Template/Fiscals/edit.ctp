<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiscal $fiscal
 */
?>
<div class="card mb-3">
        <div class="card-header">Edit Fiscal</div>
        <div class="card-body">
    <?= $this->Form->create($fiscal) ?>
    <fieldset>
        <legend><?= __('Edit Fiscal') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('financialyear');
            echo $this->Form->control('effdate', ['empty' => true]);
            echo $this->Form->control('active', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
