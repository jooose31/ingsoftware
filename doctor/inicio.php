<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: MedPa-Pantalla Principal ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"><!-- Favicon-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Custom Css -->
<link href="assets/css/main.css" rel="stylesheet">
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Por favor espere...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="#" class="mfb-component__button--main g-bg-cyan">
      <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i>
      <i class="mfb-component__main-icon--active zmdi zmdi-close"></i>
    </a>
    <ul class="mfb-component__list">

        </a>
      </li>
      <li>
        <a href="patients.php" data-mfb-label="Lista de pacientes" class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-account-o mfb-component__child-icon"></i>
        </a>
      </li>

      <li>
        <a href="examen.html" data-mfb-label="Exámenes" class="mfb-component__button--child bg-purple">
          <i class="zmdi zmdi-balance-wallet mfb-component__child-icon"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>
<!-- #Float icon -->
<!-- Morphing Search  -->

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="container-fluid">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="inicio.php">MedPa</a> </div>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section>



    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Bienvenido</span>


              <?php
              $user= "postgres";
              $password = "root";
              $dbname = "pacidoc";
              $port = "5432";
              $host = "localhost";

              $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

              $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

              //fin de la conexion -------------------------------------------------------------------------


              session_start();
              $scorreo=$_SESSION['correo'];

              $query = "SELECT nombre
                        FROM doctores
                        WHERE correod = '$scorreo'";
            $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error());
            $line = pg_fetch_array($result);
            $doc = $line["nombre"];

            echo "<h3>$doc</h3>";

              //fin de la conexion a la bd------------------------------------------------------------
              pg_close($link);



               ?>









                <ul>
                    <!--<li><a data-placement="bottom" title="Ir a bandeja de entrada" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>-->
                    <li><a data-placement="bottom" title="Ir a pacientes" href="patients.php"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Pantalla de inicio" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Navegación Principal</li>
                <li class="active open"><a href="inicio.php"><i class="zmdi zmdi-home"></i><span>Tablero</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Citas</span> </a>
                    <ul class="ml-menu">

                        <li><a href="book-appointment.php">Reservar cita</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Reportes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="receta.php">Agregar receta</a></li>
                        <!--<li><a href="add-doctor.html">Agregar Doctor</a></li>-->
                        <li><a href="examen.html">Agregar examen</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacientes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients.php">Todos los pacientes</a></li>
                        <li><a href="add-patient.php">Agregar Paciente</a></li>
                        <!--<li><a href="patient-profile.html">Perfil del paciente</a></li>
                        <!--<li><a href="patient-invoice.html">Patient Invoice</a></li>-->
                    </ul>
                </li>

        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            <!--<li role="presentation"><a href="#chat" data-toggle="tab">Chat</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">Setting</a></li>-->
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Rojo</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Morado</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Azul</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Turquesa</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Verde</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Anaranjado</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Gris azul</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Negro</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Rosado morado</span> </li>
                </ul>
            </div>

</section>

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Tablero</h2>
            <small class="text-muted">Bienvenidos a MedPa</small>
        </div>



        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> Lista de citas</h2>
                        <ul class="header-dropdown m-r--5">

                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>correo</th>
                                <th>fecha/hora</th>

                              </tr>
                            </thead>
                            <tbody>

                              <?php
                              $user= "postgres";
                              $password = "root";
                              $dbname = "pacidoc";
                              $port = "5432";
                              $host = "localhost";

                              $con = "host=$host port=$port dbname=$dbname user=$user password=$password";

                              $link = pg_connect($con) or die("Error en la conexion: ".pg_last_error());

                              //fin de la conexion -------------------------------------------------------------------------


                              // session_start();
                              // $scorreo=$_SESSION['correo'];
                              $query5 = "SELECT C.correop,P.nombre, C.fechahora
                              FROM cita C, paciente P
                              WHERE c.correod = '$scorreo' and C.correop = P.correop";
                              $result5 = pg_query($link, $query5) or die('Query failed: ' . pg_last_error());
                              $count=1;
                              while ($line = pg_fetch_array($result5)) {
                                $nombre = $line['nombre'];
                                $correo = $line['correop'];

                                $fechahora = $line['fechahora'];

                                echo "<tr>";
                                echo "<td>$count</td>";
                                echo "<td>$nombre</td>";
                                echo "<td>$correo</td>";
                                echo "<td>$fechahora</td>";
                                echo "<td><a href="."historial.php?correop=$correo". "><span class="."label label-danger".">Historial</span> </td>";

                                echo "</tr>";
                                $count++;



                              }



                              //fin de la conexion a la bd------------------------------------------------------------
                              pg_close($link);


                               ?>





                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

        </div>
	</div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/morphing.js"></script><!-- Custom Js -->
<script src="assets/js/pages/charts/sparkline.min.js"></script>
<script src="assets/js/pages/charts/chartjs.min.js"></script>
<script src="assets/js/pages/index.js"></script>

</body>
</html>
