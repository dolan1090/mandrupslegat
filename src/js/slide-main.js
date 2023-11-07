import Swiper from 'swiper/bundle';

const slide_main = new Swiper(".slides-main .swiper-container", {
    autoplay: {
        delay: 50000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
});

const slide_season = new Swiper(".slides-season .swiper-container", {
    autoplay: {
        delay: 50000,
        disableOnInteraction: false,
    },
    loop: true,
    navigation: {
        nextEl: '.slides-season .swiper-button-next',
        prevEl: '.slides-season .swiper-button-prev',
    },
});


function setButtonTopPosition(selector) {
    const swiperSlide = document.querySelector(selector + ' .swiper-slide img');
    const prevButton = document.querySelector(selector + ' .swiper-button-prev');
    const nextButton = document.querySelector(selector + ' .swiper-button-next');
  
    if (swiperSlide) {
      const slideHeight = swiperSlide.clientHeight;
      const calculatedTop = slideHeight / 2 + 'px';
      prevButton.style.top = calculatedTop;
      nextButton.style.top = calculatedTop;
    }
  }
  
  setButtonTopPosition('.slides-main');
  setButtonTopPosition('.slides-season');
  
  