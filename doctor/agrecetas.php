
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------

    $fecha = $_GET['fecha'];
    $correop = $_GET['correo'];
    $presionart = $_GET['presionart'];
    $correop = $_GET['correo'];
    $presionres = $_GET['presionres'];
    $peso = $_GET['peso'];
    $temp = $_GET['temp'];
    $informacion = $_GET['informacion'];

    session_start();
    $scorreo=$_SESSION['correo'];

    $query2 = "INSERT INTO pacdoc VALUES ('$correo','$scorreo')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());


    header("location: /ingsoftware/doctor/patients.php");



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
