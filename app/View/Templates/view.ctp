<div class="templates view">
<h2><?php  echo __('Template'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($template['Template']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($template['Template']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Html'); ?></dt>
		<dd>
			<?php echo h($template['Template']['html']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Css'); ?></dt>
		<dd>
			<?php echo h($template['Template']['css']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Js'); ?></dt>
		<dd>
			<?php echo h($template['Template']['js']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library'); ?></dt>
		<dd>
			<?php echo $this->Html->link($template['Library']['name'], array('controller' => 'libraries', 'action' => 'view', $template['Library']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagepath'); ?></dt>
		<dd>
			<?php echo h($template['Template']['imagepath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($template['Template']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($template['Template']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($template['Template']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($template['Template']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($template['Template']['published']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template'), array('action' => 'edit', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template'), array('action' => 'delete', $template['Template']['id']), null, __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('controller' => 'libraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lps'), array('controller' => 'lps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lp'), array('controller' => 'lps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lps'); ?></h3>
	<?php if (!empty($template['Lp'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Template Id'); ?></th>
		<th><?php echo __('Metadata'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($template['Lp'] as $lp): ?>
		<tr>
			<td><?php echo $lp['id']; ?></td>
			<td><?php echo $lp['name']; ?></td>
			<td><?php echo $lp['url']; ?></td>
			<td><?php echo $lp['template_id']; ?></td>
			<td><?php echo $lp['metadata']; ?></td>
			<td><?php echo $lp['note']; ?></td>
			<td><?php echo $lp['created']; ?></td>
			<td><?php echo $lp['modified']; ?></td>
			<td><?php echo $lp['published']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lps', 'action' => 'view', $lp['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lps', 'action' => 'edit', $lp['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lps', 'action' => 'delete', $lp['id']), null, __('Are you sure you want to delete # %s?', $lp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lp'), array('controller' => 'lps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
