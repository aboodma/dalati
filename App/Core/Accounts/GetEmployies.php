<?php

require 'App/Core/Config/DB.php';


$sql = "SELECT *FROM employee";
$result = $conn->query($sql);
