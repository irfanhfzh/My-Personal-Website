<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/content.css">

    <!--using FontAwesome---------------->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>

    <style>

    </style>

    <title>Membuat Portfolio Post dengan JavaScript dan PHP secara simple - PANHPZH</title>
</head>
<body>
    <!-- Header -->
    <header>
    <!--Navigation------------------------->
        <nav class="shadow">
            <!--Logo-->
            <a href="../../index.php" class="logo">PANHPZH</a>
            <!--Menu-->
            <ul id="Menu">
                <!-- <li class="liquid1"></li> -->
                <li><a href="../../index.php" class="btn-menu">Home</a></li>
                <li><a href="../../index.php?category=about#about" class="btn-menu">About</a></li>
                <li><a href="../../index.php?category=portfolio#portfolio" class="btn-menu">Portfolio</a></li>
                <li><a href="../../index.php?category=contact#contact" class="btn-menu">Contact</a></li>
            </ul>
            <!--Bars For Mobile Layout--------------->
            <div class="toggle"></div>
        </nav>
    <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Content Portfolio -->
    <div class="contentPortfolio">
        <div class="parentCrumbs">
            <div class="childBcrumbs">
                <div class="bcrumbs">
                    <a href="../../index.php">Home</a>
                    <p> >> </p>
                    <a href="../../menu/portfolio.php">Portfolio</a>
                    <p> >> </p>
                    <a href="#">The Content is Coming Soon</a>
                </div>
            </div>
        </div>
        <!-- Content Post -->
        <div class="container">
            <div class="parentPost">
                <div class="contentPost">
                    <div class="metaCategory">
                        <a class="title" href="../../menu/portfolio.php">Portfolio</a>
                        <p> - </p>
                        <a class="categoryPost" href="../../menu/portfolio.php?category=3d#myprojects">3D Creation</a>
                    </div>
                    <div class="metaTitle">
                        <h1 class="titlePost">The Content is Coming Soon</h1>
                        <div id="titleDesc">
                            <p class="date"><i class="fas fa-calendar-alt"></i> Kamis, 19 November 2020</p>
                            <p class="written">Written by <a href="../../index.php#about">Irfan Hafizh</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="thumbnailPost">
                        <img src="../../source/images/personalweb_images/404notfound.png" alt="Membuat Portfolio Post dengan JavaScript dan PHP secara simple">
                    </div>
                    <hr>
                    <div class="article">
                        <p><b><i>The Content is Coming Soon</i></b> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h2></h2>
                        <p></p>
                        <div class="btnArticle">
                            <button>Demo View</button>
                            <button><i class="fab fa-github"></i>  GitHub</button>
                        </div>
                        <hr>
                        <div class="profileAdmin">
                            <div class="about-container">
                                <!--img-->
                                <img src="../../source/images/personalweb_images/about-img2.png">
                                <!--about-me-text-->
                                <div class="about-text">
                                    <p>Irfan Hafizh</p>
                                    <p>Unemployed Devotees & Nolepers</p>
                                    <p>I am a New graduate in Computer and Network Engineering at SMK Panjatek. Throughout my education, I have built a strong foundation in the field of Information Technology. During my education, I made use of my skills and have studied Web Development, Android Studio, IT Support and others.</p>
                                    <p>I am now looking for a job that matches my skills, so that I can always develop my skills and build a career in Information Technology.</p>
                                    <a href="../../menu/portfolio.php"><button>My Projects</button></a>
                                    <button>Hire Me</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Post -->
    </div>
    <!-- End Content Portfolio -->

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
    <!-- End Footer -->

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
    <!-- <script src="../../js/menu.js"></script> -->
    <!-- Script Filter Category -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('nav').toggleClass('active')
        })
    })

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
    </script>
</body>
</html>