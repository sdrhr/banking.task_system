
   <?php  include'files\overall\overallheader.php'?>
   
   <body>
     <center> <h1> WELLCOME TO MCB BANK </h1></center>
    
   <div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="image5.jpg" style="width:100%">
    <div class="text"> one</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imag2.jpg" style="width:100%">
    <div class="text"> Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images6.png" style="width:100%">
    <div class="text"> Three</div>
  </div>

 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> <div class="sidenav">
     
             <a href="https://www.facebook.com/MCBBankPk"><img  class="ig" src="124010.png" alt=""></a>
            <a href="https://www.mcb.com.pk/about-mcb/profile-of-bank" ><img class="ig" src="download.png" alt=""></a>
           <a href="https://twitter.com/MCBBankPk"> <img  class="ig" src="twitter.png" alt=""></a>
            <a href="https://pk.linkedin.com/company/mcbbankpk"><img class="cc" src="icon_linkedin.png"></a>
            <a href="https://pk.linkedin.com/company/mcbbankpk"><img  class="cc" src="youtuube.png"></a>

</div>
</body>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var  dots= document.getElementsByClassName("dot");
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



   <?php include'files\overall\overallfooter.php'?>
    

