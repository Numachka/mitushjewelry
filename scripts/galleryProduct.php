<?php
include "Database.php";

$db = new Database( "shareddb-o.hosting.stackcp.net", "gallery-313039e9be", "wfl3da0m2z", "gallery-313039e9be" );
$link = $db->connect();
$table = "gallery";

//Ring generator.
$type = "ring";

$result = $db->selectByType($link, $table, $type);
echo '<div id="ringTab" class="tabContent"\r\n>';
while ($row = mysqli_fetch_assoc($result)) {
	echo
	'	<img id="productImage' . $row["id"] . '" class="galleryImage" src="' . $row["imageurl"] . '" onclick="galleryProductOn' . $row["id"] . '()">
	    	<div id="galleryOverlayOuterDiv' . $row["id"] . '" class="galleryOverlayOuterDivClass" onclick="galleryProductOff' . $row["id"] . '()">
				<div class="galleryOverlayInnerDiv">
					<div id="galleryOverlayXButton1" class="galleryOverlayXButtonClass" onclick="galleryProductXOff' . $row["id"] . '()"><i class="fas fa-times "></i></div>
						<div class="galleryOverlayLeftDiv">
							<img id="galleryOverlayImage' . $row["id"] . '" class="galleryOverlayImageClass" src="' . $row["imageurl"] . '">
						</div>
					<div class="galleryOverlayRightDiv">
						<div class="galleryOverlayText">
							<p id="galleryOverlayDescription' . $row["id"] . '" class="galleryOverlayHeadClass">' . $row["name"] . '</p>
							<p id="galleryOverlayMaterial' . $row["id"] . '" class="galleryOverlayTextClass">' . $row["description"] . '</p>
							<p id="galleryOverlayPrice' . $row["id"] . '" class="galleryOverlayTextClass galleryOverlayPriceClass">' . $row["price"] . ' &#8362</p>
							<p class="galleryOverlayMarmeladaText">קנו דרך מרמלדה מרקט או צרו קשר לפרטים נוספים</p>
						</div>
                    	<div id="galleryOverlayMarmelada' . $row["id"] . '" class="galleryOverlayMarmeladaClass">
                        	<div class="galleryOverlayMarmeladaButtonDiv">
                            	<a class="galleryOverlayMarmeladaAnchor" href="https://market.marmelada.co.il/products/3854149' . $row["id"] . '7">
                             	<img class="galleryOverlayMarmeladaIcon" src="./Pictures/icons/marmelada.png">
								</a>
							</div>
							<div class="galleryOverlayMarmeladaContactDiv">	
                            	<a id="galleryOverlayMarmeladaContactAnchor' . $row["id"] . '" class="galleryOverlayMarmeladaContactAnchorClass"
                                	href="https://mitushjewelry.com/contact.php">
                                	צור קשר
                            	</a>
                        	</div>
                    	</div>
					</div>
				</div>
			</div>
			<script>
			function galleryProductOn' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "block";
			}
								
			function galleryProductOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").addEventListener("click", function( e ) {
					if(this === e.target) {
						document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
					}
				});
			}

			function galleryProductXOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
			}
			</script>';
}
echo '</div>';

//Necklace generator.
$type = "necklace";

