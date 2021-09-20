<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
    <form action="">
      <div>
      <label for="correo">Introduce un correo de UPV/EHU: </label>
      <input type ="text" id="correo" name="correo">  
      </div>
      
      <div>
      <label for="enunciado">Enunciado de la pregunta: </label>
      <input type="text" name="enunciado">
      </div>

      <div>
      <label for="correcta">Respuesta correcta: </label>
      <input type="text" name="correcta">
      </div>

      <div>
      <label for="incorrecta">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta">
      </div>
      
      <div>
      <label for="incorrecta1">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta1">
      </div>
      
      <div>
      <label for="incorrecta2">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta2">
      </div>

      <div>
      <label for="complejidad">Complejidad</label>
      <select name="complejidad" id="complejidad">
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
      </select>
      </div>
      
      <div>
      <label for="tema">Tema(Subject)*:</label>
      <input type="text" name="tema" id="tema">
      </div>


      <div>
        <input accept="image/png,image/jpeg" type="file">
      </div>
      
      <button class="boton" onclick="testEmail()">Crear pregunta</button>
    </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
