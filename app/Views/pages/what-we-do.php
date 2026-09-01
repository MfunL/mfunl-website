<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/what-we-do.webp" alt="What We Do" title="What We Do" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>What <span class="accent">We Do</span></h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width">
  <div class="what-we-do-row">
    <a class="what-we-do-card" href="/build-your-brand/">
      <img src="/assets/images/Build Your Brand.webp" alt="Build Your Brand" title="Build Your Brand" loading="lazy">
      <p>Build Your Brand</p>
    </a>
    <a class="what-we-do-card" href="/patient-lead-generation/">
      <img src="/assets/images/Patient Lead Generation.webp" alt="Patient Lead Generation" title="Patient Lead Generation" loading="lazy">
      <p>Patient Lead Generation</p>
    </a>
    <a class="what-we-do-card" href="/healthcare-website-design/">
      <img src="/assets/images/Healthcare Website Design.webp" alt="Healthcare Website Design" title="Healthcare Website Design" loading="lazy">
      <p>Healthcare Website Design</p>
    </a>
    <a class="what-we-do-card" href="/patient-conversion-management/">
      <img src="/assets/images/Patient Conversion Management.webp" alt="Patient Conversion Management" title="Patient Conversion Management" loading="lazy">
      <p>Patient Conversion Management</p>
    </a>
    <a class="what-we-do-card" href="/online-reputation-management/">
      <img src="/assets/images/Online Reputation Management.webp" alt="Online Reputation Management" title="Online Reputation Management" loading="lazy">
      <p>Online Reputation Management</p>
    </a>
  </div>
</section>

