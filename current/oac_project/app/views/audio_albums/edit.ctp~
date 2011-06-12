<div class="audioAlbums form">
<?php echo $form->create('AudioAlbum');?>
	<fieldset>
 		<legend><?php __('Edit AudioAlbum');?></legend>
		<?php			
			echo ("<br/><br/><span class=\"sub_header\">Info On The Sleeve</span><br/><br/>");




			echo $form->input('audio_album_type_id', array('id' => 'record_type_select')); 
		    
            echo '<div id="record_type">' . $form->input('specified_audio_album_type') . '</div>';		

			echo $form->input('oac_ref_no');



			echo $form->input('title');
			echo $form->input('description');
			echo $form->input('artists');
			echo $form->input('label');
			echo $form->input('publishers_catalogue_no');
			echo $form->input('multipe_cds');
			echo $form->input('series');
			echo ("<br/><br/><span class=\"sub_header\">Info Not On The Sleeve</span><br/><br/>");
	
            $tmp = $session->read('User');
            $id = $tmp['id'];       
            echo $form->input( 'compiler_id', array('id' => 'other_compiler_select', 'default' => $id) );		
		    echo '<div id="other_compiler">' . $form->input('specified_compiler') . '</div>';

			echo $form->input('source');
			echo $form->input('date_acquired');
			echo $form->input('collection_title');

			echo ("<br/><br/><span class=\"sub_header\">Info in the Booklet/Notes</span><br/><br/>");
		
			echo $form->input('release_date');
			echo $form->input('recording_venue');
			echo $form->input('size');
			echo $form->input('duration');
			echo $form->input('matrix_no');
			echo $form->input('producer');
			echo $form->input('copyright_start_date');
			echo $form->input('copyright_holders');
			echo $form->input('artists_url');
			echo $form->input('oac_shop_url');
			echo ("<br/><br/><span class=\"sub_header\">Other Info</span><br/><br/>");
			echo $form->input('comments');
			echo $form->input('keywords');
			echo $form->input('login_level_id');
			echo ("<br/><br/><span class=\"sub_header\">Digitization Info</span><br/><br/>");
			echo $form->input('recording_engineer');
			echo $form->input('digitizing_engineer');
			echo $form->input('equipment');
			echo $form->input('software_package');
			echo $form->input('digital_artefact_link');
			

		?>
		<?php echo '<div id="other_compiler">' . $form->input('specified_compiler') . '</div>'; ?>		
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AudioAlbum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AudioAlbum.id'))); ?></li>
		<li><?php echo $html->link(__('List AudioAlbums', true), array('action'=>'index'));?></li>
	</ul>
</div>
