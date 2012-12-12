<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'eAssignment');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('cake.generic', 'menu')); //'cake.generic', 'form', 'base',
     //   echo $this->Html->script(array('jquery-1.7.1.min', 'jquery-ui-1.8.16.custom.min', //'jquery/jquery.custom.file.input.js', 'jquery/jquery.form'));
		
		echo $this->Html->css(array('cake.generic', 'menu','jquery.ui.all.css')); //'cake.generic', 'form', 'base',
        echo $this->Html->script(array('jquery/jquery-ui-1.9.2.custom.min.js','jquery/ui/jquery.ui.core.js', 'jquery/ui/jquery.ui.widget.js', 'jquery/ui/jquery.ui.tabs.js'));
        echo $scripts_for_layout;
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>eAssignment</h1>
			<!--<?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?> -->
		</div>
		
		           <div id="header">

                <div id="top">
                    <div class="right">
                        <ul class="menu">
         <?php if ($userlogin != "" && $userrole == 1) { ?>	  
		 <li><?php	echo $this->Html->link('Dashboard', array('controller' => '/', 'action' => ''), array('class' => 'button')); ?></li>
		 <li><?php echo $this->Html->link('View Submitted Assignment', array('controller' => 'submitassignments', 'action' => 'submitted_assign'), array('class' => 'button')); ?></li>
         <li><?php echo $this->Html->link('Create New Assignment', array('controller' => 'assignments', 'action' => 'add'), array('class' => 'button')); ?></li>
		<li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('class' => 'button')); ?></li> 
		<?php } ?>
		 <?php if ($userlogin != "" && $userrole == 2) { ?>
		
		<li><?php echo $this->Html->link('Dashboard', array('controller' => '/', 'action' => ''), array('class' => 'button')); ?></li>
		<li><?php echo $this->Html->link('My Assignments', array('controller' => 'assignments', 'action' => 'view_assignment'), array('class' => 'button')); ?></li>
		<li><?php echo $this->Html->link('Submit Assignments', array('controller' => 'courses', 'action' => 'select_course'), array('class' => 'button')); ?></li>
		<li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('class' => 'button')); ?></li> 
		
		 <?php } ?>
                        </ul>

                    </div>
                </div>
<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		<!--	<?php  echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?> -->
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
