<?php
//include database class.
include 'Database.php';

// connecting to the database;
$db = new Database ( "shareddb-o.hosting.stackcp.net", "gallery-313039e9be", "wfl3da0m2z", "gallery-313039e9be" );
$link = $db->connect();

// upload variables.
$uploadDirectory = "../products/";
$uploadFile = strtolower( $_FILES ["image"] ["name"] );
$uploadFileType = strtolower ( pathinfo ( $uploadFile, PATHINFO_EXTENSION ) );

// insert variables.
$table = "gallery";
$value = array (
		$_POST ['type'],
		$imageurl = $uploadDirectory . $uploadFile,
		$_POST ['name'],
		$_POST ['description'],
		$_POST ['price'],
		$_POST ['marketurl']
);
$column = array (
		'type',
		'imageurl',
		'name',
		'description',
		'price',
		'marketurl'
);

// call for uploding images.
$upload = $db->imageChecker ( $uploadFile, $uploadFileType, $imageurl );
if ($upload) {
	move_uploaded_file ( $_FILES ["image"] ["tmp_name"], $imageurl );
	//echo "The file " . basename ( $_FILES ["image"] ["name"] ) . " has been uploaded.";
} else {
	//echo "The file has failed to upload.";
}

// call for inserting into table.
$insert = $db->insert ( $link, $table, $column, $value );
if ($insert) {
	//echo "Query successful!";
} else {
	//echo "Query has NOT been successful!";
}

$db->disconnect($link);

header("Location: https://mitushjewelry.com/cpanel.php");
?>
