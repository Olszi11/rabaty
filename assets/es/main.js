/*SWIPER PROMOTED OFFERS*/

let swiper_promoted = new Swiper('.swiper__promoted-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 4,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
});

/*SWIPER CATEGORY OFFERS*/
let slides = 0;
let swiper_category = new Swiper('.swiper__category-container', {
  slidesPerView: 4,
  slidesPerColumn: 2,
  slidesPerGroup: 4,
  spaceBetween:30,
  slidesPerColumnFill: 'column',
  // loopFillGroupWithBlank: true,
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  on:{
    init: function(){
      slides = $('.swiper__category-container .swiper-slide:not(.swiper-slide--blank)').length;
      let numbersBlank = (8-(slides%8));
      if(slides%8!=0){
          for(let i=0; i<numbersBlank; i++){
            this.appendSlide([
              '<div class="swiper-slide category swiper-slide--blank"></div>'
            ])
          }
      }
    }
    
  }
});

/*OFFERS VIEW*/




/*ACCORDION */

let accordion = $(".accordion");
let allPanels = $('.panel').hide();

accordion.on("click", function() {
    if($(this).parent().find('.accordion__number').hasClass('active-colors')) {
      allPanels.slideUp();
      $(".accordion__number").removeClass('active-colors');
    }else{
      let heightAnswer = $(this).parent().find('.panel__answer').height();
      allPanels.slideUp();
      $(".accordion__number").removeClass('active-colors');
      $(this).next().slideDown();
      $(this).parent().find('.accordion__number').addClass('active-colors');
      return false;
    }
});



  



// "use strict";

// function setCookie(cname, cvalue, exdays) {
//   var d = new Date();
//   d.setTime(d.getTime() + (exdays*24*60*60*1000));
//   var expires = "expires="+ d.toUTCString();
//   document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }

// function getCookie(cname) {
//   var name = cname + "=";
//   var decodedCookie = decodeURIComponent(document.cookie);
//   var ca = decodedCookie.split(';');
//   for(var i = 0; i <ca.length; i++) {
//     var c = ca[i];
//     while (c.charAt(0) == ' ') {
//       c = c.substring(1);
//     }
//     if (c.indexOf(name) == 0) {
//       return c.substring(name.length, c.length);
//     }
//   }
//   return "";
// }

// let infobar = $('.infobar');
// let infobarCookie = getCookie('infobar');
// let infobarSlug = $('.infobar').data('slug');
// if ((infobarCookie.length > 0) && (infobarCookie == infobarSlug)) {
//   // dont show the infobar
// } else {
//   infobar.slideDown();
//   setCookie('infobar', infobarSlug, 999999999);
// }

// infobar.click(function() {
//   infobar.slideUp();
// });

// /*shrink menu */
// $(document).on("scroll", function(){
//   if ($(document).scrollTop() > 100) {
//     $(".navbar").addClass("shrink");
//   } else {
//     $(".navbar").removeClass("shrink");
//   }
// });

// $(document).ready(function(){
//   if ($(document).scrollTop() > 200) {
//     $(".navbar").addClass("shrink");
//   } else {
//     $(".navbar").removeClass("shrink");
//   }
// });

// $("a").on('click', function(event) {
//   if (this.hash !== "") {
//     event.preventDefault();
//     var hash = this.hash;
//     $('html, body').animate({
//       scrollTop: $(hash).offset().top
//     }, 1000);
//   }
// });

// var slides = 0;
// var swiper = new Swiper('.swiper-container', {
//   slidesPerView: 'auto',
//   spaceBetween: 50,
//   navigation: {
//     nextEl: '.swiper-navigation__next',
//     prevEl: '.swiper-navigation__prev',
//   },
//   breakpoints: {
//     768: {
//       spaceBetween: 30
//     },
//     576: {
//       spaceBetween: 15
//     }
//   },
//   on: {
//     init: function () {
//       slides = $('.swiper-slide:not(.swiper-slide--blank)').length;
//       if ($(window).width() <= 768) {
//         this.appendSlide([
//           '<div class="swiper-slide swiper-slide--blank"></div>'
//         ]);
//       } else if ($(window).width() > 768) {
//         this.appendSlide([
//           '<div class="swiper-slide swiper-slide--blank"></div>',
//           '<div class="swiper-slide swiper-slide--blank"></div>'
//         ]);
//       }
//     },
//   }
// });

// $('.accordion__item').click(function(){
//   $('.accordion__item').removeClass('opened');
//   $('.accordion__item .accordion__content').slideUp();
//   $(this).addClass('opened');
//   $(this).find('.accordion__content').slideDown();
// });

