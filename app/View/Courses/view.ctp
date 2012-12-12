    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
 <script type="text/javascript">
           $(function() {
               $("#tabs").tabs({
            ajaxOptions: {
                error: function( xhr, status, index, anchor ) {
                    $( anchor.hash ).html(
                    "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                        "If this wouldn't be a demo." );
                }
            }
        });
           });
 </script>

<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Course Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['course_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['course_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($course['Course']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['course_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['course_id']), null, __('Are you sure you want to delete # %s?', $course['Course']['course_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
	</ul>
</div>    
 -->
    </div>
    
<div id="tabs" class="ui-tabs-nav">
	<ul>
  <li><?php echo $this->Html->link(__('Assignments'), array('controller' => 'assignments', 'action' => 'index_limit', $course['Course']['course_id'])); ?></li>
	</ul>

</div>

<!--
<script>
    $(function() {
        $( "#tabs" ).tabs({
            ajaxOptions: {
                error: function( xhr, status, index, anchor ) {
                    $( anchor.hash ).html(
                    "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                        "If this wouldn't be a demo." );
                }
            }
        });
    });
</script>

<style>
    #tabs {
        display: block;
        float:left;
        width:100%;

    }
    .ui-tabs-panel {
      float:left;  
    }
    
    .ui-tabs {
    padding-top: 2px;
}
</style>
-->
