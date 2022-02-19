<?php

	$conn = mysqli_connect("localhost","root","","tsf_bank","3307");

	if (!$conn) {
		die("Could not connect to the database due to the following error: --> ".mysqli_connect_error());
	}

?>