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
        <title>Insoladora con leds ultravioleta</title>
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
                            <!-- InstanceBeginEditable name="menuAdicional" -->
                            <li><a href="#temporizador"><?php echo __('Temporizador', $lang) ?></a></li>
                            <li><a href="insoladoraUV.php"><img src="../images/Banderas/espana.png"  width="30" height="30" alt="español"/></a></li>
                            <li><a href="insoladoraUV.php?lang=en"><img src="../images/Banderas/inglaterra.png"  width="30" height="30" alt="english"/></a></li>
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
                    <!-- InstanceBeginEditable name="introduccionContenido" --><?php echo __('Este proyecto surge de la necesidad de disponer de una herramienta con la que podamos desarrollar nuestros prototipos de una forma económica y con un acabado de bastante calidad. Dicho estudio desemboca en una insoladora con LEDs ultravioleta. La elección de esta alternativa promueve por una serie de ventajas como puede ser el bajo consumo de los mismos LEDs principalmente. Aparentemente estos LEDs pueden ser caros, pero se pueden conseguir perfectamente 200 LEDs ultravioleta por un precio de 40 euros. La insoladora será montada en un maletín de aluminio, con temporizador digital con pantalla LCD alfanumérica, teclado matricial y su fuente de alimentación interna.', $lang) ?> <!-- InstanceEndEditable -->
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
                    <!-- InstanceBeginEditable name="hardwareContenido" --><p></p><?php echo __('Para una mejor distribución de los diodos LEDs, el diseño de la placa PCB se diseñó en 3 partes para facilitar el mecanizado, desarrollo incluso la reparación de los componentes en caso de avería. Por ello, dicho maletín está formado por 2 placas iguales y una tercera placa dispuestas de la siguiente forma:', $lang) ?></p>

                   <p><img src="Imagenes_Insoladora_UV/insol_pcb1.jpg" alt="" width="534" height="327" /> x2</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/insol_pcb2.jpeg" alt="" width="327" /> x1</p>
      <p>&nbsp;</p>
                   <?php echo __('El Procedimiento de fabricación de las placas de circuito impreso se ha hecho con placas positivas emulsionadas y posteriormente el insolado de los fotolitos de las mismas. Para el montaje de los componentes se ha procedido con el siguiente orden:
<p><lu>
         <li>1º: Colocación de las resistencias de 68 ohmios.</li>

         <li>2º: Colocación de lso diodos ultravioleta.</li>

         <li>3º: Colocación del condensador de protección.</li>

         <li>4º Colocación del conector.</li></lu></p>

 

Las imagenes de las placas montadas son las siguientes:', $lang) ?>
                   
                    <p><img src="Imagenes_Insoladora_UV/placa_1_up.JPG" width="500" height="375" border="1"></p>
      <p><?php echo __('Figura 1: Placa 1 vista superior', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/placa_1_down.JPG" width="500" height="375" border="1"></p>
      <p>&nbsp;</p>
      <p><?php echo __('Figura 2: Placa 1 vista inferior', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/placa_2_up.JPG" width="500" height="375" border="1"></p>
      <p>&nbsp;</p>
      <p><?php echo __('Figura 3: Placa 2 vista superior', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/placa_2_down.JPG" width="500" height="375" border="1"></p>
      <p>&nbsp;</p>
      <p><?php echo __('Figura 4: Placa 2 vista inferior', $lang) ?></p>
      <p>&nbsp;</p>
      <p class="texto"><?php echo __('Debido al consumo de cada placa, para el desarrollo del maletin será usada una fuente de alimentación de ordenador. En las siguientes imágenes, se muestra las placas encendidas:', $lang) ?> </p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/placa_1_ON.JPG" width="500" height="375" border="1"></p>
      <p><?php echo __('Figura 5: Placa 1 encendida', $lang) ?></p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/placa_2_ON.JPG" width="500" height="375"></p>
      <p><?php echo __('Figura 6: Placa 2 encendida', $lang) ?></p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="hardwareContenidoadicional" --><!-- InstanceEndEditable -->
            </div>
        </div>
        <!-- Hardware section end -->
       
        <!-- InstanceBeginEditable name="opcionesMenuContenido" -->
         <div class="section secondary-section" id="temporizador">
         <div class="triangle"></div>
          <div class="container">
                <!-- Start title section -->
            <div class="title">
                    <h1><?php echo __('Temporizador', $lang) ?></h1>
                    <p class="texto">El temporizador est&aacute; compuesto por un microcontrolador de Microchip, el PIC16F876A con el cual vamos a mostrar la cuenta de temporizaci&oacute;n en la pantalla LCD a trav&eacute;s de una interfaz de entrada compuesta por un teclado matricial. El esquema queda como se muestra en la figura: </p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Insoladora_UV/esquema_temporizador.png" alt="" width="666" /></p><!-- InstanceEndEditable -->
                    <!--Simple description for section goes here. -->
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