<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: MedPa-agregar paciente ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Dropzone Css -->
<link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- Wait Me Css -->
<link href="assets/plugins/waitme/waitMe.css" rel="stylesheet" />
<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<link href="assets/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
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

      <li>
        <a href="patients.php" data-mfb-label="Lista de pacientes" class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-account-o mfb-component__child-icon"></i>
        </a>
      </li>

      <li>
        
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
            <!-- Notifications -->

            <!-- #END# Notifications -->
            <!-- Tasks -->

            <!-- #END# Tasks -->
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
                <li><a href="inicio.php"><i class="zmdi zmdi-home"></i><span>Tablero</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Cita</span> </a>
                    <ul class="ml-menu">

                        <li><a href="book-appointment.php">Reservar una cita</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Reportes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="receta.php">Agregar receta</a></li>
                        <!--<li><a href="add-doctor.html">Agregar Doctor</a></li>-->
                    </ul>
                </li>
                <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacientes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients.php">Todos los Pacientes</a></li>
                        <li class="active"><a href="add-patient.html">Agregar Paciente</a></li>
                        <!--<li><a href="patient-profile.html">Perfil del Paciente</a></li>
                        <!--<li><a href="patient-invoice.html">Patient Invoice</a></li> -->
                    </ul>
                </li>

    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            <!--<li role="presentation"><a href="#chat" data-toggle="tab">Chats</a></li>-->

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
                        <span>Rosado Morado</span> </li>
                </ul>
            </div>

</section>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Agregar paciente</h2>
            <small class="text-muted">Bienvenido a iMED</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Agregar nuevo paciente <small>Informacion aquí...</small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <!--<ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </div>
          <form class="" action="agpaciente.php" method="get">
            <div class="body">
                          <div class="row clearfix">
                              <div class="col-sm-4 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="apellido" class="form-control" placeholder="Apellidos">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="telefono" class="form-control" placeholder="Número de teléfono">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row clearfix">
                              <div class="col-sm-3 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-3 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="edad" class="form-control" placeholder="Edad">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-3 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="dpi" class="form-control" placeholder="DPI">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-3 col-xs-12">
                                  <div class="form-group drop-custum">
                                      <select class="form-control show-tick" name="genero">
                                          <option value="">-- Género --</option>
                                          <option value="M">Masculino</option>
                                          <option value="F">Femenino</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-sm-4 col-xs-12">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <input type="text" name="correo" class="form-control" placeholder="Correo electronico">
                                      </div>
                                  </div>
                              </div>
                          </div>



                              <div class="col-xs-12">
                                  <button type="submit" class="btn btn-raised g-bg-cyan">Enviar</button>
                              </div>






                      </div>
          </form>
          <form class="" action="docpa.php" method="get">
            <div class="row clearfix">
<div class="col-md-12 col-xs-12">
<div class="card">
  <div class="header">
    <h2>Paciente con cuenta <small>Agregar</small> </h2>

  </div>
  <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="correo" class="form-control"  placeholder="Correo del paciente">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-raised g-bg-cyan">Agregar</button>

                    </div>
                </div>
            </div>
</div>
</div>
</div>
          </form>


                </div>
            </div>
        </div>

    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->


<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js -->
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/morphing.js"></script><!-- Custom Js -->
<script src="assets/js/pages/forms/basic-form-elements.js"></script>


</body>
</html>
