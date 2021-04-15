<?php 
	$model = Model('our_work_detal', $param);
	foreach ($model["images"] as $image) {
		$view .= Render('pages/our_work/our_work_detal_item', $image);
	}
	$view = Render('pages/our_work/our_work_detal', $view);
?>