<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */

$testimonialVideoIds = [
    'VlMGI7ge3JY',
    '0aB6XbFngw8',
    'VjlE5wcx2SI',
    'Jyj8tDXOukQ',
    '8NK0GKzPovA',
    'q2HnpghIVYk',
    'IQt_eg5wOAo',
    'A6RvoBpKTKs',
    'BnfTjrMW0b0',
    'eFL_zY4DMRc',
];
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/testimonial-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Testimonials</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both testi-width text-center">
  <h2 class="h-2">What Our Clients Say</h2>
  <p>See what our clients have to say about how MfunL&rsquo;s expert digital marketing strategies have transformed their healthcare brands.</p>

  <div class="testimonial-video-grid">
    <?php foreach ($testimonialVideoIds as $videoId): ?>
      <div class="testimonial-video">
        <iframe src="https://www.youtube.com/embed/<?= htmlspecialchars($videoId, ENT_QUOTES, 'UTF-8') ?>" title="YouTube video player" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="testimonial-cta">
    <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
    <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
  </div>
</section>
