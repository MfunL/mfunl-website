<?php
/** @var string $current */
$serviceNavLinks = [
    'medical-content-creation' => 'Medical Content Creation',
    'healthcare-social-media-marketing' => 'Healthcare Social Media Marketing',
    'healthcare-seo' => 'Healthcare SEO/AEO/GEO',
    'healthcare-google-ads' => 'Healthcare PPC',
    'healthcare-meta-ads' => 'Healthcare Meta Ads',
    'healthcare-website-design' => 'Healthcare Website Design',
    'patient-conversion-management' => 'Patient Conversion Management',
    'online-reputation-management' => 'Online Reputation Management',
];
?>
<nav class="content-tabs__nav-list" aria-label="Our services">
  <?php foreach ($serviceNavLinks as $slug => $label): ?>
    <a class="content-tabs__nav-item<?= $slug === ($current ?? '') ? ' is-active' : '' ?>" href="/<?= $slug ?>/"<?= $slug === ($current ?? '') ? ' aria-current="page"' : '' ?>><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a>
  <?php endforeach; ?>
</nav>
