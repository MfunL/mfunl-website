(() => {
  // Testimonials Swiper
  const testimonialEl = document.querySelector('.testimonials__swiper');
  if (testimonialEl) {
    new Swiper(testimonialEl, {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: testimonialEl.querySelector('.swiper-pagination'),
        clickable: true,
      },
      navigation: {
        prevEl: testimonialEl.querySelector('.swiper-button-prev'),
        nextEl: testimonialEl.querySelector('.swiper-button-next'),
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 28,
        },
      },
    });
  }
})();
