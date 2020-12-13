function myFunction() {
    document.getElementById("reactive").style.display = "none";
    document.getElementById("active").style.display = "block";
  }
$("#Menu a").on("click", function() {
var position = $(this)
.parent().position();
var width = $(this)
.parent().width();
$("#Menu .liquid1").css({ opacity: 1, left: +position.left, width: width });
});