$result = $db->selectByType($link, $table, $type);
echo '<div id="necklaceTab" class="tabContent">';
while ($row = mysqli_fetch_assoc($result)) {
	echo
	'	<img id="productImage' . $row["id"] . '" class="galleryImage" src="' . $row["imageurl"] . '" onclick="galleryProductOn' . $row["id"] . '()">
	    	<div id="galleryOverlayOuterDiv' . $row["id"] . '" class="galleryOverlayOuterDivClass" onclick="galleryProductOff' . $row["id"] . '()">
				<div class="galleryOverlayInnerDiv">
					<div id="galleryOverlayXButton1" class="galleryOverlayXButtonClass" onclick="galleryProductXOff' . $row["id"] . '()"><i class="fas fa-times "></i></div>
						<div class="galleryOverlayLeftDiv">
							<img id="galleryOverlayImage' . $row["id"] . '" class="galleryOverlayImageClass" src="' . $row["imageurl"] . '">
						</div>
					<div class="galleryOverlayRightDiv">
						<div class="galleryOverlayText">
							<p id="galleryOverlayDescription' . $row["id"] . '" class="galleryOverlayHeadClass">' . $row["name"] . '</p>
							<p id="galleryOverlayMaterial' . $row["id"] . '" class="galleryOverlayTextClass">' . $row["description"] . '</p>
							<p id="galleryOverlayPrice' . $row["id"] . '" class="galleryOverlayTextClass galleryOverlayPriceClass">' . $row["price"] . ' &#8362</p>
							<p class="galleryOverlayMarmeladaText">קנו דרך מרמלדה מרקט או צרו קשר לפרטים נוספים</p>
						</div>
                    	<div id="galleryOverlayMarmelada' . $row["id"] . '" class="galleryOverlayMarmeladaClass">
                        	<div class="galleryOverlayMarmeladaButtonDiv">
                            	<a class="galleryOverlayMarmeladaAnchor" href="https://market.marmelada.co.il/products/3854149' . $row["id"] . '7">
                             	<img class="galleryOverlayMarmeladaIcon" src="./Pictures/icons/marmelada.png">
								</a>
							</div>
							<div class="galleryOverlayMarmeladaContactDiv">	
                            	<a id="galleryOverlayMarmeladaContactAnchor' . $row["id"] . '" class="galleryOverlayMarmeladaContactAnchorClass"
                                	href="https://mitushjewelry.com/contact.php">
                                	צור קשר
                            	</a>
                        	</div>
                    	</div>
					</div>
				</div>
			</div>
			<script>
			function galleryProductOn' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "block";
			}
								
			function galleryProductOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").addEventListener("click", function( e ) {
					if(this === e.target) {
						document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
					}
				});
			}

			function galleryProductXOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
			}
			</script>';
}
echo '</div>';

//Bracelet generator.
$type = "bracelet";

$result = $db->selectByType($link, $table, $type);
echo '<div id="braceletTab" class="tabContent">';
while ($row = mysqli_fetch_assoc($result)) {
	echo
	'	<img id="productImage' . $row["id"] . '" class="galleryImage" src="' . $row["imageurl"] . '" onclick="galleryProductOn' . $row["id"] . '()">
	    	<div id="galleryOverlayOuterDiv' . $row["id"] . '" class="galleryOverlayOuterDivClass" onclick="galleryProductOff' . $row["id"] . '()">
				<div class="galleryOverlayInnerDiv">
					<div id="galleryOverlayXButton1" class="galleryOverlayXButtonClass" onclick="galleryProductXOff' . $row["id"] . '()"><i class="fas fa-times "></i></div>
						<div class="galleryOverlayLeftDiv">
							<img id="galleryOverlayImage' . $row["id"] . '" class="galleryOverlayImageClass" src="' . $row["imageurl"] . '">
						</div>
					<div class="galleryOverlayRightDiv">
						<div class="galleryOverlayText">
							<p id="galleryOverlayDescription' . $row["id"] . '" class="galleryOverlayHeadClass">' . $row["name"] . '</p>
							<p id="galleryOverlayMaterial' . $row["id"] . '" class="galleryOverlayTextClass">' . $row["description"] . '</p>
							<p id="galleryOverlayPrice' . $row["id"] . '" class="galleryOverlayTextClass galleryOverlayPriceClass">' . $row["price"] . ' &#8362</p>
							<p class="galleryOverlayMarmeladaText">קנו דרך מרמלדה מרקט או צרו קשר לפרטים נוספים</p>
						</div>
                    	<div id="galleryOverlayMarmelada' . $row["id"] . '" class="galleryOverlayMarmeladaClass">
                        	<div class="galleryOverlayMarmeladaButtonDiv">
                            	<a class="galleryOverlayMarmeladaAnchor" href="https://market.marmelada.co.il/products/3854149' . $row["id"] . '7">
                             	<img class="galleryOverlayMarmeladaIcon" src="./Pictures/icons/marmelada.png">
								</a>
							</div>
							<div class="galleryOverlayMarmeladaContactDiv">	
                            	<a id="galleryOverlayMarmeladaContactAnchor' . $row["id"] . '" class="galleryOverlayMarmeladaContactAnchorClass"
                                	href="https://mitushjewelry.com/contact.php">
                                	צור קשר
                            	</a>
                        	</div>
                    	</div>
					</div>
				</div>
			</div>
			<script>
			function galleryProductOn' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "block";
			}
								
			function galleryProductOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").addEventListener("click", function( e ) {
					if(this === e.target) {
						document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
					}
				});
			}

			function galleryProductXOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
			}
			</script>';
}
echo '</div>';

