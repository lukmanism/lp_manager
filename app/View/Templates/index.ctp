<div class="templates index">
	<h2><?php echo __('Templates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('html'); ?></th>
			<th><?php echo $this->Paginator->sort('css'); ?></th>
			<th><?php echo $this->Paginator->sort('js'); ?></th>
			<th><?php echo $this->Paginator->sort('library_id'); ?></th>
			<th><?php echo $this->Paginator->sort('imagepath'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('published'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($templates as $template): ?>
	<tr>
		<td><?php echo h($template['Template']['id']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['name']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['html']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['css']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['js']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($template['Library']['name'], array('controller' => 'libraries', 'action' => 'view', $template['Library']['id'])); ?>
		</td>
		<td><?php echo h($template['Template']['imagepath']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['version']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['note']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['created']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['modified']); ?>&nbsp;</td>
		<td><?php echo h($template['Template']['published']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $template['Template']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $template['Template']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $template['Template']['id']), null, __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('controller' => 'libraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lps'), array('controller' => 'lps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lp'), array('controller' => 'lps', 'action' => 'add')); ?> </li>
	</ul>
</div>
