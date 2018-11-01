<?php

include 'DB.php';
if (isset($_POST)) {
$CustomerName=$_POST['CustomerName'];
$CustomerAge=$_POST['CustomerAge'];
$Phone=$_POST['Phone'];
$PassportNo=$_POST['PassportNo'];
$EmployeeId=$_POST['employee_id'];
$ServiceType=$_POST['ServiceType'];
$Price=$_POST['Price'];
$Currency=$_POST['Currency'];
$Paid=$_POST['Paid'];
$RemainPrice=$_POST['RemainPrice'];


$sql = "INSERT INTO `customers`
(`c_id`, `c_name`, `c_age`, `c_phone`, `passport_id`,`employee_id`, `service_id`, `price`, `currency`, `paid`, `remain_price`,`orginal_price`, `completed`, `create_at`, `completed_at`)
 VALUES (NULL, '$CustomerName', '$CustomerAge', '$Phone', '$PassportNo','$EmployeeId', '$ServiceType', '$Price', '$Currency', '$Paid', '$RemainPrice','0', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
