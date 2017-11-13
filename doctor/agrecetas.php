
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------

    $fechas = $_GET['fecha'];
    $correop = $_GET['correo'];
    $presionart = $_GET['presionart'];
    $correop = $_GET['correo'];
    $presionres = $_GET['presionres'];
    $peso = $_GET['peso'];
    $temp = $_GET['temp'];
    $informacion = $_GET['informacion'];

    session_start();
    $scorreo=$_SESSION['correo'];

    $query5 = "SELECT C.correop, C.fechahora
    FROM cita C, paciente P
    WHERE c.correop = '$correop' and C.correop = P.correop";
    $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result5);
    $fech=$line['fechahora'];
    // $fecha=explode(" ",$fech);
    // $fecharu=$fecha[0];
    // $nfecha=$fecha[0];


    $query7 = "SELECT MAX(corr)  FROM receta";
    $result7 = pg_query($link, $query7) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result7);
    $numero=$line['max'];
    $numero=$numero+1;

    $query2 = "INSERT INTO receta VALUES ($numero,'$correop','$scorreo','$fechas','$informacion')";
    $result2 = pg_query($link, $query2) or die('Query failed: ' . pg_last_error());

    $query3 = "UPDATE cita
              SET temperatura = $temp, peso=$peso, presionart = $presionart, presionres = $presionres, estado = 'f'
              WHERE fechahora='$fech' and correop ='$correop' and correod = '$scorreo'";
    $result3 = pg_query($link, $query3) or die('Query failed: ' . pg_last_error());



    header("location: /ingsoftware/doctor/inicio.php");



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
