<div class="audioAlbums index">
<h2><?php __('AudioAlbums');?></h2>
<p>

<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('artists');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('oac_shop_url');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($audioAlbums as $audioAlbum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
            <?php echo $html->link(__($audioAlbum['AudioAlbum']['title'], true),
                    array('action'=>'viewSongs',
                          $audioAlbum['AudioAlbum']['id']));
            ?>
        </td>
		<td>
			<?php echo $audioAlbum['AudioAlbum']['artists']; ?>
		</td>
        <td>
			<?php
            echo $html->link($audioAlbum['AudioAlbum']['digital_artefact_link'],
                             $audioAlbum['AudioAlbum']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
        </td>
        <td>
			<?php
            echo $html->link($audioAlbum['AudioAlbum']['oac_shop_url'],
                             $audioAlbum['AudioAlbum']['oac_shop_url'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
        </td>
        <td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $audioAlbum['AudioAlbum']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $audioAlbum['AudioAlbum']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $audioAlbum['AudioAlbum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $audioAlbum['AudioAlbum']['id'])); ?>
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
		<li><?php echo $html->link(__('New AudioAlbum', true), array('action'=>'add')); ?></li>
	</ul>
</div>
