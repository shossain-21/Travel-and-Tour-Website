<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tour and travel agency website</title>

	<style>
		.btn1{
		display: inline-block;
		margin-top: 1rem;
		background: var(--orange);
		color: #fff;
		padding: .1rem 1rem;
		border: .2rem solid var(--orange);
		cursor: pointer;
		font-size: 1.5rem;
		border-radius: 8px;
		}

		.btn1:hover{
		background: rgba(255, 165, 0, .2);
		color: var(--orange);
		}
	</style>

    <!--<script>
        function alrt() {
            alert("Logging in Successful!");
        }
    </script>-->

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" href="css/style.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
	<header>
		<div id="menu-bar" class="fas fa-bars"></div>

		<a href="#" class="logo"><span>A</span>dmin<span>P</span>anel</a>

		<nav class="navbar">
			<a href = "#home">home</a>
			<a href = "#bookings">bookings</a>
			<a href = "#packages">packages</a>
			<a href = "#admin">admin information</a>
		</nav>

		<button class="btn1" onclick="myFunction()">Logout</button>

		<script>
		function myFunction() {
  		location.replace("index.php")
		}
		</script>

		<!--<form action="" class="search-bar-container">
			<input type="search" id="search-bar" placeholder="Search Here">
			<label for="search-bar" class="fas fa-search"></label>
		</form> -->

	</header>

	<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="login.php" method="post">
        <h3>admin login</h3>
        <input type="text" class="box" placeholder="id" name="id" required>
        <input type="email" class="box" placeholder="enter your email" name="email" required>
        <input type="password" class="box" placeholder="enter your password" name="password" required>
        <input type="submit" value="login" class="btn" name="send">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>

<!--HOME-->
<section class="home" id="home">
	<div class="content">
		<h3>ADVENTURE IS OUT THERE</h3>
		<p>Change the way you travel, travel with us and discover your soul.</p>
		<!--<a href="#" class="btn">To Know More</a>-->
	</div>
	<!--<div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>-->

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!--HOME END-->
<!--BOOK-->

<section class="book" id="book" >

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
        <span>s</span>
    </h1>
    <div class="row" style="margin: 70px;">
    	<table class="table">
    		<thead>
    			<tr>
    		<th>ID</th>
    		<th>NAME</th>
    		<th>EMAIL</th>
    		<th>PHONE</th>
    		<th>ADDRESS</th>
    		<th>LOCATION</th>
    		<th>GUESTS</th>
    		<th>ARRIVALS</th>
    		<th>LEAVING</th>
    		<th>OPERATIONS</th>
    	</tr>
    		</thead>
    		<tbody>

    		<?php
    	$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    	$sql = "SELECT * FROM book_form";
    	$result = $conn->query($sql);

    	if(!$result){
    		echo "<script>alert('Failure!')";
    	}

    	while($row = $result -> fetch_assoc()){
    		echo "<tr>
    		<td>". $row["id"] ."</td>
    		<td>". $row["name"] ."</td>
    		<td>". $row["email"] ."</td>
    		<td>". $row["phone"] ."</td>
    		<td>". $row["address"] ."</td>
    		<td>". $row["location"] ."</td>
    		<td>". $row["guests"] ."</td>
    		<td>". $row["arrivals"] ."</td>
    		<td>". $row["leaving"] ."</td>
    		<td>
    			<a class='btn btn-primary btn-sm' href = 'edit.php?updateid=$row[id]'>Update</a>
    			<a class='btn btn-primary btn-sm' href = 'delete.php?id=$row[id]'>Delete</a>
    		</td>
    	</tr>";
    	}
    		
    	?>
    		</tbody>
    	</table>
    </div>

</section>

