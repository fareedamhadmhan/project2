
<?php
 include "connection.php";
$mana_name = $_GET['mana_name'];
$sql = "SELECT image FROM ตารางสูตรอาหาร WHERE mana_name = $mana_name";
$result = mysqli_query($link, $sql);
$data = mysqli_fetch_array($result);
header("Content-Type: image/jpeg");
echo $data['image'];
mysqli_close($link);
?>

