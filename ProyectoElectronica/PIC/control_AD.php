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
        <title>Control AD</title>
        <!-- InstanceEndEditable -->
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../../css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="../../css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="../../css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="../../css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="../../images/ico/favicon.ico">
        
    </head>
    
<body>
	<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="../../images/logo.png" width="120" height="40" alt="Logo" />
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
                            <!-- InstanceBeginEditable name="menuAdicional" -->
                            <li><a href="#funcionamiento"><?php echo __('Funcionamiento', $lang) ?></a></li>
                            <li><a href="#aplicaciones"><?php echo __('Aplicaciones', $lang) ?></a></li>
                            <li><a href="control_AD.php"><img src="../../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="control_AD.php?lang=en"><img src="../../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li>
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
                    <!-- InstanceBeginEditable name="introduccionContenido" -->
      
<!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="introduccionContenidoadicional" --><p><?php echo __('Este proyecto surge de la necesidad de elaborar un control a tav&eacute;s de variables anal&oacute;gicas y digitales del circuito, para controlar a su vez otras variables del circuito. El microcontrolador usado es un PIC16F876 y est&aacute; programado con MikroC. El microcontrolador ha sido programado con una filosof&iacute;a por estados, con lo que adaptarlo a nuestras aplicaciones es muy facil, ya que se trata de reducir los estados, ampliarlos, y para cada estado modifivar sus salidas.', $lang) ?></p><!-- InstanceEndEditable -->
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
                    <!-- InstanceBeginEditable name="hardwareContenido" --><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="hardwareContenidoadicional" --><p><?php echo __('El circuito b&aacute;sico se compone del microcontrolador, un cristal de cuarzo de 10 MHz y 2 condensadores de 20 pF para el reloj, un zubador para las se&ntilde;ales ac&uacute;sticas,  interruptores para las se&ntilde;ales de control digital, un pulsador para el reset del microcontrolador, diodos LED con sus correspondientes resistencias para las se&ntilde;ales luminosas (tanto de diagn&oacute;stico como para probar las salidas), potenci&oacute;metros que simulan variables anal&oacute;gicas (ya pueda ser niveles de bater&iacute;a, sensores,..).', $lang) ?></p>
      
      <p align="center"><img src="Imagenes_Control_AD/circuito_ad.jpg" alt="" width="704" height="489"/></p>
      <p align="center"><?php echo __('Figura 1: Circuito b&aacute;sico', $lang) ?></p><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Hardware section end -->
       
        <!-- InstanceBeginEditable name="opcionesMenuContenido" --><div class="section secondary-section" id="funcionamiento">
         <div class="triangle"></div>
          <div class="container">
                <!-- Start title section -->
            <div class="title">
                    <h1><?php echo __('Funcionamiento', $lang) ?></h1>
                    
     		</div>
     		<p><?php echo __('Para la elaboraci&oacute;n del firmware, lo primero que hay que hacer es desarrollar la tabla de estados deseada con sus correspondientes estados, entradas y salidas. Este firmware lleva adem&aacute;s se&ntilde;ales ac&uacute;sticas, con lo que adem&aacute;s vamos a usar un timer del microcontrolador para este fin (se ha programado un beep para ser mas exactos).', $lang) ?></p>
     
      <p><?php echo __('A la hora de programar los estados, para que sea mas f&aacute;cil la programaci&oacute;n y mantenimiento de la aplicaci&oacute;n como adaptaci&oacute;n de la misma para otras finalidades, lo primero que se ha hecho es una clasificaci&oacute;n de estados a partir de las variables anal&oacute;gicas (para diferenciar distintos niveles de carga de una bater&iacute;a, marcar rangos de temperatura,..) y posteriormente, en funci&oacute;n de cada modo, definimos cada submodo con sus correspondiente salidas.', $lang) ?></p>
		  </div>
        </div> 
      <div class="section primary-section" id="aplicaciones">
       <div class="triangle"></div>
          <div class="container">
                <!-- Start title section -->
            <div class="title">
                    <h1><?php echo __('Aplicaciones', $lang) ?></h1>
                   
			</div>
			 <p><?php echo __('Este circuito tan simple nos permite una gran versatilidad en los proyectos como diagn&oacute;stico de una bater&iacute;a y control combinacional, control a trav&eacute;s de variables anal&oacute;gicas (por sensores de temperatura, presi&oacute;n,.. que tengan su salida anal&oacute;gica) y digital (pulsadores, switches,...o alg&uacute;n elemento que nos sirva para conmutar se&ntilde;ales). Este mismo circuito podr&iacute;a ser parte de alg&uacute;n robot por ejemplo.', $lang) ?></p>
		</div>
     </div>
     <!-- InstanceEndEditable -->
        
        
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
        <script src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.js"></script>
        <script type="text/javascript" src="../../js/modernizr.custom.js"></script>
        <script type="text/javascript" src="../../js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../../js/jquery.cslider.js"></script>
        <script type="text/javascript" src="../../js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="../../js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../../js/app.js"></script>
</body>
<!-- InstanceEnd --></html>