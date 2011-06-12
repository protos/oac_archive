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
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('oac_ref_no');?></th>
	<th><?php echo $paginator->sort('doc_type_id');?></th>
	<th><?php echo $paginator->sort('specified_doc_type');?></th>
	<th><?php echo $paginator->sort('collection_title');?></th>
	<th><?php echo $paginator->sort('source');?></th>
	<th><?php echo $paginator->sort('aquisition_date');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('edition');?></th>
	<th><?php echo $paginator->sort('authors');?></th>
	<th><?php echo $paginator->sort('contributors');?></th>
	<th><?php echo $paginator->sort('publisher');?></th>
	<th><?php echo $paginator->sort('publication_date');?></th>
	<th><?php echo $paginator->sort('isbn_issn');?></th>
	<th><?php echo $paginator->sort('series');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('doc_language_id');?></th>
	<th><?php echo $paginator->sort('subject');?></th>
	<th><?php echo $paginator->sort('copies');?></th>
	<th><?php echo $paginator->sort('location');?></th>
	<th><?php echo $paginator->sort('oac_url');?></th>
	<th><?php echo $paginator->sort('digital_size');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th><?php echo $paginator->sort('contents_page');?></th>
	<th><?php echo $paginator->sort('keywords');?></th>
	<th><?php echo $paginator->sort('copyright_start_date');?></th>
	<th><?php echo $paginator->sort('copyright_holder');?></th>
	<th><?php echo $paginator->sort('digital_artefact_link');?></th>
	<th><?php echo $paginator->sort('compiler_id');?></th>
	<th><?php echo $paginator->sort('specified_compiler');?></th>
	<th><?php echo $paginator->sort('video_album_id');?></th>
	<th><?php echo $paginator->sort('audio_album_id');?></th>
	<th><?php echo $paginator->sort('login_level_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
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
			<?php echo $document['Document']['id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['oac_ref_no']; ?>
		</td>
		<td>
			<?php echo $document['Document']['doc_type_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['specified_doc_type']; ?>
		</td>
		<td>
			<?php echo $document['Document']['collection_title']; ?>
		</td>
		<td>
			<?php echo $document['Document']['source']; ?>
		</td>
		<td>
			<?php echo $document['Document']['aquisition_date']; ?>
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
			<?php echo $document['Document']['contributors']; ?>
		</td>
		<td>
			<?php echo $document['Document']['publisher']; ?>
		</td>
		<td>
			<?php echo $document['Document']['publication_date']; ?>
		</td>
		<td>
			<?php echo $document['Document']['isbn_issn']; ?>
		</td>
		<td>
			<?php echo $document['Document']['series']; ?>
		</td>
		<td>
			<?php echo $document['Document']['description']; ?>
		</td>
		<td>
			<?php echo $document['Document']['doc_language_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['subject']; ?>
		</td>
		<td>
			<?php echo $document['Document']['copies']; ?>
		</td>
		<td>
			<?php echo $document['Document']['location']; ?>
		</td>
		<td>
			<?php echo $document['Document']['oac_url']; ?>
		</td>
		<td>
			<?php echo $document['Document']['digital_size']; ?>
		</td>
		<td>
			<?php echo $document['Document']['comments']; ?>
		</td>
		<td>
			<?php echo $document['Document']['contents_page']; ?>
		</td>
		<td>
			<?php echo $document['Document']['keywords']; ?>
		</td>
		<td>
			<?php echo $document['Document']['copyright_start_date']; ?>
		</td>
		<td>
			<?php echo $document['Document']['copyright_holder']; ?>
		</td>
		<td>
			<?php echo $document['Document']['digital_artefact_link']; ?>
		</td>
		<td>
			<?php echo $document['Document']['compiler_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['specified_compiler']; ?>
		</td>
		<td>
			<?php echo $document['Document']['video_album_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['audio_album_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['login_level_id']; ?>
		</td>
		<td>
			<?php echo $document['Document']['created']; ?>
		</td>
		<td>
			<?php echo $document['Document']['modified']; ?>
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
