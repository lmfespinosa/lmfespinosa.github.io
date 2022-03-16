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
        <title>Minifuente de alimentación</title>
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
                            <!-- InstanceBeginEditable name="menuAdicional" --><li><a href="minifuentealimentacion.php"><img src="../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="minifuentealimentacion.php?lang=en"><img src="../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li><!-- InstanceEndEditable -->
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
                    <?php echo __('<p>A veces, para desarrollar algunas aplicaciones con   tecnología TTL que suele ser bastante común ó en aplicaciones con   microcontroladores, necesitamos una fuente de alimentación que nos   suministre 5 Voltios constantes.  </p>
                    <p>Por otra parte, las practicas de la universidad   en la asignatura del laboratorio de electrónica digital requiere de   muchas horas de diseño y montaje, este proyecto viene muy bien para   hacer dichas prácticas en las horas cuando los laboratorios están   cerrados. </p>', $lang) ?>
                    <p><img src="Imagen_Minifuente_Alimentacion/minifuente.png" width="500" border="2" height="375"></p>
      <p><?php echo __('Figura 1: Imagen de la minifuente de alimentación.', $lang) ?></p>
                    <!-- InstanceEndEditable -->
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
                    <!-- InstanceBeginEditable name="hardwareContenido" -->
                    <p><?php echo __('El circuito está basado en un regulador de tensión (el   7805) cuya entrada son 9 voltios y da como salida 5 voltios estable. Con   unos componentes más se han incluido un diodo para que ejerza commo un   indicador luminoso de encendido, un condensador para que la tensión a la   salida no varíe de forma brusca, un switch para encender y apagar la   fuente, y además un diodo protector para que cuando coloquemos la pila   al revés,.. el circuito no se rompa. El esquema es el siguiente:', $lang) ?></p>
                    <p><img src="Imagen_Minifuente_Alimentacion/Esquema_Minifuente.png"></p>
      <p><?php echo __('Figura 2: Esquema de la minifuente de alimentación.', $lang) ?></p>
      <p>&nbsp;</p>
      <p class="texto"><?php echo __('Una vez montado todo, la mifuente de alimentación queda como sigue en las siguientes imágenes:', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagen_Minifuente_Alimentacion/minifuente_UP.png" width="500" border="1" height="375"></p>
      <p><?php echo __('Figura 3: Vista superior de la minifuente de alimentación.', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagen_Minifuente_Alimentacion/Minifuente_Down.png" width="500" border="1" height="375"></p>
      <p><?php echo __('Figura 4: Vista inferior de la minifuente de alimentación.', $lang) ?></p>
      <p>&nbsp;</p>
      <p class="texto"><?php echo __('Acontinuación les mustro una imagen de la minifuente en funcionamiento, conectado a un led ultra violeta usado en la insoladora de Leds UV.', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagen_Minifuente_Alimentacion/Minifuente_ON.png" width="500" border="1" height="375"></p>
      <p><?php echo __('Figura 5: Imagen de la minifuente en funcionamiento.', $lang) ?></p>
                    <!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="hardwareContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Hardware section end -->
       
        <!-- InstanceBeginEditable name="opcionesMenuContenido" -->2323<!-- InstanceEndEditable -->
        
        
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