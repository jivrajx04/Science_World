<html>
  <?php

  ?>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./files/css/video.css">
<div class="navbar">
     
<div id="search" class="search1">
    <span class="closebtn1" onclick="closeSearch()" title="Close Overlay">x</span>
    <div class="search2">
      <form action="search.php" method="post">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
  <button class="openBtn" onclick="openSearch()"><i class="fa fa-search">Search</i></button>
  
  <script>
  function openSearch() {
    document.getElementById("search").style.display = "block";
  }
  
  function closeSearch() {
    document.getElementById("search").style.display = "none";
  }
  </script>

<div class="dropdown">
  <a href="index.php"> <button onclick="myFunction()" class="dropbtn"><i class="fa fa-home">Home</i></button></a>
</div>
</div>
<div class="navbar1">
  <img class="active1" src="./files/images/logo4.png">
  <a href="images.php">Images</a>
  <a href="video.php">Videos</a>
  
    
    
  <div class="subnav">
    <button class="subnavbtn">Animals <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="mammals.php">MAMMALS</a>
      <a href="bird.php">BIRDS</a>
      <a href="reptile.php">REPTILES</a>
      <a href="marine.php">MARINE</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Explore More <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="plants.php">PLANTS</a>
      <a href="history.php">HISTORY</a>
      <a href="space.php">SPACE</a>
    </div>
  </div>
</div>
<h2>Videos</h2>
<div class="navbar2">
  <div class="img1">
    <video src="./files/videos/tigervid.mp4" class="avatar2" width="320" height="240"  onclick="myFunction(this);"></video>
    <video src="./files/videos/fishvid.mp4" class="avatar2"  width="320" height="240"  onclick="myFunction(this);"></video>
    <video src="./files/videos/snaevid.mp4" class="avatar2"  width="320" height="240"  onclick="myFunction(this);"></video>
    <video src="./files/videos/spacevideo (1).mp4" class="avatar2"  width="320" height="240" onclick="myFunction(this);"></video>
    <video src="./files/videos/historyvid.mp4" class="avatar2"  width="320" height="240"  onclick="myFunction(this);"></video>
  </div>
  <div class="caption">
    <p class="cap1">Tiger(Bengal Tiger)</p>
    <p class="cap2">String-ray fish</p>
    <p class="cap3">Snake</p>
    <p class="cap4">Space</p>
    <p class="cap5">Giza Pyramid</p>
  </div>
  <div class="container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <video id="expandedVid" style="width:119%" height="600px"  autoplay></video>
  </div>
  
  <script>
  function myFunction(vid) {
    var expandVid = document.getElementById("expandedVid");
    expandVid.src = vid.src;
    expandVid.parentElement.style.display = "block";
  }
  </script>
  <p class="p1">VIDEOS</p>
</div>
<p class="p2">ANIMALS</p>
<div class="block1">
  <a href="mammals.php"><img src="./files/images/mammal.jpg"  class="avatar3"></a>
  <a href="bird.php"><img src="./files/images/peacock.jpg" class="avatar3"></a>
  <a href="reptile.php"><img src="./files/images/reptile1.jpg" class="avatar3"></a>
  <a href="marine.php"><img src="./files/images/marine.jpg" class="avatar3"></a>
  <div class="caption1">
    <b class="b1">Mammals</b>
    <b class="b2">Birds</b>
    <b class="b3">Reptiles</b>
    <b class="b4">Marine</b>
  </div>
</div>
<p class="p3">EXPLORATION</p>
<div class="block2">
  <a href="plant.php"><img src="./files/images/plant2.jpg"  class="avatar4A"></a>
  <a href="history.php"><img src="./files/images/History.jpg" class="avatar4"></a>
  <a href="space.php"><img src="./files/images/space.jpg" class="avatar4"></a>
  <div class="caption2">
    <b class="b5">Plants</b>
    <b class="b6">History</b>
    <b class="b7">Space</b>
  </div>
</div>


<div class="navbar3">
  <p class="p4">EXPLORE MORE</p>
  
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="./files/images/tiger.jpg" style="width:80%">
    <div class="text">Bengal Tiger</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="./files/images/peacock.jpg" style="width:80%">
    <div class="text">Peacock</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="./files/images/plant2.jpg" style="width:80%">
    <div class="text">Flowers</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="./files/images/space.jpg" style="width:80%">
    <div class="text">Space</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="./files/images/History.jpg" style="width:80%">
    <div class="text">History</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="./files/images/plant.jpg" style="width:80%">
    <div class="text">Plant</div>
  </div>
  
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

<script>
let slideIndex = 1;
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
<div class="footer">
  <a href="ACS.php">Contact us</a><br><br>
  <a href="feedback.html">Feedback</a><br><br>
  <a href="ACS.php">Services</a><br><br>
  <a href="ACS.php">About</a><br><br>
  <a href="ACS.php">Downloads</a><br><br>
  <div class="foot">
    <h3>Social Platforms</h3>
    <p > Facebook</p>
    <p >Twitter</p>
    <p >youtube</p>
    <p >Instagram</p>
  </div>
  <div class="foot1">
  <input type="text" placeholder="Enter your e-mail address" name="email">
</div>
</div>
<a href="signup.html"><input type="button"  value="Sign Up"></a>
</div>
</body>
</html>