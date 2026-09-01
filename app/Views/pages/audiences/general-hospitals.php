<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/General-Hospitals-banner.webp" alt="Digital Marketing Agency for General Hospitals" title="Digital Marketing Agency for General Hospitals" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Digital Marketing Agency for General Hospitals</h1>

    <?= \App\Core\View::partial('trust-slide') ?>

    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">MfunL: Helping Hospitals Increase Patient Footfall</h2>
        <h3 class="h-3">When patients search, your hospital should be the one they find&mdash;and choose.</h3>
        <p>General hospitals handle everything&mdash;from emergencies to checkups, from surgeries to diagnostics. But when people search online for care, they don&rsquo;t just scroll&mdash;they click on what stands out.</p>
        <p>So, when someone searches for the &ldquo;best hospital near me&rdquo;, are they finding yours? Or is a better-ranked competitor taking the lead with sharper visibility, stronger reviews, and simpler appointment systems?</p>
        <p>As a leading healthcare digital marketing agency in Kolkata, MfunL builds your digital presence to match the scale of your services. Our approach combines smart visibility, reputation-building, and patient conversion strategies that drive real growth.</p>
        <p>From local SEO and targeted ads to hospital branding and marketing that tells your story&mdash;we help your general hospital become the first choice, not just another option.</p>
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__visual">
        <div class="article-row__visual-top">
          <img class="article-row__shape" src="/assets/images/shape.webp" alt="" aria-hidden="true" loading="lazy">
          <span class="article-row__rotation-wrap">
            <img class="article-row__rotation" src="/assets/images/rotation.webp" alt="" aria-hidden="true" loading="lazy">
          </span>
        </div>
        <div class="article-row__photo-frame">
          <img class="article-row__photo" src="/assets/images/MfunL-Helping-Hospitals-Increase-Patient-Footfall.webp" alt="MfunL helping general hospitals increase patient footfall" title="MfunL helping general hospitals increase patient footfall" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$whatWeDoSlides = [
    ['website.png', 'Healthcare Website Design', 'We create responsive, SEO-friendly websites with easy booking option.', '/healthcare-website-design/'],
    ['good-conversion-rate.png', 'Patient Conversion Management', 'The leads are converted into real patients through regular follow-ups.', '/patient-conversion-management/'],
    ['reputation-management.png', 'Online Reputation Management', 'We build and protect online credibility through reviews.', '/online-reputation-management/'],
    ['content-creator-a.png', 'Medical Content Creation', 'We deliver accurate, SEO-friendly, and patient-focused medical content.', '/medical-content-creation/'],
    ['social-media.png', 'Healthcare Social Media Marketing', 'Our team creates engaging, educational platform-specific posts.', '/healthcare-social-media-marketing/'],
    ['coding.png', 'Healthcare PPC', 'Data-backed strategies to help clinics rank top.', '/healthcare-google-ads/'],
    ['seo.png', 'Healthcare SEO', 'We create personalized SEO plans to boost rankings.', '/healthcare-seo/'],
    ['meta.png', 'Healthcare Meta Ads', 'Meta ads target patients, promoting services and engagement.', '/healthcare-meta-ads/'],
];
?>
<section class="what-we-do-slider">
  <div class="wrap">
    <h2 class="h-2 h-2--dark text-center">What We Do</h2>

    <div class="swiper what-we-do-slider__swiper">
      <div class="swiper-wrapper">
        <?php foreach ($whatWeDoSlides as [$icon, $label, $description, $url]): ?>
          <div class="swiper-slide">
            <a class="what-we-do-slider__card" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>">
              <img src="/assets/images/<?= $icon ?>" alt="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>" width="48" height="48" loading="lazy">
              <h3><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></h3>
              <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__media-photo">
        <img src="/assets/images/Why-Do-General-Hospitals-Need-Digital-Marketing.webp" alt="Why do general hospitals need digital marketing" title="Why do general hospitals need digital marketing" loading="lazy">
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">Why Do General Hospitals Need Digital Marketing?</h2>
        <h3 class="h-3">To turn digital presence into an increase in patient footfall</h3>
        <p>General hospitals deliver top-tier care, but consistent patient footfall can still be a challenge. In an era where online research drives healthcare decisions, relying solely on traditional marketing methods isn&rsquo;t enough. People now search online, read reviews, and make appointments digitally.</p>
        <p>MfunL, a leading healthcare digital marketing company in Kolkata, helps hospitals stand out online. Our strategies ensure that the traffic generated online gets converted into patient visits. Here&rsquo;s how we help:</p>

        <ul class="hover-list">
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
            <p>Personalised patient footfall growth strategies that drive more visits to your hospital.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
            <p>Targeted marketing to ensure you reach the right audience at the right time.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
            <p>Efficient patient conversion through staff training and appointment scheduling optimisation.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
            <p>Long-term trust-building outreach that keeps patients coming back.</p>
          </li>
        </ul>

        <p>Turn your online visibility into appointments. Let MfunL, your digital marketing agency for general hospitals, help your hospital grow.</p>
      </div>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('trend-grid') ?>

