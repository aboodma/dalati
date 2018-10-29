<?php

require 'App/Core/Config/DB.php';
$id=$_GET['id'];

$sql = "SELECT `id`,`office_id`,`customer_name`,`age`,`phone`,`passport_id`,`service_id`,`price`,office_account.currency_id ,office_account.paid,`remain_price`,`completed`,office_account.create_at,office_account.completed_at ,services.service_name,services.s_id ,currency.currency_name,currency.currency_id,offices.o_id,offices.o_name 
FROM office_account
LEFT JOIN currency ON office_account.currency_id = currency.currency_id 
LEFT JOIN offices ON office_account.office_id = offices.o_id 
LEFT JOIN services ON office_account.service_id = services.s_id
where office_account.office_id = $id ";
$result = $conn->query($sql);
