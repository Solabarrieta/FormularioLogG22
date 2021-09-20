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
      <label for="correo">Introduce un correo de UPV/EHU: </label>
      <input type ="text" id="correo" name="correo">  
      
      <label for="enunciado">Enunciado de la pregunta: </label>
      <input type="text" name="enunciado">

      <label for="correcta">Respuesta correcta: </label>
      <input type="text" name="correcta">
      <label for="incorrecta">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta">
      <label for="incorrecta1">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta1">
      <label for="incorrecta2">Respuesta incorrecta: </label>
      <input type="text" name="incorrecta2">
      
      <label for="complejidad">Complejidad</label>
      <select name="complejidad" id="complejidad">
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
      </select>

      <label for="tema">Tema(Subject)*:</label>
      <input type="text" name="tema" id="tema">

      <input type="file" accept="Imagenes/*">
      
      <button onclick="testEmail()">Crear pregunta</button>
    </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
