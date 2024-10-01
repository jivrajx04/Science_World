
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./files/css/index1.css">
   <?php
   
   ?> 
    <body>
    
    <div class="navbar">
      <a class="active" href="index1.html"><i class="fa fa-fw fa-home"></i> Home</a>
      
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
    
      <a href="ACS.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
      
    <button onclick="document.getElementById('mod').style.display='block'" style="width:auto;">
    <i class="fa fa-fw fa-user"></i> Login</button>
    
    <div id="mod" class="modal">
      
      <form class="modal1 animate" action="login.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('mod').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="./files/images/avatar.png" alt="Avatar" class="avatar">
        </div>
    
        <div class="container1">
         <br> <label><b>Username</b></label>
          <input type="text" class="text2" placeholder="Enter Username" name="uname"><br>
    
          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw"><br>
            
          <button type="submit">Login</button>
        </div>
    
        <div class="container1" style="background-color:#f1f1f1; height: 20%;">
          <button type="button" onclick="document.getElementById('mod').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#" style="color: red;">Forgot password?</a><br>
            <a href="signup.html" style="color: red;">Create account</a>
          </span>
        </div>
      </form>
    </div>
    
    <script>
    // Get the modal
    var modal = document.getElementById('mod');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    </div>
    
    
    <div class="navbar1">
        <img class="active1" src="./files/images/logo4.png">
      </div>
    
      
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Menu</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="ACS.php">About</a>
          <a href="ACS.php">Services</a>
          <a href="./files/html/feedback.html">Feedback</a>
          <a href="images.php" class="img">Images</a>
          <a href="mammals.php" class="more">Explore</a>
          <a href="video.php" class="img">Videos</a>
        </div>
      </div>
      
      <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
      </script>
    
      
    <div class="navbar2">
        <h1>SCIENCE LAB</h1>
        <h4>Get science experiments, videos, articles, and more</h4>
      </div>
     
      
    <div class="slideshow-container">
    
        <div class="mySlides fade">
          <div class="numbertext">1 / 6</div>
          <img src="./files/images/chemistry.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 6</div>
          <img src="./files/images/bio.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 6</div>
          <img src="./files/images/bio1.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="./files/images/bio2.jpg" style="width:100%">
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="bio3.jpg" style="width:100%">
          </div>
          
        <div class="mySlides fade">
            <div class="numbertext">6/ 6</div>
            <img src="bio4.jpg" style="width:100%">
          </div>
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
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
        <div class="navbar3">
            <h2><b>Categories :</b></h2>
            <a href="images.php" class="btn1"><input type="Submit" value="Images"></a>
            <a href="video.php" class="btn2"><input type="Submit" value="Videos"></a>
            <a href="plants.php" class="btn3"><input type="Submit" value="Plants"></a>
    
            <video width="360" height="270" controls>
              <source src="./files/videos/video.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
            </video>
           <div class="box">
    <ul>
      <li><a class="active">Animals</a></li>
      <li><a href="mammals.php">Mammals</a></li>
      <li><a href="bird.php">Birds</a></li>
      <li><a href="reptile.php">Reptiles</a></li>
      <li><a href="marine.php">Marine</a></li>
    </ul>
    
           </div>
           <div class="box1">
            <ul>
              <li><a class="active">Explore More</a></li>
              <li><a href="plants.php">Plants</a></li>
              <li><a href="history.php">History</a></li>
              <li><a href="space.php">Space</a></li>
            </ul>
           </div>
           <div class="block"><a>Online science lab</a></div>
        </div>
        <div class="container">
          <a>Science is a systematic endeavor that builds and organizes knowledge in the form of testable <br>explanations and predictions about the universe. Science may be as old as the human species,<br> and some of the earliest archeological evidence for scientific reasoning is tens of thousands of <br>years old.</a>
        </div>
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
          <input type="text" class="text1" placeholder="Enter your e-mail address" name="email">
        </div>
        </div>
        <a href="./files/html/signup.html"><input type="button"  value="Sign Up"></a>
    </body>
    </html> 
    