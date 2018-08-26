<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>

<div class="row top-header-inner">
<div class="col-md-3">
    <ul class="list-group">
        <li class="active"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Account Type'), ['controller' => 'Accounts', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-md-9">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Edit Account') ?></legend>
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
