
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

    $query = "SELECT correo, pass
          FROM usuarios
          WHERE '$email'=correo and pass = '$password'";
    $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result);
    $cemail = $line["correo"];
    $cpass = $line["pass"];
    // echo "$email\n";
    // echo "$password\n";

    if ($email == $cemail And $password == $cpass ) {

      // session_start();
      // $_SESSION['email']  = '$email';
      // $_SESSION['password'] = '$password';
      header("location:/Software/index.html");
      # code...
      echo "hola, pase";
    }else {
      echo "error";
    }


    //fin de la conexion a la bd------------------------------------------------------------
    pg_close($link);

     ?>
