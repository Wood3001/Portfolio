// execute the function once the page has finished loading
$(window).on("load", function(){

  ///////////////// LOADER /////////////////////////

  const $loader = $(".loader");
  $loader.slideUp('fast', function(){
    $loader.addClass("hide");
  });

/////////////////// INTERSECTION OBSERVERS /////////

/////////////////// BARBA.JS TRANSITIONS ///////////

const orange = 'rgba(241, 134, 38, 1)';
const white = '#f8f8f8';

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
    },
    afterEnter() {
      const observer1 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          var message = entry.target.querySelector('.home-intro__message');
          if (entry.isIntersecting) {
                message.classList.add('wipe-enter-anim');
                return;
          }
        }); 
      }, {threshold:0.5});
      observer1.observe(document.querySelector('.sec-2'));
      const observer2 = new IntersectionObserver(entries => { 
        entries.forEach(entry => {
          var homecard = entry.target.querySelectorAll('.home-card__wrapper');
          var delayTime = 0;
    
          homecard.forEach((card) => {
            setTimeout(function(){
              if (entry.isIntersecting) {
                card.classList.add('fly-up-anim');
              }
            },delayTime);
            delayTime = delayTime + 100;
          });            
        }); 
      });
      observer2.observe(document.querySelector('.sec-3'));
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
    },
    afterEnter() {
      const observer3 = new IntersectionObserver(entries => { 
        entries.forEach(entry => {
          var aboutAnim = entry.target.querySelectorAll('.about-anim');
          var delayTime = 0;
    
          aboutAnim.forEach((card) => {
            setTimeout(function(){
              if (entry.isIntersecting) {
                card.classList.add('fly-up-anim');
              }
            },delayTime);
            delayTime = delayTime + 100;
          }); 
        }); 
      }, {threshold:0.15})
      observer3.observe(document.querySelector('.about__sec-2'));
    }
  },{
    namespace: 'artifact',
    beforeEnter() {
      // Remove empty text containers from the page layout
      $('.artifact__narrative h3:empty').parent().addClass('hide');
      $(".artifact__image img[src='']").parent().addClass('hide');
      $('.logo-container').removeClass('hide');
    },
    afterEnter() {
      const observer5 = new IntersectionObserver(entries => { 
        entries.forEach(entry => {
          var artBoxes = entry.target.querySelectorAll('.art-anim');
          var delayTime = 0;
    
          artBoxes.forEach((card) => {
            setTimeout(function(){
              if (entry.isIntersecting) {
                card.classList.add('fly-up-anim');
              }
            },delayTime);
            delayTime = delayTime + 100;
          }); 
        }); 
      }, {threshold:0});
      observer5.observe(document.querySelector('.artifact'));
    }
  },{
    namespace: 'portfolio',
    beforeEnter() {
      $('.logo-container').removeClass('hide');
    },
    afterEnter() {
      const observer4 = new IntersectionObserver(entries => { 
        entries.forEach(entry => {
          var cards = entry.target.querySelectorAll('.card');
          var delayTime = 0;
          
          cards.forEach((card) => {
            setTimeout(function(){
              if (entry.isIntersecting) {
                card.classList.add('fly-up-anim');
              }
            },delayTime);
            delayTime = delayTime + 100;
          }); 
        }); 
      }, {threshold:0});
      observer4.observe(document.querySelector('.js-allcards'));
    }
  }],
  transitions: [{
    name: 'default-transition',
    leave(data) {
      parallaxReset();
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
    rotation: 720,
    scale: 0,
    duration: 2,
    ease: 'power3.out',
    });
}

    /////// PARALLAX //////////////

    // Create cross browser requestAnimationFrame method:
    window.requestAnimationFrame = window.requestAnimationFrame
    || window.mozRequestAnimationFrame
    || window.webkitRequestAnimationFrame
    || window.msRequestAnimationFrame
    || function(f){setTimeout(f, 1000/60)}

    var front = document.getElementById("layer1");
    var middleA = document.getElementById("layer2a");
    var middleB = document.getElementById("layer2b");
    var back = document.getElementById("layer3");
    var ofCont = document.getElementById("overflow-container");

    var parallaxTime = 50;

    function parallaxFront(){
        var scrolltop = ofCont.scrollTop/outerHeight; // get number of pixels document has scrolled vertically 
        front.animate({top:(-scrolltop * 25) + "px"}, {duration:parallaxTime, fill:"both"});
    }

    function parallaxMiddleA(){
        var scrolltop = ofCont.scrollTop/outerHeight; // get number of pixels document has scrolled vertically 
        middleA.animate({top:(-scrolltop * 10) + "px"}, {duration:parallaxTime, fill:"both"});
    }

    function parallaxMiddleB(){
        var scrolltop = ofCont.scrollTop/outerHeight; // get number of pixels document has scrolled vertically 
        middleB.animate({top:(-scrolltop * 2) + "px"}, {duration:parallaxTime, fill:"both"});
    }

    function parallaxBack(){
        var scrolltop = ofCont.scrollTop/outerHeight; // get number of pixels document has scrolled vertically 
        back.animate({top:(-scrolltop * -25) + "px"}, {duration:parallaxTime, fill:"both"});
    }

    function parallaxReset(){
        parallaxTime = 500;
        front.animate({top:"0px"}, {duration:parallaxTime, fill:"both"});
        middleA.animate({top:"0px"}, {duration:parallaxTime, fill:"both"});
        middleB.animate({top:"0px"}, {duration:parallaxTime, fill:"both"});
        back.animate({top:"0px"}, {duration:parallaxTime, fill:"both"});
    }

    //barba.hooks.afterEnter((data) => {

      ofCont.onscroll = function(){ // on page scroll
        requestAnimationFrame(parallaxFront)
        requestAnimationFrame(parallaxMiddleA)
        requestAnimationFrame(parallaxMiddleB)
        requestAnimationFrame(parallaxBack) // call parallaxlayers() on next available screen paint
        if (parallaxTime <= 3000){
          parallaxTime+= 75;
        }
      };
    //});

});

/////////////////// NAVIGATION /////////////////

var tl = gsap.timeline();
var windowWidth;

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

$('.gn-trigger, .gn a').on('click', function() {
  windowWidth = $('body').width();
  if(windowWidth < 1200) {
    turnBun();
  }
});

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
}

function enableScroll() {
  $('body').removeClass('stop-scrolling');
  $('.overflow-container').removeClass('stop-scrolling');
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
