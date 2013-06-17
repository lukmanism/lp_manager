<div class="templates form">
<?php echo $this->Form->create('Template'); ?>
	<fieldset>
		<legend><?php echo __('Add Template'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('html');
		echo $this->Form->input('css');
		echo $this->Form->input('js');
		echo $this->Form->input('library_id');
		echo $this->Form->input('imagepath');
		echo $this->Form->input('version');
		echo $this->Form->input('note');
		echo $this->Form->input('published');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Libraries'), array('controller' => 'libraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lps'), array('controller' => 'lps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lp'), array('controller' => 'lps', 'action' => 'add')); ?> </li>
	</ul>
</div>
