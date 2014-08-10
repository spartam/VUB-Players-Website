<?php
	function display_logo(){
		$config = file_get_contents("js/json/config.json");
		$config	= json_decode($config);

		$logo 	= $config->logo;

		echo "<img src=\"" . $logo . "\"class=\"img-responsive logo\">";
	}
?>