<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FinancialYear $financialYear
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Financial Year'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="financialYear form large-9 medium-8 columns content">
    <?= $this->Form->create($financialYear) ?>
    <fieldset>
        <legend><?= __('Add Financial Year') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('financialyear', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
