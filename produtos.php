<!DOCTYPE html>
<html>
<head>
	<meta content="charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Lanchatronik</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/style.css"/> <!--estilos principal-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/> 
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="produtos/default.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="produtos/jquery.flexslider-min.js"></script>

	<script src="produtos/css3-mediaqueries.js"></script>
	
	<!-- Kwiks pieces -->
	<script src="produtos/kwiks.js"></script>
	
	<!-- Includes for this demo -->
	<link rel="stylesheet" href="produtos/demo-stuff/demo.css" type="text/css" media="screen" />
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		var Main = Main || {};

		jQuery(window).load(function() {
			window.responsiveFlag = jQuery('#responsiveFlag').css('display');
			Main.gallery = new Gallery();
			
			jQuery(window).resize(function() {
				Main.gallery.update();
			});
		});

		function Gallery(){
			var self = this,
				container = jQuery('.flexslider'),
				clone = container.clone( false );
				
			this.init = function (){
				if( responsiveFlag == 'block' ){
					var slides = container.find('.slides');
					
					slides.kwicks({
						max : 500,
						spacing : 0
					}).find('li > a').click(function (){
						return false;
					});
				} else {
					container.flexslider();
				}
			}
			this.update = function () {
				var currentState = jQuery('#responsiveFlag').css('display');
				
				if(responsiveFlag != currentState) {
				
					responsiveFlag = currentState;
					container.replaceWith(clone);
					container = clone;
					clone = container.clone( false );
					
					this.init();	
				}
			}
			
			this.init();
		}
	</script>
</head>
<body style="padding-top: 70px;">
    
	<noscript>
		<div class="nojs">Javascript must be enabled for the correct page display.</div>
	</noscript>
   <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand menu-Brand">LanchaTronik</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <li><a href="index.php">INICIO</a></li>
               <!--<li class="active"><a href="#">INICIO</a></li>-->
               <li><a href="quemsomos.php">QUEM SOMOS</a></li>
              <!-- <li class="dropdown navbar-nav-li"><a href="produtos.php" class="dropdown-toogle" data-toggle="dropdown">PRODUTOS<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="navbar-link">LANCHA 400</li>
                        <li class="navbar-link">LANCHA 600</li>
                        <li class="navbar-link">LANCHA 800</li>
                    </ul>
               </li>-->
               <li><a href="produtos.php">PRODUTOS</a>
               <li class="navbar-nav-li"><a href="comochegar.php">COMO CHEGAR</a></li>
               <li class="navbar-nav-li"><a href="contato.php?mensaje=">CONTATO</a></li>
               <li class="navbar-contatotelefonico active"><a href="#" style="color: #efefef; font-weight: bold; font-size: 1.1em; text-shadow: 0px 0px 2px #fff">(81) 95910185</a></li>
            </ul>
            <ul class="nav pull-right">
               <li class="dropdown"></li>
            </ul>
        
        </div>
       </div>
 </nav>

	<div id="container">
		<h2>Produtos</h2>
		
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="produtos/images/album/lancha1.jpg" />
					<div class="flex-caption">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis porttitor massa eget pretium. Mauris vel erat sem, id tempor est. Pellentesque lobortis iaculis massa quis auctor.</p>
					</div>
				</li>
				<li>
					<a href="#"><img src="produtos/images/album/lancha2.jpg" /></a>
					<div class="flex-caption">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis porttitor massa eget pretium. Mauris vel erat sem, id tempor est. Pellentesque lobortis iaculis massa quis auctor.</p>
					</div>
				</li>
				<li>
					<img src="produtos/images/album/lancha3.jpg" />
					<div class="flex-caption">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis porttitor massa eget pretium. Mauris vel erat sem, id tempor est. Pellentesque lobortis iaculis massa quis auctor.</p>
					</div>
				</li>
				<li>
					<img src="produtos/images/album/lancha4.jpg" />
					<div class="flex-caption">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis porttitor massa eget pretium. Mauris vel erat sem, id tempor est. Pellentesque lobortis iaculis massa quis auctor.</p>
					</div>
				</li>
			</ul>
	  </div>
	</div>
	<span id="responsiveFlag"></span>
</body>
</html>