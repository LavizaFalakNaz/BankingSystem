<?php

	$conn = mysqli_connect('localhost','root','YOUR-PASSWORD','banking');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>