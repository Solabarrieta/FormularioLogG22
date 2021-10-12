<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
</head>

<body>
  <?php
  if (!isset($_GET['user'])) {
    include '../php/MenusReduce.php';
  } else {
    include '../php/Menus.php';
  }
  ?>
  <section class="main" id="s1">
    <div>

      <h2>Oier Solabarrieta Egues</h2>
      <h2>Fredy Samuel Guzman Ajala</h2>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>