$(document).ready(function(){
  let clicks1 = 0;
  let clicks2 = 0;
  let clicks3 = 0;
  let clicks4 = 0;
  let clicks5 = 0;
  let clicks1open = 0;
  let clicks2open = 0;
  let clicks3open = 0;
  let clicks4open = 0;
  let clicks5open = 0;

  let submenuClicks = 0;

  $("#category1").click(function(){
    clicks1++; clicks1open++; clicks2 = 0; clicks3 = 0; clicks4 = 0; clicks5 = 0;
    if(clicks1 % 2 == 0){$("#category1").blur();}
    if(category1selected && (clicks1open % 2 == 0)){
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
    if(!category1selected){
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
  });

  $("#category2").click(function(){
    clicks2++; clicks2open++; clicks1 = 0; clicks3 = 0; clicks4 = 0; clicks5 = 0;
    if(clicks2 % 2 == 0){$("#category2").blur();}
    if(category2selected && (clicks2open % 2 == 0)){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
    if(!category2selected){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
  });

  $("#category3").click(function(){
    clicks3++; clicks3open++; clicks1 = 0; clicks2 = 0; clicks4 = 0; clicks5 = 0;
    if(clicks3 % 2 == 0){$("#category3").blur();}
    if(category3selected && (clicks3open % 2 == 0)){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
    if(!category3selected){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
  });

  $("#category4").click(function(){
    clicks4++; clicks4open++; clicks1 = 0; clicks2 = 0; clicks3 = 0; clicks5 = 0;
    if(clicks4 % 2 == 0){$("#category4").blur();}
    if(category4selected && (clicks4open % 2 == 0)){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
    if(!category4selected){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category5selected){$("#sub_menu5").collapse('hide');}
    }
  });

  $("#category5").click(function(){
    clicks5++; clicks5open++; clicks1 = 0; clicks2 = 0; clicks3 = 0; clicks4 = 0;
    if(clicks5 % 2 == 0){$("#category5").blur();}
    if(category5selected && (clicks5open % 2 == 0)){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
    }
    if(!category5selected){
      if(!category1selected){$("#sub_menu1").collapse('hide');}
      if(!category2selected){$("#sub_menu2").collapse('hide');}
      if(!category3selected){$("#sub_menu3").collapse('hide');}
      if(!category4selected){$("#sub_menu4").collapse('hide');}
    }
  });

  $("#submenuToggler").click(function(){
    submenuClicks++;
    if(submenuClicks%2 != 0){
      $(".submenu").removeClass("animated fadeOutLeft");
      $(".submenu").css("display", "inherit");
      $(".submenu").addClass("animated fadeInLeft");
    }else if(submenuClicks%2 == 0){
      $(".submenu").removeClass("animated fadeInLeft");
      $(".submenu").css("display", "none");
      $(".submenu").addClass("animated fadeOutLeft");
    }

  });

  $(".duohover1").hover(function(){
    $(".duohover1").addClass("dontLooseFocus");
  }, function(){
    $(".duohover1").removeClass("dontLooseFocus");
  });

  $(".duohover2").hover(function(){
    $(".duohover2").addClass("dontLooseFocus");
  }, function(){
    $(".duohover2").removeClass("dontLooseFocus");
  });

  $(".duohover3").hover(function(){
    $(".duohover3").addClass("dontLooseFocus");
  }, function(){
    $(".duohover3").removeClass("dontLooseFocus");
  });

});
