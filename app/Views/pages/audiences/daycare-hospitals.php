<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Digital-Marketing-Agency-for-Daycare-Hospital-Banner.webp" alt="Digital Marketing Agency for Daycare Hospitals" title="Digital Marketing Agency for Daycare Hospitals" width="1920" height="800" loading="eager" fetchpriority="high">

  <div class="wrap page-hero__inner">
    <h1>Digital Marketing Agency for Daycare Hospitals</h1>

    <?= \App\Core\View::partial('trust-slide') ?>

    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">MfunL: Making Your Daycare Hospital the Go-To for Fast, Hassle-Free Care</h2>
        <h3 class="h-3">Where today’s busy patients meet your modern medical setup.</h3>
        
        <p>Today, most people don’t want hospital stays—they want fast solutions. Same-day procedures. Faster recovery. No long waiting lines. That’s exactly what daycare hospitals offer.</p>
        
        <p>But when patients search for quick treatments like LASIK, hernia repair, or piles surgery, does your hospital show up as the first choice? Or are they landing on other centres with a more substantial online presence and better digital experience?</p>
        
        <p>MfunL isn’t just another agency—we’re a healthcare digital marketing agency in Kolkata that knows how to position your hospital as the smarter, quicker, more convenient option.</p> 

        <p>As an experienced agency for daycare hospitals, we build targeted campaigns that speak to today’s time-starved patients. We don’t just talk about your services—we market the ease, speed, and comfort that make you different.</p>

        <p>From showing up in the right searches to getting more bookings and faster OPD conversions, our digital marketing strategies are built for the pace of your practice.</p>

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
          <img class="article-row__photo" src="/assets/images/Making-Your-Daycare-Hospital-the-Go-To-for-Fast-Hassle-Free-Care-img.webp" alt="Making your daycare hospital the go-to for fast, hassle-free care" title="Making your daycare hospital the go-to for fast, hassle-free care" loading="lazy">
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
        <img src="/assets/images/Why-Do-Daycare-Hospitals-Need-Digital-Marketing-MfunL-img.webp" alt="Why do daycare hospitals need digital marketing" title="Why do daycare hospitals need digital marketing" loading="lazy">
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">Why Do Daycare Hospitals Need Digital Marketing?</h2>
        <h3 class="h-3">Turning online searches into patient footfall for same-day procedures</h3>
        <p>Daycare hospitals are known for providing fast and effective care, but the challenge lies in making sure the right patients find you at the right time. Traditional marketing doesn’t cut it anymore—today, patients are searching online, comparing reviews, and booking appointments digitally.</p>
        <p>MfunL steps in with custom strategies that not only bring in traffic but also ensure that traffic converts into patient visits.</p> <p>Here’s how we do it:</p>

        <ul class="hover-list">
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
            <p>Customised marketing campaigns focused on same-day procedures like minor surgeries, diagnostics, and outpatient treatments.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
            <p>Search Engine Optimisation (SEO) to ensure your daycare hospital appears for targeted procedure-related searches.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
            <p>Lead capture systems to make appointment booking easy and fast.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
            <p>Patient conversion tactics, including staff training and follow-up systems, that nurture leads and increase bookings.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-heart-pulse"></i></span>
            <p>Ongoing patient outreach to build trust and encourage patients to return for future care.</p>
          </li>
        </ul>

        <p>We turn digital searches into appointments. Let MfunL, your healthcare digital marketing agency, help your daycare hospital grow.</p>
      </div>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('trend-grid') ?>

<?php
$growthTimeline = [
    'Expertise in promoting short-stay and daycare surgery models.',
    'Custom campaigns to highlight specific procedures, such as cataract, piles, hernia, or cosmetic surgery.',
    'Location-based visibility ensures your hospital shows up for local searches.',
    'Easy booking journeys that match the quick-care experience you offer.',
    'Lead handling and staff training to convert enquiries into same-day appointments.',
    'Build online trust with patient reviews and day-in-the-life content.',
    'Full support—from awareness to booking, follow-up, and reviews.',
    'Transparent reporting and clear results for your hospital’s growth.',
];
?>
<section class="section-gap-both growth-timeline">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">Why Choose MfunL for Your Daycare Hospital?</h2>
    <h3 class="h-3 text-center">We help you get noticed by patients who want faster, safer care—without long hospital stays.</h3>

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
$daycareHospitalFaqs = [
    ['question' => 'How quickly can you see results with digital marketing for daycare hospitals?', 'answer' => 'Daycare hospitals typically experience an increase in enquiries and bookings within 2&ndash;3 months, depending on the level of competition and the scale of the campaign.'],
    ['question' => 'What if you already have a website and social media presence?', 'answer' => 'We optimise what you already have by improving SEO, refining social media campaigns, and adding lead capture systems for better conversions.'],
    ['question' => 'Do we also assist with patient retention, in addition to new bookings?', 'answer' => 'Yes. We create outreach strategies, reminder campaigns, and patient engagement content that encourage repeat visits and referrals.'],
    ['question' => 'Is our digital marketing affordable for smaller or mid-size daycare hospitals?', 'answer' => 'Yes. Our campaigns are scalable and budget-friendly, ensuring even smaller centres see measurable ROI in patient bookings.'],
    ['question' => 'How do we ensure compliance in healthcare promotions?', 'answer' => 'We adhere to strict medical communication guidelines and ethical standards, ensuring that your promotions remain professional, transparent, and compliant.'],
];
?>
<section>
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">You May Want to Know</h2>
    <h3 class="h-3 text-center">Everything you need to know, right here.</h3>
    <div class="faq__accordion faq__accordion--centered mt-lg">
      <?php foreach ($daycareHospitalFaqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="dh-faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="dh-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
