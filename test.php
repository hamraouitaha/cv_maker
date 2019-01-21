<?php

$test = file_get_contents("infor.json");
$json = json_decode($test, true);
if ((isset($_POST['username'])) && (isset($_POST['password']))) {
    
    $username = $_POST['username'];
    $s1       = $_POST['password'];
    $password = md5('$s1');
    $crypted  = password_hash($password, PASSWORD_DEFAULT);
         if (($username == $json[0]['username']) && ($password == $json[0]["password"])) {
         header('location:ayoub.php');
           }
               else
           {
              header('location:login.php');   
           } 
}
?>