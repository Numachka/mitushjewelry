<!DOCTYPE html>
<html>

<head>
    <meta name="author" content="Nahum Kletkin">
    <meta name="description" content="Landing page for Shlomit's website">
    <meta name="keywords" content="Rings, Earrings, Bracelets, Necklaces, Jewelry, Mitush, Shlomit, Shivatsky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="mitushjewelry.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
    <script src="mitushjewelry.js" type="text/javascript"></script>
    <link rel="icon" href="./Pictures/logo/logo 20x20.png">
    <title>Mitush Jewelry</title>

</head>

<body>

    <div id="landerDiv">
        <video autoplay muted loop id="landerVideo">
            <source src="./Videos/landerVideoBackground.mp4" type="video/mp4">
            </video>

        <div id="header">
            <div id="navbarLogoHider">
                <div class="logoDiv">
                    <a class="logoAnchor" href="index.php">
                        <img id="logoImage" src="./Pictures/logo/logo 400 x 400.png" alt="Mitush">
                    </a>
                </div>
            </div>
            <div id="navbarButtonsHider">
                <div id="navbarButtons">
                    <a href="index.php" class="navLink active">Home</a>
                    <a href="aboutme.php" class="navLink">About</a>
                    <a href="gallery.php" class="navLink">Gallery</a>
                    <a href="contact.php" class="navLink">Contact</a>
                </div>
            </div>
            <!------------------This part is hidden - dropdown when 400px---------->

            <div id="navDropdown">
                <button id="navDropdownButton" onclick="dropdown()"><i class="fas fa-bars fa-2x"></i></button>
                <!--hidden-->
                <div id="navDropdownMenu" class="navDropdownMenu">
                    <a class="navDropdownItem" href="index.php">Home</a>
                    <a class="navDropdownItem" href="aboutme.php">About</a>
                    <a class="navDropdownItem" href="gallery.php">Gallery</a>
                    <a class="navDropdownItem" href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div id="aboutDiv">
        <img src="./Pictures/Self/portrait2-square.jpg" id="aboutPortrait">

        <div id="aboutTextDiv">
            <h3 class="aboutHead aboutText">Welcome to my store</h3>
            <p class="aboutText">Gentle, tender and modest, Yet big, intricate and brave. <br>
                I welcome you to my store, everything is made by hand, with love. <br>
                Feel free to look around, don't be shy to contact me incase you find something!
            </p>
            <a href="aboutme.php" class="aboutAnchor">Click here to learn more about me</a>
        </div>
    </div>

    <div id="productsDiv">

        <div id="indexDecorations">
            <h1 class="indexDecoratingText">One for every taste</h1>
        </div>
        <div id="productRingDiv" class="productDiv">
            <a href="gallery.php" class="productAnchor">
                <h1 id="productRingHead" class="productHead">Rings</h1>
            </a>
        </div>
        <div id="productEarringDiv" class="productDiv">
            <a href="gallery.php" class="productAnchor">
                <h1 id="productEarringHead" class="productHead">Earrings</h1>
            </a>
        </div>
        <div id="productBraceletDiv" class="productDiv">
            <a href="gallery.php" class="productAnchor">
                <h1 id="productBraceletHead" class="productHead">Bracelets</h1>
            </a>
        </div>
        <div id="productNecklaceDiv" class="productDiv">
            <a href="gallery.php" class="productAnchor">
                <h1 id="productNecklaceHead" class="productHead">Necklaces</h1>
            </a>
        </div>
    </div>

    <div id="footer">
        <div id="social">
            <h1 class="socialText">Follow me on social media</h1>
            <a href="https://www.facebook.com/Mitushjewelry/" class="socialAnchor"><i
                    class="fab fa-facebook-square fa-3x socialIcon"></i></a>
            <a href="https://www.instagram.com/mitush1/?hl=en" class="socialAnchor"><i
                    class="fab fa-instagram fa-3x socialIcon"></i></a>
        </div>

        <div id="newsletter">
            <form class="emailForm" autocomplete="off" action="./scripts/newsletter.php" target="_self" method="post">
                <h1 class="newsletterText">Sign up for my newsletter for special offers!</h1>
                <input type="email" name="email" class="emailInput">
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
        <!--This footer will show when portview is > 45 0px-->

        <div id="smallFooter">
            <div id="smallFooterContact">
                <p class="smallFooterText">Follow me on social media or contact me on Whatsapp</p>
                <a href="https://www.facebook.com/Mitushjewelry/" class="smallFooterSocialAnchor"><i
                        class="fab fa-facebook-square fa-1x smallFooterSocialIcon"></i></a>
                <a href="https://www.instagram.com/mitush1/?hl=en" class="smallFooterSocialAnchor"><i
                        class="fab fa-instagram fa-1x smallFooterSocialIcon"></i>
                </a>
                <a class="smallFooterSocialAnchor"><i class="fab fa-whatsapp-square smallFooterSocialIcon"></i></a>
                <p class="smallFooterText">054-5256540</p>
            </div>

            <div id="smallFooterNewsletter">
                <form class="smallFooterEmailForm" autocomplete="off" action="./scripts/newsletter.php" target="_self"
                    method="post">
                    <p class="smallFooterNewsletterText">Sign up for my newsletter <br> for special offers!</p>
                    <input type="email" name="email" class="smallFooterEmailInput">
                    <input type="submit" value="Sign Up!" class="smallFooterEmailButton">
                </form>
            </div>
        </div>
    </div>

</body>

</html>