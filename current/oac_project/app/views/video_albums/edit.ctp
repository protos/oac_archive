<div class="videoAlbums form">
<?php echo $form->create('VideoAlbum');?>
	<fieldset>
 		<legend><?php __('Edit VideoAlbum');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('video_type_id');
		echo $form->input('specified_video_type');
		echo $form->input('oac_ref_no');
		echo $form->input('source');
		echo $form->input('date_acquired');
		echo $form->input('collection_title');
		echo $form->input('title');
		echo $form->input('description');
		echo $form->input('artists');
		echo $form->input('series');
		echo $form->input('label');
		echo $form->input('publishers_catalogue_no');
		echo $form->input('release_date');
		echo $form->input('recording_venue');
		echo $form->input('size');
		echo $form->input('duration');
		echo $form->input('director');
		echo $form->input('producer');
		echo $form->input('production_crew');
		echo $form->input('studio');
		echo $form->input('copyright_holder');
		echo $form->input('copyright_start_date');
		echo $form->input('artist_url');
		echo $form->input('comments');
		echo $form->input('keywords');
		echo $form->input('engineer');
		echo $form->input('equipment');
		echo $form->input('software_package');
		echo $form->input('oac_url');
		echo $form->input('specified_compiler');
		echo $form->input('digital_artefact_link');
		echo $form->input('audio_album_id');
		echo $form->input('login_level_id');
		echo $form->input('compiler_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('VideoAlbum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('VideoAlbum.id'))); ?></li>
		<li><?php echo $html->link(__('List VideoAlbums', true), array('action'=>'index'));?></li>
	</ul>
</div>
