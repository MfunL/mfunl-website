<?php
$services = [
    [
        'website.png',
        'Healthcare Website Design',
        'We create responsive, SEO-friendly websites with easy booking option.',
        '/healthcare-website-design/'
    ],
    [
        'good-conversion-rate.png',
        'Patient Conversion Management',
        'The leads are converted into real patients through regular follow-ups.',
        '/patient-conversion-management/'
    ],
    [
        'reputation-management.png',
        'Online Reputation Management',
        'We build and protect online credibility through reviews.',
        '/online-reputation-management/'
    ],
    [
        'content-creator-a.png',
        'Medical Content Creation',
        'We deliver accurate, SEO-friendly, and patient-focused medical content.',
        '/medical-content-creation/'
    ],
    [
        'social-media.png',
        'Healthcare Social Media Marketing',
        'Our team creates engaging, educational platform-specific posts.',
        '/healthcare-social-media-marketing/'
    ],
    [
        'coding.png',
        'Healthcare PPC',
        'Data-backed strategies to help clinics rank top.',
        '/healthcare-google-ads/'
    ],
    [
        'seo.png',
        'Healthcare SEO',
        'We create personalized SEO plans to boost rankings.',
        '/healthcare-seo/'
    ],
    [
        'meta.png',
        'Healthcare Meta Ads',
        'Meta ads target patients, promoting services and engagement.',
        '/healthcare-meta-ads/'
    ],
];
?>

<section class="what-we-do-best">
  <div class="wrap">

    <h2 class="section-eyebrow">What We Do Best</h2>

    <p class="section-heading"><span class="accent">Healthcare</span> Digital Marketing</p>

    <p class="what-we-do-best__intro">
      At MFunL, we do more than just enhance your online presence.
    </p>

    <div class="what-we-do-best__grid">

      <?php foreach ($services as [$icon, $label, $description, $url]): ?>

        <a
          class="service-card"
          href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"
        >

          <div class="service-card__top">

            <img
              src="/assets/images/<?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?>"
              alt="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>"
              title="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>"
              width="48"
              height="48"
              loading="lazy"
            >

            <h3>
              <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
            </h3>

          </div>

          <p>
            <?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>
          </p>

          <span class="service-card__arrow" aria-hidden="true">→</span>

        </a>

      <?php endforeach; ?>

    </div>

    <p class="what-we-do-best__contact">
      Still have a question? Please feel free to
      <a href="/contact/">Contact Us</a>
    </p>

  </div>
</section>