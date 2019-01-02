$(document).ready(function(){
  let clicks1 = 0;
  let clicks2 = 0;
  let clicks3 = 0;
  let clicks4 = 0;
  let clicks5 = 0;

  $("#category1").click(function(){
    clicks1++; clicks2 = 0; clicks3 = 0; clicks4 = 0; clicks5 = 0;
    if(clicks1 % 2 == 0){$("#category1").blur();}
    $("#sub_menu2").collapse('hide');
    $("#sub_menu3").collapse('hide');
    $("#sub_menu4").collapse('hide');
    $("#sub_menu5").collapse('hide');
  });

  $("#category2").click(function(){
    clicks2++; clicks1 = 0; clicks3 = 0; clicks4 = 0; clicks5 = 0;
    if(clicks2 % 2 == 0){$("#category2").blur();}
    $("#sub_menu1").collapse('hide');
    $("#sub_menu3").collapse('hide');
    $("#sub_menu4").collapse('hide');
    $("#sub_menu5").collapse('hide');
  });

  $("#category3").click(function(){
    clicks3++; clicks1 = 0; clicks2 = 0; clicks4 = 0; clicks5 = 0;
    if(clicks3 % 2 == 0){$("#category3").blur();}
    $("#sub_menu1").collapse('hide');
    $("#sub_menu2").collapse('hide');
    $("#sub_menu4").collapse('hide');
    $("#sub_menu5").collapse('hide');
  });

  $("#category4").click(function(){
    clicks4++; clicks1 = 0; clicks2 = 0; clicks3 = 0; clicks5 = 0;
    if(clicks4 % 2 == 0){$("#category4").blur();}
    $("#sub_menu1").collapse('hide');
    $("#sub_menu2").collapse('hide');
    $("#sub_menu3").collapse('hide');
    $("#sub_menu5").collapse('hide');
  });

  $("#category5").click(function(){
    clicks5++; clicks1 = 0; clicks2 = 0; clicks3 = 0; clicks4 = 0;
    if(clicks5 % 2 == 0){$("#category5").blur();}
    $("#sub_menu1").collapse('hide');
    $("#sub_menu2").collapse('hide');
    $("#sub_menu3").collapse('hide');
    $("#sub_menu4").collapse('hide');
  });

});