//Earring generator.
$type = "earring";

$result = $db->selectByType($link, $table, $type);
echo '<div id="earringTab" class="tabContent">';
while ($row = mysqli_fetch_assoc($result)) {
	echo
	'	<img id="productImage' . $row["id"] . '" class="galleryImage" src="' . $row["imageurl"] . '" onclick="galleryProductOn' . $row["id"] . '()">
	    	<div id="galleryOverlayOuterDiv' . $row["id"] . '" class="galleryOverlayOuterDivClass" onclick="galleryProductOff' . $row["id"] . '()">
				<div class="galleryOverlayInnerDiv">
					<div id="galleryOverlayXButton1" class="galleryOverlayXButtonClass" onclick="galleryProductXOff' . $row["id"] . '()"><i class="fas fa-times "></i></div>
						<div class="galleryOverlayLeftDiv">
							<img id="galleryOverlayImage' . $row["id"] . '" class="galleryOverlayImageClass" src="' . $row["imageurl"] . '">
						</div>
					<div class="galleryOverlayRightDiv">
						<div class="galleryOverlayText">
							<p id="galleryOverlayDescription' . $row["id"] . '" class="galleryOverlayHeadClass">' . $row["name"] . '</p>
							<p id="galleryOverlayMaterial' . $row["id"] . '" class="galleryOverlayTextClass">' . $row["description"] . '</p>
							<p id="galleryOverlayPrice' . $row["id"] . '" class="galleryOverlayTextClass galleryOverlayPriceClass">' . $row["price"] . ' &#8362</p>
							<p class="galleryOverlayMarmeladaText">קנו דרך מרמלדה מרקט או צרו קשר לפרטים נוספים</p>
						</div>
                    	<div id="galleryOverlayMarmelada' . $row["id"] . '" class="galleryOverlayMarmeladaClass">
                        	<div class="galleryOverlayMarmeladaButtonDiv">
                            	<a class="galleryOverlayMarmeladaAnchor" href="https://market.marmelada.co.il/products/3854149' . $row["id"] . '7">
                             	<img class="galleryOverlayMarmeladaIcon" src="./Pictures/icons/marmelada.png">
								</a>
							</div>
							<div class="galleryOverlayMarmeladaContactDiv">	
                            	<a id="galleryOverlayMarmeladaContactAnchor' . $row["id"] . '" class="galleryOverlayMarmeladaContactAnchorClass"
                                	href="https://mitushjewelry.com/contact.php">
                                	צור קשר
                            	</a>
                        	</div>
                    	</div>
					</div>
				</div>
			</div>
			<script>
			function galleryProductOn' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "block";
			}
								
			function galleryProductOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").addEventListener("click", function( e ) {
					if(this === e.target) {
						document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
					}
				});
			}

			function galleryProductXOff' . $row["id"] . '() {
				document.getElementById("galleryOverlayOuterDiv' . $row["id"] . '").style.display = "none";
			}
			</script>';
}
echo '</div>';

$db->disconnect($link);

?>