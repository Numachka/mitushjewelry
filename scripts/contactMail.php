<?php
    include "Database.php";

    $db = new Database( "shareddb-o.hosting.stackcp.net", "gallery-313039e9be", "wfl3da0m2z", "gallery-313039e9be" );
    $link = $db->connect();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["usrtel"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    mail(
        "numachka@gmail.com",
        "Mitush Jewelry - contact - ",
        $name . " has contacted on the website! He left a message - \r\n" .
        "______________________________________________\r\n\r\n" .
        $subject ."\r\n\r\n" . $message ."\r\n" .
        "______________________________________________\r\n" .
        "contact him back via email - " . $email . "\r\nor via phone - " . $phone
    );

	header("Location: https://mitushjewelry.com/contact.php");

?>