<?php
  //default value
  $category = '';
  if(isset($_GET['category']) && !empty($_GET['category'])){
  $category = $_GET['category'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--using FontAwesome---------------->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <title>panhpzh</title>
</head>
<body>
    <header id="navbar">
        <!--Navigation------------------------->
        <nav class="shadow" id="home">
            <!--logo-->
            <a href="#" class="logo">PANHPZH</a>
            <!--Menu-->
            <ul id="Menu">
                <li><a href="#home" class="btn-menu active" onclick="filterSelection('home')" id="home-btnMenu">Home</a></li>
                <li><a href="#about" class="btn-menu" onclick="filterSelection('about')" id="about-btnMenu">About</a></li>
                <li><a href="#portfolio" class="btn-menu" onclick="filterSelection('portfolio')" id="portfolio-btnMenu">Portfolio</a></li>
                <li><a href="#contact" class="btn-menu" onclick="filterSelection('contact')" id="contact-btnMenu">Contact</a></li>
            </ul>
            <!--Bars For Mobile Layout--------------->
            <div class="toggle"></div>
        </nav>
    </header>
    <!-- Jumbotron -->
    <section>
    </section>

    <!--Content Jumbotron----------------------->
    <div class="content">
        <div class="text-container">
            <p>Hello World,</p>
            <p>I&#8217;M IRFAN HAFIZH</p>
            <p>Unemployed Devotees <br>& Nolepers</p>
            <a href="menu/portfolio.php"><button class="hire-btn">My Projects</button></a>
            <button class="down-cv"">Hire Me</button>
        </div>
        <!--Model---------------------->
        <img alt="model" class="model" src="source/images/personalweb_images/model5.png">
    <!-- Akhir Jumbotron -->

        <div id="about"></div>    

        <!-- About -->
        <div class="about-container">
            <!--img-->
            <img src="source/images/personalweb_images/about-img2.png">
            <!--about-me-text-->
            <div class="about-text">
                <p>About Me</p>
                <p>Unemployed Devotees & Nolepers</p>
                <p>Hello, My name is Irfan Hafizh. I am a New graduate in Computer and Network Engineering at SMK Panjatek. Throughout my education, I have built a strong foundation in the field of Information Technology. During my education, I made use of my skills and have studied Web Development, Android Studio, IT Support and others.</p>
                <p>I am now looking for a job that matches my skills, so that I can always develop my skills and build a career in Information Technology.</p>
                <a href="menu/portfolio.php"><button>My Projects</button></a>
                <button>Hire Me</button>
                <div></div>
            </div>
        </div>
        <!-- Akhir About -->
        
        <!--Services-container---------------------------->
        <div class="services" id="portfolio">
            <!--text-->
        <div class="services-text ">
            <p>Portfolio</p>
            <p><a href="menu/portfolio.php">See More -></a></p>
            <p>If you want to see my portfolio in various fields from Web Development, UI Design, 3D Blender, Graphic Design, Game Development And Others.</p>
        </div>
        <div class="box-container">
            <!--1------------->
            <div class="box-1">
                <span>1</span>
                <p class="heading">Programming</p>
                <p class="details">The process of creating a set of instructions that tell a computer how to perform a task. Variety of computer programming languages, such as JavaScript, Python, etc.</p>
                <a href="menu/portfolio.php?category=programming#myprojects"><button>Read More</button></a>
            </div>
            <!--2------------->
            <div class="box-2">
                <span>2</span>
                <p class="heading">Graphic Design</p>
                <p class="details">The process of visual communication through the use of typography, photography, iconography and illustration.</p>
                <a href="menu/portfolio.php?category=design#myprojects"><button>Read More</button></a>
            </div>
            <!--3------------->
            <div class="box-3">
                <span>3</span>
                <p class="heading">And More</p>
                <p class="details">And many more of my Portfolios or Projects that I have created since I started my career, you can see by clicking Read More.</p>
                <a href="menu/portfolio.php#myprojects"><button>Read More</button></a>
            </div>
        </div>
        </div>
        <!-- Akhir Services -->
    
        <!--Contact-->
        <div class="contact-me">
            <p>If You Have Any Project In Your Mind ?</p>
            <button id="contact">Contact Me</button>
        </div>
    </div>
    
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
        <a href="https://www.instagram.com/fanhfzh/" target="_blank"><i class="fab fa-instagram"></i></a>
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
        <a href="https://www.instagram.com/fanhfzh/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCRHP73tWc5waTnyTrwbfe9A" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>

    <!-- Back to Top -->
    <a href="#" onclick="topFunction()" id="goTop" title="Go to Top"><i class="fas fa-arrow-up"></i></a>
    <!-- <button onclick="topFunction()" id="goTop" title="Go to top">Top</button> -->

    <!--JQUery-------------------->
    <!--Javascript Toggle Mobile-------------------->
    <!-- <script src="js/menu.js"></script> -->
    <!-- <script src="js/script.js"></script> -->
    <!-- Script Filter Category -->
    <script type="text/javascript" src="js/JQuery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.toggle').click(function(){
        $('.toggle').toggleClass('active')
        $('nav').toggleClass('active')
      })
    })

    // Smooth Scrolling Javascript
    $(document).ready(function(){
    // Add smooth scrolling to all links
    $(".btn-menu").on('click', function(event) {

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

    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
    // var lastScrollTop = 0;
    //     navbar = document.getElementById("navbar");
    // window.addEventListener("scroll", function(){
    //     var scrollTop = window.pageYOffset || document
    //         .documentElement.scrollTop;
    //     if(scrollTop > lastScrollTop){
    //         navbar.style.top = "-80px"
    //     } else {
    //         navbar.style.top = "0"
    //     }
    //     lastScrollTop = scrollTop;
    // })

    //NAVBAR
    var header = document.getElementById("Menu");
    var btns = header.getElementsByClassName("btn-menu");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
    }

    //EDIT
    //create an array of all the categories called all_categories.
    let all_categories = ['home', 'about', 'portfolio', 'contact'];
    let fromURL = '<?php echo $category;?>';
    /*****************
    In the accepted variable, we check if the query string belong to our defined values. If not, we just filterSelection() without scrolling to #myprojects. But if it belongs, then we click the button with the id which will automatically scroll to #myprojects.
    The fromURL if it exists should be one of the ids of the myBtnContainer buttons without '-btn' so we need to get this button and dynamically click it as you would do manually. This button will have its class changed because we are below where the method is written - line 222 and filterSelection(parameter) will be called with the appropriate parameter.
    To get the button by its Id, we simply append '-btn' to fromURL variable and then call js click() method on it as follows
    *****************/
    if (all_categories.includes(fromURL)) {
      document.getElementById(fromURL + '-btnMenu').click(); 
     }else{
      filterSelection('home');
     }
    </script>
</body>
</html>