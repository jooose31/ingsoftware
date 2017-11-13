
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------

    $correo = $_GET['correop'];
    $fech = $_GET['fechahoracita'];
    $fecha=explode("T",$fech);
    $fecharu=$fecha[0];
    $nfecha=$fecha[0] . " " . $fecha[1];
    session_start();
    $scorreo=$_SESSION['correo'];

    $query2 = "INSERT INTO cita VALUES ('$correo','$scorreo',0,0,0,0,'p','$nfecha')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());

    header("location: /ingsoftware/doctor/inicio.php");



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
