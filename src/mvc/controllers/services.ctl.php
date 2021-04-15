<?php 
	$model = Model('services');
	foreach ($model["sections"] as $section) {
		$view .= Render('pages/services', $section);
	}
?>