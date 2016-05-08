<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width" />
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="https://www.theritzlondon.com/wp-content/themes/Ritz2016/img/icons/favicon.ico" rel="shortcut icon">
<link href="https://www.theritzlondon.com/wp-content/themes/Ritz2016/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link href='https://fonts.googleapis.com/css?family=Quattrocento|Cinzel|EB+Garamond' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<!-- Main site nav -->
<link rel='stylesheet' id='smartmenus-core-css'  href='<?php echo get_template_directory_uri(); ?>/css/sm-core-css.css' media='all' />
<link rel='stylesheet' id='smartmenus-theme-css'  href='<?php echo get_template_directory_uri(); ?>/css/sm-blue/sm-blue.css' media='all' />
<!-- Bootstrap core CSS -->
<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/js/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Slick styles -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css"/>
<!-- Remodal styles -->
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/remodal.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/remodal-default-theme.css">
<!-- Load CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">

<?php wp_head(); ?>

<?php //wp_enqueue_script("jquery"); ?>
</head>
<body>

<div class="slice h-clearfix mobile-nav h-visible-sm">
	<div class="faux-topbar">
		<div class="top-bar">
			<div class="f-col-4 l-padding">
				<div class="ritz-button mob-menu-trig">☰ Menu</div>
			</div>
			<div class="f-col-4 t-center l-padding">
				<a class="best-rate" href="https://www.theritzlondon.com/best-rate-guarantee/">BEST RATE GUARANTEE</a>
			</div>
			<div class="f-col-4 l-padding t-right">
				<a href="https://www.yourreservation.net/tb3/index.cfm?bf=HLLW0420&lng=EN&page=roomrates&_ga=1.48927726.991371522.1462264532" class="ritz-button book-now-btn">Book now</a>
			</div>
		</div>
		<div class="mob-navigation">
			<ul>
				<li><a href="https://www.theritzlondon.com/overview/">About The Ritz</a>
					<ul class="sub-menu">
						<li><a href="https://www.theritzlondon.com/overview/contact/">Contact</a></li>
						<li><a href="https://www.theritzlondon.com/overview/location/">Location</a></li>
						<li><a href="https://www.theritzlondon.com/guest-services/the-ritz-salon/">The Ritz Salon</a></li>
						<li><a target="_blank" href="http://www.theritzclub.com/">The Ritz Club</a></li>
						<li><a target="_blank" href="http://www.ritzfinejewellery.com/">Ritz Fine Jewellery</a></li>
						<li><a href="https://www.theritzlondon.com/overview/photo-gallery/">Photo Gallery</a></li>
						<li><a href="https://www.theritzlondon.com/overview/history-ritz/">History</a></li>
						<li><a href="https://www.theritzlondon.com/overview/ritz-gift-shop-vouchers/">Ritz Gift Shop and Vouchers</a></li>
					</ul>
				</li>
				<li><a href="https://www.theritzlondon.com/rooms-suites/">Rooms &#038; Suites</a>
					<ul class="sub-menu">
						<li><a href="https://www.theritzlondon.com/rooms-suites/luxury-hotel-rooms/">Rooms</a></li>
						<li><a href="https://www.theritzlondon.com/rooms-suites/suites/">Suites</a></li>
						<li><a href="https://www.theritzlondon.com/rooms-suites/signature-suites/">Signature Suites</a></li>
						<li><a href="https://www.theritzlondon.com/rooms-suites/seasonal-offers-room-packages/">Packages</a></li>
						<li><a href="https://www.theritzlondon.com/anniversary/">Ritz Anniversary</a></li>
						<li><a href="https://www.theritzlondon.com/guest-services/kidztheritz/"><span class="__cf_email__" data-cfemail="6d060409172d1905081f041917">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
					</ul>
				</li>
				<li><a href="https://www.theritzlondon.com/dining-drinks/">Dining &#038; Drinks</a>
					<ul class="sub-menu">
						<li><a href="https://www.theritzlondon.com/dining-drinks/afternoon-tea-reservations/">Afternoon Tea at The Ritz</a></li>
						<li><a href="https://www.theritzlondon.com/dining-drinks/ritz-restaurant/">The Ritz Restaurant</a></li>
						<li><a href="https://www.theritzlondon.com/dining-drinks/rivoli-bar/">The Rivoli Bar</a></li>
						<li><a href="https://www.theritzlondon.com/events-weddings/private-dining/">Private Dining</a></li>
						<li><a href="https://www.theritzlondon.com/opera-and-champagne-dinners/">Opera &#038; Champagne Dinners</a></li>
						<li><a href="https://www.theritzlondonvouchers.com">Gift Vouchers</a></li>
						<li><a href="https://www.theritzlondon.com/anniversary/">Ritz Anniversary</a></li>
					</ul>
				</li>
				<li><a href="https://www.theritzlondon.com/events-weddings/">Events &#038; Weddings</a>
					<ul class="sub-menu">
						<li><a href="https://www.theritzlondon.com/events-weddings/your-wedding/">Your Wedding</a></li>
						<li><a href="https://www.theritzlondon.com/events-weddings/private-dining/">Private Dining</a></li>
						<li><a href="https://www.theritzlondon.com/events-weddings/menus/">Menus</a></li>
						<li><a href="https://www.theritzlondon.com/events-weddings/capacities-dimensions-and-floorplans/">Capacities &#038; Floorplans</a></li>
						<li><a href="https://www.theritzlondon.com/events-weddings/business-meetings/">Business Meetings</a></li>
						<li><a href="https://www.theritzlondon.com/opera-and-champagne-dinners/">Opera &#038; Champagne Dinners</a></li>
						<li><a href="https://www.theritzlondon.com/anniversary/">Ritz Anniversary</a></li>
					</ul>
				</li>
				<li><a href="https://www.theritzlondon.com/ritz-london-special-offers/">Special Offers</a></li>
				<li><a target="_blank" href="https://www.theritzlondonvouchers.com">Gift Vouchers</a></li>
				<li><a href="https://www.theritzlondon.com/anniversary/">Best of British</a>
					<ul class="sub-menu">
						<li><a href="https://www.theritzlondon.com/anniversary/royal-ascot/">Royal Ascot</a></li>
						<li><a href="https://www.theritzlondon.com/anniversary/wimbledon/">The Tennis Championships</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="slice h-clearfix h-visible-sm">
	<div class="l-col-12 l-content">
		<div class="f-col-6 l-content">
			<div class="i-ritz-mob"></div>
		</div>
		<div class="f-col-6 l-content">
			<div class="i-ritz-logo-appoint"></div>
		</div>
	</div>
