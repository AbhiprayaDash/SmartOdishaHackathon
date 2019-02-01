<?php
	  $db = mysqli_connect("localhost", "root", "", "group");
 
	if( isset($_GET['join']) )
	{   
$id = $_GET['join'];
$query="SELECT * FROM groups where id='$id'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
if(isset($row)){
	
	$cook=$_COOKIE['id'];
	$ck= (int)$row['uid'];
    $username=$row['name'];
    $descriptiongrp = $row['description'];
	
		
	$sql= "INSERT INTO groups1 (name,description,uid,gid) VALUES ('$username','$descriptiongrp','$cook','$id')";;
		$res= mysqli_query($db,$sql);
		
		header("Location: groups.php");
		
	}
	
	
		else{
		$message1="cannot delete";
		echo "<script type='text/javascript'>alert('$message1');</script>"; 
	echo "<meta http-equiv='refresh' content='0;url=new 1.php'>";
		}
	}
	
?>