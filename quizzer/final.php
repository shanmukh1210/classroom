<?php session_start() ; ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>QUIZZER</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<header>
			<div class="container">
				<h1>QUIZROOM <h1>
			</div>
		</header>
			<main>
				<div class ="container">
					<h2> You're Done!! <h2>
						<p> You have completed the test </p>
						<p>Final Score : <?php echo $_SESSION['score']; ?> </p>
						<?php session_unset(); ?>
						<a href="question.php?n=1" class="start">Take Again </a>
				
					
				</div
			</main>
			<footer>
				<div class="container">
				 Copyright &copy; 2017 QUIZZER
				 </div>
			</footer>
	</body>
</html>