<div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="CustomerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CustomerModalLabel">إضافة حساب زبون</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="CustomerForm" name="CustomerForm">


        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">إسم الزبون</label>
          <input required type="text" class="form-control form-control" name="CustomerName" id="CustomerName">
        </div>
        <div class="form-group has-warning">
          <label class="control-label" for="inputWarning1">عمر الزبون</label>
          <input required type="date" class="form-control form-control" name="CustomerAge" id="CustomerAge">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">رقم الهاتف</label>
          <input required type="number" class="form-control form-control" name="Phone" id="Phone">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">رقم البسبور</label>
          <input required type="text" class="form-control form-control" name="PassportNo" id="PassportNo">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">نوع الخدمة</label>
          <select required class="form-control form-control" name="ServiceType"  id="ServiceType">
            <?php
            include "App/Core/Settings/GetServices.php";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
            <option value="<?=$row['s_id']?>"><?=$row['service_name']?></option>
            <?php

          }
      } else {
          echo "0 results";
      }
      ?>
          </select>
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">المبلغ</label>
          <input required type="text" class="form-control form-control" name="Price" id="Price">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">العملة</label>
          <select required class="form-control form-control" name="Currency" id="Currency">
            <?php
            include "App/Core/Settings/GetCurrency.php";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
            <option value="<?=$row['currency_id']?>"><?=$row['currency_name']?></option>
            <?php

          }
      } else {
          echo "0 results";
      }
      ?>
          </select>

        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">المقبوض</label>
          <input required type="number" class="form-control form-control" name="Paid" id="Paid">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">المبلغ المتبقي</label>
          <input required type="number" class="form-control form-control" name="RemainPrice" id="RemainPrice">
        </div>
        <div class="form-group has-error">

          <input type="submit" class="btn btn-primary form-control form-control" value="إنشاء الطلب" id="inputError1">
        </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="OfficeModal" tabindex="-1" role="dialog" aria-labelledby="OfficeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="OfficeModalLabel">OfficeModal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="OfficeForm" name="OfficeForm">


        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">إسم المكتب</label>
          <input required type="text" class="form-control form-control" name="OfficeName" id="OfficeName">
        </div>

        <div class="form-group has-error">

          <input type="submit" class="btn btn-primary form-control form-control" value="إنشاء الطلب" id="inputError1">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Add_Account" tabindex="-1" role="dialog" aria-labelledby="Add_AccountLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Add_AccountLabel">حساب مكتب</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="SingleOfficeAcountForm" name="SingleOfficeAcountForm">
          <input type="hidden" id="OfficeId" name="OfficeId"  value="<?=$_GET['id']?>" >

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">إسم الزبون</label>
          <input required type="text" class="form-control form-control" name="CustomerName" value="" id="CustomerName">
        </div>
        <div class="form-group has-warning">
          <label class="control-label" for="inputWarning1">عمر الزبون</label>
          <input required type="date" class="form-control form-control" name="CustomerAge" id="CustomerAge">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">رقم الهاتف</label>
          <input required type="number" class="form-control form-control" name="Phone" id="Phone">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">رقم البسبور</label>
          <input required type="text" class="form-control form-control" name="PassportNo" id="PassportNo">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">نوع الخدمة</label>
          <select required class="form-control form-control" name="ServiceType"  id="ServiceType">
            <?php
            include "App/Core/Settings/GetServices.php";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
            <option value="<?=$row['s_id']?>"><?=$row['service_name']?></option>
            <?php

          }
      } else {
          echo "0 results";
      }
      ?>
          </select>
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">المبلغ</label>
          <input required type="text" class="form-control form-control" name="Price" id="Price">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">العملة</label>
          <select required class="form-control form-control" name="Currency" id="Currency">
            <?php
            include "App/Core/Settings/GetCurrency.php";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
            <option value="<?=$row['currency_id']?>"><?=$row['currency_name']?></option>
            <?php

          }
      } else {
          echo "0 results";
      }
      ?>
          </select>

        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">المقبوض</label>
          <input required type="number" class="form-control form-control" name="Paid" id="Paid">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">المبلغ المتبقي</label>
          <input required type="number" class="form-control form-control" name="RemainPrice" id="RemainPrice">
        </div>
        <div class="form-group has-error">

          <input type="submit" class="btn btn-primary form-control form-control" value="إنشاء الطلب" id="inputError1">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EmpolyeModal" tabindex="-1" role="dialog" aria-labelledby="EmpolyeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eEmpolyeModalLabel">EmpolyeModal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
