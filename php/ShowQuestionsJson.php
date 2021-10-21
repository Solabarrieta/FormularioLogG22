<?php
$data = file_get_contents("../json/Questions.json");
$array = json_decode($data);
echo '<h3><center>CONTENIDO DEL FICHERO JSON </h3><p><p>';
echo '<body>';
echo '<p><center><table ><tr><th>Tema</th><th>Autor</th><th>Enunciado</th><th>Respuesta Correcta</th><th>Respuesta incorrecta 1</th><th>Respuesta Incorrecta 2</th><th>Respuesta Incorrecta 3</th></tr>';
foreach ($array->assessmentItems as $question) {
    $subject = $question->subject;
    $author =  $question->author;
    $itemBody = $question->itemBody->p;
    $correctResponse = $question->correctResponse->value;
    $incorrectResponses = $question->incorrectResponses->value[0];
    $incorrectResponse1 = $question->incorrectResponses->value[1];
    $incorrectResponse2 = $question->incorrectResponses->value[2];


    echo '<tr>
    <td>' . $subject . '</td>
    <td>' . $author . '</td>
    <td>' . $itemBody . '</td>
    <td>' . $correctResponse . '</td>
    <td>' . $incorrectResponses . '</td>
    <td>' . $incorrectResponse1 . '</td>
    <td>' . $incorrectResponse2 . '</td>
    </tr>';
}
echo '</table><center>';
echo '</body>';
