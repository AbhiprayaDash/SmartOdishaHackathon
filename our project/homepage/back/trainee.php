<?php
$db = mysqli_connect("localhost", "root", "", "group");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query="INSERT INTO trainee (company,position,skill,email) VALUES ('$name','$email','$subject','$message')";
mysqli_query($db, $query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
				<h2 class="form-title">Create account</h2>
                   <form action="traineemain.php" method="post">
        <p> <div class="form-group"><input class="form-input" type="text" placeholder="User ID" name="name"></div></p>
        <p> <div class="form-group"><input class="form-input" type="text" placeholder="email" name="email"></div></p>
        <p> <div class="form-group"><input class="form-input" type="text" placeholder="skills" name="subject"></div></p>
        <p> <div class="form-group"><input class="form-input" type="text" placeholder="Courses" name="message"></div></p>
        <p>
		 <div class="form-group">
          <input  class="form-submit" type="submit" name="submit">
            
          </div>
        </p>
      </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main1.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>