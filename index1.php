<?php
$con = mysqli_connect("localhost","root","","project2");
 if(isset($_POST["insert"])){
   $file= addslashes(file_get_contents($_FILES['images']['tmp_name']));
   $query = "INSERT INTO images VALUES ('$file)";
   if(mysqli_query($con,$query)){
     echo'<script>alert("Image Inserted into Database")</script>';
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
    <br/><br/>
      <div class="container" style="width:100px;">
      <h3 align="center"> UPLOAD IMAGE </h3>
      <br/>   
        <form method="post" enctype="multipart/form-data">
        <input type="file" name="images" id="images"/>
        <br/>     
        <input type="submit" name="insert" id="insert" value="insert" class="btn btn-info">
        </form>
        <br/>
        <br/>
       <table class="table table-bordered" style="width:30% height=30%;" cellpadding="2",cellspacing="2">
         <tr>
             <th>images</th>
            
         </tr>
         <?php 
             $query = "SELECT * FROM images ORDER BY id DESC";
             $result = mysqli_query($con,$query);
             while ($row = mysqli_fetch_array($result))    
             {
               echo'
                 <tr>
                    <td>
                      <img src="data:images/jpeg;jpg;png;gig;base64,'.base64_encode($row['images']).'"alt="images" style="width:50% height:50%;">
                    </td>
                  </tr>
                   ';
                }
             ?>
             

       </table>
    </div>
  </body>
</html>

<script>
  $(document).ready(function(){
    $('#insert').click(function(){
      var image_name =$('#images').val();
      if(image_name == ''){
      alert("Please Select Image");
      return false;
    }else{
      var extension = $('#images').val().split('.').pop().toLowerCase();
       if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1){
         alert('Invalid Image File');
         $('#images').val('');
         return false;
       }
    }
  });
});
</script>