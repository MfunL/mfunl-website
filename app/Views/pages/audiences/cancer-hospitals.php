<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Digital-Marketing-Agency-for-Cancer-Hospitals-Banner-MfunL.webp" alt="Digital Marketing Agency for Cancer Hospitals" title="Digital Marketing Agency for Cancer Hospitals" width="1920" height="800" loading="eager" fetchpriority="high">

  <div class="wrap page-hero__inner">
    <h1>Digital Marketing Agency for Cancer Hospitals</h1>

    <?= \App\Core\View::partial('trust-slide') ?>

    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-bottom">
  <div class="wrap section-width">
    <div class="article-row">
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">MfunL: Helping Cancer Hospitals Increase Patient Footfall</h2>
        <h3 class="h-3">When patients search for cancer care, your hospital should be their first choice</h3>
        <p>
        Choosing a cancer hospital isn’t just a decision—it’s a turning point. Patients and families turn to the internet with hope, urgency, and a need for reassurance. From breast cancer surgeries to chemotherapy and radiation therapy, they’re searching for expertise they can trust.
        </p>
        <p>
        The question is, when someone searches for the best cancer hospital nearby, does your name appear first? Or are other hospitals gaining more visibility, receiving better reviews, and implementing smoother appointment systems?
        </p>
        <p>
        As a leading healthcare digital marketing agency in Kolkata, MfunL understands the emotion behind every click. We craft targeted campaigns using proven cancer hospital marketing strategies that help you connect with patients when it matters most.
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
          <img class="article-row__photo" src="/assets/images/Helping-Cancer-Hospitals-Increase-Patient-Footfall.webp" alt="Helping cancer hospitals increase patient footfall" title="Helping cancer hospitals increase patient footfall" loading="lazy">
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
        <img src="/assets/images/Why-do-Cancer-Hospitals-Need-Digital-Marketing-img.webp" alt="Why do cancer hospitals need digital marketing" title="Why do cancer hospitals need digital marketing" loading="lazy">
        <p class="pricing-service-cta pricing-service-cta--left">
          <a class="btn btn--accent" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
          <a class="btn btn--outline" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        </p>
      </div>
      <div class="article-row__content">
        <h2 class="h-2 h-2--dark">Why Do Cancer Hospitals Need Digital Marketing?</h2>
        <h3 class="h-3">Turning online searches into appointments for cancer treatment</h3>
        <p>Cancer hospitals offer life-saving treatments, but reaching the right patients at the right time can be challenging. Today, patients turn to online resources, patient reviews, and appointment booking systems when researching cancer treatment options.</p>
        <p>As a healthcare digital marketing agency in Kolkata, MfunL helps oncologists, oncosurgeons, and cancer hospitals increase their visibility and convert online leads into actual patient visits.</p>
        <p>Our strategies include:</p>

        <ul class="hover-list">
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
            <p>Personalised healthcare marketing campaigns to target various cancer treatments, including chemotherapy, radiation therapy, and surgery.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
            <p>Targeted SEO strategies to ensure your hospital ranks for specific cancer-related searches in your area.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-calendar-check"></i></span>
            <p>Efficient lead conversion through user-friendly appointment booking systems, staff training, and patient engagement.</p>
          </li>
          <li class="hover-list__item">
            <span class="hover-list__icon" aria-hidden="true"><i class="fa-solid fa-handshake"></i></span>
            <p>Building trust through patient success stories, testimonials, and visible treatment outcomes.</p>
          </li>
        </ul>

        <p>Team up with MfunL to strengthen the visibility of your cancer hospital and connect with the patients who need you most.</p>
      </div>
    </div>
  </div>
</section>

<?= \App\Core\View::partial('trend-grid') ?>

<?php
$growthTimeline = [
    'Expertise in oncology marketing and understanding patient decision-making.',
    'Custom strategies to match your hospital’s cancer specialities.',
    'Separate campaigns for surgical, radiation, and medical oncology departments.',
    'Higher Google rankings for cancer treatment services in your area.',
    'Staff training to handle enquiries with empathy and turn them into visits.',
    'Build trust through real reviews, testimonials, and survivor stories.',
    'End-to-end support—from lead generation to follow-up engagement.',
    'Simple communication, smooth processes, and clear, trackable results.',
];
?>
<section class="section-gap-both growth-timeline">
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">Why Choose MfunL for Your Cancer Hospital?</h2>
    <h3 class="h-3 text-center">We help cancer hospitals reach the right patients—at the right time.</h3>

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
$cancerHospitalFaqs = [
    ['question' => 'How fast can a cancer hospital see results with digital marketing?', 'answer' => 'Most hospitals notice improved online visibility and increased patient enquiries within 3&ndash;4 months, although the full impact depends on the level of competition and campaign intensity.'],
    ['question' => 'Can digital marketing highlight specific cancer treatments (like breast or GI oncology)?', 'answer' => 'Yes. We create targeted campaigns for individual treatments or departments, ensuring patients searching for those services find your hospital first.'],
    ['question' => 'What if your hospital already has a website and social media pages?', 'answer' => 'We don&rsquo;t just build; we optimise what you already have. From upgrading SEO to refining social media and running ads, we maximise your existing assets for better conversions.'],
    ['question' => 'Is digital marketing affordable for medium-sized cancer hospitals?', 'answer' => 'Yes. Campaigns are personalised to fit budgets, whether you&rsquo;re a leading institute or a regional cancer centre, while still delivering measurable ROI in patient bookings.'],
    ['question' => 'Can MfunL handle sensitive healthcare compliance in digital promotions?', 'answer' => 'Yes. We follow strict healthcare communication guidelines, ensuring your hospital&rsquo;s digital outreach remains ethical, transparent, and compliant with medical regulations.'],
];
?>
<section>
  <div class="wrap section-width">
    <h2 class="h-2 h-2--dark text-center">You May Want to Know</h2>
    <h3 class="h-3 text-center">Everything you need to know, right here.</h3>
    <div class="faq__accordion faq__accordion--centered mt-lg">
      <?php foreach ($cancerHospitalFaqs as $i => $faq): ?>
        <div class="faq-item">
          <h3>
            <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="ch-faq-answer-<?= $i ?>">
              <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
              <span class="faq-item__icon" aria-hidden="true"></span>
            </button>
          </h3>
          <div class="faq-item__answer" id="ch-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
            <p><?= $faq['answer'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
