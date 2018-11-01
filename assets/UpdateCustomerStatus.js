$(document).ready(function (){
  $(".butonupdate").on('click',function () {
    var $button = $(this);
    var $id =$button.attr("data_handler");


    $.post("App/Core/Accounts/UpdateStatus.php",
{
    id: $id
},
function(data, status){
    alert("Update successfully");
    location.reload(); 
});
  })
})
