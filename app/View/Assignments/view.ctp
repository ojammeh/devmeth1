<div class="assignments view">
<h2><?php  echo __('Assignment'); ?></h2>
	<dl>
		<dt><?php echo __('Assignment Id'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment Name'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lecturer Id'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['lecturer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upload Date'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['upload_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due Date'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Content'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['file_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Type'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['file_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Id'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['course_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assignment'), array('action' => 'edit', $assignment['Assignment']['assignment_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assignment'), array('action' => 'delete', $assignment['Assignment']['assignment_id']), null, __('Are you sure you want to delete # %s?', $assignment['Assignment']['assignment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
