 
<html>

<head>
  <title> The Grand Budapest Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/homepageStyle.css">  
</head>

<body>

  <!--header-->
 <div id = "main">

  <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = $path . "/st3project/header.php";
    include($path);
  ?>

  
  <div id="site_content">

    "Welcome To TGB"
    <h3>Hotel TGB welcomes you !! Here hospitality is a way of life. Peace-loving people with a rich cultural heritage and places of natural scenic beauty makes our hotel an ideal place to plan your holiday and business ventures.</h3>

  </div>


  <div id = "slider">

          <!-- slider code -->
 <style>


.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1300px;
  position: relative;
  margin: auto;
 
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
</style>

<div class="slideshow-container">

 <div class="mySlides fade">
  <a href = "gallery.php"><img src="http://localhost/st3project/style/p1.jpg" style="width:100%;height:500px;"></a>
 </div>

<div class="mySlides fade">
  <a href = "gallery.php"><img src="http://localhost/st3project/style/p2.jpg" style="width:100%;height:500px;"></a>
</div>

<div class="mySlides fade">
  <a href = "gallery.php"><img src="http://localhost/st3project/style/p3.jpg" style="width:100%;height:500px;"></a>
</div>

<div class="mySlides fade">
  <a href = "booking.php"><img src="http://localhost/st3project/style/p4.jpg" style="width:100%;height:500px;"></a>
</div>


</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</div>

<div id="article">
  
  <style>

#grid-cell .grid_border{
padding:1px;
}
#grid-cell .grid_border:hover{
padding:0.5px;
border:0.5px solid #D3D3D3;
}


</style>
</table>

</div>
</div>
</body>
</html>
