<div class="submitAssignments form">
<?php echo $this->Form->create('SubmitAssignment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Submit Assignment'); ?></legend>
	<?php
		echo $this->Form->input('submit_id');
		echo $this->Form->input('assignment_id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('date_submit');
		echo $this->Form->input('file_content');
		echo $this->Form->input('file_name');
		echo $this->Form->input('file_size');
		echo $this->Form->input('file_type');
		echo $this->Form->input('comment');
		echo $this->Form->input('desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubmitAssignment.submit_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubmitAssignment.submit_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Submit Assignments'), array('action' => 'index')); ?></li>
	</ul>
</div>
