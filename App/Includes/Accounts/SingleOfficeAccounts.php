<?php include 'Template/Modals.php';?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <?php include 'Template/Sub_Header.php';?>
  <div class="m-content">

    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                  <th>رقم الزبون</th>
                  <th>إسم الزبون</th>
                  <th>مواليد الزبون</th>
                  <th>رقم الهاتف</th>
                  <th> رقم جواز السفر</th>
                  <th>الخدمة المقدمة</th>
                  <th>المبلغ</th>
                  <th>العملة</th>
                  <th>المدفوع</th>
                  <th>المتبقي</th>
                  <th>مكتملة الإستمارة</th>
                  <th>تاريخ إنشاء العملية</th>
                    <th>تاريخ إكتمال العملية</th>

                </tr>
            </thead>
            <tbody>
              <?php
              include "App/Core/Accounts/GetSingleCustomesAccounts.php";
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>

                      <td><?=$row['id']?></td>
                      <td><?=$row['o_name']?></td>
                      <td><?=$row['age']?></td>
                      <td><?=$row['phone']?></td>
                      <td><?=$row['passport_id']?></td>
                      <td><?=$row['service_name']?></td>
                      <td><?=$row['price']?></td>
                      <td><?=$row['currency_name']?></td>
                      <td><?=$row['paid']?></td>
                      <td><?=$row['remain_price']?></td>
                      <td><?=$row['completed']?></td>
                      <td><?=$row['create_at']?></td>
                        <td><?=$row['completed_at']?></td>

                    </tr>

                    <?php

                  }
              } else {
                  echo "0 لايوجد حسابات";
              }
              ?>


            </tbody>
            <tfoot>
                <tr>
                  <th>رقم الزبون</th>
                  <th>إسم الزبون</th>
                  <th>مواليد الزبون</th>
                  <th>رقم الهاتف</th>
                  <th> رقم جواز السفر</th>
                  <th>الخدمة المقدمة</th>
                  <th>المبلغ</th>
                  <th>العملة</th>
                  <th>المدفوع</th>
                  <th>المتبقي</th>
                  <th>مكتملة الإستمارة</th>
                  <th>تاريخ إنشاء العملية</th>
                  <th>تاريخ إكتمال العملية</th>

                </tr>
            </tfoot>
        </table>
  </div>
</div>
