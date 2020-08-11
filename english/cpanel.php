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
    <link href="cpanel.css" rel="stylesheet" type="text/css">
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
            <a href="index.php" class="topnavLink ">Home</a> <a href="aboutme.php" class="topnavLink">About</a> <a href="gallery.php"
                class="topnavLink">Gallery</a> <a href="contact.php" class="topnavLink">Contact</a>
        </div>
        <!------------------This part is hidden - dropdown when 400px---------->
        <div id="navDropdown">
            <button id="navDropdownButton" onclick="dropdown()">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <!--hidden-->
            <div id="navDropdownMenu" class="navDropdownMenu">
                <a class="navDropdownItem" href="index.php">Home</a> <a class="navDropdownItem" href="aboutme.php">About</a> <a
                    class="navDropdownItem" href="gallery.php">Gallery</a> <a class="navDropdownItem" href="contact.php">Contact</a>
            </div>
        </div>
    </div>
    <div id="cpTitleDiv">
        <h1 class="cpTitleHead">Control Panel</h1>
    </div>
    <div id="productUpload">
        <div id="productUploadFormDiv">
            <form class="productUploadForm" action="../scripts/uploadProduct.php" target="_self" method="post" enctype="multipart/form-data">
                <h1 class="uploadHead">Fill form to upload a product to the
                    database.</h1>
                <p class="uploadPara">The file is saved to "./products" and the
                    fields will decide where it pops on the website.</p>
                <input type="file" name="image" class="uploadImage" required>
                <select name="type" class="uploadType" required>
                    <option value="ring">Ring</option>
                    <option value="earring">Earring</option>
                    <option value="bracelet">Bracelet</option>
                    <option value="necklace">Necklace</option>
                </select>
                <input type="text" name="name" class="uploadText" placeholder="Product name" required>
                <input type="text" name="description" class="uploadText" placeholder="Product description" required>
                <input type="text" name="material" class="uploadText" placeholder="Product material" required>
                <input type="text" name="dimensions" class="uploadText" placeholder="Product dimensions" required> <input type="text" name="price" class="uploadText" placeholder="Product price" required>
                <input type="text" name="marketurl" class="uploadText" placeholder="Marmelada URL" required>
                <input type="submit" value="Upload Product" name="uploadSubmit" class="uploadSubmit">
            </form>
        </div>
    </div>
    <div id="productUploadManageDiv">
        <?php include './scripts/productTable.php'; ?>
    </div>
    <div id="footer">
        <div id="social">
            <h1 class="socialText">Follow me on social media</h1>
            <a href="https://www.facebook.com/Mitushjewelry/" class="socialAnchor"><i class="fab fa-facebook-square fa-3x socialIcon"></i></a> <a
                href="https://www.instagram.com/mitush1/?hl=en" class="socialAnchor"><i class="fab fa-instagram fa-3x socialIcon"></i></a>
        </div>

        <div id="newsletter">
            <form class="emailForm" autocomplete="off" action="./scripts/newsletter.php" target="_self" method="post">
                <h1 class="newsletterText">Sign up for my newsletter for special
                    offers!</h1>
                <input type="email" name="email" class="emailInput"> <input type="submit" value="Sign Up!" class="emailButton">
            </form>
        </div>

        <div id="contact">
            <h1 class="contactHead">Contact me on Whatsapp</h1>
            <h1 class=contactNumber>
                <a class="contactAnchor"><i class="fab fa-whatsapp-square contactIcon"></i></a> 054-5256540
            </h1>
        </div>

        <div id="copyright">
            <i class="far fa-copyright copyrightIcon"></i>
            <p class="copyrightText">Created by Nahum Kletkin 2019</p>
        </div>

        <!----------hidden------------>
        <!--This footer will show when portview is > 45 0px-->

        <div id="smallFooter">
            <div id="smallFooterContact">
                <p class="smallFooterText">Follow me on social media or contact me
                    on Whatsapp</p>
                <a href="https://www.facebook.com/Mitushjewelry/" class="smallFooterSocialAnchor"><i
                        class="fab fa-facebook-square fa-1x smallFooterSocialIcon"></i></a>
                <a href="https://www.instagram.com/mitush1/?hl=en" class="smallFooterSocialAnchor"><i
                        class="fab fa-instagram fa-1x smallFooterSocialIcon"></i> </a> <a class="smallFooterSocialAnchor"><i
                        class="fab fa-whatsapp-square smallFooterSocialIcon"></i></a>
                <p class="smallFooterText">054-5256540</p>
            </div>

            <div id="smallFooterNewsletter">
                <form class="smallFooterEmailForm" autocomplete="off" action="./scripts/newsletter.php" target="_self" method="post">
                    <p class="smallFooterNewsletterText">
                        Sign up for my newsletter <br> for special offers!
                    </p>
                    <input type="email" name="email" class="smallFooterEmailInput"> <input type="submit" value="Sign Up!"
                        class="smallFooterEmailButton">
                </form>
            </div>
        </div>
    </div>
</body>

</html>