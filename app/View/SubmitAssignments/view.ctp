<div class="submitAssignments view">
<h2><?php  echo __('Submit Assignment'); ?></h2>
	<dl>
		<dt><?php echo __('Submit Id'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['submit_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment Id'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['assignment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Id'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['student_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Submit'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['date_submit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Content'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['file_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Type'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['file_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($submitAssignment['SubmitAssignment']['desc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submit Assignment'), array('action' => 'edit', $submitAssignment['SubmitAssignment']['submit_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submit Assignment'), array('action' => 'delete', $submitAssignment['SubmitAssignment']['submit_id']), null, __('Are you sure you want to delete # %s?', $submitAssignment['SubmitAssignment']['submit_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submit Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submit Assignment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
