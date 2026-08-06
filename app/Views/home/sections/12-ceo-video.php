<?php $seoConfig = require dirname(__DIR__, 4) . '/config/seo.php'; ?>
<section class="ceo-video">
  <div class="wrap ceo-video__inner">
    <button type="button" class="ceo-video__poster" data-open-video aria-label="Play video message from the CEO">
      <img src="/assets/images/ceo-vid-png.webp" alt="Video message from Kuntal Chatterjee, CEO of MfunL" title="Video message from Kuntal Chatterjee, CEO of MfunL" width="480" height="469" loading="lazy">
      <img class="ceo-video__play" src="/assets/images/play-icon.png" alt="Play Icon" title="Play Icon" width="64" height="64" loading="lazy">
    </button>
    <div class="ceo-video__copy">
      <blockquote>"Healthcare marketing only works when it's built around trust — that's the only kind of marketing we do."</blockquote>
      <p class="ceo-video__credit">Kuntal Chatterjee — AI &amp; Healthcare Digital Marketing Expert, CEO of MfunL &amp; Dactar Babu</p>
      <div class="ceo-video__actions">
        <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> Call Now</a>
        <a class="btn btn--outline" href="<?= htmlspecialchars($seoConfig['whatsapp'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
      </div>
    </div>
  </div>
</section>
