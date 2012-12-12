<div class="assignments index">
	<h2><?php echo __('Assignments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php // echo $this->Paginator->sort('assignment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assignment_name'); ?></th>
			<th><?php echo $this->Paginator->sort('lecturer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php // echo $this->Paginator->sort('upload_date'); ?></th>
			<th><?php echo $this->Paginator->sort('due_date'); ?></th>
			<th><?php  //echo $this->Paginator->sort('file_content'); ?></th>
			<th><?php  echo $this->Paginator->sort('file_name'); ?></th>
			<th><?php // echo $this->Paginator->sort('file_type'); ?></th>
			<th><?php echo $this->Paginator->sort('file_size'); ?></th>
			<th><?php // echo $this->Paginator->sort('course_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($assignments as $assignment): ?>
	<tr>
		<td><?php // echo h($assignment['Assignment']['assignment_id']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['assignment_name']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['lecturer_id']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['desc']); ?>&nbsp;</td>
		<td><?php // echo h($assignment['Assignment']['upload_date']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['due_date']); ?>&nbsp;</td>
		<td><?php //echo h($assignment['Assignment']['file_content']); ?>&nbsp;</td>
		<td><?php  echo h($assignment['Assignment']['file_name']); ?>&nbsp;</td>
		<td><?php // echo h($assignment['Assignment']['file_type']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['file_size']); ?>&nbsp;</td>
		<td><?php // echo h($assignment['Assignment']['course_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $assignment['Assignment']['assignment_id'])); ?>
			<?php  echo $this->Html->link(__('Download'), array('action' => 'download', $assignment['Assignment']['assignment_id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $assignment['Assignment']['assignment_id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assignment['Assignment']['assignment_id']), null, __('Are you sure you want to delete # %s?', $assignment['Assignment']['assignment_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}.')
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
		<li><?php // echo $this->Html->link(__('New Assignment'), array('action' => 'add')); ?></li>
	</ul>
</div>
