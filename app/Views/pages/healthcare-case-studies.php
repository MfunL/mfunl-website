<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */

$csImg = static fn (string $file): string => '/assets/images/case-studies/' . $file;

$seoCaseStudies = [
    [
        'name' => 'Ayusya Ayurveda',
        'photo' => 'Ayusya-cli-pic-imgA1.webp',
        'specialty' => 'Ayurvedic Clinic',
        'location' => 'Ultadanga, Gariahat & Howrah',
        'achievements' => [
            ['text' => 'Achieved 1st position in Map Pack for the keyword "Ayurvedic Clinic in Gariahat"', 'img' => 'Ayusya-SeoA1.webp'],
            ['text' => 'Appearing in the AI Overview for one of the famous Ayurvedic treatments in Kolkata', 'img' => 'Ayusya-SeoA2.webp'],
        ],
    ],
    [
        'name' => 'Dr. Prashant Arya',
        'photo' => 'Prashant-imgA1.webp',
        'specialty' => 'Orthopedic Surgeon',
        'location' => 'Jamshedpur',
        'achievements' => [
            ['text' => 'Appearing in the AI Overview, and a Link Mention for the keyword "Frozen Shoulder Treatment in Jamshedpur"', 'img' => 'Prashant-ar-seo-imgA1.webp'],
            ['text' => 'Appearing in Rank 1 of SERP for the keyword "Hip Fracture Surgery in Jamshedpur"', 'img' => 'Prashant-ar-seo-imgA2.webp'],
            ['text' => 'Placed in 2nd position in the map pack for hemi hip replacement surgery in Jamshedpur', 'img' => 'Prashant-ar-seo-imgA3.webp'],
            ['text' => 'Placed in 3rd position in the map pack for shoulder fracture treatment in Jamshedpur', 'img' => 'Prashant-ar-seo-imgA04.webp'],
        ],
    ],
    [
        'name' => 'Dr. Shivanjali Nayak',
        'photo' => 'Shivanjali-imgA1.webp',
        'specialty' => 'Obstetrician-Gynecologist',
        'location' => 'Newtown, Kolkata',
        'achievements' => [
            ['text' => 'Ranking in the 1st Position of Map Pack for female gynecologist in Newtown, Kolkata', 'img' => 'Shivan-cas-seoA1.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for Obstetrician-Gynecologist in Newtown, Kolkata', 'img' => 'Shivan-cas-seoA2.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for Gynecology Doctor in Newtown, Kolkata', 'img' => 'Shivan-cas-seoA3.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for Gynecologist in Newtown, Kolkata', 'img' => 'Shivan-cas-seoA4.webp'],
        ],
    ],
    [
        'name' => 'Dr. Priyanka Aggarwal',
        'photo' => 'priyanka-imgA1.webp',
        'specialty' => 'Cosmetologist & Vitiligo Doctor',
        'location' => 'Newtown, Kolkata',
        'achievements' => [
            ['text' => 'Ranking in the 3rd position of SERP for anti-ageing related keywords in Newtown, Kolkata', 'img' => 'priyanka-cas-seoimgA1.webp'],
            ['text' => 'Ranking in the 3rd position of SERP for Botox treatment in Newtown, Kolkata', 'img' => 'priyanka-cas-seoimgA2.webp'],
        ],
    ],
    [
        'name' => 'Elation Hair & Skin Clinic',
        'photo' => 'elation-imgA1.webp',
        'specialty' => 'Skin & Hair Treatment Clinic',
        'location' => 'Ultadanga, Gariahat & Minto Park',
        'achievements' => [
            ['text' => 'Appearing in the AI Overview mentions for GFC treatment related keywords in Gariahat, Kolkata', 'img' => 'Elation-csa-seo-imgA1.webp'],
            ['text' => 'Appearing in the AI Overview mentions for Botox treatment related keywords in Minto Park, Kolkata', 'img' => 'Elation-csa-seo-imgA2.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for hair transplant in Ultadanga', 'img' => 'Elation-csa-seo-imgA03.webp'],
            ['text' => 'Ranking in the 3rd Position of Map Pack for PRP hair loss treatment in Ultadanga', 'img' => 'Elation-csa-seo-imgA4.webp'],
            ['text' => 'Ranking in the 2nd Position of Map Pack for GFC hair treatment in Gariahat', 'img' => 'Elation-csa-seo-imgA5.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for hair fall treatment in Minto Park', 'img' => 'Elation-csa-seo-imgA6.webp'],
        ],
    ],
    [
        'name' => 'Fetomat Wellness',
        'photo' => 'fatomat-imgA1.webp',
        'specialty' => 'Fetal Medicine Clinic',
        'location' => 'South Kolkata & Salt Lake Unit',
        'achievements' => [
            ['text' => 'Ranking in the 3rd Position of SERP for the amniocentesis test in Kolkata', 'img' => 'Fetomat-case-seoA01.webp'],
            ['text' => 'Ranking in the 2nd Position of SERP for the Fetal Medicine clinic in Kolkata', 'img' => 'Fetomat-case-seoA2.webp'],
            ['text' => 'Appearing in the AI Overview mentions for the query "Which is the best fetal medicine clinic in Kolkata?"', 'img' => 'Fetomat-case-seoA3.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for High Risk Pregnancy Care in Kolkata', 'img' => 'Fetomat-case-seoA04.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for Fetal Medicine in Kolkata', 'img' => 'Fetomat-case-seoA05.webp'],
            ['text' => 'Ranking in the 2nd Position of Map Pack for the CVS test in Kolkata', 'img' => 'Fetomat-case-seoA06.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for Anomaly Scan in Kolkata', 'img' => 'Fetomat-case-seoA07.webp'],
        ],
    ],
    [
        'name' => 'Dr. Joydeep Ghosh',
        'photo' => 'joydeep-imgA1.webp',
        'specialty' => 'Medical Oncologist',
        'location' => 'Kankurgachi, Kolkata',
        'achievements' => [
            ['text' => 'Appearing in the ChatGPT results for the query "Top Cancer Doctor in Kolkata"', 'img' => 'joydeep-case-seo-A1.webp'],
            ['text' => 'Appearing in the AI Overview mentions for chemotherapy-related queries in Kolkata', 'img' => 'joydeep-case-seo-A2.webp'],
            ['text' => 'Ranking in the 2nd Position of SERP for Cancer Doctor in Kolkata', 'img' => 'joydeep-case-seo-A3.webp'],
            ['text' => 'Ranking in the 2nd Position of SERP for Cervical Cancer Doctor in Kolkata', 'img' => 'joydeep-case-seo-A4.webp'],
        ],
    ],
    [
        'name' => 'Long Life',
        'photo' => 'linglife-imgA1.webp',
        'specialty' => 'Multi Speciality Clinic',
        'location' => 'Mukundapur, Kolkata',
        'achievements' => [
            ['text' => 'Appearing in the ChatGPT results for the query "Top Rated Diagnostic Centre in Mukundapur"', 'img' => 'Long-Life-case-seoA1.webp'],
            ['text' => 'Ranking in the 1st Position of Map Pack for Diagnostic Clinic in Mukundapur, Kolkata', 'img' => 'Long-Life-case-seoA2.webp'],
        ],
    ],
    [
        'name' => 'Magic Smile Dental Clinic',
        'photo' => 'magicsmile-case.webp',
        'specialty' => 'Dental Clinic',
        'location' => 'Newtown, Kolkata',
        'achievements' => [
            ['text' => 'Ranking in the 2nd Position of Map Pack for Smile Design related queries in Newtown, Kolkata', 'img' => 'magic-smile-seoA1.webp'],
            ['text' => 'Ranking in the 2nd Position of Map Pack for Teeth Whitening related queries in Newtown, Kolkata', 'img' => 'magic-smile-seoA2.webp'],
            ['text' => 'Ranking in the 1st Position of SERP for Veneers related queries in Newtown, Kolkata', 'img' => 'magic-smile-seoA3.webp'],
            ['text' => 'Ranking in the 1st Position of SERP for Dental Clinic in Newtown, Kolkata', 'img' => 'magic-smile-seoA4.webp'],
        ],
    ],
    [
        'name' => 'Dr. Pallab Roy',
        'photo' => 'drpallabroy-case.webp',
        'specialty' => 'Gynecologist & Robotic Surgeon',
        'location' => 'Behala, Garia & Kasba',
        'achievements' => [
            ['text' => 'Ranking in the 1st position of Map Pack for the keyword "Gynecologist in Behala"', 'img' => 'Pallab-roy-seoA1.webp'],
            ['text' => 'Ranking in the 1st position of Map Pack for the keyword "Gyne Surgeon in Behala"', 'img' => 'Pallab-roy-seoA3.webp'],
            ['text' => 'Appearing in the ChatGPT Search Results for the query "Who are the best gynecologists in Behala?"', 'img' => 'Pallab-roy-seoA4.webp'],
            ['text' => 'Ranking in the 2nd position of Map Pack for the keyword "Gynecologist in Garia"', 'img' => 'Pallab-roy-seoA5.webp'],
        ],
    ],
    [
        'name' => 'Phoenix Medical Centre',
        'photo' => 'pmc-case.webp',
        'specialty' => 'Medical Centre',
        'location' => 'Dum Dum, Kolkata',
        'achievements' => [
            ['text' => 'Appearing in the ChatGPT Search Results for the query "Medical Centre in Dumdum"', 'img' => 'pmc-seoA1.webp'],
            ['text' => 'Ranking in the 2nd position of Map Pack for the keyword "Medical Centre in Dumdum"', 'img' => 'pmc-seoA2.webp'],
        ],
    ],
    [
        'name' => 'Dr. Sanjoy Mandal',
        'photo' => 'drsanjoy-mandal-case.webp',
        'specialty' => 'GI Cancer Doctor/Surgeon',
        'location' => 'Saltlake, Kolkata',
        'achievements' => [
            ['text' => 'Ranking in the 2nd position of Google SERP for the keyword "Gerd Treatment in Kolkata"', 'img' => 'sanjoy-ma-seoA01.webp'],
            ['text' => 'Appearing in AI Overview Mentions for the query "Best GI Cancer Doctor in Kolkata"', 'img' => 'sanjoy-ma-seoA02.webp'],
        ],
    ],
    [
        'name' => 'Smile & Profile',
        'photo' => 'smileprofile-case.webp',
        'specialty' => 'Dental Clinic',
        'location' => 'Rashbehari, Garia, Barasat, Behala,',
        'achievements' => [
            ['text' => 'Ranking in the 1st position of Map Pack for the keyword "Dental Clinic in Rashbehari"', 'img' => 'Smile-Profile-seoA1.webp'],
            ['text' => 'Ranking in the 3rd position of Map Pack for dental implant related keywords in Rashbehari', 'img' => 'Smile-Profile-seoA2.webp'],
            ['text' => 'Ranking in the 3rd position of Map Pack for root canal related keywords in Rashbehari', 'img' => 'Smile-Profile-seoA3.webp'],
            ['text' => 'Ranking in the 3rd position of Map Pack for aligners related keywords in Rashbehari', 'img' => 'Smile-Profile-seoA4.webp'],
            ['text' => 'Ranking in the 3rd position of Map Pack for invisible dental braces related keywords in Rashbehari', 'img' => 'Smile-Profile-seoA5.webp'],
            ['text' => 'Ranking in the 2nd position of Map Pack for the keyword "Dental Clinic in Garia"', 'img' => 'Smile-Profile-seoA6.webp'],
            ['text' => 'Ranking in the 3rd position of Map Pack for dental braces related keywords in Garia', 'img' => 'Smile-Profile-seoA7.webp'],
            ['text' => 'Ranking in the 3rd position of SERP for invisible dental braces related keywords in Kolkata', 'img' => 'Smile-Profile-seoA8.webp'],
            ['text' => 'Ranking in the 1st position of SERP for dental implant related keywords in Kolkata', 'img' => 'Smile-Profile-seoA9.webp'],
        ],
    ],
    [
        'name' => 'Dr. Smita Jadhav',
        'photo' => 'drsmita-case.webp',
        'specialty' => 'Gynecologist',
        'location' => 'Saltlake, Kolkata',
        'achievements' => [
            ['text' => 'Appearing in the ChatGPT Search Results for the query "Best gynaecologist in Saltlake"', 'img' => 'Smita-Jadhav-seoA1.webp'],
            ['text' => 'Ranking in the 1st position of Map Pack for the high-risk pregnancy treatment in Saltlake', 'img' => 'Smita-Jadhav-seoA2.webp'],
        ],
    ],
    [
        'name' => 'Dr Suvadip Chakrabarti',
        'photo' => 'drsuvadip-case.webp',
        'specialty' => 'Surgical Oncologist',
        'location' => 'Kakurgachi, Kolkata',
        'achievements' => [
            ['text' => 'Appearing in the ChatGPT Search Results for the query "Top 5 Cancer Surgeons in Kolkata"', 'img' => 'Suvadip-Cha-seo-A1.webp'],
            ['text' => 'Ranking in the 1st position of Map Pack for the keyword "Cancer Doctor in Kolkata"', 'img' => 'Suvadip-Cha-seo-A2.webp'],
            ['text' => 'Appearing in AI Overview Mentions for the query "Top Cancer Surgeon in Kolkata"', 'img' => 'Suvadip-Cha-seo-A3.webp'],
        ],
    ],
];

