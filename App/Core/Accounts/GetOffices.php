<?php

require 'App/Core/Config/DB.php';


$sql = "SELECT *FROM offices";
$result = $conn->query($sql);
