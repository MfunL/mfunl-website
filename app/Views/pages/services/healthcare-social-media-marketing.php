<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <picture>
    <source media="(max-width: 640px)" srcset="/assets/images/Healthcare%20Social%20Media%20Marketing%20mobile.webp">
    <img class="page-hero__bg" src="/assets/images/Healthcare Social Media Marketing Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  </picture>
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Healthcare Social Media <br> Marketing</h1>
    <p class="page-hero__sub">Turn your social media presence into patient trust, brand growth and stronger digital visibility today.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap section-width content-tabs">
  <div class="content-tabs__inner">
    <div class="content-tabs__nav">
      <?= \App\Core\View::partial('service-nav', ['current' => 'healthcare-social-media-marketing']) ?>

      <?= \App\Core\View::partial('side-contact') ?>
    </div>

    <div class="content-tabs__panels">

      <div class="content-tabs__panel" id="hsmm-tab-brand">
        <h2 class="h-2">MfunL - Healthcare Branding Through Social Media</h2>
        <h3 class="h-3">Giving your healthcare brand a voice that connects, engages, and builds trust.</h3>
        <p>Social media isn&rsquo;t just a place to post updates anymore &mdash; it&rsquo;s your hospital or clinic&rsquo;s digital introduction.</p>
        <p>Whether you're a clinic, hospital, or specialist doctor, your digital presence as a healthcare professional plays a significant role in how patients perceive and trust you.</p>
        <p>At MfunL, we help you use healthcare social media marketing not just to stay visible, but to build credibility on social platforms and attract the right patients and engage with them.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Mfunl-Healthcare-Branding-Through-Social-Media-img.webp" alt="MfunL - Healthcare Branding Through Social Media" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="hsmm-tab-what">
        <h2 class="h-2">What is Healthcare Social Media Marketing?</h2>
        <h3 class="h-3">It is how your healthcare brand stays visible, trusted, and booked online.</h3>
        <p>Healthcare Social Media Marketing is the strategic use of social media platforms, such as Facebook, Instagram, and YouTube, to promote healthcare services, engage with patients, and establish trust.</p>
        <p>It involves creating and distributing personalized content, such as informative blogs, patient testimonials, videos, live sessions, or ads, that resonate with your target audience.</p>
        <p>At MfunL, we utilise strategic social media content to establish trust, enhance visibility, and reinforce your healthcare brand, enabling you to connect with the ideal audience and drive real engagement.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Healthcare-Social-Media-Marketing-img.webp" alt="What is Healthcare Social Media Marketing?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="hsmm-tab-why-necessary">
        <h2 class="h-2">It is how your presence becomes preference and your healthcare brand their first choice.</h2>
        <h3 class="h-3">It is how your healthcare brand stays visible, trusted, and booked online.</h3>
        <p>Before booking an appointment, patients often explore your social media. A well-branded, consistent presence can influence their decision. At MfunL, we transform your social feed into a powerful tool for healthcare branding, trust-building, and increasing patient footfall.</p>
        <p><b>Here&rsquo;s more:</b></p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Builds trust through consistent, brand-aligned messaging</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Supports hospital branding with content that reflects your speciality</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Boosts patient footfall by improving visibility and engagement</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Humanises your practice through real stories and patient interactions</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Drives targeted results through strategic social media ads.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Positions you as a trusted healthcare brand name in your speciality</li>
        </ul>
        <p><strong>Build a powerful social media presence with MfunL, where strategy meets patient connection.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/No-Online-Presence-img.webp" alt="Build a powerful social media presence with MfunL" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="hsmm-tab-offer">
        <h2 class="h-2">How MfunL Makes Social Media Work for You?</h2>
        <h3 class="h-3">We turn everyday browsing into building trust and real appointments.</h3>
        <p>At MfunL, we offer an all-inclusive medical content creation service designed to build your brand and increase patient footfall.</p>
        <p>At MfunL, we personalise every step to align with your services and audience needs.</p>

        <div class="content-tabs__grid">
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Analyse your target.webp" alt="Analyse your target audience and their concerns" class="b-rad" loading="lazy">
            <p>Analyse your target audience and their concerns.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Create videos.webp" alt="Create videos and visuals that address real questions" class="b-rad" loading="lazy">
            <p>Create videos and visuals that address real questions.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Select the right platforms.webp" alt="Select the right platforms for maximum impact" class="b-rad" loading="lazy">
            <p>Select the right platforms for maximum impact.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Manage engagement.webp" alt="Manage engagement to build community trust" class="b-rad" loading="lazy">
            <p>Manage engagement to build community trust.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Run targeted.webp" alt="Run targeted ads to reach the right patient" class="b-rad" loading="lazy">
            <p>Run targeted ads to reach the right patient.</p>
          </div>
        </div>

        <p>Contact MfunL for a smarter, patient-focused approach to healthcare social media marketing &mdash; Call <a href="tel:8336920676">8336920676</a></p>
      </div>

      <div class="content-tabs__panel" id="hsmm-tab-why-us">
        <h2 class="h-2">Why Should You Choose MfunL for Healthcare Social Media Marketing?</h2>
        <h3 class="h-3">Because we position your healthcare brand where patients are already looking.</h3>
        <p>At MfunL, we understand the challenges of healthcare marketing. Our expert team, with years of experience in healthcare digital marketing, is dedicated to help you:</p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Establish a trusted online presence</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Engage meaningfully with your audience.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Convert social media followers into loyal patients</li>
        </ul>
        <p>Choose MfunL to transform your healthcare brand into a trusted, engaging, and patient-focused online presence.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-Partner.webp" alt="Why Should You Choose MfunL for Healthcare Social Media Marketing?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="hsmm-tab-faq">
        <h2 class="h-2">You May Want to Know</h2>
        <div class="faq__accordion">
          <?php
          $hsmmFaqs = [
              ['question' => 'Why is social media important for healthcare professionals?', 'answer' => 'Social media enhances your online visibility, builds patient trust, and drives patient engagement, helping you attract and retain more patients.'],
              ['question' => 'How do you know if your social media strategy is working?', 'answer' => 'We provide detailed analytics and reporting, allowing you to see how your posts, ads, and engagement drive traffic and generate leads.'],
              ['question' => 'What kind of content should healthcare professionals post?', 'answer' => 'Healthcare professionals should focus on informative posts, patient success stories, behind-the-scenes glimpses of their practice, and updates about services and treatments.'],
              ['question' => 'How long does it take to see results from social media marketing?', 'answer' => 'Results can vary, but within a few months, you can expect to notice increased engagement, improved brand awareness, and a rise in patient inquiries.'],
              ['question' => 'Can social media help bring in new patients?', 'answer' => 'Yes. With the right strategy, targeted content, consistent posting, and paid campaigns, social media can attract new patients, increase appointment bookings, and grow your healthcare brand.'],
          ];
          ?>
          <?php foreach ($hsmmFaqs as $i => $faq): ?>
            <div class="faq-item">
              <h4>
                <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="hsmm-faq-answer-<?= $i ?>">
                  <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
                  <span class="faq-item__icon" aria-hidden="true"></span>
                </button>
              </h4>
              <div class="faq-item__answer" id="hsmm-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
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

