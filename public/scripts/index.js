//execute the function once the page has finished loading
$(window).on("load", function(){

  ///////////////// LOADER //////////////////////////

  $(".loader").slideUp('fast', function(){
      $(".loader").addClass("hide");
  });

  ///////////////////// INTERSECTION OBSERVER ///////////////////////

  const observer1 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const message = entry.target.querySelector('.message-anim-wrapper');

      if (entry.isIntersecting) {
            message.classList.add('wipe-enter-anim');
            return;
        }
      // message.classList.remove('wipe-enter-anim');
    }); 
  });

  const observer2 = new IntersectionObserver(entries => { 
    entries.forEach(entry => {
      var homecard = entry.target.querySelectorAll('.home-card__wrapper');
      var delayTime = 0;

      for(let i = 0; i < homecard.length; i++){
        setTimeout(function(){
          if (entry.isIntersecting) {
            homecard[i].classList.add('fly-up-anim');
          }
        },delayTime);
        delayTime = delayTime + 100;
      }
    }); 
  }, {threshold:0.5});

  const observer3 = new IntersectionObserver(entries => { 
    entries.forEach(entry => {
      var aboutSkills = entry.target.querySelectorAll('.about__skills');
      var delayTime = 0;

      for(let i = 0; i < aboutSkills.length; i++){
        setTimeout(function(){
          if (entry.isIntersecting) {
            aboutSkills[i].classList.add('fly-up-anim');
          }
        },delayTime);
        delayTime = delayTime + 150;
      }
    }); 
  }, {threshold:0.25});

  const observer4 = new IntersectionObserver(entries => { 
    entries.forEach(entry => {
      var cards = entry.target.querySelectorAll('.card');
      var delayTime = 0;

      for(let j = 0; j < cards.length; j++){
        setTimeout(function(){
          if (entry.isIntersecting) {
            cards[j].classList.add('fly-up-anim');
          }
        },delayTime);
        delayTime = delayTime + 150;
      }
    }); 
  }, {threshold:0.25});

  const observer5 = new IntersectionObserver(entries => { 
    entries.forEach(entry => {
      var artBoxes = entry.target.querySelectorAll('.art-anim');
      var delayTime = 0;

      for(let k = 0; k < artBoxes.length; k++){
        setTimeout(function(){
          if (entry.isIntersecting) {
            artBoxes[k].classList.add('fly-up-anim');
          }
        },delayTime);
        delayTime = delayTime + 150;
      }
    }); 
  }, {threshold:0.25});

  /////////////////// TRANSITIONS ////////////////////

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
        observer1.observe(document.querySelector('.sec-2'));
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
        observer3.observe(document.querySelector('.about__sec-2'));
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
      },
      afterEnter() {
        observer4.observe(document.querySelector('.disc-card__container'));
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
      },
      afterEnter() {
        observer4.observe(document.querySelector('.disc-card__container'));
      }
    },{
      namespace: 'artifact',
      beforeEnter() {
        $('.logo-container').removeClass('hide');
      },
      afterEnter() {
        observer5.observe(document.querySelector('.artifact'));
      }
    },{
      namespace: 'portfolio',
      beforeEnter() {
        $('.logo-container').removeClass('hide');
      },
      afterEnter() {
        observer4.observe(document.querySelector('.disc-card__container'));
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