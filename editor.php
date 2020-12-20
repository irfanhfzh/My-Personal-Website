<?php
/**
Written on 18/12/2020 by Julius Ekane.
WhatsApp  ~ +971566366808
email ~ ekanejulius7@gmail.com || julius404@outlook.com
website ~ Under construction

You can alter this file as you wish and don't forget to contact me for any clarifications
*/
require 'dbconnections.php';
$forupdate = false;
$title = 'Title of your new blog';
$body = '';
$blogId;
if (isset($_GET['blogId']) && !empty($_GET['blogId'])) {
 $blogId = $_GET['blogId'];
 $sql = $connection->query("SELECT title, content FROM blogs WHERE id = '$blogId'");
      if ($sql->num_rows > 0) {
     $forupdate = true;
     $row = $sql->fetch_assoc();
     $title = $row['title'];
     $body = $row['content'];
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editor</title>
	<style>
		#tools{
			background: rgba(220,220,220,0.5);
			width: 98%;
			padding: 6px;
			white-space: nowrap;
			overflow-x: auto;
		}
		#tools button{
			background: white;
			border: none;
			font-family: monospace;
			font-size: 1.5em;
			margin-right: 5px;
		}
		form{
			display: block;
			width: 97%;
		}
		form input{
			display: block;
		}
		form textarea, form input[type = 'text'], form input[type = 'submit']{
			width: inherit;
			border-radius: 10px;
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.3);
			border: none;
			min-height: 200px;
			resize: none;
			transition: 0.3s box-shadow;
			margin: 10px;
			padding: 6px;
		}
		form input[type = 'text'], form input[type = 'submit']{
			border-radius: 4px;
			min-height: unset;
			font-size: 1.2em;
		}
		form textarea:focus, form input[type = 'text']:focus, form input[type = 'submit']:hover{
			outline: none;
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.8);
		}
		form input[type = 'submit']{
            width: unset;
		}
		#preview{
			width: 99%;
			background: whitesmoke;
			font-size: 1.1em;
			padding: 5px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/blogs.css">
</head>
<body>
<div id="tools">
	<!-- This is where we have our tools for decorations. Add as many as you can when you understand the function-->
	<button title="Bold text" onclick="insertMetachars('&lt;strong&gt;','&lt;\/strong&gt;');"><strong>B</strong></button> 
	<button title="Italics" onclick="insertMetachars('&lt;em&gt;','&lt;\/em&gt;');"><em>I</em></button> 
	<button title="Underline" onclick="insertMetachars('&lt;u&gt;','&lt;\/u&gt;');"><u>U</u></button> 
	<button title="Heading" onclick="insertMetachars('&lt;h1&gt;','&lt;\/h1&gt;');"><b>H</b></button> 
	<button title="Super script" onclick="insertMetachars('&lt;sup&gt;','&lt;\/sup&gt;');">X<sup>1</sup></button> 
	<button title="Sub script" onclick="insertMetachars('&lt;sub&gt;','&lt;\/sub&gt;');">X<sub>1</sub></button> 
	<button title="Strike through words" onclick="insertMetachars('&lt;strike&gt;','&lt;\/strike&gt;');"><strike>abc</strike></button> 
	<button title="Paragraph" onclick="insertMetachars('\n&lt;p&gt;\n','\n&lt;\/p&gt;\n');">P</button>
	<button title="Link" onclick="var newURL=prompt('Enter the full URL for the link');if(newURL){insertMetachars('&lt;a target = \'_blank\' href=\u0022'+newURL+'\u0022&gt;','&lt;\/a&gt;');}else{document.myForm.myTxtArea.focus();}">URL</button>  
	<button title="Codes" onclick="insertMetachars('\n&lt;code&gt;\n','\n&lt;\/code&gt;\n');">&lt;/&gt;</button>
	<button title="You can add your own from my examples, I end here">etc..</button>
	<!-- End of tools -->
</div>
<form name="myForm" action="handler.php" method="post" onsubmit="return validate(this)">
<?php echo $forupdate? ("<input type = 'text' style='visibility:hidden;height:1px;overflow:hidden' name = 'blogId' value = '" . $blogId . "'>") : '';?>
<input type="text" name="title" style="display: block;margin-top: 10px;" placeholder="Title of your blog" value="<?php echo $forupdate? $title : 'My new blog';?>">
<textarea placeholder="Start typing your new bog here" name="body" rows="10" cols="50" onkeyup="showPreview(this)" onkeypress = "suggestTools(event)"><?php echo $body; ?>
</textarea>
<input type="submit" name="submit" value="<?php echo $forupdate? 'Update' : 'Create'; ?>">
</form>
<h3>Preview</h3>
<div id="preview">
  <?php echo $body; ?>
</div>
<script>
function insertMetachars(sStartTag, sEndTag) {
  var bDouble = arguments.length > 1, 
  oMsgInput = document.myForm.body, 
  nSelStart = oMsgInput.selectionStart, 
  nSelEnd = oMsgInput.selectionEnd, 
  sOldText = oMsgInput.value;
  oMsgInput.value = sOldText.substring(0, nSelStart) + (bDouble ? sStartTag + sOldText.substring(nSelStart, nSelEnd) + sEndTag : sStartTag) + sOldText.substring(nSelEnd);
  oMsgInput.setSelectionRange(bDouble || nSelStart === nSelEnd ? nSelStart + sStartTag.length : nSelStart, (bDouble ? nSelEnd : nSelStart) + sStartTag.length);
  oMsgInput.focus();
  document.getElementById('preview').innerHTML = oMsgInput.value;
}
function showPreview(el) {
	document.getElementById('preview').innerHTML = el.value;
}
function suggestTools(evt) {
let key = evt.key;
if (key == 'Enter') {
	evt.preventDefault();
   insertMetachars('<p>','<\/p>');
}
}
function validate(form) {
	if (form.title.value.trim() == '' ||
		form.body.value.trim() == ''){
		alert('All fields are required');
	    return false;
     } else {
       	return true;
   }
}
</script>
</body>
</html>