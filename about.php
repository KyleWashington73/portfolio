<?php 
/** 
 * Template Name: About 
 * 
 * @package Portfolio 
 * 
 */ 
?> 
<?php get_header(); ?>

<?php  do_action("my_fancy_action") ?>

<!-- This is the start of hero section -->
       <main id="topBtn">
        <div class="container-1">
            <!-- <h1>Hello World</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            
        </div>


    </main>
    <!-- This is the end of hero section --> 
    
    <!-- This is the start of the slideshow -->


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
<!-- This is the end of the slideshow -->

<!-- This is the start of info section -->
<section class="info-section" id="aboutSection">
        <div class="infoBox">
            <img src="http://portfolio.local/wp-content/uploads/2022/06/img_snow_wide.jpg" alt="beach chairs with umberellas on a beach." height="490px" width="50%" style="border: 1px solid #000;">
        </div>
        <div class="infoBox infoTextbox">
         <!-- <h2>BOOK YOUR DREAM VACATION TODAY</h2> -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius hic voluptatibus vel cum nisi nulla deleniti aspernatur doloremque libero dolor. Earum explicabo libero atque neque architecto perspiciatis aliquam quas est.
            Magnam laborum sed dolorem non maxime placeat dolore possimus nisi architecto mollitia, officia harum atque soluta laboriosam voluptas tenetur aliquid dignissimos, dicta minus repellat quis. Illum fugit suscipit molestiae doloremque.
            Fuga earum totam harum unde asperiores vitae at adipisci in reprehenderit debitis, quo nisi? Architecto vitae voluptatibus maiores! Sunt vitae nulla nostrum repudiandae dignissimos dolorum deserunt, expedita minima veritatis cupiditate?
           </p>
        </div>
    </section>
    <!-- This is the end of info section -->
    
    <!-- This is the start of banner section -->
    <section class="bannerSection" >
        <div class="bannerImg">
            <div class="bannerCopy">
              <!--  <h3>Book Today, Travel Tomorrow</h3> -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sit voluptate beatae quisquam placeat aliquid non suscipit quibusdam!</p>
                <div class="bannerBtn">
                 <!--   <a href="#">BOOK</a>  -->
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- This is the end of banner section -->

    <!-- This is the start of footer -->
<footer>
        <div class="footerBox">
            <ul>
                <a href="/index.html"><li>Home</li></a>
                <a href="/about.html"><li>About</li></a>
                <a href="/contact.html"><li>Contact</li></a>
            </ul>

        </div>
        <div class="footerBox">
            <p>&copy; W4B Neptali Montez</p>
        </div>
        <div class="footerBox">
            <div class="socialMedia">
                <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter-square fa-2x"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <!-- This is the end of footer -->



