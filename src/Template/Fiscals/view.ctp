<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fiscal $fiscal
 */
?>
<div class="card mb-3">
        <div class="card-header">View</div>
        <div class="card-body">
	<?php 
		$actives = $fiscal->active;
		if($actives == '0'){
			$actives = "No";
		}else if($actives == '1'){
			$actives = "Yes";
		}
	?>	
	<h3><?= h($fiscal->name) ?></h3>
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fiscal->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($fiscal->financialyear) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Effective Date') ?></th>
            <td><?= h(date('Y-m-d H:i:s', strtotime($fiscal->effdate))) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= h($actives) ?></td>
        </tr>
    </table>
   <div class="table-responsive">
        <?php if (!empty($fiscal->budget)): ?>
        <h4><?= __('Related Budget') ?></h4>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fiscal name') ?></th>
                <th scope="col"><?= __('Service name') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <!--<th scope="col"><?= __('Created') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fiscal->budget as $budget): ?>
			<?php 
				$actived = $budget->active;
				if($actived == '0'){
					$actived = "No";
				}else if($actived == '1'){
					$actived = "Yes";
				}
			?>
            <tr>
                <td><?= h($budget->id) ?></td>
                <td><?= h($fiscal->name) ?></td>
                <td><?= h($budget->service->name) ?></td>
                <td><?= h($budget->amount) ?></td>
                <td><?= $actived ?></td>
                <!--<td><?= date('Y-m-d', strtotime($budget->created)) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Budget', 'action' => 'view', $budget->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Budget', 'action' => 'edit', $budget->id]) ?>
                    <!--<?= $this->Form->postLink(__('Delete'), ['controller' => 'Budget', 'action' => 'delete', $budget->id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
