<div class="audioTracks index">
<h2><?php __('AudioTracks');?></h2>
<p>
<table cellpadding="0" cellspacing="0">
<tr>
    <th><?php echo 'track_no';?></th>
	<th><?php echo 'title';?></th>
	<th><?php echo 'primary_performers';?></th>
    <th><?php echo 'genre';?></th>
	<th><?php echo 'duration';?></th>
    <th><?php echo 'digital_artefact_link';?></th>
	<th><?php echo 'album';?></th>
    <th><?php echo 'created';?></th>
	<th><?php echo 'modified';?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($audioTracks as $audioTrack):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
        <td>
			<?php echo $audioTrack['AudioTrack']['track_no']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['title']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['primary_performers']; ?>
		</td>
        <td>
			<?php echo $audioTrack['AudioTrack']['genre']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['duration']; ?>
		</td>
        <td>
			<?php
            echo $html->link($audioTrack['AudioTrack']['digital_artefact_link'],
                             $audioTrack['AudioTrack']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
        </td>
        <td>
			<?php echo
                $html->link(__($audioTrack['AudioAlbum']['title'], true),
                    array('controller'=>'AudioAlbums', 'action'=>'view', $audioTrack['AudioAlbum']['id']));
            ?>
        <td>
			<?php echo $audioTrack['AudioTrack']['created']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('controller'=>'AudioTracks', 'action'=>'view', $audioTrack['AudioTrack']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('controller'=>'AudioTracks', 'action'=>'edit', $audioTrack['AudioTrack']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('controller'=>'AudioTracks', 'action'=>'delete', $audioTrack['AudioTrack']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $audioTrack['AudioTrack']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>