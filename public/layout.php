<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<title>{{ title in layout }}</title>
</head>
<body>
	<header>
		<nav>
			<a href="https://phpsql.engine/page/all">all</a>
			<a href="https://phpsql.engine/page/my-first-page">first-page</a>
			<a href="https://phpsql.engine/page/my-second-page">second-page</a>
			<a href="https://phpsql.engine/page/my-third-page">third-page</a>
		</nav>
	</header>
	<main>
		{{ content in layout }}
	</main>
	<footer>
		footer in layout
	</footer>
</body>
</html>