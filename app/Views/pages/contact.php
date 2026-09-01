<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/contact-banner.webp" alt="Contact Us" title="Contact Us" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Contact Us</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both contact-width">
  <div class="contact-info-grid">
    <div class="contact-info-col">
      <h2 class="h-2">Get In Touch With Us</h2>

      <p class="contact-info-item">
        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
        <span>P-534, Raja Basanta Roy Road. 3rd Floor.<br>Near Southern Avenue, Lake Kali Bari.<br>Kolkata - 700029, India</span>
      </p>

      <p class="contact-info-item">
        <i class="fa-solid fa-phone" aria-hidden="true"></i>
        <span><a href="tel:8336920676">+91 8336920676</a> / <a href="tel:9674605724">+91 9674605724</a></span>
      </p>

      <p class="contact-info-item">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        <span><a href="https://wa.me/917439775869" target="_blank" rel="noopener">+91 7439775869</a> (WhatsApp)</span>
      </p>

      <p class="contact-info-item">
        <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
        <span><a href="tel:8981346444">+91 8981346444</a> (To Apply for Jobs)</span>
      </p>

      <p class="contact-info-item">
        <i class="fa-solid fa-envelope" aria-hidden="true"></i>
        <span><a href="mailto:info@mfunl.com">info@mfunl.com</a></span>
      </p>
    </div>

    <div class="contact-map">
      <img src="/assets/images/MfunL-Map.webp" alt="MfunL office location map" title="MfunL office location map" loading="lazy">
      <a class="contact-map__btn btn btn--accent" href="https://maps.app.goo.gl/VZxRqxcFZsdwQ5Sa8" target="_blank" rel="noopener">
        <i class="fa-solid fa-location-dot" aria-hidden="true"></i> See Location
      </a>
    </div>
  </div>
</section>
