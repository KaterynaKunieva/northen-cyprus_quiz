
	<div class="hidden"></div>

	
	<footer id="footer">
		<div class="container">
			<div class="section_content">
				<div class="footer_column">
					<img src="img/logo.png" alt="" class="footer_logo">
				</div>
				<div class="footer_contacts">
					<div class="contact_item">
						<div class="icon_wrap">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="text_wrap">
							<div class="title">Телефон:</div>
							<a href="tel:0800-800-800" class="footer_link">0800-800-800</a>
						</div>
					</div>
					<div class="contact_item">
						<div class="icon_wrap">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="text_wrap">
							<div class="title">Электронная почта:</div>
							<a href="mailto:email@examle.com" class="footer_link">email@examle.com</a>
						</div>
					</div>
				</div>
				<div class="social_links">
					<a href="#"><img src="img/in.png" alt=""></a>
				</div>
			</div>
		</div>
	</footer>


	<!-- Modal window -->
	<div id="modal_form" class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">
		<button type="button" class="remodal-close" data-remodal-action="close"><span class="lnr lnr-cross"></span></button>
		<div class="modal_content">
			<div class="center_wrap">
				<div class="form_title">Заполните форму</div>
				<div class="desc">чтобы получить консультацию</div>
			</div>
			<form method="post">
				<span class="wpcf7-form-control-wrap tel-266">
					<input type="text" name="Name" required placeholder="Ваше имя">
				</span>
				<span class="wpcf7-form-control-wrap tel-266">
					<input type="text" name="Phone" required placeholder="E-mail или Номер телефона">
				</span>
				<div class="btn_style_wrap">
					<input type="submit" class="btn_style" value="Получить консультацию">
				</div>
			</form>
		</div>
	</div>
	

	<!-- Modal window -->
	<div id="modal_thank" class="remodal" data-remodal-id="modal_thank" data-remodal-options="hashTracking: false">
		<button type="button" class="remodal-close" data-remodal-action="close"><span class="lnr lnr-cross"></span></button>
		<div class="modal_content">
			<div class="center_wrap">
				<img src="img/thank_icon.png" alt="" class="thank_icon">
				<div class="form_title">Спасибо</div>
				<div class="desc">В ближайшее время мы свяжемся с вами!</div>
				<a href="#" class="go_to_home" data-remodal-action="close">Вернуться назад</a>
			</div>
		</div>
	</div>


	<!-- Load Scripts Start -->


	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ7gHm33Px6wMgkNANu5OdUKEIUQCHHjg&v=3.exp"></script>
	<script type="text/javascript" src="js/GoogleMap.js?1"></script>

	<script>var scr = {"scripts":[
		{"src" : "js/waypoints.min.js", "async" : false},
		{"src" : "js/remodal.min.js", "async" : false},
		{"src" : "js/slick.min.js", "async" : false},
		{"src" : "js/lazyload.min.js", "async" : false},
		{"src" : "js/common.min.js?4", "async" : false},
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Load Scripts End -->

</body>
</html>
