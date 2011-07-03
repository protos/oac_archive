<div class="maps index">
<h2><?php __('Maps');?></h2>
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
	<th><?php echo $paginator->sort('scale');?></th>
	<th><?php echo $paginator->sort('producer');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th><?php echo $paginator->sort('keywords');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($maps as $map):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $map['Map']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $map['Map']['collection_title']; ?>
		</td>
		<td>
			<?php echo $map['Map']['title']; ?>
		</td>
		<td>
			<?php echo $map['Map']['scale']; ?>
		</td>
		<td>
			<?php echo $map['Map']['producer']; ?>
		</td>
		<td>
			<?php echo $map['Map']['description']; ?>
		</td>
		<td>
			<?php echo $map['Map']['comments']; ?>
		</td>
		<td>
			<?php echo $map['Map']['keywords']; ?>
		</td>
		<td>
			<?php
            echo $html->link($map['Map']['digital_artefact_link'],
                             $map['Map']['digital_artefact_link'],
                             array('class' => 'button', 'target' => '_blank'));
            ?>
		</td>
		<td>
			<?php echo
                $html->link(__($map['Document']['title'], true),
                    array('controller'=>'Documents', 'action'=>'view', $map['Document']['id']));
            ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $map['Map']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $map['Map']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $map['Map']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $map['Map']['id'])); ?>
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
		<li><?php echo $html->link(__('New Map', true), array('action'=>'add')); ?></li>
	</ul>
</div>
