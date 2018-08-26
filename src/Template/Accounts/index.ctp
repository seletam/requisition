<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $accounts
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
    <h3><?= __('Accounts') ?></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>account type</th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->id) ?></td>
                <td><?= h($account->name) ?></td>
                <td><?= h($account->account_type->name) ?></td>
                <!--<td><?= $account->has('account_type') ? $this->Html->link($account->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $account->account_type->id]) : '' ?></td>-->
                <!--<td><?= $account->has('parent_account') ? $this->Html->link($account->parent_account->name, ['controller' => 'Accounts', 'action' => 'view', $account->parent_account->id]) : '' ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
