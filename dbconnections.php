<?php
/**
Written on 18/12/2020 by Julius Ekane.
WhatsApp  ~ +971566366808
email ~ ekanejulius7@gmail.com || julius404@outlook.com
website ~ Under construction
You can alter this file as you wish and don't forget to contact me for any clarifications
*/
$db = 'id15677478_personalwebsite';
$dbuser = 'id15677478_panhpzh';
$host = 'localhost';
$password = '4=fXMv@xyoYkq-Cw';
$connection = new mysqli($host, $dbuser, $password, $db);
//EDIT
$blogs_table_exists = $connection->query("SELECT * FROM information_schema.tables WHERE table_schema = '$db' AND
    table_name = 'blogs' LIMIT 1")->num_rows == 1;
if(!$blogs_table_exists){
$connection->query("CREATE TABLE blogs (
  sn int(5) NOT NULL AUTO_INCREMENT,
  id varchar(11) NOT NULL,
  content longtext NOT NULL,
  title text NOT NULL,
  date_created varchar(50) NOT NULL,
  last_updated varchar(50) NOT NULL,
  PRIMARY KEY (sn)
)");
}

// if($connection->query("INSERT INTO blogs(id, content, title, date_created, last_updated) VALUES('0001','<p>Halloo guyy Irfan Hafizh nihhh</p>What is Lorem', 'My new blog 1', '20/12/20, 06:41am', '20/12/20, 06:41am')")) {
//   echo "Inserted";
// } else {
//  echo "Failed";
// }
?>