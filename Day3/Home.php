<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
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
            <h2><strong>Admin</strong></h2>
            <img src="#" alt="img" width="20px" height="20px">
        </div>
    </div>
    <br>
    <form  method="post"   enctype="multipart/form-data"  action="profile.php">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>
            <br><br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <br><br>
            <label for="pswRepeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pswRepeat" id="pswRepeat" required>
            <br><br>
            <label for="room"><b>Room No</b></label>
            <select name="room" id="room">
                <option value="App1">App1</option>
                <option value="App2">App2</option>
                <option value="cloud">cloud</option>
            </select>
            <br><br>
            <label for="ext"><b>Ext.</b></label>
            <input type="number" placeholder="Enter Ext" name="ext" id="ext" required>
            <br><br>
            <label for="picture"><b>Upload Profile Pic</b></label>
            <input type="file" name="picture" id="picture">
            <br><br>
            <input type="submit" value="upload">
            <hr>
        </div>
    </form>
</body>

</html>