<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/MfunL-Website-Banner.webp" alt="Healthcare Website Design" title="Healthcare Website Design" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Healthcare Website Design</h1>
    <p class="page-hero__sub">Build a digital presence that works for you &mdash; turn clicks into patients with a custom-designed website.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width content-tabs">
  <div class="content-tabs__inner">
    <div class="content-tabs__nav">
      <?= \App\Core\View::partial('service-nav', ['current' => 'healthcare-website-design']) ?>

      <?= \App\Core\View::partial('side-contact') ?>
    </div>

    <div class="content-tabs__panels">

      <div class="content-tabs__panel" id="wd-tab-clicking">
        <h2 class="h-2">Why Aren&rsquo;t Patients Clicking &lsquo;Book Now&rsquo; Even After Visiting Your Website?</h2>
        <h3 class="h-3">Is your website working to its full potential?</h3>
        <p>Your website is often the first impression patients have of your practice. Is it driving results or just a static online brochure?</p>
        <p>At MfunL, we specialise in custom healthcare website design that not only attracts visitors but also converts them into loyal patients. From patient appointment booking systems to SEO-friendly medical websites, we ensure your digital presence for doctors reflects your practice&rsquo;s values while driving real results.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-Arent-Patients.webp" alt="Why Aren&rsquo;t Patients Clicking &lsquo;Book Now&rsquo; Even After Visiting Your Website?" title="Why Aren&rsquo;t Patients Clicking &lsquo;Book Now&rsquo; Even After Visiting Your Website?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="wd-tab-what-is">
        <h2 class="h-2">What is Healthcare Website Design?</h2>
        <h3 class="h-3">A user-friendly, SEO-optimised website that turns visits into bookings.</h3>
        <p>A good healthcare website design is more than just looks. It&rsquo;s about functionality, accessibility, and patient experience. A well-designed website helps patients easily navigate your services, book appointments, and connect with your practice.</p>
        <p>At MfunL, we focus on creating mobile-friendly websites for hospitals, clinics, doctors and all healthcare professionals and facilities that also match SEO standards to drive conversions, ensuring visitors turn into appointments.</p>
        <p><strong>Ready to build a website that converts visitors into appointments? Let&rsquo;s get started today &mdash; Call <a href="tel:8336920676">8336920676</a></strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/medical-with-ai.webp" alt="What is Healthcare Website Design?" title="What is Healthcare Website Design?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="wd-tab-why">
        <h2 class="h-2">Why is Healthcare Website Design Necessary?</h2>
        <h3 class="h-3">To empower your clinic with a website that drives patient engagement and growth.</h3>
        <p>A website for booking patient appointments is essential. It&rsquo;s no longer just an online brochure; it&rsquo;s a vital tool for patient engagement and practice growth.</p>
        <p><b>Here&rsquo;s why you need a healthcare website:</b></p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Allow patients to book appointments online, reducing friction and improving efficiency.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> A mobile-friendly hospital website ensures you&rsquo;re accessible anytime, anywhere.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> SEO-friendly medical websites rank higher, making it easier for patients to find you online.</li>
        </ul>
        <p><strong>Get started today and create a website that simplifies bookings and boosts visibility.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/web-business.webp" alt="Why is Healthcare Website Design Necessary?" title="Why is Healthcare Website Design Necessary?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="wd-tab-offer">
        <h2 class="h-2">What We Offer</h2>
        <h3 class="h-3">A comprehensive website that meets all your digital needs.</h3>
        <p>At MfunL, we offer a full suite of healthcare website design services that cater to the needs of your clinic while improving patient engagement and conversions:</p>

        <div class="content-tabs__grid content-tabs__grid--2col">
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Simplify-appointment-scheduling.webp" alt="Simplify appointment scheduling with a patient appointment booking website that fits your practice&rsquo;s workflow" title="Simplify appointment scheduling with a patient appointment booking website that fits your practice&rsquo;s workflow" class="b-rad" loading="lazy">
            <p>Simplify appointment scheduling with a patient appointment booking website that fits your practice&rsquo;s workflow.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Enhance-online-presence.webp" alt="Enhance online presence with SEO-optimised medical websites that rank higher and attract more patients" title="Enhance online presence with SEO-optimised medical websites that rank higher and attract more patients" class="b-rad" loading="lazy">
            <p>Enhance online presence with SEO-optimised medical websites that rank higher and attract more patients.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Transform-your-website.webp" alt="Transform your website into a lead-generating platform for clinics" title="Transform your website into a lead-generating platform for clinics" class="b-rad" loading="lazy">
            <p>Transform your website into a lead-generating platform for clinics, converting visitors into booked appointments.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/We-provide-ongoing-support.webp" alt="We provide ongoing support and updates" title="We provide ongoing support and updates" class="b-rad" loading="lazy">
            <p>We provide ongoing support and updates to ensure your website remains current and optimised for the best results.</p>
          </div>
        </div>

        <p><strong>Want a website that converts? Let&rsquo;s discuss how we can build a website that works for your practice &mdash; Call <a href="tel:8336920676">8336920676</a></strong></p>
      </div>

      <div class="content-tabs__panel" id="wd-tab-why-us">
        <h2 class="h-2">Why Partner with MfunL for Healthcare Website Design?</h2>
        <h3 class="h-3">Experts in creating websites that generate leads and convert visitors into patients.</h3>
        <p>We provide custom healthcare website designs tailored to meet the unique needs of your practice.</p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Our SEO-friendly medical websites help improve rankings, increasing patient footfall.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> We specialise in understanding the needs of healthcare providers, ensuring your website is designed to drive results.</li>
        </ul>
        <p><strong>Ready to improve your digital presence? Contact MfunL today for a custom website design that generates leads and grows your practice.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-Partner.webp" alt="Why Partner with MfunL for Healthcare Website Design?" title="Why Partner with MfunL for Healthcare Website Design?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="wd-tab-faq">
        <h2 class="h-2">You May Want to Know</h2>
        <div class="faq__accordion">
          <?php
          $wdFaqs = [
              ['question' => 'What is the importance of an SEO-friendly medical website?', 'answer' => 'SEO-friendly medical websites help your practice show up in local search results, improving visibility and attracting new patients.'],
              ['question' => 'Can I integrate online appointment booking into my healthcare website?', 'answer' => 'Yes, we offer a website for booking patient appointments, enabling patients to schedule online with ease.'],
              ['question' => 'How mobile-friendly will my healthcare website be?', 'answer' => 'We ensure your mobile-friendly hospital website is fully responsive and works seamlessly across all devices, providing a great user experience for patients.'],
              ['question' => 'Will my website help me generate leads for my clinic?', 'answer' => 'Yes, we specialise in lead generation websites for clinics, which include clear calls-to-action, contact forms, and booking systems to convert visitors into patients.'],
              ['question' => 'How long does it take to build my healthcare website?', 'answer' => 'Typically, a custom healthcare website design takes 4–6 weeks, depending on your specific needs and features. We ensure everything is tailored to your practice.'],
          ];
          ?>
          <?php foreach ($wdFaqs as $i => $faq): ?>
            <div class="faq-item">
              <h4>
                <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="wd-faq-answer-<?= $i ?>">
                  <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
                  <span class="faq-item__icon" aria-hidden="true"></span>
                </button>
              </h4>
              <div class="faq-item__answer" id="wd-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
                <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/faqs-image.webp" alt="You May Want to Know" title="You May Want to Know" loading="lazy">
      </div>

    </div>
  </div>
</section>
