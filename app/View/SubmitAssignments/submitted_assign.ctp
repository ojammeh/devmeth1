<div class="submitAssignments index">
	<h2><?php echo __('Submit Assignments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php // echo $this->Paginator->sort('submit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assignment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_submit'); ?></th>
			<th><?php // echo $this->Paginator->sort('file_content'); ?></th>
			<th><?php echo $this->Paginator->sort('file_name'); ?></th>
		<!--<th><?php echo $this->Paginator->sort('file_size'); ?></th>
			<th><?php echo $this->Paginator->sort('file_type'); ?></th> -->
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th> 
	</tr>
	<?php
	foreach ($submitAssignments as $submitAssignment): ?>
	<tr>
		<td><?php // echo h($submitAssignment['SubmitAssignment']['submit_id']); ?>&nbsp;</td>
		<td><?php echo h($submitAssignment['SubmitAssignment']['assignment_id']); ?>&nbsp;</td>
		<td><?php echo h($submitAssignment['SubmitAssignment']['student_id']); ?>&nbsp;</td>
		<td><?php echo h($submitAssignment['SubmitAssignment']['date_submit']); ?>&nbsp;</td>
		<td><?php // echo h($submitAssignment['SubmitAssignment']['file_content']); ?>&nbsp;</td>
		<td><?php  echo h($submitAssignment['SubmitAssignment']['file_name']); ?>&nbsp;</td>
		<!--<td><?php // echo h($submitAssignment['SubmitAssignment']['file_size']); ?>&nbsp;</td>
		<td><?php // echo h($submitAssignment['SubmitAssignment']['file_type']); ?>&nbsp;</td>-->
		<td><?php echo h($submitAssignment['SubmitAssignment']['comment']); ?>&nbsp;</td>
		<td><?php echo h($submitAssignment['SubmitAssignment']['desc']); ?>&nbsp;</td>

		<td class="actions">
		<?php  echo $this->Html->link(__('Download'), array('action' => 'download', $submitAssignment['SubmitAssignment']['assignment_id'])); ?>
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $submitAssignment['SubmitAssignment']['submit_id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $submitAssignment['SubmitAssignment']['submit_id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submitAssignment['SubmitAssignment']['submit_id']), null, __('Are you sure you want to delete # %s?', $submitAssignment['SubmitAssignment']['submit_id'])); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total.')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('New Submit Assignment'), array('action' => 'add')); ?></li>
	</ul>
</div>
