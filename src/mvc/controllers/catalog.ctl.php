<?php 
	$model = Model('catalog');
	foreach ($model["categories"] as $category) {
		$view .= Render('pages/catalog/catalog_item', $category);
	}
	$view = Render('pages/catalog/catalog', $view);
?>