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
	<th><?php echo $paginator->sort('oac_ref_no');?></th>
	<th><?php echo $paginator->sort('collection_title');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('photographer');?></th>
	<th><?php echo $paginator->sort('camera');?></th>
	<th><?php echo $paginator->sort('subject_detail');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('oac_url');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th><?php echo $paginator->sort('video_album_id');?></th>
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
			<?php echo $photograph['Photograph']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $photograph['Photograph']['collection_title']; ?>
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
            <?php
            echo $html->link($photograph['Photograph']['digital_artefact_link'],
                             $photograph['Photograph']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php
            echo $html->link($photograph['Photograph']['oac_url'],
                             $photograph['Photograph']['oac_url'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php echo
                $html->link(__($photograph['AudioAlbum']['title'], true),
                    array('controller'=>'AudioAlbums', 'action'=>'view', $photograph['AudioAlbum']['id']));
            ?>
		</td>
		<td>
			<?php echo
                $html->link(__($photograph['Document']['title'], true),
                    array('controller'=>'Documents', 'action'=>'view', $photograph['Document']['id']));
            ?>
		</td>
		<td>
			<?php echo
                $html->link(__($photograph['VideoAlbum']['title'], true),
                    array('controller'=>'VideoAlbums', 'action'=>'view', $photograph['VideoAlbum']['id']));
            ?>
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
