<?php
$seoConfig = require dirname(__DIR__, 3) . '/config/seo.php';
?>
<div class="site-header-group" id="site-header-group">
<div class="top-bar">
  <div class="wrap top-bar__inner">
    <div class="top-bar__row">
      <a class="site-header__logo" href="/" aria-label="MfunL home">
        <img src="/assets/images/Mfunl-logo-blue.png" width="180" height="65" alt="MfunL Logo" title="MfunL Logo">
      </a>
      <button type="button" class="mobile-nav-toggle" aria-expanded="false" aria-controls="mobile-nav" aria-label="Open menu">
        <i class="fa-solid fa-bars" aria-hidden="true"></i>
      </button>
    </div>
    <div class="top-bar__actions">
      <a class="btn btn--sm top-bar__btn-dm" href="/digital-marketing-2026/">Digital Marketing in 2026</a>
      <button type="button" class="btn btn--sm top-bar__btn-book" data-open-modal="lead-modal">Book a Free Consultation</button>
    </div>
  </div>
</div>

<header class="site-header" id="site-header">
  <div class="wrap site-header__inner">

    <nav class="main-nav" aria-label="Primary">
      <ul class="main-nav__list">
        <li><a href="/">Home</a></li>
        <li><a href="/about/">About</a></li>

        <li class="has-mega">
          <a href="/what-we-do/">What We Do</a>
          <div class="mega-menu">
            <ul>
              <li class="mega-menu__group has-submenu">
                <a href="/build-your-brand/">Build Your Brand</a>
                <ul class="submenu">
                  <li><a href="/medical-content-creation/">Medical Content Creation</a></li>
                  <li><a href="/healthcare-social-media-marketing/">Healthcare Social Media Marketing</a></li>
                </ul>
              </li>
              <li class="mega-menu__group has-submenu">
                <a href="/patient-lead-generation/">Patient Lead Generation</a>
                <ul class="submenu">
                  <li><a href="/healthcare-seo/">Healthcare SEO/AEO/GEO</a></li>
                  <li><a href="/healthcare-google-ads/">Healthcare PPC</a></li>
                  <li><a href="/healthcare-meta-ads/">Healthcare Meta Ads</a></li>
                </ul>
              </li>
              <li><a href="/healthcare-website-design/">Healthcare Website Design</a></li>
              <li><a href="/patient-conversion-management/">Patient Conversion Management</a></li>
              <li><a href="/online-reputation-management/">Online Reputation Management</a></li>
            </ul>
          </div>
        </li>

        <li class="has-mega has-mega--full">
          <a href="/who-we-serve/">Who We Serve</a>
          <div class="mega-menu mega-menu--wide">
            <ul class="wrap mega-menu__wide-grid">
              <li class="mega-menu__group">
                <a href="/digital-marketing-for-hospitals/">Hospitals</a>
                <ul>
                  <li><a href="/digital-marketing-for-general-hospitals/">General Hospital</a></li>
                  <li><a href="/digital-marketing-for-multispecialty-hospitals/">Multispecialty Hospital</a></li>
                  <li><a href="/digital-marketing-for-superspecialty-hospitals/">Superspecialty Hospital</a></li>
                  <li><a href="/digital-marketing-for-daycare-hospitals/">Daycare Hospital</a></li>
                  <li><a href="/digital-marketing-for-eye-hospitals/">Eye Hospital</a></li>
                  <li><a href="/digital-marketing-for-cancer-hospitals/">Cancer Hospital</a></li>
                  <li><a href="/digital-marketing-for-nursing-homes/">Nursing Home</a></li>
                </ul>
              </li>
              <li class="mega-menu__group">
                <a href="/digital-marketing-for-clinics/">Clinics</a>
                <ul>
                  <li><a href="/digital-marketing-for-superspecialty-clinics/">Superspecialty Clinic</a></li>
                  <li><a href="/digital-marketing-for-multispecialty-clinics/">Multispecialty Clinic</a></li>
                  <li><a href="/digital-marketing-for-dental-clinics/">Dental Clinic</a></li>
                  <li><a href="/digital-marketing-for-aesthetic-clinics/">Aesthetic/Wellness Clinic</a></li>
                  <li><a href="/digital-marketing-for-ayurvedic-clinics/">Ayurvedic Clinic</a></li>
                  <li><a href="/digital-marketing-for-fertility-ivf-clinic/">Fertility/IVF Clinic</a></li>
                  <li><a href="/digital-marketing-for-hearing-aid-centres/">Hearing Aid Centre</a></li>
                </ul>
              </li>
              <li class="mega-menu__group">
                <a href="/digital-marketing-for-medical-practitioners/">Medical Practitioner</a>
                <ul class="mega-menu__scrollable">
                  <li><a href="/digital-marketing-for-general-surgeons/">General Surgeon</a></li>
                  <li><a href="/digital-marketing-for-pediatric-surgeons/">Pediatric Surgeon</a></li>
                  <li><a href="/digital-marketing-for-cosmetic-surgeons/">Cosmetic Surgeon</a></li>
                  <li><a href="/digital-marketing-for-vascular-surgeons/">Vascular Surgeon</a></li>
                  <li><a href="/digital-marketing-for-neuro-surgeons/">Neurosurgeon</a></li>
                  <li><a href="/digital-marketing-for-onco-surgeons/">Onco Surgeon</a></li>
                  <li><a href="/digital-marketing-for-gi-surgeons/">GI Surgeon</a></li>
                  <li><a href="/digital-marketing-for-ortho-surgeons/">Ortho Surgeon</a></li>
                  <li><a href="/digital-marketing-for-laparoscopic-surgeons/">Laparoscopic Surgeon</a></li>
                  <li><a href="/digital-marketing-for-ent-surgeons/">ENT Surgeon</a></li>
                  <li><a href="/digital-marketing-for-eye-surgeons/">Eye Surgeon</a></li>
                  <li><a href="/digital-marketing-for-uro-surgeons/">Uro-Surgeon</a></li>
                  <li><a href="/digital-marketing-for-cardio-surgeons/">Cardio-Surgeon</a></li>
                  <li><a href="/digital-marketing-for-dermatologists/">Dermatologist</a></li>
                  <li><a href="/digital-marketing-for-gynecologists/">Gynecologist</a></li>
                  <li><a href="/digital-marketing-for-sexologists/">Sexologist</a></li>
                </ul>
              </li>
              <li class="mega-menu__group">
                <a href="/digital-marketing-for-diagnostic-centres/">Diagnostic Center</a>
                <div class="mega-menu__feature-image">
                  <!-- TODO: replace with a real image -->
                  <img src="/assets/images/nav-image.webp" width="600" height="400" alt="Digital marketing for diagnostic centres" title="Digital marketing for diagnostic centres">
                </div>
              </li>
            </ul>
          </div>
        </li>

        <li><a href="/pricing/">Pricing</a></li>
        <li><a href="/healthcare-case-studies/">Case Study</a></li>
        <li><a href="/career/">Urgent Hiring</a></li>
        <li><a href="/testimonials/">Testimonials</a></li>

        <li class="has-mega">
          <span class="main-nav__label">Resources</span>
          <div class="mega-menu">
            <ul>
              <li><a href="/blog/">Blog</a></li>
              <li class="mega-menu__group has-submenu has-submenu--left">
                <a href="/our-locations/">Locations</a>
                <ul class="submenu">
                  <li><a href="/digital-marketing-agency-hyderabad/">Hyderabad</a></li>
                  <li><a href="/digital-marketing-agency-bhubaneswar/">Bhubaneswar</a></li>
                  <li><a href="/digital-marketing-agency-ahmedabad/">Ahmedabad</a></li>
                  <li><a href="/digital-marketing-agency-noida/">Noida</a></li>
                  <li><a href="/digital-marketing-agency-guwahati/">Guwahati</a></li>
                </ul>
              </li>
              <li><a href="/events/">Events</a></li>
              <li><a href="/awards/">Awards</a></li>
              <li class="mega-menu__group has-submenu has-submenu--left">
                <span class="main-nav__label">Media</span>
                <ul class="submenu">
                  <li><a href="/tv-channels/">TV Channel</a></li>
                  <li><a href="/e-papers/">E-Papers</a></li>
                  <li><a href="/news-papers/">News Papers</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </li>

        <li><a href="/contact/">Contact</a></li>
      </ul>
    </nav>

    <div class="site-header__actions">
      <a class="call-btn" href="tel:8336920676"><i class="fa-solid fa-phone" aria-hidden="true"></i> <?= htmlspecialchars($seoConfig['phone_display'], ENT_QUOTES, 'UTF-8') ?></a>
    </div>
  </div>
