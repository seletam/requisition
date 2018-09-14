<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="card mb-3">
        <div class="card-header">View</div>
        <div class="card-body">
    <h3><?= h($service->name) ?></h3>
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($service->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Type') ?></th>
            <td><?= $service->has('account_type') ? $this->Html->link($service->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $service->account_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
    </table>
	<?php if (!empty($service->requisitions)): ?>
	<h4><?= __('Related') ?></h4>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Invoiceno') ?></th>
                <th scope="col"><?= __('Invoicedate') ?></th>
                <th scope="col"><?= __('Suppliername') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
             </tr>
                  </thead>
                  <tbody>
            <?php foreach ($service->requisitions as $requisitions): ?>
            <tr>
                <td><?= h($requisitions->id) ?></td>
                <td><?= h($requisitions->service_id) ?></td>
                <td><?= h($requisitions->invoiceno) ?></td>
                <td><?= h($requisitions->invoicedate) ?></td>
                <td><?= h($requisitions->suppliername) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requisitions', 'action' => 'view', $requisitions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requisitions', 'action' => 'edit', $requisitions->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Requisitions', 'action' => 'delete', $requisitions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitions->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
			</tbody>
		</table>
        <?php endif; ?>
    </div>
</div>
