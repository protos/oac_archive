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
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('oac_ref_no');?></th>
	<th><?php echo $paginator->sort('map_type_id');?></th>
	<th><?php echo $paginator->sort('specified_map_type');?></th>
	<th><?php echo $paginator->sort('source');?></th>
	<th><?php echo $paginator->sort('date_acquired');?></th>
	<th><?php echo $paginator->sort('collection_title');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('scale');?></th>
	<th><?php echo $paginator->sort('producer');?></th>
	<th><?php echo $paginator->sort('date_produced');?></th>
	<th><?php echo $paginator->sort('date_published');?></th>
	<th><?php echo $paginator->sort('edition_date');?></th>
	<th><?php echo $paginator->sort('sheet_number');?></th>
	<th><?php echo $paginator->sort('coordinates');?></th>
	<th><?php echo $paginator->sort('special_purpose');?></th>
	<th><?php echo $paginator->sort('sheet_size');?></th>
	<th><?php echo $paginator->sort('publishers_cat_no');?></th>
	<th><?php echo $paginator->sort('copyright_start_date');?></th>
	<th><?php echo $paginator->sort('copyright_holders');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th><?php echo $paginator->sort('keywords');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('copies');?></th>
	<th><?php echo $paginator->sort('compiler_id');?></th>
	<th><?php echo $paginator->sort('specified_compiler');?></th>
	<th><?php echo $paginator->sort('login_level_id');?></th>
	<th><?php echo $paginator->sort('document_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
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
			<?php echo $map['Map']['id']; ?>
		</td>
		<td>
			<?php echo $map['Map']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $map['Map']['map_type_id']; ?>
		</td>
		<td>
			<?php echo $map['Map']['specified_map_type']; ?>
		</td>
		<td>
			<?php echo $map['Map']['source']; ?>
		</td>
		<td>
			<?php echo $map['Map']['date_acquired']; ?>
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
			<?php echo $map['Map']['date_produced']; ?>
		</td>
		<td>
			<?php echo $map['Map']['date_published']; ?>
		</td>
		<td>
			<?php echo $map['Map']['edition_date']; ?>
		</td>
		<td>
			<?php echo $map['Map']['sheet_number']; ?>
		</td>
		<td>
			<?php echo $map['Map']['coordinates']; ?>
		</td>
		<td>
			<?php echo $map['Map']['special_purpose']; ?>
		</td>
		<td>
			<?php echo $map['Map']['sheet_size']; ?>
		</td>
		<td>
			<?php echo $map['Map']['publishers_cat_no']; ?>
		</td>
		<td>
			<?php echo $map['Map']['copyright_start_date']; ?>
		</td>
		<td>
			<?php echo $map['Map']['copyright_holders']; ?>
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
			<?php echo $map['Map']['digital_artefact_link']; ?>
		</td>
		<td>
			<?php echo $map['Map']['copies']; ?>
		</td>
		<td>
			<?php echo $map['Map']['compiler_id']; ?>
		</td>
		<td>
			<?php echo $map['Map']['specified_compiler']; ?>
		</td>
		<td>
			<?php echo $map['Map']['login_level_id']; ?>
		</td>
		<td>
			<?php echo $map['Map']['document_id']; ?>
		</td>
		<td>
			<?php echo $map['Map']['created']; ?>
		</td>
		<td>
			<?php echo $map['Map']['modified']; ?>
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
