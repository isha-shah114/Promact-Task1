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
  if (slideIndex > slides.length) {
    slideIndex = 1
  }

  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
// Slideshow Function finish

// Contact Us Form Validation Function Start
function submitForm(inputEmail) {
  var fName = document.forms["contact"]["fname"].value;
  console.log(fName);
  var lName = document.forms["contact"]["lname"].value;
  console.log(lName);
  var email = document.forms["contact"]["mail"].value;
  console.log(email);
  var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;

  var sub = document.forms["contact"]["subject"].value;
  console.log(sub);

  if (fName == "" && lName == "") 
  {
    text = "Field is empty";
  } 
  else if (sub == "" && email == "") 
  {
    text = "Field is empty";
  }
  else if (phone == "") 
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
      alert("Your First Name : " +fname.value+ "\nYour Last Name : " +lname.value+ "\nYour Email : "+mail.value+ 
      "\nYour Phone No. : "+phno.value+ "\nYour Message : " +subject.value);
      return true;
    }
  }
}
// Contact Us Form Validation Function Finish

function phoneValidation(inputPhone) {
  var phone = document.forms["contact"]["phno"].value;
  console.log(phone);
  var phonePattern = /^[789]\d{9}$/;

}