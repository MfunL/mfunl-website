<?php
$columns = [
    [
        'title' => 'Visibility & Trust',
        'items' => [
            ['Healthcare SEO', '/healthcare-seo/'],
            ['Healthcare Website Design', '/healthcare-website-design/'],
            ['Online Reputation Management', '/online-reputation-management/'],
        ],
    ],
    [
        'title' => 'Lead Generation',
        'items' => [
            ['Healthcare PPC', '/healthcare-google-ads/'],
            ['Healthcare Meta Ads', '/healthcare-meta-ads/'],
            ['Patient Lead Generation', '/patient-lead-generation/'],
        ],
    ],
    [
        'title' => 'Patient Flow & ROI',
        'items' => [
            ['Patient Conversion Management', '/patient-conversion-management/'],
            ['Healthcare Social Media Marketing', '/healthcare-social-media-marketing/'],
            ['Medical Content Creation', '/medical-content-creation/'],
        ],
    ],
];

$usps = [
    ['Healthcare-Only Focus', 'Every strategy is built specifically for hospitals, clinics and practitioners — never a generic template.'],
    ['ROI-Driven', 'Campaigns are measured against patient flow and revenue, not vanity metrics.'],
    ['35+ Professionals', 'A full in-house team covering SEO, ads, content, design and reputation management.'],
    ['4+ Years', 'Years of focused experience in healthcare marketing specifically.'],
    ['35+ Clients', 'Hospitals, clinics and practitioners actively working with MfunL.'],
    ['Monthly Reports', 'Clear, regular reporting so you always know what\'s working.'],
];
?>
<section class="growth-system">

<div class="wrap">

<div class="growth-system__heading">

<h2 class="section-eyebrow">The MfunL Patient Growth System</h2>
<p class="section-heading">Why MfunL — as your <span class="mark">Patient Growth</span> Partner?</p>

</div>


<div class="growth-system__grid">

<?php foreach ($columns as $column): ?>

<div class="growth-system__col">

<h3><?= htmlspecialchars($column['title'], ENT_QUOTES, 'UTF-8') ?></h3>

<ul>

<?php foreach ($column['items'] as [$label, $url]): ?>

<li>
<a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>">
<?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
</a>
</li>

<?php endforeach; ?>

</ul>

</div>

<?php endforeach; ?>

</div>



<div class="usp-grid">

<?php foreach ($usps as $i => [$title, $desc]): ?>

<div class="usp-card">

<div class="usp-card__top">

<span class="usp-card__num">
<?= $i + 1 ?>
</span>

<h4>
<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>
</h4>

</div>


<p>
<?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
</p>


</div>

<?php endforeach; ?>

</div>

<div class="growth-system__sub">
  Transform your hospital, clinic, or surgical practice into one of the most trusted and discoverable <br> healthcare brands in Kolkata—across Google, AI search, and social media.
</div>

</div>



</section>
