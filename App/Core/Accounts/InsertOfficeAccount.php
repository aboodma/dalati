<?php

include 'DB.php';
if (isset($_POST)) {
$OfficeName=$_POST['OfficeName'];



$sql = "INSERT INTO `offices`
(`o_name`)
 VALUES ('$OfficeName')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
