<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
$careerCsrfField = \App\Core\Csrf::field();
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/career-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Careers</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width text-center">
  <h2 class="h-2">Career Opportunities at MfunL</h2>
  <h3 class="h-3">Leading healthcare digital marketing agency in Kolkata</h3>
  <p>If you are looking to hone your craft, ignite your passion and push your limits, you have come to the right place. We are always looking for new passionate team members that can drive our creations to new heights.</p>

  <div class="career-poster-grid">
    <div class="career-poster-card">
      <img src="/assets/images/BDM-Career-poster.webp" alt="Business Development Manager — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Manager">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <img src="/assets/images/business-dev-01.webp" alt="Business Development Executive — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Executive">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <img src="/assets/images/business-dev-02.webp" alt="Business Development Executive — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Executive">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <img src="/assets/images/Senior-Google-Ads-Expert-Hiring.webp" alt="Senior Google Ads Expert — we're hiring" class="b-rad" loading="lazy">
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Senior Google Ads Expert">Apply Now</button>
    </div>
  </div>
</section>

<section class="career-apply-section" id="apply">
  <div class="section-width">
    <h2 class="section-eyebrow">Apply Now</h2>

    <form action="/career/apply/" method="post" enctype="multipart/form-data" class="lead-form lead-form--grid career-form__form">
      <?= $careerCsrfField ?>
      <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="form_type" value="career">

      <label><span class="field-label">Name<span class="required-mark">*</span></span>
        <input type="text" name="name" required>
      </label>

      <label><span class="field-label">Email<span class="required-mark">*</span></span>
        <input type="email" name="email" required>
      </label>

      <label><span class="field-label">Phone Number<span class="required-mark">*</span></span>
        <input type="tel" name="phone" required>
      </label>

      <label><span class="field-label">Please Select Your Expertise<span class="required-mark">*</span></span>
        <select name="position" required>
          <option value="">Select one</option>
          <option>WordPress Developer</option>
          <option>Content Writer</option>
          <option>Graphic Designer</option>
          <option>SEO Specialist</option>
          <option>Social Media Marketing Specialist</option>
          <option>Other</option>
        </select>
      </label>

      <label><span class="field-label">Years of Experience<span class="required-mark">*</span></span>
        <input type="number" name="experience_years" min="0" max="50" required>
      </label>

      <label class="lead-form__full"><span class="field-label">Upload Your CV<span class="required-mark">*</span></span>
        <input type="file" name="cv" accept=".jpg,.jpeg,.png,.pdf" required>
        <small class="field-hint">File format .jpg/.png/.pdf, size not more than 1 MB.</small>
      </label>

      <button type="submit" class="contact-btn">Submit Application</button>
    </form>
  </div>
</section>
