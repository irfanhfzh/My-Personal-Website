<?php
 //default value
 $category = 'all';
 if(isset($_GET['category']) && !empty($_GET['category'])){
 $category = $_GET['category'];
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Portfolio</title>
 </head>
 <body>
 <div id="displayed"></div>
 <script>
//create an array of all the categories called all_categories.
//A user might literally type a crazy query string so we verify
let all_categories = ['programming', 'game', 'design', '3d', 'all'];
let fromURL = '<?php echo $category;?>';
let accepted = all_categories.includes(fromURL) ? fromURL : 'all';
// In the accepted variable, we check if the query string belong to our defined values. If not, we assign all to accepted but if it belongs, then we accept it.
filterSelection(accepted);
function filterSelection(category) {
    document.getElementById('displayed').innerText = category;
}
</script>
</body>
</html>