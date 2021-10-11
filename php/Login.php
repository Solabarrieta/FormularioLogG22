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
    <form action=funciones/ComprobarLogin.php method="POST">
      <h2>Identificación de usuario </h2>
      <p> Email : <input type="email" required name="email" size="21" value="" />
      <p> Password: <input type="password" required name="pass" size="21" value="" />
      <p> <input id="input_2" type="submit" />
      </form>
  </section>
  <?php include '../html/Footer.html' ?>