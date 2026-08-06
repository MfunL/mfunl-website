<?php
$seoConfig = require dirname(__DIR__, 4) . '/config/seo.php';

$problems = [
    '70% plus patients search online before booking an appointment, your online search results are not satisfactory',
    'Low Online Visibility – Outdated website or no website, poor SEO or lack of Google presence reduces patient reach',
    'Negative, Less or No Online Reviews – Few or poor reviews on platforms like Google, hurt trust and credibility',
    'Lack of Patient Awareness – Many people aren’t aware of your available services or specializations',
    'Lack of a structured system to monitor, follow up, and convert patient inquiries, appointments & visit',
];

$solutions = [
    'When a patient searches online - We will ensure sufficient visibility',
    'Implement review generation - Introduce reputation tools to boost positive patients reviews',
    'Run targeted digital campaigns - To increase awareness of multiple healthcare services provided',
    'Introduce proper follow up systems & reports - Train your team to convert leads into appointments. Transparent reporting to track ROI',
    'Healthcare digital agency based in Kolkata - We understand the healthcare market. We have a team of Healthcare Digital Marketing Experts',
];
?>

<section class="comparison">

  <div class="wrap">

    <div class="comparison__heading">
      <h2 class="section-eyebrow">Grow Patient’s Footfall, Grow Online Trust</h2>
      <p class="section-heading">Your <span class="mark">Patients</span> Need You. <br>
      We Will Help Them to Find You</p>
    </div>


    <div class="comparison__inner">

      <div class="comparison__col comparison__col--problems">

        <h2>5 Major Causes of<br>Less Patient Flow</h2>

        <ul>

          <?php foreach ($problems as $item): ?>

          <li>
            <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
          </li>

          <?php endforeach; ?>

        </ul>

      </div>



      <div class="comparison__col comparison__col--solutions">

        <h2>We Help You Get Found<br>Chosen and Trusted</h2>

        <ul>

          <?php foreach ($solutions as $item): ?>

          <li>
            <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
          </li>

          <?php endforeach; ?>

        </ul>

      </div>


    </div>

  </div>


  <div class="comparison__cta">

    <a class="btn btn--accent" href="tel:8336920676">
      <i class="fa-solid fa-phone" aria-hidden="true"></i>
      Call Now
    </a>


    <a class="btn btn--outline"
       href="<?= htmlspecialchars($seoConfig['whatsapp'], ENT_QUOTES, 'UTF-8') ?>"
       target="_blank"
       rel="noopener">

      <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
      WhatsApp

    </a>

  </div>


</section>