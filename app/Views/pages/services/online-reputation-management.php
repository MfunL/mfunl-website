<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/MfunL-ORM-Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Online Reputation Management</h1>
    <p class="page-hero__sub">Build and maintain a positive digital reputation with effective ORM strategies.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>
