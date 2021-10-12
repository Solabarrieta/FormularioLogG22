
    <?php
    /*
    *BACKEND
    */
    if (!isset($_POST['email'])) {
    } else {
        include 'DbConfig.php';
        $mysql = mysqli_connect($server, $db_user, $pass, $basededatos) or die(mysqli_connect_error());

        $username = $_POST['email'];
        $pasw = $_POST['password'];
        $pasw2 = $_POST['confirm_password'];
        $tipo = $_POST['type'];

        $pattern = "/^[a-z][a-z]+[0-9]{3}[@]ikasle\.ehu\.(eus|es)$/";
        $patternprof = '/^([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))$/';


        if ($pasw != $pasw2) {
            header("Location: singUp.php");
        }



        $usuarios = mysqli_query($mysql, "select * from Users where user_email ='$username'");
        $cont = mysqli_num_rows($usuarios);
        if ($cont > 0) {
            echo "ya existe este usuario en la base de datos.";
            exit();
        }
        if ($tipo == 'profesor') {
            if (!preg_match("/^([a-z]+\.[a-z]+[@]ehu\.(eus|es)|[a-z]+[@]ehu\.(eus|es))$/", $username)) {
                echo "el email del profesor no es valido";
                die('');
            }
        } else {
            if (!preg_match($pattern, $username)) {
                echo "el email del estudiante no es valido";
                die();
            }
            echo "el email de estudiante es valido";
        }
        $Singup = mysqli_query($mysql, "INSERT INTO Users (user_email,user_password,tipo) VALUE ('$username','$pasw','$tipo')");


        mysqli_close($mysql); //cierra la conexion

        header("Location: Layout.php?user=$username");
    }
    ?>



    <!--Fronted-->

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
            <form method="POST">
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