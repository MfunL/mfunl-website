<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/build-your-brand.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Build <span class="accent">Your Brand</span></h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width">
  <div class="build-your-brand-row">
    <a class="build-your-brand-card" href="/medical-content-creation/">
      <img src="/assets/images/Medical Content Creation.webp" alt="Medical Content Creation" title="Medical Content Creation" loading="lazy">
      <p>Medical Content Creation</p>
    </a>
    <a class="build-your-brand-card" href="/healthcare-social-media-marketing/">
      <img src="/assets/images/Healthcare Social Media Marketing.webp" alt="Healthcare Social Media Marketing" title="Healthcare Social Media Marketing" loading="lazy">
      <p>Healthcare Social Media Marketing</p>
    </a>
  </div>
</section>

