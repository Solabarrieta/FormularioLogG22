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

        $email = $_GET['user'];
        $enunciado = $_GET['enunciado'];
        $correcta = $_GET["correcta"];
        $incorrecta1 = $_GET["incorrecta"];
        $incorrecta2 = $_GET["incorrecta1"];
        $incorrecta3 = $_GET["incorrecta2"];
        $complejidad = $_GET["complejidad"];
        $tema = $_GET["tema"];


        $stmt = $conn->prepare("INSERT INTO preguntas (email, enunciado,respuestaCorrecta, respuestaIncorrecta1, respuestaIncorrecta2, respuestaIncorrecta3, complejidad, tema) VALUES ('" . $email . "','" . $enunciado . "','" . $correcta . "','" . $incorrecta1 . "','" . $incorrecta2 . "','" . $incorrecta3 . "','" . $complejidad . "','" . $tema . "')") or die("Error: " . mysqli_connect_errno());




        $user = $_GET['user'];
        $actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];



        if ($stmt) {
          if ($stmt->execute()) {
            echo "se ha enviado la pregunta correctamente";
            echo "<p><a href='./ShowQuestions.php?user=$user'>Ver preguntas</a></p>";
            $stmt->close();
          }
        } else {
          echo 'no se ha podido enviar la pregunta a la base de datos';
        }

        $fichero = '../json/Questions.json';

        $data = file_get_contents($fichero, FILE_USE_INCLUDE_PATH) or die;
        $array = json_decode($data);
        $question = new stdClass();
        $question->subject = $tema;
        $question->author = $email;
        $question->itemBody = new stdClass();
        $question->itemBody->p = $enunciado;
        $question->correctResponse = new stdClass();
        $question->correctResponse->value = $correcta;
        $question->incorrectResponses = new stdClass();
        $question->incorrectResponses->value = array($incorrecta1, $incorrecta2, $incorrecta3);


        $preguntaarray[0] = $question;
        array_push($array->assessmentItems, $preguntaarray[0]);
        $jsonData = json_encode($array);
        $jsonData = str_replace('{', '{' . PHP_EOL, $jsonData);
        $jsonData = str_replace(',', ',' . PHP_EOL, $jsonData);
        $jsonData = str_replace('}', PHP_EOL . '}', $jsonData);


        file_put_contents($fichero, $jsonData) or die("Algo va mal");

        ?>

        <?php

        ?>

      </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>