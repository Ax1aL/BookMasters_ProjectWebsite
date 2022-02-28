<?php
session_start();
$_SESSION['error']="";

$user="root";
    $pass="";
    $db="testdb";
    $table="logininfo";
    require('../rb-mysql.php');
    R::setup("mysql:host=localhost;dbname=$db","$user","$pass");
    
 

if($_GET['user']!="" && $_GET['pass']!="" && $_GET['repass']!="" && $_GET['address']!=""){
    if($_GET['pass']==$_GET['repass']){
        $userLogin=$_GET['user'];
        $passLogin=$_GET['pass'];
        $address=$_GET['address'];
    }else {
        $_SESSION['error']="Passwords are not matching!";  
        header("Location: centerSignup.php");
    die();}    
}else {$_SESSION['error']="Fill all fields!";
    header("Location: centerSignup.php");
die();}

$sql="SELECT * FROM $table WHERE username LIKE '$userLogin'";
$log=R::getRow($sql);

if($log==NULL){
    
      //  mysqli_query($sql,"INSERT INTO $table (username,password,createDate,address) VALUES ('$userLogin','$passLogin',NULL,'$address')");
       $temp=R::dispense("logininfo");
      
       $temp->username=$userLogin;
       $temp->password=$passLogin;
       $temp->createDate=NULL;
       $temp->address=$address;
      
       R::store($temp);
        header("Location: index.php");
}else
{
    $_SESSION['error']="Username already exists!";
    header("Location: centerSignup.php");die();}


