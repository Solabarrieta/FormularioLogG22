<!DOCTYPE html>
<html>

<head>
    <?php include '../html/Head.html' ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src="../js/ConfirmPasswordJQ.js"></script>

</head>

<body>
    <?php include '../php/Menus.php' ?>
    <section class="main" id="s1">
        <form action=funciones/ComprobarSingup.php method="POST">
            <h2>Identificación de usuario </h2>
            <p> Email : <input type="email" required name="email" size="21" /><br>
                <label>password :
                    <input name="password" required id="password" type="password" />
                </label>
                <br>
                <label>confirm password:
                    <input type="password" name="confirm_password" required id="confirm_password" />
                    <span id='message'></span>
                </label>
            <p> <input id="input_2" type="submit" />
        </form>
    </section>
    <?php include '../html/Footer.html' ?>