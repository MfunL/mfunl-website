<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */

$locations = [
    ['Hyderabad.webp', 'Hyderabad', '/digital-marketing-agency-hyderabad/'],
    ['Bhubaneshwar.webp', 'Bhubaneshwar', '/digital-marketing-agency-bhubaneswar/'],
    ['Ahmedabad.webp', 'Ahmedabad', '/digital-marketing-agency-ahmedabad/'],
    ['Noida.webp', 'Noida', '/digital-marketing-agency-noida/'],
    ['Guwahati.webp', 'Guwahati', '/digital-marketing-agency-guwahati/'],
];
?>

<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/our-locations-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Our Locations</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both">
  <div class="wrap section-width">
    <div class="location-grid">
      <?php foreach ($locations as [$image, $name, $url]): ?>
        <a class="location-card" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>">
          <div class="location-card__img" style="background-image:url('/assets/images/<?= $image ?>');" role="img" aria-label="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>"></div>
          <span class="location-card__name"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
