<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="card mb-3">
    <div class="card-header">Add Service</div>
    <div class="card-body">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('account_type_id', ['options' => $accountTypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>