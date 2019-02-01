<!doctype html>
<html>
    <head>
        <title>Jobs.page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylejob2.css">
    </head>
    <body>


        <div class="container">
       <?php    $db = mysqli_connect("localhost", "root", "", "group");
                $query = "SELECT * FROM startup";
                $result = mysqli_query($db, $query);
                while ($row = mysqli_fetch_array($result)){
                
?>
            <div class="card1">
                <div class="box1">
                    <div class="img">
                        <img src="mi.png">
                    </div>
                    <h4><a href="#"><?php echo $row['start'];?></span></a>
                    <br>
                    <p><h3>Description:<?php echo $row['name'];?></h3>
                    <h3>Email:<?php echo $row['email'];?> </h3>
                    <h3>Location:<?php echo $row['subject'];?></h3>
                    <h3>Achievement:<?php echo $row['message'];?></h3></p>
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
    </body>
</html>