</div>

<div class="slice faux-header h-hidden-sm">
	<!-- Nav -->
	<div class="slice header h-clearfix">
		<a href="#" class="ritz-logo"></a>
		<div class="l-col-12 l-content">
			<!-- nav -->
			<div class="main-nav">
				<ul>
					<li><a href="https://www.theritzlondon.com/overview/">About The Ritz</a>
						<ul class="sub-menu">
							<li><a href="https://www.theritzlondon.com/overview/contact/">Contact</a></li>
							<li><a href="https://www.theritzlondon.com/overview/location/">Location</a></li>
							<li><a href="https://www.theritzlondon.com/guest-services/the-ritz-salon/">The Ritz Salon</a></li>
							<li><a target="_blank" href="http://www.theritzclub.com/">The Ritz Club</a></li>
							<li><a target="_blank" href="http://www.ritzfinejewellery.com/">Ritz Fine Jewellery</a></li>
							<li><a href="https://www.theritzlondon.com/overview/photo-gallery/">Photo Gallery</a></li>
							<li><a href="https://www.theritzlondon.com/overview/history-ritz/">History</a></li>
							<li><a href="https://www.theritzlondon.com/overview/ritz-gift-shop-vouchers/">Ritz Gift Shop and Vouchers</a></li>
						</ul>
					</li>
					<li><a href="https://www.theritzlondon.com/rooms-suites/">Rooms &#038; Suites</a>
						<ul class="sub-menu">
							<li><a href="https://www.theritzlondon.com/rooms-suites/luxury-hotel-rooms/">Rooms</a></li>
							<li><a href="https://www.theritzlondon.com/rooms-suites/suites/">Suites</a></li>
							<li><a href="https://www.theritzlondon.com/rooms-suites/signature-suites/">Signature Suites</a></li>
							<li><a href="https://www.theritzlondon.com/rooms-suites/seasonal-offers-room-packages/">Packages</a></li>
							<li><a href="https://www.theritzlondon.com/anniversary/">Ritz Anniversary</a></li>
							<li><a href="https://www.theritzlondon.com/guest-services/kidztheritz/"><span class="__cf_email__" data-cfemail="6d060409172d1905081f041917">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
						</ul>
					</li>
					<li><a href="https://www.theritzlondon.com/dining-drinks/">Dining &#038; Drinks</a>
						<ul class="sub-menu">
							<li><a href="https://www.theritzlondon.com/dining-drinks/afternoon-tea-reservations/">Afternoon Tea at The Ritz</a></li>
							<li><a href="https://www.theritzlondon.com/dining-drinks/ritz-restaurant/">The Ritz Restaurant</a></li>
							<li><a href="https://www.theritzlondon.com/dining-drinks/rivoli-bar/">The Rivoli Bar</a></li>
							<li><a href="https://www.theritzlondon.com/events-weddings/private-dining/">Private Dining</a></li>
							<li><a href="https://www.theritzlondon.com/opera-and-champagne-dinners/">Opera &#038; Champagne Dinners</a></li>
							<li><a href="https://www.theritzlondonvouchers.com">Gift Vouchers</a></li>
							<li><a href="https://www.theritzlondon.com/anniversary/">Ritz Anniversary</a></li>
						</ul>
					</li>
					<li><a href="https://www.theritzlondon.com/events-weddings/">Events &#038; Weddings</a>
						<ul class="sub-menu">
							<li><a href="https://www.theritzlondon.com/events-weddings/your-wedding/">Your Wedding</a></li>
							<li><a href="https://www.theritzlondon.com/events-weddings/private-dining/">Private Dining</a></li>
							<li><a href="https://www.theritzlondon.com/events-weddings/menus/">Menus</a></li>
							<li><a href="https://www.theritzlondon.com/events-weddings/capacities-dimensions-and-floorplans/">Capacities &#038; Floorplans</a></li>
							<li><a href="https://www.theritzlondon.com/events-weddings/business-meetings/">Business Meetings</a></li>
							<li><a href="https://www.theritzlondon.com/opera-and-champagne-dinners/">Opera &#038; Champagne Dinners</a></li>
							<li><a href="https://www.theritzlondon.com/anniversary/">Ritz Anniversary</a></li>
						</ul>
					</li>
					<li><a href="https://www.theritzlondon.com/ritz-london-special-offers/">Special Offers</a></li>
					<li><a target="_blank" href="https://www.theritzlondonvouchers.com">Gift Vouchers</a></li>
					<li><a href="https://www.theritzlondon.com/anniversary/">Best of British</a>
						<ul class="sub-menu">
							<li><a href="https://www.theritzlondon.com/anniversary/royal-ascot/">Royal Ascot</a></li>
							<li><a href="https://www.theritzlondon.com/anniversary/wimbledon/">The Tennis Championships</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /nav -->
		</div>
		<div class="ritz-logo-appoint"></div>
	</div>
<!-- Nav end -->
</div>