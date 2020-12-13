<?php
  //default value
  $category = 'all';
  if(isset($_GET['category']) && !empty($_GET['category'])){
  $category = $_GET['category'];
  }

?>