<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
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
                <th scope="col"><?= __('id') ?></th>
                <th scope="col"><?= __('firstname') ?></th>
                <th scope="col"><?= __('lastname') ?></th>
                <th scope="col"><?= __('employeeid') ?></th>
                <!--<th scope="col"><?= __('username') ?></th>-->
                <th scope="col"><?= __('email') ?></th>
                <th scope="col"><?= __('department_id') ?></th>
                <!--<th scope="col"><?= __('createddate') ?></th>-->
                <th scope="col"><?= __('Role') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('password') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->id) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->employeeid) ?></td>
                <!--<td><?= h($user->username) ?></td>-->
                <td><?= h($user->email) ?></td>
                <td><?= h($user->department->name) ?></td>
                <!--<td><?= h($user->createddate) ?></td>-->
                <td><?= h($user->privilege->name) ?></td>
                <!--<td><?= h($user->password) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>