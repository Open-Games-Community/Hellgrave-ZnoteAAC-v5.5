</div></div>

</div>
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
<h3><font color="black">Follow us</font></h3>
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
<img src="layout/img/logo.png" style="width:60px"><font color="black">
Copyright &copy; 2022 Hellgrave RPG Server.<br>Web design by </font><a href="https://openagamescommunity.com">Open Games Community</a><font color="black">,</font> <a href="https://lepiigortv.com">Alex</a><font color="black">. All Rights Reserved. </font></div>
 <div class="description__links f-c">
<a href="register.php">Register</a>
<a href="index.php">Information</a>
<a href="login_1.php">Login</a>
<a href="buypoints.php">Donation</a>
</div>
</div>
<div class="footer_social sharess">
<h3><font color="black">Share</font></h3>
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

<script src="layout/template/site/hellgrave/js/slick-slider/slick1.6.js"></script>
<script src="layout/template/site/hellgrave/js/slick-slider/slider_settings.js"></script>
<script src="layout/template/site/hellgrave/js/language.js"></script>
<script src="layout/template/site/hellgrave/js/menu.js"></script>

<script type="text/javascript" src="/template/panel/assets/js/menu.js"></script>
<script>
    $('#main > .grid').removeClass('grid').addClass('bodyrow').addClass('col-12').addClass('col-lg-9');
    $('#main > .row.justify-content-center').removeClass('row').removeClass('justify-content-center').addClass('bodyrow').addClass('col-12').addClass('col-lg-9');
    $('.bodyrow > .col-lg-8').removeClass('col-lg-8');
    $('img[src="Item not icon in DB!"]').remove();
    $('#main > .row').addClass('col-12').addClass('col-lg-9')
    $('.balance_html').text( $('.balance_html').text().replace(/ .*/g,'') );
    $('.navigation .fa-shopping-cart').parent().append('<div><small><span class="text-success">New</span></small></div>')
</script>
<script src="/template/panel/assets/js/codebase.core.min.js?v=1599965164"></script>
<script src="/template/panel/assets/js/codebase.app.min.js?v=1599965164"></script>
<script src="/template/panel/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/template/panel/assets/js/plugins/bootstrap-history-tabs/bootstrap-history-tabs.js?v=2"></script>
<script src="/template/panel/assets/js/plugins/masonry/masonry.pkgd.min.js"></script>
<script src="/template/panel/assets/js/mmoweb.js?v=1599965164"></script>
<script src="https://mmoweb.biz/watch.js"></script>
<script>window.masonry_div = $('.grid').masonry({itemSelector: '.grid-item',columnWidth: '.grid-sizer',percentPosition: true});$('.nav-tabs a').historyTabs();</script>
<script src="/template/panel/assets/js/plugins/clipboard/clipboard.min.js"></script>
<script src="/template/panel/assets/js/plugins/jquery.countdown/jquery.countdown.min.js"></script><script src="/template/panel/assets/js/plugins/slick/slick.min.js"></script><script src="/template/panel/assets/js/plugins/jquery-raty/jquery.raty.js"></script> 
<script src="/template/panel/assets/js/plugins/jquery.countdown/jquery.plugin.min.js"></script>
</body>
</html>