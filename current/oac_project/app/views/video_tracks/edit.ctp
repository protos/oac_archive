<div class="videoTracks form">
<?php echo $form->create('VideoTrack');?>
	<fieldset>
 		<legend><?php __('Edit VideoTrack');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('track_no');
		echo $form->input('title');
		echo $form->input('primary_performers');
		echo $form->input('primary_instruments');
		echo $form->input('genre');
		echo $form->input('duration');
		echo $form->input('composer');
		echo $form->input('performance_date');
		echo $form->input('copyright_holders');
		echo $form->input('copyright_start_date');
		echo $form->input('comments');
		echo $form->input('keywords');
		echo $form->input('digital_artefact_link');
		echo $form->input('video_album_id');
		echo $form->input('synonyms');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('VideoTrack.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('VideoTrack.id'))); ?></li>
		<li><?php echo $html->link(__('List VideoTracks', true), array('action'=>'index'));?></li>
	</ul>
</div>
