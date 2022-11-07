$(document).ready(function(){
  $(".sudo-top-s").owlCarousel({
    margin:20,
    loop:true,
    autoWidth:true,
    autoplay: true,
    items:4
  });
});

$(document).ready(function(){
    $(".top").owlCarousel({
        items: 1,
        margin: 20,
        loop: true,
        autoWidth:true,
        autoplay: true,
    });
  });

  $(document).ready(function(){
    $(".book-1").owlCarousel({
        margin: 30,
        loop: true,
        autoWidth:true,
        autoplay: true,
        items: 5,
        stagePadding: 0,
        center: true,
    });
  });

  //$('#staticBackdrop').modal({
    //keyboard: false,
    //toggle: true,
  //});

  $('#modal').modal({
    keyboard: false,
    toggle: true,
  });