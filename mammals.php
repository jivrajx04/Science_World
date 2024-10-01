<html>
  <?php

  ?>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./files/css/mammals.css">
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
<div class="navbar2">
<p class="p1">MAMMALS</p>
</div>
<div class="mammal1">
    <img src="./files/images/elephant.jpg" class="mam1">
    <p class="p2"><b>NAME:</b>Elephant<br><br><b>SCIENTIFIC NAME:</b> Elephantidae<br><br><b>ORIGIN:</b>Asia and Africa<br><br><b>LIFESPAN:</b>60 to 70 Years</p>
    <p class="p3">Elephants are the largest land mammals on earth and have distinctly massive bodies,<br> large ears, and long trunks. They use their trunks to pick up objects, trumpet warnings,<br> greet other elephants, or suck up water for drinking or bathing, among other uses.</p>
    <p class="p4">Both male and female African elephants grow tusks and each individual can either be left- or right-tusked, and the one they use more is usually smaller because of wear and tear. Elephant tusks serve many purposes. These extended teeth can be used to protect the elephant's trunk, lift and move objects, gather food, and strip bark from trees. They can also be used for defense. During times of drought, elephants even use their tusks to dig holes to find water underground.</p>
    <p class="p5">Two genetically different African species exist: the savanna elephant and the forest elephant, with a number of characteristics that differentiate them both. The African savanna elephant is the largest elephant species, while the Asian forest elephant and the African forest elephant are of a comparable, smaller size.</p>

</div>

<div class="mammal2">
    <img src="./files/images/deer.jpg" class="mam2">
    <p class="p2"><b>NAME:</b>Deer<br><br><b>SCIENTIFIC NAME:</b> Cervidae<br><br><b>ORIGIN:</b>Asia and Europ<br><br><b>LIFESPAN:</b>20 to 30 Years</p>
    <p class="p3">Deer or true deer are hoofed ruminant mammals forming the family Cervidae.<br> The two main groups of deer are the Cervinae, including the muntjac, the elk (wapiti), the red deer, and the fallow deer; and the Capreolinae, including the reindeer (caribou), white-tailed deer, the roe deer, and the moose.</p>
    <p class="p4">Male deer of all species (except the water deer) as well as female reindeer, grow and shed new antlers each year. In this they differ from permanently horned antelope, which are part of a different family (Bovidae) within the same order of even-toed ungulates (Artiodactyla).

        The musk deer (Moschidae) of Asia and chevrotains (Tragulidae) of tropical African and Asian forests are separate families that are also in the ruminant clade Ruminantia; they are not especially closely related to Cervidae</p>
    <p class="p5">Deer appear in art from Paleolithic cave paintings onwards, and they have played a role in mythology, religion, and literature throughout history, as well as in heraldry, such as red deer that appear in the coat of arms of Åland.[2] Their economic importance includes the use of their meat as venison, their skins as soft, strong buckskin, and their antlers as handles for knives. Deer hunting has been a popular activity since the Middle Ages and remains a resource for many families today.</p>
    
</div>

<div class="mammal3">
    <img src="./files/images/fox.jpg" class="mam3">
    <p class="p2"><b>NAME:</b>Fox<br><br><b>SCIENTIFIC NAME:</b>Vulpes vulpes<br><br><b>ORIGIN:</b>Asia and Africa<br><br><b>LIFESPAN:</b>4 to 5 Years</p>
    <p class="p3">Foxes are small to medium-sized, omnivorous mammals belonging to several genera of the family Canidae. They have a flattened skull, upright triangular ears, a pointed, slightly upturned snout, and a long bushy tail (or brush).</p>
    <p class="p4">Twelve species belong to the monophyletic "true foxes" group of genus Vulpes. Approximately another 25 current or extinct species are always or sometimes called foxes; these foxes are either part of the paraphyletic group of the South American foxes, or of the outlying group, which consists of the bat-eared fox, gray fox, and island fox.[1]</p>
    <p class="p5">Foxes live on every continent except Antarctica. The most common and widespread species of fox is the red fox (Vulpes vulpes) with about 47 recognized subspecies.[2] The global distribution of foxes, together with their widespread reputation for cunning, has contributed to their prominence in popular culture and folklore in many societies around the world. The hunting of foxes with packs of hounds, long an established pursuit in Europe, especially in the British Isles, was exported by European settlers to various parts of the New World.</p>
    
</div>

<div class="mammal4">
    <img src="./files/images/jiraf.jpg" class="mam4">
    <p class="p2"><b>NAME:</b>Jiraffe<br><br><b>SCIENTIFIC NAME:</b>Giraffa<br><br><b>ORIGIN:</b>Asia and Africa<br><br><b>LIFESPAN:</b>25 to 30 Years</p>
    <p class="p3">The giraffe is a large African hoofed mammal belonging to the genus Giraffa. It is the tallest living terrestrial animal and the largest ruminant on Earth. Traditionally, giraffes were thought to be one species, Giraffa camelopardalis, with nine subspecies. Most recently, researchers proposed dividing them into up to eight extant species due to new research into their mitochondrial and nuclear DNA, as well as morphological measurements. </p>
    <p class="p4">The giraffe's chief distinguishing characteristics are its extremely long neck and legs, its horn-like ossicones, and its spotted coat patterns. It is classified under the family Giraffidae, along with its closest extant relative, the okapi. Its scattered range extends from Chad in the north to South Africa in the south, and from Niger in the west to Somalia in the east. Giraffes usually inhabit savannahs and woodlands. Their food source is leaves, fruits, and flowers of woody plants, primarily acacia species, which they browse at heights most other herbivores cannot reach.</p>
    <p class="p5">Lions, leopards, spotted hyenas, and African wild dogs may prey upon giraffes. Giraffes live in herds of related females and their offspring, or bachelor herds of unrelated adult males, but are gregarious and may gather in large aggregations. Males establish social hierarchies through "necking", combat bouts where the neck is used as a weapon. Dominant males gain mating access to females, which bear sole responsibility for raising the young.</p>
    
</div>

<div class="navbar3">
    <p class="p6">EXPLORE MORE</p>
    
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
    <a href="./files/html/feedback.html">Feedback</a><br><br>
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
  <a href="./files/html/signup.html"><input type="button"  value="Sign Up"></a>
  </div>
</body>
</html>