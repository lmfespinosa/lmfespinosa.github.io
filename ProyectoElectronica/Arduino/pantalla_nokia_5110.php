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
<title>Pantalla Nokia 5110</title>
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
      <p class="titulo1">Pantalla Nokia 5110</p>
      <p>&nbsp;</p>
      <p class="titulo2">Introducción:</p>
      <p>&nbsp;</p>
      <p class="texto">En este proyecto, lo que vamso ha hacer es controlar una pantalla del Nokia 5110. Para ello conectaremos los siguientes pines de la pantalla a los pines de nuestro arduino. Dicho conexionado se realizará de la siguiente forma:</p>
      <p>&nbsp;</p>
      <p class="texto">PIN_SCE al pin 7 del arduino<br>
        PIN_RESET al pin 6 del arduino<br>
        PIN_DC    al pin 5 del arduino<br>
        PIN_SDIN  4 del arduino<br>
      PIN_SCLK  3 del arduino</p>
      <p>&nbsp;</p>
      <p class="titulo2">Código Fuente:</p>
      <p>&nbsp;</p>
      <p class="texto">Lo complicado de este código fuente es el desarrollo de las funciones LcdInitialise(), LcdClear(), LcdString() y LcdBmp que son las encargadas de inicializar la pantalla, limpiarla, escribir líneas de texto y dibujar imágenes respectivamente. Aqui les adjunto una captura de parte del código fuente:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_pantalla_nokia5110/codigo_fuente.jpg" width="500" height="600" border="2"></p>
      <p>Captura del código fuente</p>
      <p>&nbsp;</p>
      <p class="titulo2">Fotos del proyecto:</p>
      <p>&nbsp;</p>
      <p class="texto">En la siguiente foto que adjunto podemos ver el correcto funcionamiento del proyecto.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_pantalla_nokia5110/P1010046.JPG" width="600" height="450" border="2"></p>
      <p>&nbsp;</p>
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
