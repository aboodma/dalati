<?php

require 'App/Core/Config/DB.php';


$sql = "SELECT * FROM currency";
$result = $conn->query($sql);
