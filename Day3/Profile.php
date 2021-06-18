<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
    if (isset($_POST)) {
        $email = $_POST["email"];
        $pass = $_POST["psw"];
        $pswRepeat = $_POST["pswRepeat"];
        $Name ="";
        $imgPath ="#";
        if(isset($_POST["name"]))
        {
            $Name= $_POST["name"];
        }
        $emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

        if (preg_match($emailPattern, $email) == 0) {
            echo "please enter valid email";
            header("Location: Home.php");
        } 
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);

        if(!$lowercase || !$number || $uppercase || strlen($pass) < 8) {
            header("Location: Home.php");
        }
        
        if (isset($_FILES)) {
            $filename = $_FILES["picture"]["name"];
            $tempPath = $_FILES["picture"]["tmp_name"];
            $fileSize = $_FILES["picture"]["size"];
            $explodName = explode(".", $filename);
            $ext = end($explodName);
            $extarray = ["jpg", "JPG", "png", "PNG", "jpeg", "JPEG", "gif", "GIF"];

            if (in_array($ext, $extarray) == false) {
                echo "File is not allowed to upload just use image";
                header("Location: Home.php");
            } else {
                move_uploaded_file($tempPath, "img/" . $filename);
                $imgPath = "img/".$filename;
            }
        }
    }
    ?>
<div class="header">
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="slider">
            <h2 id="Title"><strong><?=$Name?></strong></h2>
            <img src="<?=$imgPath?>" alt="img" width="50px" height="50px">
        </div>
    </div>
    <br>
    <table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Room No</th>
        <th>ext.</th>
        <th>Picture</th>
    </tr>
    <tr>
        <td><?=$Name?></td>
        <td><?=$_POST["email"]?></td>
        <td><?=$_POST["room"]?></td>
        <td><?=$_POST["ext"]?></td>
        <td><img src="<?=$imgPath?>" alt="img" width="100px" height="100px"></td>
    </tr>
    </table>
    
</body>
</html>
