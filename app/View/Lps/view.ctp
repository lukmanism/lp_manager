<div class="lps view">
<h2><?php  echo __('Lp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lp['Template']['name'], array('controller' => 'templates', 'action' => 'view', $lp['Template']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metadata'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['metadata']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($lp['Lp']['published']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lp'), array('action' => 'edit', $lp['Lp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lp'), array('action' => 'delete', $lp['Lp']['id']), null, __('Are you sure you want to delete # %s?', $lp['Lp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
