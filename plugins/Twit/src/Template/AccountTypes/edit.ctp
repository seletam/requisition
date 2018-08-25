<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountType $accountType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accountType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Account Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="accountTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($accountType) ?>
    <fieldset>
        <legend><?= __('Edit Account Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
