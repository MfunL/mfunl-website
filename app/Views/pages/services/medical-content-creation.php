<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <picture>
    <source media="(max-width: 640px)" srcset="/assets/images/Medical Content Creation Mobile Banner.webp">
    <img class="page-hero__bg" src="/assets/images/Medical Content Creation Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  </picture>
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Medical Content Creation</h1>
    <p class="page-hero__sub">Create content that builds trust, elevates your brand, and turns patient clicks into confident consultations.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>
