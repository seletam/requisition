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
    <h3><?= h($account->name) ?></h3>
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($account->name) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Sub accounts') ?></h4>
        <?php if (!empty($account->child_accounts)): ?>
        <table class="table table-bordered">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th><?= __('Name') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($account->child_accounts as $childAccounts): ?>
            <tr>
                <!--<td><?= h($childAccounts->id) ?></td>-->
                <td><?= h($childAccounts->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $childAccounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $childAccounts->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $childAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childAccounts->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>