<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tour and travel agency website</title>

    <!--<script>
        function alrt() {
            alert("Logging in Successful!");
        }
    </script>-->

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<header>
		<div id="menu-bar" class="fas fa-bars"></div>

		<a href="#" class="logo"><span>F</span>ly<span>B</span>ee</a>

		<nav class="navbar">
			<a href = "#home">home</a>
			<a href = "#book">book</a>
			<a href = "#packages">packages</a>
			<a href = "#services">services</a>
			<a href = "#gallery">gallery</a>
			<a href = "#review">review</a>
			<a href = "#contact">contact</a>
		</nav>

		<div class="icons">
			<i class="fas fa-search" id="search-btn"></i>
			<i class="fas fa-user" id="login-btn"></i>
		</div>

		<form action="" class="search-bar-container">
			<input type="search" id="search-bar" placeholder="Search Here">
			<label for="search-bar" class="fas fa-search"></label>
		</form> 

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
		<a href="#" class="btn">To Know More</a>
	</div>
	<div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!--HOME END-->
<!--BOOK-->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>
    <div class="row">
    	<div class="image" alt="">
    		<img src="images/book-img.svg" alt="">
    	</div>

    	<form action="book_form.php" method="post">
    		<div class="flex">
    			<div class="inputBox">
    			<h3>name</h3>
    			<input type="text" placeholder="Your Name" name="name">
    		</div>
    		<div class="inputBox">
    			<h3>email</h3>
    			<input type="email" placeholder="Your Email" name="email">
    		</div>
    		<div class="inputBox">
    			<h3>phone</h3>
    			<input type="number" placeholder="Your Contact Number" name="phone">
    		</div>
    		<div class="inputBox">
    			<h3>address</h3>
    			<input type="text" placeholder="Your Address" name="address">
    		</div>
    		<div class="inputBox">
    			<h3>where to</h3>
    			<input type="text" placeholder="Place Name" name="location">
    		</div>
    		<div class="inputBox">
    			<h3>how many</h3>
    			<input type="number" placeholder="Number of Guests" name="guests">
    		</div>
    		<div class="inputBox">
    			<h3>arrivals</h3>
    			<input type="Date" name="arrivals">
    		</div>
    		<div class="inputBox">
    			<h3>leaving</h3>
    			<input type="Date" name="leaving">
    		</div>
    		<input type="submit" value="Book Now" class="btn" name="send">
    			
    		</div>
    	</form>
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

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                <p>Experience monsoon in Mumbai and you will never feel like going to any other place in the world!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                <p>Incredible as it might seem, Hawaii is like a gigantic raft, drifting slowly with the centuries.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                <p>If Paris is a city of lights, Sydney is the city of fireworks.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                <p>A walk about Paris will provide lessons in history, beauty, and in the point of life.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                <p>More than any other city, Tokyo demonstrates that ‘city’ is a verb and not a noun.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> eypt </h3>
                <p>In Egypt, Every time you dive, you hope you’ll see something new – some new species. Sometimes the ocean gives you a gift, sometimes it doesn’t.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-7.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> venice</h3>
                <p>Venice never quite seems real, but rather an ornate film set suspended on the water.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-8.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> maldives</h3>
                <p>People never forget two things: their first love and their first day in the Maldives.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-9.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> greece</h3>
                <p>To witness the Mediterranean sun setting on the turquoise sea is to receive one of life's greatest blessings.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!--PACKAGE END-->

<!-- SERVICES-->

<section class="services" id="services">
	
	<h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
    	<div class="box">
    		<i class="fas fa-hotel"></i>
    		<h3>affordable hotels</h3>
    		<p>Various options to choose from, of hotels and AirBNB ranging from cheap to luxury, to give you a better and comfotable stay experience.</p>
    	</div>
    	<div class="box">
    		<i class="fas fa-utensils"></i>
    		<h3>food and drinks</h3>
    		<p>We provide Multi-cuisine options at a very comfortable price, so that you get to taste home and explore foods of the world.</p>
    	</div>
    	<div class="box">
    		<i class="fas fa-bullhorn"></i>
    		<h3>safety guide</h3>
    		<p>The safety guidelines are there for you to understand and get a good knowledge to the places that you visit and explore. Our goal is to provide a safe adventure experience.</p>
    	</div><br>
    	<div class="box">
    		<i class="fas fa-globe-asia"></i>
    		<h3>around the world</h3>
    		<p>Wherever you wish to go around the world, we are here to take you to your best visit of your dream destination.</p>
    	</div>
    	<div class="box">
    		<i class="fas fa-plane"></i>
    		<h3>fastest travel </h3>
    		<p>Providing fastest travel optiopns for you to choose from. We take the best care of your travel demands and comforts within budget.</p>
    	</div>
    	<div class="box">
    		<i class="fas fa-hiking"></i>
    		<h3>adventure</h3>
    		<p>If you are a wild traveller and adventures lover, worry not. Our services for your needs and comforts to enjoy the wildest experience will save you some hassle.</p>
    	</div>
    </div>

</section>

<!--SERVICE END-->

<!--GALLERY-->
<Ssection class="gallery" id="gallery">
	
	<h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>a</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>A sneek peak of the amazing places that you could be visiting.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>Amazing Places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
    </div>

</Ssection>

<!--GALLERY END-->
<!--REVIEW -->

<section class="review" id="review">
	
	<h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>
    </h1>
    
    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>John Doe</h3>
                    <p>I Had The Best Experience With FlyBee!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>John Doe</h3>
                    <p>I Had The Best Experience With FlyBee!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>John Doe</h3>
                    <p>I Had The Best Experience With FlyBee!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>John Doe</h3>
                    <p>I Had The Best Experience With FlyBee!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>


</section>

<!--REVIEW END-->

<!--CONTACT-->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!--CONTACT END-->

<!--BRAND-->

<section class="brand-container">

	<div class="swiper-container brand-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
			<div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
		</div>
	</div>
	
</section>


<!--BRAND END-->
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