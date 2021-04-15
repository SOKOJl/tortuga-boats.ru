<?php 
	$model = Model('main');
	$view = Render('pages/main/main_first_window',$model);
	foreach ($model["sections"] as $section) {
		$view .= Render('pages/main/main_section',$section);
	}
?>