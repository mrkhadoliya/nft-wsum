<?php
include "config.php";

$dd = $_POST["Address"];

$query = "SELECT * FROM `user` WHERE Owneradd ='$dd'";

$result1 = $link->query($query);

$newArray = array();
while($row = mysqli_fetch_assoc($result1))
{array_push($newArray ,$row);
}
echo json_encode($newArray);

?>