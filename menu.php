<?php

	function generate_menu(){
		/*echo "<h1>Menu</h1>";*/

		$config  = file_get_contents("js/json/config.json");
		$config  = json_decode($config);

		$result  = "<div class='container'>";
		$result .= "<div class='col-md-12'>";
		$result .= "<div class='top-nav'>";

		foreach ($config->menu as $key => $val) {
			$result .= "<div class='menu-item text-center'>";
			$result .= "<a href='" . $val->href . "'> " . $val->name . "</a>";
			$result .= "</div>";
		}
		$result .= "</div></div>";
		$result .= "<div class='col-md-12'><hr class=\"top-nav\"></div></div>";
		echo $result;
	}

?>