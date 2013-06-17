<div class="libraries view">
<h2><?php  echo __('Library'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($library['Library']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($library['Library']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($library['Library']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($library['Library']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($library['Library']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($library['Library']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($library['Library']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($library['Library']['published']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Library'), array('action' => 'edit', $library['Library']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Library'), array('action' => 'delete', $library['Library']['id']), null, __('Are you sure you want to delete # %s?', $library['Library']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Templates'); ?></h3>
	<?php if (!empty($library['Template'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Html'); ?></th>
		<th><?php echo __('Css'); ?></th>
		<th><?php echo __('Js'); ?></th>
		<th><?php echo __('Library Id'); ?></th>
		<th><?php echo __('Imagepath'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($library['Template'] as $template): ?>
		<tr>
			<td><?php echo $template['id']; ?></td>
			<td><?php echo $template['name']; ?></td>
			<td><?php echo $template['html']; ?></td>
			<td><?php echo $template['css']; ?></td>
			<td><?php echo $template['js']; ?></td>
			<td><?php echo $template['library_id']; ?></td>
			<td><?php echo $template['imagepath']; ?></td>
			<td><?php echo $template['version']; ?></td>
			<td><?php echo $template['note']; ?></td>
			<td><?php echo $template['created']; ?></td>
			<td><?php echo $template['modified']; ?></td>
			<td><?php echo $template['published']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'templates', 'action' => 'delete', $template['id']), null, __('Are you sure you want to delete # %s?', $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
