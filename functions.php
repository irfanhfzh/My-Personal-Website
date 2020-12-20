<?php
/**
Written on 18/12/2020 by Julius Ekane.
WhatsApp  ~ +971566366808
email ~ ekanejulius7@gmail.com || julius404@outlook.com
website ~ Under construction

You can alter this file as you wish and don't forget to contact me for any clarifications
*/
function get_blog_id_from_url(){
/*
    $_SERVER['PHP_SELF'] returns a url like /a/b/c/currentscript.php
	For any blog, this variable would return /blog/blogId/index.php
	Now we split(explode) this value into '/' and return the second but last which is the id of the blog.
*/
$blogIDcheck = explode('/', $_SERVER['PHP_SELF']);
return $blogIDcheck[count($blogIDcheck) - 2];
}
/*
This is trivial as it just returns the SELECT statement using the given blogId
*/
function blog_select($id){
	return "SELECT * FROM blogs WHERE id = '$id'";
}
//In case a blog has been deleted, this is the message that would appear
function message_for_empty_blog(){
	return "Thig blog does no longer exist <br /> <a href = '../'>Go to blogs home page</a> </br /> <a href = '../../editor.php'> Add a new blog</a> <br />";
}
/*
The smallest length of a bogId should be 4 eg. 0001. 
We produce blogId from it's serial number (sn) which is the PRIMARY KEY and it auto increases on every new blog added.
 The sn starts from 1. Given that the length of the sn is less than 4, 
 the function below is used to prepend the appropriate number of 0s to make the length greater than or equal to 4.
  This is then used as blogId.
*/
function make_blog_id_from($id){
$len = strlen($id);
if ($len >= 4) {
	return $id;
}else{
$number_of_iterations = 4 - $len;
$final_id = '';
$start_count = 0;
while($start_count < $number_of_iterations){
	$final_id .= '0';
	$start_count++;
}
$final_id .= $id;
return $final_id;;
}
}
/*
This function spices the date abit.
If today's date is equal to date in the agument, return 'Today'
else if year and month are the same but today's day is more than agument's day by 1, return 'Yesterday'
else return original date.
Always contact me for more explanations
*/
function good_date($date){
$now = date('d/m/y');
$then = explode(',', $date);
if ($then[0] == $now) {
	return 'Today' . $then[1];
}else {
$then_ = explode('/', $then[0]);
$now_ = explode('/', $now);
if ($then_[2] == $now_[2] &&
    $then_[1] == $now_[1] &&
    $now_[0] - $then_[0] == 1) {
	return 'Yesterday' . $then[1];
}else{
	return $date;
}
}
}
?>