<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../js/ValidateFieldsQuestionJQ.js"></script> 
  -->
  <script src="../js/ValidateFieldsQuestionJS.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
    <form action="AddQuestion.php" onsubmit= "return comprobarCamposVacios()">
    <div><label for="correo">Introduce un correo de UPV/EHU: </label>
      <input type ="text" id="email" name="correo">  
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
      <input type="text" name="incorrecta2"id="incorrecta2">
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
