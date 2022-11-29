<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Successful</title>

	<style>
		.btn{
		margin-top: 5rem;
		background: var(--orange);
		color: #fff;
		padding: .5rem 5rem;
		border: .2rem solid var(--orange);
		border-radius: 8px;
		cursor: pointer;
		font-size: 2.5rem;
		}

		.btn:hover{
		background: rgba(255, 165, 0, .2);
		color: var(--orange);
		}

		.home{
 		min-height: 100vh;
		display: flex;
 		align-items: center;
		justify-content: center;
 		flex-flow: column;
 		position: relative;
 		z-index: 0;
		}

		.home .content{
  		text-align: center;
		}

		.home .content h3{
 		 font-size: 4.5rem;
  		color:#fff;
  		text-transform: uppercase;
  		text-shadow: 0 .3rem .5rem rgba(0,0,0,.1);
		}

		.home .content p{
  		font-size: 2.5rem;
  		color:#fff;
  		padding:.5rem 0;
		}

		.home .video-container video{
  		position: absolute;
  		top:0; left: 0;
  		z-index: -1;
  		height: 100%;
  		width:100%;
  		object-fit: cover;
		}
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div class="home">
		<div class="content">
		<h3>BOOKING SUCCESSFUL!!!</h3>
		<p>Hope you have a great experience with us...</p>
		<a href="index.php" class="btn">OKAY</a>
	</div>
	<div class="video-container">
        <video src="images/vid-10.mp4" loop autoplay muted></video>
    </div>
	</div>

</body>
</html>