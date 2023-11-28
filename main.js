window.onscroll = function() {
  showScrollButton();
  toggleBottom();
};

function showScrollButton() {
  var scrollBtn = document.getElementById('scrollDownBtn');

  // Hiển thị nút khi cuộn xuống nửa trang
  if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
      scrollBtn.style.display = 'block';
  } else {
      scrollBtn.style.display = 'none';
  }
}

function scrollToTop() {
  window.scrollTo({
      top: 0,
      behavior: 'smooth'
  });
}

function toggleSubMenu(element) {
  var submenu = element.querySelector(".submenu");
  submenu.classList.toggle("active");
  element.classList.toggle("active");
}

var prevScrollpos = window.pageYOffset;
function toggleBottom() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
      document.querySelector(".bottom").style.display = "flex";
  } else {
      document.querySelector(".bottom").style.display = "none";
  }
  prevScrollpos = currentScrollPos;
};

//---------SlideShow-------------//
let slideIndex = 1;
showSlides(slideIndex);
let autoSlideInterval = setInterval(function() {
plusSlides(1);
}, 4000);


function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}