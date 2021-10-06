<?php
$mysql = mysqli_connect("localhost", "root", "2000", "G22") or die(mysqli_connect_error());
$username = $_POST['email'];
$pass = $_POST['pass'];
$pass2=$_POST['passcon'];

$usuarios = mysqli_query($mysql, "select * from Users where user_email ='$username'");
$cont = mysqli_num_rows($usuarios); 
if($cont>0){
    echo "ya existe este usuario en la base de datos.";
    exit();
}

$Singup = mysqli_query($mysql, "INSERT INTO Users (user_email,user_password) VALUE ('$username','$pass')");
mysqli_close($mysql); //cierra la conexion


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ha entrado a ComprobarSingup.php</p>
</body>
</html>