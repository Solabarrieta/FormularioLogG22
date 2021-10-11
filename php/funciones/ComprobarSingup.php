<?php
if (!isset($_POST['email']))die('WORNG AUTHENTICATION');
$mysql = mysqli_connect("localhost", "root", "2000", "G22") or die(mysqli_connect_error());
$username = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['confirm_password'];

$usuarios = mysqli_query($mysql, "select * from Users where user_email ='$username'");
$cont = mysqli_num_rows($usuarios);
if ($cont > 0) {
    echo "ya existe este usuario en la base de datos.";
    exit();
}
echo "'$username'";
$Singup = mysqli_query($mysql, "INSERT INTO Users (user_email,user_password) VALUE ('$username','$pass')");
mysqli_close($mysql); //cierra la conexion




header("Location: ../Layout.php?username=$username");