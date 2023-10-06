<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="layout/template/site/hellgrave/css/style.css@v10.css">
<link rel="stylesheet" href="layout/template/site/hellgrave/css/animation.css">
<link rel="stylesheet" href="layout/template/site/hellgrave/css/adaptation.css@v1.css">

<link rel="stylesheet" href="layout/template/site/hellgrave/promo/css/style.css" type="text/css" />
<link rel="stylesheet" href="layout/template/site/hellgrave/promo/css/animate.css" type="text/css" />

<script type="text/javascript" src="layout/template/site/hellgrave/promo/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="layout/template/site/hellgrave/promo/js/js.js"></script>

<script type="text/javascript" src="layout/template/site/hellgrave/promo/js/wow.min.js"></script>
<script type="text/javascript">
		
		$(document).ready(function() {
			setTimeout(function(){
				$('.window-load span').addClass('active');
				if ($(window).width() > 1000) {
					new WOW().init();
				}
			}, 2000);
			setTimeout(function(){
				$('.window-load').fadeOut(200);
				$('#main-menu').addClass('fadeInDown');
				if ($(window).width() > 1000) {
					var navi = $('div[data-scroll-navi]').offset().top - 80;
					if ($(window).scrollTop() < navi) {$('div[data-scroll-navi]').addClass('animated zoomInUp')}
							}
			}, 2200);
		});
		
	</script>
<style type="text/css">
		form.searchwiki_form,
		div a.btn_rect.navbar_btn_rect{

			display: none;

		}
		main div.navi.fixed .box {

			top: 141px;

		}

	</style>


<title>Hellgrave RPG Custom Tibia Server</title>
<meta property="og:title" content="Hellgrave RPG Custom Tibia Server">
<meta property="og:site_name" content="Hellgrave RPG Custom Tibia Server">
<meta property="og:type" content="website">
<meta property="og:description" content="Come and start playing on Hellgrave RPG Custom Tibia Server.">
<meta name="description" content="Hellgrave RPG is a mmorpg tibia server. Our server is totally custom.">
<meta name="keywords" content="mmoweb, mmorpg, tibia, Hellgrave, open games community, opengamescommunity, tibia, custom, rpg, map, true experience, quest, daily quest, daily dungeon, arena system, mining, alchemist, raids, leveling, power, gold.">
<meta charset="utf-8">
<link rel="stylesheet" 
   href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
   integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
   crossorigin="anonymous">
<link rel="shortcut icon" href="layout/img/favicon.ico">


			</head>
<body>

<div class="main-menu">
<div id="header" class="f-b">
<div class="header_leftside f-s">
<button class="js-menu menu" type="button">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
<nav class="menuhide">
<div class="navigate_bg">
<span class="navigate_close js-menu"></span>
<div class="navigate_l">
<div class="navigate_content">
<div class="menu_items">
<a href="wiki.php" class="menu_item">
<div class="menu_item_desc">Explore</div>
<div class="menu_item_title">The Wiki</div>
</a>
<a href="map.php" class="menu_item">
<div class="menu_item_desc">Explore</div>
<div class="menu_item_title">The Map</div>
</a>
<a href="highscores.php" class="menu_item">
<div class="menu_item_desc">See</div>
<div class="menu_item_title">Highscores</div>
</a>
<a href="forum.php" class="menu_item">
<div class="menu_item_desc">Visit</div>
<div class="menu_item_title">Forum</div>
</a>
<a href="login_1.php" class="menu_item">
<div class="menu_item_desc">Access</div>
<div class="menu_item_title">Login Panel</div>
</a>
<a href="register.php" class="menu_item">
<div class="menu_item_desc">Register</div>
<div class="menu_item_title">Account</div>
</a>
</div>
</div>
</div>
</div>
</nav>

<div class="logotype">
<a href="home.php"><img src="layout/img/logo.png" alt="" width="100px"></a>
</div>

<div class="online">
<div class="online_container f-c">
<span class="server_on"></span>
Online:<span class="server_players"><?php echo user_count_online();?><span>
</span>
</div>
</div>
</div>


<?php if (user_logged_in() === true): ?>
<div class="settings f-s">
<div class="account">
<a href="myaccount.php" class="account_btn">
<span><img src="layout/template/site/hellgrave/img/whitestyle/user-lock.png">My Account</span>
</a>
</div>
 </div>
 <?php else: ?>
 
<div class="settings f-s">
<div class="account">
<a href="login_1.php" class="account_btn">
<span><img src="layout/template/site/hellgrave/img/whitestyle/user-lock.png">Login Panel</span>
</a>
</div>
 </div>
 <?php endif; ?>
</div></div>
<div id="main-content">
<header class="">
<div class="inner">
<a href="home.php" class="logo"><img src="layout/img/logo.png" alt="" width="160px"></a>
<br>
<div class="text-row">
<div class="title">
<img src="layout/img/hellgrave_custom_logo.png">
</div>
<div class="text">
This version of Tibia Server is totally custom map. Start today an incredible experience, create your account, you can also join a guild or create your own. The game is no longer just about leveling up, but PvP and PvE activities have been added, like Daily Quests, Daily Dungeon, Arena system, mining system and more upcoming. The server includes Latest Goshnar Bosses.<br>
</div>
<a href="register.php" class="more"><span><img src="layout/img/playnow.png"></span></a>
</div>
</div>
</header>
<main>
<div class="content-block block-1">
<div class="clear" style="height: 50px;"></div>

<div class="inner centerinfo" style="color:#d8d8d8;text-align:center">

