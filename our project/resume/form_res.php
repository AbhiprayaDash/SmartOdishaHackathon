<!DOCTYPE html>
<html>
<head>
	<title>processing the form...</title>
</head>
<body>
	<p>name:</p>
	<?php  echo $_post["fname"]; ?>
	<br/>
	<p>town:</p>
	<?php  echo $_post["town"];  ?>
	<br/>
	<p>phone:</p>
    <?php  echo $_post["phone"];  ?>
    <p>dob:</p>
    <?php  echo $_post["dob"];  ?>
    <p>Interests:</p>
    <?php  echo $_post["comment1"];  ?>
    <p>skills:</p>
    <?php  echo $_post["skills"];  ?>
    <p>job:</p>
    <?php  echo $_post["title"];  ?>
    <p>company:</p>
    <?php  echo $_post["cname"];  ?>
    <p>workplace:</p>
    <?php  echo $_post["loc"];  ?>
    <p>experience:</p>
    <?php  echo $_post["exp"];  ?>
    <p>joining:</p>
    <?php  echo $_post["join"];  ?>
    <p>Personality:</p>
    <?php  echo $_post["comment2"];  ?>
    <p>college:</p>
    <?php  echo $_post["clg"];  ?>
    <p>degree:</p>
    <?php  echo $_post["degree"];  ?>
</body>
</html>