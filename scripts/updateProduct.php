<?php
include "Database.php";

$db = new Database( "shareddb-o.hosting.stackcp.net", "gallery-313039e9be", "wfl3da0m2z", "gallery-313039e9be" );
$link = $db->connect();

$table = "gallery";

$id = $_POST['id'];

$value = array (
		$_POST ['name'],
		$_POST ['description'],
		$_POST ['price'],
		$_POST ['marketurl']
);

$column = array (
		'name',
		'description',
		'price',
		'marketurl'
);
 
$db->update($link, $table, $column, $value, $id);

header("Location: https://mitushjewelry.com/cpanel.php");
?>