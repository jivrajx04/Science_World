
<?php

error_reporting(0);
 
$msg = "";
 $s1=$_POST['search'];
// If upload button is clicked ...
if (isset($_POST['search'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./serve/image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "tybca");
 
    // Get all the submitted data from the form
    $sql = "select * from uploads (filename,name) VALUES ('$filename') WHERE name='$s1'  ";
   
    // Execute query
        mysqli_query($db, $sql);
    
    // Now let's move the uploaded image into the folder: image
   
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
  
<div class="navbar">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  
  <a href="ACS.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <img class="active1" src="./files/images/logo4.png">
</div>
<img class="active1" src="logo4.png">
    <div id="display-image">
        <?php
        $query = " select * from uploads where name='$s1' ";
        
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <div class="container">
            
                <img src="./files/images/<?php echo $data['filename']; ?>"></div>
            <div class="rect">
            <b class="text"><?php echo $data['name'];?></b></div>
            <div class="box">
            <p class="about"><?php echo $data['info'];?></p></div>
        <?php
        }
        ?>
    </div>
</body>
<style>
    body{
        background-size:cover;
        background:#f1f1f1;
    }

    .navbar {
  width: 53%;
  background-color: #008900;
  top: 0%;
  right: 0%;
  position: absolute;
}

.navbar a {
  display:inline-block;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}
.active{
    position: relative;
    left:75%;
}

.active1{
    width: 80px;
    height: 80px;
    position: absolute;
    top: 4%;
    border:none;
}

.container{
    position: absolute;
    width:48%;
    height:100%;
    background: -webkit-gradient(linear,left top,left bottom,from(#00a0ce),to(#007bc8));
  background:linear-gradient(#00a0ce,#007bc8);
}
img{
    position:absolute;
    width:600px;
    height:500px;
    top:15%;
    border-radius:5px;
    left:3%;
    border:solid 1px white;
}
.rect{
    position: absolute;
    top:15%;
    width:48%;
    height:7%;
    background-color:white;
    right:3%;
    text-align:center;
    font-size:25px;
    border-bottom:solid 3px #fc0;
    
    border-radius:5px;
    letter-spacing:1px;
}
.box{
    position: absolute;
    overflow:auto;
    top:26%;
    width:48%;
    height:65%;
    background-color:white;
    right:3%;
    font-size:20px;
    letter-spacing:1px;
    padding-left:1%;
    border-radius:5px;
    border-bottom:solid 3px #fc0;
}

    </style>
 
</html>