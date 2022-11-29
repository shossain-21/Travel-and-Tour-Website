<?php

	$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //<link rel="stylesheet" href="css/style.css">

    if(isset($_POST['submit'])){
    	$name = $_POST['name'];
		$locations = $_POST['locations'];
		$facilities = $_POST['facilities'];
		$price = $_POST['price'];

		$request = "insert into packages(name, locations, facilities, price) values('$name', '$locations', '$facilities', '$price')";

		if (mysqli_query($conn, $request)) {
			header('location:admin.php');
			 
        //echo $name . " Your Reservations is Completed.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Info</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

	<div class="container my-5">
		<h2>Add Packages</h2>

		<?php

		if(!empty($errorMessage)){
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
			<strong>$errorMessage</strong>
			<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
			</div>";
		}

		?>

		<form method="post">
			<input type="hidden" value="<?php echo $id; ?>" name="id">
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Name</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Package Name" name="name">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Locations</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Locations" name="locations">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Facilities</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Facilities" name="facilities">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Price</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Price" name="price">
				</div>
			</div>

			<?php

			if(!empty($seccessMessage)){
				echo "<div class='row mb-3'>
				<div class='offset-sm-3 col-sm-6'>
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>$successMessage</strong>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
					</div>
				</div>
			</div>";
			}

			?>

			<div class="row mb-3">
				<div class="offset-sm-3 col-sm-3 d-grid">
					<button type="submit" class="btn btn-primary" name="submit">Add</button>
				</div>
				<div class="col-sm-3 d-grid">
					<a class="btn btn-outline-primary" href="admin.php" role="button">Cancel</a>
				</div>
			</div>
		</form>
	</div>

</body>
</html>