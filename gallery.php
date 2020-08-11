<!DOCTYPE html>
<html>
<head>

    <meta name="author" content="Nahum Kletkin">
    <meta name="description" content="Landing page for Shlomit's website">
    <meta name="keywords" content="Rings, Earrings, Bracelets, Necklaces, Jewelry, Mitush, Shlomit, Shivatsky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="mitushjewelry.css" rel="stylesheet" type="text/css">
     <link href="gallery.css" rel="stylesheet" type="text/css">
    <script src="mitushjewelry.js" type="text/javascript"></script>
    <link rel="icon" href="./Pictures/logo/logo 20x20.png">
    <title>Mitush Jewelry</title>

</head>
<body>

        <div id="topnavDiv">
                <div id="topnavLogoDiv">
                    <a class="topnavLogoAnchor" href="index.php">
                        <img src="./Pictures/logo/logo 400 x 400.png" alt="Mitush" id="topnavLogo">
                    </a>
                </div>
                <div id="topnavButtonDiv">
                    <a href="index.php" class="topnavLink ">בית</a>
                    <a href="aboutme.php" class="topnavLink">אודות</a>
                    <a href="gallery.php" class="topnavLink active">גלריה</a>
                    <a href="contact.php" class="topnavLink">צור קשר</a>
                </div>
                <!------------------This part is hidden - dropdown when 400px---------->
                <div id="navDropdown">
                    <button id="navDropdownButton" onclick="dropdown()"><i class="fas fa-bars fa-2x"></i></button> <!--hidden-->
                    <div id="navDropdownMenu" class="navDropdownMenu">
                        <a class="navDropdownItem" href="index.php">בית</a>
                        <a class="navDropdownItem" href="aboutme.php">אודות</a>
                        <a class="navDropdownItem" href="gallery.php">גלריה</a>
                        <a class="navDropdownItem" href="contact.php">צור קשר</a>
                    </div>
                </div>
            </div>
    
    <div id="galleryDiv" dir="rtl">

            <h1 id="collectionPageHead">הקולקציה</h1>
        
        <div id="galleryTabDiv">
            <h1 class="tabLinkHead">הצג:</h1>  
            <button id="ringButton" class="tabLink activeTab" onclick="ringTag()">טבעות</button>
            <button id="necklaceButton" class="tabLink activeTab" onclick="necklaceTag()">שרשראות</button>
            <button  id="braceletButton" class="tabLink activeTab" onclick="braceletTag()">צמידים</button>
            <button  id="earringButton" class="tabLink activeTab" onclick="earringTag()">עגילים</button>
            <button  id="ResetButton" class="tabLink activeTab" onclick="resetTag()">הראה הכל</button>
        </div>

        <div id="galleryContentDiv">
        	<?php include './scripts/galleryProduct.php' ?> 
        </div>

    </div>

    
    <div id="footer" dir="rtl">

        <div id="footerSocialDiv">
            <p id="footerSocialHead" class="footerText">עקבו אחרי ברשת החברתית</p>
            <a href="https://www.facebook.com/Mitushjewelry/" class="footerSocialIcon"><i
                class="fab fa-facebook-square fa-3x socialIcon"></i></a>
            <a href="https://www.instagram.com/mitush1/?hl=en" class="footerSocialIcon"><i
                class="fab fa-instagram fa-3x socialIcon"></i></a>
        </div>

        <div id="footerContactDiv">
            <div id="footerContactRightDiv">
                <p id="footerContactHead" class="footerText"> צרו קשר בוואטסאפ<br><br> 054-5256540 <a class="footerSocialIcon" href="https://api.whatsapp.com/send?phone=972524330984"><i class="fab fa-whatsapp-square"></i></a></p>
            </div>
            <div id="footerContactLeftDiv">   
                <p class="footerText">או דרך האתר</p>
                <a id="footerContactButton" href="http://mitushjewelry.com/contact.php"><p class="footerText footerContactButtonText">צור קשר</p></a>
            </div> 
        </div>

        <div id="footerMapDiv">
            <p class="footerText footerMapHead">מפת האתר:</p>
            <a class="footerMapAnchor" href="index.php"><p class="footerText footerMapAnchorText">בית</p></a>
            <a class="footerMapAnchor" href="aboutme.php"><p class="footerText footerMapAnchorText">אודות</p></a>
            <a class="footerMapAnchor" href="gallery.php"><p class="footerText footerMapAnchorText">גלריה</p></a>
            <a class="footerMapAnchor" href="contact.php"><p class="footerText footerMapAnchorText active">צור קשר</p></a>
        </div>

    </div>

</body>

</html>