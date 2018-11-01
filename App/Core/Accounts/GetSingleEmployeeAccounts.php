<?php

require 'App/Core/Config/DB.php';
$id=$_GET['id'];

$sql = "SELECT * from customers where employee_id = $id ";
$result = $conn->query($sql);
