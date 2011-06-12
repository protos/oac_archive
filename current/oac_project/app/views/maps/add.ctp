<?php echo($javascript->link("jquery.js")); ?>
<?php echo($javascript->link("oac.js")); ?>
<?php echo($html->css("oac.css")); ?> 

<div class="maps form">
<?php echo $form->create('Map');?>
	<fieldset>
 		<legend><?php __('Add Map');?></legend>
		<?php echo $form->input('map_type_id', array('id' => 'record_type_select')); ?>
		<?php echo '<div id="record_type">' . $form->input('specified_map_type') . '</div>'; ?>
		<?php
			echo $form->input('oac_ref_no');
			echo $form->input('source');
			echo $form->input('date_acquired');
			echo $form->input('collection_title');
			echo $form->input('title');
			echo $form->input('scale');
			echo $form->input('producer');
			echo $form->input('date_produced');
			echo $form->input('date_published');
			echo $form->input('edition_date');
			echo $form->input('sheet_number');
			echo $form->input('coordinates');
			echo $form->input('special_purpose');
			echo $form->input('sheet_size');
			echo $form->input('publishers_cat_no');
			echo $form->input('copyright_start_date');
			echo $form->input('copyright_holders');
			echo $form->input('description');
			echo $form->input('comments');
			echo $form->input('keywords');
			echo $form->input('digital_artefact_link');
			echo $form->input('copies');
			echo $form->input('login_level_id');
			echo $form->input('document_id');
			echo $form->input('compiler_id', array ('id' => 'other_compiler_select'));				
		?>
		<?php echo '<div id="other_compiler">' . $form->input('specified_compiler') . '</div>'; ?>		
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Maps', true), array('action'=>'index'));?></li>
	</ul>
</div>
