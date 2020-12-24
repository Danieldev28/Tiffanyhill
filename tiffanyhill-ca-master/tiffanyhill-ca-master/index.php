<?php
include("includes/config.php");
include("includes/functions.php");
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
if($page) { $args = explode('/', $page); $page=$args[0]; }
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie6" dir="ltr" lang="en-US"><![endif]-->
<!--[if IE 7 ]><html class="ie7" dir="ltr" lang="en-US"><![endif]-->
<!--[if IE 8 ]><html class="ie8" dir="ltr" lang="en-US"><![endif]-->
<!--[if IE 9 ]><html class="ie9" dir="ltr" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="ltr" lang="en-US"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="shortcut icon" href="favicon.ico?v=2">
		<title>Tiffany Hill</title>
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Pinyon+Script" rel="stylesheet">
		<link href="<?php echo $config['Site']['url']; ?>/fancy/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo $config['Site']['url']; ?>/css/styles.css?v=<?php echo date("his"); ?>" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99595105-5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-99595105-5');

			(function() {
				var didInit = false;
				function initMunchkin() {
					if(didInit === false) {
						didInit = true;
						Munchkin.init('229-MZC-921');
					}
				}
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = '//munchkin.marketo.net/munchkin.js';
				s.onreadystatechange = function() {
					if (this.readyState == 'complete' || this.readyState == 'loaded') {
						initMunchkin();
					}
				};
				s.onload = initMunchkin;
				document.getElementsByTagName('head')[0].appendChild(s);
			})();

			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '350952558797614');
			fbq('track', 'PageView');

		</script>
		<?php
		if($page=='thank-you'){
		?>
		<script>
		  fbq('track', 'CompleteRegistration');
		</script>
		<?php
		}
		?>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=350952558797614&ev=PageView&noscript=1"/></noscript>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-91390139-4', 'auto');
			ga('send', 'pageview');
			var url="<?php echo $config['Site']['url']; ?>";
		</script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-780068445"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-780068445');
		</script>
		<?php
		if($page=='thank-you'){ ?>
		<script>
		  gtag('event', 'conversion', {'send_to': 'AW-780068445/E8zPCMSggo0BEN3M-_MC'});
		</script>

		<?php
		}
		?>
	</head>
	<body data-spy="scroll" data-target=".mainmenu" data-offset="100">
		<header class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $config['Site']['url']; ?>"><img src="<?php echo $config['Site']['url']; ?>/img/tiffany-hill-in-ancaster-logo-white.png" class="w-100"></a>
				</div>
				<nav class="collapse navbar-collapse mainmenu relative">
					<ul class="nav navbar-nav">
						<li <?php if($page=='home'){ ?>class="active"<?php } ?>><a href="<?php echo $config['Site']['url']; ?>">Home</a></li>
						<li <?php if($page=='singles-and-towns'){ ?>class="active"<?php } ?>><a href="<?php echo $config['Site']['url']; ?>/singles-and-towns">Singles & Towns</a></li>
						<li <?php if($page=='neighbourhood-amenities'){ ?>class="active"<?php } ?>><a href="<?php echo $config['Site']['url']; ?>/neighbourhood-amenities">Neighbourhood</a></li>
						<li <?php if($page=='contact-us'){ ?>class="active"<?php } ?>><a href="<?php echo $config['Site']['url']; ?>/contact-us">Contact Us</a></li>
						<li class="d-inline-block d-sm-none"><a href="<?php echo $config['Site']['url']; ?>/contact-us/#register-now">Register Now</a></li>
					</ul>
					<div class="fix-nav-item-right bg-red d-sm-block d-none" ><a href="<?php echo $config['Site']['url']; ?>/contact-us/#register-now" id="registerLink" class="decoration-none"><span class="text-uppercase fs-28 tt-demo">Register Now</span></a></div>
				</nav><!--/.nav-collapse -->
			</div>
		</header>

		<?php if(!empty($page) && file_exists("pages/$page.php")): ?>
			<?php include "pages/$page.php"; ?>
		<?php else: ?>
			<?php include "pages/404.php"; ?>
		<?php endif; ?>

		<!--[if lt IE 8]>
		<script>
			$(function(){
				$('.row *').each(function(){
					var fullW = $(this).outerWidth(),
						actualW = $(this).width(),
						wDiff = fullW - actualW,
						newW = actualW - wDiff;
					$(this).css('width',newW);
				});
			});
		</script>
		<![endif]-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-780068445"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'AW-780068445');
		</script>
		<script src="<?php echo $config['Site']['url']; ?>/js/jquery.js" defer></script>
		<script src="<?php echo $config['Site']['url']; ?>/js/bootstrap.js" defer></script>
		<script src="<?php echo $config['Site']['url']; ?>/js/fancybox.js" defer></script>
		<script src="<?php echo $config['Site']['url']; ?>/js/default.js?v=<?php echo date("his"); ?>" defer></script>
	</body>
</html>
