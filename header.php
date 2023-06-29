<!DOCTYPE html>
<html class="no-js" lang="ru" style="overflow-x:hidden;">
<head>
	<meta charset="utf-8">
	<title>SPA</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- head:css -->

	<style>a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:"";content:none}table{border-collapse:collapse;border-spacing:0}*{-webkit-box-sizing:border-box;box-sizing:border-box}html.fixed{overflow-y:hidden}body{font-size:16px!important;min-width:320px;position:relative;padding-right:0!important;line-height:28.8px!important;overflow:hidden;font-family:Roboto;font-weight:400;color:#000;margin:0;background-color:#ff0;-webkit-transition:all .4s;-o-transition:all .4s;transition:all .4s}.hidden{display:none}body a{color:#000917;text-decoration:none;-webkit-transition:all .4s;-o-transition:all .4s;transition:all .4s;text-decoration:none}body a:focus,body a:hover{color:#30d5c8;outline:0}body :focus{outline:0}img{vertical-align:middle;border:0}b{font-weight:700}p{margin-bottom:10px}strong{font-weight:700}.loader{background-color:#fff;bottom:0;height:100%;left:0;position:fixed;right:0;top:0;width:100%;z-index:5555;overflow:hidden;pointer-events:none}.loader .loader_inner{position:absolute;top:50%;left:50%;pointer-events:none;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1200px}}@media (min-width:1600px){.container{width:1560px}}@media only screen and (max-width:991px) and (min-width:768px){.hidden-sm{display:none!important}}@media only screen and (max-width:767px){.hidden-xs{display:none!important}}.click_disable{pointer-events:none}.center_wrap{text-align:center}.btn_wrap_right{text-align:right}.btn_style{padding:12px 30px 11px;color:#fff;min-width:215px;text-align:center;display:inline-block;font-weight:500;-webkit-transition:all .4s;-o-transition:all .4s;transition:all .4s;cursor:pointer;position:relative;border-radius:5px;text-transform:uppercase;background-color:#01ae9a}.btn_style:active,.btn_style:focus,.btn_style:hover{color:#fff;background-color:#1ab5a9}::-webkit-scrollbar{width:8px;background:0 0}::-webkit-scrollbar-track{border-radius:8px}::-webkit-scrollbar-thumb{background:#01ae9a}header{position:absolute;left:0;top:0;width:100%;-webkit-transition:all 1.4s;-o-transition:all 1.4s;transition:all 1.4s;z-index:20}header .header__wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}header .header__wrap .logo_wrap{position:relative;z-index:1;-ms-flex-negative:0;flex-shrink:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:230px;height:106px;padding:10px;border-radius:0 0 5px 5px;background-color:#000b28}header .header__wrap .logo_wrap img{max-width:100%;max-height:100%}header .header__wrap .languages{-ms-flex-negative:0;flex-shrink:0;position:relative}header .header__wrap .languages .language-chooser li{line-height:18px;font-size:15px;display:inline-block}header .header__wrap .languages .language-chooser li a{margin-left:30px;position:relative;display:inline-block;cursor:pointer;color:#fff;font-size:18px;font-weight:500;display:inline-block;text-transform:uppercase}header .header__wrap .languages .language-chooser li a:before{content:"";position:absolute;top:50%;left:-15px;margin-top:-3px;margin-left:-3px;width:6px;height:6px;border-radius:50%;background-color:#01ae9a}header .header__wrap .languages .language-chooser li.active a,header .header__wrap .languages .language-chooser li:hover a{color:#01ae9a}header .header__wrap .languages .language-chooser li:first-child a:before{content:initial}header .header__wrap .header_contacts{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}header .header__wrap .header_contact{margin-left:30px;font-size:16px;font-weight:500;color:#fff}header .header__wrap .header_contact i{margin-right:5px;color:#30d5c8;font-size:16px}header.animateIt{position:fixed;width:100%;top:-100%;background-color:#000b28;-webkit-transition:all 1s;-o-transition:all 1s;transition:all 1s;-webkit-box-shadow:0 0 25px rgba(0,0,0,.3);box-shadow:0 0 25px rgba(0,0,0,.3)}header.animateIt .header__wrap .languages{margin-right:auto}header.animateIt .header__wrap .btn_style{margin-left:40px}.head_menu>ul{margin:0 -20px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.head_menu>ul>li{display:inline-block;position:relative;line-height:50px;text-align:center;-webkit-transition:all .4s;-o-transition:all .4s;transition:all .4s}.head_menu>ul>li>a{position:relative;font-size:16px;line-height:30px;font-weight:500;color:#fff;padding:0 20px;text-transform:uppercase}.head_menu>ul>li>a:before{content:"";position:absolute;left:0;top:0;height:100%;width:1px;background-color:#fff;opacity:.3}.head_menu>ul>li.current-menu-item>a,.head_menu>ul>li:hover>a{color:#01ae9a}.head_menu>ul>li:first-child>a:before{content:initial}.mobile_menu{background-color:#fff;padding:0 15px;position:absolute;top:68px;right:-100vw;width:100%;height:suto;z-index:20;overflow-y:auto;text-align:center;-webkit-transition:all .5s;-o-transition:all .5s;transition:all .5s}.mobile_menu .btn_style{width:90%;font-size:18px!important;padding:14px 20px!important}.mobile_menu.active{right:0}.mobile_menu .head_menu_logo{margin-bottom:30px;display:inline-block}.mobile_menu .header_social_links{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.mobile_menu>ul>li{display:block;text-align:center;position:relative;width:100%;border-top:1px solid #edf2fa}.mobile_menu>ul>li a{display:inline-block;font-size:14px;font-weight:500;line-height:48px;position:relative;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s;text-transform:uppercase}.mobile_menu>ul>li.current-menu-item>a,.mobile_menu>ul>li:hover>a{color:#30d5c8}body.down .animateIt{top:0}.main_head{background-size:cover;background-position:center;background-repeat:no-repeat;position:relative;height:100vh;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:30px 0}.main_head:before{content:"";position:absolute;height:100%;width:100%;opacity:.4;z-index:2;background-color:#00031a}.main_head .main_head_content{z-index:3;position:relative}.main_head .main_head_content .hero_title_wrap{padding-left:24px;position:relative}.main_head .main_head_content .hero_title_wrap:before{content:"";position:absolute;left:0;top:0;width:4px;height:100%;border-radius:3px;background-color:#01ae9a}.main_head .main_head_content .small_desc{color:#01ae9a;font-size:18px;font-weight:600;line-height:21.6px;letter-spacing:1.8px;font-family:sourcesanspro;text-transform:uppercase}.main_head .main_head_content .description{position:relative;color:#fff;margin-bottom:20px}.main_head .scroll_next{position:absolute;bottom:0;left:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:12px 30px;z-index:2;color:#fff;line-height:20px;border:1px solid #fff;border-bottom:none;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.main_head .scroll_next:hover{color:#30d5c8}.main_head .scroll_next img{margin-right:10px}.toggle_mnu{width:42px;height:42px;z-index:110;border:none;right:0;margin-left:10px;top:0;z-index:100;padding:0;cursor:pointer;position:relative;-webkit-animation-delay:1s;animation-delay:1s;background-color:rgba(0,11,40,.3)}.toggle_mnu:focus{outline:0}.toggle_mnu span{display:block}.sandwich{width:25px;height:16px;position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;z-index:200}.sw-topper{position:relative;top:0;width:25px;height:2px;background:#fff;border:none;-webkit-transition:-webkit-transform .5s,top .2s;-webkit-transition:top .2s,-webkit-transform .5s;transition:top .2s,-webkit-transform .5s;-o-transition:transform .5s,top .2s;transition:transform .5s,top .2s;transition:transform .5s,top .2s,-webkit-transform .5s;display:block;border-radius:3px}.sw-bottom{position:relative;width:20px;height:2px;left:5px;top:5px;background:#fff;border:none;-webkit-transition:-webkit-transform .5s,top .2s;-webkit-transition:top .2s,-webkit-transform .5s;transition:top .2s,-webkit-transform .5s;-o-transition:transform .5s,top .2s;transition:transform .5s,top .2s;transition:transform .5s,top .2s,-webkit-transform .5s;-webkit-transition-delay:.2s,0;-o-transition-delay:.2s,0;transition-delay:.2s,0;border-radius:3px}.sw-footer{position:relative;width:15px;height:2px;left:10px;top:10px;background:#fff;border:none;-webkit-transition:all .5s;-o-transition:all .5s;transition:all .5s;-webkit-transition-delay:.1s;-o-transition-delay:.1s;transition-delay:.1s;border-radius:3px}.sandwich.active .sw-topper{top:7px;-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-clip-path:polygon(100% 0,0 0,0 100%,100% 100%);clip-path:polygon(100% 0,0 0,0 100%,100% 100%)}.sandwich.active .sw-footer{top:3px;left:0;width:25px;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);-webkit-clip-path:polygon(100% 0,0 0,0 100%,100% 100%);clip-path:polygon(100% 0,0 0,0 100%,100% 100%)}.sandwich.active .sw-bottom{opacity:0;top:0;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg);-webkit-clip-path:polygon(100% 0,0 0,0 100%,100% 100%);clip-path:polygon(100% 0,0 0,0 100%,100% 100%)}#ascrail2000-hr{display:none!important}@media only screen and (min-width:768px){.toggle_mnu{display:none}}</style>

	<!-- endinject -->

		<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

	<script>loadCSS( "https://cdn.linearicons.com/free/1.0.0/icon-font.min.css", false, "all" );</script>
	<script>loadCSS( "css/animate.min.css?ver=1.0.2", false, "all" );</script>
	<script>loadCSS( "css/fontawesome-all.min.css?ver=1.0.3", false, "all" );</script>
	<script>loadCSS( "css/main.min.css?ver=1.0.2", false, "all" );</script>
	<!-- Load CSS End -->

</head>

<body>
	
	<div class="loader">
		<div class="pre_loader_inner"></div>
		<div class="loader_inner"><img src="img/logo.png" alt="Logo"></div>
	</div>
	
	<header class="animateIt">
		<div class="header_content">
			<div class="container">
				<div class="header__wrap">
					<a href="/" class="logo_wrap">
						<img src="img/logo.png" alt="Logo">
					</a>
					<div class="languages">
						<ul class="language-chooser language-chooser-text qtranxs_language_chooser" id="qtranslate-chooser">
							<li class="lang-ua"><a href="#" hreflang="ua" title="UA (ua)" class="qtranxs_text qtranxs_text_ua"><span>UA</span></a></li>
							<li class="lang-ru active"><a href="#" hreflang="ru" title="RU (ru)" class="qtranxs_text qtranxs_text_ru"><span>RU</span></a></li>
						</ul>
					</div>
					<a href="tel:0800800800" class="header_contact"><i class="fas fa-phone-alt"></i> 0800-800-800</a>
					<a href="mailto:email@examle.com" class="header_contact"><i class="fas fa-envelope"></i> email@examle.com</a>
					<a href="#" class="btn_style" data-remodal-target="modal_thank">Получить консультацию</a>
				</div>
			</div>
		</div>
	</header>   

	<header>
		<div class="container">
			<div class="header__wrap">
				<a href="/" class="logo_wrap">
					<img src="img/logo.png" alt="Logo" class="logo">
				</a>
				<div class="header_right_wrap">
					<div class="header_contacts">
						<a href="tel:0800800800" class="header_contact"><i class="fas fa-phone-alt"></i> 0800-800-800</a>
						<a href="mailto:email@examle.com" class="header_contact"><i class="fas fa-envelope"></i> email@examle.com</a>
						<div class="languages">
							<ul class="language-chooser language-chooser-text qtranxs_language_chooser" id="qtranslate-chooser">
								<li class="lang-ua"><a href="#" hreflang="ua" title="UA (ua)" class="qtranxs_text qtranxs_text_ua"><span>UA</span></a></li>
								<li class="lang-ru active"><a href="#" hreflang="ru" title="RU (ru)" class="qtranxs_text qtranxs_text_ru"><span>RU</span></a></li>
							</ul>
						</div>
					</div>
					<nav class="menu head_menu">
						<ul>
							<li><a href="#">Наши преимущества</a></li>
							<li><a href="#">Модели джакузи</a></li>
							<li><a href="#">О компании</a></li>
							<li><a href="#">Как мы работаем</a></li>
						</ul>
						<div class="languages visible-xs">
							<ul class="language-chooser language-chooser-text qtranxs_language_chooser" id="qtranslate-chooser">
								<li class="lang-ua"><a href="#" hreflang="ua" title="UA (ua)" class="qtranxs_text qtranxs_text_ua"><span>UA</span></a></li>
								<li class="lang-ru active"><a href="#" hreflang="ru" title="RU (ru)" class="qtranxs_text qtranxs_text_ru"><span>RU</span></a></li>
							</ul>
						</div>
						<a href="tel:0800800800" class="header_contact visible-xs"><i class="fas fa-phone-alt"></i> 0800-800-800</a>
						<a href="mailto:email@examle.com" class="header_contact visible-xs"><i class="fas fa-envelope"></i> email@examle.com</a>
					</nav>

					<button class="toggle_mnu">
						<span class="sandwich">
							<span class="sw-topper"></span>
							<span class="sw-bottom"></span>
							<span class="sw-footer"></span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</header>   








