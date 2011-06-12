<div class="videoAlbums index">
<h2><?php __('VideoAlbums');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('video_type_id');?></th>
	<th><?php echo $paginator->sort('specified_video_type');?></th>
	<th><?php echo $paginator->sort('oac_ref_no');?></th>
	<th><?php echo $paginator->sort('source');?></th>
	<th><?php echo $paginator->sort('date_acquired');?></th>
	<th><?php echo $paginator->sort('collection_title');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('artists');?></th>
	<th><?php echo $paginator->sort('series');?></th>
	<th><?php echo $paginator->sort('label');?></th>
	<th><?php echo $paginator->sort('publishers_catalogue_no');?></th>
	<th><?php echo $paginator->sort('release_date');?></th>
	<th><?php echo $paginator->sort('recording_venue');?></th>
	<th><?php echo $paginator->sort('size');?></th>
	<th><?php echo $paginator->sort('duration');?></th>
	<th><?php echo $paginator->sort('director');?></th>
	<th><?php echo $paginator->sort('producer');?></th>
	<th><?php echo $paginator->sort('production_crew');?></th>
	<th><?php echo $paginator->sort('studio');?></th>
	<th><?php echo $paginator->sort('copyright_holder');?></th>
	<th><?php echo $paginator->sort('copyright_start_date');?></th>
	<th><?php echo $paginator->sort('artist_url');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th><?php echo $paginator->sort('keywords');?></th>
	<th><?php echo $paginator->sort('engineer');?></th>
	<th><?php echo $paginator->sort('equipment');?></th>
	<th><?php echo $paginator->sort('software_package');?></th>
	<th><?php echo $paginator->sort('oac_url');?></th>
	<th><?php echo $paginator->sort('specified_compiler');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
	<th><?php echo $paginator->sort('login_level_id');?></th>
	<th><?php echo $paginator->sort('compiler_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($videoAlbums as $videoAlbum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['id']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['video_type_id']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['specified_video_type']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['source']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['date_acquired']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['collection_title']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['title']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['description']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['artists']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['series']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['label']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['publishers_catalogue_no']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['release_date']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['recording_venue']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['size']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['duration']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['director']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['producer']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['production_crew']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['studio']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['copyright_holder']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['copyright_start_date']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['artist_url']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['comments']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['keywords']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['engineer']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['equipment']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['software_package']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['oac_url']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['specified_compiler']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['digital_artefact_link']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['audio_album_id']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['login_level_id']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['compiler_id']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['created']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $videoAlbum['VideoAlbum']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $videoAlbum['VideoAlbum']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $videoAlbum['VideoAlbum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $videoAlbum['VideoAlbum']['id'])); ?>
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
		<li><?php echo $html->link(__('New VideoAlbum', true), array('action'=>'add')); ?></li>
	</ul>
</div>
