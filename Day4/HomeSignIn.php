<?php
include("Header.php");
?>
<h3>Welcome to Home Page</h3>
<?php if (isset($_SESSION["user"])) {
    echo "you are already logged in";
} else { ?>
    <form method="post" action="SignIn.php">
        Username:<input type="text" name="username"><br>
        Password:<input type="password" name="password"><br>
        <input type="submit" value="Login" name="login">
    </form>
<?php }

?>
<?php
include("Footer.html");
?>