<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php $meta = json_decode(file_get_contents("./constants/meta.json"), true)["modernisation-et-refonte-applications-toulouse"]; ?>
		<title>Dark Moon - Développement et refonte d'application</title>
		<meta name="description" content="<?php echo($meta["description"]); ?>">
		<meta name="subject" content="<?php echo($meta["subject"]); ?>">
		<meta name="author" content="Mehdi FERKATOU">
		<?php require_once("views/head.html"); ?>
	</head>
	<body class="home" style=" odd p-0 featured">
		<?php
			require_once("views/particles.html");
			require_once("views/header.html");
		?>
		<section id="slider" class="section-1 p-0 featured left">
			<div class="swiper-container no-slider animation slider-h-100">
				<div class="swiper-wrapper">
					<!-- Item 1 -->
					<div class="swiper-slide slide-center">
						<?php require_once("views/hero.html"); ?>
						<div class="slide-content row" data-mask-768="80">
							<div class="col-12 d-flex inner">
								<div class="left align-self-center text-center text-md-left">
									<h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Modernisation et refonte d'application</h1>
									<p data-aos="zoom-out-up" data-aos-delay="800" class="p-police-size description">Agence de conception et de création d'application. Expert en modernisation et refonte d'application mobile, web et bureau.</p>
									<a href="telephone.html" class=" ml-auto mr-auto ml-md-0 mt-4 btn primary-button police-btn">
										ON VOUS RAPPELLE
										<i class="material-icons" style="font-size:25px; margin-left: 10px; width: 0.5em;">arrow_forward</i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination">

				</div>
			</div>
		</section>

        <!-- Services -->
        <section id="services" class="section-1 odd offers featured custom">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 class="super effect-static-text">Nos Services</h2>
                        <p class="text-max-800">Construisez le workflow de votre Application avec les services suivants :</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 margin-item ">
                        <div class="card featured">
                            <i class="icon icon-globe color-item"></i>
                            <h4>Passez en direct</h4>
                            <p>Nous distribuons l'application et apportons des modifications pour les utilisateurs.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-basket"></i>
                            <h4>Maintenance</h4>
                            <p>Nous vous proposons une formule d'assistance et de  maintenance d'application.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Objectifs</h4>
                            <p>Nous étudions votre projet et réalisons une étude de faisabilité de ce dernier.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-layers"></i>
                            <h4>Maquettes</h4>
                            <p>Nous vous proposons des maquettes et des simulations de votre application.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Développement</h4>
                            <p>Nos développeurs sont entièrement dévoués pour donner vie à votre projet.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-bulb color-item"></i>
                            <h4>Assurance qualité</h4>
                            <p>Les applications modernisés sont testées pour valider tout bogues potentiels.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<?php require_once("views/testimonials.php"); ?>