<?php
$growthTimeline = [
    'Extensive experience partnering with reputed hospitals to enhance performance across their various departments and services.',
    'Campaigns designed to promote your emergency, OPD, surgery, and speciality units.',
    'Local SEO that gets your hospital listed on top for &ldquo;near me&rdquo; searches.',
    'Hospital branding and marketing that builds long-term patient trust and recall.',
    'Google reviews and feedback management that improve your online reputation.',
    'Lead generation + follow-up systems to turn interest into confirmed visits.',
    'Staff training to ensure patient enquiries are handled and converted.',
    'Transparent tracking and monthly reports&mdash;so you always know what&rsquo;s working.',
];
?>
<section class="section-gap-both growth-timeline">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">How MfunL Powers Growth for General Hospitals</h2>
    <h3 class="h-3 text-center">We don&rsquo;t just bring traffic&mdash;we bring patients through your doors.</h3>

    <div class="growth-timeline__line">
      <?php foreach ($growthTimeline as $i => $text): ?>
        <div class="growth-timeline__item<?= $i % 2 === 1 ? ' growth-timeline__item--right' : '' ?>">
          <div class="growth-timeline__content">
            <span class="growth-timeline__number" aria-hidden="true"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <p><?= $text ?></p>
          </div>
          <div class="growth-timeline__node" aria-hidden="true">
            <svg viewBox="0 0 40 40" width="40" height="40">
              <circle class="growth-timeline__pulse-ring" cx="20" cy="20" r="10"></circle>
              <circle class="growth-timeline__pulse-dot" cx="20" cy="20" r="6"></circle>
            </svg>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('Testimonial_innerpage') ?>

<?php
$otherHospitalServices = [
    ['Multispecialty-Hospital-MfunL.webp', 'Multispecialty Hospitals', '/digital-marketing-for-multispecialty-hospitals/'],
    ['Superspecialty-Hospital-MfunL.webp', 'Superspecialty Hospitals', '/digital-marketing-for-superspecialty-hospitals/'],
    ['Daycare-Hospital-Mfunl.webp', 'Daycare Hospitals', '/digital-marketing-for-daycare-hospitals/'],
    ['Eye-Hospital-MfunL.webp', 'Eye Hospitals', '/digital-marketing-for-eye-hospitals/'],
    ['Cancer-Hospital-MfunL.webp', 'Cancer Hospitals', '/digital-marketing-for-cancer-hospitals/'],
    ['Nursing-Home-MfunL.webp', 'Nursing Homes', '/digital-marketing-for-nursing-homes/'],
];
?>
<section class="section-gap-both other-services-slider">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">Other Hospital Services We Serve</h2>

    <div class="swiper other-services-slider__swiper">
      <div class="swiper-wrapper">
        <?php foreach ($otherHospitalServices as [$image, $name, $url]): ?>
          <div class="swiper-slide">
            <a class="who-serve-card" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>">
              <div class="who-serve-card__img" style="background-image:url('/assets/images/<?= $image ?>');" role="img" aria-label="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>"></div>
              <span class="who-serve-card__name"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<?php
$generalHospitalFaqs = [
    ['question' => 'Can we promote multiple services (such as cardiology, orthopaedics, and maternity) simultaneously?', 'answer' => 'Yes. We design department-specific campaigns to give each speciality the visibility it needs, ensuring patients searching for those treatments find your hospital first.'],
    ['question' => 'What if your hospital already invests in traditional advertising?', 'answer' => 'Digital marketing complements, not replaces, traditional methods. It captures patients who see offline ads and then search online, boosting conversions.'],
    ['question' => 'How does MfunL help you to compete with larger corporate hospitals?', 'answer' => 'Through hyperlocal SEO, strong reputation building, and community outreach, we make your hospital the trusted choice in your area.'],
    ['question' => 'Is digital marketing expensive for mid-sized or regional hospitals?', 'answer' => 'No. Our campaigns are scalable and budget-friendly, ensuring measurable ROI whether you&rsquo;re a standalone hospital or a growing chain.'],
    ['question' => 'Does MfunL provide ongoing support or just campaign setup?', 'answer' => 'We work as long-term partners. From regular strategy updates to patient retention, hospital branding, and marketing, we ensure your hospital continues to grow consistently.'],
];
?>
<section>
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">You May Want to Know</h2>
    <h3 class="h-3 text-center">Everything you need to know, right here.</h3>
    <div class="faq__accordion faq__accordion--centered mt-lg">
      <?php foreach ($generalHospitalFaqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="gh-faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="gh-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

