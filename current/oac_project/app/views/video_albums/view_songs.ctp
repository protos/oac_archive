<div class="videoTracks index">
<h2><?php echo $videoTracks[0]['VideoAlbum']['title'];?></h2>

<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo 'Track Number';?></th>
	<th><?php echo 'Title';?></th>
	<th><?php echo 'Primary Performers';?></th>
	<th><?php echo 'Primary Instruments';?></th>
	<th><?php echo 'Genre';?></th>
	<th><?php echo 'Digital Artefact Link';?></th>
	<th><?php echo 'VideoAlbum';?></th>
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
   			<?php echo
                $html->link(__($videoTrack['VideoTrack']['title'], true),
                    array('controller'=>'VideoTracks', 'action'=>'view', $videoTrack['VideoTrack']['id']));
            ?>
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