<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
  <style>
    <?php include "../styles/tableStyles.css" ?>
  </style>
</head>

<body>
  <?php include '../php/DbConfig.php' ?>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <?php

    //Para crear la conexión con la base de datos.
    $conn = mysqli_connect($server, $db_user, $pass, $basededatos);
    //Es necesario comprobar si se ha conectado, sino hay que matar la conexión... 

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $user = $_GET['user'];
    $sql = "SELECT * FROM preguntas WHERE email='$user'";
    $result = mysqli_query($conn, $sql);

    echo
    "
  <table class=\"tabla\" border=\"1\" style\"width: 100% \">
    <tr>
      <th>Correo</th>
      <th>Enunciado</th>
      <th>Respuesa Correcta</th>
      <th>Respuesta Incorrecta 1</th>
      <th>Respuesta Incorrecta 2</th>
      <th>Respuesta Incorrecta 3</th>
      <th>Complejidad</th>
      <th>Tema</th>
  </tr>

  ";
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
       <tbody styles='overflow: scroll'>
        <tr>
          <td>" . $row['email'] . "</td>
          <td>" . $row['enunciado'] . "</td>
          <td>" . $row['respuestaCorrecta'] . "</td>
          <td>" . $row['respuestaIncorrecta1'] . "</td>
          <td>" . $row['respuestaIncorrecta2'] . "</td>
          <td>" . $row['respuestaIncorrecta3'] . "</td>
          <td>" . $row['complejidad'] . "</td>
          <td>" . $row['tema'] . "</td>
        </tr>
        </tbody>";
      }
    } else {
      echo "0 results";
    }
    mysqli_close($conn);
    ?>
  </section>

  <?php include '../html/Footer.html' ?>
</body>

</html>