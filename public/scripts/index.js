var tl = gsap.timeline();
var windowWidth;
const orange = 'rgba(241, 134, 38, 1)';
const white = '#f8f8f8';

/////////////////// TRANSITIONS /////////////////

barba.init({
  views: [{
    namespace: 'home',
    beforeEnter(data) {
      hideLogo(data);
      rollHomeBanner(data);
    },
    afterLeave(data) {
      $('.logo-container').removeClass('hide');
      showLogo(data); 
    }
  },{
    namespace: 'about',
    beforeLeave() {
      return gsap.fromTo('#about', 
      {color: orange},
      {color: white, duration:0});
    },
    afterLeave() {
      $('#about').removeAttr('style');
    },
    beforeEnter() {
      $('.logo-container').removeClass('hide');
      return gsap.fromTo('#about', 
      {color: white},
      {color: orange, duration:0});
    }
  },{
    namespace: 'dev',
    beforeLeave() {
      return gsap.fromTo('#dev', 
      {color: orange},
      {color: white, duration:0});
    },
    afterLeave() {
      $('#dev').removeAttr('style');
    },
    beforeEnter() {
      $('.logo-container').removeClass('hide');
      return gsap.fromTo('#dev', 
      {color: white},
      {color: orange, duration:0});
    }
  },{
    namespace: 'des',
    beforeLeave() {
      return gsap.fromTo('#des', 
      {color: orange},
      {color: white, duration:0});
    },
    afterLeave() {
      $('#des').removeAttr('style');
    },
    beforeEnter() {
      $('.logo-container').removeClass('hide');
      return gsap.fromTo('#des', 
      {color: white},
      {color: orange, duration:0});
    }
  },{
    namespace: 'artifact',
    beforeEnter() {
      $('.logo-container').removeClass('hide');
    }
  },{
    namespace: 'portfolio',
    beforeEnter() {
      $('.logo-container').removeClass('hide');
    }
  }],
  transitions: [{
    name: 'default-transition',
    leave(data) {
      windowWidth = $('body').width();
      if((windowWidth < 1200)&&($('.gn-trigger').hasClass('is-active'))) {
        $('.gn-trigger').removeClass('is-active');
        $('.gn').slideUp(200);
        blackOut();
        enableScroll();
      }
      return gsap.to(data.current.container, {
        x: '-100%',
        opacity: 0,
        duration: 0.25
      });
    },
    enter(data) {
      return gsap.from(data.next.container, {
        x: '100%',
        opacity: 0,
        duration: 0.25
      });
    }
  }]
});

function hideLogo() {
  return gsap.fromTo('.logo-container', 
    {y:0},{y:60}
  );
}

function showLogo() {
  return gsap.fromTo('.logo-container', 
    {y:60},{y:0}
  );
}

function rollHomeBanner() {
  return gsap.from('.home-banner',{
    rotation: 180,
    scale: 0,
    duration: 0.5 
    });
}

/////////////////// NAVIGATION /////////////////

$('.gn-trigger').on('click', function(e) {
  e.preventDefault();
  windowWidth = $('body').width();
  if((windowWidth < 1200)&&($(this).hasClass('is-active'))) {
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
});

$('.logo-container').on('click', function(e) {
  e.preventDefault();
  windowWidth = $('body').width();
  if((windowWidth < 1200)&&($('.gn-trigger').hasClass('is-active'))) {
    $('.gn-trigger').removeClass('is-active');
    $('.gn').slideUp(200);
    blackOut();
    enableScroll();
    turnBun();
  }
});

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

/////////////////// SMOOTH SCROLL /////////////////

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

let smoother = ScrollSmoother.create({
  smooth: 3,               // how long (in seconds) it takes to "catch up" to the native scroll position
  effects: true,           // looks for data-speed and data-lag attributes on elements
  smoothTouch: 0.1,        // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
});

// smoothScroll("#smooth-content");

