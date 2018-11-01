<?php
include "DB.php";
$id=$_POST['id'];
$sql="UPDATE `customers` SET `completed` = '1' WHERE `customers`.`c_id` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
 ?>
