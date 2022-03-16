<?php 
	require('../php/languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>
<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" --><head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- InstanceBeginEditable name="doctitle" -->
<title>Proyecto de fin de carrera</title>
<!-- InstanceEndEditable -->
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/pluton.css" />
        <link rel="stylesheet" href="css/style2.css" />
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
        
        <link rel="stylesheet" href="css/ccslider.css" />
        
        <style type="text/css">
		
		#slider {
			width: 900px;
			height: 600px;
		}

		#slider .control-links {
			margin-top: -15px;
		}

		#demo-description {
			max-width: 900px;
			width: 90%;
			margin: 60px auto;
			color: #fff;
			font: 20px 'PT Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
		}
	</style>
        
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
                            <li class="active"><a href="#home"><?php echo __('Inicio', $lang) ?></a></li>
                            <li><a href="#portfolio"><?php echo __('Portfolio', $lang) ?></a></li>
                            <li><a href="#eventos"><?php echo __('Eventos', $lang) ?></a></li>
                            <li><a href="#menciones"><?php echo __('Menciones', $lang) ?></a></li>
                            <li><a href="#about"><?php echo __('Acerca de mi', $lang) ?></a></li>
                            <li><a href="#contact"><?php echo __('Contacto', $lang) ?></a></li>
                            <li><a href="index.php"><img src="../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="index.php?lang=en"><img src="../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        
        <div>
        	<!-- InstanceBeginEditable name="Contenido" -->
      <p>&nbsp;</p>
      <p class="titulo1">Proyecto Fin de carrera: &quot;Desarrollo de un Robot Hexápodo&quot;</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Introduccion_pfc">Introducción:</a></p>
      <p>&nbsp;</p>
      <p class="texto">Este proyecto, titulado &quot;Desarrollo de un robot hexápodo&quot;, consiste en el desarrollo íntegro del diseño y construcción de un robot móvil artrópodo. Para desarrollar el prototipo, se ha inspirado en un formícido llamado &quot;Messor SP&quot;.</p>
      <p>&nbsp;</p>
      <p class="texto">Para poder realizar dicho diseño, se ha realizado un estudio previo de biomimetismo. Posteriormente mediante el análisis de ecuaciones de cinemática (con trigonometría y matrices de Denavit-Hatenberg). Una vez obtenido la simulación de los movimientos se ha desarrollado el modelado mecánico y luego su fabricación.</p>
      <p>&nbsp;</p>
      <p class="texto">Este proyecto se lo he dedicado a las personas que siempre han confiado en mi, en especial a mi madre y mi padre, el cual pudo ver como evolucionaba hasta sus últimos días.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Foto.jpg" width="270" height="290"></p>
      <p>Figura 1: Autor junto con el robot.</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Estudio_Biomimetismo_pfc">Estudio de Biomimetismo:</a></p>
      <p>&nbsp;</p>
      <p class="texto"> Se ha desarrollado un estudio de biomimetismo de un formícido europeo llamado &quot;Messor Sp&quot;. Este estudio nos permite el análisis de las articulaciones y de la forma de caminar del insecto.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/MessorSP4.jpg" width="175" height="175"></p>
      <p>Figura 2: &quot;Messor Sp&quot;.</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Estudio_Cinematica_pfc">Estudio de cinemática:</a></p>
      <p>&nbsp;</p>
      <p class="texto">El estudio de cinemática contemplan las ecuaciones de movimiento del robot, permitiendo el control de las mismas y la forma de caminar sobre el terreno irregular.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/SistemaReferenciaCinematicaDirectaTrigonometria.jpg" width="350" height="250"></p>
      <p>Figura 2: Referencias de ángulos.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/CinematicaDirectaTrigonometriaTodo.jpg" width="350" height="305"></p>
      <p>Figura 3: Simulación de la cinemática mediante MatLab.</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Diseno_3D_pfc">Diseño 3D:</a></p>
      <p>&nbsp;</p>
      <p>El diseño del robot se ha realizado con el programa de diseño mecánico SolidWorks. Para Poder realizarlo, se ha diseñado cada pieza y posteriormente, se ha efectuado un montaje de dichas piezas.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Diseno_3D_Hormiga.jpg" width="270" height="305"></p>
      <p>Figura 4: Modelo 3D del robot.</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Mecanizado_pfc">Mecanizado de piezas:</a></p>
      <p>&nbsp;</p>
      <p class="texto">El mecanizado de piezas se ha realizado de forma manual empleando sistemas de corte y perforado por arranque de viruta.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Construccion.jpg" width="270" height="305"></p>
      <p>Figura 5: Imágenes del proceso de construcción.</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Diseno_Electronico_pfc">Diseño electrónico:</a></p>
      <p>&nbsp;</p>
      <p class="texto">El diseño electrónico está basado en una plataforma &quot;Arduino Mega&quot;. El Arduino gestiona el movimiento de los servomotores, procesa los comandos que recibe del módulo XBee para determinar la acción a realizar, Gestiona el nivel de la batería y las coordenadas del GPS.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Placa_Principal_Terminada.jpg" width="320" height="305"></p>
      <p>Figura 6: Placa Principal.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Diagrama_Flujo_firmware.jpg" width="270" height="305"></p>
      <p>Figura 7: Diagrama de flujo del funcionamiento del Firmware.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Diagrama_Conexionado_Completo.jpg" width="300" height="305"></p>
      <p>Figura 8: Esquema eléctrico del robot.</p>
      <p>&nbsp;</p>
      <p class="titulo2"><a name="Software_control_pfc">Programa de control:</a></p>
      <p>&nbsp;</p>
      <p class="texto">El programa de control está desarrollado en C#. Este programa nos permite controlar el robot, monitorizar la geolocalización, visualizar imágenes provenientes del robot, entre otras acciones.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/InterfazProgramaControl.jpg" width="400" height="250"></p>
      <p>Figura 9: Interfaz del programa de control.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Proyecto_Robotica_PFC/Diagrama_Flujo_Programa_PC.jpg" width="270" height="305"></p>
      <p>Figura 10: Diagrama de flujo del funcionamiento del programa de control.</p>
      <p>&nbsp;</p>
    <!-- InstanceEndEditable -->
        </div>
        
        
        
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
        <script src="js/jquery.ccslider-3.0.2.min.js"></script>
        <script src="js/jquery-migrate-1.1.1.min.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../js/app.js"></script>
        
        <script>
		$(function(){
			$('#demo-nav').find('a').tooltip({effect: 'slide'});
		});

		$(window).load(function(){
			$('#slider').ccslider({
				_3dOptions: {
					imageWidth: 375,
					imageHeight: 500
				}
			});
		});
	</script>
</body>
<!-- InstanceEnd --></html>
