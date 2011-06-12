<div class="audioTracks form">
<?php echo $form->create('AudioTrack');?>
	<fieldset>
 		<legend><?php __('Add AudioTrack');?></legend>
	<?php
		echo $form->input('track_no');
		echo $form->input('title');
		echo $form->input('primary_performers');
		echo $form->input('primary_instruments');
		echo $form->input('genre');
		echo $form->input('duration');
		echo $form->input('performance_date');
		echo $form->input('composer');
		echo $form->input('copyright_start_date');
		echo $form->input('copyright_holder');
		echo $form->input('comments');
		echo $form->input('digital_artefact_link');
		echo $form->input('synonyms');
		echo $form->input('keywords');
		echo $form->input('audio_album_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AudioTracks', true), array('action'=>'index'));?></li>
	</ul>
</div>
