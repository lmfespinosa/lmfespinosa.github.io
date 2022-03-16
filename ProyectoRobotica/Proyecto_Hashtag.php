<?php 
	require('languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>
<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantillaProyectosRobotica.dwt.php" codeOutsideHTMLIsLocked="false" -->
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Robot Hashtag</title>
        <!-- InstanceEndEditable -->
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="../css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="../images/ico/favicon.ico">
        
    </head>
    
<body>
	<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="../images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#resumen"><?php echo __('Introducción', $lang) ?></a></li>
                            <li><a href="#biomimetismo"><?php echo __('Biomimetismo', $lang) ?></a></li>
                            <li><a href="#cinematica"><?php echo __('Cinemática', $lang) ?></a></li>
                            <li><a href="#diseno"><?php echo __('Diseño 3D', $lang) ?></a></li>
                            <li><a href="#mecanizado"><?php echo __('Mecanizado', $lang) ?></a></li>
                            <li><a href="#disenoelec"><?php echo __('Electrónica', $lang) ?></a></li>
                            <li><a href="#control">Control</a></li>
                             <!-- InstanceBeginEditable name="menuAdicional" -->
                            <li><a href="Proyecto_Hashtag.php"><img src="../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="Proyecto_Hashtag.php?lang=en"><img src="../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li>
                            <!-- InstanceEndEditable -->
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Resumen section start -->
        <div class="section secondary-section" id="resumen">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Introducción', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="introduccionContenido" --><p><?php echo __('Este proyecto, titulado "Desarrollo de un robot hexápodo", consiste en el desarrollo íntegro del diseño y construcción de un robot móvil artrópodo. Para desarrollar el prototipo, se ha inspirado en un formícido llamado "Messor SP".', $lang) ?></p>

					<p><?php echo __('Para poder realizar dicho diseño, se ha realizado un estudio previo de biomimetismo. Posteriormente mediante el análisis de ecuaciones de cinemática (con trigonometría y matrices de Denavit-Hatenberg). Una vez obtenido la simulación de los movimientos se ha desarrollado el modelado mecánico y luego su fabricación.', $lang) ?></p>

					<p><?php echo __('Este proyecto se lo he dedicado a las personas que siempre han confiado en mi, en especial a mi madre y mi padre, el cual pudo ver como evolucionaba hasta sus últimos días.', $lang) ?></p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="introduccionContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/Foto.jpg" alt="team 1" width="270" height="290"></p>
                <p align="center"><?php echo __('Figura 1: Autor junto con el robot.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- resume section end -->
        
        <!-- Biomimetismo section start -->
        <div class="section primary-section" id="biomimetismo">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Biomimetismo', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="biomimetismoContenido" --><?php echo __('Se ha desarrollado un estudio de biomimetismo de un formícido europeo   llamado "Messor Sp". Este estudio nos permite el análisis de las   articulaciones y de la forma de caminar del insecto.', $lang) ?><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="biomimetismoContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/MessorSP4.jpg" width="175" height="175"></p><p align="center"><?php echo __('Figura 2: &quot;Messor Sp&quot;.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Biomimetismo section end -->
        
        <!-- Cinemática section start -->
        <div class="section secondary-section" id="cinematica">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Cinemática', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="cinematicaContenido" -->
                    <p><?php echo __('El estudio de cinemática contemplan las ecuaciones de   movimiento del robot, permitiendo el control de las mismas y la forma de   caminar sobre el terreno irregular.', $lang) ?></p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="cinematicaContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/SistemaReferenciaCinematicaDirectaTrigonometria.jpg" width="350" height="250"></p>
      <p align="center"><?php echo __('Figura 2: Referencias de ángulos.', $lang) ?></p>
      <p>&nbsp;</p>
      <p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/CinematicaDirectaTrigonometriaTodo.jpg" width="350" height="305"></p>
      <p align="center"><?php echo __('Figura 3: Simulación de la cinemática mediante MatLab.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- cinematica section end -->
        
        <!-- Diseno section start -->
        <div class="section primary-section" id="diseno">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Diseño 3D', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="disenoContenido" --><?php echo __('El diseño del robot se ha realizado con el programa de diseño mecánico   SolidWorks. Para Poder realizarlo, se ha diseñado cada pieza y posteriormente, se ha efectuado un montaje de dichas piezas.', $lang) ?><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="disenoContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/Diseno_3D_Hormiga.jpg" width="270" height="305"></p>
      <p align="center"><?php echo __('Figura 4: Modelo 3D del robot.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- diseno section end -->
        
        <!-- mecanizado section start -->
        <div class="section secondary-section" id="mecanizado">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Mecanizado', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="mecanizadoContenido" --><?php echo __('El mecanizado de piezas se ha realizado de forma manual empleando sistemas de corte y perforado por arranque de viruta.', $lang) ?><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="mecanizadoContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/Construccion.png" width="270" height="305"></p>
      <p align="center"><?php echo __('Figura 5: Imágenes del proceso de construcción.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- mecanizado section end -->
        
         <!-- electronica section start -->
        <div class="section primary-section" id="disenoelec">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Electrónica', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="electronicaContenido" --><?php echo __('El diseño electrónico está basado en una plataforma "Arduino Mega". El   Arduino gestiona el movimiento de los servomotores, procesa los comandos   que recibe del módulo XBee para determinar la acción a realizar,   Gestiona el nivel de la batería y las coordenadas del GPS.', $lang) ?><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="electronicaContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/Placa_Principal_Terminada.jpg" width="320" height="305"></p>
      <p align="center"><?php echo __('Figura 6: Placa Principal.', $lang) ?></p>
           <p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/Diagrama_Conexionado_Completo.jpg" width="300" height="305"></p>
      <p align="center"><?php echo __('Figura 7: Esquema eléctrico del robot.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- electronica section end -->
        
         <!-- control section start -->
        <div class="section secondary-section" id="control">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><?php echo __('Programa de Control', $lang) ?></h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="controlContenido" --><?php echo __('El programa de control está desarrollado en C#. Este programa nos   permite controlar el robot, monitorizar la geolocalización, visualizar imágenes provenientes del robot, entre otras acciones.', $lang) ?><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="controlContenidoadicional" --><p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/InterfazProgramaControl.jpg" width="400" height="250"></p>
      <p align="center"><?php echo __('Figura 8: Interfaz del programa de control.', $lang) ?></p>
      <p>&nbsp;</p>
      <p align="center"><img src="Imagenes_Proyecto_Robotica_PFC/Diagrama_Flujo_Programa_PC.jpg" width="270" height="305"></p>
      <p align="center"><?php echo __('Figura 9: Diagrama de flujo del funcionamiento del programa de control.', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- control section end -->
        
        
        
        <!-- Footer section start -->
        <div class="footer">
            <p>www.espelectronicdesign.com</p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/modernizr.custom.js"></script>
        <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../js/jquery.cslider.js"></script>
        <script type="text/javascript" src="../js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="../js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../js/app.js"></script>
</body>
<!-- InstanceEnd --></html>