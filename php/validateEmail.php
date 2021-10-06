<?php
$email_a = 'joe@example.com';
$email_b = $_POST['email'];


if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "Esta direccción de correo ($email_a) es valida.";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email_b) es válida.";
}
function validarEmail(String $email){
    
}
}
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
    <p>hola esto es una prueba</p>
</body>
</html>