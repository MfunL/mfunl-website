<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/career-banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Careers</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap section-width text-center">
  <h2 class="h-2">Career Opportunities at MfunL</h2>
  <h3 class="h-3">Leading healthcare digital marketing agency in Kolkata</h3>
  <p>If you are looking to hone your craft, ignite your passion and push your limits, you have come to the right place. We are always looking for new passionate team members that can drive our creations to new heights.</p>

  <div class="career-poster-grid">
    <div class="career-poster-card">
      <button type="button" class="career-poster-card__image-btn" data-open-lightbox="/assets/images/BDM-Career-poster.webp" aria-label="View Business Development Manager job poster">
        <img src="/assets/images/BDM-Career-poster.webp" alt="Business Development Manager — we're hiring" title="Business Development Manager — we're hiring" class="b-rad" loading="lazy">
      </button>
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Manager">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <button type="button" class="career-poster-card__image-btn" data-open-lightbox="/assets/images/business-dev-01.webp" aria-label="View Business Development Executive job poster">
        <img src="/assets/images/business-dev-01.webp" alt="Business Development Executive — we're hiring" title="Business Development Executive — we're hiring" class="b-rad" loading="lazy">
      </button>
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Executive">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <button type="button" class="career-poster-card__image-btn" data-open-lightbox="/assets/images/business-dev-02.webp" aria-label="View Business Development Executive job poster">
        <img src="/assets/images/business-dev-02.webp" alt="Business Development Executive — we're hiring" title="Business Development Executive — we're hiring" class="b-rad" loading="lazy">
      </button>
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Business Development Executive">Apply Now</button>
    </div>

    <div class="career-poster-card">
      <button type="button" class="career-poster-card__image-btn" data-open-lightbox="/assets/images/Senior-Google-Ads-Expert-Hiring.webp" aria-label="View Senior Google Ads Expert job poster">
        <img src="/assets/images/Senior-Google-Ads-Expert-Hiring.webp" alt="Senior Google Ads Expert — we're hiring" title="Senior Google Ads Expert — we're hiring" class="b-rad" loading="lazy">
      </button>
      <button type="button" class="btn btn--accent" data-open-modal="career-modal" data-position="Senior Google Ads Expert">Apply Now</button>
    </div>
  </div>
</section>

<?php $csrfField = \App\Core\Csrf::field(); ?>
<section class="section-gap-bottom section-width">
  <div class="wrap">
    <div class="text-center">
      <h2 class="h-2">Career Opportunities at MfunL</h2>
      <h3 class="h-3">Leading healthcare digital marketing agency in Kolkata</h3>
      <p>If you are looking to hone your craft, ignite your passion and push your limits, you have come to the right place. We are always looking for new passionate team members that can drive our creations to new heights.</p>
    </div>

    <form action="/career/apply/" method="post" class="lead-form lead-form--grid career-apply-form">
      <?= $csrfField ?>
      <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="form_type" value="career_page">

      <label><span class="field-label">Name<span class="required-mark">*</span></span>
        <input type="text" name="name" required>
      </label>

      <label><span class="field-label">Email<span class="required-mark">*</span></span>
        <input type="email" name="email" required>
      </label>

      <label><span class="field-label">Phone Number<span class="required-mark">*</span></span>
        <input type="tel" name="phone" required>
      </label>

      <label><span class="field-label">Years of Experience<span class="required-mark">*</span></span>
        <select name="experience" required>
          <option value="">Select one</option>
          <option>0 - 1 Year</option>
          <option>1 - 3 Years</option>
          <option>3 - 5 Years</option>
          <option>More Than 5 Years</option>
        </select>
      </label>

      <label class="lead-form__full"><span class="field-label">Please Select Your Expertise<span class="required-mark">*</span></span>
        <select name="position" required>
          <option value="">Select one</option>
          <option>Business Development Manager</option>
          <option>Business Development Executive</option>
          <option>Tele Sales Executive</option>
          <option>WordPress Developer</option>
          <option>Content Writer</option>
          <option>Graphic Designer</option>
          <option>SEO Specialist</option>
          <option>Social Media Marketing Specialist</option>
          <option>Other</option>
        </select>
      </label>

      <button type="submit" class="contact-btn">Apply Now</button>
    </form>
  </div>
</section>

