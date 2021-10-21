<?php
if (isset($_POST['correo'])) {
  $pattern = "/^[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)$/";
  $patternprof = '/^([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))$/';
  if (preg_match($pattern, $_POST['correo']) || preg_match($patternprof, $_POST['correo'])) {
    if (isset($_POST['enunciado'])) {
      $enunciado = $_POST['enunciado'];
      if (strlen($enunciado) < 10) {
        if (strlen($enunciado) == 0) {
          die('El campo enunciado es obligatorio, vuelva hacia atras');
        } else {
          die('el enunciado debe contener al menos 10 caracteres, vuelva hacia atras');
        }
      } else {
        $correo = $_POST['correo'];
        $correcta = $_POST['correcta'];
        $incorrecta = $_POST['incorrecta'];
        $incorrecta1 = $_POST['incorrecta1'];
        $incorrecta2 = $_POST['incorrecta2'];
        $tema = $_POST['tema'];
        $complejidad = $_POST['complejidad'];
        if (strlen($incorrecta) == 0 || strlen($incorrecta1) == 0 || strlen($incorrecta2) == 0) {
          die('Ha dejado alguna respuesta incorrecta sin responder, vuelva hacia atras');
        } else {
          if (strlen($tema) == 0) {
            die('el campo tema esta vacio vuelva atras para completarlo');
          } else {
            //echo "pregunta enviada correctamente";
            header("Location: AddQuestion.php?user=$correo&enunciado=$enunciado&correcta=$correcta&incorrecta=$incorrecta&incorrecta1=$incorrecta1&incorrecta2=$incorrecta2&complejidad=$complejidad&tema=$tema");
          }
        }
      }
    }
  } else {
    echo "el email no es valido<br>";
    die('Email no valido');
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/ValidateFieldsQuestionJQ.js"></script> 
  -->
  <script src="../js/ValidateFieldsQuestionJS.js"></script>
</head>

<body>
  <?php include '../php/Menus.php' ?>

  <section class="main" id="s1">
    <?php
    include '../php/ComprobarSingup.php';
    $usuario = $_GET['user'];
    ?>
    <div>
      <!--<form action="AddQuestion.php" onsubmit= "return comprobarCamposVacios()" method="POST" >-->
      <form method="POST">
        <div><label for="correo">Introduce un correo de UPV/EHU: </label>
          <input type="text" id="email" name="correo" value='<?php echo "$usuario" ?>'>
          <p id="textEmail"></p>
        </div>

        <div>
          <label for="enunciado">Enunciado de la pregunta: </label>
          <input type="text" name="enunciado" id="enunciado">
          <p id="textEnunciado"></p>
        </div>

        <div>
          <label for="correcta">Respuesta correcta: </label>
          <input type="text" name="correcta" id="correcta">
          <p id="textCorrecta"></p>
        </div>

        <div>
          <label for="incorrecta">Respuesta incorrecta: </label>
          <input type="text" name="incorrecta" id="incorrecta">
          <p id="textIncorrecta"></p>
        </div>

        <div>
          <label for="incorrecta1">Respuesta incorrecta: </label>
          <input type="text" name="incorrecta1" id="incorrecta1">
          <p id="textIncorrecta1"></p>
        </div>

        <div>
          <label for="incorrecta2">Respuesta incorrecta: </label>
          <input type="text" name="incorrecta2" id="incorrecta2">
          <p id="textIncorrecta2"></p>
        </div>

        <div>
          <label for="complejidad">Complejidad</label>
          <select name="complejidad" id="complejidad">
            <option value="1">Baja</option>
            <option value="2">Media</option>
            <option value="3">Alta</option>
          </select>
          <p id="textComplejidad"></p>
        </div>

        <div>
          <label for="tema">Tema(Subject)*:</label>
          <input type="text" name="tema" id="tema">
          <p id="textTema"></p>
        </div>


        <div>
          <input accept="image/png,image/jpeg" type="file" id=inputFile>
        </div>

        <div>

          <input type="submit">
        </div>

      </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>