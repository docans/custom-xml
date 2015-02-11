<?php
/**
 * Template to display a custom xml of the views data export xml body
 * Fields to output are $title which is news title, $path which is the url path of the node, $field_create_date date created
 * 
 * - $rows: An array of row items. Each row is an array of content
 * - $themed_rows: a array of rows with themed fields.
 * @views-data-export-xml-body.tpl.php
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
			
			<news:genres>Blog</news:genres>
			<news:publication_date><?php print $fields["field_create_date"]->content; ?></news:publication_date>
			<news:title><?php print $fields["title"]->content; ?></news:title>
			<news:keywords>health</news:keywords>
	
		</news:news>
	</url>	

<?php endforeach; ?>

<?php endforeach; ?>
