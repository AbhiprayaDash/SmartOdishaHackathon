<?php
$db=new mysqli('localhost','root','','group');
$cook=$_COOKIE['id'];
$search=$_POST['search'];
if(!empty($search)){
	$sql="SELECT * FROM sign WHERE company LIKE '%"$search"%' OR position LIKE '%"$search"%' OR skill LIKE '%"$search"' ";
	
  $query=mysqli_query($db,$sql);


?>
<div class="result-count">
Maths ->found <?php echo $query->num_rows;?> results;
</div>

<?php
		while ($row = mysqli_fetch_array($query)) {
			
			 $me=$row['id'];
	 $cook=$_COOKIE['id'];
      echo "<div>";
      echo "<div class='card' id='crd'>";
	  
      	echo '<img class="card-img-top" src="group.png" alt="Card image cap">';
		echo "<div class='card-body'>";
      	echo " <h5 class='card-title'>".$row['company']."</h5>";
		echo " <h5 class='card-title'>".$row['position']."</h5>";
		echo " <h5 class='card-title'>".$row['skill']."</h5>";
        
	
	echo "</div>";
    echo "</div>";
	echo "<br><br>";
	   
	   
	 
		}
		
}?>