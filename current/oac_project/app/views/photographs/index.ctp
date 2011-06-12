<div class="photographs index">
<h2><?php __('Photographs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('oac_ref_no');?></th>
	<th><?php echo $paginator->sort('photo_type_id');?></th>
	<th><?php echo $paginator->sort('specified_photo_type');?></th>
	<th><?php echo $paginator->sort('collection_title');?></th>
	<th><?php echo $paginator->sort('source');?></th>
	<th><?php echo $paginator->sort('aquisition_date');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('photographer');?></th>
	<th><?php echo $paginator->sort('camera');?></th>
	<th><?php echo $paginator->sort('subject_detail');?></th>
	<th><?php echo $paginator->sort('date_taken');?></th>
	<th><?php echo $paginator->sort('copies');?></th>
	<th><?php echo $paginator->sort('copyright_start_date');?></th>
	<th><?php echo $paginator->sort('copyright_holder');?></th>
	<th><?php echo $paginator->sort('location');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th><?php echo $paginator->sort('engineer');?></th>
	<th><?php echo $paginator->sort('digital_size');?></th>
	<th><?php echo $paginator->sort('equipment');?></th>
	<th><?php echo $paginator->sort('software_package');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('oac_url');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
	<th><?php echo $paginator->sort('compiler_id');?></th>
	<th><?php echo $paginator->sort('keywords');?></th>
	<th><?php echo $paginator->sort('specified_compiler');?></th>
	<th><?php echo $paginator->sort('login_level_id');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th><?php echo $paginator->sort('video_album_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($photographs as $photograph):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $photograph['Photograph']['id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['photo_type_id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['specified_photo_type']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['collection_title']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['source']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['aquisition_date']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['title']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['photographer']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['camera']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['subject_detail']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['date_taken']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['copies']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['copyright_start_date']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['copyright_holder']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['location']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['comments']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['engineer']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['digital_size']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['equipment']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['software_package']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['digital_artefact_link']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['oac_url']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['audio_album_id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['compiler_id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['keywords']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['specified_compiler']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['login_level_id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['document_id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['video_album_id']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['created']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $photograph['Photograph']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $photograph['Photograph']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $photograph['Photograph']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $photograph['Photograph']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Photograph', true), array('action'=>'add')); ?></li>
	</ul>
</div>
