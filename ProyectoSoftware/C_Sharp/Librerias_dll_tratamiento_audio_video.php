<?php 
	require('../../php/languages.php'); 

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
<title>Librerías DLL para el tratamiento de audio y video para PC</title>
<!-- InstanceEndEditable -->
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../../css/pluton.css" />
        <link rel="stylesheet" href="css/style2.css" />
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
                            <li class="active"><a href="#home"><?php echo __('Inicio', $lang) ?></a></li>
                            <li><a href="#portfolio"><?php echo __('Portfolio', $lang) ?></a></li>
                            <li><a href="#eventos"><?php echo __('Eventos', $lang) ?></a></li>
                            <li><a href="#menciones"><?php echo __('Menciones', $lang) ?></a></li>
                            <li><a href="#about"><?php echo __('Acerca de mi', $lang) ?></a></li>
                            <li><a href="#contact"><?php echo __('Contacto', $lang) ?></a></li>
                            <li><a href="index.php"><img src="../../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="index.php?lang=en"><img src="../../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        
        <div>
        	<!-- InstanceBeginEditable name="Contenido" -->
      <p>&nbsp;</p>
      <p class="titulo1">Librerías DLL para el tratamiento de audio y video para PC</p>
      <p>&nbsp;</p>
      <p class="titulo2">Introducción:</p>
      <p class="texto">&nbsp;</p>
      <p class="texto">En este proyecto, surgió de la necesidad de integrar un sistema de video y audio en ciertas aplicaciones. La idea básica es integrar en un ordenador algun dispositivo de video como una web cam, una capturadora de video, micrófonos,... donde la fuente de video pueda estar en otra parte (en un robot por ejemplo) donde dicha fuente de audio ó video se pueda transmitir via cable ó radio al PC. La palicación principal de control será en principio dicho ordenador y todo el procesamiento de imagen lo llevará también.</p>
      <p>&nbsp;</p>
      <p class="titulo2">Software:</p>
      <p>&nbsp;</p>
      <p class="texto">Estas librerías serán nuestras APIs de comunicación, es decir es el paso intermedio de comunicación entre el hardware y nuestro programa. Estas librerías definen una serie de funciones que nos permiten  buscar todos los dispositivos de audio y video en el ordenador, y además nos dicen que nombre poseen (es el mismo nombre con el que aparece en las propiedades de &quot;Mi PC&quot;), cambio de resolución para los dispositivos de video, tamaño de muestreo de audio, grabación de video, codecs de audio/video instalados en el ordenador,.. y todas las propiedades relacionadas con dichos dispositivos.      </p>
      <p class="texto">&nbsp;</p>
<p><img src="Imagenes_Librerias_DLL_tratamiento_Video_Audio/Codigo_Fuente.png" width="600" height="375"></p>
<p>Imagen del Proyecto en Visual Studio 2008.</p>
<p>&nbsp;</p>
      <p class="titulo2">Ejemplo de uso:</p>
      <p>&nbsp;</p>
      <p class="texto">El uso básico de estas librerías es incluis en nuestros programas un cuadro de imagen y escoger como fuente, a través de dichas librerías, un dispositivo de video para imagen y un dispositivo de audio para el sonido. Luego posteriormente, incluimos un menú con punteros, para que cuando el programa inicie, vayamos cogiendo todas las referencias a los dispositivos conectados al ordenador (hay que destacar, que para que podamos reconocer un dispositivo en el ordenador éste tiene que reconocerse por el ordenador, es decir, tenemos que tenerlo conectado y con sus drivers instalados) y mostramos su nombre para saber a cuáll nos referimos. Además si queremos la posibilidad de grabar video, incluimos unos botones y escojemos la ruta de captura del video.      </p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Librerias_DLL_tratamiento_Video_Audio/Imagen_Sistema_Vision_Enseniando_Placa_leds_UV.png" width="600" height="375"></p>
      <p>Captura del programa funcionando con una Web Cam.</p>
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
        <script src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.js"></script>
        <script type="text/javascript" src="../../js/modernizr.custom.js"></script>
        <script type="text/javascript" src="../../js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../../js/jquery.cslider.js"></script>
        <script type="text/javascript" src="../../js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="../../js/jquery.inview.js"></script>
        <script src="js/jquery.ccslider-3.0.2.min.js"></script>
        <script src="js/jquery-migrate-1.1.1.min.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../../js/app.js"></script>
        
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
