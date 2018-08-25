<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $services
 */
?>
<div class="row top-header-inner">
<div class="col-md-3">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Service'), ['controller' => 'Services', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-md-9">
    <h3><?= __('Services') ?></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><?= ('id') ?></th>
                <th><?= ('name') ?></th>
                <th><?= ('account_type_id') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
            <tr>
                <td><?= $this->Number->format($service->id) ?></td>
                <td><?= h($service->name) ?></td>
                <td><?= $service->has('account_type') ? $this->Html->link($service->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $service->account_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
