<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Healthcare-Agency-for-Multispecialty-Hospitals-Banner.webp" alt="Digital Marketing Agency for Multispecialty Hospitals" title="Digital Marketing Agency for Multispecialty Hospitals" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Digital Marketing Agency for Multispecialty Hospitals</h1>

    <?= \App\Core\View::partial('trust-slide') ?>

    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">MfunL: Helping Multispecialty Hospitals Attract Patients and Build Loyalty.</h2>
        <h3 class="h-3">Make Your Hospital the First Choice with a Powerful First Impression.</h3>
        <p>Today’s healthcare decisions begin with a Google search. Whether someone needs cardiology care, orthopaedic surgery, or gynaecology services, they’re Googling first—comparing hospitals, checking reviews, and booking where they find trust and convenience.</p>
        <p>If your multispecialty hospital in Kolkata isn’t ranking high during these searches, you risk losing visibility, credibility, and patients—to competitors who’ve mastered the digital game.</p>
        <p>At MfunL, a trusted healthcare digital marketing agency in Kolkata, we specialise in digital marketing for multispecialty hospitals. Our strategies go beyond basic promotion—we build digital ecosystems that increase reach, drive patient enquiries, and turn online interest into booked appointments.</p>
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
          <img class="article-row__photo" src="/assets/images/Helping-Multispecialty-Hospitals-Attract-and-Retain-Patients.webp" alt="MfunL helping multispecialty hospitals increase patient footfall" title="MfunL helping multispecialty hospitals increase patient footfall" loading="lazy">
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
        <img src="/assets/images/Why-Do-Multispecialty-Hospitals-Need-Digital-Marketing-img.webp" alt="Why do multispecialty hospitals need digital marketing" title="Why do multispecialty hospitals need digital marketing" loading="lazy">
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">Why Do Multispecialty Hospitals Need Digital Marketing?</h2>
        <h3 class="h-3">Transform your online visibility into patient bookings across specialities.</h3>
        <p>Multispecialty hospitals offer a wide variety of services, but the challenge lies in ensuring that all specialities are equally represented and accessible online. When patients are searching for treatment, whether it’s for diabetes care, surgical procedures, or neurological treatments, how easy is it for them to find your hospital?</p>
        <p>In the age of Google searches and online reviews, relying solely on traditional marketing isn’t enough. That’s where we come in. We don’t just generate leads — we ensure your leads convert into appointments, and your patients come back for continued care.</p>
        <p>Here’s how MfunL helps multispecialty hospitals attract patients for every department:</p>

        <ul class="hover-list">
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
            <p>Personalised marketing strategies to boost footfall for each speciality within your hospital.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
            <p>Targeted SEO that ensures your hospital ranks for specialised services.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
            <p>Patient conversion through staff training and follow-up systems that maximise every lead.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
            <p>Community outreach campaigns that build trust and keep patients coming back.</p>
          </li>
        </ul>

        <p>Let MfunL help your multispecialty hospital turn online visitors into appointments.</p>
      </div>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('trend-grid') ?>

<?php
$growthTimeline = [
    'Specialised in healthcare marketing, so we understand hospitals inside out.',
    'Personalised strategies for your services—no copy-paste marketing plans.',
    'Individual campaigns for each department to attract the right patients.',
    'Top rankings on Google when people search for treatments you offer.',
    'Staff training focused on converting calls and leads into actual visits.',
    'Patient trust is built through real reviews and digital reputation.',
    'End-to-end support—from lead generation to follow-ups and beyond.',
    'Clear communication, simplified processes, and measurable results.',
];
?>
<section class="section-gap-both growth-timeline">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">Why Choose MfunL for Your Multi-speciality Hospital?</h2>
    <h3 class="h-3 text-center">Not just another agency—your hospital’s growth partner.</h3>

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
$multispecialtyFaqs = [
    ['question' => 'How can digital marketing effectively highlight different specialities simultaneously?', 'answer' => 'We design speciality-specific campaigns for cardiology, orthopaedics, gynaecology, neurology, and more, ensuring that each department reaches patients actively searching for its services.'],
    ['question' => 'How does MfunL help hospitals build credibility and trust among patients?', 'answer' => 'By managing online reviews, showcasing authentic patient stories, and maintaining a consistent digital presence, we strengthen your hospital&rsquo;s reputation and make it the go-to choice for care.'],
    ['question' => 'Is digital marketing a costly investment for your multispecialty hospital?', 'answer' => 'No. Our solutions are scalable and budget-conscious, delivering measurable ROI whether you are a regional facility or a large multispecialty chain.'],
    ['question' => 'Does MfunL only set up campaigns, or do we also provide ongoing support?', 'answer' => 'We are long-term partners. From continuous strategy updates to online reputation management and patient retention, we ensure your hospital continues to grow across all specialities.'],
    ['question' => 'Can digital marketing improve patient retention and new bookings?', 'answer' => 'Yes. We implement follow-up systems, engagement campaigns, and loyalty-driven outreach that encourage patients to return for ongoing care and choose your hospital for other treatments.'],
];
?>
<section>
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">You May Want to Know</h2>
    <h3 class="h-3 text-center">Everything you need to know, right here.</h3>
    <div class="faq__accordion faq__accordion--centered mt-lg">
      <?php foreach ($multispecialtyFaqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="msh-faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="msh-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
