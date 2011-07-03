<div class="videoTracks index">
<h2><?php __('VideoTracks');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('track_no');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('primary_performers');?></th>
	<th><?php echo $paginator->sort('primary_instruments');?></th>
	<th><?php echo $paginator->sort('genre');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('video_album_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($videoTracks as $videoTrack):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $videoTrack['VideoTrack']['track_no']; ?>
		</td>
		<td>
			<?php echo $videoTrack['VideoTrack']['title']; ?>
		</td>
		<td>
			<?php echo $videoTrack['VideoTrack']['primary_performers']; ?>
		</td>
		<td>
			<?php echo $videoTrack['VideoTrack']['primary_instruments']; ?>
		</td>
		<td>
			<?php echo $videoTrack['VideoTrack']['genre']; ?>
		</td>
		<td>
			<?php
            echo $html->link($videoTrack['VideoTrack']['digital_artefact_link'],
                             $videoTrack['VideoTrack']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php echo
                $html->link(__($videoTrack['VideoAlbum']['title'], true),
                    array('controller'=>'VideoAlbums', 'action'=>'view', $videoTrack['VideoAlbum']['id']));
            ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $videoTrack['VideoTrack']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $videoTrack['VideoTrack']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $videoTrack['VideoTrack']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $videoTrack['VideoTrack']['id'])); ?>
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
		<li><?php echo $html->link(__('New VideoTrack', true), array('action'=>'add')); ?></li>
	</ul>
</div>
