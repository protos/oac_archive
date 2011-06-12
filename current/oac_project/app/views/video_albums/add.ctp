<?php echo($javascript->link("jquery.js")); ?>
<?php echo($javascript->link("oac.js")); ?>
<?php echo($html->css("oac.css")); ?> 

<div class="videoAlbums form">
<?php echo $form->create('VideoAlbum');?>
	<fieldset>
 		<legend><?php __('Add VideoAlbum');?></legend>
		<?php echo $form->input('video_type_id', array('id' => 'record_type_select')); ?>
		<?php echo '<div id="record_type">' . $form->input('specified_video_type') . '</div>'; ?>		
	
		<?php
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
			echo $form->input('compiler_id', array ('id' => 'other_compiler_select'));				
		?>
		<?php echo '<div id="other_compiler">' . $form->input('specified_compiler') . '</div>'; ?>		
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List VideoAlbums', true), array('action'=>'index'));?></li>
	</ul>
</div>
