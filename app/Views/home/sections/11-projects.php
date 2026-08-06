<?php
$projects = [
    ['fetomat-project.webp', 'Fetal Medicine Clinic'],
    ['anirban-portfolio.jpg', 'Plastic Surgeon'],
    ['Dr.-Suvadip-Chakrabarti.jpg', 'Surgical Oncology'],
    ['smile-den.jpg', 'Dental Clinic'],
    ['pro-pall-imgA1.jpg', 'Gynecologist'],
    ['PMC.jpg', 'Hospitals'],
];
?>
<section class="projects">
  <div class="wrap">
    <h2 class="section-eyebrow">Our Projects</h2>
    <p class="section-heading">We Craft <span class="accent">Digital Experiences</span> Powered by Creativity, <br>
    Passion and Purpose.</p>
    <div class="projects__grid">
      <?php foreach ($projects as [$image, $label]): ?>
        <div class="project-card">
          <img src="/assets/images/portfolio/<?= $image ?>" alt="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?> project by MfunL" title="<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?> project by MfunL" width="360" height="280" loading="lazy">
          <figcaption><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></figcaption>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
