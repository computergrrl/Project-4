<?php include('inc/Game.php');
			include('inc/Phrase.php');
			?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Phrase Hunter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>

	<body>
		<?php
		$game = new Game();
		$phrase = new Phrase();
		?>
		<div class="main-container">
			<h2 class="header">Phrase Hunter</h2>
            <form action="play.php">
                <input id="btn__reset" type="submit" value="Start Game" />
            </form>
		</div>

	</body>
</html>