<!--BOOK END-->>
<!-- PACKAGES-->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="row" style="margin: 70px;">
    	<table class="table">
    		<thead>
    			<tr>
    		<th>PACKAGE ID</th>
    		<th>NAME</th>
    		<th>LOCATION</th>
    		<th>FACILITIES</th>
    		<th>PRICE</th>
    		<th>OPERATIONS</th>
    	</tr>
    		</thead>
    		<tbody>

    		<?php
    	$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    	$sql = "SELECT * FROM packages";
    	$result = $conn->query($sql);

    	if(!$result){
    		echo "<script>alert('Failure!')";
    	}

    	while($row = $result -> fetch_assoc()){
    		echo "<tr>
    		<td>". $row["id"] ."</td>
    		<td>". $row["name"] ."</td>
    		<td>". $row["locations"] ."</td>
    		<td>". $row["facilities"] ."</td>
    		<td>". $row["price"] ."</td>
    		<td>
    			<a class='btn btn-primary btn-sm' href = 'update'>Update</a>
    			<a class='btn btn-primary btn-sm' href = 'delete'>Delete</a>
    			<a class='btn btn-primary btn-sm' href = 'add.php'>Add</a>
    		</td>
    	</tr>";
    	}
    		
    	?>
    		</tbody>
    	</table>
    </div>

</section>

<!--PACKAGE END-->

<!-- ADMIN INFORMATION -->

<section class="services" id="services">
	
	<h1 class="heading">
        <span>a</span>
        <span>d</span>
        <span>m</span>
        <span>i</span>
        <span>n</span>
        <span class="space"></span>
        <span>i</span>
        <span>n</span>
        <span>f</span>
        <span>o</span>
        <span>r</span>
        <span>m</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
    </h1>

    <div class="row" style="margin: 70px;">
    	<table class="table" style="width:120%">
    		<thead>
    			<tr>
    		<th>ADMIN ID</th>
    		<th>NAME</th>
    		<th>EMAIL</th>
    		<th>PHONE</th>
    		<th>ADDRESS</th>
    		<th>PASSWORD</th>
    		<th>OPERATIONS</th>
    	</tr>
    		</thead>
    		<tbody>

    		<?php
    	$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    	$sql = "SELECT * FROM login_form";
    	$result = $conn->query($sql);

    	if(!$result){
    		echo "<script>alert('Failure!')";
    	}

    	while($row = $result -> fetch_assoc()){
    		echo "<tr>
    		<td>". $row["id"] ."</td>
    		<td>". $row["name"] ."</td>
    		<td>". $row["email"] ."</td>
    		<td>". $row["phone"] ."</td>
    		<td>". $row["address"] ."</td>
    		<td>". $row["password"] ."</td>
    		<td>
    			<a class='btn btn-primary btn-sm' href = 'update'>Update</a>
    			<a class='btn btn-primary btn-sm' href = 'delete'>Delete</a>
    		</td>
    	</tr>";
    	}
    		
    	?>
    		</tbody>
    	</table>
    </div>

</section>

<!--ADMIN INFORMATION END-->

<!--FOOTER-->

<section class="footer">
	<div class="box-container">
		
		<div class="box">
			<h3>About us</h3>
			<p>We are a piece of shit!!!</p>
		</div>
		<div class="box">
			<h3>branch locations</h3>
			<a href="#">Bangladesh</a>
			<a href="#">USA</a>
			<a href="#">Japan</a>
			<a href="#">india</a>
			<a href="#">France</a>
		</div>
		<div class="box">
			<h3>quick links</h3>
			<a href="#">home</a>
			<a href="#">book</a>
			<a href="#">packages</a>
			<a href="#">gallery</a>
			<a href="#">services</a>
			<a href="#">reviews</a>
			<a href="#">contacts</a>
		</div>
		<div class="box">
			<h3>follow us</h3>
			<a href="#">facebook</a>
			<a href="#">instagram</a>
			<a href="#">twitter</a>
			<a href="#">linkedin</a>
		</div>

	</div>
</section>

<!--FOOTER END-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>
</body>
</html>