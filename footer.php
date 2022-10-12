<footer>
			<div class="row">
				<img class="logo" src="./dist/img/Truly_logo_black.svg" alt="Truly logo">
				<ul>
					<li><a href="#">Flavors</a></li>
					<li><a href="#">Find Turly</a></li>
					<li><a href="about-truly.html">About Truly</a></li>
					<li><a href="#">Nutrition facts</a></li>
				</ul>
				<ul>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Responsibility</a></li>
					<li><a href="#">careers</a></li>
				</ul>
				<div class="social-chicklets">
					<ul>
						<li><a href="#"><img src="./dist/img/social_mainNav_Instagram.svg" alt="Instagram"></a></li>
						<li><a href="#"><img src="./dist/img/social_mainNav_Facebook.svg" alt="Facebook"></a></li>
						<li><a href="#"><img src="./dist/img/social_mainNav_Youtube.svg" alt="Youtube"></a></li>
						<li><a href="#"><img src="./dist/img/social_mainNav_Twitter.svg" alt="Twitter"></a></li>
					</ul>
				</div>
			</div>
			<div class="copyright">
				<p>Please drink responsibly. © 2022 Hard Seltzer Beverage Company, LLC</p>
				<div class="links">
					<a href="#">Privacy Policy</a>
					<a href="#">Terms Of Use</a>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
		<script src="dist/js/main.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.images-row').slick({
					dots: true,
					arrows: true,
					infinite: true,
					speed: 300,
					slidesToShow: 4,
					slidesToScroll: 4,
					revArrow: $('.prev'),
					nextArrow: $('.next'),
					responsive: [
						{
						breakpoint: 1024,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4,
							infinite: true,
							dots: true
						}
						},
						{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
						},
						{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
						}
					]
					});
				});
		  </script>
	</body>
</html>
