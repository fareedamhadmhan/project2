<?php
 $msg="";
 if(isset($_POST['upload'])){
      $target="images/".basename($_FILES['image']['name']);
      $databasename=mysqli_connect("localhost","root","","project2");
      $image=$_FILES['image'];
      $text=$_POST['text'];
    

      $sql ="INSERT INTO images(image,text) VALUES('$image','$text')";
      mysqli_query($databasename,$sql);

      if(move_uploaded_file($_FILES['images'], $target)){
        $msg="Image uploaded successfully";

      }else{
          $msg="There was a problem uploading image";
      }
    }
?>

<!DOCTYPE html>
<html>    
  <head>
    <title>Cooking World ทุกมื้อให้เราดูแลคุณ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <div id="content">
      <?php 
         $databasename=mysqli_connect("localhost","root","","project2");
         $sql="SELECT * FROM images";
         $result = mysqli_query($databasename,$sql);
        while($row = mysqli_fetch_array($result)){
          echo"<div id='img_div'>";
          echo "<img scr='images/".$row['image']."' >";
          echo"<p>".$row['text']."</p>";
          echo"</p>";
          echo"</div>";
        }
      
      ?>

          <form method="post" action="index1.php" enctype="multipart/form-data">
      <div>  
          <input type="hidden" name= "size" value="1000000">
      </div>
      <div>
      <input type="file" name="image">
      </div>
      <div>
          <textarea name="text" cols="40" rows="4" placeholder="Say something about this image..."></textarea>
      </div>
      <div>
          <input type="submit" name="upload" value="Upload Image">
      </div>



</form>
</div>
</body>
</html>