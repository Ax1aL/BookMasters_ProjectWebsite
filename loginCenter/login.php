<?php

if($_GET['user']!="" && $_GET['pass']!=""){
    $userLogin=$_GET['user'];
    $passLogin=$_GET['pass'];
    }else{
    die("Fill out all fields!");
    }


    $user="root";
    $pass="";
    $db="testdb";
    $table="logininfo";
    require('../rb-mysql.php');
    R::setup("mysql:host=localhost;dbname=$db","$user","$pass");
    
    $sql="SELECT * FROM $table WHERE username LIKE '$userLogin'";
   $book=R::getRow($sql);
    if($book!=NULL){
        if($passLogin==$book['password']){
            echo "worked";
            session_start();
            $_SESSION['user']=$book['username'];
            header("Location: ../website/");
            
        }else{
            die("Password not matching!");
        }
    }else{
        die("Account doesn't exist!");
        
    }
    






?>
