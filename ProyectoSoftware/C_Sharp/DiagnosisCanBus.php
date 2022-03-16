<?php 
	require('languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>
<!doctype html>
<html lang="es"><!-- InstanceBegin template="/Templates/plantillaProyectosSoftware.dwt.php" codeOutsideHTMLIsLocked="false" -->
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Diagnósis mediante Can Bus</title>
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
                            <li class="active"><a href="#resumen">Introducción</a></li>
                            <li><a href="#software">Software</a></li>
							<li><a href="#ejemplo">Ejemplo de uso</a></li>
                       		<!-- InstanceBeginEditable name="menuAdicional" -->
                            <li><a href="controlcargas220v.php"><img src="../../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="controlcargas220v.php?lang=en"><img src="../../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li>
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
                    <h1>Introducción</h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="introduccionContenido" --><p class="texto">En este proyecto, Vamos a diseñar una interfaz de comunicaciones basado en el ELM327  para el diagnóstico de vehículos con la interfaz USB-EOBD2 implementado por los coches apartir del año 2003. El conversor a usar va a ser el que se muestra acontinuación:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Diagnosis_Por_Can_Bus/ELM327_USB_car_diagnostic_cable.jpg"></p>
      <p>Foto de la interfaz USB-EOBD2.</p>
      <p>&nbsp;</p>
      <p class="texto">Esta interfaz es muy económica y nos permite realizar aplicaciones de buena calidad para automóviles para diagnóstico de averías y tiene las siguentes características:</p>
      <p>&nbsp;</p>
      <p ><strong>Protocolos:</strong></p>
      <p >ISO15765-4 (PUEDA)</p> 
      <p >ISO14230-4 (KWP2000)</p>
      <p >ISO9141-2</p>
      <p >J1850 VPW</p>
      <p >J1850 PWM </p>
      <p ><strong>Protocolo de la salida:</strong> RS232</p>
      <p ><strong>Velocidad:</strong> 9600 o 38400</p>
      <p ><strong>Indicador LED:</strong> OBD Tx/Rx, RS232 Tx/Rx, energía</p>
      <p ><strong>Voltaje de funcionamiento:</strong> 12V, protección interna contra cortocircuitos/sobretensiones</p>
      <p class="texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Corriente ociosa nominal:</strong> 45 mA      </p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="introduccionContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- resume section end -->
        
        <!-- Biomimetismo section start -->
        <div class="section primary-section" id="software">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Software</h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="softwareContenido" --><p class="texto">Me gustaría comentar que este proyecto, requiere de más tiempo del que he podido dedicarle pero está funcionando perfectamente y se puede medir velocidad, revoluciones,.. las medidas básicas que muestra el coche al usuario. Conforme vaya avanzando pondré las mejoras como testeo de errores, implementación de la base de datos de los codigos de error, y por supuesto la traducción de los mismos.</p>
      <p class="texto">&nbsp;</p>
      <p class="texto">Posteriormente, implementaré la interfaz electrónica, para adaptarlo de forma económica a sistemas empotrados, es decir, sistemas electrónicos con un tamaño mínimo, con una interfaz de salida (por ejemplo pantallas LCD) y una interfaz de entrada básica (por ejemplo un teclado matricial).</p>
      <p class="texto">&nbsp;</p>
      <p><img src="Imagenes_Diagnosis_Por_Can_Bus/Codigo_Fuente.png" width="600" height="375"></p>
      <p>Captura de pantalla del Programa Visual Studio 2008.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Diagnosis_Por_Can_Bus/Programa.png" width="600" height="323"></p>
      <p>Captura del programa de diagnósis de Can Bus.</p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="softwareContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Biomimetismo section end -->
        
        <!-- Ejemplo section start -->
        <div class="section secondary-section" id="ejemplo">
           <div class="triangle"></div>
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Ejemplo de uso</h1>
                    <!-- Section's title goes here -->
                    <!-- InstanceBeginEditable name="ejemploContenido" -->qweqw<!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="ejemploContenidoadicional" -->wew<!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Ejemplo section end -->

        
        
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