<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="DataForm.php" method="post">

  <div>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    <br><br>
    <label for="skill"><b>Your Skills</b></label>
    <input type="tretext" placeholder="Enter Your Skills" name="skill" required>
    <br><br>
    <label for="phone"><b>Phone</b></label>
    <input type="tel" placeholder="Enter Phone" name="phone" required>
    <br><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br><br>
    <button type="submit">Login</button>
  </div>

</form>
</body>
</html>