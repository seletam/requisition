<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<div class="card mb-3">
        <div class="card-header">View</div>
        <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($account->name) ?></td>
        </tr>
    </table>
	
    <?php if (!empty($account->child_accounts)): ?>
    <div class="table">
	<h4>Sub account(s)</h4>
        <table class="table table-bordered">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th><?= __('Name') ?></th>
                <!--<th><?= __('Actions') ?></th>-->
            </tr>
            <?php foreach ($account->child_accounts as $childAccounts): ?>
            <tr>
                <!--<td><?= h($childAccounts->id) ?></td>-->
                <td><?= h($childAccounts->name) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Accounts', 'action' => 'view', $childAccounts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Accounts', 'action' => 'edit', $childAccounts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accounts', 'action' => 'delete', $childAccounts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childAccounts->id)]) ?>
                </td>-->
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>