</header>
</div>

<div class="mobile-nav" id="mobile-nav" aria-hidden="true" inert>
  <button type="button" class="mobile-nav__close" aria-label="Close menu">&times;</button>
  <ul class="mobile-nav__list">
    <li><a href="/">Home</a></li>
    <li><a href="/about/">About</a></li>
    <li class="has-accordion">
      <button type="button" class="mobile-nav__accordion-btn" aria-expanded="false">What We Do</button>
      <ul class="mobile-nav__sublist">
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Build Your Brand</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/medical-content-creation/">Medical Content Creation</a></li>
            <li><a href="/healthcare-social-media-marketing/">Healthcare Social Media Marketing</a></li>
          </ul>
        </li>
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Patient Lead Generation</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/healthcare-seo/">Healthcare SEO/AEO/GEO</a></li>
            <li><a href="/healthcare-google-ads/">Healthcare PPC</a></li>
            <li><a href="/healthcare-meta-ads/">Healthcare Meta Ads</a></li>
          </ul>
        </li>
        <li><a href="/healthcare-website-design/">Healthcare Website Design</a></li>
        <li><a href="/patient-conversion-management/">Patient Conversion Management</a></li>
        <li><a href="/online-reputation-management/">Online Reputation Management</a></li>
      </ul>
    </li>
    <li class="has-accordion">
      <button type="button" class="mobile-nav__accordion-btn" aria-expanded="false">Who We Serve</button>
      <ul class="mobile-nav__sublist">
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Hospitals</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/digital-marketing-for-general-hospitals/">General Hospital</a></li>
            <li><a href="/digital-marketing-for-multispecialty-hospitals/">Multispecialty Hospital</a></li>
            <li><a href="/digital-marketing-for-superspecialty-hospitals/">Superspecialty Hospital</a></li>
            <li><a href="/digital-marketing-for-daycare-hospitals/">Daycare Hospital</a></li>
            <li><a href="/digital-marketing-for-eye-hospitals/">Eye Hospital</a></li>
            <li><a href="/digital-marketing-for-cancer-hospitals/">Cancer Hospital</a></li>
            <li><a href="/digital-marketing-for-nursing-homes/">Nursing Home</a></li>
          </ul>
        </li>
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Clinics</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/digital-marketing-for-superspecialty-clinics/">Superspecialty Clinic</a></li>
            <li><a href="/digital-marketing-for-multispecialty-clinics/">Multispecialty Clinic</a></li>
            <li><a href="/digital-marketing-for-dental-clinics/">Dental Clinic</a></li>
            <li><a href="/digital-marketing-for-aesthetic-clinics/">Aesthetic/Wellness Clinic</a></li>
            <li><a href="/digital-marketing-for-ayurvedic-clinics/">Ayurvedic Clinic</a></li>
            <li><a href="/digital-marketing-for-fertility-ivf-clinic/">Fertility/IVF Clinic</a></li>
            <li><a href="/digital-marketing-for-hearing-aid-centres/">Hearing Aid Centre</a></li>
          </ul>
        </li>
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Medical Practitioner</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/digital-marketing-for-general-surgeons/">General Surgeon</a></li>
            <li><a href="/digital-marketing-for-pediatric-surgeons/">Pediatric Surgeon</a></li>
            <li><a href="/digital-marketing-for-cosmetic-surgeons/">Cosmetic Surgeon</a></li>
            <li><a href="/digital-marketing-for-vascular-surgeons/">Vascular Surgeon</a></li>
            <li><a href="/digital-marketing-for-neuro-surgeons/">Neurosurgeon</a></li>
            <li><a href="/digital-marketing-for-onco-surgeons/">Onco Surgeon</a></li>
            <li><a href="/digital-marketing-for-gi-surgeons/">GI Surgeon</a></li>
            <li><a href="/digital-marketing-for-ortho-surgeons/">Ortho Surgeon</a></li>
            <li><a href="/digital-marketing-for-laparoscopic-surgeons/">Laparoscopic Surgeon</a></li>
            <li><a href="/digital-marketing-for-ent-surgeons/">ENT Surgeon</a></li>
            <li><a href="/digital-marketing-for-eye-surgeons/">Eye Surgeon</a></li>
            <li><a href="/digital-marketing-for-uro-surgeons/">Uro-Surgeon</a></li>
            <li><a href="/digital-marketing-for-cardio-surgeons/">Cardio-Surgeon</a></li>
            <li><a href="/digital-marketing-for-dermatologists/">Dermatologist</a></li>
            <li><a href="/digital-marketing-for-gynecologists/">Gynecologist</a></li>
            <li><a href="/digital-marketing-for-sexologists/">Sexologist</a></li>
          </ul>
        </li>
        <li><a href="/digital-marketing-for-diagnostic-centres/">Diagnostic Center</a></li>
      </ul>
    </li>
    <li><a href="/pricing/">Pricing</a></li>
    <li><a href="/healthcare-case-studies/">Case Study</a></li>
    <li><a href="/career/">Urgent Hiring</a></li>
    <li><a href="/testimonials/">Testimonials</a></li>
    <li class="has-accordion">
      <button type="button" class="mobile-nav__accordion-btn" aria-expanded="false">Resources</button>
      <ul class="mobile-nav__sublist">
        <li><a href="/blog/">Blog</a></li>
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Locations</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/digital-marketing-agency-hyderabad/">Hyderabad</a></li>
            <li><a href="/digital-marketing-agency-bhubaneswar/">Bhubaneswar</a></li>
            <li><a href="/digital-marketing-agency-ahmedabad/">Ahmedabad</a></li>
            <li><a href="/digital-marketing-agency-noida/">Noida</a></li>
            <li><a href="/digital-marketing-agency-guwahati/">Guwahati</a></li>
          </ul>
        </li>
        <li><a href="/events/">Events</a></li>
        <li><a href="/awards/">Awards</a></li>
        <li class="has-accordion has-accordion--nested">
          <button type="button" class="mobile-nav__accordion-btn mobile-nav__accordion-btn--nested" aria-expanded="false">Media</button>
          <ul class="mobile-nav__sublist mobile-nav__sublist--nested">
            <li><a href="/tv-channels/">TV Channel</a></li>
            <li><a href="/e-papers/">E-Papers</a></li>
            <li><a href="/news-papers/">News Papers</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="/contact/">Contact</a></li>
  </ul>
</div>
<div class="mobile-nav-backdrop" id="mobile-nav-backdrop"></div>
