
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------

    $name = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $telefono = $_GET['telefono'];
    $direccion = $_GET['direccion'];
    $genero = $_GET['genero'];
    $correo = $_GET['correo'];
    $dpi = $_GET['dpi'];
    $edad = $_GET['edad'];
    session_start();
    $scorreo=$_SESSION['correo'];
    $nombre= $name . " " . $apellido;


    $query1 = "INSERT INTO paciente VALUES ('$correo','$nombre',$edad,'$direccion',$telefono,'$genero')";
    $result1 = pg_query($link, $query1) or die('Query failed: ' . pg_last_error());

    $query2 = "INSERT INTO pacdoc VALUES ('$correo','$scorreo')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());


    header("location: /ingsoftware/doctor/inicio.php");



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
