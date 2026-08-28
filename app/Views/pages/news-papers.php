<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/news-papers-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>News Papers</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both">
  <div class="wrap section-width-80 epaper-feature">
    <h2 class="h-2">A Wonderful Silent Rally With An Empowering Message On 27th February 2020</h2>
    <div class="article-prose">
      <p>Thank you all the leading print houses for covering our silent rally against the age-old myth of women being impure at the time of the menstrual cycle and tell the world how beautiful she is&hellip;</p>
    </div>
    <div class="press-logo-row">
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/Millennium-Post.webp" aria-label="View Millennium Post coverage"><img src="/assets/images/millennium-post-logo.webp" alt="Millennium Post" loading="lazy"></button>
    </div>
  </div>
</section>

<section class="section-gap-both bg-tint">
  <div class="wrap section-width-80 epaper-feature">
    <h2 class="h-2">MfunL Is Honoured To Be Associated With Team "Password" &amp; 21 Pally Puja, Ballygunge Phari</h2>
    <div class="article-prose">
      <p>Poster launch of the upcoming movie &ldquo;Password&rdquo; of superstar Dev, at 21 Pally Puja premises, on the same day the theme video of 21 Pally puja was also launched. MfunL is the proud social media partner of 21 Pally Puja. The grand event was covered by leading print houses.</p>
    </div>
    <div class="press-logo-row">
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/Dainik-Statesmen.webp" aria-label="View Dainik Statesman coverage"><img src="/assets/images/dainik-statesman.webp" alt="Dainik Statesman" loading="lazy"></button>
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/Calcutta-Times-2.webp" aria-label="View Calcutta Times coverage"><img src="/assets/images/Calcutta-Times.webp" alt="Calcutta Times" loading="lazy"></button>
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/Eastern-Chronicle.webp" aria-label="View Eastern Chronicle coverage"><img src="/assets/images/eastern.webp" alt="Eastern Chronicle" loading="lazy"></button>
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/The-Echo-of-Indian.webp" aria-label="View The Echo of India coverage"><img src="/assets/images/theechoofindia.webp" alt="The Echo of India" loading="lazy"></button>
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/Provat-Khabar.webp" aria-label="View Provat Khabor coverage"><img src="/assets/images/provat-khabor.webp" alt="Provat Khabor" loading="lazy"></button>
      <button type="button" class="press-logo" data-open-lightbox="/assets/images/Samachar-Hindi-Dainik.webp" aria-label="View Samachar Hindi Dainik coverage"><img src="/assets/images/samagya.webp" alt="Samachar Hindi Dainik" loading="lazy"></button>
    </div>
  </div>
</section>
