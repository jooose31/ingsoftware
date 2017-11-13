<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: MedPa-Recetas ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"><!-- Favicon-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!--WaitMe Css-->
<link href="assets/plugins/waitme/waitMe.css" rel="stylesheet" />
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
        <p>Porfavor espere...</p>
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
        <a href="doctor-schedule.html" data-mfb-label="Calendario" class="mfb-component__button--child bg-blue">
          <i class="zmdi zmdi-calendar mfb-component__child-icon"></i>
        </a>
      </li>
      <li>
        <a href="patients.html" data-mfb-label="Lista de pacientes" class="mfb-component__button--child bg-orange">
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
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Búsqueda..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit">Búsqueda</button>
        </div>
    </form>
    <div class="morphsearch-content">
        <div class="dummy-column">
            <h2>Personas</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
        <div class="dummy-column">
            <h2>Populares</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> </div>
        <div class="dummy-column">
            <h2>Recientes</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
    </div>
    <!-- /morphsearch-content -->
    <span class="morphsearch-close"></span> </div>
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="container-fluid">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">MedPa</a> </div>
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
                    <li><a data-placement="bottom" title="Ir a pacientes" href="patients.html"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Pantalla completa" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Navegación Principal</li>
                <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Tablero</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Cita</span> </a>
                    <ul class="ml-menu">
                        <li><a href="doctor-schedule.html">Calendario</a></li>
                        <li><a href="book-appointment.html">Reservar cita</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-file-text"></i><span>Reportes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="recetas.html">Agregar receta</a></li>

                        <!--<li><a href="add-doctor.html">Agregar Doctor</a></li>-->
                        <li><a href="examen.html">Agregar examen</a></li>

                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacientes</span> </a>
                    <ul class="ml-menu">
                        <li><a href="patients.html">Todos los pacientes</a></li>
                        <li><a href="add-patient.html">Agregar paciente</a></li>
                        <!--<li><a href="patient-profile.html">Perfil del paciente</a></li>
                        <!--<li><a href="patient-invoice.html">Patient Invoice</a></li>-->
                    </ul>
                </li>

    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Colores</a></li>
            <!--li role="presentation"><a href="#chat" data-toggle="tab">Chat</a></li>
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

  <form class="" action="agrecetas.php" method="get">

  <div class="container-fluid">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs m-t-20" role="tablist">
            <li role="presentation" class="active"><a href="#income" data-toggle="tab"><i class="zmdi zmdi-file-text"></i>  <span>Recetas</span>
			<button type="button" class="btn btn-default btn-sm">
			<span class="glyphicon glyphicon-arrow-down" aria-hidden="true" title="del más reciente al más antiguo"></span>
			</button>
			<button type="button" class="btn btn-default btn-sm">
			<span class="glyphicon glyphicon-arrow-up" aria-hidden="true" title="del más antiguo al más reciente"></span>
			</button></a></li>


            <!--<li role="presentation"><a href="#sales" data-toggle="tab"> <i class="zmdi zmdi zmdi-case-download"></i><span>PDFs</span></a></li><i class="fa fa-arrow-down" aria-hidden="true"></i>-->
        </ul>
        <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="income">
                <div class="row clearfix">

                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
                <div class="row clearfix">

        </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                      <h2> Receta </h2>
						<input name="fecha" type="date">
						<input type="text" name="correo" placeholder="Ingrese correo electrónico...">

					</div>
					        <div class="col-sm-12">
                                <div class="form-group">
									<h2>Signos Vitales</h2>
                                    <div class="form-line">
                                       	<li>
										 Presión arterial:<br>
										<input name="presionart" type="number">
										</li>
										<li>
										Presión de la respiración:<br>
                                        <input name="presionres" type="number">
										</li>
										<li>
										Temperatura:<br>
										<input name="temp" type="number">
										</li>
										<li>
										Peso:<br>
                                        <input name="peso" type="number">
										</li><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">

                                    <div class="form-line">
                                        <textarea name="informacion" rows="20" class="form-control no-resize" placeholder="Ingrese la receta..."></textarea>
                                    </div>
                                </div>
                            </div>
							<div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-cyan">agregar</button>

                            </div>
                </div>
			</div>





    </div>
  </div>
</form>

            <div role="tabpanel" class="tab-pane fade page-calendar" id="sales">
                <div class="row clearfix">
                <!-- Radar Chart -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>RADAR CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="radar_chart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Radar Chart -->
                    <!-- Pie Chart -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>PIE CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="pie_chart" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Pie Chart -->
                </div>
                <div class="row clearfix">
                    <!-- Bar Chart -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>BAR CHART</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <canvas id="bar_chart" height="120"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-bg"></div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/waitme/waitMe.js"></script> <!-- Wait Me Plugin Js -->
<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/js/pages/widgets/infobox/infobox-1.js"></script>

<script src="assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/morphing.js"></script><!-- Custom Js -->
<script src="assets/js/pages/cards/basic.js"></script> <!-- Custom Js -->
<script src="assets/js/pages/charts/sparkline.min.js"></script>
<script src="assets/js/pages/charts/chartjs.min.js"></script>



</body>
</html>
