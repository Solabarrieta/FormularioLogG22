<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form>
      <?php
      $correo = $_POST['email'];
      echo $correo
      ?>
    </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
descargar varios programas a la vez