<?php
if(isset($_GET['btnLogin'])){
    $txt="login.php?user=".$_GET['user']."&pass=".$_GET['pass'];
    header("Location: $txt");
}else{
    session_start();
    $_SESSION['error']="";
    header('Location: centerSignup.php');
}