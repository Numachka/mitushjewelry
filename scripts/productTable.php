<?php
include "Database.php";

$db = new Database( "shareddb-o.hosting.stackcp.net", "gallery-313039e9be", "wfl3da0m2z", "gallery-313039e9be" );
$link = $db->connect();

$table = "gallery";
$column = array (
		'id',
		'type',
		'imageurl',
		'name',
		'description',
		'price',
		'marketurl'
);

$result = $db->select($link, $table, $column);
while($row = mysqli_fetch_assoc($result)) {
	echo 
	'<div class="outerCardDiv">
		<div class="innerLeftCardDiv">
			<img id="image' . $row["id"] .'" class="cardImage" src="' . $row["imageurl"] . '">
		</div>
		<div class="innerRightCardDiv">
			<p id="innerDetailName' . $row["id"] .'" class="innerCardDetail">' . $row["name"] . '</p>
			<p id="innerDetailDescription' . $row["id"] .'" class="innerCardDetail">' . $row["description"] . '</p>
			<p id="innerDetailPrice' . $row["id"] .'" class="innerCardDetail">' . $row["price"] . '</p>
			<p id="innerDetailMarketurl' . $row["id"] .'" class="innerCardDetail">' . $row["marketurl"] . '</p>
		</div>
		<form class="innerBottomCardDiv">
			<input type="text" name="id" value="' . $row["id"] . '" style="display:none">
			<button name="update" class="innerCardUpdateButton" type="button" onclick="updateProductOn' . $row["id"] .'()">עדכן</button>
			<button name="remove" class="innerCardUpdateButton" type="submit" onclick="./scripts/deleteProduct.php">מחק</button>
		</form>			
							
	</div>

	<div id="overlayOuterDiv' . $row["id"] .'" class="overlayOuterDivClass" onclick="updateProductOff' . $row["id"] .'()">
		<div class="overlayInnerDiv">
			<div class="overlayLeftDiv">
				<img id="overlayCardImage' . $row["id"] .'" class="overlayImage" src="' . $row["imageurl"] . '">
			</div>
			<form id="overlatRightDiv" action="./scripts/updateProduct.php" method="post" dir="rtl">
				<input type="text" name="id" value="' . $row["id"] . '" style="display:none;">
				<input type="text" name="name" id="overlayName' . $row["id"] .'" class="overlayRightText" value="' . $row["name"] . '">
				<textarea rows="2" size="255" name="description" id="overlayDescription' . $row["id"] .'" class="overlayRightText overlayRightTextArea">' . $row["description"] . '</textarea>					
				<input type="text" name="price" id="overlayPrice' . $row["id"] .'" class="overlayRightText" value="' . $row["price"] . '">
				<input type="text" name="marketurl" id="overlayMarketurl' . $row["id"] .'" class="overlayRightText" value="' . $row["marketurl"] . '">
				<button type="submit" name="update" class="overlayUpdateButton" dir="rtl">עדכן!</button>											
			</form>
		</div>
	</div>
	<script>
			function updateProductOn' . $row["id"] .'() {
				document.getElementById("overlayOuterDiv' . $row["id"] .'").style.display = "block";
			}
					
			function updateProductOff' . $row["id"] .'() {
				document.getElementById("overlayOuterDiv' . $row["id"] .'").addEventListener("click", function( e ) {
				if(this === e.target) {
					document.getElementById("overlayOuterDiv' . $row["id"] .'").style.display = "none";	    
				}
				});
			}
	</script>';																							
}

$db->disconnect($link);

header("Location: https://mitushjewelry.com/cpanel.php");
?>