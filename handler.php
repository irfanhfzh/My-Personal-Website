<?php
/**
Written on 18/12/2020 by Julius Ekane.
WhatsApp  ~ +971566366808
email ~ ekanejulius7@gmail.com || julius404@outlook.com
website ~ Under construction

You can alter this file as you wish and don't forget to contact me for any clarifications
*/
require 'dbconnections.php';
require 'functions.php';
if (isset($_POST['submit'])) {
$title = $connection->real_escape_string($_POST['title']);
$date = date('d/m/y, h:ia');
$body = $connection->real_escape_string($_POST['body']);
if (isset($_POST['blogId'])) {
$blogId = $_POST['blogId'];
$connection->query("UPDATE blogs SET title = '$title', content = '$body', last_updated = '$date' WHERE id = $blogId");
echo "Your blog has been updated successfully, <a href = 'blogs/" . $blogId . "'>Click to view </a>";
}else{
/*
Create a unique new blog id as follows
Blog ids according to my project should be atleast 4 characters long
*/
$connection->query("INSERT INTO blogs(content, title, date_created, last_updated) VALUES('$body', '$title', '$date', '$date')");
$newBlogSN = $connection->insert_id;
$newBlogID = make_blog_id_from($newBlogSN);// found in funtions.php
$connection->query("UPDATE blogs SET id = '$newBlogID' WHERE sn = $newBlogSN");
//Now let's create the actual page.
$f1 = '$blogID = get_blog_id_from_url();';
$f2_1 = '$sql = $connection->query(blog_select($blogID)); //blog_select(id) is found in functions.php';
$f2_2 = 'if ($sql->num_rows == 0) {';
$f2_3 = 'echo message_for_empty_blog(); // message_for_empty_blog() is found in functions.php';
$f2_4 = '$blog = $sql->fetch_assoc();';
$f2_5 = 'echo "<h1>" . $blog[\'title\'] . "</h1>" .
         "<div class=\'blog-dates\'><span id = \'created\'>Date created: " . 
         good_date($blog[\'date_created\']) . 
         "</span><span id=\'updated\'>Last updated: " . 
         good_date($blog[\'last_updated\']) . 
         "</span></div>" .
         "<div class = \'blog-content\'>" . 
         $blog[\'content\'] . 
         "</div>" .
         "<a href = \'../../delete.php?blogId=" . $blogID . "\' class = \'delete-blog\'>Delete this blog </a>" . 
         "<a href = \'../../editor.php?blogId=" . $blogID . "\' class = \'update-blog\'>Update this blog </a>" .
         "<a title = \'Create new blog\' href=\'../../editor.php\' class=\'add-new\'>+</a>";';
$html = <<<_END
<?php
require '../../functions.php';
require '../../dbconnections.php';
$f1// from functions.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/content.css">

    <!--using FontAwesome---------------->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>

	<title> $title - PANHPZH </title>
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
                    <a href="#">$title</a>
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
                        <a class="categoryPost" href="../../menu/portfolio.php?category=programming#myprojects">Programming</a>
                    </div>
                    <div class="metaTitle">
                        <h1 class="titlePost">$title</h1>
                        <div id="titleDesc">
                            <p class="date"><i class="fas fa-calendar-alt">  $date</i></p>
                            <p class="written">Written by <a href="../../index.php#about">Irfan Hafizh</a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="thumbnailPost">
                        <img src="../../source/images/personalweb_images/program.jpg" alt="">
                    </div>
                    <hr>
                    <div class="article">
                        $body
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
    <script src = "../../js/blogs.js"></script>
</body>
</html>
_END;
$dir = 'blogs/' . $newBlogID;
mkdir($dir, 0777, true);
$f = fopen($dir . '/index.php', 'w') or die();
fwrite($f, $html);
fclose($f);
echo "New blog created successfully <a href = '$dir'>Click to view </a>";
}
}else{
    echo "Nothing to handle";
}