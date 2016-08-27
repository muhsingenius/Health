[<?php
	include 'db.php';

	function get_question() {

		global $connection;

		$get_question = mysqli_query($connection, "SELECT * FROM question");

		while ($row_question = mysqli_fetch_array($get_question)){

			$id = $row_question['id'];
			$question = $row_question['question'];
			$user = $row_question['user'];
			$question_date = $row_question['date'];
			
			$question_details = $row_question['question_details'];
			
			


			echo "

                

                <div class='question-header'> 
                	$user <span>  </span> $question_date <span> </span> 
                 </div>

                 <p style='font-weight:bold; margin-top:10px; margin-bottom:10px'> $question</p>

                 	<p style='margin-top:10px; margin-bottom:10px'>$question_details 
                 	<a href='view_question.php'>Read...</a>
                 	</p>

                 <a href='answer-question.php' class='btn btn-default btn-small' type='button'>
 					 Answer<span class='badge'></span>
				 </a>
				 <button class='btn btn-default btn-small' type='button'>
 					 Answers <span class='badge'>5</span>
				 </button>
                 <hr>

				";
		}
	}



?>