    // Filter Category JavaScript
    /********************
    I decided to place this part of your script at the top because any dynamic clicking of the buttons that occurs before the definition of your method for toggling the class name will not have it's class name changed.
    Also, we have given each of the buttons an id according to what it displays adding -btn to the end and being careful of typos. --Check myBtnContainer buttons -- This is for a good reason as you will see below
    ********************/
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var button = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < button.length; i++) {
    button[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }

    //create an array of all the categories called all_categories.
    //A user might literally type a crazy query string so we verify
    let all_categories = ['programming', 'game', 'design', '3d', 'all'];
    let fromURL = '<?php echo $category;?>';
    let accepted = all_categories.includes(fromURL) ? fromURL : 'all';

    /*****************
    In the accepted variable, we check if the query string belong to our defined values. If not, we assign 'all' to accepted but if it belongs, then we accept it.
    The accepted should be one of the ids of the myBtnContainer buttons without '-btn' so we need to get this button and dynamically click it as you would do manually. This button will have its class changed because we are below where the method is written - line 222 and filterSelection(parameter) will be called with the appropriate parameter.
    To get the button by its Id, we simply append '-btn' to accept variable and then call js click() method on it as follows
    *****************/
    document.getElementById(accepted + '-btn').click(); 

     //EDIT FILTER CATEGORY
    // JavaScript Filter Category
    function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
    }

    function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
    }

    function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
    }
    element.className = arr1.join(" ");
    }
    /* I sincerely hope this is what you want */