$socialCaseStudies = [
    [
        'name' => 'Dt Uma Bajoria',
        'photo' => 'Dt.-Uma-BajoriaCaseStudyOverview-img.webp',
        'specialty' => 'Dietitian/Nutritionist',
        'location' => 'Kankurgachi, Kolkata.',
        'gallery' => ['DtUmaBajoriaCaseStudy1-img.webp', 'DtUmaBajoriaCaseStudy2-img.webp', 'DtUmaBajoriaCaseStudy3-img.webp', 'DtUmaBajoriaCaseStudy4-img.webp'],
    ],
    [
        'name' => 'Dactar Babu',
        'photo' => 'DactarBabuCaseStudyOverview-img.webp',
        'specialty' => 'Online Doctor Booking Platform',
        'location' => null,
        'gallery' => ['DactarBabuCaseStudy1-img.webp', 'DactarBabuCaseStudy2-img.webp', 'DactarBabuCaseStudy3-img.webp', 'DactarBabuCaseStudy4-img.webp', 'DactarBabuCaseStudy5-img.webp'],
    ],
    [
        'name' => 'Fetomat Wellness',
        'photo' => 'fatomat-imgA1.webp',
        'specialty' => 'Fetal Medicine Clinic',
        'location' => 'South Kolkata & Salt Lake Unit',
        'gallery' => ['FetomatCaseStudy1-img.webp', 'FetomatCaseStudy2-img.webp', 'FetomatCaseStudy3-img.webp', 'FetomatCaseStudy4-img.webp', 'FetomatCaseStudy5-img.webp'],
    ],
];

