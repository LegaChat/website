<!DOCTYPE html>
<?php
	// Import libs
	require_once("libs/builder.php");
?>
<html lang="fr">
	<head>
		<title>Dark Moon - Éditeur de logiciel à Toulouse - Entreprise de Cybersécurité à Toulouse- Cygwin Portable</title>
		<meta name="description" content="Dark Moon - Contactez-nous au ☎ 07 66 28 90 11 - Entreprise de sécurité informatique à Toulouse - Éditeur de logiciel à Toulouse pour Startup, Porteur de projet, SSII | Android - iOS - Application HTML5 - Windows - OS X - Java - Objective-C - C/C++  - Swift - Python - Unity">
		<meta name="subject" content="Entreprise de sécurité informatique à Toulouse - Éditeur de logiciel à Toulouse">
		<meta name="author" content="Mehdi FERKATOU">
		<?php require_once("views/head.html"); ?>
	</head>
	<body class="home" style=" odd p-0 featured">
		<?php
			require_once("views/particles.html");
			require_once("views/header.html");
		?>

		<!-- Slider -->
		<section id="slider" class="section-1 p-0 featured left">
			<div class="swiper-container no-slider animation slider-h-100">
				<div class="swiper-wrapper">
					<div class="swiper-slide slide-center">
						<?php require_once("views/hero.html"); ?>
						<div class="slide-content row" data-mask-768="80">
							<div class="col-12 d-flex inner">
								<div class="left align-self-center text-center text-md-left">
									<h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">DarkMoon, Service informatique à Toulouse</h1>
									<p data-aos="zoom-out-up" data-aos-delay="800" class="p-police-size description">Edition de logiciel, développement d'application, création Web, cybersécurité, cloud DevOps et administration & systèmes & réseaux à Toulouse.</p>
									<a href="telephone.html" class=" ml-auto mr-auto ml-md-0 mt-4 btn primary-button police-btn">
										ON VOUS RAPPELLE
										<i class="material-icons" style="font-size:25px; margin-left: 10px; width: 0.5em;">arrow_forward</i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>

		<!-- Services -->
		<section id="services" class="section-1 odd offers featured custom">
			<div class="container">
				<div class="row text-center intro">
					<div class="col-12">
						<h2 class="super effect-static-text">Nos Services</h2>
						<p class="text-max-800">Construisez le workflow de votre application & site web, créez votre application pentestez votre réseaux, avec les services suivants:</p>
					</div>
				</div>
				<div class="row justify-content-center text-center items">
					<?php
						echo(Builder::services([
							[
								"icon" => "globe",
								"h4"   => "Dark Moon Cygwin",
								"p"    => "Nous distribuons l'application et apportons des modifications pour les utilisateurs",
								"a"    => "contact.html",
							], [
								"icon" => "basket",
								"h4"   => "Pentest Réseaux",
								"p"    => "Nous vous proposons une formule d'assistance et de maintenance d'application",
								"a"    => "contact.html",
							], [
								"icon" => "screen-smartphone",
								"h4"   => "Création Site Web",
								"p"    => "Nos sites web parfaitement conçus sont adaptés aux mobiles, sûrs, rapides",
								"a"    => "contact.html",
							], [
								"icon" => "layers",
								"h4"   => "Dev App & API",
								"p"    => "API hautes performances, adaptées à tout type de modèles commerciaux",
								"a"    => "contact.html",
							], [
								"icon" => "chart",
								"h4"   => "Création App Mobile",
								"p"    => "Nous fournissons des services de développement d'applications multiplateformes",
								"a"    => "contact.html",
							], [
								"icon" => "bulb",
								"h4"   => "Business Intelligence",
								"p"    => "L’intelligence d'analyse de données permet de découvrir les opportunités",
								"a"    => "contact.html",
							]
						]));
					?>
				</div>
			</div>
		</section>

		<?php require_once("views/testimonials.php"); ?>

		<style>
			/* Décrire l'animation */
			@keyframes slideDownFadeIN {
				from { top: -100px; opacity: 0; }
				to { top: 0px; opacity: 1; }
			}

			/* Foncer l'arrière-plan de la fenêtre modale */
			.modal {
				display: none;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0, 0, 0);
				background-color: rgba(0, 0, 0, .4);
			}

			/* Afficher la fenêtre modale lorsqu'elle est ciblée par un lien supprimer */
			.modal:target {
				display: table;
				position: absolute;
			}

			/* la fenêtre modale  */
			.modal-dialog {
				display: table-cell;
				vertical-align: middle;
			}

			/* Le contenu de la modale */
			.modal-dialog .modal-content {
				margin: auto;
				background-color: #f3f3f3;
				position: relative;
				padding: 0;
				outline: 0;
				border: 1px #777 solid;
				text-align: justify;
				width: 100%;
				box-shadow:
					0 4px 8px 0 rgba(0, 0, 0, 0.2),
					0 6px 20px 0 rgba(0, 0, 0, 0.19);
				animation-name: slideDownFadeIN;
				animation-duration: 0.5s;
			}

			/* Bouton servant à fermer la fenêtre modale */
			.closebtn {
				text-decoration: none;
				float: right;
				font-size: 35px;
				font-weight: bold;
				color: #fff;
			}

			.closebtn:hover,
			.closebtn:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}

			.container {
				padding: 2px 16px;
			}

			@media (max-width: 800px) {
				.phoneOnly {
					width:80% !important;
				}
			}
		</style>

		<!-- Get -->
		<section id="get" class="section-1 hero odd p-0">
			<div class="swiper-container no-slider animation slider-h-75">
				<div class="swiper-wrapper">
					<!-- Item 1 -->
					<div class="content-box phoneOnly background-modale" style="width:60%;border-radius:6px;border:0px;">
						<header class="container pixel-border4k" style="border-radius: 4px;" >
							<a href="#" class="closebtn" style="font-size:2rem;color: #a1caff;"></a>
							<h2 class="titre-modale super effect-static-text" style="">Expert à Toulouse.</h2>
						</header>
						<div class="container container1">
							<p class="p-modale">Nous sommes animés par la créativité. Nous créons des applications innovantes pour vous aider à obtenir de meilleurs résultats et à vous consolider sur le marché toulousain.</p>
							<div class="d-sm-inline-flex mt-3">
								<a href="contact.html" data-aos="zoom-out-up" data-aos-delay="1200" class="bouton-modale bouton4k ml-auto mr-auto mr-md-0 mt-4 mt-sm-0 btn primary-button"><i class="icon-rocket"></i>DEVIS GRATUIT</a>
							</div>
						</div>
						<p></p>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>


	    <!-- About [video] -->
	    <section id="video" class="section-1 highlights image-left">
	        <div class="container">
	            <div class="row appear">
				<div class="col-12 col-md-6">
	                    <a>
	                        <i class=""></i>
	                        <div class=""></div>
	                        <img class="appear floating" src="assets/images/8.svg" class="fit-image" alt="dark moon">
	                    </a>
	                </div>
	                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
	                    <div class="row intro">
	                        <div class="col-12 p-0">
	                            <h2 class="appear h-phoneOnly super effect-static-text">Application Web sur mesure à toulouse</h2>
	                            <p class="appear p-phoneOnly">Un moyen facile de créer des <u class="bold-mot">applications mobiles</u> pour plusieurs appareils !</p>
	                        </div>
	                    </div>
	                    <div class="row items">
	                        <div class="col-12 p-0">
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-trophy"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Conception d'application web à Toulouse</h4>
	                                    <p class="appear p-phoneOnly">Dark Moon s'appuit sur plusieurs années d'expérience et peut fournir une large gamme de services de conception <u class="bold-mot">d'application web sur mesure</u> à Toulouse.<a class="ensavoirplus" href="Développement-d'application-web-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-diamond"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Développement d'application web en Haute Garonne</h4>
	                                    <p class="appear p-phoneOnly">Nous avons été amené à collaborer avec de nombreuses entreprises de différentes tailles, de tout secteur tel que les <u class="bold-mot">secteurs B2B</u> dans le domaine financier, sartups, boutique en ligne, médical...<a class="ensavoirplus" href="Développement-d'applications-mobiles-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	<section id="video" class="section-1 highlights image-left">
	        <div class="container">
	            <div class="row appear">
	                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
	                    <div class="row intro">
	                        <div class="col-12 p-0">
	                            <h2 class="appear h-phoneOnly super effect-static-text">Créateur site web à Toulouse</h2>
	                            <p class="appear p-phoneOnly">Nos services de développement de <u class="bold-mot2">site web sur mesure</u> à Toulouse.</p>
	                        </div>
	                    </div>
	                    <div class="row items">
	                        <div class="col-12 p-0">
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-trophy"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Site Web sur mesure à Toulouse</h4>
	                                    <p class="appear p-phoneOnly"><u class="bold-mot">Créateurs de site web</u> polyvalents pour offrir à nos clients une gamme complète de services interactifs et vous concevoir des sites web innovants.<a class="ensavoirplus" href="Conception-et-développement-web-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-diamond"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Développement web en Occitanie</h4>
	                                    <p class="appear p-phoneOnly">Nos <u class="bold-mot">créations web</u> génèrent des résultats grâce à notre expertise et notre approche fonctionnelle et notre vision axée sur l'expérience pour atteindre les objectifs commerciaux visés par nos clients.<a class="ensavoirplus" href="Développement-de-sites-web-d'e-commerce-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				<div class="col-12 col-md-6">
	                    <a>
	                        <i class=""></i>
	                        <div class=""></div>
	                        <img class="appear floating" src="assets/images/6.svg" class="fit-image" alt="dark moon">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </section>
	<section id="video" class="section-1 highlights image-left">
	        <div class="container">
	            <div class="row appear">
				<div class="col-12 col-md-6">
	                    <a>
	                        <i class=""></i>
	                        <div class=""></div>
	                        <img class="appear floating" src="assets/images/2.svg" class="fit-image" alt="dark moon">
	                    </a>
	                </div>
	                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
	                    <div class="row intro">
	                        <div class="col-12 p-0">
	                            <h2 class="appear h-phoneOnly super effect-static-text">Conception d'API à Toulouse</h2>
	                            <p class="appear p-phoneOnly">Dark Moon pour le <u class="bold-mot">développement</u> et <u class="bold-mot">l'intégration</u> de vos <u class="bold-mot">API</u> sur mesure à Toulouse.</p>
	                        </div>
	                    </div>
	                    <div class="row items">
	                        <div class="col-12 p-0">
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-trophy"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Développement en Haute garonne</h4>
	                                    <p class="appear p-phoneOnly">Dark Moon développe et conçoit des <u class="bold-mot">API sur mesure</u>, performante et transparente pour les utilisateurs.<a class="ensavoirplus" href="Développement-et-intégration-d'API-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-diamond"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Intégration d'API à Toulouse</h4>
	                                    <p class="appear p-phoneOnly"><u class="bold-mot">Intégration d'API</u> entièrement conçue pour aligner vos résultats avec les données d'autres applications.<a class="ensavoirplus" href="Développement-et-intégration-d'API-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	<section id="video" class="section-1 highlights image-left">
	        <div class="container">
	            <div class="row appear">
	                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
	                    <div class="row intro">
	                        <div class="col-12 p-0">
	                            <h2 class="appear h-phoneOnly super effect-static-text">Test d'intrusion & Pentest à Toulouse</h2>
	                            <p class="appear p-phoneOnly">Dark Moon réalise à Toulouse de <u class="bold-mot">tests d’intrusion</u> qui visent à identifier les vulnérabilités des systèmes informatiques avant que ces <u class="bold-mot">failles</u> soient découvertes et exploitées.</p>
	                        </div>
	                    </div>
	                    <div class="row items">
	                        <div class="col-12 p-0">
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-trophy"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Politique de sécurité</h4>
	                                    <p class="appear p-phoneOnly">Pour vous protéger, il est nécessaire de s’appuyer sur des technologies modernes de haute qualité, telles que les antivirus, <u class="bold-mot">les certificats SSL</u>, les pare-feux, la protection des équipements physiques.<a class="ensavoirplus" href="Test-d'intrusion-réseau-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-diamond"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Pentest en Haute Garonne</h4>
	                                    <p class="appear p-phoneOnly">Pour valider une politique de sécurité efficace, un <u class="bold-mot">test d’intrusion</u> réalisé par un attaquant mettra en évidence les failles de sécurité de votre système informatique.<a class="ensavoirplus text18" href="Pentest-web-toulouse.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				<div class="col-12 col-md-6">
	                    <a>
	                        <i class=""></i>
	                        <div class=""></div>
	                        <img class="appear floating" src="assets/images/4.svg" class="fit-image" alt="dark moon">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </section>

	<section id="video" class="section-1 highlights image-left">
	        <div class="container">
	            <div class="row appear">
				<div class="col-12 col-md-6">
	                    <a>
	                        <i class=""></i>
	                        <div class=""></div>
	                        <img class="appear floating" src="assets/images/7.svg" class="fit-image" alt="dark moon">
	                    </a>
	                </div>
	                <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
	                    <div class="row intro">
	                        <div class="col-12 p-0">
	                            <h2 class="appear h-phoneOnly super effect-static-text">Dark Moon Cygwin</h2>
	                            <p class="appear p-phoneOnly">Dark Moon Cygwin Portable, L’univers « Linux » Portable sous Windows !</p>
	                        </div>
	                    </div>
	                    <div class="row items">
	                        <div class="col-12 p-0">
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-trophy"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Pour qui ?</h4>
	                                    <p class="appear p-phoneOnly">Pour ceux qui travaillent exclusivement sous <u class="bold-mot">Windows & Windows Server</u> et qui sont ingénieurs réseaux, au sein d’une entreprise soucieuse de la sécurité de son SI, avec un environnement Windows très verrouillé, excluant WSL et la virtualisation.<a class="ensavoirplus" href="Dark-Moon-Cygwin-Windows-Portable.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                            <div class="row item">
	                                <div class="col-12 col-md-2 align-self-center">
	                                    <i class="icon icon-diamond"></i>
	                                </div>
	                                <div class="col-12 col-md-9 align-self-center">
	                                    <h4 class="appear h-phoneOnly">Pourquoi ?</h4>
	                                    <p class="appear p-phoneOnly">Vous souhaiteriez utiliser des scripts bash pour piloter / automatiser les tâches Windows et utiliser des outils d’un environnement de type<u class="bold-mot"> Linux portable</u> depuis votre PC ou une clé USB, Dark Moon est un excellent outil. <a class="ensavoirplus" href="Dark-Moon-Cygwin-Windows-Portable.php"> En savoir plus</a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

			<?php require_once("views/team.php"); ?>

	    <!-- Feedback -->
	    <section id="feedback" class="section-1 odd carousel custom featured">
	        <div class="overflow-holder">
	            <div class="container">
	                <div class="row text-center intro">
	                    <div class="col-12">
	                        <h2 class="super effect-static-text">Avis client</h2>
	                        <p class="text-max-800">Nos clients sont satisfaits du travail que nous faisons. La plus grande satisfaction est de recevoir la reconnaissance pour ce que nous avons construit. Cela nous motive à nous améliorer encore plus.</p>
	                    </div>
	                </div>
	                <div class="swiper-container mid-slider items">
	                    <div class="swiper-wrapper">
	                        <div class="swiper-slide slide-center text-center item">
	                            <div class="row card">
	                                <div class="col-12">
	                                    <img src="assets/images/hervé.svg" alt="Adams Baker" class="person">
	                                    <h4>Hervé</h4>
	                                    <p>Pentest web rapide et efficace, équipe de professionnel que je recommande !</p>
	                                    <ul class="navbar-nav social share-list ml-auto">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="swiper-slide slide-center text-center item">
	                            <div class="row card">
	                                <div class="col-12">
	                                    <img src="assets/images/régis.svg" alt="Mary Evans" class="person">
	                                    <h4>Régis</h4>
	                                    <p>Pentest d'intrusion abordable, équipe réactive, Expérience positive.</p>
	                                    <ul class="navbar-nav social share-list ml-auto">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
										<li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="swiper-slide slide-center text-center item">
	                            <div class="row card">
	                                <div class="col-12">
	                                    <img src="assets/images/marc.svg" alt="Sarah Lopez" class="person">
	                                    <h4>Marc</h4>
	                                    <p>Équipe de cybersécurité très impliquée et compétente. Merci à vous.</p>
	                                    <ul class="navbar-nav social share-list ml-auto">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="swiper-slide slide-center text-center item">
	                            <div class="row card">
	                                <div class="col-12">
	                                    <img src="assets/images/joachim.svg" alt="Joseph Hills" class="person">
	                                    <h4>Joachim</h4>
	                                    <p>Équipe très ouverte, chef de projet compétent en Audit, RAS.</p>
	                                    <ul class="navbar-nav social share-list ml-auto">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="swiper-slide slide-center text-center item">
	                            <div class="row card">
	                                <div class="col-12">
	                                    <img src="assets/images/joan.svg" alt="Karen Usman" class="person">
	                                    <h4>Joan</h4>
	                                    <p>Équipe de vrais professionnel, j'ai du plaisir à travailler avec vous !</p>
	                                    <ul class="navbar-nav social share-list ml-auto">
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                        <li class="nav-item">
	                                            <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="swiper-pagination"></div>
	                </div>
	            </div>
	        </div>
	    </section>

		<!-- Features -->
		<section id="features" class="section-1 odd offers featured">
			<div class="container">
				<div class="row justify-content-center text-center items">
					<?php
						echo(Builder::feature([
							[
								"icon" => "globe",
								"h4"   => "Support",
								"p"    => "Tous nos projets sont soutenus par une solide équipe de support et de maintenance",
								"a"    => "contact.html",
							], [
								"icon" => "basket",
								"h4"   => "Formation",
								"p"    => "Nos équipes de formateurs vous cadrent pour le maniement de votre application",
								"a"    => "contact.html",
							], [
								"icon" => "screen-smartphone",
								"h4"   => "Activités",
								"p"    => "Nos services comprennent la stratégie, le conseil, la conception, le développement...",
								"a"    => "contact.html",
							]
						]));
					?>
				</div>
			</div>
		</section>

	<!-- Pricing -->
	    <section id="pricing" class="section-1 odd plans featured">
	        <div class="container">
	            <div class="row text-center intro">
	                <div class="col-12">
	                    <h2 class="super effect-static-text">Plans et tarification</h2>
	                    <p class="text-max-800">Choisissez la formule web idéale pour ce dont vous avez besoin. Nous travaillons avec des prix abordables pour tous les types de projet.</p>
	                </div>
	            </div>
	            <div class="row justify-content-center text-center items">
	                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
	                    <div class="card">
	                        <i class="icon icon-handbag"></i>
	                        <h4>Essential</h4>
	                        <span class="price"><i>€</i>49</span>
	                        <ul class="list-group list-group-flush">
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Assistance téléphonique</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Système de ticket</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Assistance par e-mail</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Formation</span>
	                                <i class="icon-min m-0 icon-close text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Infogérance</span>
	                                <i class="icon-min m-0 icon-close text-right"></i>
	                            </li>
	                        </ul>
	                        <a href="contact.html" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOISIR</a>
	                    </div>
	                </div>
	                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
	                    <div class="card">
	                        <i class="icon icon-fire"></i>
	                        <h4>Standard</h4>
	                        <span class="price"><i>€</i>99</span>
	                        <ul class="list-group list-group-flush">
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Formation CMS (Wordpress...)</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Formation solution propriétaire</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Transfert de code & contenu</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Formation Optimisation SEO</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Infogérance</span>
	                                <i class="icon-min m-0 icon-close text-right"></i>
	                            </li>
	                        </ul>
	                        <a href="contact.html" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOISIR</a>
	                    </div>
	                </div>
	                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
	                    <div class="card">
	                        <i class="icon icon-diamond"></i>
	                        <h4>Premium</h4>
	                        <span class="price"><i>€</i>129</span>
	                        <ul class="list-group list-group-flush">
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Sys-Administration Cloud & VPS</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Maintenance et sécurité</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Maintenance site web</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>Distribution CloudFare & SSL</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                                <span>SLA</span>
	                                <i class="icon-min m-0 icon-check text-right"></i>
	                            </li>
	                        </ul>
	                        <a href="contact.html" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOISIR</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

			        <!-- Get -->
	    <section id="get" class="section-1 hero odd p-0">
	        <div class="swiper-container no-slider animation slider-h-75">
	            <div class="swiper-wrapper">

	                <!-- Item 1 -->
			<div class="content-box phoneOnly background-modale" style="width:60%;border-radius:6px;border:0px;">
				<header class="container pixel-border4k" style="border-radius: 4px;" >
					<a href="#" class="closebtn" style="font-size:2rem;color: #a1caff;"></a>
					<h2 class="titre-modale super effect-static-text" style="">CRÉATEUR D'APPLICATION</h2>
				</header>
				<div class="container container1">
					<p class="p-modale">Dark Moon est un éditeur de logiciel toulousain et un prestataire informatique proposant des services de développement d'applications, de création web, de cybersécurité et des services d'administration systèmes & réseaux & DBA.</p>
				<div class="d-sm-inline-flex mt-3">
	                    <a href="contact.html" data-aos="zoom-out-up" data-aos-delay="1200" class="bouton-modale bouton4k ml-auto mr-auto mr-md-0 mt-4 mt-sm-0 btn primary-button"><i class="icon-rocket"></i>DEVIS GRATUIT</a>
				</div>
				</div>
				<p></p>
			</div>
	            </div>
	            <div class="swiper-pagination"></div>
	        </div>
	    </section>

			<?php require_once("views/footer.html"); ?>

	    <!-- Modal [responsive menu] -->
	    <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
	        <div class="modal-dialog modal-dialog-slideout" role="document">
	            <div class="modal-content full">
	                <div class="modal-header" data-dismiss="modal">
	                    Menu <i class="icon-close"></i>
	                </div>
	                <div class="menu modal-body">
	                    <div class="row w-100">
	                        <div class="items p-0 col-12 text-center">
	                            <!-- Append [navbar] -->
	                        </div>
	                        <div class="contacts p-0 col-12 text-center">
	                            <!-- Append [navbar] -->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<div id="mentionlegale" class="modal" style="background-color: rgba(30, 35, 52, 0.9);">
			<div class="modal-dialog">
				<div class="modal-content phoneOnly" style="width:60%;border-radius:6px;border:0px; background-image: linear-gradient(45deg, #1E2334 25%, #344068 65%);">
					<header class="container">
						<a href="#" class="closebtn" style="font-size:2rem;color: #a1caff;">×</a>
						<h2 class="super effect-static-text" style="text-align:left;">Mentions légales</h2>
					</header>
					<div class="container">
						<p style="color: #a1caff;">SIREN 847 659 612 | SIRET 847 659 612 00018 | Code APE / NAF 5829B / Edition de logiciels outils de développement et de langages.</p>
					<div class="d-sm-inline-flex mt-3">
						<a href="contact.html" style=" color:#1E2334; background-image: linear-gradient(45deg, #7697FF 25%, #FF83FD 65%)" data-aos="zoom-out-up" data-aos-delay="1200" class="ml-auto mr-auto mr-md-0 mt-4 mt-sm-0 btn primary-button"><i class="icon-rocket"></i>DEVIS GRATUIT</a>
					</div>
					</div>
					<p></p>
				</div>
			</div>
		</div>
	    <!-- Scroll [to top] -->
	    <div id="scroll-to-top" class="scroll-to-top">
	        <a href="#header" class="">
	            <i class="icon-arrow-up"></i>
	        </a>
	    </div>

		<script src="assets/js/vendor/jquery.min.js"></script>
		<script src="assets/js/vendor/jquery.easing.min.js"></script>
		<script src="assets/js/vendor/jquery.inview.min.js"></script>
		<script src="assets/js/vendor/popper.min.js"></script>
		<script src="assets/js/vendor/bootstrap.min.js"></script>
		<script src="assets/js/vendor/ponyfill.min.js"></script>
		<script src="assets/js/vendor/slider.min.js"></script>
		<script src="assets/js/vendor/animation.min.js"></script>
		<script src="assets/js/vendor/progress-radial.min.js"></script>
		<script src="assets/js/vendor/bricklayer.min.js"></script>
		<script src="assets/js/vendor/gallery.min.js"></script>
		<script src="assets/js/vendor/shuffle.min.js"></script>
		<script src="assets/js/vendor/particles.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
