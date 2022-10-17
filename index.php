<?php
	$title = 'Home';
	$body_class = 'Home';
?>

<?php include 'header.php';?>

<div id="main" class="hero">
			<div class="hero-copy">
				<h1>Explosive Flavors</h1>
				<p>crack open with care</p>
				<a class="button" href="#">Explore Flavors</a>
			</div>
			<div class="video">
				<video aria-label="Video" class="mobile" autoplay>
					<source src="./dist/img/mobile_video.mp4" type="video/mp4" media="all and (max-width: 1200 px)">
				</video>
				<video aria-label="Video"  class="desktop" autoplay>
					<source src="./dist/img/desktop_v5_legal.mp4" type="video/mp4" media="all and (min-width: 1200 px)">
				</video>
			</div>
		</div>
		<section class="locate">
			<h2>Find Truly Near You</h2>
			<input type="text" placeholder="Enter City, State or ZIP Code">
		</section>
		<div class="callout">
			<div class="callout-copy">
				<h6>Sweet, Sour, Salty All in One</h6>
				<h3>Best of the Zest</h3>
				<p>We added some serious seltzer zest to everyone's favorite recipe.
				Truly Margarita-Style is made with real lime juice and real agave for a real refreshing drink.</p>
				<a href="#" class="learn-more button">Learn More</a>
			</div>
			<div class="callout-imagery">
				<img src="./dist/img/carousel_Margarita.jpg" alt="Margarita-Style">
			</div>
		</div>
		<section class="trailer">
			<div class="divider"></div>
			<p class="trailer-desktop"><a href="https://trulyhardseltzer.com?wvideo=iq22x3srjf"><img src="https://embed-ssl.wistia.com/deliveries/6e3469027f23b313888b5c300d9aa331.jpg?image_play_button_size=2x&amp;image_crop_resized=960x540&amp;image_play_button=1&amp;image_play_button_color=1d1d1de0"></a></p><p><a href="https://trulyhardseltzer.com?wvideo=iq22x3srjf"></a></p>
			<a class="trailer-mobile" href="#"><img src="./dist/img/VideoThumb_0322Spot_mobile.jpg" alt=""></a>
		</section>
		<div class="shop">
			<div class="shop-copy">
				<h6>Wear Your Seltzer On Your sleeve</h6>
				<h2>Shop truly Originals</h2>
				<p>When we say "Wear your drink with pride," we don't mean spill it all over your shirt
				— we mean score yourself some nice (dry) Truly gear and show the world your true flavor. Check it out:</p>
				<a href="#" class="visit-shop button">Visit the shop</a>
			</div>
			<section class="shop-slider">
				<div class="images-row">
					<img src="./dist/img/estore_canInsulator.jpg" alt="Truly coozie">
					<img src="./dist/img/estore_Summer_womensSwimsuit.jpg" alt="Flamingo bathing suit">
					<img src="./dist/img/estore_Summer_towel.jpg" alt="Truly Beach Towel">
					<img src="./dist/img/estore_Summer_mensSwimsuit.jpg" alt="Neon Swim suit">
					<img src="./dist/img/merch_winter_brumate.jpg" alt="Dark Aura Brumate">
					<img src="./dist/img/eStore_saltySweatshirt_img.jpg" alt="Truly Salty crewneck ">
					<img src="./dist/img/merch_blackPolo.jpg" alt="Truly Black Polo">
					<img src="./dist/img/merch_winter_extraSweatshirt.jpg" alt="Truly Extra Sweatshirt">
				</div>
			</section>
			<div class="divider"></div>
		</div>
		<div class="gallery">
			<div class="gallery-copy">
				<h6>Share Your Life in the tru-niverse</h6>
				<h2>Truly is ALL about you</h2>
				<p>Life is pretty sweet when you think about it.  
				That's why we're always in search of the next sweetest adventure. 
				The world is yours to explore (we suggest packing a cooler).
				</p>
			</div>
			<div class="gallery-images">
				<img class="image"src="./dist/img/ugc-content-square-2.png" alt="Girl Drinking on blanket">
				<img class="image"src="./dist/img/ugc-content-vertical-2.png" alt="People dancing on boat drinking truly">
				<img class="image"src="./dist/img/ugc-content-square-3.png" alt="Guy pouring truly into his mouth">
				<img class="image" src="./dist/img/ugc-content-vertical.png" alt="Couple trying truly in their living room ">
				<img class="image" src="./dist/img/ugc-content-vertical-3.png" alt="Matching bro's cheersing truly">
				<img class="image" src="./dist/img/ugc-content-vertical-5.png" alt="Guy holding up truly mango can">
				<img class="image" src="./dist/img/ugc-content-vertical-4.png" alt="Girl drinking truly passion fuit flavor">
			</div>
			<div class="share-content">
				<h2>Share Your Content with <span class="blue">#LiveTruly</span> For a Chance to be featured here.</h2>
			</div>
			<div class="divider-dark"></div>
		</div>
		<div class="about">
			<div class="about-copy">
				<h6>At This Party, Everyone's Welcome</h6>
				<h2>If you're a Truly fan, you're welcome here. 
					Just remember to keep the vibes high and the drinks cold.</h2>
				<a href="./about-truly.html" class="button">About Truly</a>
			</div>
			<div class="about-img"></div>
			<!-- <img src="./dist/img/generic-babypool.jpg" alt="Man in baby pool"> -->
		</div>
<?php include 'footer.php'; ?>
