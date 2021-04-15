<!doctype html>
<html lang="en">
	<head>
		<title>Tortuga</title>
		<meta name="description" content="Описание страницы" /> 
		<meta name="keywords" content="Ключевые слова страницы" />

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<? print($server_name) ?>src/css/bootstrap.min.css">
		<link rel="stylesheet" href="<? print($server_name) ?>src/css/mysite.css">
	</head>
	<body>

	<? include 'header.tpl.php'; ?>
	<article>
		<div class="article">
			<div class="container head_page">
				<header>
					<h2><?php print($var["model"]["title_page"]) ?></h2>
				</header>
			</div>
			<? 	print($var["view"]); ?>
		</div>
	</article>
	<? include 'footer.tpl.php'; ?>


		<!-- Bootstrap Bundle with Popper -->
		<script src="<? print(Url('src/js/bootstrap.min.js')) ?>"></script>
	</body>
</html>