<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Digital-Marketing-Agency-for-Eye-Hospitals-Banner.webp" alt="Digital Marketing Agency for Eye Hospitals" title="Digital Marketing Agency for Eye Hospitals" width="1920" height="800" loading="eager" fetchpriority="high">

  <div class="wrap page-hero__inner">
    <h1>Digital Marketing Agency for Eye Hospitals</h1>

    <?= \App\Core\View::partial('trust-slide') ?>

    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">MfunL: Helping Eye Hospitals Get Seen—First and Fast</h2>
        <h3 class="h-3">When patients search for eye care, your hospital should be their first choice</h3>
        
        <p>Vision problems don’t wait. Whether it’s blurry sight, cataracts, or a long-overdue LASIK consult, patients go straight to Google to find help. They’re typing “best eye hospital near me,” scanning reviews, and booking with whoever looks the most trustworthy, accessible, and modern.</p>

        <p>Is that your hospital—or someone else’s?</p>

        <p>As a leading healthcare digital marketing agency in Kolkata, MfunL helps your facility rank higher, stand out sharper, and convert faster. Our eye care digital marketing strategies aren’t generic—they’re built for high-footfall services like cataract, retina, and LASIK, where decision speed matters.</p>

        <p>We understand that an eye hospital isn’t just about equipment—it's about being the first name patients trust with their vision.</p>

        <p>So whether it’s getting more cataract leads, filling your LASIK slots, or boosting OPD visits—we make sure your hospital is seen, chosen, and remembered.</p>
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
          <img class="article-row__photo" src="/assets/images/Helping-Eye-Hospitals-Get-Seen.webp" alt="Helping eye hospitals get seen by the patients who need them" loading="lazy">
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
              <img src="/assets/images/<?= $icon ?>" alt="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>" width="48" height="48" loading="lazy">
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
        <img src="/assets/images/Why-Do-Eye-Hospitals-Need-Digital-Marketing-img.webp" alt="Why do eye hospitals need digital marketing" loading="lazy">
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">Why Do Eye Hospitals Need Digital Marketing?</h2>
        <h3 class="h-3">Turning Online Searches Into Patient Visits for Eye Care</h3>
        <p>Eye hospitals offer specialised treatments for cataracts, glaucoma, and refractive surgeries, but in today’s digital age, being visible online is the key to attracting more patients. Gone are the days when word-of-mouth and offline marketing were enough. Today, patients search for reviews, ratings, and convenience before they decide where to book an appointment.</p>
        <p>That’s where MfunL comes in. We don’t just bring in leads; we ensure those leads convert into patient visits.</p>
        <p>Our strategies focus on:</p>

        <ul class="hover-list">
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
            <p>Personalised marketing campaigns designed to drive foot traffic for eye care services such as eye tests, LASIK, and cataract surgery.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
            <p>Targeted SEO to make sure your eye hospital ranks highly for relevant eye care searches in your local area.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
            <p>Lead conversion systems are optimised through staff training and efficient appointment scheduling.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
            <p>Lead conversion systems are optimised through staff training and efficient appointment scheduling.</p>
          </li>
        </ul>

        <p>We turn online searches into appointments. Let MfunL, your trusted eye care digital marketing agency, help your eye hospital grow.</p>
      </div>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('trend-grid') ?>

<?php
$growthTimeline = [
    'Expertise in healthcare digital marketing—we know your services and your audience.',
    'Campaigns created for LASIK, cataracts, glaucoma, and retina care.',
    'Local SEO that gets your hospital ranked on Google Maps and “near me” searches.',
    'Strategy built for volume + precision—because one missed slot = one missed patient.',
    'Conversion-focused lead handling and training for your reception/marketing staff.',
    'Review campaigns and testimonials that turn past patients into loyalists.',
    'Transparent monitoring—so you know what’s working, and what’s next.',
    'We ensure not just traffic, but confirmed appointments.',
];
?>
<section class="section-gap-both growth-timeline">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">Why Choose MfunL for Your Eye Hospital?</h2>
    <h3 class="h-3 text-center">Not just another agency&mdash;your hospital&rsquo;s growth partner.</h3>

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
$eyeHospitalFaqs = [
    ['question' => 'How quickly can an eye hospital notice real impact from digital marketing?', 'answer' => 'With the right strategy, most hospitals see better visibility and more enquiries within the first 8&ndash;12 weeks. Long-term campaigns generate a steady patient flow and foster stronger brand recognition.'],
    ['question' => 'Can specific treatments, such as cataract surgery or LASIK, be promoted separately?', 'answer' => 'Yes. We create targeted campaigns for each service, from LASIK to glaucoma treatment, so patients searching for those procedures find your hospital first.'],
    ['question' => 'What if your hospital already has a website and social media presence?', 'answer' => 'We don&rsquo;t just build; we optimise. From improving your SEO to running patient-focused ads, we maximise your existing platforms for stronger lead generation.'],
    ['question' => 'Do we also help build patient trust beyond marketing campaigns?', 'answer' => 'Yes. We highlight testimonials, create blogs, and manage your online reviews so that patients feel confident choosing your hospital.'],
    ['question' => 'How does MfunL ensure compliance with sensitive healthcare promotions?', 'answer' => 'We adhere to strict healthcare communication standards to ensure that every campaign is ethical, accurate, and aligned with current medical guidelines.'],
];
?>
<section>
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">You May Want to Know</h2>
    <h3 class="h-3 text-center">Everything you need to know, right here.</h3>
    <div class="faq__accordion faq__accordion--centered mt-lg">
      <?php foreach ($eyeHospitalFaqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="eh-faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="eh-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
