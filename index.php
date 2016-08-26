<?php //include("includes/header.php"); ?>



<?php
     include 'question/get_question.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
        <?php //include("navigation.php"); ?>
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
                <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Questions</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Notivications</a></li>
             
            </ul>

        </div>

        <div class="profile-area">
            <a href="user/register.php">Register</span></a>
            <a href="user/login.php">Login</span></a>
        </div>
    </nav>
    <!-- Navigation ends here -->


    <!-- Page Content -->
    
    <div class="container" id="main-content-area">

            
            <div class="main-content">
                 <?php
                    get_question();
                ?>

            </div>
           
               


                <div class="side-content">
                <div class="row">
                    <div class="col-md-8"><p>Categories</p></div>
                       <div class="col-md-4"><p>Edit</p></div>
                    
                </div>

                <div id="menu">
                    <ul>
                        <li><a href="#1" title="Maternal Health"><span class="glyphicon glyphicon-leaf"> </span> Maternal Health</a></li>
                        <li><a href="#2" title="Fitness and Nutrition"><span class="glyphicon glyphicon-cog"> </span> Fitness and Nutrition</a></li>
                        <li><a href="#3" title="Reproduction Health"><span class="glyphicon glyphicon-grain"> </span>Reproduction Health</a></li>
                        <li><a href="#4" title="Family Planning"><span class="glyphicon glyphicon-heart-empty"> </span> Family Planning</a></li>
                        <li><a href="#5" title="Family First Aid"><span class="glyphicon glyphicon-plus-sign"> </span> Family First Aid</a></li>
                        <li><a href="#6" title="Nutrition"><span class="glyphicon glyphicon-eye-open"> </span> Nutrition</a></li>
                    </ul>
                </div>
            </div>
           
        </div>

            <!-- Blog Entries Column -->
        

        <!--    FOOTER  -->
        <?php //include("includes/footer.php"); ?>
        
        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Health 2016</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

