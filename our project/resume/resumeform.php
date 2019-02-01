<?php 
$db = mysqli_connect("localhost", "root", "", "group");
if(isset($_POST['submit'])){
$cook=$_COOKIE['id'];
$p1=$_POST["fname"]; 
$p2=$_POST["town"];  
$p3=$_POST["phone"];   
$p4=$_POST["comment1"];  
$p5=$_POST["skills"];  
$p6= $_POST["title"];  
$p7=$_POST["cname"];  
  
$p9= $_POST["exp"];  
$p10= $_POST["join"];  
$p11= $_POST["comment2"];  
$p12= $_POST["clg"];  
$p13= $_POST["degree"];
$query="INSERT INTO resume (name,town,phone,interest,skills,job,compname,exp,joined,personality,clg,degree,uid) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p9','$p10','$p11','$p12','$p13','$cook')";
mysqli_query($db, $query);}
?>


<!doctype html>
<html>
    <head>
        <title>Resume.page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styleresume.css">
    </head>
    <body>
        <form class="base" action="resumeform.php" method="POST">
            <fieldset class="field">
                <h1>Create your resume</h1>
                Name<br>  <input class="bar" type="text" name="fname"><br><br>
                Town/locality<br> <input class="add" type="text" name="town"><br><br>
                Phone number<br>  <input class="num" name="phone" min="12" max="60"><br><br>
                DOB <br> 
                <br><br>
                Interests<br><br>
                <textarea class="comment" name="comment1" placeholder="Some of your most loved interests..."></textarea>
                <br><br>
                Key Skills<br> <input class="key" name="skills" type="text" placeholder="keyskills, specializations, experyise">
                <br><br>
                <h1>Latest Job Details</h1>
                <br>
                Job Title<br><input class="bar" type="text" name="title"><br><br>
                Company<br><input class="bar" type="text" name="cname"><br>
               <br>
                Years of experience<br>
                <input class="num1" type="number" name="exp">
                <br><br>
                date of Joining<br> <input class="num1" type="date" name="join">
                <br><br>
                Personality<br><br>
                <textarea class="comment"  name="comment2" placeholder="Brief description about you..."></textarea>
                <br><br>
                <h1>Education</h1>
                <br>
                College/University<br> <input class="bar" type="text" name="clg">
                <br><br>
                Degree<br> <input class="bar" type="text" name="degree"> 
                <br><br><br>
                <button class="icl-Button icl-Button--primary icl-Button--lg" type="reset">Reset</button>
                <br><br>
                <button class="icl-Button icl-Button--primary icl-Button--lg" type="submit" name="submit">Create Resume</button>
            </fieldset>
</form>
         
    </body>
</html>