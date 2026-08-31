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

  // What We Do Swiper — centered slide pops larger via CSS
  // (.swiper-slide-active), driven by centeredSlides here.
  const whatWeDoEl = document.querySelector('.what-we-do-slider__swiper');
  if (whatWeDoEl) {
    new Swiper(whatWeDoEl, {
      slidesPerView: 1.15,
      centeredSlides: true,
      spaceBetween: 24,
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: whatWeDoEl.querySelector('.swiper-pagination'),
        clickable: true,
      },
      navigation: {
        prevEl: whatWeDoEl.querySelector('.swiper-button-prev'),
        nextEl: whatWeDoEl.querySelector('.swiper-button-next'),
      },
      breakpoints: {
        640: {
          slidesPerView: 1.6,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 2.4,
          spaceBetween: 28,
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 32,
        },
      },
    });
  }

  // Testimonial (inner page) Swiper — 3-up glass-card carousel on a
  // gradient backdrop, deliberately distinct from the homepage's
  // light .testimonials grid.
  const testimonialInnerEl = document.querySelector('.testimonial-inner__swiper');
  const testimonialInnerWrapEl = document.querySelector('.testimonial-inner__swiper-wrap');
  if (testimonialInnerEl && testimonialInnerWrapEl) {
    new Swiper(testimonialInnerEl, {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: testimonialInnerEl.querySelector('.swiper-pagination'),
        clickable: true,
      },
      navigation: {
        // Arrows live outside .testimonial-inner__swiper (in the
        // wrap's padding gutter), not inside it — see slider CSS.
        prevEl: testimonialInnerWrapEl.querySelector('.swiper-button-prev'),
        nextEl: testimonialInnerWrapEl.querySelector('.swiper-button-next'),
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

  // Other Services Swiper — plain multi-up carousel (no centered pop).
  const otherServicesEl = document.querySelector('.other-services-slider__swiper');
  if (otherServicesEl) {
    new Swiper(otherServicesEl, {
      slidesPerView: 1.3,
      spaceBetween: 24,
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: otherServicesEl.querySelector('.swiper-pagination'),
        clickable: true,
      },
      navigation: {
        prevEl: otherServicesEl.querySelector('.swiper-button-prev'),
        nextEl: otherServicesEl.querySelector('.swiper-button-next'),
      },
      breakpoints: {
        640: {
          slidesPerView: 2.3,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 3.3,
          spaceBetween: 28,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 28,
        },
      },
    });
  }
})();
