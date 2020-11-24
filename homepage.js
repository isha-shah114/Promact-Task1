// Header Function Start
var current = document.getElementById('default');

  function activeLink(link)
  {
     if (current !== null)
     {
         current.className = "";
     }
     link.className = "active";
     current = link;
  }

function hamburgerMenu() {
  var menu = document.getElementById("navigation");
  if (menu.className === "topnav") {
    menu.className += " responsive";
  } else {
    menu.className = "topnav";
  }
}
// Header Function Finish

// Slideshow Function Start
var imageSlides = document.getElementsByClassName('imageSlides');
var leftArrow = document.getElementById('leftArrow');
var rightArrow = document.getElementById('rightArrow');
var counter = 0;

function hideImages() {
  for (var i = 0; i < imageSlides.length; i++) {
    imageSlides[i].classList.remove('visible');
  }
}

function imageLoop() {
  var currentImage = imageSlides[counter];
  currentImage.classList.add('visible');
  counter++;
}

function arrowClick(e) {
  var target = e.target;
  if (target === leftArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    if (counter == 1) {
      counter = (imageSlides.length - 1);
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 3000);
    } else {
      counter--;
      counter--;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 3000);
    }
  } 
  else if (target === rightArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    if (counter === imageSlides.length) {
      counter = 0;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 3000);
    } else {
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 3000);
    }
  }
}

leftArrow.addEventListener('click', arrowClick);
rightArrow.addEventListener('click', arrowClick);

function slideshow() {
  if (counter < imageSlides.length) {
    imageLoop();
  } else {
    counter = 0;
    hideImages();
    imageLoop();
  }
}

setTimeout(slideshow);
var imageSlideshowInterval = setInterval(slideshow, 3000);
// Slideshow Function finish

// Contact Us Form Validation Function Start
function submitForm() {
  var fName = document.forms["contact"]["fname"].value;
  console.log(fName);
  var lName = document.forms["contact"]["lname"].value;
  console.log(lName);
  var email = document.forms["contact"]["mail"].value;
  console.log(email);
  var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
  var phone = document.forms["contact"]["phno"].value;
  console.log(phone);
  var patternPhno = /^\d{10}/;
  var gender = document.forms["contact"]["gender"].value;
  console.log(gender);
  var skill = document.getElementsByClassName('skills');
  console.log(skill);
  var sub = document.forms["contact"]["subject"].value;
  console.log(sub);

  var checkedValue = []; 
  var i, j=0;
  var skills;
  
  if (fName === "" || lName === "" || email === "" || phone === "" || sub === "")
  {
    alert("Your form field is empty");
  }

  else if (pattern.test(email) === false || patternPhno.test(phone) === false) 
  {
    alert("Enter valid Email address or check format of phone number");
  }

  else if (checkedValue == "") 
  {
    for(i=0; i<skill.length; ++i)
    {
      if(skill[i].checked)
      {
        checkedValue[j] = skill[i].value;
        j++;
      }
    }
    if (checkedValue.length > 0) 
    {
      skills = checkedValue.toString();
    }
   else
   {
     alert("Please select checkboxes");
   } 
  }

  if (fName !== "" && lName !== "" && email !== "" && phone !== "" && sub !== "" && pattern.test(email) === true && patternPhno.test(phone) === true && skills !== undefined) 
  {
    alert("Your First Name : " +fname.value+ "\nYour Last Name : " +lname.value+ "\nYour Email : "+mail.value+ 
        "\nYour Phone No. : "+phno.value+ "\nGender : " +gender+ "\nSkill : " +skills+ "\nYour Message : " +subject.value);
  }
}
// Contact Us Form Validation Function Finish