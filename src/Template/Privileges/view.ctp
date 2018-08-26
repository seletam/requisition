<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilege $privilege
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Privilege'), ['action' => 'edit', $privilege->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Privilege'), ['action' => 'delete', $privilege->id], ['confirm' => __('Are you sure you want to delete # {0}?', $privilege->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Privileges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Privilege'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="privileges view large-9 medium-8 columns content">
    <h3><?= h($privilege->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($privilege->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($privilege->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Superadmin') ?></th>
            <td><?= $this->Number->format($privilege->is_superadmin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($privilege->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Menu') ?></h4>
        <?php if (!empty($privilege->menu)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Privilege Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($privilege->menu as $menu): ?>
            <tr>
                <td><?= h($menu->id) ?></td>
                <td><?= h($menu->name) ?></td>
                <td><?= h($menu->type) ?></td>
                <td><?= h($menu->path) ?></td>
                <td><?= h($menu->is_active) ?></td>
                <td><?= h($menu->privilege_id) ?></td>
                <td><?= h($menu->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Menu', 'action' => 'view', $menu->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Menu', 'action' => 'edit', $menu->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menu', 'action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($privilege->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Is Create') ?></th>
                <th scope="col"><?= __('Is Read') ?></th>
                <th scope="col"><?= __('Is Edit') ?></th>
                <th scope="col"><?= __('Is Delete') ?></th>
                <th scope="col"><?= __('Privilege Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($privilege->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->is_create) ?></td>
                <td><?= h($roles->is_read) ?></td>
                <td><?= h($roles->is_edit) ?></td>
                <td><?= h($roles->is_delete) ?></td>
                <td><?= h($roles->privilege_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
