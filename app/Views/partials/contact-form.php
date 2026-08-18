<?php
$csrfField = \App\Core\Csrf::field();
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
?>
<section class="contact-form-section" id="contact">
  <div class="wrap">
    <h2 class="section-eyebrow">Get In Touch</h2>
    <p class="section-heading">Submit your details and take the<br> <span class="mark">first step</span> towards growth.</p>

    <div class="contact-form-section__inner">
      <div class="contact-form-section__media">
        <img src="/assets/images/ceo-Image.webp" alt="CEO of MfunL" title="CEO of MfunL" loading="lazy">
      </div>

      <form action="/contact/submit/" method="post" class="lead-form lead-form--grid contact-form-section__form">
        <?= $csrfField ?>
        <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="form_type" value="contact">
        <input type="hidden" name="page_url" value="<?= htmlspecialchars($currentPath, ENT_QUOTES, 'UTF-8') ?>">

        <label><span class="field-label">Name of Organization<span class="required-mark">*</span></span>
          <input type="text" name="organisation" required>
        </label>

        <label><span class="field-label">Profession/Category<span class="required-mark">*</span></span>
          <select name="profession" required>
            <option value="">Select one</option>
            <option>Hospital</option>
            <option>Nursing Home</option>
            <option>Clinic</option>
            <option>Lab</option>
            <option>Individual Doctor</option>
            <option>Any Other Medical Segment</option>
          </select>
        </label>

        <label><span class="field-label">Your Name<span class="required-mark">*</span></span>
          <input type="text" name="name" required>
        </label>

        <label><span class="field-label">Designation<span class="required-mark">*</span></span>
          <select name="designation" required>
            <option value="">Select one</option>
            <option>Owner</option>
            <option>Representative</option>
            <option>CEO</option>
            <option>Marketing Head</option>
            <option>Individual</option>
          </select>
        </label>

        <label><span class="field-label">Phone Number<span class="required-mark">*</span></span>
          <input type="tel" name="phone" required>
        </label>

        <label><span class="field-label">Email<span class="required-mark">*</span></span>
          <input type="email" name="email" required>
        </label>

        <label class="lead-form__full"><span class="field-label">Website</span>
          <input type="url" name="website_url" placeholder="https://">
        </label>

        <label class="lead-form__full"><span class="field-label">Address<span class="required-mark">*</span></span>
          <textarea name="address" rows="2" required></textarea>
        </label>

        <label><span class="field-label">City<span class="required-mark">*</span></span>
          <input type="text" name="city" required>
        </label>

        <label><span class="field-label">Pincode<span class="required-mark">*</span></span>
          <input type="text" name="pincode" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" required>
        </label>

        <button type="submit" class="contact-btn">Send Message</button>
      </form>
    </div>
  </div>
</section>
