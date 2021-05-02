<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php $meta = json_decode(file_get_contents("./constants/meta.json"), true)["dark-moon-cygwin-windows-portable"]; ?>
		<title>Dark Moon Cygwin Portable - L’univers « Linux » Portable sous Windows !</title>
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
									<h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Dark Moon Cygwin GNU Portable.</h1>
									<p data-aos="zoom-out-up" data-aos-delay="800" class="p-police-size description">Dark Moon Cygwin Portable. L’univers « Linux » Portable sous Windows ! Dark Moon est un logiciel open source développé par Mehdi Boutayeb Ferkatou.</p>
									<a href="https://www.microsoft.com/store/apps/9PJ369WKBV7F" class=" ml-auto mr-auto ml-md-0 mt-4 btn primary-button police-btn">
										TÉLÉCHARGER
										<i class="material-icons" style="font-size:25px; margin-left: 10px; width: 0.5em;">download</i>
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
                        <h2 class="super effect-static-text">Fonctionnalités</h2>
                        <p class="text-max-800">Présentation des principales fonctionnalités de Dark Moon Cygwin portable.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-globe color-item"></i>
                            <h4>Portable</h4>
                            <p>Utilisation de Cygwin Portable depuis une clé USB sur plusieurs machines Windows.<a style="color:#fff" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-basket"></i>
                            <h4>XFCE 4</h4>
                            <p>Serveur Xorg packagé avec XFCE 4 pour Windows 10 et Server 2016/19.<a style="color:#fff" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-screen-smartphone"></i>
                            <h4>Cyg-apt</h4>
                            <p>Téléchargement de packages (Apache, Mysql, Ruby...) depuis la ligne de commande.<a style="color:#fff" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-layers"></i>
                            <h4>GCC Compiler</h4>
                            <p>GCC G++, Objective-C, Python, Perl, Ada Compiler, Fortan..pré-installés.<a style="color:#fff" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Rsync</h4>
                            <p>OpenSSL, Wget, Git, pwd... du monde Linux pré-installées.<a style="color:#fff" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 margin-item">
                        <div class="card featured">
                            <i class="icon icon-bulb color-item"></i>
                            <h4>Support technique</h4>
                            <p>Contactez-nous depuis le formulaire, Github, Twitter... pour toutes questions.<a style="color:#fff" href="contact.html"> En savoir plus</a></p>
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
						<h2 class="titre-modale super effect-static-text" style="">Pourquoi utiliser Dark Moon ?</h2>
					</header>
					<div class="container container1">
						<p class="p-modale">Si vous voulez travailler intégralement sous Windows & Windows Server avec un environnement très verrouillé excluant WSL et la virtualisation, en utilisant des scripts bash pour piloter / automatiser les tâches, avec les outils d’un environnement de type Linux portables depuis votre PC ou une clé USB, Dark Moon est un excellent outil.</p>
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
                        <a  >
                            <i class=""></i>
                            <div class=""></div>
                            <img class="appear floating" src="assets/images/8.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class= "height-h2-line-1 appear h-phoneOnly super effect-static-text">Bash Cygwin Portable.</h2>
                                <p class="appear p-phoneOnly">Dark Moon Cygwin exécute un terminal Bash sous Windows ainsi qu'une suite d'outils de la famille GNU avec Cygwin.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Cygwin Portable</h4>
                                        <p class="appear p-phoneOnly">Dark Moon est <u class="bold-mot">portable</u>, il ne nécessite pas d’installation préalable, il est autonome et ne dépend pas de composants externes, et n'entraînera pas de modifications permanentes du système.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
									</div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Type "Linux Portable"</h4>
                                        <p class="appear p-phoneOnly">Dark Moon imite de nombreux petits détails d'un système d'exploitation de type <u class="bold-mot">Linux</u> et est enregistré par le standard POSIX, ce qui facilite le portage des applications Unix vers Windows.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
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
                                <h2 class="height-h2-line-2 appear h-phoneOnly super effect-static-text">Serveur et Microservices Cygwin.</h2>
                                <p class="appear p-phoneOnly">Serveurs type Cygwin/Linux Portable et Micro Service avec Dark Moon Cygwin sur Windows.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Serveur Cygwin Portable</h4>
                                        <p class="appear p-phoneOnly">Les serveurs tels que Apache, MySQL, FTP, Python et leurs fichiers de configurations reposent sur celui des environnement de type Linux.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Serveur type Linux Portable</h4>
                                        <p class="appear p-phoneOnly">Ces applications serveurs sont plus proches d'Unix que de Windows. Cela permet d’exécuter vos services type Linux à tout moment sur différentes machines Windows sans installation et configuration préalable.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
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
                            <img class="appear floating" src="assets/images/5.svg" class="fit-image" alt="dark moon">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="height-h2-line-2 appear h-phoneOnly super effect-static-text">Quels cas d’usage de Dark Moon Cygwin ?</h2>
                                <p class="appear p-phoneOnly">Développement cross-platform, environnement de test, microservices, bash portable, sécurité des réseaux.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Mobilité Cygwin</h4>
                                        <p class="appear p-phoneOnly">Les services HTTP, SSH , FTP, LDAP... passent de manière transparente de <u class="bold-mot">Linux</u> à Windows avec la mobilité et la légèreté d’une application portable.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Configuration Cross-platform</h4>
                                        <p class="appear p-phoneOnly">Il est possible de développer des applications sous Windows à destination de Linux en copiant simplement la configuration d'Apache entière (Httpd.conf), Perl (mod_perl), PHP (mod_php) ou Python (mod_snake) simplement.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
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
                                <h2 class="height-h2-line-2 appear h-phoneOnly super effect-static-text">Développement d'application Linux portable.</h2>
                                <p class="appear p-phoneOnly">Dark Moon permet de monter un environnement d’exécution <u class="bold-mot">Cygwin portable</u> depuis votre PC ou une clé USB.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-trophy"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Cross-platform</h4>
                                        <p class="appear p-phoneOnly">Programmation Ruby, Perl, Python, Fortran, C/C++, sur <u class="bold-mot">Dark Moon Cygwin</u>, exécutable sur Windows et Linux grâce aux librairies POSIX rendant ces programmes autonome et portable.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Compilation et interpréteur Cygwin</h4>
                                        <p class="appear p-phoneOnly">Codes écrits pour Linux sur Windows seront compilés dans <u class="bold-mot">Cygwin sur Dark Moon</u> sans presque aucun problème. Ces problèmes peuvent être résolus principalement en utilisant des définitions de préprocesseur.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="centering col-12 col-md-6">
                        <a >
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
                                <h2 class="height-h2-line-2 appear h-phoneOnly super effect-static-text">Utilitaire réseau & sécurité.</h2>
                                <p class="appear p-phoneOnly">Développement cross-platform, environement de tests, microservices, bash portable, sécurité des réseaux.</p>
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
                                        <p class="appear p-phoneOnly">Pour ceux qui sont obligés d'utiliser <u class="bold-mot">Windows</u> et qui veulent utiliser GCC, Nmap, SQLmap, Rsync, OpenSSL, Apache… Les meilleurs outils de réseau et de <u class="bold-mot">sécurité du monde Linux</u>, ont été portés sur Cygwin.<a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-diamond"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4 class="appear h-phoneOnly">Recompilation sous Windows</h4>
                                        <p class="appear p-phoneOnly">Possibilité d'exécuter de nombreux programmes du monde Linux. l'exemple de code d'exploitation (Pentest) est souvent écrit pour être compilé sous Linux à l'aide de GCC. <a class="ensavoirplus" href="https://dark-moon-x.github.io/DarkMoon/"> En savoir plus</a></p>
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
                            <h2>Avis utilisateurs</h2>
                            <p class="text-max-800">Nous avons séléctionnés un échantillon d'avis en provenance du tableau de bord Partenaire de Microsoft inhérente à la UWP de Dark Moon.</p>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-center text-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/hervé.svg" alt="Adams Baker" class="person">
                                        <h4>Chris • USA</h4>
                                        <p>Linux sur mon bureau après plus de 20 ans de développement et de codage !!</p>
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
                                        <h4>James • USA</h4>
                                        <p>J'adore, ceci est litéralement un Linux. J'ai pensé que c'était un cmd stupide.</p>
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
                                        <h4>Owen • USA</h4>
                                        <p>Meilleur sous-système! vous n’avez pas besoin de droits d’administrateur pour l'utiliser. </p>
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
                                        <h4>Jason • USA</h4>
                                        <p>Très impressionnant, un combo unique de WSL et Windows.</p>
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
                                        <img src="assets/images/joan.svg" alt="Karen Usman" class="person">
                                        <h4>海东 • Chine</h4>
                                        <p>Excellente machine "Linux", Elle m'est utile quotidiennement !</p>
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
                        <h2 class="super effect-static-text">Nous proposons des services d'audit !</h2>
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


		        <!-- Get -->
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
