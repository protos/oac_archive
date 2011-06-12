<div class="documents form">
<?php echo $form->create('Document');?>
	<fieldset>
 		<legend><?php __('Edit Document');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('oac_ref_no');
		echo $form->input('doc_type_id');
		echo $form->input('specified_doc_type');
		echo $form->input('collection_title');
		echo $form->input('source');
		echo $form->input('aquisition_date');
		echo $form->input('title');
		echo $form->input('edition');
		echo $form->input('authors');
		echo $form->input('contributors');
		echo $form->input('publisher');
		echo $form->input('publication_date');
		echo $form->input('isbn_issn');
		echo $form->input('series');
		echo $form->input('description');
		echo $form->input('doc_language_id');
		echo $form->input('subject');
		echo $form->input('copies');
		echo $form->input('location');
		echo $form->input('oac_url');
		echo $form->input('digital_size');
		echo $form->input('comments');
		echo $form->input('contents_page');
		echo $form->input('keywords');
		echo $form->input('copyright_start_date');
		echo $form->input('copyright_holder');
		echo $form->input('digital_artefact_link');
		echo $form->input('compiler_id');
		echo $form->input('specified_compiler');
		echo $form->input('video_album_id');
		echo $form->input('audio_album_id');
		echo $form->input('login_level_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Document.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Document.id'))); ?></li>
		<li><?php echo $html->link(__('List Documents', true), array('action'=>'index'));?></li>
	</ul>
</div>
