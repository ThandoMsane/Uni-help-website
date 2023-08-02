//Uni-Help Site Javascript

//Open pop Up form display
function displayForm(){
    document.getElementById("popup-form").style.display = "block";
}

//Close form pop up form
function closeForm(){
    document.getElementById("popup-form").style.display = "none";
}

  /* Toggle mobile Navigation */
  let navLinks= document.getElementById("navLinks");
  
    /* Opening mobile navigation */
    function openNav(argument) {
      navLinks.style.display = "block";
      navLinks.style.right = "0px";
    }

    /* Close mobile navigation */
     function closeNav(argument) {
      navLinks.style.right = "-200px";
      navLinks.style.display = "block";
    }