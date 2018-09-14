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
                      <th scope="col"><?= $this->Paginator->sort('#') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Effective Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($fiscals as $fiscal): ?>
            <tr>
                <td><?= $this->Number->format($fiscal->id) ?></td>
                <td><?= h($fiscal->name) ?></td>
                <td><?= h($fiscal->financialyear) ?></td>
                <td><?= h($fiscal->effdate) ?></td>
                <td><?= h($fiscal->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fiscal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fiscal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fiscal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiscal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>