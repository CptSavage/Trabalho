<?php
  include_once 'dbconfig.php';

  if($_POST){
    $first_name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO registo(nome,email,password)
    VALUES('$first_name','$email','$password')";
    mysqli_query($link,$sql_query);
    echo "Registado";
  }

  if($_POST['password'] != $_POST['confirmpassword']){
   echo "Your passwords did not match.";
   exit();
 }
 ?>
