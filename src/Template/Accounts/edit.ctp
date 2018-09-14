<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<div class="card mb-3">
    <div class="card-header">Edit Account</div>
    <div class="card-body">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('account_type_id', ['options' => $accountTypes, 'empty' => true]);
            echo $this->Form->control('parent_id', ['options' => $parentAccounts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
