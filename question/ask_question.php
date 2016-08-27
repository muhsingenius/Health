<?php
	
?>


<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/home.css" rel="stylesheet">	
	</head>

	<body class="ask-question" style="width:50%; margin: 0 auto; ">


	<nav class="nav">

    <div class="logo-area">
        <a href="index.php"><span class="glyphicon glyphicon-heart">H</span>ealth<a/>
     </div>
        <div class="question-area"> 
            <form class="form-inline" action="#" name="search" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                        
                        <input type="text" class="form-control" placeholder="Enter Search Here...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Search</button>
                        </span>
                    </div>
                </div>
                    
            </form>
        </div>

        <div class="nav-elements">
            <ul>
                
                <li><a href="#"><span class="glyphicon glyphicon-tasks"></span> Feeds</a></li>
                <!--<li><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ask-question-modal"><span class="glyphicon glyphicon-question-sign"></span> Ask Question</button></li>-->
                <li><a href="question/ask_question.php"><span class="glyphicon glyphicon-question-sign"></span> Ask Question</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Notivications</a></li>
             
            </ul>

        </div>

        <div class="profile-area">
            <a href="user/register.php">Register</span></a>
            <a href="user/login.php">Login</span></a>
        </div>
    </nav><

						<h2>Add Question</h2>
						<hr>

					<form name="ask-question-form" action="ask_question.php" role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question</label>
                            <textarea type="text" class="form-control" id="question" name="question"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Details</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="details"></textarea>
                        </div>
                        <div class="form-group">
                            <select>
                                <option>Select Category</option>
                                <option>Marternal Health</option>
                                <option>Nutrition $ Fitness</option>
                                <option>Reproduction Health</option>
                                <option>Family Planning</option>
                                <option>First Aid Medicine</option>
                                <option>Marternal Health</option>
                            </select>

                            
                       
                    </form>



				
			
		</form>	

	</body>
</html>