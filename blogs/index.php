<!DOCTYPE html>
<html>
<head>
	<!--using FontAwesome---------------->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/portfolio.css">
	<title>Portfolio - PANHPZH</title>
</head>
<body>
	<!-- Header -->
	<header>
	<!--Navigation------------------------->
		<nav class="shadow">
			<!--Logo-->
			<a href="../index.php" class="logo">PANHPZH</a>
			<!--Menu-->
			<ul id="Menu">
				<!-- <li class="liquid1"></li> -->
				<li><a href="../index.php" class="menu">Home</a></li>
				<li><a href="../index.php?category=about#about" class="menu">About</a></li>
				<li><a href="../index.php?category=portfolio#portfolio" class="menu">Portfolio</a></li>
				<li><a href="../index.php?category=contact#contact" class="menu">Contact</a></li>
			</ul>
			<!--Bars For Mobile Layout--------------->
			<div class="toggle"></div>
		</nav>
	<!-- Akhir Navigation -->
	</header>
	<!-- Akhir Header -->

	<!-- Jumbotron -->
	<section>
		<div class="text-container">
			<p>Hello World, This is My</p>
			<p>PORTFOLIO</p>
			<p>You can see all the projects <br>I've made here</p>
			<a href="#myprojects" class="ssPortfolio"><button class="hire-btn">See Projects</button></a>
			<button class="down-cv">Hire Me</button>
			<div></div>
		</div>
	</section>

	<!-- Content Jumbotron -->
	<!-- <div class="content">

	</div> -->
	<!-- Akhir Jumbotron -->

	<!-- Content Portfolio -->
	<div class="portfolio" id="myprojects">

		<!-- FILTER BUTTON -->
		<div id="myBtnContainer">
			<a href="#myprojects" class="ssPortfolio"><button class="btn active" onclick="filterSelection('all')" id="all-btn">Show all</button></a>
			<a href="#myprojects" class="ssPortfolio"><button class="btn" onclick="filterSelection('programming')" id="programming-btn">Programming</button></a>
			<a href="#myprojects" class="ssPortfolio"><button class="btn" onclick="filterSelection('game')" id="game-btn">Game Development</button></a>
			<a href="#myprojects" class="ssPortfolio"><button class="btn" onclick="filterSelection('design')" id="design-btn">Graphic Design</button></a>
			<a href="#myprojects" class="ssPortfolio"><button class="btn" onclick="filterSelection('3d')" id="3d-btn">3D Creation</button></a>
		</div>
		
		<!-- Container Card Portfolio -->
			<div class="container">
				<!-- Card Portfolio -->
				<?php  
				require '../dbconnections.php';
				require '../functions.php';
				$sql = $connection->query("SELECT * FROM blogs ORDER BY sn DESC");
				if ($sql->num_rows > 0) {
					while ($row = $sql->fetch_assoc()) {
					echo trim(
						"<a href = '" . $row['id'] . "'>" . 
						"<div id='card'>" . 
						"<div class='card-banner'>" .
						"<p class='category-tag banner'>Programming</p>" .
						"<img class='banner-img' src='https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>" .
						"</div>" .
						"<div class='card-body'>" .
						"<p class='blog-hashtag'><i class='fas fa-calendar-alt'></i>" . good_date($row['date_created']) . "</p>" .
						"<h2 class='blog-title'>" . $row['title'] . "</h2>" .
						"<p class='blog-description'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, natus eveniet quos asperiores doloribus itaque iusto dicta distinctio quod.</p>" .
						"</div>" .
						"</div>" .
						"</a>"
					);
					}
				}else{
					echo "No blog created yet.. Click on the bottom right icon to create a new blog";
				}
				?>
			</div>
		<!-- End Container Card -->
	</div>
	<!-- Akhir Content Portfolio -->

	<!--Footer--------------->
	<footer>
		<!--heading-->
		<p>Connect To Me</p>
		<!--paragraph-->
		<p>If you want to see more about me or contact me <br> You can follow my social media below.</p>
		<!--social-->
	<div class="social-icons">
		<a href="https://www.facebook.com/irfan.hafizh.28" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a href="https://twitter.com/DenGregets" target="_blank"><i class="fab fa-twitter"></i></a>
		<a href="https://www.instagram.com/panhpzh/" target="_blank"><i class="fab fa-instagram"></i></a>
		<a href="https://www.youtube.com/channel/UCRHP73tWc5waTnyTrwbfe9A" target="_blank"><i class="fab fa-youtube"></i></a>
	</div>
		<!--copyright-->
		<p class="copyright">Copyright &#169; by Irfan Hafizh</p>
	</footer>
	<!-- Akhir Footer -->

	<!--social-attach-bar-->
	<div class="social">
		<a href="https://www.facebook.com/irfan.hafizh.28" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a href="https://twitter.com/DenGregets" target="_blank"><i class="fab fa-twitter"></i></a>
		<a href="https://www.instagram.com/panhpzh/" target="_blank"><i class="fab fa-instagram"></i></a>
		<a href="https://www.youtube.com/channel/UCRHP73tWc5waTnyTrwbfe9A" target="_blank"><i class="fab fa-youtube"></i></a>
	</div>

	<!-- Back to Top -->
	<a href="#" onclick="topFunction()" id="goTop" title="Go to Top"><i class="fas fa-arrow-up"></i></a>

	<!--JQUery-------------------->
	<!--Javascript Toggle Mobile-------------------->
	<!-- <script src="../js/menu.js"></script> -->
	<!-- Script Filter Category -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('.toggle').click(function(){
			$('.toggle').toggleClass('active')
			$('nav').toggleClass('active')
		})
	})
	/********************
	I decided to place this part of your script at the top because any dynamic clicking of the buttons that occurs before the definition of your method for toggling the class name will not have it's class name changed.
	Also, we have given each of the buttons an id according to what it displays adding -btn to the end and being careful of typos. --Check myBtnContainer buttons -- This is for a good reason as you will see below
	********************/
	// Add active class to the current button (highlight it)
	var btnContainer = document.getElementById("myBtnContainer");
	var button = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < button.length; i++) {
	button[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
	}

	//EDIT
	//create an array of all the categories called all_categories.
	let all_categories = ['programming', 'game', 'design', '3d', 'all'];
	let fromURL = '<?php echo $category;?>';
	/*****************
	In the accepted variable, we check if the query string belong to our defined values. If not, we just filterSelection() without scrolling to #myprojects. But if it belongs, then we click the button with the id which will automatically scroll to #myprojects.
	The fromURL if it exists should be one of the ids of the myBtnContainer buttons without '-btn' so we need to get this button and dynamically click it as you would do manually. This button will have its class changed because we are below where the method is written - line 222 and filterSelection(parameter) will be called with the appropriate parameter.
	To get the button by its Id, we simply append '-btn' to fromURL variable and then call js click() method on it as follows
	*****************/
	if (all_categories.includes(fromURL)) {
		document.getElementById(fromURL + '-btn').click(); 
		}else{
		filterSelection('all');
		}

	//EDIT FILTER CATEGORY
	// JavaScript Filter Category
	function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName("filterDiv");
	if (c == "all") c = "";
	for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	}
	}

	function w3AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	}
	}

	function w3RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	}
	element.className = arr1.join(" ");
	}
	/* I sincerely hope this is what you want */

	// Back To Top Javascript
	$(document).ready(function(){ 
	$(window).scroll(function(){ 
		if ($(this).scrollTop() > 100) { 
			$('#goTop').fadeIn(); 
		} else { 
			$('#goTop').fadeOut(); 
		} 
	}); 
	$('#goTop').click(function(){ 
		$("html, body").animate({ scrollTop: 0 }, 600); 
		return false; 
	}); 
	});

	// Smooth Scrolling Javascript
	$(document).ready(function(){
	// Add smooth scrolling to all links
	$(".ssPortfolio").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		// Prevent default anchor click behavior
		event.preventDefault();

		// Store hash
		var hash = this.hash;

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 800, function(){

			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		});
		} // End if
	});
	});
	</script>
</body>
</html>