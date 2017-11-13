
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------

    $genero = $_GET['genero'];
    $correo = $_GET['correo'];

    session_start();
    $scorreo=$_SESSION['correo'];

    $query2 = "INSERT INTO pacdoc VALUES ('$correo','$scorreo')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());


    header("location: /ingsoftware/doctor/patients.php");



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
