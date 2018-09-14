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
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('name') ?></th>
					<th scope="col"><?= $this->Paginator->sort('account_type_id') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				   </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($services as $service): ?>
					<tr>
						<td><?= $this->Number->format($service->id) ?></td>
						<td><?= h($service->name) ?></td>
						<td><?= h($service->account_type->name) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
							<?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
							<!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>-->
						</td>
					</tr>
					<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>