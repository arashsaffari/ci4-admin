<h1><?php echo lang('Auth.create_group_heading');?></h1>
<p><?php echo lang('Auth.create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open();?>

	<p>
		<?php echo form_label(lang('Auth.create_group_name_label'), 'group_name');?> <br />
		<?php echo form_input($groupName);?>
	</p>

	<p>
		<?php echo form_label(lang('Auth.create_group_desc_label'), 'description');?> <br />
		<?php echo form_input($description);?>
	</p>

	<p><?php echo form_submit('submit', lang('Auth.create_group_submit_btn'));?></p>

<?php echo form_close();?>
