<!DOCTYPE html>

<html lang="en">

<head>
    <?php include '../html/Head.html' ?>
</head>

<body>
    <?php include '../php/Menus.php' ?>
    <style>
        <?php include '../styles/tableStyles.css' ?>
    </style>
    <section>


        <?php
        $user = $_GET['user'];
        $data = file_get_contents("../json/Questions.json");
        $array = json_decode($data);
        echo '<h3><center>CONTENIDO DEL FICHERO JSON </h3><p><p>';
        echo '<body>';
        echo '<p><center><table ><tr><th>Autor</th><th>Enunciado</th><th>Respuesta Correcta</th></tr>';
        foreach ($array->assessmentItems as $question) {
            $author = $question->author;
            if ($author == $user) {
                $itemBody = $question->itemBody->p;
                $correctResponse = $question->correctResponse->value;
                echo '<tr>

                <td>' . $author . '</td>
                <td>' . $itemBody . '</td>
                <td>' . $correctResponse . '</td>
                </tr>';
            }
        }
        echo '</table><center>';
        echo '</body>'; ?>


    </section>
    <?php include '../html/Footer.html' ?>
</body>

</html>