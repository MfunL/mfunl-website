<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Digital-Marketing-Agency-for-Nursing-Homes-Banner.webp" alt="Digital Marketing Agency for Nursing Homes" title="Digital Marketing Agency for Nursing Homes" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Digital Marketing Agency for Nursing Homes</h1>

    <?= \App\Core\View::partial('trust-slide') ?>

    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">MfunL: Helping Nursing Homes Attract More Patients with Care-Focused Marketing</h2>
        <h3 class="h-3">Because families don’t just look for care—they look for comfort and confidence.</h3>
        <p>
        When families look for a nursing home—whether for short-term recovery or long-term support—their journey often begins online. They want reassurance, comfort, and a place that feels right. Before making a call, they’ll search for reviews, check your photos, and look for signs that say: “This is a place we can trust.”</p>
        <p>
        But is your nursing home showing up when it matters most?
        </p>
        <p>
        At MfunL, we understand that nursing homes need more than visibility—they need credibility. As one of the leading healthcare agencies in Kolkata, we specialise in digital marketing for nursing homes that connect emotionally and convert effectively.
        </p>
        <p>
        We help you appear first when families search, tell your story in a way that builds confidence, and make it easy for people to reach out, book visits, and take the next step.
        </p>

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
          <img class="article-row__photo" src="/assets/images/Helping-Nursing-Homes-Attract-More-Patients-with-Care-Focused-Marketing.webp" alt="Helping nursing homes attract more patients with care-focused marketing" title="Helping nursing homes attract more patients with care-focused marketing" loading="lazy">
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
        <img src="/assets/images/Why-Do-Nursing-Homes-Need-Digital-Marketing-img.webp" alt="Why do nursing homes need digital marketing" title="Why do nursing homes need digital marketing" loading="lazy">
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">Why Do Nursing Homes Need Digital Marketing?</h2>
        <h3 class="h-3">Transforming digital visibility into meaningful patient connections.</h3>
        <p>Nursing homes provide essential care, but getting patients through the door can be a challenge. Relying on word-of-mouth or traditional marketing isn’t enough anymore. People now search online, read reviews, and book appointments digitally before making a decision.</p>
        <p>That’s where MfunL, a digital marketing for nursing homes, comes in. We don’t just help bring leads to your website – we make sure they turn into patients.</p>
        <p>Here’s how we help:</p>

        <ul class="hover-list">
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
            <p>Personalised marketing that ensures your nursing home appears in searches like "best nursing home near me."</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
            <p>Targeted SEO to help you rank higher on Google for the services people are searching for.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
            <p>Appointment scheduling systems that make it easy for families to book visits.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
            <p>Staff training to help you convert leads into actual visits.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-star"></i></span>
            <p>Building trust with patient reviews and testimonials.</p>
          </li>
        </ul>

        <p>Let MfunL help your nursing home turn every family&rsquo;s search for trust into a patient who calls it home.</p>
      </div>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('trend-grid') ?>

<?php
$growthTimeline = [

    'Deep understanding of healthcare and nursing home marketing needs.',

    'Strategies created to promote short-term, long-term, and rehab services.',

    'Targeted outreach to families seeking trusted care options in their area.',

    'Improved Google visibility for nursing homes near people\'s target locations.',

    'Staff training to handle calls and convert enquiries into room bookings.',

    'Build online trust through real family reviews and positive feedback.',

    'Ongoing support—from generating leads to long-term relationship building.',

    'Simple communication, caring tone, and results that actually matter.',

];
?>
<section class="section-gap-both growth-timeline">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">Why Choose MfunL for Your Nursing Home?</h2>
    <h3 class="h-3 text-center">More than marketing—we help families find and trust your care.</h3>

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
    ['General-Hospital-MfunL.webp', 'General Hospitals', '/digital-marketing-for-general-hospitals/'],
    ['Multispecialty-Hospital-MfunL.webp', 'Multispecialty Hospitals', '/digital-marketing-for-multispecialty-hospitals/'],
    ['Superspecialty-Hospital-MfunL.webp', 'Superspecialty Hospitals', '/digital-marketing-for-superspecialty-hospitals/'],
    ['Daycare-Hospital-Mfunl.webp', 'Daycare Hospitals', '/digital-marketing-for-daycare-hospitals/'],
    ['Eye-Hospital-MfunL.webp', 'Eye Hospitals', '/digital-marketing-for-eye-hospitals/'],
    ['Cancer-Hospital-MfunL.webp', 'Cancer Hospitals', '/digital-marketing-for-cancer-hospitals/'],
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
$nursingHomeFaqs = [
    ['question' => 'How quickly can digital marketing improve patient enquiries for a nursing home?', 'answer' => 'Most nursing homes see more visibility and enquiries within 2&ndash;3 months. With consistent campaigns, this leads to steady bookings and long-term occupancy improvements.'],
    ['question' => 'Do families really search online for nursing homes?', 'answer' => 'Absolutely. Most families begin their search online. Our job is to make sure your nursing home stands out with the right message, trust signals, and visibility where they&rsquo;re looking.'],
    ['question' => 'What if we already rely on referrals and word of mouth?', 'answer' => 'That&rsquo;s a great foundation&mdash;but families rarely stop there. Even with a personal recommendation, most people still research online before making a decision. Digital marketing makes sure your nursing home appears credible, visible, and reassuring when they look you up.'],
    ['question' => 'How does MfunL help a smaller nursing home compete with bigger, well-known facilities?', 'answer' => 'We utilise hyperlocal SEO, patient testimonials, and community-focused outreach to establish your facility as the trusted local choice, even against larger competitors.'],
    ['question' => 'Does MfunL only set up campaigns, or do we offer ongoing support?', 'answer' => 'We partner long-term. From regular strategy updates to reputation management and patient retention, we ensure your nursing home continues to grow sustainably.'],
];
?>
<section>
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">You May Want to Know</h2>
    <h3 class="h-3 text-center">Everything you need to know, right here.</h3>
    <div class="faq__accordion faq__accordion--centered mt-lg">
      <?php foreach ($nursingHomeFaqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="nh-faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="nh-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
