<?php
  include '../connect.php';
?>

<?php
    
    $menu_name    = $_POST["manu_name"];
    $explain      = $_POST["explain"];
    $number_p     = $_POST["number_p"];
    $time         = $_POST["time"];
    $Ingredients  = $_POST["Ingredients"];
    $cook         = $_POST["cook"];
    $food_type    = $_POST["food_type"];

    $fileupload   = $_FILES["fileupload"]["tmp_name"];
    $filename     = $_FILES['fileupload']['name'];

    //uploadfile
    mkdir("upload/", 0755);
    if(!empty($menu_name)){
      mkdir("upload/".$menu_name."/", 0755);
      $uploaddir = "upload/".$menu_name."/";
      $uploadfile = $uploaddir . $filename;
      move_uploaded_file($_FILES["fileupload"]["tmp_name"], $uploadfile);
    }
    
    $sql_menu= "INSERT INTO `menu` (`manu_name`, `Ingredients`, `cook`,`explain`,`for_people`,`path_file`,`food_type` ) VALUES ('$menu_name','$Ingredients','$cook','$explain','$number_p','$uploadfile','$food_type')";
    $con->query($sql_menu);
?>

