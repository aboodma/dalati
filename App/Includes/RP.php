<?php include 'Template/Modals.php';?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <?php include 'Template/Sub_Header.php';?>
  <div class="m-content">

    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                  <th>رقم السجل</th>
                  <th>إسم الزبون</th>
                  <th>بوليصة التامين</th>
                  <th>رقم البسبور</th>
                  <th>تاريخ التقديم</th>
                  <th>مكان التقديم  </th>
                  <th>جاهزة </th>
                  <th>تم الإستلام</th>
                  <th>تاريخ التجديد </th>
                  <th></th>

                </tr>
            </thead>
            <tbody>
              <?php
              include "App/Core/GetRP.php";
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>

                      <td><?=$row['id']?></td>
                      <td><?=$row['person']?></td>
                      <td><?=$row['sgk_no']?></td>
                      <td><?=$row['passport_no']?></td>
                      <td><?=$row['req_date']?></td>
                      <td><?=$row['place']?></td>

                      <td> <?php if ($row['ready']=="0") {
                        echo "<i class='fa fa-ban' style='color:red'></i>";
                      }else {
                        echo "<i class='fa fa-check' style='color:green'></i>";
                      } ?></td>
                      <td> <?php if ($row['got_it']=="0") {
                        echo "<i class='fa fa-ban' style='color:red'></i>";
                      }else {
                        echo "<i class='fa fa-check' style='color:green'></i>";
                      } ?></td>
                      <td><?=$row['renew_date']?></td>
                      <td> 	<div class="dropdown">
                          <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-gear"></i>  خيارات

                          </a>
                          <div class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item"  href="index.php?id=<?=$row['o_id']?>&pc=SoA&pn=حساب مكتب<?=$row['o_name']?>">
                              <i class="flaticon-share"></i>

                               تعيين كـ جاهز
                               <?=$row['person']?>
                            </a>
                            <a class="dropdown-item" id="DeleteAccount" href="#">
                              <i class="flaticon-settings"></i>

                               تعيين كـ تم الإستلام
                               <?=$row['person']?>
                            </a>

                          </div>
                        </div> </td>
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
                  <th>رقم السجل</th>
                  <th>إسم الزبون</th>
                  <th>بوليصة التامين</th>
                  <th>رقم البسبور</th>
                  <th>تاريخ التقديم</th>
                  <th>مكان التقديم  </th>
                  <th>جاهزة </th>
                  <th>تم الإستلام</th>
                  <th>تاريخ التجديد </th>
                  <th></th>

                </tr>
            </tfoot>
        </table>


  </div>
</div>
