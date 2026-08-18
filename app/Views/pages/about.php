<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/MfunL-About-Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>About <span class="accent">MfunL</span></h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap section-width text-center">
  <h2 class="h-2">Driving Digital Growth for Healthcare Brands</h2>
  <h3 class="h-3">Struggling to turn online visibility into actual patient visits?
  </h3>
  <p>MfunL has been the driving force behind healthcare brands that build trust, enhance visibility, and achieve measurable patient growth. While our digital marketing journey began in 2018, our focused expertise in healthcare digital marketing spans over 4 years. We have helped doctors, clinics, and hospitals strengthen their digital presence and connect meaningfully with patients.</p>
  <p>
  Our expertise lies in healthcare SEO, healthcare Google Ads, and Healthcare Social Media Marketing — together forming the backbone of successful digital marketing for healthcare. From optimising search visibility to building authority through content and targeted ads, we ensure every platform works together to achieve sustainable visibility and steady patient flow.</p>
  <p>
  We help doctors, surgeons, clinics, and hospitals go beyond visibility — to achieve measurable patient growth. Our approach focuses on boosting patient footfall and enhancing conversion rates through data-driven SEO, strategic content marketing, and impactful social media campaigns.</p>
  <p
  Whether you’re an emerging clinic or a well-established hospital, we ensure your digital presence attracts the right audience, builds patient trust, and transforms online inquiries into confirmed appointments.</p>
</section>

<section class="section-gap section-width">
  <h2 class="h-2 text-center">Who We Serve</h2>
  <h3 class="h-3 text-center">Serving All Healthcare Segments</h3>
  <div class="we-serve">

  <!-- Medical Practitioners -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <circle cx="12" cy="7" r="4"></circle>
        <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
        <path d="M18 9v4"></path>
        <path d="M16 11h4"></path>
      </svg>
    </div>

    <h4>Medical Practitioners</h4>

  </div>


  <!-- Clinics -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M3 21h18"></path>
        <path d="M5 21V7l7-4 7 4v14"></path>
        <path d="M9 10h6"></path>
        <path d="M12 7v6"></path>
        <path d="M9 21v-5h6v5"></path>
      </svg>
    </div>

    <h4>Clinics</h4>

  </div>


  <!-- Hospitals -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M4 21V5h16v16"></path>
        <path d="M9 3h6v4H9z"></path>
        <path d="M10 11h4"></path>
        <path d="M12 9v4"></path>
        <path d="M8 21v-5h8v5"></path>
      </svg>
    </div>

    <h4>Hospitals</h4>

  </div>


  <!-- Diagnostic Centers -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M9 3h6"></path>
        <path d="M10 3v6l-5 9a2 2 0 0 0 1.8 3h10.4a2 2 0 0 0 1.8-3l-5-9V3"></path>
        <path d="M8 15h8"></path>
        <circle cx="10" cy="18" r="1"></circle>
        <circle cx="14" cy="17" r="1"></circle>
      </svg>
    </div>

    <h4>Diagnostic Centers</h4>

  </div>

</div>
</section>
