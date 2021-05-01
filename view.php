<?php
//include the database configuration file
require_once'connection.php';

//get image data from database
$result =$con->query("SELECT image FROM ตารางสูตรอาหาร ORDER BY uploaded DESC");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Retrieve Image from Database using PHP by project2</title>    
<meta charset= "utf-8">


<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class ="container">
    <h3>Retrieve image from Database using PHP </h3>
    <?php if($result->num_rows > 0){ ?>
    <div class ="gallery">
        <?php while($row =$result->fetch_assoc()){ ?>
          <img src="data :image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
        <?php } ?>  
    </div>    
    <?php }else{ ?>    
    <p class ="status error">Image(s) not found..</p>
    <?php } ?>
</div>
</body>
</html>
    
    