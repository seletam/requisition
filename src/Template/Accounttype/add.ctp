<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountType $accountType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Account Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="accountType form large-9 medium-8 columns content">
    <?= $this->Form->create($accountType) ?>
    <fieldset>
        <legend><?= __('Add Account Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
