<?php

require 'App/Core/Config/DB.php';


$sql = "SELECT * FROM services";
$result = $conn->query($sql);
