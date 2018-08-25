<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row top-header-inner">
<div class="col-md-3">
    <ul class="list-group">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Service'), ['controller' => 'Services', 'action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-md-9">
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
</div>