// $('.popup__exit').click(function(){
//   $('.popup').removeClass('opened');
// });

// $('a[href="popup__exit"]').on('click', function(e) {
//   e.preventDefault();
//   $('.popup').removeClass('opened');
// });

// $('.mobile-menu__exit').click(function(){
//   $('.mobile-menu').removeClass('opened');
// });

// $('a[href="mobile-menu"]').click(function(e){
//   e.preventDefault();
//   $('.mobile-menu').addClass('opened');
// });

// // countdown
// let timer = $('.counter');
// if (timer.length > 0) {
//   let countToSQL = timer.data('time');
//   let countTo = new Date(Date.parse(countToSQL.replace('-','/','g')));
//   let countDownDate = new Date(countTo).getTime();

//   let x = setInterval(function() {
//     let now = new Date().getTime();
//     let distance = countDownDate - now;

//     let days = Math.floor(distance / (1000 * 60 * 60 * 24));
//     let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//     let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//     let seconds = Math.floor((distance % (1000 * 60)) / 1000);

//     let counter_days = $('.js-counter-days');
//     let counter_hours = $('.js-counter-hours');
//     let counter_minutes = $('.js-counter-minutes');
//     let counter_seconds = $('.js-counter-seconds');

//     counter_days.html(days);
//     counter_hours.html(hours);
//     counter_minutes.html(minutes);
//     counter_seconds.html(seconds);

//     if (distance < 0) {
//       clearInterval(x);
//       timer.hide();
//     }
//   }, 1000);
// }

// $('form').submit(function(e) {
//   e.preventDefault();

//   if (typeof tinyMCE !== 'undefined') {
//     tinyMCE.triggerSave();
//   }

//   let messages = $(this).find('.form__messages');
//   messages.html('');
//   $.ajax({
//     type: 'POST',
//     url: $(this).attr('action'),
//     data: $(this).serialize()
//   })
//   .done(function(response) {
//     if (response.indexOf('/') == 0) {
//       window.location.href = response;
//     } else {
//       messages.html('<span class="success">' + response + '</span>');
//     }
//   })
//   .fail(function(response) {
//     if (response.status == 404) {
//       messages.html('<span class="error">Wystąpił nieoczekiwany błąd.</span>');
//     } else {
//       messages.html('<span class="error">' + response.responseText + '</span>');
//     }
//   });
// });

// $('.js-delete').click(function(e) {
//   e.preventDefault();
//   let r;
//   let msg;
//   let id = $(this).data('id');
//   let form = $(this).data('form');

//   if (form == 'admin-post-delete') {
//     msg = "Wpis o ID " + id + " zostanie usunięty.";
//   } else {
//     msg = "Kategoria o ID " + id + " zostanie usunięta.";
//   }

//   r = confirm(msg);

//   if (r == true) {
//     $.ajax({
//       type: 'POST',
//       url: '../ajax.php',
//       data: {
//         form: form,
//         id: id
//       }
//       })
//       .done(function(response) {
//         if (response.indexOf('/') == 0) {
//           window.location.href = response;
//         } else {
//           alert(response);
//         }
//       })
//       .fail(function(response) {
//         if (response.status == 404) {
//           alert(response);
//         } else {
//           console.log(response.responseText);
//         }
//       });
//   }
// });

// // VIDEO LIGHTBOX

// var tag = document.createElement('script');
// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// var player;
// function onYouTubeIframeAPIReady() {
//   player = new YT.Player('player', {
//     height: '360',
//     width: '640',
//     videoId: 'HiluuxT5k2o',
//     controls: 0,
//     enablejsapi: 1,
//     fs: 1,
//     iv_load_policy: 3,
//     modestbranding: 1,
//     rel: 0,
//     showinfo: 0
//   });
// }

// const body = $('body');
// let lightbox = $('.lightbox');
// let lightboxExit = lightbox.find('.lightbox__exit');

// $('.js-play').click(function(e){
//   e.preventDefault();
//   player.loadVideoById($(this).data('video'));
//   body.addClass('stop-scrolling');
//   body.bind('touchmove', function(e) {
//     e.preventDefault()
//   });
//   player.playVideo();
//   lightbox.css('display','flex');
// });

// lightboxExit.on('click', function(e) {
//   body.removeClass('stop-scrolling');
//   body.unbind('touchmove');
//   player.stopVideo();
//   lightbox.css('display', 'none');
// });

// $(document).on('keyup', function(e) {
//   if (e.keyCode == 27) {
//     body.removeClass('stop-scrolling');
//     body.unbind('touchmove');
//     player.stopVideo();
//     lightbox.css('display', 'none');
//   }
// });
