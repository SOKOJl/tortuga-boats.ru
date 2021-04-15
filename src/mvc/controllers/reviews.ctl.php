<?
	$model = Model('reviews');
	foreach ($model["sections"] as $section) {
		$widget = '<div class="rating-result">';
		for ($i = 1; $i <= $section["rating"]; $i++) {
		    $widget .= '<span class="active"></span>';
		}
		for ($i = 1; $i <= 5 - $section["rating"]; $i++) {
		    $widget .= '<span></span> ';
		}
		$widget .= '</div>';
		$section += array("widget" => $widget);
		$view .= Render('pages/reviews/reviews_sections', $section);
	}
	$view .= Render('pages/reviews/reviews_add');
?>