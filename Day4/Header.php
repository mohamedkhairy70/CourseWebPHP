<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 4</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div class="header">
        <div class="navbar">
            <ul>
                <?php if (!isset($_SESSION["user"])) { ?>
                    <li><a href="HomeSignUp.php">Home Sign Up</a></li>
                <?php } ?>

                <li><a href="ContactUs.php">Contact Us</a></li>

                <?php if (!isset($_SESSION["user"])) { ?>
                    <li><a href="HomeSignIn.php">Sign In</a></li>
                <?php } ?>
                
                <?php if (isset($_SESSION["user"])) { ?>
                    <li><a href="LogOut.php">Log Out</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="slider">
            <?php if (isset($_SESSION["user"])) { ?>
                <h2><strong><?= $_SESSION["user"] ?></strong></h2>
            <?php } ?>

        </div>
    </div>
    <br>