<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Dark Moon - Audit d'application - Entreprise de Cybersécurité à Toulouse</title>
		<meta name="description" content="Dark Moon - Contactez-nous au ☎ 07 66 28 90 11 - Audit d'application - Entreprise de Cybersécurité à Toulouse - pour Startup, Porteur de projet, SSII | Android - iOS - Application HTML5 - Windows - OS X - Java - Objective-C - C/C++  - Swift - Python - Unity">
		<meta name="subject" content="Audit d'application">
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
									<h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Audit d’application mobile à Toulouse.</h1>
									<p data-aos="zoom-out-up" data-aos-delay="800" class="p-police-size description">Entreprise de sécurité informatique & cybersécurité à Toulouse, service de Pentest d'application mobile, testeur de site web.</p>
									<a href="telephone.html" class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button police-btn">
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
                        <p class="text-max-800">Validez la politique de sécurité de votre organisation avec les services de Pentests suivants:</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-globe color-item"></i>
                            <h4>Audit d'App Web</h4>
                            <p>Les Web App sont complexes, ouvrant des possibilités d'attaques. <a style="color:#fff" href="contact.html"> En savoir plus</a></p>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-basket"></i>
                            <h4>Test d'intrusion PCI</h4>
                            <p>Destinés à valider la protection des données sensibles des cartes bancaires. <a style="color:#fff" href="Pentest-PCI-DSS-toulouse.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Test d'Intrusion Réseau</h4>
                            <p>Test d'analyses IPS, problèmes de routage, analyse des ports de FTR MySQL, SSH, etc...<a style="color:#fff" href="Test-d'intrusion-réseau-toulouse.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-layers"></i>
                            <h4>Audit de code</h4>
                            <p>Réalisation d'analyse et d'audit de code, d'intégrité du package, des protocoles ...<a style="color:#fff" href="Audit-de-code-toulouse.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Audit App Mobile</h4>
                            <p>Nous réalisons des tests des sécurités EndPoint, la sécurité et l'architecture ...<a style="color:#fff" href="Audit-d’application-mobile-toulouse.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-bulb color-item"></i>
                            <h4>Solution de sécurité</h4>
                            <p>Développement et intégration de logiciel de sécurité informatique sur mesure.<a style="color:#fff" href="Développement-d'application-web-toulouse.php"> En savoir plus</a></p>
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


		        <!-- Get -->
        <section id="get" class="section-1 hero odd p-0">
            <div class="swiper-container no-slider animation slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
				<div class="content-box phoneOnly background-modale" style="width:60%;border-radius:6px;border:0px;">
					<header class="container pixel-border4k" style="border-radius: 4px;" >
						<a href="#" class="closebtn" style="font-size:2rem;color: #a1caff;"></a>
						<h2 class="titre-modale super effect-static-text" style="">Expert Toulousain.</h2>
					</header>
					<div class="container container1">
						<p class="p-modale">Nous sommes animés par la créativité. Nous réalisons des tests audits d'application mobile complets pour vous aider à obtenir de meilleurs résultats et à vous consolider sur le marché toulousain. </p>
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
                                <h2 class= "appear h-phoneOnly super effect-static-text">Politique de sécurité.</h2>
                                <p class="appear p-phoneOnly">Dark Moon réalise des audits d’applications mobiles pour valider la <u class="bold-mot">politique de sécurité</u> de l’éditeur d’application mobile en répertoriant des vulnérabilités de sécurité en vue de les corriger et renforcer la stratégie de défense des éditeurs de logiciels à Toulouse</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Applications métiers</h4>
                                        <p class="appear p-phoneOnly">Les applications mobiles doivent être auditées pour garantir la <u class="bold-mot">confidentialité des informations</u> sensibles traitées par les applications internes et professionnelles à Toulouse.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                        <!-- <a href="#contact" class="mt-4 mr-auto ml-auto ml-lg-0 btn btn1 "><i class="icon-speech"></i>DEVIS GRATUIT</a> -->
									</div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Étude de la topologie de l’application à Toulouse</h4>
                                        <p class="appear p-phoneOnly">Selon les exigences de sécurité définie et la topologie de l'application, différentes techniques <u class="bold-mot">d'analyse de sécurité</u> peuvent être appliquées à chaque application mobile comprenant l’étude des applications mobiles, la <u class="bold-mot">sécurité des échanges de données</u> des applications mobiles et analyse de la sécurité des terminaux Android et IOS.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                                <h2 class="appear h-phoneOnly super effect-static-text">Audit des applications mobiles en Haute Garonne.</h2>
                                <p class="appear p-phoneOnly">Nous étudions l'architecture du package d’application en effectuant différents tests de sécurité</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Architecture du package d’application</h4>
                                        <p class="appear p-phoneOnly">Extraction du package, détection de dispositif de brouillage et de chiffrement de code, <u class="bold-mot">audit du code source de l’application</u>, Analyse des informations stockées et traitées par l’application, lecture des permissions <u class="bold-mot">d’accès utilisateurs</u> employées par l’application, vérification d’appel de composant logiciel tiers via des web sockets.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Sécurité de l’application</h4>
                                        <p class="appear p-phoneOnly">Analyse des <u class="bold-mot">mécanismes de sécurité</u> pour la transition de données depuis et vers l’application au travers des systèmes d’authentifications employés, des couches de chiffrements <u class="bold-mot">(SSL, TLS, AES, SHA, RSA...)</u> employés et des protocoles privilégié pour le transport des données (HTTP, HTTPS…)...<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/1.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                </div>
            </div>
        </section>

		<section id="video" class="section-1 highlights image-left">
            <div class="container">
                <div class="row appear">
                    <div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div></div>
                            <img class="appear floating" src="assets/images/2.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="appear h-phoneOnly super effect-static-text">Pentest EndPoint à Toulouse.</h2>
                                <p class="appear p-phoneOnly">Dark Moon, entreprise experte en sécurité informatique pour Pentester et sécuriser votre application mobile à Toulouse</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Web-Socket</h4>
                                        <p class="appear p-phoneOnly">Nous analysons la <u class="bold-mot">sécurité du serveur et le client web-socket</u> de l’application mobile. Nous réalisons des batteries de tests sur la base des recommandations de <u class="bold-mot">l’OWASP</u> et testons le système d’authentification et les permissions des fichiers de l’application à Toulouse.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Attaque du serveur Web-Socket</h4>
                                        <p class="appear p-phoneOnly">Nous tentons de nous <u class="bold-mot">introduire</u> dans le serveur connecté avec l’application et tentons de récupérer les identifiants d’authentifications pour <u class="bold-mot">compromettre la confidentialité</u> des échanges entre l’application et le serveur. <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once("views/team.php"); ?>

        <section id="features" class="section-1 odd offers featured">
            <div class="container">
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-globe"></i>
                            <h4>Confiance </h4>
                            <p>Tous nos projets sont soutenus par une solide équipe de support et de maintenance.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-basket"></i>
                            <h4>Formation</h4>
                            <p>Nos équipes de formateurs vous cadrent pour l'exploitation de votre infrastructure.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Activités</h4>
                            <p>Nos services comprennent le pentesting, l'audit, le développement.<a style="color:#fff" href="contact.html"> En savoir plus</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

