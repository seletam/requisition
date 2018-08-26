<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row top-header-inner">
<div class="col-md-3">
<?php $i = 0;
			foreach ($resources as $resource): ?>
			<?php foreach ($resource as $resourcer): ?>
				<?php $index = key($resource) ?>
		<ul class="list-group">			
				<li><?= $index ?></li>
				<ul>
				<?php for($i=0;$i<count($resourcer);$i++){ ?>
					<li><?= $this->Html->link(__($resourcer[$i]), ['controller' => $index, 'action' => $resourcer[$i]]) ?></li>
					 <!--<li><a href="<?=$index . '/' . $resourcer[$i] ?>"><?= $resourcer[$i] ?></a></li>-->
					 
				<?php }
				?>
				</ul>
			<?php $i++; endforeach; ?>
			<?php  endforeach; ?>
    </ul>
</div>
</div>