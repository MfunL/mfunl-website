<section class="awards">
  <div class="wrap">
    <h2 class="section-eyebrow">Award & Recognition</h2>
    <p class="section-heading">MADX Awards <span class="mark">2025</span></p>
    <div class="awards__grid">
      <?php for ($i = 1; $i <= 7; $i++): ?>
        <button type="button" class="awards__item" data-open-lightbox="/assets/images/awards/MADX-Awards-2025<?= $i ?>-img.webp">
          <img src="/assets/images/awards/MADX-Awards-2025<?= $i ?>-img-400x284.webp" alt="MADX Awards 2025 recognition, image <?= $i ?>" title="MADX Awards 2025 recognition, image <?= $i ?>" width="200" height="200" loading="lazy">
        </button>
      <?php endfor; ?>
    </div>
    <a class="btn btn--outline" href="/events/">View All</a>
  </div>
</section>
