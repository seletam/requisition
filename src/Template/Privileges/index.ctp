<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilege[]|\Cake\Collection\CollectionInterface $privileges
 */
?>
<div class="row top-header-inner">
<div class="col-md-12">
    <h3><?= __('Privileges') ?></h3>
    <table class="table table-bordered">
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
