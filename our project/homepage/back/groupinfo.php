
  <?php
	  $db = mysqli_connect("localhost", "root", "", "group");
      $id = $_GET['join'];
      $cook=$_COOKIE['id'];
      if( isset($_GET['join']) )
      {   
  $id = $_GET['join'];
  $query="SELECT * FROM groups1 where gid='$id'";
  $result=mysqli_query($db,$query);
  while ($row = mysqli_fetch_array($result))
 {
      
      $cook=$_COOKIE['id'];
      $ck= (int)$row['uid'];
      $username=$row['name'];
      $descriptiongrp = $row['description'];
      $query2="SELECT * FROM user where id='$ck'";
      $result2=mysqli_query($db,$query2);   
 }}


 




?><!DOCTYPE html>
<html>
<title>User-profile.page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Group</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Group</h4>
         <p class="w3-center"><img src="avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <h4><i class="fa fa-users w3-margin-right w3-text-theme" style="margin-left:80px;"></i><?php echo $username?> </h4>
         <p style="margin-left:80px;"><?php echo $descriptiongrp?></p>

        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Members</p>
          <p>
          <?php
	  $db = mysqli_connect("localhost", "root", "", "group");
 
      if( isset($_GET['join']) )
      {   
  $id = $_GET['join'];
  $query="SELECT * FROM groups1 where gid='$id'";
  $result=mysqli_query($db,$query);
  while ($row = mysqli_fetch_array($result))
 {
  
      $cook=$_COOKIE['id'];
      $ck= (int)$row['uid'];
      $username=$row['name'];
      $descriptiongrp = $row['description'];
      $query2="SELECT * FROM user where id='$ck'";
      $result2=mysqli_query($db,$query2);
       
      while ($row1 = mysqli_fetch_array($result2)){
        

         ?>
                  
        <span class="w3-tag w3-small w3-theme-d5" style="height:25px;"><?php echo $row1['email'];?></span><br>
        <?php
              }}}
              ?>
          </p>
        </div>
      </div>
     
      
      <!-- Alert Box -->


    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
    <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity"></h6>
              <form method="post" id="signupform" action="groupinfo.php?join=626" enctype="multipart/form-data">
              <input type="hidden" name="size" value="1000000">
              <input class="w3-border w3-padding" placeholder="Today status" name = "status" style="width:100%;"><br><br>
              <button type="submit" class="w3-button w3-theme" name="post1"><i class="fa fa-pencil"></i>  Post</button>
            </form> 
            </div>
          </div>
        </div>
      </div>
      <?php
      if( isset($_POST['post1']) )
 {
     $posting=$_POST['status'];
     $query3="INSERT INTO status (post,gid,uid) VALUES ('$posting','$id','$cook')";
     $result2=mysqli_query($db,$query3); 
 }
 
         ?>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <?php
    $query5 = "SELECT * FROM status ";
    $result6=mysqli_query($db,$query5);
    
      while ($row6 = mysqli_fetch_array($result6))
      {
        $userid2=$row6['uid'];
        $article = $row6['post'];
        $query4="SELECT * FROM user where id='$userid2'";
        $result5=mysqli_query($db,$query4);
        $row4 = mysqli_fetch_array($result5);
      



 ?>
        <h4><?php echo $row4['email'];?></h4>
        <hr class="w3-clear">
        
          <div class="w3-row-padding" style="margin:0 -16px"><?php
             echo $article;}?>
        </div>
       
      </div><br>
      



    <!-- End Middle Column -->
    </div></div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

      <br>
      

      

      

      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
