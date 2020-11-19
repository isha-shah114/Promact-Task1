<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="responsive.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>My Homepage</title>
   </head>
   <body>
   	<!-- Header start -->
      <div class="topnav" id="myTopnav">
         <img src="images/logo.png" class="logo-size">
         <div class="right-menu">
            <a href="#home" class="active mt-xs-15">Home</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contact</a>
         </div>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i>
         </a>
      </div>
      <!-- Header finish -->

      <!-- Slideshow start -->
      <div class="slideshow-container">
         <div class="mySlides fade">
            <img src="images/image-1.jpg">
         </div>
         <div class="mySlides fade">
            <img src="images/image-2.jpg">
         </div>
         <div class="mySlides fade">
            <img src="images/image-3.jpg">
         </div>
      </div>
      <!-- Slideshow finish -->

      <!-- About Us start -->
      <div class="animated animatedFadeInUp fadeInUp">
         <h1>About Us</h1>
         <div class="flex-container">
            <div class="flex-item-left">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="flex-item-right">
               <img src="images/about.jpg" class="about-img">
            </div>
         </div>
      </div>
      <!-- About Us finish -->

      <!-- Contact Us start -->
      <div class="animated-contact">
         <h1>Contact Us</h1>
         <div class="flex-container-contact">
            <div class="flex-item-left">
               <form name="contact">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name" required="">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name" required="">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" placeholder="Your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." rows="5" required=""></textarea>
                  <input type="submit" value="Submit" onclick="submitForm(document.contact.email)">
               </form>
            </div>

            <!-- Map start -->
            <div class="flex-item-right">
               <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d118108.2260058433!2d73.13736339991192!3d22.3202996596318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x395fc5e9df5d1845%3A0xa12efe875e297e6f!2spromact!3m2!1d22.280679499999998!2d73.1903517!5e0!3m2!1sen!2sin!4v1605699373243!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" class="map-size"></iframe>
            </div>
            <!-- Map finish -->
         </div>
      </div>
      <!-- Contact Us finish -->

      <!-- Footer start -->
      <footer>
         <p>Copyright ©2020 Demo All Rights Reserved.</p>
      </footer>
      <!-- Footer finish -->

      <!-- Script start -->
      <script>
      	// Header Function Start
         function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
             x.className += " responsive";
           } else {
             x.className = "topnav";
           }
         }
         // Header Function Finish

         // Slideshow Function Start
         var slideIndex = 0
         showSlides();
         
         function showSlides() {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
           }
           slideIndex++;
           if (slideIndex > slides.length) {slideIndex = 1}    
           
           slides[slideIndex-1].style.display = "block";  
           setTimeout(showSlides, 3000); // Change image every 2 seconds
         }
         // Slideshow Function finish

         // Contact Us Form Validation Function Start
         function submitForm(inputEmail) {
         	var fName = document.forms["contact"]["fname"].value;
         	var lName = document.forms["contact"]["lname"].value;
         	var email = document.forms["contact"]["email"].value;
         	var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
         
         	var sub = document.forms["contact"]["subject"].value;
         
         	if (fName == "" && lName == "")
         	{
         		text = "Field is empty";
         	}
         
         	else if (sub == "" && email == "")
         	{
         		text = "Field is empty";
         	}
         	
         	else if (email != "")
         	{
         		if (!inputEmail.value.match(pattern)) 
         		{	
         			return false;
         		}
         		else
         		{
         	  		alert("Your details has been submitted");
         	  		return true;
         		}
         	} 
         }
         // Contact Us Form Validation Function Finish
      </script>
      <!-- Script finish -->
   </body>
</html>