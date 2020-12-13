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
    <link rel="stylesheet" href="../css/portfolio.css">

    <!--using FontAwesome---------------->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <title>Portfolio</title>
</head>
<body>
    <!-- Header -->
    <header>
    <!--Navigation------------------------->
        <nav>
            <!--Logo-->
            <a href="#" class="logo">PANHPZH</a>
            <!--Menu-->
            <ul>
                <li><a href="../index.php#home">Home</a></li>
                <li><a href="../index.php#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
            </ul>
            <!--Bars For Mobile Layout--------------->
            <div class="toggle"></div>
        </nav>
    <!-- Akhir Navigation -->
    </header>
    <!-- Akhir Header -->

    <!-- Jumbotron -->
    <section>

    </section>

    <!-- Content Jumbotron -->
    <div class="content">
        <div class="text-container">
            <p>Hello World, This is My</p>
            <p>PORTFOLIO</p>
            <p>You can see all the projects <br>I've made here</p>
            <a href="#myprojects"><button class="hire-btn">See Projects</button></a>
            <button class="down-cv">Hire Me</button>
            <div id="myprojects"></div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Content Portfolio -->
    <div class="portfolio">

        <!-- FILTER BUTTON -->
        <div id="myBtnContainer">
            <a href="#myprojects"><button class="btn active" onclick="filterSelection('all')" id="all-btn">Show all</button></a>
            <a href="#myprojects"><button class="btn" onclick="filterSelection('programming')" id="programming-btn">Programming</button></a>
            <a href="#myprojects"><button class="btn" onclick="filterSelection('game')" id="game-btn">Game Development</button></a>
            <a href="#myprojects"><button class="btn" onclick="filterSelection('design')" id="design-btn">Graphic Design</button></a>
            <a href="#myprojects"><button class="btn" onclick="filterSelection('3d')" id="3d-btn">3D Creation</button></a>
        </div>
        
        <!-- Card Portfolio -->
          <div class="container">
              <!-- Card Portfolio -->
            <div class="filterDiv programming">
                <a href="../index.php">
              <div id="card">
                  <div class="card-banner">
                      <p class="category-tag banner">Programming</p>
                      <img class="banner-img" src='https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                  </div>
                  <div class="card-body">
                      <p class="blog-hashtag"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p>
                      <h2 class="blog-title">What is the future of front end development?</h2>
                      <p class="blog-description">My thoughts on the future of front end web development</p>
                  </div>
              </div>
                </a>
            </div>
            <div class="filterDiv 3d">
                <a href="../index.php">
              <div id="card">
                  <div class="card-banner">
                      <p class="category-tag banner">3D Creation</p>
                      <img class="banner-img" src='https://images.unsplash.com/photo-1413708617479-50918bc877eb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                  </div>
                  <div class="card-body">
                      <p class="blog-hashtag"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p></p>
                      <h2 class="blog-title">Photography gear you need this year</h2>
                      <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography tools for this year</p>
                  </div>
              </div>
                </a>
            </div>
            <div class="filterDiv design">
                <a href="../index.php">
              <div id="card">
                  <div class="card-banner">
                      <p class="category-tag banner">Graphic Design</p>
                      <img class="banner-img" src='https://images.unsplash.com/photo-1592496001020-d31bd830651f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                  </div>
                  <div class="card-body">
                      <p class="blog-hashtag"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p></p>
                      <h2 class="blog-title">Mediation and Mental Wellness Best Practices</h2>
                      <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
                  </div>
              </div>
                </a>
            </div>
            <div class="filterDiv programming">
                <a href="../index.php">
              <div id="card">
                  <div class="card-banner">
                      <p class="category-tag banner">Programming</p>
                      <img class="banner-img" src='https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                  </div>
                  <div class="card-body">
                      <p class="blog-hashtag"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p>
                      <h2 class="blog-title">What is the future of front end development?</h2>
                      <p class="blog-description">My thoughts on the future of front end web development</p>
                  </div>
              </div>
                </a>
            </div>
            <div class="filterDiv 3d">
                <a href="../index.php">
              <div id="card">
                  <div class="card-banner">
                      <p class="category-tag banner">3D Creation</p>
                      <img class="banner-img" src='https://images.unsplash.com/photo-1413708617479-50918bc877eb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                  </div>
                  <div class="card-body">
                      <p class="blog-hashtag"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p></p>
                      <h2 class="blog-title">Photography gear you need this year</h2>
                      <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography tools for this year</p>
                  </div>
              </div>
                </a>
            </div>
            <div class="filterDiv design">
                <a href="../index.php">
              <div id="card">
                  <div class="card-banner">
                      <p class="category-tag banner">Graphic Design</p>
                      <img class="banner-img" src='https://images.unsplash.com/photo-1592496001020-d31bd830651f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
                  </div>
                  <div class="card-body">
                      <p class="blog-hashtag"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p></p>
                      <h2 class="blog-title">Mediation and Mental Wellness Best Practices</h2>
                      <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
                  </div>
              </div>
                </a>
            </div>
            <!-- End Card -->
          </div>
        <!-- End Card -->
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

    <!--JQUery-------------------->
    <!--Javascript Toggle Mobile-------------------->
    <script type="text/javascript" src="js/JQuery.js"></script>
    <!-- Script Filter Category -->
    <!-- <script src="../js/filter_category.js"></script> -->
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
    To get the button by its Id, we simply append '-btn' to fromURL varible and then call js click() method on it as follows
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
  </script>
</body>
</html>