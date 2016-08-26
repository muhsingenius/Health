<?php

$connection = mysqli_connect("localhost", "root", "N@$@r@", "health_db");
	
	if (!$connection){
		die('could not connect: ' . mysqli_error());
	}
?>