<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Income $income
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $income->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Income'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="income form large-9 medium-8 columns content">
    <?= $this->Form->create($income) ?>
    <fieldset>
        <legend><?= __('Edit Income') ?></legend>
        <?php
            echo $this->Form->control('income_type_id', ['options' => $accountTypes, 'empty' => true]);
            echo $this->Form->control('Amount');
            echo $this->Form->control('services_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
