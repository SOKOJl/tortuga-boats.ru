<?php 
	$uderpage = $_SERVER['REQUEST_URI'];
	$uderpage = explode('/', $uderpage);
	$uderpage = $uderpage[2];

	$model = Model('our_work');
	if ($uderpage == '') {
		foreach ($model["sections"] as $section) {
			$view .= Render('pages/our_work/our_work', $section);
		}

	}
	else {
		foreach ($model["sections"] as $section) {
			if ($uderpage == $section["link"]) {
				//Найдена подстраница
				$controller = Controller('our_work_detal', $uderpage);
			}
			else {
				$controller = Controller('not_found');
			}
		}
	}
?>