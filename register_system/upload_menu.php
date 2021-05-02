<?php
  include '../connect.php';
?>

<?php
    $manu_name = $_POST["manu_name"];
    $explain = $_POST["explain"];
    $number_p = $_POST["number_p"];
    $time = $_POST["time"];
    $Ingredients = $_POST["Ingredients"];
    $cook = $_POST["cook"];

    $sql_menu= "INSERT INTO `menu` (`manu_name`, `Ingredients`, `cook`,`explain`,`for_people` ) VALUES ('$manu_name','$Ingredients','$cook','$explain','$number_p')";
    $con->query($sql_menu);

    echo "END";
?>

