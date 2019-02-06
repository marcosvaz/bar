<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html lang="en" class="ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="pt-br">
<!--<![endif]-->
<head>
	<title>B.A.R | Bar | Arte | Restaurante</title>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="./public/images/logo.png" type="image/x-icon">
	<link rel="icon" href="<?php echo asset('./public/images/logo.png'); ?>" type="image/x-icon">
	<!--Animate.css-->
	<link href="<?php echo asset('./public/css/animate.css'); ?>" media="screen" rel="stylesheet">
	<link href="<?php echo asset('./public/owlcarousel/assets/owl.carousel.min.css'); ?>" media="screen" rel="stylesheet">
	<link href="<?php echo asset('./public/owlcarousel/assets/owl.theme.default.min.css'); ?>" media="screen" rel="stylesheet">
	<!--PrettyPhoto-->
	<link href="<?php echo asset('./public/css/prettyPhoto.css'); ?>" media="screen" rel="stylesheet">
	<!--FontAwesome-->
	<link href="<?php echo asset('./public/css/font-awesome.cs'); ?>s" media="screen" rel="stylesheet">
	<!--DateTime Picker-->
	<link href="<?php echo asset('./public/css/jquery.datetimepicker.css'); ?>" media="screen" rel="stylesheet">
	<!-- Mobile menu (mmenu) -->
	<link rel="stylesheet" href="<?php echo asset('./public/css/jquery.mmenu.all.css'); ?>" />
	<!-- Style CSS -->
	<link href="<?php echo asset('./public/css/bootstrap.css'); ?>" media="screen" rel="stylesheet">
	<link href="<?php echo asset('./public/css/style.css'); ?>" media="screen" rel="stylesheet">
	<!-- Modernizr Library -->
	<script src="<?php echo asset('./public/js/lib/modernizr.min.js'); ?>"></script>

	<!--Codigo do pixel-->
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
	    	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	    	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	    	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	    	n.queue=[];t=b.createElement(e);t.async=!0;
	    	t.src=v;s=b.getElementsByTagName(e)[0];
	    	s.parentNode.insertBefore(t,s)}(window,document,'script',
	    	'https://connect.facebook.net/en_US/fbevents.js');

	    	fbq('init', '1168689149932974');
	    	fbq('track', 'PageView');
	</script>
	<noscript>
		<img height="1" width="1" src="https://www.facebook.com/tr?id=1168689149932974&ev=PageView
    	&noscript=1" />
	</noscript>
	<!-- End Facebook Pixel Code -->
	<!--Fim Codigo do pixel-->
</head>

<body>
	<!-- Loading Spinner -->
	<style>
		@media (max-width: 800px) {
			address, .mm-search {
				display: none;
			 }
			 header {
			 	padding-top: 0 !important;
			 }
		 }
		address{
	        background-color: #2d2d2d;
	        color: #fff;
	        padding: 5px 0;
	        font-size: .9em;
	        position: relative;
	        z-index: 9999999999;
	    }
	    address a{
	        color: #fff;
	        font-size: 1.3em;
	        margin: 0 0 0 8px;
	    }
	    address a:hover,address a:focus{
	        color: #e8e6bd;
	    }
	    .container-fluid{
	        max-width: 1200px !important;

	    }
		a.link {
			background: rgba(0,0,0,0.6) !important;
			border: 2px solid #FFF;
			padding: 5px; width: 150px;
			font-weight: bolder;
			display: inline-block;
			margin-right: 2px;
		}
		a.link:hover, a.link:focus {
			background: #fff !important;
			color: #000 !important;
		}
		select {
			border: 2px solid #999;
			background-color: transparent; 
			padding: 0 16px; 
			font-weight: 900; 
			height: 55px;
			letter-spacing: 2px;
			font-family: 'Lato', sans-serif;
			font-size: 14px;
			font-weight: 900;
			color: #333;
			text-align: center;
			margin: 0;
			text-overflow: ellipsis;
		}
		#mck-sidebox {
			text-transform: initial;
		}
	</style>
    <address>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-left">
												Telefone: (11) 97468-5230
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-right" style="font-size:12px;">
                        Rua João Cachoeira, 1036, Itaim Bibi
												<a class="fly-social-link" href="https://www.facebook.com/bararterestaurante/" target="_blank"><i class="fa fa-facebook"></i></a>
												<a class="fly-social-link" href="https://www.instagram.com/bar.arte.restaurante/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </address>
	<div class="spinner">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
		<div class="line4"></div>
	</div>
	<!--/ Loading Spinner -->
	<div id="page" class="hfeed site invisible">
		<header class="fly-header-site fly-header-type-1 fly-sticky-header-on">
			<div class="fly-nav-wrap fly-nav-left">
				<nav class="fly-site-navigation primary-navigation" id="fly-menu-primary">
					<ul class="fly-nav-menu">
						<li><a href="/">INÍCIO</a>
						</li>
						<li><a href="/galeria">GALERIA</a>
						</li>
						<li><a href="#" hidefocus="true">EVENTOS</a>
							<ul class="sub-menu">
								<li><a href="/eventos/corporativos">Corporativos</a></li>
								<!-- <li><a href="/eventos/sociais">Sociais</a></li> -->
								<li><a href="/manutencao">Sociais</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!--Logo-->
			<div class="fly-wrap-logo">
				<a class="fly-logo" href="/">
					<img src="<?php echo asset('./public/images/logo.png'); ?>" alt="Logo" />
				</a>
			</div>
			<div class="fly-nav-wrap fly-nav-right">
				<nav class="fly-site-navigation secondary-navigation" id="fly-menu-secondary">
					<ul class="fly-nav-menu">
						<li><a href="/programacao">PROGRAMAÇÃO</a>
						</li>
						<li><a href="/contato">CONTATO</a>
						</li>
						<li><a href="#" hidefocus="true">UNIDADES</a>
							<ul class="sub-menu">
								<li><a href="/itaim">Itaim Bibi</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</header>
