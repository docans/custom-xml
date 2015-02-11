<?php
// print_r($themed_rows);
// exit();
/*
 * Make sure field_products has "display multiple items on same line" enabled.
 */
    $rows_temp = array();
    foreach ($themed_rows as $count => $row){
        $rows_temp[$row['field_term_id']][] =  $row;
    }
?>
<?php foreach ($rows_temp as $id => $rows): ?>

<?php $ids_row = $rows; $rw = array_shift($ids_row); ?>
	<url>
		<loc>
		<?php print trim(strip_tags($rw['path'])); ?>
		</loc>
		<news:news>
			<news:publication>
				<news:name>Services</news:name>
				<news:language>en</news:language>
			</news:publication>
			
			<news:genres>PressRelease, Blog</news:genres>
			<news:publication_date><?php print trim(strip_tags($rw['field_create_date'])); ?></news:publication_date>
			<news:title><?php print trim(strip_tags($rw['title'])); ?></news:title>
			<news:keywords>health</news:keywords>
	
		</news:news>
	</url>	
<?php endforeach; ?>
