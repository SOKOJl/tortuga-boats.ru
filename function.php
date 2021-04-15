<?php
	function Url ($url) {
		global $DIR_APPLICATION;
		$url =  $DIR_APPLICATION . $url;
		return($url);
	}

	function Render($tpl, $var = '') {
		global $path_to_tpl, $path_to_img, $server_name;
		ob_start();
		include($path_to_tpl .$tpl . '.tpl.php');
		$view = ob_get_contents();
		ob_end_clean();
		return $view;
	}

	function Model($mdl, $param = '') {
		global $path_to_mdl;
		include($path_to_mdl . $mdl . '.mdl.php');
		return $model;
	}

	function Controller($ctl, $param = '') {
		global $path_to_ctl;
		include($path_to_ctl . $ctl . '.ctl.php');
		if (isset($controller)) {
			$var = array(
				"model" => $controller["model"],
				"view" => $controller["view"],
			);
		}
		else {
			$var = array(
				"model" => $model,
				"view" => $view,
			);
		}
		
		return $var;
	}
?>