<?php
include("Header.php");

if (isset($_POST)) {
    $email = $_POST["email"];
    $pass = $_POST["psw"];
    $age = (int)$_POST["age"];
    $Name = "";
    if (isset($_POST["name"])) {
        $Name = $_POST["name"];
    }
    if ($age > 100) {
        $urlerrors = urlencode(serialize($_POST));
        header("Refresh:5;URL=HomeSignUp.php?errors=" . $urlerrors);
    }
    $emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

    if (preg_match($emailPattern, $email) == 0) {
        echo "please enter valid Email";
        header("Refresh: 2;URL=  HomeSignUp.php");
    }

    if (strlen($pass) < 6) {
        echo "please enter valid Password";
        header("Refresh: 2;URL=  HomeSignUp.php");
    }
}
?>
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>>
    </tr>
    <tr>
        <td><?= $Name ?></td>
        <td><?= $email ?></td>
        <td><?= $age ?></td>
    </tr>
</table>

<?php include("Footer.html"); ?>