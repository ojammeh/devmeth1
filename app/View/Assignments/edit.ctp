<div class="assignments form">
<?php echo $this->Form->create('Assignment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assignment'); ?></legend>
	<?php
		echo $this->Form->input('assignment_id');
		echo $this->Form->input('assignment_name');
		echo $this->Form->input('lecturer_id');
		echo $this->Form->input('desc');
		echo $this->Form->input('upload_date');
		echo $this->Form->input('due_date');
		echo $this->Form->input('file_content');
		echo $this->Form->input('file_name');
		echo $this->Form->input('file_type');
		echo $this->Form->input('file_size');
		echo $this->Form->input('course_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assignment.assignment_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Assignment.assignment_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('action' => 'index')); ?></li>
	</ul>
</div>
