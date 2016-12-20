<link href="<?php echo osc_base_url().'oc-content/plugins/responsive_slides/admin/admin.css'; ?>" rel="stylesheet" type="text/css" />
<div class="rslides_menu">
	<ul>
		<li><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/create.php"); ?>"><?php _e('Create', 'rslides'); ?></a></li>
		<li class="active"><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/list.php"); ?>"><?php _e('Manage', 'rslides'); ?></a></li>
		<li><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/settings.php"); ?>"><?php _e('Settings', 'rslides'); ?></a></li>
		<li><a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/help.php"); ?>"><?php _e('Help', 'rslides'); ?></a></li>
	</ul>
</div>

<div class="rslides_content">
	<h2 class="render-title"><?php _e('Manage Slides','rslides'); ?></h2>
	<table cellspacing="0" cellpadding="0" class="table">
		<thead>
			<tr>
				<th class="col-bulkactions"><?php _e('ID','rslides'); ?></th>
				<th class="col-file"><?php _e('File','rslides'); ?></th>
				<th class="col-action"><?php _e('Action','rslides'); ?></th>
				<th class="col-caption"><?php _e('Caption','rslides'); ?></th>
				<th class="col-description"><?php _e('Description','rslides'); ?></th>
				<th class="col-link"><?php _e('Link to URL','rslides'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php $slides = ModelSlides::newInstance()->getSlides(); ?>
			<?php foreach($slides as $slide) { ?>
			<tr>
				<td><?php echo $slide['id']; ?></td>
				<td class="col-file">
					<div class="image_preview">
						<img src="<?php echo osc_base_url().'oc-content/plugins/responsive_slides/media/'.$slide['uniqname']; ?>" width="200">
					</div>
					<div class="image_name"><?php echo $slide['imagename']; ?></div>
				</td>
				<td>
					<a href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/edit.php").'?actions=edit&id='.$slide['id']; ?>"><?php _e('Edit', 'rslides'); ?></a> | 
					<a onclick="javascript:return confirm('<?php _e('This action can not be undone. Are you sure you want to continue?', 'rslides'); ?>')" href="<?php echo osc_admin_render_plugin_url("responsive_slides/admin/edit.php").'?actions=delete&id='.$slide['id']; ?>"><?php _e('Delete' ,'rslides'); ?></a>
				</td>
				<td><?php echo $slide['caption']; ?></td>
				<td><?php echo $slide['description']; ?></td>
				<td><?php echo $slide['link']; ?></td>		
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>