<div class="lps form">
<?php echo $this->Form->create('Lp'); ?>
	<fieldset>
		<legend><?php echo __('Add Lp'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('template_id');
		echo $this->Form->input('metadata');
		echo $this->Form->input('note');
		echo $this->Form->input('published');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
