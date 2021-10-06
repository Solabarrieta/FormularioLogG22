<?php
$mysql = mysqli_connect("localhost", "root", "", "prueba") or die(mysqli_connect_error());
$username = $_POST['email'];
$pass = $_POST['pass'];
$usuarios = mysqli_query($mysql, "select * from users where user_email ='$username'
and user_password ='$pass'");
$cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas
mysqli_close($mysql); //cierra la conexion
if ($cont == 1) {
    echo ("Login correcto<p><a href=‘Layout.php’>Puede insertar
preguntas</a>");
} else {
    echo ("Par&aacute;metros de login incorrectos<p><a
href='../html/Login.html'>Puede intentarlo de nuevo</a>");
}
