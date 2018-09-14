<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Budget $budget
 */
?>
<div class="card mb-3">
        <div class="card-header">View</div>
        <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= h($budget->service->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fiscal') ?></th>
            <td><?= h($budget->fiscal->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->currency($budget->amount, 'ZAR') ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($budget->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($budget->created) ?></td>
        </tr>
    </table>
</div>
</div>