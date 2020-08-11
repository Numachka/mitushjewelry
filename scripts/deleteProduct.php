<?php
include "Database.php";

$db = new Database( "shareddb-o.hosting.stackcp.net", "gallery-313039e9be", "wfl3da0m2z", "gallery-313039e9be" );
$link = $db->connect();

$table = "gallery";

$id = $_POST["id"];

$db->delete($link, $table, $id);

$db->disconnect($link);

header("Location: https://mitushjewelry.com/cpanel.php");
	
?>