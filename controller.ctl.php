<?php 
	if(in_array($page, array('',
							'main',
							'catalog',
							'services',
							'our_work',
							'our_life',
							'reviews',
							'about',
							'contacts'))) 
	{
		$tmp = $page;
	}
	else {
		$tmp = 'not_found';  
	}
	// Задаем все необходимые переменные
	if ($tmp == 'main') {
		$controller = Controller('main');
		$html = Render('main',$controller);
	}
	else {
		switch ($tmp) {
			case 'catalog':
				$controller = Controller('catalog');
				break;
			case 'services':
				$controller = Controller('services');
				break;
			case 'our_work':
				$controller = Controller('our_work');
				break;
			case 'our_life':
				$controller = Controller('our_life');
				break;
			case 'reviews':
				$controller = Controller('reviews');
				break;
			case 'about':
				$controller = Controller('about');
				break;
			case 'contacts':
				$controller = Controller('contacts');
				break;
			case 'not_found':
				$controller = Controller('not_found');
				break;
		}
		$html = Render('template', $controller);
	}
	
	print($html);
?>