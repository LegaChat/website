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
	}

	/**
	 * END
	 */
