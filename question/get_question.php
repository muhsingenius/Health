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
			$question_time = $row_question['time'];
			$question_details = $row_question['question_details'];
			$question_views = $row_question['views'];
			$question_following = $row_question['following'];


			echo "

                <h2>Feeds</h2>
                <hr>

                <div class='question-header'> 
                	$user <span>  </span> $question_date <span> </span> $question_time
                 </div>

                 <p style='font-weight:bold; margin-top:10px; margin-bottom:10px'> $question</p>

                 	<p style='margin-top:10px; margin-bottom:10px'>$question_details 
                 	<a href='view_question.php'>Read...</a>
                 	</p>

                 <button class='btn btn-default btn-small' type='button'>
 					 Views <span class='badge'>$question_views</span>
				 </button>
				 <button class='btn btn-default btn-small' type='button'>
 					 Follow <span class='badge'>$question_following</span>
				 </button>
                 <hr>

				";
		}
	}



?>