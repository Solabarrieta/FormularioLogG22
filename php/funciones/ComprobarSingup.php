<?php include '../DbConfig.php' ?>

<?php
if (!isset($_POST['email']))die('WORNG AUTHENTICATION');
$mysql = mysqli_connect($server, $user, $pass, $basededatos) or die(mysqli_connect_error());
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

<<<<<<< HEAD

=======
>>>>>>> 28137e8ca162c33b55d80da355e02b03835737a1
header("Location: ../Layout.php?username=$username");