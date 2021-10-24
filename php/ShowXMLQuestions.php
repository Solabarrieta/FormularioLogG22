<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <?php include "../styles/tableStyles.css" ?>
    </style>
    <?php include '../html/Head.html' ?>
</head>

<body>
    <?php include '../php/Menus.php' ?>

    <section class="main" id="s1">
        <h1>Questions XML</h1>
        <?php
        $xml = simplexml_load_file("../xml/Questions.xml") or die('no ha sido posible cargar el fichero XML');

        echo "<table border ='1' widht='5000'>\n";
        echo "
    <tr>
        <td>email</td>
        <td>enunciado</td> 
        <td>correcta</td> 
        <td>Incorrecta</td>
        <td>Incorrecta</td>
        <td>Incorrecta</td> 
        <td>Subject<td>
    </tr>
    ";
        $user = $_GET['user'];
        foreach ($xml->assessmentItem as $key => $value) {
            if ($value->attributes()['author'] == $user) {
                echo "
    <tr>
        <td>" . $value->attributes()['author'] . "</td>
        <td>" . $value->itemBody->p . "</td>
        <td>" . $value->correctResponse->response . "</td>
        <td>" . $value->incorrectResponses->response[0] . "</td>
        <td>" . $value->incorrectResponses->response[1] . "</td>        
        <td>" . $value->incorrectResponses->response[2] . "</td>       
        <td>" . $value->attributes()['subject'] . "</td>

    </tr>
    ";
            }
        }
        echo "</table\n>"
        ?>
    </section>


    <?php include '../html/Footer.html' ?>
</body>

</html>