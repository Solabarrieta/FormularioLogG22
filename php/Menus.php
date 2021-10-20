<?php
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$user = $_GET['user'];
echo "user: $user";
$variables = "?user=$user"

?>
<div id='page-wrap'>
  <form method="POST">
    <header class='main' id='h1'>
      <span class="right"><a href="Login.php">Logout</a></span>
      <span class="right" style="display:none;"><a href="/logout">Logout</a></span>

    </header>
    <nav class='main' id='n1' role='navigation'>
      <span><a class="ancla" href='Layout.php<?php echo "$variables" ?>'>Inicio</a></span>
      <span><a class="ancla" href='QuestionForm.php<?php echo "$variables" ?>'> Insertar Pregunta</a></span>
      <span><a class="ancla" href='ShowQuestions.php<?php echo "$variables" ?>'> Insertar Pregunta</a></span>
      <span><a class="ancla" href='Credits.php<?php echo "$variables" ?>'>Creditos</a></span>
    </nav>
  </form>