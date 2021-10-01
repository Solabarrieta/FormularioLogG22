<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include './DbConfig.php' ?>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form>
      <?php
        $link = mysqli_connect($serve,$user, $pass, $basededatos);
        $correo = $_POST[correo];
        $enunciado = $_POST[enunciado];
        $rcorrecta = $_POST[correcta];
        $rincorrecta1 = $_POST[incorrecta];
        $rincorrecta2 = $_POST[incorrecta1];
        $rincorrecta3 = $_POST[incorrecta2];
        $complejidad = $_POST[complejidad];
        $tema = $_POST[tema];

        $sql ="INSERT INTO preguntas (email,enunciado,respuestaCorrecta,respuestaIncorrecta1,respuestaIncorrecta2,respuestaIncorrecta3,complejidad,tema) VALUES ('$_POST[email]','$_POST[enunciado]', '$_POST[respuestaCorrecta]')";

        if(!mysqli_query($link,$sql)){
          die('Error: '.mysqli_error($link));
        }else{
          echo '
            Pregunta añadida
          ';
          echo "<p><a href= './ShowQuestions.php'> Ver preguntas</a></p>";
        }
      ?>

    </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
