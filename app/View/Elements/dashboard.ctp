<div id="dashboad" class="index">
    <ul class="dashboard_menu">
	<?php if ($userlogin != "" && $userrole == 2) { ?>
        <li class="assignments"><?php echo $this->Html->link('View Assignments', array('controller' => 'assignments', 'action' => 'view_assignment'), array('class' => 'button')); ?></li>
        <li class="courses"><?php echo $this->Html->link('Submit Assignment', array('controller' => 'courses', 'action' => 'select_course'), array('class' => 'button')); ?></li>
		<?php }?>
		<?php if ($userlogin != "" && $userrole == 1) { ?>
		 <li class="assignments"><?php echo $this->Html->link('View Assignments', array('controller' => 'assignments', 'action' => 'index'), array('class' => 'button')); ?></li>
		 <li class="submitassignments"><?php echo $this->Html->link('View Submitted Assignments', array('controller' => 'submitassignments', 'action' => 'submitted_assign'), array('class' => 'button')); ?></li>
        <li class="courses"><?php echo $this->Html->link('Add New Assignment', array('controller' => 'assignments', 'action' => 'add'), array('class' => 'button')); ?></li>
		<?php }?>
    </ul>
</div>