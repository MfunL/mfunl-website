<?php $seoConfig = require dirname(__DIR__, 3) . '/config/seo.php'; ?>
<div class="floating-buttons">
  <button type="button" class="floating-buttons__top" id="back-to-top" aria-label="Back to top" hidden>&uarr;</button>
  <a class="floating-buttons__call" href="tel:8336920676" aria-label="Call MfunL"><i class="fa-solid fa-phone" aria-hidden="true"></i></a>
  <a class="floating-buttons__whatsapp" href="<?= htmlspecialchars($seoConfig['whatsapp'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
</div>
