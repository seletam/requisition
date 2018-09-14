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
                <th scope="col"><?= $this->Paginator->sort('fiscal name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($budget as $budget): ?>
            <tr>
                <td><?= $this->Number->format($budget->id) ?></td>
                <td><?= h($budget->fiscal->name) ?></td>
                <td><?= h($budget->service->name) ?></td>
                <td><?= $this->Number->format($budget->amount) ?></td>
                <td><?= $this->Number->format($budget->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $budget->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $budget->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $budget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>