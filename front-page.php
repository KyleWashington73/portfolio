<?php 

function callback(){
  
  echo "<h1>This Worked!</h1>";
}

add_action( "my_fancy_action", function(){?> <h1>This Worked Again!</h1><?php } );




/** 
 * Template Name: Home 
 * 
 * @package Portfolio 
 * 
 */ 
?> 
 <?php get_header(); ?> 

<?php  do_action("my_fancy_action")?>

<!-- This is the start of hero section -->
<main id="topBtn">
        <div class="hero-text">
            <h1>Hello World!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
        </div>


    </main>
    <!-- This is the end of hero section --> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://portfolio.local/wp-content/uploads/2022/06/img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="http://portfolio.local/wp-content/uploads/2022/06/img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="http://portfolio.local/wp-content/uploads/2022/06/img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 3;
showSlides(slideIndex);

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
</script>

<?php get_template_part('template-parts/info-section')?>

<?php get_template_part('template-parts/banner')?>

