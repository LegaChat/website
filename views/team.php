<!-- Team -->
<section id="team" class="section-1 carousel featured card-white">
	<div class="overflow-holder">
		<div class="container">
			<div class="row text-center intro">
				<div class="col-12">
					<h2 class="super effect-static-text">Notre équipe</h2>
					<p class="text-max-800">Notre équipe vous aidera à valider votre politique de sécurité et la traduira en un audit d'application mobile complet pour vous aider à renforcer votre stratégie contre les cyberattaques. Veuillez consulter les<a class="ensavoirplus text18" href="#mentionlegale"> mentions légales.</a></p>
				</div>
			</div>
			<div class="swiper-container mid-slider-simple items">
				<div class="swiper-wrapper">
					<?php
						require_once("libs/builder.php");

						echo(Builder::team([
							[
								"name" => "Mehdi FERKATOU",
								"img"  => "/assets/images/team-1.svg",
								"p"    => "Administrateur Systèmes Réseaux / Cybersécurité",
								"in"   => "https://www.linkedin.com/in/mehdi-ferkatou/"
							], [
								"name" => "Florian CARDINAL",
								"img"  => "/assets/images/team-2.svg",
								"p"    => "Concepteur / Analyste programmeur",
								"in"   => "https://www.linkedin.com/in/florian-cardinal-13317b150/"
							], [
								"name" => "Elysee LANDU",
								"img"  => "/assets/images/team-3.svg",
								"p"    => "Conseillère / Gestion en entreprise",
								"in"   => "https://www.linkedin.com/in/elysee-landu-9556b114a/"
							], [
								"name" => "Dr Bernard Feurer",
								"img"  => "/assets/images/team-4.svg",
								"p"    => "Dirigeant de PICOMETRICS / Conseiller",
								"in"   => "https://www.linkedin.com/in/bernard-feurer-0a1b9418/"
							], [
								"name" => "Julien Angelica",
								"img"  => "/assets/images/team-5.svg",
								"p"    => "Infographiste / Motion Designer 2D & 3D",
								"in"   => "https://www.linkedin.com/in/julien-angelica/"
							]
						]));
					?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>
