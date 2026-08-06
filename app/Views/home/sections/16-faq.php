<?php
/** @var array $faqs */
?>
<section class="faq" id="faq">
  <div class="wrap">
    <h2 class="section-eyebrow">You May Want to Know</h2>
    <p class="section-heading">Get An Overview of Our Services, Timings,<br>
& <span class="mark">Healthcare</span> Solutions</p>
    <div class="faq__accordion">
      <?php foreach ($faqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
