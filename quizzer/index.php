<?php include 'database.php'; ?>
<?php

$query = "SELECT * FROM questions" ;

$results = $mysqli->query($query) or die($mysqli->error._LINE_);

$total = $results->num_rows;

$score=0;
?>
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
					<h2>Test your knowledge</h2>
					<p> This is a mcq's quiz </p>
					<ul>
						<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
						<li><strong>Type: </strong>Multiple Choice </li>
						<li><strong> Estimated Time: </strong> <?php echo $total * 1; ?> Minutes </li>
					</ul>
					<a href="question.php?n=1" class="start">Start Quiz </a> 
				</div
			</main>
			<footer>
				<div class="container">
				 Copyright &copy; 2017 QUIZZER
				 </div>
			</footer>
	</body>
</html>