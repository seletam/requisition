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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_superadmin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
                  </thead>
                          <tbody>
            <?php foreach ($privileges as $privilege): ?>
            <tr>
                <td><?= $this->Number->format($privilege->id) ?></td>
                <td><?= h($privilege->name) ?></td>
                <td><?= $this->Number->format($privilege->is_superadmin) ?></td>
                <td><?= h($privilege->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $privilege->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $privilege->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $privilege->id], ['confirm' => __('Are you sure you want to delete # {0}?', $privilege->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
                </table>
              </div>
            </div>
          </div>