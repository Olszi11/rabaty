/*MENU */
const menuBar = $('.menu__hamburger');

$(".menu__hamburger").click(function() {
  $( '.hamburger-bar').toggleClass("open");
  $(".menu__ul").toggleClass("open");
  // // $("body").toggleClass("hidden");
  // $(window).scrollTop(0); //cheating
  // $(window).scrollTop(0); //cheating
});



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
    },
    breakpoints:{
      1599:{
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 3,
    },
    768:{
          slidesPerView: 2,
          spaceBetween: 30,
          slidesPerGroup: 2,
    },
    576:{
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,

    },
    
  }
});

/*PLACEHOLDER SEARCH FORM */
// $formSearchinput = $('.form-search__input');
// if($( window ).width() < 1200){
//   $formSearchinput.attr('placeholder', 'Szukaj');

// }

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
  breakpoints:{
    1599:{
        slidesPerView: 3,
        slidesPerColumn: 2,
        slidesPerGroup: 3,
    },
    768:{
      slidesPerView: 2,
      spaceBetween: 30,
      slidesPerGroup: 2,
    },
    576:{
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,

    },
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
  },

});

/*OFFERS VIEW*/
// const blockView = $('.offers__view--block');
// const listView = $('.offers__view--list');
// const couponRow = $('.offer-row');
// const couponOfferColContent = $(".coupon__offer-col--content");
// const couponOfferColBtn = $('.coupon__offer-col--btn'); 

// const couponOfferContent = $('.coupon__offer-content');
// // const couponContent = $('.coupon__offer').find('.view__content-change');
// // const couponBtn = $('.coupon__offer').find('.view__btn-change');
// // const coupon3 = $('.coupon__offer');
// // const offerContent = $('.coupon__offer-content');
// // const offerImg = offerContent.find('.coupon__offer-img');

// blockView.on('click', function(){
  
//   // couponRow.removeClass('col-xl-12');
//   // couponRow.addClass('col-xl-3');

//   // couponOfferColContent.removeClass('col-xl-9 col-md-8');
//   // couponOfferColContent.addClass('col-xl-12 col-md-12');
//   // couponOfferColBtn.removeClass('col-xl-3 col-md-4');
//   // couponOfferColBtn.addClass('col-xl-12 col-md-12');
 



  
  
//   // coupon3.css('background-color', 'transparent');
//   // coupon3.css('box-shadow', 'none');
//   // couponOffer.css('background', 'white');

//   // couponOffer.removeClass('col-xl-12');
//   // couponOffer.addClass('col-xl-3');
//   // couponContent.removeClass('col-xl-9');
//   // couponContent.addClass('col-xl-12');

//   // couponBtn.removeClass('col-xl-3');
//   // couponBtn.addClass('col-xl-12');
 

//   // offerContent.css('flex-direction','column');
//   // offerImg.removeClass('coupon__offer-img');
//   // offerImg.addClass('coupon-img');
// });


// listView.on('click', function(){
  
//   couponRow.removeClass('col-xl-3');
//   couponRow.addClass('col-xl-12');

//   couponOfferColContent.addClass('col-xl-9 col-md-8');
//   couponOfferColContent.removeClass('col-xl-12 col-md-12');
//   couponOfferColBtn.addClass('col-xl-3 col-md-4');
//   couponOfferColBtn.removeClass('col-xl-12 col-md-12');
// });

/*HEIGHT COUPONS*/
const coupon = $('.coupon');
coupon.find('.coupon-img').matchHeight();
coupon.find('.coupon-type').matchHeight();
coupon.find('.coupon-name').matchHeight();
coupon.find('.coupon-content').matchHeight();
coupon.matchHeight();



const category = $('.category');
console.log(category);
category.find('.category__content').matchHeight({
  byRow: 0
});
category.find('.category__content-img').matchHeight({
  byRow: 0
});
category.find('.category__desc').matchHeight({
  byRow: 0
});
category.matchHeight({
  byRow: 0
});


const couponOfferImg = $('.coupon__offer-img');
couponOfferImg.matchHeight({
  byRow: 0
});


const brandCard = $('.brand__element');
brandCard.find('.brand__element-img ').matchHeight({
  byRow: 0
});
brandCard.matchHeight({
  byRow: 0
});

const brandFavorite= $('.brand__favorite');
brandFavorite.find('.brand__favorite-img ').matchHeight({
  byRow: 0
});
brandFavorite.matchHeight({
  byRow: 0
});




/* STAR BRAND */
$('.brand__halfstar').hover(
  function() {
    let starRating = $(this).data('score');
    //let starVote = $(this).parent();
    let starVote  = $(this).closest('.brand__stars');
    

    $('.brand__halfstar').removeClass('filled');
    $('.brand__halfstar').each(function(){
      if($(this).data('score') <= starRating){
        $(this).addClass('filled');
      }
    });
  },


  function(){
    let starRating = '';
    let starVote  = $(this).closest('.brand__stars');
    starRating = $('#form-rating').val();
  
    if(starVote.hasClass('clicked')){
      $('.brand__halfstar').removeClass('filled');
      $('.brand__halfstar').each(function(){
        if($(this).data('score') <= starRating){
          $(this).addClass('filled');
        }
      })
    }else{
      $('.brand__halfstar').removeClass('filled');
    }
  }
);

  $('.brand__halfstar').click(function(){
    let starRating = $(this).data('score');
    let starVote  = $(this).closest('.brand__stars')
    $('#form-rating').val(starRating);
    console.log( $('#form-rating').val());
    starVote.addClass('clicked');
    $('.brand__halfstar').removeClass('filled');
    $('.brand__halfstar').each(function(){
      if ($(this).data('score') <= starRating) {
              $(this).addClass('filled');
            }
    });
  });

/*star heart */
// $('.brand__heart').hover(
//   function() {
//     let starRating = $(this).data('score');
//     //let starVote = $(this).parent();
//     let starVote  = $(this).closest('.brand__stars');
    

//     $('.brand__halfstar').removeClass('filled');
//     $('.brand__halfstar').each(function(){
//       if($(this).data('score') <= starRating){
//         $(this).addClass('filled');
//       }
//     });
//   },


/*COPY ELEMENT TO CLIPBOARD*/

$(".copy-button").on("click", function() {
  copyToClipboard($(".input__copy"));
});

function copyToClipboard(copyElement) {

  copyElement.select();
  document.execCommand("copy");
  copyElement.addClass('noselect');
}


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


/*NEWSLETTER */

/*FONT INFO*/
let fontInfo = $('.font-info');
let tooltipText=$('.tooltiptext');
fontInfo.on('click', function(){
  tooltipText.addClass('hidden');
  tooltipText.removeClass('show');
  $(this).prev().find('.tooltiptext').addClass('show');
  tooltipText.removeClass('hidden');
  $(document).click(function(event) {
    if (!$(event.target).closest(".font-info").length) {

     tooltipText.removeClass('show');
     tooltipText.addClass('hidden');
    }
  });
})

$(window).resize(function(){
  tooltipText.removeClass('show');
  tooltipText.addClass('hidden');
})