<!-- Pricing -->
        <section id="pricing" class="section-1 odd plans featured">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 class="super effect-static-text">Que comprennent les tests d’intrusions ?</h2>
                        <p class="text-max-800">Choisissez la formule In-Scope idéale pour ce dont vous avez besoin. Nous travaillons avec des prix abordables pour tous les types de projet.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div class="card">
                            <i class="icon icon-handbag"></i>
                            <h4>Jusqu'à 5 IPs</h4>
							<p style="font-weight: normal;">Cloud, Infra, Base de données, WIFI IEEE 802.11 ...</p>
                            <span class="price"><i>€</i>1500</span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>XSS (Cross-Site Scripting) </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Falsification de requête intersite (CSRF)</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Accès non autorisés de données entre locataires</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Références d'objet direct non sécurisées</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Vulnérabilités d'injection et d'authentification</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Exécution de code côté serveur</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Escalade de privilèges</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Mauvaise configuration de sécurité significative (si cette dernière pas causée par l'utilisateur).</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Répertoire Traversal</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Divulgation d'information</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Redirections ouvertes</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                            </ul>
                            <a href="contact.html" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOISIR</a>
                        </div>
                    </div>
<div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div class="card">
                            <i class="icon icon-handbag"></i>
                            <h4>Jusqu'à 25 IPs</h4>
							<p style="font-weight: normal;">Cloud, Infra, Base de données, WIFI IEEE 802.11 ...</p>
                            <span class="price"><i>€</i>2500</span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>XSS (Cross-Site Scripting) </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Falsification de requête intersite (CSRF)</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Accès non autorisés de données entre locataires</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Références d'objet direct non sécurisées</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Vulnérabilités d'injection et d'authentification</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Exécution de code côté serveur</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Escalade de privilèges</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Mauvaise configuration de sécurité significative (si cette dernière pas causée par l'utilisateur).</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Répertoire Traversal</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Divulgation d'information</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Redirections ouvertes</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                            </ul>
                            <a href="contact.html" class="btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOISIR</a>
                        </div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div class="card">
                            <i class="icon icon-handbag"></i>
                            <h4>Jusqu'à 100 IPs </h4>
							<p style="font-weight: normal;">Datacenter, Client lourd, Base de données, WIFI IEEE 802.11 ...</p>
                            <span class="price"><i>€</i>4000</span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>XSS (Cross-Site Scripting) </span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Falsification de requête intersite (CSRF)</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Accès non autorisés de données entre locataires</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Références d'objet direct non sécurisées</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Vulnérabilités d'injection et d'authentification</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Exécution de code côté serveur</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Escalade de privilèges</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Mauvaise configuration de sécurité significative (si cette dernière pas causée par l'utilisateur).</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Répertoire Traversal</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Divulgation d'information</span>
                                    <i class="icon-min m-0 icon-check text-right"></i>
                                </li>
								<li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Redirections ouvertes</span>
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
						<h2 class="titre-modale super effect-static-text" style="">AUDITEUR À TOULOUSE</h2>
					</header>
					<div class="container container1">
						<p class="p-modale">Dark Moon est un éditeur de logiciel toulousain et un prestataire informatique proposant des services de développement d'application, de création web, de cybersécurité et des services d'administration systèmes & réseaux & DBA.</p>
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
                        <a href="contact.html" style=" color:#1E2334; background-image: linear-gradient(45deg, #7697FF 25%, #FF83FD 65%)" data-aos="zoom-out-up" data-aos-delay="1200" class=" ml-auto mr-auto mr-md-0 mt-4 mt-sm-0 btn primary-button"><i class="icon-rocket"></i>DEVIS GRATUIT</a>
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

        <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
        <script src="../www.google.com/recaptcha/api9516.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->

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


        <!-- #endregion Global ========================= -->

    </body>

</html>
