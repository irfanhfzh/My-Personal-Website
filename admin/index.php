<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/blogs.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="../editor.php" class="btn btn-primary">Create a Content Portfolio</a>
    </p>
<!-- ALL BLOGS -->
<?php  
require '../dbconnections.php';
require 'functions.php';
include 'header.html';
// $sql = $connection->query(blog_select($blogID)); //blog_select(id) is found in functions.php
$sql = $connection->query("SELECT * FROM blogs ORDER BY sn DESC");
if ($sql->num_rows > 0) {
	echo "<h1>All blogs</h1>";
	while ($row = $sql->fetch_assoc()) {
	 echo trim("<a class = 'blog-link' href = '../blogs/" . $row['id'] . "'>" . 
		   "<div class = 'blog-hint'>" . $row['title'] . "</div>" .
		   "<a href = '../../delete.php?blogId=" . $row['id'] . "' class = 'delete-blog'>Delete this blog </a>" . 
		   "<a href = '../../editor.php?blogId=" . $row['id'] . "' class = 'update-blog'>Update this blog </a>" .
	       "<span>" . good_date($row['date_created']) . "</span>" .
	       "</a>");
	}
}else{
	echo "No blog created yet.. Click on the bottom right icon to create a new blog";
}
?>
<a href="../editor.php" class="add-new">+</a>
</body>
</html>