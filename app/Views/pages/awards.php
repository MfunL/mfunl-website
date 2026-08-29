<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/award-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Awards</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__media" style="background-image:url('/assets/images/Brainware_univers.webp');" role="img" aria-label="Digital Innovation Conclave 2026 at Brainware University"></div>
      <div class="article-row__content">
        <h2 class="h-2">Digital Innovation Conclave 2026 (Brainware University)</h2>
        <div class="article-prose">
          <p>It was a pleasure to be invited to attend the Media, Multimedia, and Digital Innovation Conclave 2026 organised by Brainware_university_kolkata . Events like these remind us that the future of digital communication is shaped not just by tools and platforms, but by ideas, collaboration, and the people driving them forward. Grateful to have been part of such an insightful and engaging evening.</p>
          <p>A sincere note to Phalguni Mookhopadhayay Soumojit Kaviraj Sudipta Chakraborty for the invitation and making me a part of this wonderful event.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-gap-both bg-tint">
  <div class="wrap section-width epaper-feature">
    <h2 class="h-2">MADX Awards 2025</h2>
    <div class="article-prose">
      <p>Our CEO, Mr. Kuntal Chatterjee was invited to speak at the MADX Awards 2025 in Mumbai, sharing insights on 'Tech, Tools, and Talent.' MfunL was awarded with the 'Best Healthcare and Wellness Marketing Campaign' award, a testament to the dedication, creativity, and passion of our amazing team. This achievement marks a significant milestone for us.</p>
    </div>
    <div class="event__grid">
      <?php for ($i = 1; $i <= 7; $i++): ?>
        <button type="button" class="awards__item" data-open-lightbox="/assets/images/awards/MADX-Awards-2025<?= $i ?>-img.webp" aria-label="View MADX Awards 2025 photo <?= $i ?>">
          <img src="/assets/images/awards/MADX-Awards-2025<?= $i ?>-img-400x284.webp" alt="MADX Awards 2025, photo <?= $i ?>" loading="lazy">
        </button>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="section-gap-both">
  <div class="wrap section-width">
    <h2 class="h-2 text-center">MfunL Recognised Among India&rsquo;s Top 10 Healthcare Marketing Consultants 2025-2026</h2>
    <div class="article-row" style="margin-top:24px;">
      <div class="article-row__media-pair">
        <button type="button" class="awards__item" data-open-lightbox="/assets/images/Healthcare-Marketing-2025-img-01.webp" aria-label="View India Pharma Outlook Top 10 Healthcare Marketing Consultants certificate">
          <img src="/assets/images/Healthcare-Marketing-2025-img-01.webp" alt="India Pharma Outlook Top 10 Healthcare Marketing Consultants certificate" loading="lazy">
        </button>
        <button type="button" class="awards__item" data-open-lightbox="/assets/images/Healthcare-Marketing-2026-img-02.webp" aria-label="View MfunL CEO Kuntal Chatterjee receiving the certification">
          <img src="/assets/images/Healthcare-Marketing-2026-img-02.webp" alt="MfunL CEO Kuntal Chatterjee receiving the certification" loading="lazy">
        </button>
      </div>
      <div class="article-row__content">
        <div class="article-prose">
          <p>MfunL has been honoured by India Pharma Outlook as one of the Top 10 Pharmaceutical &amp; Healthcare Marketing Consultants 2025, acknowledging its excellence in driving digital transformation across India&rsquo;s healthcare sector. The certification was proudly received by Mr. Kuntal Chatterjee, CEO of MfunL, who continues to lead the agency&rsquo;s mission of empowering hospitals, doctors, and clinics through innovative, data-driven marketing strategies that deliver measurable growth.</p>
          <p><strong>Magazine Link</strong>: <a href="https://www.indiapharmaoutlook.com/digital-magazine/warehousing-and-inventory-management-companies-february-2026/#page=23" target="_blank" rel="noopener"><u>View the feature</u></a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-gap-both bg-tint">
  <div class="wrap section-width">
    <h2 class="h-2 text-center">Mr. Kuntal Chatterjee Recognised as Certified AI Generalist by ET</h2>
    <div class="article-row" style="margin-top:24px;">
      <div class="article-row__content">
        <div class="article-prose">
          <p>Our CEO, Mr. Kuntal Chatterjee of MfunL, a leading healthcare digital marketing agency, has been honoured with the Certified AI Generalist title by The Economic Times for successfully completing the AI for Business Professionals Masterclass held on April 5&ndash;6, 2025. This certification highlights his deep understanding of cross-functional AI expertise and commitment to leveraging advanced technologies to drive innovation, efficiency, and strategic growth in healthcare digital marketing.</p>
        </div>
      </div>
      <div class="article-row__media article-row__media--contain" style="background-image:url('/assets/images/Ai-Times-Award-img.webp');" role="img" aria-label="Mr. Kuntal Chatterjee's Certified AI Generalist recognition by The Economic Times"></div>
    </div>
  </div>
</section>

