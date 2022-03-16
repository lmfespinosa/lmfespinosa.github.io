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
<title>Receptor multiprotocolos IR</title>
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
      <p class="titulo1">Receptor multiprotocolos IR</p>
      <p>&nbsp;</p>
      <p class="titulo2">Introducción:</p>
      <p>&nbsp;</p>
      <p class="texto">Este proyecto surge apartir de la necesidad de reutilizar los mandos a distancia de los electrodomésticos que se van averiando y que no merecen la pena de reparar. Debido a esto podemos acumular mandos a distancia de los que no podemos averiguar su protocolo y por tanto, necesitamos alguna aplicación que realmente lo haga, es decir, necesitamos una aplicación de bajo coste que nos diga de un mando del que no conozcamos nada, que protocolo usa, que nos devuelva el código de las teclas que pulsamos para poder incluir dichos mandos en nuestros proyectos.</p>
      <p>&nbsp;</p>
      <p class="titulo2">Firmware:</p>
      <p>&nbsp;</p>
      <p class="texto">Este decodificador multiprotocolo IR decodifica los protocolos NEC, SIRC (de SONY), y los protocolos RC5 y RC6 de Philips de los cuales he podido probar hasta el momento, Por no poder disponer de mandos con otros protocolos diferentes. Ahora mismo estoy trabajando en la integración de los protocolos que usa los productos de Samsung y de Thomson.</p>
      <p>&nbsp;</p>
      <p class="texto">Gracias a este proyecto, he podido analizar el protocolo de varios mandos, incluyendo el IRremote de apple, y algunos mandos de televisión, de equipos de audio y video. Lo bueno de este proyecto, que con un poquito de código más, podemos desarrollar aplicaciones para varios controles remotos, aumentando notablemente la cantidad de dispositivos a controlar con un coste mínimo y una gran versatilidad.</p>
      <p>&nbsp;</p>
      <p class="texto">Los mandos cuyo protocolo no son reconocidos, el sistema en la medida de lo posible devolverá un código hash de dicha tecla y deberemos de tener en cuenta además el ancho de banda del receptor infrarrojo (en este caso estoy usando un receptor sharp de 36 KHz de frecuencia) ya que si es superior a dicho receptor, el codigo hash devuelto, no será fiable. El prototipo montado tiene el siguiente aspecto:</p>
      <p class="texto">&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Esquema Receptor.png" width="486" height="513"></p>
      <p>Esquema del receptor.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Receptor_IR_Up.png" width="359" height="430" border="1"></p>
      <p>Foto frontal del receptor.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Receptor_IR_Down.png" width="359" height="389" border="1"></p>
      <p>Foto trasera del receptor.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/conexion_placa_Arduino.png" width="521" height="440" border="1"></p>
      <p>Esquema de la conexión con arduino.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/sistema_completo.png" width="400" height="533" border="1"></p>
      <p>Foto del sistema completo.</p>
      <p>&nbsp;</p>
      <p class="texto">En las siguientes imágenes, pondré los siguientes controles remotos que he usado para este proyecto, con sus correspondientes protocolos y además una imagen de captura de la recepción serie del prototipo que nos permite ejecutar el programa en el microcontrolador. Gracias a la versatilidad del hardware desarrollado para en <a href="receptor_RC5.php" target="_top">decodificador del protocolo RC5 de Philips</a>, he podido aprovechar el mismo prototipo. Las imagenes de los controles remotos son las siguientes:</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_Philips_AV5657.png" width="500" height="667"></p>
      <p>Mando Philips AV5657con <a href="../../Protocolos/protocolo_RC5.php" target="_top">protocolo RC5</a>.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_AIWA.png" width="500" height="667"></p>
      <p>Mando AIWA con <a href="../../Protocolos/protocolo_NEC.php" target="_top">protocolo NEC</a>.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_Ansonic_DVH-30S.png" width="500" height="667"></p>
      <p>Mando ANSONIC DVH-30Scon <a href="../../Protocolos/protocolo_NEC.php" target="_top">protocolo NEC</a>.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_IRremote_Apple.png" width="500" height="667"></p>
      <p>Mando IRremote de Apple con <a href="../../Protocolos/protocolo_NEC.php" target="_top">protocolo NEC</a>.</p>
      <p>&nbsp;</p>
      <p class="texto">Y ahora pongo las imágenes de los mandos de cuyo protocolo estoy implementando a dias de hoy que son estos mandos:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_LG.png" width="500" height="667"></p>
      <p>Mando LG.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_Samsung.png" width="500" height="667"></p>
      <p>Mando Samsung.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Mando_Thomson_RCT_311_SB1G.png" width="500" height="667"></p>
      <p>Mando Thomson.</p>
      <p>&nbsp;</p>
      <p class="texto">El firmware que permite la decodificación de teclas para dichos mandos es el siguiente:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Receptor_Multiprotocolos_IR/Firmware.png"></p>
      <p>Captura de pantalla del sistema funcionando.</p>
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
