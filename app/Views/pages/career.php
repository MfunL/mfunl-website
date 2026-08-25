<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/career-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Careers</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width text-center">
  <h2 class="h-2">Career Opportunities at MfunL</h2>
  <h3 class="h-3">Leading healthcare digital marketing agency in Kolkata</h3>
  <p>If you are looking to hone your craft, ignite your passion and push your limits, you have come to the right place. We are always looking for new passionate team members that can drive our creations to new heights.</p>

  <div class="career-poster-grid">
    <div class="career-poster-card">
      <img src="/assets/images/BDM-Career-poster.webp" alt="Business Development Manager — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Manager">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <img src="/assets/images/business-dev-01.webp" alt="Business Development Executive — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Executive">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <img src="/assets/images/business-dev-02.webp" alt="Business Development Executive — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Executive">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <img src="/assets/images/Senior-Google-Ads-Expert-Hiring.webp" alt="Senior Google Ads Expert — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Senior Google Ads Expert">Apply Now</button>
    </div>
  </div>
</section>
