<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="signup">
    <img class="bookmasters" src="../Untitled-1.png" alt="photo">
    <div>
<form class="sgn" method="GET" action="signup.php">
<label><b>Username:</b></label>
<input type="text" name="user" >
<br><br>
<label for=""><b>Email address:</b></label>
<input type="text" name="address" >
<br><br>
<label for=""><b>Password:</b></label>
<input type="password" name="pass" >
<br><br>
<label for=""><b>Retype password:</b></label>
<input type="password" name="repass" >
<br><br>
<input type="submit" value="Signup">

</form>
<h2 style="color:red">
<?=$_SESSION['error']?>
</h2>
</div>
</body>
</html>