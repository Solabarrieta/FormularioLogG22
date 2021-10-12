<?php

 require 'DbConfig.php';

if (isset($_POST['email'])) {
  
    $mysql = mysqli_connect($server, $db_user, $pass, $basededatos) or die(mysqli_connect_error());
    $user= $_POST['email'];
    $pass = $_POST['pass'];
    $usuarios = mysqli_query($mysql, "select * from Users where user_email ='$user'and user_password ='$pass'");
    $cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas
    mysqli_close($mysql); //cierra la conexions
    if ($cont == 1) {
      header("Location: Layout.php?user=$user");
    } else {
        echo ("Parametros de login incorrectos<p><a
    href='Login.php'>Puede intentarlo de nuevo</a>");
    }
}
?>

<!--FRONTED-->
<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  
  <?php 
  if(!isset($_GET['user'])){
    include '../php/MenusReduce.php';
  }else{
    include '../php/Menus.php';
  }
  ?>
  <section class="main" id="s1">
    <form method="POST">
      <h2>Identificación de usuario </h2>
      <p> Email : <input type="text" required name="email" size="21" value="" />
      <p> Password: <input type="password" required name="pass" size="21" value="" />
      <p> <input id="input_2" type="submit" />
      </form>
  </section>
  <?php include '../html/Footer.html' ?>