$(document).ready(function() {
    $("#img_menu").click(function(e) {
        //alert("OK");
        $(".menu_nav").toggleClass("active");
    })
})


function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }