<?php
include("Header.php");

if (isset($_GET["errors"])) {
    $errors = unserialize($_GET["errors"]);
}

?>
<form method="post" action="profile.php">
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
        <label for="age"><b>Age</b></label>
        <input type="number" placeholder="Age" name="age" id="age" required>
        <span style="color: red;"><?= (isset($errors["age"])) ? $errors["age"] : ""; ?></span>
        <br><br>
        <label for="city"><b>City</b></label>
        <select name="city" id="city">
            <option value="Qena">Qena</option>
            <option value="Sohag">Sohag</option>
            <option value="Cairo">Cairo</option>
        </select>
        <br><br>
        <input type="submit" value="upload">
        <hr>
    </div>
</form>

<?php include("Footer.html"); ?>