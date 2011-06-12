<div class="photographs form">
<?php echo $form->create('Photograph');?>
	<fieldset>
 		<legend><?php __('Edit Photograph');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('oac_ref_no');
		echo $form->input('photo_type_id');
		echo $form->input('specified_photo_type');
		echo $form->input('collection_title');
		echo $form->input('source');
		echo $form->input('aquisition_date');
		echo $form->input('title');
		echo $form->input('photographer');
		echo $form->input('camera');
		echo $form->input('subject_detail');
		echo $form->input('date_taken');
		echo $form->input('copies');
		echo $form->input('copyright_start_date');
		echo $form->input('copyright_holder');
		echo $form->input('location');
		echo $form->input('comments');
		echo $form->input('engineer');
		echo $form->input('digital_size');
		echo $form->input('equipment');
		echo $form->input('software_package');
		echo $form->input('digital_artefact_link');
		echo $form->input('oac_url');
		echo $form->input('audio_album_id');
		echo $form->input('compiler_id');
		echo $form->input('keywords');
		echo $form->input('specified_compiler');
		echo $form->input('login_level_id');
		echo $form->input('document_id');
		echo $form->input('video_album_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Photograph.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Photograph.id'))); ?></li>
		<li><?php echo $html->link(__('List Photographs', true), array('action'=>'index'));?></li>
	</ul>
</div>
