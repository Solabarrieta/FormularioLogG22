  <?php
  if (!isset($_GET['user'])) {
    include '../php/MenusReduce.php';
    require '../DbConfig.php';

    $mysql = mysqli_connect($server, $user, $pass, $basededatos) or die(mysqli_connect_error());
    $user = $_POST['email'];
    $pass = $_POST['pass'];
    $usuarios = mysqli_query($mysql, "select * from Users where user_email ='$user'and user_password ='$pass'");
    $cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas
    mysqli_close($mysql); //cierra la conexion
    if ($cont == 1) {
      echo ("Login correcto<p><a href='../Layout.php?user=$user'>Puede insertar
    preguntas</a>");
    } else {
      echo ("Parametros de login incorrectos<p><a
    href='../../php/Login.php'>Puede intentarlo de nuevo</a>");
    }
  } else {
    include '../php/Menus.php';
  }
  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <?php include '../html/Head.html' ?>
  </head>

  <body>
    <section class="main" id="s1">
      <form action=funciones/ComprobarLogin.php method="POST">
        <h2>Identificación de usuario </h2>
        <p> Email : <input type="text" required name="email" size="21" value="" />
        <p> Password: <input type="password" required name="pass" size="21" value="" />
        <p> <input id="input_2" type="submit" />
      </form>
    </section>

    <?php include '../html/Footer.html' ?>