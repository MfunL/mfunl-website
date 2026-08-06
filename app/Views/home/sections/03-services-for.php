<?php
$seoConfig = require dirname(__DIR__, 4) . '/config/seo.php';

$audiences = [
    [
        'hospital-icon.png',
        'Hospitals',
        'Improve your brand reputation and build patient trust.',
        '/digital-marketing-for-hospitals/'
    ],
    [
        'labs-icon.png',
        'IVF, Dental Chain, Aesthetic, Pain & Ayurvedic Clinic',
        'Drive patient referrals from strong targeted marketing campaigns.',
        '/digital-marketing-for-clinics/'
    ],
    [
        'nursing-icon.png',
        'Nursing Home',
        'Reach a wider audience and attract families seeking quality care.',
        '/digital-marketing-for-nursing-homes/'
    ],
    [
        'turism-icon.png',
        'Diagnosis Chain',
        'Get patients from across different states and countries.',
        '/digital-marketing-for-diagnostic-centres/'
    ],
    [
        'super-speciality-icon.png',
        'Multi & Super Speciality Clinics',
        'Become the #1 leader in your field and attract high-value patients.',
        '/digital-marketing-for-multispecialty-clinics/'
    ],
    [
        'doctors-icon.png',
        'Surgeons',
        'Boost your online presence and attract new patients.',
        '/digital-marketing-for-medical-practitioners/'
    ],
];
?>

<section class="services-for">

<div class="wrap">

<h2 class="section-eyebrow">Our Services</h2>
<p class="section-heading">We Offer <span class="accent">Services</span> For</p>


<div class="services-for__grid">

<?php foreach ($audiences as [$icon,$label,$desc,$url]): ?>

<a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" class="services-for__item">

<div class="services-for__icon">
<img
src="/assets/images/<?= $icon ?>"
alt="<?= htmlspecialchars($label) ?>"
title="<?= htmlspecialchars($label) ?>"
width="60"
height="60"
loading="lazy">
</div>


<div class="services-for__content">

<h3><?= htmlspecialchars($label) ?></h3>

<p><?= htmlspecialchars($desc) ?></p>

</div>

</a>

<?php endforeach; ?>

</div>


<div class="services-for__cta">

<a class="btn btn--accent" href="tel:8336920676">
<i class="fa-solid fa-phone"></i> Call Now
</a>

<a class="btn btn--outline" 
href="<?= htmlspecialchars($seoConfig['whatsapp']) ?>"
target="_blank">

<i class="fa-brands fa-whatsapp"></i> WhatsApp

</a>

</div>


</div>

</section>