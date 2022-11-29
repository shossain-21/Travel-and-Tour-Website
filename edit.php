<?php

$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

$id = $_GET['updateid'];
$sql = "SELECT * FROM book_form WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$address = $row['address'];
$location = $row['location'];
$guests = $row['guests'];
$arrivals = $row['arrivals'];
$leaving = $row['leaving'];

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['location'];
	$guests = $_POST['guests'];
	$arrivals = $_POST['arrivals'];
	$leaving = $_POST['leaving'];

	$sql = "UPDATE book_form SET name = '$name', email = '$email', phone = '$phone', address = '$address', location = '$location', guests = '$guests', arrivals ='$arrivals', leaving = '$leaving' WHERE id = $id";
	$result = mysqli_query($conn, $sql);

	if(!$result){
		$errorMessage = "Invalid query: " . $conn->error;
	}

	$seccessMessage = "Booking Updated Successfully";

	header("location: admin.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Information</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

	<div class="container my-5">
		<h2>Update Booking Information</h2>

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
					<input type="text" class="form-control" name="name" value=<?php echo $name; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="email" value=<?php echo $email; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Phone</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="phone" value=<?php echo $phone; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Address</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="address" value=<?php echo $address; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Location</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="location" value=<?php echo $location; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Guests</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" name="guests" value=<?php echo $guests; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Arrivals</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" name="arrivals" value=<?php echo $arrivals; ?>>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-3 col-form-label">Leaving</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" name="leaving" value=<?php echo $leaving; ?>>
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
					<button type="submit" class="btn btn-primary" name="submit">Update</button>
				</div>
				<div class="col-sm-3 d-grid">
					<a class="btn btn-outline-primary" href="admin.php" role="button">Cancel</a>
				</div>
			</div>
		</form>
	</div>

</body>
</html>