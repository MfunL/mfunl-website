<?php
/** @var string|null $trendHeading */
/** @var string|null $trendSubheading */
/** @var array<int,array{0:string,1:string}>|null $trendItems */

$trendHeading ??= 'Evolving Trends in Healthcare Digital Marketing';
$trendSubheading ??= 'Stay ahead of the curve and improve your Google ranking';
$trendItems ??= [
    ['fa-solid fa-video', 'Short videos that engage patients and clearly explain your services.'],
    ['fa-solid fa-comments', 'AI-powered chatbots that guide patient enquiries into bookings anytime.'],
    ['fa-solid fa-microphone', 'Voice search optimisation so your clinic shows up when people ask &ldquo;best hospital near me.&rdquo;'],
    ['fa-solid fa-star', 'Reputation management that involves highlighting positive reviews and maintaining credibility.'],
    ['fa-solid fa-location-dot', 'Geo-targeted ads to reach patients searching for services in your area.'],
];
?>
<section class="trend-grid">
  <div class="wrap section-width">
    <h2 class="h-2 text-center"><?= $trendHeading ?></h2>
    <h3 class="h-3 text-center"><?= $trendSubheading ?></h3>

    <div class="trend-grid__grid">
      <?php foreach ($trendItems as [$icon, $label]): ?>
        <div class="trend-grid__card">
          <span class="trend-grid__icon" aria-hidden="true"><i class="<?= $icon ?>"></i></span>
          <p><?= $label ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="trend-grid__contact">
      Still have a question? Please feel free to <a href="/contact/">Contact Us</a>
    </p>
  </div>
</section>
