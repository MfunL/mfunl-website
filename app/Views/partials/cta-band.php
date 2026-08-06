<?php
/** @var string $heading */
/** @var string $subheading */
$heading ??= 'Ready to grow your patient flow?';
$subheading ??= 'Book a free 15-minute marketing diagnosis call with our team.';
$seoConfig = require dirname(__DIR__, 3) . '/config/seo.php';
?>
<section class="cta-band">
  <div class="wrap cta-band__inner">
    <div>
      <h2><?= htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') ?></h2>
      <p><?= htmlspecialchars($subheading, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
    <div class="cta-band__actions">
      <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> Call Now</a>
      <a class="btn btn--outline" href="<?= htmlspecialchars($seoConfig['whatsapp'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
    </div>
  </div>
</section>
