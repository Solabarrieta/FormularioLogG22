<?php include '../DbConfig.php' ?>

<?php
include '../DbConfig.php';
if (!isset($_POST['email'])) die('WORNG AUTHENTICATION');
$mysql = mysqli_connect($server, $db_user, $pass, $basededatos) or die(mysqli_connect_error());

$username = $_POST['email'];
$pasw = $_POST['password'];
$pasw2 = $_POST['confirm_password'];
$tipo = $_POST['type'];

//$validateuser=test_input($_POST['email']);
$pattern= "/^[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)$/";
$patternprof='/^([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))$/';


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
if($tipo=='profesor'){
    if(!preg_match("/^([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))$/",$username)){
        echo "el email del profesor no es valido";
        die('');
    }
    
}else{
    if(!preg_match($pattern,$username)){
        echo "el email del estudiante no es valido";
        die();
    }
    echo "el email de estudiante es valido";

}
$Singup = mysqli_query($mysql, "INSERT INTO Users (user_email,user_password,tipo) VALUE ('$username','$pasw','$tipo')");


mysqli_close($mysql); //cierra la conexion

<<<<<<< HEAD
header("Location: ../Layout.php?user=$username");
=======
header("Location: ../Layout.php?user=$username");
>>>>>>> 4fea4373d9eede57b22556c0bcce655f8439107c
