$(document).ready(function(){
  $("#showmenu").bind("click", function(){
    $("#hidedmenu").animate({
      right: "0px"
    }, 100);
  });
  $("#hide").bind("click", function(){
    $("#hidedmenu").animate({
      right: "-205px"
    }, 100);
  });
})