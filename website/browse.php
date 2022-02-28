<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
   <link rel="stylesheet" href="styleBrowse.css">
   <link rel="stylesheet" href="styleFooter.css">
   <link rel="stylesheet" href="styleIndex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMaster</title>
</head>
<body>
<div class="nav">
<img id="title" src="../Untitled-1.png" alt="poza">
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="">BEST SELLER</a></li>
<li><a href="">HIGHEST RATING</a></li>
<li><a href="histroy.php">HISTROY</a></li>
</ul>


<img src="256x256bb.png" class="photo" alt="photouser">
<p><b><?php
if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}else{
    echo "Not logged";
}
?></b></p>

<form action="browse.php">
    <input type="text" name="browse" value="Browse">
    <input type="submit" value="Browse">
</form>

</div>
