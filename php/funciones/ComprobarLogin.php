<?php
if (isset($_POST['email'])) {
    $mysql = mysqli_connect("localhost", "root", "2000", "G22") or die(mysqli_connect_error());
    $user= $_POST['email'];
    $pass = $_POST['pass'];
    $usuarios = mysqli_query($mysql, "select * from Users where user_email ='$user'
and user_password ='$pass'");
    $cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas
    mysqli_close($mysql); //cierra la conexion
    if ($cont == 1) {
        include '../../php/session.php';
        postData($user);
        echo ("Login correcto<p><a href='../Layout.php?user=$user'>Puede insertar
    preguntas</a>");
    } else {
        echo ("Par&aacute;metros de login incorrectos<p><a
    href='../../php/Login.php'>Puede intentarlo de nuevo</a>");
    }
}