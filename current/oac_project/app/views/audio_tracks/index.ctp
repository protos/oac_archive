<div class="audioTracks index">
<h2><?php __('AudioTracks');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
<!--
    <th><?php echo $paginator->sort('id');?></th>
-->
    <th><?php echo $paginator->sort('track_no');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('primary_performers');?></th>
<!--
    <th><?php echo $paginator->sort('primary_instruments');?></th>
-->
    <th><?php echo $paginator->sort('genre');?></th>
	<th><?php echo $paginator->sort('duration');?></th>
<!--
    <th><?php echo $paginator->sort('performance_date');?></th>
    <th><?php echo $paginator->sort('composer');?></th>
    <th><?php echo $paginator->sort('copyright_start_date');?></th>
	<th><?php echo $paginator->sort('copyright_holder');?></th>
    <th><?php echo $paginator->sort('comments');?></th>
-->
    <th><?php echo $paginator->sort('digital_artefact_link');?></th>
<!--
    <th><?php echo $paginator->sort('synonyms');?></th>
	<th><?php echo $paginator->sort('keywords');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
-->
    <th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
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
<!--
        <td>
			<?php echo $audioTrack['AudioTrack']['id']; ?>
		</td>
-->
        <td>
			<?php echo $audioTrack['AudioTrack']['track_no']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['title']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['primary_performers']; ?>
		</td>
<!--
        <td>
			<?php echo $audioTrack['AudioTrack']['primary_instruments']; ?>
		</td>
-->
        <td>
			<?php echo $audioTrack['AudioTrack']['genre']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['duration']; ?>
		</td>
<!--
        <td>
			<?php echo $audioTrack['AudioTrack']['performance_date']; ?>
		</td>
        <td>
			<?php echo $audioTrack['AudioTrack']['composer']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['copyright_start_date']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['copyright_holder']; ?>
		</td>
        <td>
			<?php echo $audioTrack['AudioTrack']['comments']; ?>
		</td>
-->
        <td>
			<?php echo $audioTrack['AudioTrack']['digital_artefact_link']; ?>
		</td>
<!--
        <td>
			<?php echo $audioTrack['AudioTrack']['synonyms']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['keywords']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['audio_album_id']; ?>
		</td>
-->
        <td>
			<?php echo $audioTrack['AudioTrack']['created']; ?>
		</td>
		<td>
			<?php echo $audioTrack['AudioTrack']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $audioTrack['AudioTrack']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $audioTrack['AudioTrack']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $audioTrack['AudioTrack']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $audioTrack['AudioTrack']['id'])); ?>
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
		<li><?php echo $html->link(__('New AudioTrack', true), array('action'=>'add')); ?></li>
	</ul>
</div>
