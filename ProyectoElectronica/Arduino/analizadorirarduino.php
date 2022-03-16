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
        <title>Analizador IR Arduino</title>
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
                            <!-- InstanceBeginEditable name="menuAdicional" --><li><a href="#firmware">Firmware</a></li><!-- InstanceEndEditable -->
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
                    <p>Cuando trabajamos con mandos a distancia, a veces no   podemos saber  que protocolo lo forma, y por tanto, es complicado   empezar a trabajar con él. Por estos motivos, hacemos uso de esta   aplicación ya que necesitamos ver que forma tiene las tramas emitidas   por dicho mando y posteriormente programamos el decodificador para que   entienda este protocolo.</p>
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
                    <!-- InstanceBeginEditable name="hardwareContenido" -->El hardware de este proyecto está comopuesto por los siguientes elementos:
                    <p><img src="Imagen_Analizador_IR/Esquema Receptor.png" width="486" height="513"></p>
      				<p>Esquema del receptor.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagen_Analizador_IR/Receptor_IR_Up.png" width="359" height="430" border="1"></p>
      				<p>Imagen de la parte delantera del receptor.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagen_Analizador_IR/Receptor_IR_Down.png" width="359" height="389" border="1"></p>
      				<p>Imagen de la parte trasera del receptor.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagen_Analizador_IR/conexion_placa_Arduino.png" width="521" height="440"></p>
      				<p>Esquema de conexión con arduino.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagen_Analizador_IR/sistema_completo.png" width="400" height="533" border="1"></p>
      				<p>Imagen del sistema completo.</p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="hardwareContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Hardware section end -->
       
        <!-- InstanceBeginEditable name="opcionesMenuContenido" --><!-- Hardware section start -->
        <div class="section secondary-section" id="firmware">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Firmware</h1>
                    <p>El firmware basicamente consiste en medir los tiempos que hay entre flancos producidos por el mando. Dicha información es devuelta via serie por el microcontrolador en forma de tabla de 2 columnas y n filas. Decimos que es n filas ya que los protocolos pueden llegar a tener 32 bits, pero para no escatimar, samplea hasta 128 bits en el peor de los casos (el microcontrolador para hasta tener 2 tramas iguales si no se pasa de 128 bits).</p>

 					<p>Posteriormente, con la herramienta GnuPlot, lo que vamos ha hacer es guardar las trama devuelta por el microcontrolador en un archivo con extensión *.dat y posteriormente dibujamos dichas tramas y nos hacemos una idea de lo que se está recibiendo desde el mando a distancia.</p>

 					<p>El mando para la prueba es el siguiente:</p>
 					<p><img src="Imagen_Analizador_IR/Mando_Thomson_RCT_311_SB1G.png" width="500" height="667"></p>
      				<p>&nbsp;</p>
      				<p class="texto">Mostramos algunas tramas recibidas por un mando Thomson:</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagen_Analizador_IR/Thomson_boton_OK_sal_programa.png"></p>
      				<p>Salida del sistema para la pulsación del botón OK.</p>
      				<p>&nbsp;</p>
      				<p><img src="Imagen_Analizador_IR/Thomson_boton_OK_plot.png"></p>
      				<p>Representación de la señal generada por el botón OK.</p>
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