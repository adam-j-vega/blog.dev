<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1>Guess</h1>
		<p><?= $guess ?></p>
		<h1>Random Number</h1>
		<p><?= $randVar ?></p>
		<? if($guess == $randVar): ?>
			<h1>You guessed the number!</h1>
		<? endif ?>

	</body>
</html>