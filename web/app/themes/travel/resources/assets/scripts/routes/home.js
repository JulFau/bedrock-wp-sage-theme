import Swiper from 'swiper';

export default {
  init() {
    // JavaScript to be fired on the home page
    console.log('tes');


    this.MySwiper = new Swiper('.swiper-container', {

      slidesPerView: 3,
      slidesPerGroup:3,
      spaceBetween:20,
      loop:true,
      autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          centeredSlides:true,
          slidesPerGroup:1,
          
        },
        
        900:{
          slidesPerView:3,
        },
      },

    });



  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
