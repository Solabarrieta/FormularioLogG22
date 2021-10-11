<!DOCTYPE html>
<html>

<head>
    <?php include '../html/Head.html' ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src="../js/ConfirmPasswordJQ.js"></script>

</head>

<body>
    <?php
    if (!isset($_GET['user'])) {
        include '../php/MenusReduce.php';
    } else {
        include '../php/Menus.php';
    }
    ?>
    <section class="main" id="s1">
        <form action=funciones/ComprobarSingup.php method="POST">
            <h2>Identificación de usuario </h2>
            <p> Email : <input type="text" required name="email" size="21" /><br>
                <label>password :
                    <input name="password" required id="password" type="password" />
                </label>
                <br>
                <label>confirm password:
                    <input type="password" name="confirm_password" required id="confirm_password" />
                    <span id='message'></span>
                </label>
                <br>
                <input type="radio" name="type" id="student" value="alumno">
                <label for="student">Alumno</label>
                <input type="radio" name="type" id="teacher" value="profesor">
                <label for="teacher">Profesor</label>
            <p> <input id="input_2" type="submit" />
        </form>
    </section>
    <?php include '../html/Footer.html' ?>