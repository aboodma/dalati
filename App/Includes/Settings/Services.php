
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <?php include 'Template/Sub_Header.php';?>
  <div class="m-content">
    <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>أسم الخدمة</th>

                </tr>
            </thead>
            <tbody>
              <?php
              include "App/Core/Settings/GetServices.php";
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?=$row['service_name']?></td>

                    </tr>

                    <?php

                  }
              } else {
                  echo "0 results";
              }
              ?>


            </tbody>
            <tfoot>
                <tr>
                    <th>أسم الخدمة</th>

                </tr>
            </tfoot>
        </table>
  </div>
</div>
