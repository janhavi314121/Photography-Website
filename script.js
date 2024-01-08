const showBtn = document.querySelector('.navBtn');
const topNav = document.querySelector('.top-nav');

showBtn.addEventListener('click', function(){
    if(topNav.classList.contains('showNav')){
        topNav.classList.remove('showNav');
        showBtn.innerHTML = '<i class = "fas fa-bars"></i>';
    } else {
        topNav.classList.add('showNav');
        showBtn.innerHTML = '<i class = "fas fa-times"></i>';
    }
});
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }


function myFunction1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction5() {
    var dots = document.getElementById("dots5");
    var moreText = document.getElementById("more5");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction6() {
    var dots = document.getElementById("dots6");
    var moreText = document.getElementById("more6");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction7() {
    var dots = document.getElementById("dots7");
    var moreText = document.getElementById("more7");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction8() {
    var dots = document.getElementById("dots8");
    var moreText = document.getElementById("more8");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function myFunction9() {
    var dots = document.getElementById("dots9");
    var moreText = document.getElementById("more9");
    var btnText = document.getElementById("myBtn");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }




  

/* Lightbox */
var lightbox = new SimpleLightbox('.gallery a', { /* options */ });