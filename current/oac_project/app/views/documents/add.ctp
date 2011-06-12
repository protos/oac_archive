<?php echo($javascript->link("jquery.js")); ?>
<?php echo($javascript->link("oac.js")); ?>
<?php echo($html->css("oac.css")); ?> 

<div class="documents form">
<?php echo $form->create('Document');?>
	<fieldset>
 		<legend><?php __('Add Document');?></legend>
		<?php echo $form->input('doc_type_id', array('id' => 'record_type_select')); ?>
		<?php echo '<div id="record_type">' . $form->input('specified_doc_type') . '</div>'; ?>
		
		<?php
			echo $form->input('oac_ref_no');
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
			echo $form->input('video_album_id');
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
		<li><?php echo $html->link(__('List Documents', true), array('action'=>'index'));?></li>
	</ul>
</div>
