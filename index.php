
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>URL Shortener</title>

	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<header>
		<h1> Shorten long URL</h1>
	</header>
	<main>
		<section class="form">
			<form action="/add/index.php" method="post">
				<input type="text" name="long_url" id="long_url" placeholder="e.g. https://example.com" />
				<input type="submit" value="SHORTEN" />
			</form>
		</section>

		
	</main>
</body>
</html>