<!DOCTYPE html>
<html lang="en">
<head>
	<title>Myntra</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="icon" href="png/Myntra.png">
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		.slider {
			position: relative;
			width: 90%;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			overflow: hidden;
		}

		.slides {
			position: relative;
			display: flex;
			transition: transform 0.5s ease-in-out;
			gap: 2%;
		}

		.slide {
			min-width: 50%;
			box-sizing: border-box;
			cursor: pointer;
		}

		.slide img {
			width: 100%;
			display: block;
			border-radius: 10%;
		}

		.arrow {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			background: rgba(0, 0, 0, 0.5);
			color: white;
			border: none;
			padding: 10px;
			cursor: pointer;
			width: 32px;
			border-radius: 60%;
			z-index: 10; 
		}

		.prev {
			left: 0;
		}

		.next {
			right: 0;
		}

		.search-container {
			display: flex;
			align-items: center;
			border: 2px solid grey;
			border-radius: 25px;
			padding: 5px;
			width: 500px;
			background-color: #fff;
			margin-left: 50px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		.search-input {
			border: none;
			outline: none;
			padding: 10px;
			border-radius: 10px;
			flex-grow: 1;
			font-size: 16px;
			width: 100%;
			min-width: 200px;
		}

		.search-button {
			background: none;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 0 5px;
		}

		.search-button img {
			width: 20px;
			height: 20px;
		}

		.search-input::placeholder {
			color: #999;
		}

		.upload-section {
			margin-top: 50px; /* Adjust the spacing as needed */
		}

		.upload-container {
			margin-top: 20px; /* Add space from the top */
		}

		.streak-calendar {
			margin-top: 20px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.day {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background-color: #007bff;
			color: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0 5px;
			font-size: 1.2em;
			font-weight: bold;
			cursor: pointer;
		}

		.current-day {
			background-color: #008000;
		}

	</style>
</head>
<body>

<nav class="shadow-sm w-100 navbar navbar-expand-lg navbar-light">
	<a class="navbar-brand logo-size" href="home.php"><img src="png/Myntra.png" style="width: 70px; left: 15px; position: relative"/></a>
  
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="search-container">
		<input type="text" class="search-input" placeholder="Search...">
		<button class="search-button"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7_Ef8p3AiMNU7SmrPBzPrmlRM9kFAR1zYgw&s" alt="Search" /></button>
	</div>

	<span class="collapse navbar-collapse">
		<span class="container clearfix">
			<ul class="navbar-nav mr-auto mb-2 mb-lg-0 float-right">
				<li class="nav-item"><a class="nav-link" href="women's collection.php">Women's Section</a></li>
				<li class="nav-item"><a class="nav-link" href="men's collection.php">Men's Section</a></li>
				<li class="nav-item"><a class="nav-link" href="customize.php">Kid's Section</a></li>
				<li class="nav-item"><a class="nav-link" href="">Game</a></li>
			</ul>
		</span>
	</span>
</nav>

<div class="slider">
	<button class="arrow prev" onclick="moveSlides(-1)">&#10094;</button>
	<div class="slides" id="slides">
		<div class="slide"> 
			<a href="https://www.airmeet.com/e/83b2a350-4289-11ef-9228-2f1bf88c8b08">
				<img src="png/slide4.jpeg" alt="Slide 4">
			</a>
		</div>
		<div class="slide">
			<a href="https://www.airmeet.com/e/83b2a350-4289-11ef-9228-2f1bf88c8b08">
				<img src="png/slide2.jpeg" alt="Slide 2">
			</a>
		</div>
		<div class="slide">
			<a href="https://www.airmeet.com/e/83b2a350-4289-11ef-9228-2f1bf88c8b08">
				<img src="png/slide3.jpeg" alt="Slide 3">
			</a>
		</div>
		<div class="slide">
			<a href="https://www.airmeet.com/e/83b2a350-4289-11ef-9228-2f1bf88c8b08">
				<img src="png/slide1.jpeg" alt="Slide 1">
			</a>
		</div>
	</div>
	<button class="arrow next" onclick="moveSlides(1)">&#10095;</button>
</div>

<div class="upload-section container-fluid pb-5 dark">
	<div class="row dark">
		<div class="col-6 h-50 p-5 my-auto">
			<p class="main-bold main-heading">Upload Your Daily Myntra Product Photos and Videos</p>
			<p class="main-bold" style="font-size: 1.5em!important;">Maintain your streak! The longer your streak, the better the rewards. Stay consistent and get ready to receive some exciting goodies from Myntra. Happy shopping and sharing!</p>
		</div>
		<div class="col-6 align-self-start">
    <div class="upload-container">
	<div class="text-center">
        <form id="uploadForm" enctype="multipart/form-data">
            <input type="file" id="fileInput" name="productImage" accept="image/*" required>
            <button type="submit" class="btn btn-dark">Upload</button>
        </form>
        <div id="streakInfo"></div>
	</div>
    </div>
    <div class="text-center"> <!-- Added class to align content to the right -->
        <h4 class="mt-4">Daily Streak</h4>
        <div class="streak-calendar">
            <div class="day current-day">1</div>
            <div class="day">2</div>
            <div class="day">3</div>
            <div class="day">4</div>
            <div class="day">5</div>
            <div class="day">6</div>
            <div class="day">7</div>
            <!-- Add more days as needed -->
        </div>
    </div>
</div>

	</div>
</div>

<script>
	let currentSlide = 0;
	let slideInterval;

	function moveSlides(n) {
		const slides = document.getElementById('slides');
		const totalSlides = slides.children.length;
		const visibleSlides = 2;

		currentSlide += n;
		if (currentSlide >= totalSlides - visibleSlides + 1) {
			currentSlide = 0;
		} else if (currentSlide < 0) {
			currentSlide = totalSlides - visibleSlides;
		}

		const slideWidth = slides.children[0].offsetWidth + 10; // Add the gap value
		const movePercentage = (slideWidth * currentSlide) / slides.offsetWidth * 100;
		slides.style.transform = `translateX(-${movePercentage}%)`;

		resetAutoplay();
	}

	function startAutoplay() {
		slideInterval = setInterval(() => {
			moveSlides(1);
		}, 3000); // Change the interval time as needed (3000ms = 3s)
	}

	function resetAutoplay() {
		clearInterval(slideInterval);
		startAutoplay();
	}

	document.querySelector('.prev').addEventListener('click', () => {
		moveSlides(-1);
	});

	document.querySelector('.next').addEventListener('click', () => {
		moveSlides(1);
	});

	startAutoplay();
</script>

</body>
</html>
