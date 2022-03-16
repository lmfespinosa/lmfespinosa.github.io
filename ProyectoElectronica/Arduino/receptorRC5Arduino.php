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
        <title>Receptor RC5 Arduino</title>
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
                            <!-- InstanceBeginEditable name="menuAdicional" --><li><a href="#comandos">Comandos predefinidos</a></li><li><a href="#firmware">Firmware</a></li><!-- InstanceEndEditable -->
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
                    <!-- InstanceBeginEditable name="introduccionContenido" --><p>El protocolo consiste en un tren de pulsos cuadrados de 36Khz (la denominada "portadora"). Cada "1" esta codificado como 889 microsegundos de pulsos, y 889 microsegundos de "silencio". El "0" se codifica como 889 microsegundos de "silencio" y 889 microsegundos de pulsos. La longitud total del "0" y del "1" es idéntica, y son 1778 microsegundos (o 1,778 milisegundos). El grafico siguiente ilustra claramente esto:</p>
                    <p><img src="Imagenes_RC5/receptor_RC5_clip_image001.gif" alt="" width="383" height="256" /></p>
      				<p>&nbsp;</p>
      				<p class="texto">Dentro de un bit &quot;caben&quot; exactamente 64 pulsos, si la portadora  es de 36KHz. Es decir, el periodo de una se&ntilde;al de 36KHz es de 1/36.000 =  27.78125... us, que multiplicado por 64 da exactamente 1778 us. Este es un buen  dato para tener en cuenta el dise&ntilde;o del software de nuestro receptor.</p>
      				<p class="texto"> <br />
        			Para que el receptor sepa que le est&aacute; &quot;diciendo&quot; el emisor  remoto, debe poder interpretar las &quot;tramas&quot; de ceros y unos que este  le env&iacute;a. Cada trama es un comando, y esta compuesto por 14 bits (15 en el caso  del RC5X). De esos 14 bits, los primeros 2 bits son de &quot;start&quot; (arranque):  siempre son &quot;1&quot;. El tercer bit se invierte cada vez que una tecla se  pulsa y se suelta nuevamente, para poder distinguir si una tecla permanece  presionada o se ha presionado mas de una vez. Los siguientes 5 bits  corresponden a la direcci&oacute;n del dispositivo receptor, y los &uacute;ltimos 6 al  comando trasmitido. Esto permite utilizar un mismo control remoto para comandar  diferentes equipos, simplemente asignando a cada uno un c&oacute;digo de direcci&oacute;n  diferente.</p>
      				<p class="texto">&nbsp; </p>
      				<p align="center"><img src="Imagenes_RC5/receptor_RC5_clip_image003.jpg" alt="" width="567" height="108" /><br />
  					&nbsp;Trama RC5 Completa</p>
      				<p align="center">&nbsp;</p>
      				<p class="texto">Hay una variaci&oacute;n del c&oacute;digo RC5 llamada&nbsp;<strong>RC5X</strong>&nbsp;que dispone de 7 bits para determinar el comando (lo que permite 128  comandos diferentes vs. los 64 comandos del RC5 tradicional). La forma de la  trama es la misma, pero el segundo bit de start (S2) es utilizado como el bit 7  del comando.</p>
      				<p class="texto">&nbsp;</p>
      				<p class="texto"> Tanto en la direcci&oacute;n como en el comando, primero se transmite el bit mas  significativo (MSB) y por ultimo el menos significativo (LSB)</p>
      				<p class="texto"> <br />
        			La longitud completa de la trama es igual a 14 * 1.778 us = 24.892 us. Si  la tecla se mantiene presionada, la trama se reenv&iacute;a continuamente, pero con  una pausa de equivalente a 50 bits ( 50 x 1.778 us = 88.900us) entre una y otra  transmisi&oacute;n. Como dijimos antes, viendo el estado del tercer bit podemos  determinar si se trata de pulsaciones sucesivas de la misma tecla (el bit  cambiaria) o de una misma pulsaci&oacute;n &quot;larga&quot; (el bit permanece en el  mismo estado) </p>
      				<p>&nbsp;</p>
      				<p align="center"><img src="Imagenes_RC5/receptor_RC5_clip_image004.gif" alt="" width="486" height="263" /><br />
  					&nbsp;&nbsp; Diagramas de tiempo para  una transici&oacute;n completa.</p> <!-- InstanceEndEditable -->
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
                    <!-- InstanceBeginEditable name="hardwareContenido" --><p>El circuito total está formado por una placa Arduino Duemilanove, un receptor infrarrojo de 36KHz, 2 resistencias, un condensador y un diodo led para ver que llega correctamente el tren de pulsos del mando a distancia. Para ello he descompuesto el esquema en 2 partes, una el receptor como tal (El traductor de señales infrarrojas a señales eléctricas) y el esquema para conectarlo al arduino. Por tanto tenemos que dichos esquemas son:</p>
                    <p><img src="Imagenes_RC5/Esquema Receptor.png" width="486" height="513"></p>
      				<p>Esquema del receptor</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagenes_RC5/conexion_placa_Arduino.png" width="521" height="440"></p>
      				<p>Conexión al Arduino</p>
      				<p>&nbsp;</p>
      				<p class="texto">Ahora, les muestro unas fotos del módulo de infrarrojos ya pasado a la placa PCB, tanto por delante y por detrás y una foto del sistema completo.</p>
      				<p class="texto">&nbsp;</p>
      				<p><img src="Imagenes_RC5/Receptor_IR_Up.png" width="359" border="1"></p>
      				<p>Foto del receptor visto desde arriba.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagenes_RC5/Receptor_IR_Down.png" width="359" height="389" border="1"></p>
      				<p>Foto del receptor visto desde abajo.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagenes_RC5/sistema_completo.png" width="400" height="533" border="1"></p>
      				<p>Foto del sistema completo.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagenes_RC5/Mando_Philips_AV5657.png" width="500" height="667" border="1"></p>
      				<p>Imagen del mando a distancia Philips AV5657.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagenes_RC5/Sistema_completo_y_mando.png" width="500" height="667" border="1"></p>
      				<p>Foto del sistema completo junto con el mando a distancia.</p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="hardwareContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Hardware section end -->
       
        <!-- InstanceBeginEditable name="opcionesMenuContenido" --><!-- Hardware section start -->
        <div class="section secondary-section" id="comandos">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Comandos predefinidos</h1>
                    <p>Si estamos creando nuestro propio control remoto, podemos adoptar cualquier dirección y comando para las funciones que implementemos. Pero lo más posible es que queramos utilizar un control remoto de algún aparato en desuso o incluso un control remoto "genérico" nuevo, que seguramente nos costara menos que armarnos uno.
En ese caso, deberíamos consultar las siguientes tablas para saber cuales son los comandos pre-definidos por Philips:</p>
					<p><img src="Imagenes_RC5/codigos.png" alt="" width="208" height="615" /></p>
      				<p>Tabla de direcciones.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagenes_RC5/RC5_06.gif" width="328" height="470"></p>
      				<p>Tabla de Teclas.</p>
				</div>
			</div>
	</div>
       
       <!-- Hardware section start -->
        <div class="section primary-section" id="firmware">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Firmware</h1>
                    <p>El firmware para el microcontrolador está implementado en C y por el Pin 12 del arduino leemos la trama de pulsos que decodificaremos posteriormente para obtener la dirección del dispositivo y la tecla pulsada y en función de estos parámetros ejercer nuestro control sobre nuestros proyectos de electrónica.</p>
                    <p><img src="Imagenes_RC5/Firmware.png"></p>
      				<p>Captura de pantalla del sistema funcionando.</p>
				</div>
			</div>
	</div><!-- InstanceEndEditable -->
        
        
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