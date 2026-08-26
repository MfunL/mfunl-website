<?php
/** @var \App\Core\Request $request */
$csrfField = \App\Core\Csrf::field();
?>
<div class="modal" id="lead-modal" role="dialog" aria-modal="true" aria-labelledby="lead-modal-title" hidden>
  <div class="modal__backdrop" data-close-modal></div>
  <div class="modal__dialog modal__dialog--split">
    <button type="button" class="modal__close" data-close-modal aria-label="Close">&times;</button>
    <div class="modal__panel modal__panel--split">
    <div class="modal__panel-media">
      <img src="/assets/images/ceo-image.webp" alt="CEO of MfunL" title="CEO of MfunL" loading="lazy">
    </div>
    <div class="modal__panel-content">
      <h3 id="lead-modal-title">This is your first step to increasing your OPD</h3>
      <form action="/contact/submit/" method="post" class="lead-form lead-form--grid">
        <?= $csrfField ?>
        <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="form_type" value="popup">
        <input type="hidden" name="page_url" value="">

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

        <button type="submit" class="contact-btn">Submit</button>
      </form>
    </div>
    </div>
  </div>
</div>

<div class="modal" id="audit-modal" role="dialog" aria-modal="true" aria-labelledby="audit-modal-title" hidden>
  <div class="modal__backdrop" data-close-modal></div>
  <div class="modal__dialog">
    <button type="button" class="modal__close" data-close-modal aria-label="Close">&times;</button>
    <div class="modal__panel">
    <h3 id="audit-modal-title">Request a Free Audit</h3>
    <form action="/contact/submit/" method="post" class="lead-form">
      <?= $csrfField ?>
      <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="form_type" id="audit-form-type" value="website_audit">
      <label>Name<input type="text" name="name" required></label>
      <label>Email<input type="email" name="email" required></label>
      <label>Phone<input type="tel" name="phone" required></label>
      <label>Website or GMB URL<input type="text" name="message" placeholder="https://"></label>
      <button type="submit" class="btn btn--accent btn--block">Request Audit</button>
    </form>
    </div>
  </div>
</div>

<div class="modal" id="career-modal" role="dialog" aria-modal="true" aria-labelledby="career-modal-title" hidden>
  <div class="modal__backdrop" data-close-modal></div>
  <div class="modal__dialog">
    <button type="button" class="modal__close" data-close-modal aria-label="Close">&times;</button>
    <div class="modal__panel">
    <h3 id="career-modal-title">Apply Before It&rsquo;s Gone!</h3>
    <form action="/career/apply/" method="post" class="lead-form career-modal-form" enctype="multipart/form-data">
      <?= $csrfField ?>
      <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="form_type" value="career_popup">
      <input type="hidden" name="position" id="career-modal-position" value="General Application">

      <label><span class="field-label">Name<span class="required-mark">*</span></span>
        <input type="text" name="name" required>
      </label>

      <label><span class="field-label">Email<span class="required-mark">*</span></span>
        <input type="email" name="email" required>
      </label>

      <label><span class="field-label">Phone Number<span class="required-mark">*</span></span>
        <input type="tel" name="phone" required>
      </label>

      <label><span class="field-label">Upload Your CV<span class="required-mark">*</span></span>
        <input type="file" name="cv" accept=".jpg,.jpeg,.png,.pdf" required>
        <small class="field-hint">File format .jpg/.png/.pdf, size not more than 1 MB.</small>
      </label>

      <button type="submit" class="btn btn--accent btn--block">Apply Now</button>
    </form>
    </div>
  </div>
</div>

<div class="modal modal--exit" id="exit-modal" role="dialog" aria-modal="true" aria-labelledby="exit-modal-title" hidden>
  <div class="modal__backdrop" data-close-modal></div>
  <div class="modal__dialog">
    <button type="button" class="modal__close" data-close-modal aria-label="Close">&times;</button>
    <div class="modal__panel">
    <img src="/assets/images/Kuntal-Sir-CEO-of-MfunL-img.webp" alt="Kuntal Chatterjee, CEO of MfunL" title="Kuntal Chatterjee, CEO of MfunL" width="330" height="475" loading="lazy">
    <h3 id="exit-modal-title">This is your first step to increasing your OPD</h3>
    <form action="/contact/submit/" method="post" class="lead-form">
      <?= $csrfField ?>
      <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="form_type" value="consultation">
      <label>Name<input type="text" name="name" required></label>
      <label>Phone<input type="tel" name="phone" required></label>
      <button type="submit" class="btn btn--accent btn--block">Book My Free Call</button>
    </form>
    </div>
  </div>
</div>

<div class="lightbox" id="media-lightbox" role="dialog" aria-modal="true" hidden>
  <div class="modal__backdrop" data-close-lightbox></div>
  <div class="lightbox__panel">
    <button type="button" class="modal__close" data-close-lightbox aria-label="Close">&times;</button>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="light-box image" title="light-box image" id="media-lightbox-image">
  </div>
</div>

<div class="lightbox" id="video-lightbox" role="dialog" aria-modal="true" hidden>
  <div class="modal__backdrop" data-close-lightbox></div>
  <div class="lightbox__panel lightbox__panel--video">
    <button type="button" class="modal__close" data-close-lightbox aria-label="Close">&times;</button>
    <div class="lightbox__video-frame" id="video-lightbox-frame"></div>
  </div>
</div>
