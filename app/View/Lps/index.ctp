<div class="lps index">
	<h2><?php echo __('Lps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('template_id'); ?></th>
			<th><?php echo $this->Paginator->sort('metadata'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('published'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lps as $lp): ?>
	<tr>
		<td><?php echo h($lp['Lp']['id']); ?>&nbsp;</td>
		<td><?php echo h($lp['Lp']['name']); ?>&nbsp;</td>
		<td><?php echo h($lp['Lp']['url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lp['Template']['name'], array('controller' => 'templates', 'action' => 'view', $lp['Template']['id'])); ?>
		</td>
		<td><?php echo h($lp['Lp']['metadata']); ?>&nbsp;</td>
		<td><?php echo h($lp['Lp']['note']); ?>&nbsp;</td>
		<td><?php echo h($lp['Lp']['created']); ?>&nbsp;</td>
		<td><?php echo h($lp['Lp']['modified']); ?>&nbsp;</td>
		<td><?php echo h($lp['Lp']['published']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lp['Lp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lp['Lp']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lp['Lp']['id']), null, __('Are you sure you want to delete # %s?', $lp['Lp']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
