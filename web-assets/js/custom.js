var swiper = new Swiper(".news_slider_one", {
  spaceBetween: 10,
  //   centeredSlides: true,
  slidesPerView: 4,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".news_slider_one_next",
    prevEl: ".news_slider_one_prev",
  },
});
