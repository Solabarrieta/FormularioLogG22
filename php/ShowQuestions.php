<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  </head>
  <body>
  <?php include '../php/DbConfig.php'?>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
    <?php

//Para crear la conexión con la base de datos.
$conn = mysqli_connect($server, $user, $pass, $basededatos);
//Es necesario comprobar si se ha conectado, sino hay que matar la conexión... 

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM preguntas";
$result =mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    echo
    "
      <table class=\"tabla\">
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
        <tr>
          <td>".$row['email']."</td>
          <td>".$row['enunciado']."</td>
          <td>".$row['respuestaCorrecta']."</td>
          <td>".$row['respuestaIncorrecta1']."</td>
          <td>".$row['respuestaIncorrecta2']."</td>
          <td>".$row['respuestaIncorrecta3']."</td>
          <td>".$row['complejidad']."</td>
          <td>".$row['tema']."</td>
        </tr>

      </table>
    ";

  }
}else{
  echo "0 results";
}
mysqli_close($conn);

?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
