<?php 
	require('languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>
<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantillaProyectosElectronica.dwt.php" codeOutsideHTMLIsLocked="false" -->
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Control de Cargas a 220V</title>
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
                            <li><a href="#hardware">Hardware</a></li>
                            <!-- InstanceBeginEditable name="menuAdicional" --><li><a href="controlcargas220v.php"><img src="../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="controlcargas220v.php?lang=en"><img src="../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li><!-- InstanceEndEditable -->
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
                    <!-- InstanceBeginEditable name="introduccionContenido" --><p><?php echo __('A veces, en nuestras aplicaciones debemos de controlar cargas a   tensiones distintas respecto al circuito de control. En este proyecto   vamos a desarrollar una interfaz que nos permita controlar cargas a 220   Voltios en alterna con circuitos que funcionen a una tensión más baja   por ejemplo circuitos TTL (circuitos alimentados a 5 voltios en   continua). Esta interfaz nos podrá servir por ejemplo para control de   luces de una casa, control de electrodomésticos siempre que no excedan   de una potencia de 500 Watios.', $lang) ?></p>
                    <p><img src="Imagenes_Control_Cargas_220v/Controlador_220.png" width="500" height="375" border="1"></p>
      <p><?php echo __('Figura 1: Imagen del controlador de cargas de 220V.', $lang) ?></p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="introduccionContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- resume section end -->
        
        <!-- Hardware section start -->
        <div class="section primary-section" id="hardware">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Hardware</h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="hardwareContenido" --><?php echo __('El esquema del proyecto es el siguiente y está basado en un triac BT137. Los condensadores y el inductor tienen la función de eliminación de ruido en el sistema. Este sistema es muy versátil ya que se ha adaptado tanto para uso con ordenador o con microcontroladores.', $lang) ?>
                    <p><img src="Imagenes_Control_Cargas_220v/Esquema_controlador220v.png" width="600" height="243"></p>
      <p><?php echo __('Figura 2: Esquema del controlador de cargas de 220V.', $lang) ?></p>
      <?php echo __('Las fotos del sistema montado son las siguientes:', $lang) ?>
                   <p><img src="Imagenes_Control_Cargas_220v/Controlador_220v_Up.png" width="375" height="500" border="1"></p>
      <p><?php echo __('Figura 3: Vista superior del controlador de cargas de 220V.', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Control_Cargas_220v/Controlador_220v_Down.png" width="375" height="500" border="1"></p>
      <p><?php echo __('Figura 4: Vista inferior del controlador de cargas de 220V.', $lang) ?></p>              
                    <!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="hardwareContenidoadicional" --> <!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Hardware section end -->
       
        <!-- InstanceBeginEditable name="opcionesMenuContenido" --> <!-- InstanceEndEditable -->
        
        
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