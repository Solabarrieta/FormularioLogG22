<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
</head>

<body>
  <?php include './DbConfig.php' ?>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form>
        <?php
        $conn = new mysqli($server, $db_user, $pass, $basededatos);
        if (mysqli_connect_errno()) {
          printf("Error de conexión: %s\n", mysqli_connect_error());
          exit();
        }



        $stmt = $conn->prepare("INSERT INTO preguntas (email, enunciado,respuestaCorrecta, respuestaIncorrecta1, respuestaIncorrecta2, respuestaIncorrecta3, complejidad, tema) VALUES ('" . $_GET['user'] . "','" . $_GET['enunciado'] . "','" . $_GET["correcta"] . "','" . $_GET["incorrecta"] . "','" . $_GET["incorrecta1"] . "','" . $_GET["incorrecta2"] . "','" . $_GET["complejidad"] . "','" . $_GET["tema"] . "')");

        $user = $_GET['user'];
        $actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];



        if ($stmt) {
          if ($stmt->execute()) {
            echo "hola";
            echo "se ha enviado la pregunta correctamente";
            echo "<p><a href='./ShowQuestions.php?user=$user'>Ver preguntas</a></p>";
            $stmt->close();
          }
        } else {
          echo 'no se ha podido enviar la pregunta a la base de datos';
        }
        ?>

      </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>