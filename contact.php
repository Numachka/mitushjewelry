<!DOCTYPE html>
<html>
<head>

    <meta name="author" content="Nahum Kletkin">
    <meta name="description" content="Landing page for Shlomit's website">
    <meta name="keywords" content="Rings, Earrings, Bracelets, Necklaces, Jewelry, Mitush, Shlomit, Shivatsky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
    <link href="mitushjewelry.css" rel="stylesheet" type="text/css">
    <link href="contact.css" rel="stylesheet" type="text/css">
    <script src="mitushjewelry.js" type="text/javascript"></script>
   
     <script src="https://kit.fontawesome.com/f23d4f8598.js"></script>
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
                    <a href="gallery.php" class="topnavLink ">גלריה</a>
                    <a href="contact.php" class="topnavLink active">צור קשר</a>
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

    <div id="contactPageDiv" dir="rtl">
        <div id="contactPageLeft">
            <div id="contactPageDetail" dir="ltr">
                <h1 class="contactPageDetailHead">  <a class="contactPageDetailAnchor" href="https://www.waze.com/ul?ll=32.32902618%2C35.00450134&navigate=yes&zoom=16"><i class="fab fa-waze contactPageDetailAnchor"></i> הבמבוק 10, יד חנה</a></h1>
                <h1 class="contactPageDetailHead">
                    <a href="https://www.facebook.com/Mitushjewelry/" class="contactPageDetailAnchor">
                    <i class="fab fa-facebook-square contactPageDetailIcon"></i>Facebook</a>
                </h1>
                <h1 class="contactPageDetailHead">
                   <a href="https://www.instagram.com/mitush1/?hl=en" class="contactPageDetailAnchor">
                   <i class="fab fa-instagram contactPageDetailIcon"></i>Instagram</a>
                </h1>
            </div>

        </div>
        <div id="contactPageRight">
            <div id="contactFormDiv">
                <h1 class="contactFormHead">מה על לבכם?</h1>
                <form class="contactForm" autocomplete="off" action="../scripts/contactForm.php" target="_self" method="post"> 
                    <input type="text" name="name" class="contactInput" autocomplete="on" placeholder="שם מלא.." required>
                    <input type="email" name="email" class="contactInput" autocomplete="on" placeholder="מייל.." required>
                    <input type="tel" name="usrtel" class="contactInput" autocomplete="on" placeholder="טלפון..">
                    <input type="text" name="subject" class="contactInput" placeholder="כותרת.." required> 
                    <textarea type="text" name="message" class="contactMessage" maxlength="300" placeholder="הודעתכם פה.." required></textarea>
                    <input type="submit" value="שלח" class="contactSubmit" >
                </form>
            </div>
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
