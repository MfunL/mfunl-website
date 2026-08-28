<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/event-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Events</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both">
  <div class="wrap section-width-80 epaper-feature">
    <h2 class="h-2">Highlights from MfunL Award Ceremony 2026</h2>
    <div class="article-prose">
      <p>On 30th May, MfunL marked another year of milestone, celebrating the achievements and dedication of its talented team. Special guest Trina Saha graced the ceremony and presented the awards, making the day even more memorable. The event radiated energy, collaboration, and a shared vision, leaving everyone inspired and motivated for the year ahead.</p>
    </div>
    <div class="awards__grid">
      <?php for ($i = 1; $i <= 26; $i++): ?>
        <button type="button" class="awards__item" data-open-lightbox="/assets/images/events/aw-2026-imgA<?= $i ?>.webp" aria-label="View Award Ceremony 2026 photo <?= $i ?>">
          <img src="/assets/images/events/aw-2026-imgA<?= $i ?>.webp" alt="MfunL Award Ceremony 2026, photo <?= $i ?>" loading="lazy">
        </button>
      <?php endfor; ?>
    </div>
  </div>
</section>
