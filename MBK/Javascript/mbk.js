var slideIndex = 0;
showSlides();
//add the global timer variable
var slides,dots,timer;

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    //put the timeout in the timer variable
    timer = setTimeout(showSlides, 5000); // Change image every 8 seconds
}

function plusSlides(position) {
    //clear/stop the timer
    clearTimeout(timer);
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    //create a new timer
    timer = setTimeout(showSlides, 5000);
}

function currentSlide(index) {
    //clear/stop the timer
    clearTimeout(timer);
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    //set the slideIndex with the index of the function
    slideIndex = index;
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
    //create a new timer
    timer = setTimeout(showSlides, 5000);
}


function validate() {
  var username = document.getElementById("Mbk_email_txtbox").value;
  var password = document.getElementById("Mbk_password_txtbox").value;
  if (username == null || username == "") {
      alert("Please enter the username.");
      return false;
  }
  if (password == null || password == "") {
      alert("Please enter the password.");
      return false;
  }
  alert('Login successful');
  
}

function validate1() {
  var username = document.getElementById("Mbk_email_txtbox").value;
  if (username == null || username == "") {
      alert("Please enter the username.");
      return false;
  }

  alert('Login successful');
  
}


function validate2() {
  var firstname = document.getElementById("Mbk_fn_txtbox").value;
  var lastname = document.getElementById("Mbk_ln_txtbox").value;
  var email = document.getElementById("Mbk_rgemail_txtbox").value;
  var password = document.getElementById("Mbk_rgpassword_txtbox").value;
  if (firstname == null || firstname == "") {
      alert("Please enter the first name.");
      return false;
  }

  if (lastname == null || lastname == "") {
    alert("Please enter the last name.");
    return false;
  }

  if (email == null || email == "") {
    alert("Please enter the email address.");
    return false;
  }

  if (password == null || password == "") {
      alert("Please enter the password.");
      return false;
  }
  alert('Login successful');
  
}

  // Zoom in/out clothing img
  $('.image').click(function() {
    $(this).toggleClass('normal-zoom zoom-in');
  });
  
  $('.image').on('mousemove', function(event) {
    // This gives you the position of the image on the page
    var bbox = event.target.getBoundingClientRect();
  
    // Then we measure how far into the image the mouse is in both x and y directions
    var mouseX = event.clientX - bbox.left;
    var mouseY = event.clientY - bbox.top;
  
    // Then work out how far through the image as a percentage the mouse is
    var xPercent = (mouseX / bbox.width) * 100;
    var yPercent = (mouseY / bbox.height) * 100;
  
    // Then we change the `transform-origin` css property on the image to center the zoom effect on the mouse position
    //event.target.style.transformOrigin = xPercent + '% ' + yPercent + '%';
    // It's a bit clearer in jQuery:
    $(this).css('transform-origin', (xPercent+'% ' + yPercent+ '%') );
    // We add the '%' units to make sure the string looks exactly like the css declaration it becomes.
  
  });
  
  // If you want it to automatically trigger on hover
  $('.image').on('mouseenter', function() {
    $(this).addClass('zoom-in');
    $(this).removeClass('normal-zoom');
  });
  
  // and stop when not hovering
  $('.image').on('mouseleave', function() {
    $(this).addClass('normal-zoom');
    $(this).removeClass('zoom-in');
  });


