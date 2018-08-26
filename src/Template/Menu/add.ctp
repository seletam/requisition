<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Privileges'), ['controller' => 'Privileges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Privilege'), ['controller' => 'Privileges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menu form large-9 medium-8 columns content">
    <?= $this->Form->create($menu) ?>
    <fieldset>
        <legend><?= __('Add Menu') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('type');
            echo $this->Form->control('path');
            echo $this->Form->control('is_active');
            echo $this->Form->control('module', ['options' => $controllers, 'empty' => true);
            echo $this->Form->control('privilege_id', ['options' => $privileges, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
