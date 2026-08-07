<?php
$seoConfig = require dirname(__DIR__, 3) . '/config/seo.php';
$year = date('Y');
?>
<footer class="site-footer">
  <div class="wrap site-footer__top">
    <div class="site-footer__brand">
      <a href="/"><img src="/assets/images/Mfunl-logo-blue.png" width="180" height="65" alt="MfunL Logo" title="MfunL Logo"></a>
      <p>MfunL is a healthcare-only digital marketing agency based in Kolkata. We help doctors, clinics and hospitals turn online visibility into real patient bookings through focused SEO, paid ads and social media programs.</p>
      <ul class="social-links">
        <li><a href="<?= htmlspecialchars($seoConfig['social']['facebook'], ENT_QUOTES, 'UTF-8') ?>" class="social-link social-link--facebook" title="Follow on Facebook" rel="noopener" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
        <li><a href="<?= htmlspecialchars($seoConfig['social']['instagram'], ENT_QUOTES, 'UTF-8') ?>" class="social-link social-link--instagram" title="Follow on Instagram" rel="noopener" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="<?= htmlspecialchars($seoConfig['social']['youtube'], ENT_QUOTES, 'UTF-8') ?>" class="social-link social-link--youtube" title="Follow on YouTube" rel="noopener" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
        <li><a href="<?= htmlspecialchars($seoConfig['social']['linkedin'], ENT_QUOTES, 'UTF-8') ?>" class="social-link social-link--linkedin" title="Follow on LinkedIn" rel="noopener" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a></li>
        <li><a href="<?= htmlspecialchars($seoConfig['social']['twitter'], ENT_QUOTES, 'UTF-8') ?>" class="social-link social-link--x" title="Follow on X / Twitter" rel="noopener" target="_blank" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
        <li><a href="<?= htmlspecialchars($seoConfig['social']['pinterest'], ENT_QUOTES, 'UTF-8') ?>" class="social-link social-link--pinterest" title="Follow on Pinterest" rel="noopener" target="_blank" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p" aria-hidden="true"></i></a></li>
      </ul>
    </div>

    <div class="site-footer__links">
      <h3>What We Do</h3>
      <nav class="footer-link-row" aria-label="What We Do">
        <a href="/healthcare-website-design/">Healthcare Website Design</a>
        <a href="/patient-conversion-management/">Patient Conversion Management</a>
        <a href="/online-reputation-management/">Online Reputation Management</a>
        <a href="/medical-content-creation/">Medical Content Creation</a>
        <a href="/healthcare-social-media-marketing/">Healthcare Social Media Marketing</a>
        <a href="/healthcare-seo/">Healthcare SEO</a>
        <a href="/healthcare-google-ads/">Healthcare PPC</a>
        <a href="/healthcare-meta-ads/">Healthcare Meta Ads</a>
      </nav>

      <h3>Who We Serve</h3>
      <nav class="footer-link-row" aria-label="Who We Serve">
        <a href="/digital-marketing-for-general-hospitals/">General Hospital</a>
        <a href="/digital-marketing-for-multispecialty-hospitals/">Multispecialty Hospital</a>
        <a href="/digital-marketing-for-superspecialty-hospitals/">Superspecialty Hospital</a>
        <a href="/digital-marketing-for-daycare-hospitals/">Daycare Hospital</a>
        <a href="/digital-marketing-for-eye-hospitals/">Eye Hospital</a>
        <a href="/digital-marketing-for-cancer-hospitals/">Cancer Hospital</a>
        <a href="/digital-marketing-for-nursing-homes/">Nursing Home</a>
        <a href="/digital-marketing-for-superspecialty-clinics/">Superspecialty Clinic</a>
        <a href="/digital-marketing-for-multispecialty-clinics/">Multispecialty Clinic</a>
        <a href="/digital-marketing-for-dental-clinics/">Dental Clinic</a>
        <a href="/digital-marketing-for-aesthetic-clinics/">Aesthetic/Wellness Clinic</a>
        <a href="/digital-marketing-for-ayurvedic-clinics/">Ayurvedic Clinic</a>
        <a href="/digital-marketing-for-fertility-ivf-clinic/">Fertility/IVF Clinic</a>
        <a href="/digital-marketing-for-hearing-aid-centres/">Hearing Aid Centre</a>
        <a href="/digital-marketing-for-general-surgeons/">General Surgeon</a>
        <a href="/digital-marketing-for-pediatric-surgeons/">Pediatric Surgeon</a>
        <a href="/digital-marketing-for-cosmetic-surgeons/">Cosmetic Surgeon</a>
        <a href="/digital-marketing-for-vascular-surgeons/">Vascular Surgeon</a>
        <a href="/digital-marketing-for-neuro-surgeons/">Neurosurgeon</a>
        <a href="/digital-marketing-for-onco-surgeons/">Onco Surgeon</a>
        <a href="/digital-marketing-for-gi-surgeons/">GI Surgeon</a>
        <a href="/digital-marketing-for-ortho-surgeons/">Ortho Surgeon</a>
        <a href="/digital-marketing-for-laparoscopic-surgeons/">Laparoscopic Surgeon</a>
        <a href="/digital-marketing-for-ent-surgeons/">ENT Surgeon</a>
        <a href="/digital-marketing-for-eye-surgeons/">Eye Surgeon</a>
        <a href="/digital-marketing-for-uro-surgeons/">Uro-Surgeon</a>
        <a href="/digital-marketing-for-cardio-surgeons/">Cardio-Surgeon</a>
        <a href="/digital-marketing-for-dermatologists/">Dermatologist</a>
        <a href="/digital-marketing-for-gynecologists/">Gynecologist</a>
        <a href="/digital-marketing-for-sexologists/">Sexologist</a>
        <a href="/digital-marketing-for-diagnostic-centres/">Diagnostic Centre</a>
      </nav>
    </div>
  </div>

  <div class="wrap site-footer__bottom">
    <p>&copy; <?= $year ?> MfunL. All Rights Reserved</p>
    <p><a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-condition/">Terms &amp; Condition</a></p>
  </div>
</footer>