$adsMetrics = [
    ['Ad Spend', '₹51.9 Lakhs', '₹33 Lakhs'],
    ['Clicks', '373,000', '247,000'],
    ['Avg CPC', '₹13.93', '₹13.32'],
    ['Qualified Leads', '80–90/month', 'Up to 175/month'],
    ['Patient Visits', 'Not Tracked', '907'],
    ['Lead Quality', 'Poor', 'Highly Qualified'],
];
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/Case-Study-Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Case Studies</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap section-width" data-tabs>
  <div class="tab-nav" role="tablist" aria-label="Choose a category">
    <button type="button" class="is-active" role="tab" aria-selected="true" aria-controls="cs-seo" data-tab-btn="cs-seo">SEO</button>
    <button type="button" role="tab" aria-selected="false" aria-controls="cs-social" data-tab-btn="cs-social">Social Media</button>
    <button type="button" role="tab" aria-selected="false" aria-controls="cs-google-ads" data-tab-btn="cs-google-ads">Google Ads</button>
  </div>

  <div id="cs-seo" class="tab-panel" role="tabpanel">
    <div class="case-study-grid">
      <?php foreach ($seoCaseStudies as $cs): ?>
        <article class="case-study-card">
          <div class="case-study-card__header">
            <img class="case-study-card__photo" src="<?= $csImg($cs['photo']) ?>" alt="<?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
            <h2><?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="case-study-card__specialty"><?= htmlspecialchars($cs['specialty'], ENT_QUOTES, 'UTF-8') ?></p>
            <p class="case-study-card__location"><span>Location:</span> <?= htmlspecialchars($cs['location'], ENT_QUOTES, 'UTF-8') ?></p>
          </div>
          <div class="case-study-achievements">
            <?php foreach ($cs['achievements'] as $a): ?>
              <div class="case-study-achievement">
                <button type="button" class="case-study-achievement__btn" data-open-lightbox="<?= $csImg($a['img']) ?>" aria-label="View proof screenshot">
                  <img src="<?= $csImg($a['img']) ?>" alt="" loading="lazy">
                </button>
                <p><?= htmlspecialchars($a['text'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>

  <div id="cs-social" class="tab-panel" role="tabpanel" hidden>
    <div class="case-study-grid">
      <?php foreach ($socialCaseStudies as $cs): ?>
        <article class="case-study-card">
          <div class="case-study-card__header">
            <img class="case-study-card__photo" src="<?= $csImg($cs['photo']) ?>" alt="<?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
            <h2><?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="case-study-card__specialty"><?= htmlspecialchars($cs['specialty'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php if ($cs['location']): ?>
              <p class="case-study-card__location"><span>Location:</span> <?= htmlspecialchars($cs['location'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
          </div>
          <div class="case-study-gallery">
            <?php foreach ($cs['gallery'] as $img): ?>
              <button type="button" data-open-lightbox="<?= $csImg($img) ?>" aria-label="View <?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?> result">
                <img src="<?= $csImg($img) ?>" alt="<?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?> social media marketing results screenshot" title="<?= htmlspecialchars($cs['name'], ENT_QUOTES, 'UTF-8') ?> social media marketing results screenshot" loading="lazy">
              </button>
            <?php endforeach; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>

  <div id="cs-google-ads" class="tab-panel" role="tabpanel" hidden>
    <div class="case-study-grid">
      <article class="case-study-card">
        <div class="case-study-card__header">
          <img class="case-study-card__photo" src="<?= $csImg('elation-imgA1.webp') ?>" alt="Elation Hair &amp; Skin Clinic" title="Elation Hair &amp; Skin Clinic" loading="lazy">
          <h2>Elation Hair &amp; Skin Clinic</h2>
          <p class="case-study-card__specialty">Skin &amp; Hair Treatment Clinic</p>
          <p class="case-study-card__location"><span>Location:</span> Ultadanga, Gariahat &amp; Minto Park</p>
        </div>
        <div>
          <div class="case-study-before-after">
            <div>
              <p class="case-study-before-after__label">Before</p>
              <button type="button" data-open-lightbox="<?= $csImg('elation-ppc-before.webp') ?>" aria-label="View Before campaign result">
                <img src="<?= $csImg('elation-ppc-before.webp') ?>" alt="Before PPC campaign — Elation Hair &amp; Skin Clinic" title="Before PPC campaign — Elation Hair &amp; Skin Clinic" loading="lazy">
              </button>
            </div>
            <div>
              <p class="case-study-before-after__label">After</p>
              <button type="button" data-open-lightbox="<?= $csImg('elation-ppc-after.webp') ?>" aria-label="View After campaign result">
                <img src="<?= $csImg('elation-ppc-after.webp') ?>" alt="After PPC campaign — Elation Hair &amp; Skin Clinic" title="After PPC campaign — Elation Hair &amp; Skin Clinic" loading="lazy">
              </button>
            </div>
          </div>
          <div class="price-table-wrap">
            <table class="price-table">
              <thead>
                <tr><th>Metric</th><th>Before</th><th>After</th></tr>
              </thead>
              <tbody>
                <?php foreach ($adsMetrics as [$metric, $before, $after]): ?>
                  <tr<?= $metric === 'Lead Quality' ? ' class="price-table__highlight"' : '' ?>>
                    <td><?= htmlspecialchars($metric, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($before, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($after, ENT_QUOTES, 'UTF-8') ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
