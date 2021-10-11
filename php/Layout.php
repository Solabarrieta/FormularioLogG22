<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
</head>

<body>
  <?php
  include '../php/session.php';
  if (!isset($user)) {
    echo "$use";
    include '../php/MenusReduce.php';
  } else {
    //postData($_GET['user']);
    echo "$user";
    include '../php/Menus.php';

  }
  ?>

  <section class="main" id="s1">
    <div>

      <h2>Quiz: el juego de las preguntas</h2>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>