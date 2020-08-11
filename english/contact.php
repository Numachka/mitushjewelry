<!DOCTYPE html>
<html>
<head>

    <meta name="author" content="Nahum Kletkin">
    <meta name="description" content="Landing page for Shlomit's website">
    <meta name="keywords" content="Rings, Earrings, Bracelets, Necklaces, Jewelry, Mitush, Shlomit, Shivatsky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="mitushjewelry.css" rel="stylesheet" type="text/css">
    <link href="contact.css" rel="stylesheet" type="text/css">
    <script src="mitushjewelry.js" type="text/javascript"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtCWGP6-1i4Tn0DIV-bts1k9B1i8nu03A&callback=initMap"></script>
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
            <a href="index.php" class="topnavLink ">Home</a>
            <a href="aboutme.php" class="topnavLink">About</a>
            <a href="gallery.php" class="topnavLink">Gallery</a>
            <a href="contact.php" class="topnavLink active">Contact</a>
        </div>
        <!------------------This part is hidden - dropdown when 400px---------->
        <div id="navDropdown">
            <button id="navDropdownButton" onclick="dropdown()"><i class="fas fa-bars fa-2x"></i></button> <!--hidden-->
            <div id="navDropdownMenu" class="navDropdownMenu">
                <a class="navDropdownItem" href="index.php">Home</a>
                <a class="navDropdownItem" href="aboutme.php">About</a>
                <a class="navDropdownItem" href="gallery.php">Gallery</a>
                <a class="navDropdownItem" href="contact.php">Contact</a>
            </div>
        </div>
    </div>

    <div id="contactPageDiv">
        <div id="contactPageLeft">
            <h1 id="contactPageDetailTitle">Come Visit My Studio!</h1>
            <div id="contactMapDiv"></div>
            <div id="contactPageDetail">
                <h1 class="contactPageDetailHead">  <a class="contactPageDetailAnchor" href="https://www.waze.com/ul?ll=32.32902618%2C35.00450134&navigate=yes&zoom=16"><i class="fab fa-waze contactPageDetailAnchor"></i> Habambuc 10, Yad Hanna</a></h1>
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
                <h1 class="contactFormHead">Feel free - ask away!</h1>
                <form class="contactForm" autocomplete="off" action="../scripts/contactForm.php" target="_self" method="post"> 
                    <input type="text" name="name" class="contactInput" autocomplete="on" placeholder="Full name.." required>
                    <input type="email" name="email" class="contactInput" autocomplete="on" placeholder="Email.." required>
                    <input type="tel" name="usrtel" class="contactInput" autocomplete="on" placeholder="Phone number..">
                    <input type="text" name="subject" class="contactInput" placeholder="What do you want to ask?" required> 
                    <textarea type="text" name="message" class="contactMessage" maxlength="300" placeholder="Enter your message here.." required></textarea>
                    <input type="submit" value="Send" class="contactSubmit" >
                </form>
            </div>
        </div>
    </div>

    <div id="footer">

        <div id="social">
            <h1 class="socialText">Follow me on social media</h1>
            <a href="https://www.facebook.com/Mitushjewelry/" class="socialAnchor"><i class="fab fa-facebook-square fa-3x socialIcon"></i></a>
            <a href="https://www.instagram.com/mitush1/?hl=en" class="socialAnchor"><i class="fab fa-instagram fa-3x socialIcon"></i></a>
        </div>
        
        <div id="newsletter">
            <form class="emailForm" autocomplete="off" action="../scripts/newsletter.php" target="_self" method="post">
                <h1 class="newsletterText">Sign up for my newsletter for special offers!</h1>
                <input type="email" name="email" class="emailInput" >
                <input type="submit" value="Sign Up!" class="emailButton">
            </form>
        </div>

        <div id="contact">
            <h1 class="contactHead">Contact me on Whatsapp</h1>   
            <h1 class=contactNumber><a class="contactAnchor"><i class="fab fa-whatsapp-square contactIcon"></i></a>
            054-5256540</h1>
        </div>

        <div id="copyright">
            <i class="far fa-copyright copyrightIcon"></i>
            <p class="copyrightText">Created by Nahum Kletkin 2019</p>
        </div>
        
    <!----------hidden------------>
    <!--This footer will show when portview is > 415px-->
        
        <div id="smallFooter">
            <div id="smallFooterContact">
                <p class="smallFooterText">Follow me on social media or contact me on Whatsapp</p>
                <a href="https://www.facebook.com/Mitushjewelry/" class="smallFooterSocialAnchor"><i class="fab fa-facebook-square fa-1x smallFooterSocialIcon"></i></a>
                <a href="https://www.instagram.com/mitush1/?hl=en" class="smallFooterSocialAnchor"><i class="fab fa-instagram fa-1x smallFooterSocialIcon"></i>
                </a>
                <a class="smallFooterSocialAnchor"><i class="fab fa-whatsapp-square smallFooterSocialIcon"></i></a>
                <p class="smallFooterText">054-5256540</p>
            </div>
            
            <div id="smallFooterNewsletter">
                <form class="smallFooterEmailForm" autocomplete="off" action="./scripts/newsletter.php" target="_self" method="post">
                <p class="smallFooterNewsletterText">Sign up for my newsletter <br> for special offers!</p>
                <input type="email" name="email" class="smallFooterEmailInput" >
                <input type="submit" value="Sign Up!" class="smallFooterEmailButton">
            </form>
            </div>
        </div>   
    </div>

</body>

</html>