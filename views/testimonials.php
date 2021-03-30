<!-- Testimonials -->
<section id="testimonials" class="section-1 odd carousel feedback custom featured">
	<div class="overflow-holder">
		<div class="container">
			<div class="row text-center intro">
				<div class="col-12">
					<h2 class="super effect-static-text">Partenaires</h2>
					<p class="text-max-800">Nous avons développé de nombreuses relations d'affaires & partenariats privilégiés avec différents réseaux d'entreprises.</p>
				</div>
			</div>
			<div class="swiper-container mid-slider items">
				<div class="swiper-wrapper">
					<?php
						require_once("libs/builder.php");

						echo(Builder::testimonials([
							[
								"img" => [
									"src" => "/assets/images/ibm.png",
									"h"   => 80,
									"w"   => 120
								],
								"p"   => "Dark Moon est membre du réseau IBM Partner depuis Septembre 2020",
							], [
								"img" => [
									"src" => "/assets/images/microsoft-logo.png",
									"h"   => 90,
									"w"   => 195
								],
								"p"   => "Développement UWP avec l'accompagnement des ingénieurs Desktop Bridge",
							], [
								"img" => [
									"src" => "/assets/images/1&1.png",
									"h"   => 120,
									"w"   => 180
								],
								"p"   => "Dark Moon est membre du réseau partenaire 1&1 ionos depuis 3 ans",
							], [
								"img" => [
									"src" => "/assets/images/advanced-installer.png",
									"h"   => 117,
									"w"   => 170
								],
								"p"   => "Distribution de licence logiciel dans le cadre d'un partenariat Open Source",
							]
						]));
					?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>
