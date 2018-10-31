<?php include 'Template/Modals.php';?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <?php include 'Template/Sub_Header.php';?>
  <div class="m-content">

    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                  <th>رقم المكتب</th>
                  <th>إسم المكتب</th>
                  <th>تاريخ إنشاء الحساب</th>
                  <th></th>

                </tr>
            </thead>
            <tbody>
              <?php
              include "App/Core/Accounts/GetOffices.php";
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>

                      <td><?=$row['o_id']?></td>
                      <td><?=$row['o_name']?></td>
                      <td><?=$row['create_at']?></td>
                      <td> 	<div class="dropdown">
                          <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-gear"></i>  خيارات

                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            
                            <a class="dropdown-item"  href="index.php?id=<?=$row['o_id']?>&pc=SoA&pn=حساب مكتب<?=$row['o_name']?>">
                              <i class="flaticon-share"></i>

                               عرض حسابات
                               <?=$row['o_name']?>
                            </a>
                            <a class="dropdown-item" id="DeleteAccount" href="#">
                              <i class="flaticon-settings"></i>

                               حذف
                               <?=$row['o_name']?>
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
                  <th>رقم المكتب</th>
                  <th>إسم المكتب</th>
                  <th>تاريخ إنشاء الحساب</th>
                  <th></th>

                </tr>
            </tfoot>
        </table>


  </div>
</div>
