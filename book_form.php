<?php

	$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //<link rel="stylesheet" href="css/style.css">


		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$location = $_POST['location'];
		$guests = $_POST['guests'];
		$arrivals = $_POST['arrivals'];
		$leaving = $_POST['leaving'];

		$request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

		if (mysqli_query($conn, $request)) {
			header('location:success.php');
			 
        //echo $name . " Your Reservations is Completed.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);



		//mysqli_query($conn, $request);

		
	
		//echo 'something went wrong! try again.';

?>

