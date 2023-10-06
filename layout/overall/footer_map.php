





<footer id="footer">
<div id="coocky" class="coocky">
<div class="coocky_container">
<a href="javascript:;" class="coocky_close"><span></span></a>
<h3 class="coocky__title"><img src="layout/img/adventure.png" style="width:190px"><br></h3>
<p><br>
 <span><b><img src="layout/img/startonhellgrave.png" style="width:175px"><img src="layout/img/rpgserver.png" style="width:160px"></b></span> </p>
<a href="register.php" data-oldhref="register.php" class="btn_coocky"><img src="layout/img/register.png" style="width:118px"></a>
</div>
</div>
<div class="footer_container f-c">
<div class="footer_social">
<h3>Follow us</h3>
 &emsp;
<a href="https://discord.gg/9zTvcCcD4K" target="_blank" >
<font color="black"><i class='fab fa-discord'></i></font>
</a> &emsp;
<a href="https://www.facebook.com/" target="_blank" class="footer_social_icon">
<font color="black"><i class='fab fa-facebook-f'></i></font>
</a>
 &emsp;
<a href="https://www.youtube.com/channel/UCagfpgiqEvSwH0p3nVyuZ8Q" target="_blank" class="footer_social_icon">
<font color="black"><i class='fab fa-youtube'></i></font>
</a>
<br></br>
</div>
<div class="footer_description">
<div class="description__copy">
<img src="layout/img/logo.png" style="width:60px">
Copyright &copy; 2022 Hellgrave RPG Server.<br>Web design by <a href="https://openagamescommunity.com">Open Games Community</a>, <a href="https://lepiigortv.com">Alex</a>. All Rights Reserved. </div>
 <div class="description__links f-c">
<a href="register.php">Register</a>
<a href="index.php">Information</a>
<a href="login_1.php">Login</a>
<a href="buypoints.php">Donation</a>
</div>
</div>
<div class="footer_social sharess">
<h3>Share</h3>
<div class="footer_social_container f-c">

<a href="#" class="footer_social_icon" data-type="fb">
<font color="black"><i class='fab fa-facebook-f'></i></font>
</a> &emsp;
<a href="#" class="footer_social_icon" data-type="whatsapp">
<font color="black"><i class='fab fa-whatsapp'></i></font>
</a> &emsp;
<a href="#" class="footer_social_icon" data-type="email">
<font color="black"><i class="fa fa-envelope" aria-hidden="true"></i></font>
</a>
</div>
</div>
</div>
</footer>

<script src="layout/template/site/hellgrave/js/essence_coocky.js"></script>
<script src="layout/template/site/hellgrave/js/jsshare.js" type="text/javascript"></script>
<script>
	
	document.addEventListener("DOMContentLoaded", function(event) {
		var shareItems = document.querySelectorAll('.sharess a');
		var isIOS = /iPad|iPhone|iPod/.test(navigator.platform)
				|| (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
		var isAndroid = /(android)/i.test(navigator.userAgent);
		var options = {};
		if (isIOS || isAndroid) {
			options.link_telegram = 'tg://msg';
			options.link_whatsapp = 'whatsapp://send';
		}
		for (var i = 0; i < shareItems.length; i += 1) {
			shareItems[i].addEventListener('click', function share(e) {
				e.preventDefault();
				return JSShare.go(this, options);
			});
		}
	});
	
</script> 
</div>

<script src="layout/template/site/hellgrave/js/jquery3.6min.js" type="text/javascript"></script>
<script src="layout/template/site/hellgrave/js/slick-slider/slick1.6.js"></script>
<script src="layout/template/site/hellgrave/js/slick-slider/slider_settings.js"></script>
<script src="layout/template/site/hellgrave/js/language.js"></script>
<script src="layout/template/site/hellgrave/js/menu.js"></script>
</body>
</html>