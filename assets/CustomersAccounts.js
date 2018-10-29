$(document).ready( function () {

  $("#CustomerForm").on("submit",function (event){
    var CustomerForm = $("#CustomerForm");
    var CustomerName = $("#CustomerName").val();
    var CustomerAge = $("#CustomerAge").val();
    var Phone = $("#Phone").val();
    var PassportNo = $("#PassportNo").val();
    var FormData = $(CustomerForm).serialize();
    event.preventDefault();
    //Validation
    $.ajax({
      type : "POST",
      url : "App/Core/Accounts/InsertCustomerAccount.php",
      data : FormData,
      success: function (data) {alert(data)}
    });

    console.log(FormData);
  });


} );
