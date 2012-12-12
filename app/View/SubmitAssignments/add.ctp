<div class="submitAssignments form">
<?php echo $this->Form->create('SubmitAssignment', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Submit Assignment'); ?></legend>
	<?php
		echo $this->Form->input('assignment_id', array('type'=>'hidden'));
		echo $this->Form->input('student_id', array('type'=>'hidden'));
		echo $this->Form->input('date_submit');
		echo $this->Form->input('file_content', array('type'=>'file','enctype' => 'multipart/form-data','label'=>'Attach File'));
		echo $this->Form->input('file_name');
	//	echo $this->Form->input('file_size');
	//	echo $this->Form->input('file_type');
		echo $this->Form->input('comment');
		echo $this->Form->input('desc', array('type' => 'textarea','label'=>'Description', 'escape' => false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit Assignment')); ?>
</div>
<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Submit Assignments'), array('action' => 'index')); ?></li>
	</ul>
</div>
