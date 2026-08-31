<?php
/** @var string|null $trustHeading */
/** @var array<int,array{0:string,1:string}>|null $trustLogos */

$trustHeading ??= 'Trusted By Amazing Partners';
$trustLogos ??= [
    ['samaritancareLogo-img.png', 'Samaritan Care'],
    ['pmc-logo-img.jpg', 'PMC'],
    ['hear-plus-logo-img.jpg', 'Hear Plus'],
    ['elation-logo-img.jpg', 'Elation'],
    ['fetomat-logo-img.png', 'Fetomat'],
    ['Dr.-Manoj-Khanna.png', 'Dr. Manoj Khanna'],
    ['Long-life-logo-img.jpg', 'Long Life'],
    ['sugar-logo-img.jpg', 'Sugar'],
    ['rehabana-logo-img.jpg', 'Rehabana'],
    ['Smile-and-profile-logo-img.png', 'Smile & Profile'],
    ['Reliable-Diagnostics.jpg', 'Reliable Diagnostics'],
    ['ayusya-logo-img.jpg', 'Ayusya'],
];
?>
<section class="trust-slide">
  <h2 class="trust-slide__heading"><?= htmlspecialchars($trustHeading, ENT_QUOTES, 'UTF-8') ?></h2>
  <div class="trust-slide__viewport">
    <div class="trust-slide__track">
      <?php foreach ([...$trustLogos, ...$trustLogos] as $logo): ?>
        <img src="/assets/images/clients/<?= $logo[0] ?>" alt="<?= htmlspecialchars($logo[1], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($logo[1], ENT_QUOTES, 'UTF-8') ?>" width="140" height="70" loading="lazy">
      <?php endforeach; ?>
    </div>
  </div>
</section>