<style>
/* Décrire l'animation */
@keyframes slideDownFadeIN {
    from {top:-100px;opacity: 0;}
    to {top:0px;opacity:1;}
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
  background-color: rgba(0, 0, 0, 0.4);
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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

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


        <section id="get" class="section-1 hero odd p-0">
            <div class="swiper-container no-slider animation slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
				<div class="content-box phoneOnly background-modale" style="width:60%;border-radius:6px;border:0px;">
					<header class="container pixel-border4k" style="border-radius: 4px;" >
						<a href="#" class="closebtn" style="font-size:2rem;color: #a1caff;"></a>
						<h2 class="titre-modale super effect-static-text" style="">Expert toulousain.</h2>
					</header>
					<div class="container container1">
						<p class="p-modale">Nous sommes animés par la créativité. Nous modernisons des applications innovantes pour vous aider à obtenir de meilleurs résultats et à vous consolider sur le marché toulousain.</p>
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
					<div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/8.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="appear h-phoneOnly super effect-static-text">Refonte d'application.</h2>
                                <p class="appear p-phoneOnly">Dark Moon est spécialisé dans la refonte et migration des applications en région Toulousaine</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Logiciels obsolètes</h4>
                                        <p class="appear p-phoneOnly">Les entreprises continuent fréquemment de distribuer des <u class="bold-mot">applications</u> et des logiciels obsolètes.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Outils modernes</h4>
                                        <p class="appear p-phoneOnly">Les <u class="bold-mot">applications en fin de vie</u> ne permettent pas de profiter des fonctionnalités apportées par des outils technologiques modernes.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                                <h2 class="appear h-phoneOnly super effect-static-text">Nos services de modernisation.</h2>
                                <p class="appear p-phoneOnly">Nos Services de modernisation et de <u class="bold-mot">refonte d'application</u> sur mesure à Toulouse.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Convivialité et l'accessibilité</h4>
                                        <p class="appear p-phoneOnly">Nous améliorerions la <u class="bold-mot">convivialité et l'accessibilité</u> de vos applications vieillissantes.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Processsus de refonte d'application</h4>
                                        <p class="appear p-phoneOnly">Les <u class="bold-mot">applications modernisées</u> ont une interface utilisateur plus conviviale en accord avec les tendances du moment et une architecture plus solide.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/7.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                </div>
            </div>
        </section>
		<section id="video" class="section-1 highlights image-left">
            <div class="container">
                <div class="row appear ">
					<div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/6.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="appear h-phoneOnly super effect-static-text">Modernisation des applications.</h2>
                                <p class="appear p-phoneOnly">Dark Moon expert en modernisation des applications héritées sur mesure à Toulouse.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Mises à niveaux</h4>
                                        <p class="appear p-phoneOnly">Nous réalisons des mises à niveaux et des <u class="bold-mot">refontes d’application</u> de logiciel plus ou moins importantes selon les besoins et objectifs du client.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Domaines d’expertises</h4>
                                        <p class="appear p-phoneOnly">Nos domaines d’expertise s’étendent aux bases de données, aux systèmes d’exploitation <u class="bold-mot">(SecDevOps)</u> l’IoT, le Web, le cloud, le mobile...<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                <div class="row appear ">
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="appear h-phoneOnly super effect-static-text">Migration et optimisation.</h2>
                                <p class="appear p-phoneOnly">Nos services de migration et d'optimisation d'application web, bureau et mobile sur mesure à Toulouse.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Applications et logiciels obsolètes</h4>
                                        <p class="appear p-phoneOnly">Nous réalisons une <u class="bold-mot">migration d’application</u> fluide et transparente incluant la migration des bases de données, des plateformes, des systèmes d’exploitation. <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Optimisation d'application</h4>
                                        <p class="appear p-phoneOnly">Si vous souhaitez simplement améliorer les <u class="bold-mot">fonctionnalités de l'application</u> pour la rendre plus conviviale, réactive et facile à entretenir, nous proposons des services d’optimisation d'application.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/2.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                </div>
            </div>
        </section>

				<?php require_once("views/team.php"); ?>

        <!-- Feedback -->
        <section id="feedback" class="section-1 odd carousel feedback custom featured">
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
                                        <img src="assets/images/julien.svg" alt="Adams Baker" class="person">
                                        <h4>Julien </h4>
                                        <p>Très satisfait de l'intégration d'une API réalisé par Dark Moon.</p>
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
                                        <img src="assets/images/alexandre.svg" alt="Mary Evans" class="person">
                                        <h4>Alexandre</h4>
                                        <p>Site web applicatif livré à temps, Design au top ! Merci à vous.</p>
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
                                        <img src="assets/images/nicolas.svg" alt="Sarah Lopez" class="person">
                                        <h4>Nicolas</h4>
                                        <p>Sérieux, à l'écoute et réactif, Merci à vous pour vos conseils B & I.</p>
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
                                        <img src="assets/images/pascal.svg" alt="Joseph Hills" class="person">
                                        <h4>Pascal</h4>
                                        <p>Dark Moon s'est montré compétent pour la création de mon e-commerce.</p>
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
                                        <img src="assets/images/elodie.svg" alt="Karen Usman" class="person">
                                        <h4>Elodie</h4>
                                        <p>Bonne formation WordPress dispensée par vos soins très efficace.</p>
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

		<?php require_once("views/scripts.html"); ?>
	</body>
</html>
