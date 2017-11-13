
    <?php
    $user= "postgres";
    $password = "root";
    $dbname = "pacidoc";
    $port = "5432";
    $host = "localhost";

    $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

    $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

    //fin de la conexion -------------------------------------------------------------------------
    // $cemail="";
    // $cpass="";
    $email=$_GET['email'];
    $password=$_GET['password'];

    $query = "SELECT *
          FROM usuarios
          WHERE '$email'=correo and pass = '$password'";
    $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result);
    $cemail = $line["correo"];
    $cpass = $line["pass"];
    $type = $line["tipo"];

    if (!$result) {
      header("location: ingsoftware/index.html");

    }elseif ($type=="d") {
      session_start();
      $_SESSION['correo']  = $cemail;
      $_SESSION['password']  = $cpass;
      $_SESSION['type']  = $type;
      header("location: /ingsoftware/doctor/inicio.php");

    }



    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
