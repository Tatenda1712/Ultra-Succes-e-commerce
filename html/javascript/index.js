$(document).ready(function(){
  $("#top-sale .owl-carousel").owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
   }
  });
  //isotope filter
  var $grid =$(".grid").isotope({
    itemSelector:'.grid-item',
    layoutMode:'fitRows'
  });

  //filter items pn button click
  $("button-group").on("click","button",function(){
    var filterValue=$(this).attr(".data-filter");
    $grid.isotope({filter:filterValue});

  });

  //new items
  $("#new-phones .owl-carousel").owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
   }
  });
  
  //blog
$("#blogs .owl-carousel").owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
   }

});
//product quantity section
let $qty_up=$(".qty .qty-up");
let $qty_down=$(".qty .qty-down");
//let $input=$(".qty .qty_input");

//Click on qty_up Btn
$qty_up.click(function(e){
  let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
  if($input.val()>=1 && $input.val()<=9){
    $input.val(function(i,oldva){
      return ++oldva;
    });
  }
});
//Click on qty_down Btn
$qty_down.click(function(e){
  let $input=$(`.qty_input[data-id='${$(this).data("id")}']`);
  if($input.val()>1 && $input.val()<=10){
    $input.val(function(i,oldva){
      return --oldva;
    });
  }
});



});
