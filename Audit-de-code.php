<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php $meta = json_decode(file_get_contents("./constants/meta.json"), true)["audit-de-code-toulouse"]; ?>
		<title>Dark Moon - Audit de code - Entreprise de Cybersécurité à Toulouse</title>
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
									<h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Audit de code source.</h1>
									<p data-aos="zoom-out-up" data-aos-delay="800" class="p-police-size description">Entreprise de sécurité informatique & cybersécurité à Toulouse, service d'audit de code d'application, testeur de site web.</p>
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
                        <p class="text-max-800">Validez la politique de sécurité de votre organisation avec les services de Pentests suivants à Toulouse :</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-globe color-item"></i>
                            <h4>Audit d'Application Web</h4>
                            <p>Les Web App sont complexes, ouvrant des possibilités d'attaques.<a style="color:#fff" href="Pentest-web.php"> En savoir plus</a></p>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-basket"></i>
                            <h4>Test d'intrusion PCI</h4>
                            <p>Destiné à valider la protection des données sensibles des cartes bancaires. <a style="color:#fff" href="Pentest-PCI-DSS.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Test d'Intrusion Réseau</h4>
                            <p>Test d'analyses IPS, problèmes de routage, analyse des ports de FTR MySQL, SSH, etc...<a style="color:#fff" href="Audit-de-sécurité-informatique.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-layers"></i>
                            <h4>Audit de code</h4>
                            <p>Réalisation d'analyse et d'audit de code, d'intégrité du package, des protocoles ...<a style="color:#fff" href="Audit-de-code.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Audit App Mobile</h4>
                            <p>Nous réalisons des tests des sécurités EndPoint, la sécurité et l'architecture ...<a style="color:#fff" href="Pentest-d’application-mobile.php"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-bulb color-item"></i>
                            <h4>Solution de sécurité</h4>
                            <p>Développement et intégration de logiciel de sécurité informatique sur mesure.<a style="color:#fff" href="Entreprise-de-développement-web.php"> En savoir plus</a></p>
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
						<h2 class="titre-modale super effect-static-text" style="">Expert en audit de code.</h2>
					</header>
					<div class="container container1">
						<p class="p-modale">Nous sommes animés par la créativité. Nous réalisons des tests audits de codes complets pour vous aider à obtenir de meilleurs résultats et à vous consolider sur le marché.</p>
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
                                <h2 class="appear h-phoneOnly super effect-static-text">De quoi se compose un audit de code ?</h2>
                                <p class="appear p-phoneOnly"><u class="bold-mot">OWASP</u> est utilisé pour démasquer avec précision les vulnérabilités cachées dans le code. Les autres vulnérabilités ne peuvent être détectées que par des <u class="bold-mot">tests de pénétration.</u></p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Audit de code source.</h4>
                                        <p class="appear p-phoneOnly">L’audit de code permet de déterminer le <u class="bold-mot">niveau de sécurité du code source</u> de l'application et de répertorier toutes les violations possibles dans les points d'accès et les applications spécifiques.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Méthode d’audit de code SAST et DAST.</h4>
                                        <p class="appear p-phoneOnly">Pour l'examen du code source, les solutions les plus importantes sont les méthodes <u class="bold-mot">SAST</u> (boîte blanche) et <u class="bold-mot">DAST</u> (boîte noire), qui peuvent être complétées par d'autres méthodes telles que les tests d'intrusion.  Nous utilisons le SAST (White Box Testing). <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                <div class="row">
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="appear h-phoneOnly super effect-static-text">Pourquoi faire un audit de code ?</h2>
                                <p class="appear p-phoneOnly">Un <u class="bold-mot">test d’intrusion</u> est la meilleure méthode pour mettre en évidence les failles de sécurité de votre système informatique.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Failles de sécurités</h4>
                                        <p class="appear p-phoneOnly">Lors du développement d'applications, nous devons être prudents et vérifier les <u class="bold-mot">failles de sécurité.</u> Ce n'est que de cette façon que nous pourrons prévenir certains risques, et sa vulnérabilité à l'avenir.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Contexte d’audit de code</h4>
                                        <p class="appear p-phoneOnly">Préliminairement à la <u class="bold-mot">revue du code source</u>, il est important de comprendre le contexte et les principales caractéristiques du projet.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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


		<section id="video" class="section-1 highlights image-left">
            <div class="container">
                <div class="row">
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
                                <h2 class="appear h-phoneOnly super effect-static-text">Révision de code.</h2>
                                <p class="appear p-phoneOnly">Le code source est au cœur de chaque projet logiciel, il est donc très important de trouver toutes les erreurs liées à la <u class="bold-mot">sécurité</u> et de les <u class="bold-mot">corriger</u> avant que les pirates ne les repèrent.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Renforcez vos défenses</h4>
                                        <p class="appear p-phoneOnly">En renforçant les <u class="bold-mot">défenses</u> et respectant les <u class="bold-mot">normes de sécurité</u> les plus élevées, la confiance des utilisateurs finaux et la réputation de l’entreprise sont améliorées. <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Répertoriez les failles</h4>
                                        <p class="appear p-phoneOnly">Clarifier les <u class="bold-mot">violations</u> que les <u class="bold-mot">attaquants</u> peuvent utiliser pour accéder à votre environnement et à vos systèmes et réduire le risque de sanctions de conformité. <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                                <h2 class="appear h-phoneOnly super effect-static-text">Audit de code professionnel.</h2>
                                <p class="appear p-phoneOnly">Dark Moon offre une garantie de résultat. Nous suivons les méthodes de travail suivant les recommandations <u class="bold-mot">ISO 9001</u> et la méthode du meilleur compromis.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Réalisation d’audit sur mesure par des expert en sécurité logiciel</h4>
                                        <p class="appear p-phoneOnly">Ajustez les règles de test et de participation pour découvrir des <u class="bold-mot">vulnérabilités uniques</u>. Nous vous fournisons des services flexibles et des tarifs appropriés.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Audit multi-couche défensif et éthique logiciel</h4>
                                        <p class="appear p-phoneOnly">Des tests d’intrusion à plusieurs niveaux de gestion, la <u class="bold-mot">gestion des risques</u> et la défense de l'audit interne sont effectuées pour s'assurer que les <u class="bold-mot">mesures de contrôle de la sécurité du réseau</u> sont correctement conçues.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="centering col-12 col-md-6">
                        <a>
                            <i class=""></i>
                            <div class=""></div>
                            <img class="floating" src="assets/images/5.svg" class="fit-image" alt="dark moon">
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
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/1.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="appear h-phoneOnly super effect-static-text">Méthodologie d’attaque.</h2>
                                <p class="appear p-phoneOnly">Dark Moon, entreprise de sécurité informatique, spécialisé en <u class="bold-mot">test d'intrusion logicielle</u> à Toulouse.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
							    </div>
								<div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Injection XSS</h4>
                                        <p class="appear p-phoneOnly">Injection, de <u class="bold-mot">scripts malveillants</u> injectés dans des sites Web victimes. Un attaquant injecte du HTML contenant du <u class="bold-mot">code JavaScript</u> en règle générale côté client dans l'interface utilisateur d'une application Web. <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Ethical hacking</h4>
                                        <p class="appear p-phoneOnly">Le <u class="bold-mot">code source</u> est au cœur de chaque projet logiciel, il est donc très important de trouver toutes les <u class="bold-mot">erreurs liées à la sécurité</u> et de les corriger avant que les pirates ne les repèrent. <a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Injection SQL</h4>
                                        <p class="appear p-phoneOnly">Les hackers insèrent du <u class="bold-mot">code SQL</u> dans une requête de base de données de l’application pour <u class="bold-mot">prendre le contrôle</u> complet de votre base de données.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                                <h2 class="appear h-phoneOnly super effect-static-text">Faille de sécurité.</h2>
                                <p class="appear p-phoneOnly">Il est primordial de comprendre les principes importants de <u class="bold-mot">codage sécurisé</u> et comment les appliquer, notamment le test des principes de codage sécurisé décrits dans les directives de codage sécurisé de <u class="bold-mot">l'OWASP.</u></p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Comment fonctionne un audit de code ?</h4>
                                        <p class="appear p-phoneOnly">Afin d'effectuer pleinement les <u class="bold-mot">révisions du code source</u>, notre équipe travaille en étroite collaboration avec les développeurs de l’application auditée.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Revue de sécurité.</h4>
                                        <p class="appear p-phoneOnly">Notre équipe suit les <u class="bold-mot">recommandations de l'OWASP</u>, tout comme ce que nous faisons dans les réseaux sans fil, les<u class="bold-mot"> applications Web et mobiles</u>, mais applicables à ce type d'analyse.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
                                    </div>
                                </div>
								<div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Rapport d'audit</h4>
                                        <p class="appear p-phoneOnly">Préparation d'un <u class="bold-mot">rapport final</u> contenant des informations détaillées sur tous les tests et résultats trouvés lors de <u class="bold-mot">l'audit de sécurité</u> du code source avec toutes les informations nécessaires pour renforcer votre politique de sécurité.<a class="ensavoirplus" href="contact.html"> En savoir plus</a></p>
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
                            <p>Nos équipes de formateurs vous cadrent pour l'exploitation de votre Infrastructure.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
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
                            <a href="contact.html" class=" btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOISIR</a>
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
						<h2 class="titre-modale super effect-static-text" style="">AUDITEUR TOULOUSAIN</h2>
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
