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
	<th><?php echo $paginator->sort('oac_ref_no');?></th>
	<th><?php echo $paginator->sort('collection_title');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('artists');?></th>
	<th><?php echo $paginator->sort('director');?></th>
	<th><?php echo $paginator->sort('artist_url');?></th>
	<th><?php echo $paginator->sort('oac_url');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
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
			<?php echo $videoAlbum['VideoAlbum']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['collection_title']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['title']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['artists']; ?>
		</td>
		<td>
			<?php echo $videoAlbum['VideoAlbum']['director']; ?>
		</td>
		<td>
			<?php
            echo $html->link($videoAlbum['VideoAlbum']['artist_url'],
                             $videoAlbum['VideoAlbum']['artist_url'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php
            echo $html->link($videoAlbum['VideoAlbum']['artist_url'],
                             $videoAlbum['VideoAlbum']['artist_url'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php
            echo $html->link($videoAlbum['VideoAlbum']['digital_artefact_link'],
                             $videoAlbum['VideoAlbum']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php echo
                $html->link(__($videoAlbum['AudioAlbum']['title'], true),
                    array('controller'=>'AudioAlbums', 'action'=>'view', $videoAlbum['AudioAlbum']['id']));
            ?>
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
