<?php
session_start();
$table=strtolower($_GET['name']);
$comm=$_GET['comment'];
$userLogin=$_SESSION['user'];

$user="root";
    $pass="";
    $db="booksdb";
    require('../rb-mysql.php');
    R::setup("mysql:host=localhost;dbname=$db","$user","$pass");
    

//$result=mysqli_query($sql,"INSERT INTO $table (rateing,username,review,date) VALUES (9999,'$userLogin','$comm',NOW())");
$temp=R::dispense("$table");
      
       $temp->rateing=9999;
       $temp->username=$userLogin;
       $temp->date=NULL;
       $temp->review=$comm;
      
       R::store($temp);

header("Location: bookReview.php?name=$table")



?>