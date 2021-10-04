<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include './DbConfig.php' ?>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form>
      <?php
                 $parametro= array("email","enunciado","respuestaCorrecta","respuestaIncorrecta1","respuestaIncorrecta2","respuestaIncorrecta3","complejidad","tema");
                 $i=0;
                 $conn = new mysqli($server, $user, $pass, $basededatos);
                 if(mysqli_connect_errno()){
                  printf("Error de conexión: %s\n", mysqli_connect_error());
                  exit();
                 }
                  /*
                  $result=$conn->query("SELECT * from preguntas where email like '".$_POST["correo"]."'");
                  if(!$result){
                    echo "no se ha podido escoger el email";
                    exit();
                  }

                  echo $result["email"];
                  if($result["email"]==$_POST["correo"]){
                    echo "este correo ya ha registrado una pregunta";
                    exit();
                  }
                */
                  
                  
                  

                  $stmt = $conn->prepare("INSERT INTO preguntas (email, enunciado,respuestaCorrecta, respuestaIncorrecta1, respuestaIncorrecta2, respuestaIncorrecta3, complejidad, tema) VALUES ('".$_POST["correo"]."','".$_POST["enunciado"]."','".$_POST["correcta"]."','".$_POST["incorrecta"]."','".$_POST["incorrecta1"]."','".$_POST["incorrecta2"]."','".$_POST["complejidad"]."','".$_POST["tema"]."')");

                  

                  if($stmt){
                    if($stmt->execute()){
                      echo "se ha enviado la pregunta correctamente";
                      $stmt->close();
                      echo "<p><a href='./ShowQuestions.php'>Ver preguntas</a></p>";
                    } 
                  }else{
                    echo 'no se ha podido enviar la pregunta a la base de datos';
                  }
                  
            ?>

    </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
