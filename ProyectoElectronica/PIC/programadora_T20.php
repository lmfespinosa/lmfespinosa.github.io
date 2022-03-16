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
<title>Programadora T-20</title>
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
      <p class="titulo1">Programadora T-20</p>
      <p>&nbsp;</p>
      <p class="titulo2">Introducción:</p>
      <p>&nbsp;</p>
      <p class="texto">El objetivo de este proyecto es realizar un programador de chips PIC de Microchip, ya que si necesitamos hacer uso de un PIC en algun proyecto, esto nos servirá para grabar el firmware en el mismo.</p>
      <p>&nbsp;</p>
      <p class="texto">El programador T-20 es un programador para PICs y EEPROMs de la serie 24LXxx que funciona realmente, que sea asequible, que ocupe el mínimo espacio posible y que programe el mayor número de componentes.</p>
      <p>&nbsp;</p>
      <p class="texto">No requiere de ningún tipo de adaptador, y en tres zócalos que dispone, podemos programar los siguientes dispositivos:</p>
      <div id="menupagina"><ul>
           <li>PIC12C508 /A, PIC12C509 /A</li>
           <li>PIC12C67x</li>
           <li>PIC16C55x</li>
           <li>PIC16C61</li>
           <li>PIC16C62x</li>
           <li>PIC16C71</li>
           <li>PIC16C71x</li>
           <li>PIC16C8x</li>
           <li>PIC16F8x</li>
           <li>PIC16F873/4/6/7 (Modelos de 28 patillas)</li>
           <li>PIC16C73B/74B/76/77</li>
           <li>EEPROMs de la serie 24LCxx</li>
      </ul></div>
      <p>&nbsp;</p>
      <p class="titulo2">Esquema:</p>
      <p>&nbsp;</p>
      <p class="texto">El Esquema de la programadora T-20 es el siguiente:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Programadora_T20/Esquema_T-20.png"></p>
      <p>Esquema de la programadora T-20.</p>
      <p>&nbsp;</p>
      <p class="texto">y los componentes para construirla son:</p>
      <p>&nbsp;</p>
      <table width="443" border="1" cellpadding="0" cellspacing="0" align="center" >
        <tr>
          <td width="29">Item</td>
          <td width="64">Cantidad</td>
          <td width="96">Referencia</td>
          <td width="244">Componente</td>
        </tr>
        <tr>
          <td>1</td>
          <td>1</td>
          <td>C1</td>
          <td> 22uF ,16v Tantalio/Electrolítico</td>
        </tr>
        <tr>
          <td>2</td>
          <td>1</td>
          <td>C2</td>
          <td>100uF , 16v Tantalio/Electrolítico</td>
        </tr>
        <tr>
          <td>3</td>
          <td>4</td>
          <td>D1,D2,D3,D4</td>
          <td>1N4148</td>
        </tr>
        <tr>
          <td>4</td>
          <td>1</td>
          <td> D5</td>
          <td>5.1v 1/2W</td>
        </tr>
        <tr>
          <td>5</td>
          <td>1</td>
          <td>D6</td>
          <td>8.2v 1/2W</td>
        </tr>
        <tr>
          <td>6</td>
          <td>1</td>
          <td>J1</td>
          <td>Zocalo 24LCXX 8 Patillas</td>
        </tr>
        <tr>
          <td>7</td>
          <td>1</td>
          <td>J2</td>
          <td>Zocalo PIC 18 Patillas</td>
        </tr>
        <tr>
          <td>8</td>
          <td>1</td>
          <td> J3</td>
          <td>Zocalo PIC 28 Patillas</td>
        </tr>
        <tr>
          <td>9</td>
          <td>1</td>
          <td>P2</td>
          <td>Conector DB9 Hembra</td>
        </tr>
        <tr>
          <td>10</td>
          <td>2</td>
          <td>Q1,Q2</td>
          <td>BC547B</td>
        </tr>
        <tr>
          <td>11</td>
          <td>1</td>
          <td>Q3</td>
          <td>BC557B</td>
        </tr>
        <tr>
          <td>12</td>
          <td>1</td>
          <td>R1</td>
          <td>100k</td>
        </tr>
        <tr>
          <td>13</td>
          <td>1</td>
          <td> R2</td>
          <td>10k</td>
        </tr>
        <tr>
          <td>14</td>
          <td>1</td>
          <td>R3</td>
          <td>1k5</td>
        </tr>
      </table>
      <p>Tabla de materiales.</p>
      <p>&nbsp;</p>
      <p>El fotolito de la placa es el siguiente:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Programadora_T20/fotolito_T-20.png" width="268" height="391" border="1"></p>
      <p>Fotolito de la programadora T-20.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Programadora_T20/T20_Up.png" width="500" height="375" border="1"></p>
      <p>Vista superior de la programadora T-20.</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Programadora_T20/T20_Down.png" width="500" height="375" border="1"></p>
      <p>Vista inferior de la programadora T-20.</p>
      <p>&nbsp;</p>
      <p class="texto">La foto de la programadora terminada es:</p>
      <p>&nbsp;</p>
      <p><img src="Imagenes_Programadora_T20/T20.png" width="500" height="375" border="1"></p>
      <p>T-20 terminada.</p>
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
