<?php

require 'App/Core/Config/DB.php';


$sql = "SELECT `c_id`,`c_name`,`c_age`,`c_phone`,`service_id`,`price`,`currency`,`paid`,`passport_id` ,`remain_price`,`completed`,`create_at`,`completed_at`
,services.service_name,services.s_id
,currency.currency_name,currency.currency_id
,employee.name,employee.e_id
 FROM customers
LEFT JOIN currency ON customers.currency = currency.currency_id
LEFT JOIN employee ON customers.employee_id = employee.e_id
LEFT JOIN services ON customers.service_id = services.s_id ";
$result = $conn->query($sql);
