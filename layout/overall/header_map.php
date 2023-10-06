<html lang="en">
<head>

<link rel="stylesheet" href="layout/template/site/hellgrave/css/style.css@v1.css">
<link rel="stylesheet" href="layout/template/site/hellgrave/css/animation.css">
<link rel="stylesheet" href="layout/template/site/hellgrave/css/adaptation.css">
<link rel="stylesheet" href="layout/template/site/hellgrave/css/otherpages.css@v1.css">
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
<div class="site">
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
		<div class="menu_item_title">Account</div></a>

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
</div> <link rel="stylesheet" href="layout/template/site/hellgrave/css/map.css@v1.css">
<link rel="stylesheet" href="layout/template/site/hellgrave/css/pinchzoomer.min.css@v1.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="layout/template/site/hellgrave/js/map/jquery.translate.js@v5"></script>
<script type="text/javascript" src="layout/template/site/hellgrave/js/map/functions.js@v6"></script>
<script type="text/javascript" src="layout/template/site/hellgrave/js/map/map.js"></script>
<script src="layout/template/site/hellgrave/js/map/hammer.min.js" type="text/javascript"></script>
<script src="layout/template/site/hellgrave/js/map/TweenMax.min.js" type="text/javascript"></script>
<script src="layout/template/site/hellgrave/js/map/jquery.pinchzoomer.min.js" type="text/javascript"></script>
<div class="npclist"></div>