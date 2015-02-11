<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $rows: An array of row items. Each row is an array of content
 *   keyed by field ID.
 * - $header: an array of headers(labels) for fields.
 * - $themed_rows: a array of rows with themed fields.
 * @ingroup views_templates
 */
?>
<?php foreach ($themed_rows as $count => $row): ?>

<?php foreach ($row as $field => $content): ?>  

	<url>
		<loc>
		<?php print $fields["path"]->content; ?>
		</loc>
		<news:news>
			<news:publication>
				<news:name>Services</news:name>
				<news:language>en</news:language>
			</news:publication>
			
			<news:genres>PressRelease, Blog</news:genres>
			<news:publication_date><?php print $fields["field_create_date"]->content; ?></news:publication_date>
			<news:title><?php print $fields["title"]->content; ?></news:title>
			<news:keywords>health</news:keywords>
	
		</news:news>
	</url>	

<?php endforeach; ?>

<?php endforeach; ?>
