<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */

$whoServe = [
    ['Hospitals-MfunL.webp', 'Hospitals', '/digital-marketing-for-hospitals/'],
    ['Clinics-MfunL.webp', 'Clinics', '/digital-marketing-for-clinics/'],
    ['Medical-Practitioner-MfunL.webp', 'Medical Practitioners', '/digital-marketing-for-medical-practitioners/'],
    ['Diagnostic-Center-MfunL.webp', 'Diagnostic Centres', '/digital-marketing-for-diagnostic-centres/'],
];
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/who-we-serve-banner.webp" alt="Who We Serve" title="Who We Serve" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Who We Serve</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both">
  <div class="wrap section-width">
    <div class="who-serve-grid">
      <?php foreach ($whoServe as [$image, $name, $url]): ?>
        <a class="who-serve-card" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>">
          <div class="who-serve-card__img" style="background-image:url('/assets/images/<?= $image ?>');" role="img" aria-label="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>"></div>
          <span class="who-serve-card__name"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></span>
        </a>
      <?php endforeach; ?>
    </div>

    <p class="pricing-service-cta mt-lg">
      <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
      <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
    </p>
  </div>
</section>
