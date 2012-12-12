<div class="assignments form">
<?php echo $this->Form->create('Assignment', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Assignment'); ?></legend>
	<?php
		echo $this->Form->input('assignment_name');
		echo $this->Form->input('lecturer_id', array('type' => 'hidden'));
		echo $this->Form->input('desc', array('type' => 'textarea','label'=>'Description', 'escape' => false));
		echo $this->Form->input('upload_date');
		echo $this->Form->input('due_date');
		echo $this->Form->input('file_content', array('type'=>'file', 'label'=>'Attach File'));
		echo $this->Form->input('file_name', array('type' => 'hidden'));
		echo $this->Form->input('file_type', array('type' => 'hidden'));
		echo $this->Form->input('file_size', array('type' => 'hidden'));
		//echo $this->Form->input('course_id', array('type' => 'hidden'));
		echo $this->Form->input('course_id',array('label'=>'Module',
            'options' => array(''=>'','1' => 'Development Meth', '2' => 'Advance Database')
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assignments'), array('action' => 'index')); ?></li>
	</ul>
</div>
