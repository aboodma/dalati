$(document).ready( function () {

  $("#OfficeForm").on("submit",function (event){
    var OfficeForm = $("#OfficeForm");
    var FormData = $(OfficeForm).serialize();
    event.preventDefault();
    //Validation
    $.ajax({
      type : "POST",
      url : "App/Core/Accounts/InsertOfficeAccount.php",
      data : FormData,
      success: function (data) {alert(data)}
    });

    console.log(FormData);
  });


} );
