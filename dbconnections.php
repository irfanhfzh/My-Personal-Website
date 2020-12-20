<?php
/**
Written on 18/12/2020 by Julius Ekane.
WhatsApp  ~ +971566366808
email ~ ekanejulius7@gmail.com || julius404@outlook.com
website ~ Under construction
You can alter this file as you wish and don't forget to contact me for any clarifications
*/
$db = 'personalweb';
$dbuser = 'root';
$host = 'localhost';
$password = '';
$connection = new mysqli($host, $dbuser, '');
$connection->query("CREATE DATABASE IF NOT EXISTS $db");
$connection = new mysqli($host, $dbuser, '', $db);
$connection->query("CREATE TABLE blogs (
  sn int(5) NOT NULL AUTO_INCREMENT,
  id varchar(11) NOT NULL,
  content longtext NOT NULL,
  title text NOT NULL,
  date_created varchar(50) NOT NULL,
  last_updated varchar(50) NOT NULL,
  PRIMARY KEY (sn)
)");
?>