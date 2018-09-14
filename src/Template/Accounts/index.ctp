<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiscal[]|\Cake\Collection\CollectionInterface $fiscals
 */
?>
<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
            </div>
          </div>