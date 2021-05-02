<?php
	/**
	 * Project  : website
	 * Date     : 3/03/2021
	 * Autor    : CARDINAL Florian
	 * Nom      : builder.php
	 * Location : /libs/
	 */

	abstract class Builder {
		// sort html cards content for services div from array data
		public static function services(array $data): string {
			$html = "";

			for($i = 0; $i < count($data); $i++) {
				$html .= "<div class=\"col-12 col-md-6 col-lg-4 margin-item\">
					<div class=\"card featured\">
						<i class=\"icon icon-{$data[$i]['icon']} color-item\"></i>
						<h4>{$data[$i]['h4']}</h4>
						<p>{$data[$i]['p']}. <a style=\"color:#fff\" href=\"{$data[$i]['a']}\">En savoir plus</a></p>
					</div>
				</div>";
			}

			return($html);
		}

		// sort html cards content for feature div from array data
		public static function feature(array $data): string {
			$html = "";

			for($i = 0; $i < count($data); $i++) {
				$html .= "<div class=\"col-12 col-md-6 col-lg-4 margin-item\">
					<div class=\"card no-hover\">
						<i class=\"icon icon-{$data[$i]['icon']} color-item\"></i>
						<h4>{$data[$i]['h4']}</h4>
						<p>{$data[$i]['p']}. <a style=\"color:#fff\" href=\"{$data[$i]['a']}\">En savoir plus</a></p>
					</div>
				</div>";
			}

			return($html);
		}

		// sort html item swiper content for testimonials div from array data
		public static function testimonials(array $data): string {
			$html = "";

			for($i = 0; $i < count($data); $i++) {
				$html .= "<div class=\"swiper-slide slide-center text-center item\">
					<div class=\"box-partenaire row card\">
						<div class=\"col-12\">
							<img class=\"logo-partenaire ibm\" src=\"{$data[$i]['img']['src']}\" height=\"{$data[$i]['img']['h']}px\" width=\"{$data[$i]['img']['w']}px\">
							<p>{$data[$i]['p']}.</p>
						</div>
					</div>
				</div>";
			}

			return($html);
		}

		// sort html item swiper content for team div from array data
		public static function team(array $data): string {
			$html = "";

			for($i = 0; $i < count($data); $i++) {
				$html .= "<div class=\"swiper-slide slide-center text-center item\">
					<div class=\"row card\">
					<div class=\"col-12\">
					<img src=\"{$data[$i]['img']}\" alt=\"{$data[$i]['name']}\" class=\"person\">
					<h4>{$data[$i]['name']}</h4>
					<p>{$data[$i]['p']}</p>
					<ul class=\"navbar-nav social share-list ml-auto\">";

				if(isset($data[$i]['yt'])) {
					$html .= "<li class=\"nav-item\">
							<a rel=\"nofollow\" target=\"_blank\" href=\"{$data[$i]['yt']}\" class=\"nav-link\">
								<i class=\"icon-social-youtube ml-2 mr-2\"></i>
							</a>
						</li>";
				}

				if(isset($data[$i]['fb'])) {
					$html .= "<li class=\"nav-item\">
							<a rel=\"nofollow\" target=\"_blank\" href=\"{$data[$i]['fb']}\" class=\"nav-link\">
								<i class=\"icon-social-facebook ml-2 mr-2\"></i>
							</a>
						</li>";
				}

				if(isset($data[$i]['in'])) {
					$html .= "<li class=\"nav-item\">
							<a rel=\"nofollow\" target=\"_blank\" href=\"{$data[$i]['in']}\" class=\"nav-link\">
								<i class=\"icon-social-linkedin ml-2 mr-2\"></i>
							</a>
						</li>";
				}

				if(isset($data[$i]['tt'])) {
					$html .= "<li class=\"nav-item\">
							<a rel=\"nofollow\" target=\"_blank\" href=\"{$data[$i]['tt']}\" class=\"nav-link\">
								<i class=\"icon-social-twitter ml-2 mr-2\"></i>
							</a>
						</li>";
				}

				$html .= "</ul>
					</div>
					</div>
					</div>";
			}

			return($html);
		}
	}

	/**
	 * END
	 */
