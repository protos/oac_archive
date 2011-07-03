<div class="documents index">
<h2><?php __('Documents');?></h2>
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
	<th><?php echo $paginator->sort('edition');?></th>
	<th><?php echo $paginator->sort('authors');?></th>
	<th><?php echo $paginator->sort('subject');?></th>
	<th><?php echo $paginator->sort('oac_url');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('video_album_id');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($documents as $document):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $document['Document']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $document['Document']['collection_title']; ?>
		</td>
		<td>
			<?php echo $document['Document']['title']; ?>
		</td>
		<td>
			<?php echo $document['Document']['edition']; ?>
		</td>
		<td>
			<?php echo $document['Document']['authors']; ?>
		</td>
		<td>
			<?php echo $document['Document']['subject']; ?>
		</td>
		<td>
			<?php
            echo $html->link($document['Document']['oac_url'],
                             $document['Document']['oac_url'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php
            echo $html->link($document['Document']['digital_artefact_link'],
                             $document['Document']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
   			<?php echo
                $html->link(__($document['VideoAlbum']['title'], true),
                    array('controller'=>'VideoAlbums', 'action'=>'view', $document['VideoAlbum']['id']));
            ?>
		</td>
		<td>
   			<?php echo
                $html->link(__($document['AudioAlbum']['title'], true),
                    array('controller'=>'AudioAlbums', 'action'=>'view', $document['AudioAlbum']['id']));
            ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $document['Document']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $document['Document']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $document['Document']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $document['Document']['id'])); ?>
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
		<li><?php echo $html->link(__('New Document', true), array('action'=>'add')); ?></li>
	</ul>
</div>
