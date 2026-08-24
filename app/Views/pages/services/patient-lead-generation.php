<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Patient-Lead-Generation.webp" alt="" width="400" height="400" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Patient <span class="accent">Lead Generation</span></h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width">
  <div class="patient-lead-generation-row">
    <a class="patient-lead-generation-card" href="/healthcare-seo/">
      <img src="/assets/images/Healthcare-SEO.webp" alt="Healthcare SEO" title="Healthcare SEO" loading="lazy">
      <p>Healthcare SEO</p>
    </a>
    <a class="patient-lead-generation-card" href="/healthcare-google-ads/">
      <img src="/assets/images/Healthcare-PPC.webp" alt="Healthcare PPC" title="Healthcare PPC" loading="lazy">
      <p>Healthcare PPC</p>
    </a>
    <a class="patient-lead-generation-card" href="/healthcare-meta-ads/">
      <img src="/assets/images/Healthcare-Meta.webp" alt="Healthcare Meta Ads" title="Healthcare Meta Ads" loading="lazy">
      <p>Healthcare Meta Ads</p>
    </a>
  </div>
</section>
