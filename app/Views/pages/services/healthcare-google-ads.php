<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/MfunL-PPC-Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Healthcare PPC</h1>
    <p class="page-hero__sub">Drive patient bookings and boost visibility with targeted PPC campaigns that bring real results.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width content-tabs">
  <div class="content-tabs__inner">
    <div class="content-tabs__nav">
      <?= \App\Core\View::partial('service-nav', ['current' => 'healthcare-google-ads']) ?>

      <?= \App\Core\View::partial('side-contact') ?>
    </div>

    <div class="content-tabs__panels">

      <div class="content-tabs__panel" id="ppc-tab-engagement">
        <h2 class="h-2">Targeted Ads That Drive Patient Engagement</h2>
        <h3 class="h-3">Patients are currently searching for treatments online. Are you showing up?</h3>
        <p>At MfunL, we specialise in creating PPC campaigns for doctors, hospitals, and clinics to ensure your services are visible when patients need them most.</p>
        <p>Our Google paid ads are designed to drive conversions, connect with the right audience, and ultimately increase patient bookings.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Targeted-Ads.webp" alt="Targeted Ads That Drive Patient Engagement" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="ppc-tab-what-is">
        <h2 class="h-2">What is Healthcare PPC?</h2>
        <h3 class="h-3">To boost visibility and patient conversions with powerful digital ads.</h3>
        <p>Healthcare PPC (Pay-Per-Click) is a powerful digital advertising strategy where you only pay when someone clicks on your ad, making it ideal for hospitals, clinics, diagnostic centres, and doctors seeking immediate visibility.</p>
        <p>At MfunL, we create customised healthcare ad campaigns that target what patients are really looking for, ensuring your ads reach the right people.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/What-is-Healthcare-PPC.webp" alt="What is Healthcare PPC?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="ppc-tab-why">
        <h2 class="h-2">Why Healthcare PPC Campaigns are Necessary?</h2>
        <h3 class="h-3">To drive patient bookings with precision.</h3>
        <p>Whether your clinic is newly launched, running a time-sensitive health camp, or looking to fill OPD slots quickly, healthcare PPC campaigns offer the fastest route to visibility and conversions.</p>
        <p><b>Here&rsquo;s why it works:</b></p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Immediate visibility on Google&rsquo;s first page with healthcare digital ads.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Hyper-targeted ads by location, age, gender, and device.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Perfect for promoting treatments, health packages, or camps.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Real-time measurable results.</li>
        </ul>
        <p><strong>Ready to put your clinic or hospital on the map with PPC? Start with MfunL today.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/A-stethoscope.webp" alt="Why Healthcare PPC Campaigns are Necessary?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="ppc-tab-how-we-run">
        <h2 class="h-2">How We Run PPC Campaigns that Actually Attract Patients</h2>
        <h3 class="h-3">To not only get ads from leads but also drive real patient conversions.</h3>
        <p>At MfunL, our healthcare Google ad campaigns are built for performance. We refine each campaign to ensure it reaches the right audience and achieves the desired results. Here&rsquo;s how:</p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Design landing pages that convert clicks into appointments.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Define patient segments based on age, location, audience interest, behaviour, and more.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Create ad copies with clear CTAs that boost clicks.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Use search queries like &ldquo;IVF success rate in Kolkata&rdquo; or &ldquo;piles laser treatment near me&rdquo; to obtain more measurable results.</li>
        </ul>
        <p><strong>Let MfunL boost your ROI with targeted PPC campaigns that drive patients to your clinic.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/How-We-Run.webp" alt="How We Run PPC Campaigns that Actually Attract Patients" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="ppc-tab-offer">
        <h2 class="h-2">What We Offer in Our Healthcare PPC Campaign Service?</h2>
        <h3 class="h-3">Maximise patient bookings and drive growth with strategic Google ads.</h3>
        <p>Here&rsquo;s what&rsquo;s inside our Medical PPC campaigns stack:</p>

        <div class="content-tabs__grid content-tabs__grid--4col">
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Google-Ads-Setup.webp" alt="Google Ads Setup (Search + Display + YouTube)" class="b-rad" loading="lazy">
            <p>Google Ads Setup (Search + Display + YouTube)</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Campaign-Strategy.webp" alt="Campaign Strategy &amp; Monthly Planning" class="b-rad" loading="lazy">
            <p>Campaign Strategy &amp; Monthly Planning</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Targeted-Keyword.webp" alt="Targeted Keyword Research" class="b-rad" loading="lazy">
            <p>Targeted Keyword Research</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Ad-Copywriting.webp" alt="Ad Copywriting &amp; Creative Design" class="b-rad" loading="lazy">
            <p>Ad Copywriting &amp; Creative Design</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Landing-Page-Design.webp" alt="Landing Page Design &amp; Optimisation" class="b-rad" loading="lazy">
            <p>Landing Page Design &amp; Optimisation</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Daily-Campaign.webp" alt="Daily Campaign Monitoring &amp; Adjustments" class="b-rad" loading="lazy">
            <p>Daily Campaign Monitoring &amp; Adjustments</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Lead-Conversion.webp" alt="Lead Conversion Tracking" class="b-rad" loading="lazy">
            <p>Lead Conversion Tracking</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Detailed-Monthly-Report.webp" alt="Detailed Monthly Report &amp; ROI Insights" class="b-rad" loading="lazy">
            <p>Detailed Monthly Report &amp; ROI Insights</p>
          </div>
        </div>

        <p><strong>Ready to build a PPC campaign for your healthcare brand that works? Partner with MfunL today &mdash; Call <a href="tel:8336920676">8336920676</a></strong></p>
      </div>

      <div class="content-tabs__panel" id="ppc-tab-why-us">
        <h2 class="h-2">Why Choose MfunL for Healthcare PPC Campaigns?</h2>
        <h3 class="h-3">For enhancing patient footfall with performance-driven healthcare campaigns.</h3>
        <p>We specialise in creating targeted paid campaigns for healthcare that drive measurable results. From Google Ads to get more OPD bookings to running paid ad campaigns for your healthcare brand, we optimise your ad budget for maximum ROI.</p>
        <p><b>Our expertise includes:</b></p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Performance-driven strategies that optimise ad spend for measurable results.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Continuous monitoring and adjustments to ensure maximum ROI.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Healthcare digital ads that drive foot traffic and increase visibility.</li>
        </ul>
        <p><strong>Choose MfunL for effective healthcare Google ad campaigns that get you noticed, booked, and trusted.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-Partner.webp" alt="Why Choose MfunL for Healthcare PPC Campaigns?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="ppc-tab-faq">
        <h2 class="h-2">You May Want to Know</h2>
        <div class="faq__accordion">
          <?php
          $ppcFaqs = [
              ['question' => 'How soon can you expect to see results with PPC campaigns?', 'answer' => 'Leads begin to come in almost instantly, provided the landing page and ad quality are well-aligned. Typically, results begin to show within the first 3 days after launching the campaign.'],
              ['question' => 'Is PPC expensive for hospitals or clinics?', 'answer' => 'No, but only if properly planned. We optimise for Cost Per Lead (CPL), ensuring each rupee spent brings you closer to acquiring a patient.'],
              ['question' => 'Do we only run Google ads for doctors?', 'answer' => 'No. We run Google Ads for doctors, hospitals, clinics, diagnostic centres and all other healthcare brands and practices.'],
              ['question' => 'Can we run ads only during your OPD hours?', 'answer' => 'Yes. We can schedule your ads to run during specific times, days, and locations to maximise engagement during peak hours.'],
              ['question' => 'What if you don’t have a website?', 'answer' => 'We create conversion-optimised landing pages specifically designed for your PPC campaign to ensure maximum results.'],
          ];
          ?>
          <?php foreach ($ppcFaqs as $i => $faq): ?>
            <div class="faq-item">
              <h4>
                <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="ppc-faq-answer-<?= $i ?>">
                  <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
                  <span class="faq-item__icon" aria-hidden="true"></span>
                </button>
              </h4>
              <div class="faq-item__answer" id="ppc-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
                <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/faqs-image.webp" alt="You May Want to Know" loading="lazy">
      </div>

    </div>
  </div>
</section>
