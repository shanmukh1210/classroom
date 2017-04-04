<?php include 'database.php' ; ?>
<?php session_start(); ?>
<?php
//check to see if score is set_error_handler

	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0 ;
	}
	//if(!isset($score))
	//{
		//$score=0;
	//}
	


	if($_POST){
	$number = $_POST['number'] ;
	$selected_choice = $_POST['choice'];
	$next = $number + 1;
	
	// getting total questions
	
	$query  = "SELECT * FROM questions ";
	$result = $mysqli->query($query) or die($mysqli->error._LINE);
	$total = $result->num_rows;
	
	
	/* getting correct choice */ 
	$query = "SELECT * FROM choices
				WHERE question_number = $number AND is_correct = 1";
	
	//get result
	$result = $mysqli->query($query) or die($mysqli->error._LINE_);
	
	$row = $result->fetch_assoc();
	
	//set correct choice
	$correct_choice = $row['id'];
	
	
	
	if($correct_choice == $selected_choice) {
		 $_SESSION['score']=$_SESSION['score']+1;
		//$score=$score+1;
	}
	//else
	//{
		//$_SESSION['score']=5;
	//}
		if($number == $total){
		    //echo $score;
			header("Location: final.php");
			exit();
		}else
		{
			header("Location: question.php?n=".$next);
		}	
}
?>