<?php
$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email_a) es válida.";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "Esta dirección de correo ($email_b) es válida.";
}
function validarEmail($email){
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
    <h1>hola</h1>
</body>
</html>
