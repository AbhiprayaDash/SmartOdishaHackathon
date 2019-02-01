<?php
 $msg = "";
   $id=$_COOKIE['id'];
  $db = mysqli_connect("localhost", "root", "", "group");

$results2=mysqli_query($db,"SELECT * FROM trainee where id='$id'");




  // If upload button is clicked ...
  if (isset($_POST['uploads'])) {
	  if($_FILES['image']['name']!=''){
  	// Get image name
  	$image = $_FILES['image']['name'];
	$sql = "INSERT INTO profile (image,uid) VALUES ('$image','$id')";
	$target = "1eng/".basename($image);
	mysqli_query($db, $sql);
	}
	else if($_FILES['image']['name']==''){
	  echo '<script language="javascript">';
	   echo 'alert("Please Select a Image")';
	    echo '</script>';
	}
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	}
	$results = mysqli_query($db, "SELECT * FROM profile ORDER BY id DESC ");
	?>


<!DOCTYPE html>
<html>
<title>User-profile.page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" type="text/css" href="stylejob.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,h1,h2,h4,body,h4,h5 {font-family: "Open Sans", sans-serif}
#swayam{
  background: #666969c9;
  font-family: "Open Sans", sans-serif;
}
</style>
<body id="swayam">

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
      <a href="#" class="w3-bar-item w3-button">One new request</a>
      <a href="#" class="w3-bar-item w3-button">You 10 new job suggestion</a>
      <a href="#" class="w3-bar-item w3-button">Jane was added to your group</a>
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
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
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
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php while($row1 = mysqli_fetch_array($results2)){
						echo $row1['company'];					}?></p>
 
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> <a href="groups.php" style="text-decoration:none;">My Groups</a></button>

          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Profile</button>

          
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
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-card w3-round">
        <div class="w3-white">
            <div class="container">
                <form  style="margin-left:13px;">
                  <p >Category</p><div class="container"><div class="row"><div class="col-6"style="width:50%">
                    <label class="checkbox-inline">
                      
                      Electrician
                    </label><br>
                    <label class="checkbox-inline">
                     Labour
                    </label>
                    <br>
                    <label class="checkbox-inline">
                     IT sector
                    </label><br>
                    <label class="checkbox-inline">
                      Photography
                      </label><br>
                    </div><div class="col-6" style="width:50%;">
                      <label class="checkbox-inline">
                       Salesman
                      </label><br>
                      <label class="checkbox-inline">
                       Plumber
                      </label><br>
                      <label class="checkbox-inline">
                        Automobiles
                        </label><br>
                        <label class="checkbox-inline">
                         Fitter
                        </label><br>
                        <label class="checkbox-inline">
                            Pharamacy
                           </label><br>
                           <label class="checkbox-inline">
                              Tailoring
                             </label><br>
                             <label class="checkbox-inline">
                                Accounting
                               </label><br>
                               <label class="checkbox-inline">
                                  Labour
                                 </label><br></div></div></div>
                        </form>

                  </form>
                  </div>
          </div></div><br>
          <div class="w3-card w3-round">
              <div class="w3-white">
                  <div class="container">
                       <form>
                        <p>Time</p>
                          <label class="checkbox-inline">
                              Full time
                             </label><br>
                             <label class="checkbox-inline">
                                Part Time
                               </label><br>
                        </form>
                        </div>
                </div></div>
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">

            <div class="container1">

                
                <?php
                $db2= mysqli_connect("localhost", "root", "", "group");
                $query3="SELECT * FROM trainee";
                $results2=mysqli_query($db2,$query3);
                while ($row3 = mysqli_fetch_array($results2))
                {
                    ?>
                    <div class="card1">
                    <div class="box1">
                        <div class="img">
                            <img src="deloitte.png">
                        </div>
                        <h4><a href="#" style="text-decoration:none;"><?php echo $row3['company'];?></span></a>
                        <br>
                        <p><h4>Courses:<?php echo $row3['email'];?></h4>
                        <h4>Skills:<?php echo $row3['skill'];?></h4>
                        <h4>Email:<?php echo $row3['position'];?></h4>
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
               <?php }?>

                
    
            </div>    
        </div>
      </div>
      

      
      
      
    <!-- End Middle Column -->
    </div></div>
    
    <!-- Right Column -->


    
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
