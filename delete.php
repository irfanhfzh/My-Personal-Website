<?php
/**
Written on 18/12/2020 by Julius Ekane.
WhatsApp  ~ +971566366808
email ~ ekanejulius7@gmail.com || julius404@outlook.com
website ~ Under construction

You can alter this file as you wish and don't forget to contact me for any clarifications
*/
require 'dbconnections.php';
$actions = "<a href = 'blogs'>Go to blogs home page</a> </br /> <a href = 'editor.php'> Add a new blog</a> <br />";
if (isset($_GET['blogId']) && !empty($_GET['blogId'])) {
 $blogId = $_GET['blogId'];
 $sql = $connection->query("SELECT sn FROM blogs WHERE id = '$blogId'");
      if ($sql->num_rows > 0) {
      $connection->query("DELETE FROM blogs WHERE id = '$blogId'");
      echo "Blog has been deleted successfully <br />";
   	  echo $actions;
   }else{
   	echo "<b style='color:red'>Blog may have already been deleted because we couldn't find it!</b> <br />";
    echo $actions;
  }
}else{
	echo "Nothing to delete <br>";
	echo "$actions";
}
?>