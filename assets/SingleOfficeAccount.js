$(document).ready( function () {

  $("#SingleOfficeAcountForm").on("submit",function (event){
    var SingleOfficeAcountForm = $("#SingleOfficeAcountForm");
    var CustomerName = $("#CustomerName").val();
    var CustomerAge = $("#CustomerAge").val();
    var Phone = $("#Phone").val();
    var PassportNo = $("#PassportNo").val();
    var FormData = $(SingleOfficeAcountForm).serialize();
    event.preventDefault();
    //Validation
    $.ajax({
      type : "POST",
      url : "App/Core/Accounts/SingleOfficeAccount.php",
      data : FormData,
      success: function (data) {alert(data)}
    });

    console.log(FormData);
  });


} );
