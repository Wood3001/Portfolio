/////////////////// NAVIGATION /////////////////

  var tl = gsap.timeline();
  var windowWidth = $('body').width();
  
  if (windowWidth < 1200) {
  $('.gn-trigger').on('click', function(e) {
    e.preventDefault();
    if($(this).hasClass('is-active')) {
      $(this).removeClass('is-active');
      $('.gn').slideUp(200);
      blackOut();
      enableScroll();
    } else {
      $(this).addClass('is-active');
      $('.gn').slideDown(200);
      blackOut();
      disableScroll();
    }
})};

  $('.gn-trigger, .gn a').on('click', turnBun);
  
    tl.to(".burger li", {backgroundColor:"#F18626"}, 0.015);
    tl.to("#bun", {rotation:"270_ccw"}, 0.015);
    tl.to("#b1", {width:"6px"}, 0.015);
    tl.to("#b2", {width:"6px"}, 0.015);
    tl.to("#b3", {width:"6px"}, 0.015);
        
    tl.reversed(true);
                        
    function turnBun() {
        tl.reversed(!tl.reversed());
};

$(window).resize(function() {
      windowWidth = $('body').width();
      if (windowWidth > 1199 && $('.gn-trigger').hasClass('is-active')) {
        $('.gn-trigger').removeClass('is-active');
        $('.gn').slideUp(200);
        enableScroll();
        turnBun();
        blackOut();
      };
});

function disableScroll() {
  $('body').addClass('stop-scrolling');
  $('.overflow-container').addClass('stop-scrolling');
  $('.page-container').addClass('stop-scrolling');
  
}
  
function enableScroll() {
  $('body').removeClass('stop-scrolling');
  $('.overflow-container').removeClass('stop-scrolling');
  $('.page-container').removeClass('stop-scrolling');
}

function blackOut() {
  if ($('.blackout').hasClass('is-active')){
    $('.blackout').removeClass('is-active static');
    $('.blackout').addClass('hide');
    $('.blackout').fadeTo(200, 0);
  }else{
    $('.blackout').addClass('is-active static');
    $('.blackout').removeClass('hide');
    $('.blackout').fadeTo(200, 1);
  }
}

