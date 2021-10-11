<?php
include '../DbConfig.php';
if (!isset($_POST['email'])) die('WORNG AUTHENTICATION');
$mysql = mysqli_connect($server, $user, $pass, $basededatos) or die(mysqli_connect_error());

$username = $_POST['email'];
$pasw = $_POST['password'];
$pasw2 = $_POST['confirm_password'];
$tipo = $_POST['type'];

if($pasw!=$pasw2){
    echo ("The passwords aren't the same");
    header("Location: ../singUp.php");
}



$usuarios = mysqli_query($mysql, "select * from Users where user_email ='$username'");
$cont = mysqli_num_rows($usuarios);
if ($cont > 0) {
    echo "ya existe este usuario en la base de datos.";
    exit();
}
$Singup = mysqli_query($mysql, "INSERT INTO Users (user_email,user_password,tipo) VALUE ('$username','$pasw','$tipo')");


mysqli_close($mysql); //cierra la conexion

header("Location: ../Layout.php?user=$username");