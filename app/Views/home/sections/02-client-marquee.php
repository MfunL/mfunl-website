<?php
$logos = [
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
    ['anirvana-logo-img.png', 'Anirvana'],
    ['mg-smile-img.jpg', 'MG Smile'],
    ['suvadip-logo-img.jpg', 'Suvadip'],
    ['dr-rohit-mis-logo.jpg', 'Dr. Rohit Mishra'],
    ['Dr.-Mukti-logo.jpg', 'Dr. Mukti'],
    ['Dr-Shi-nayak-logo.jpg', 'Dr. Shi Nayak'],
    ['joydeep-gho-logo-img.jpg', 'Joydeep Ghosh'],
    ['pallab-logo-img.jpg', 'Pallab'],
    ['sanjoy-logo-img.jpg', 'Sanjoy'],
    ['prashanta-logo-img.jpg', 'Prashanta'],
    ['ranajoy-logo-img.jpg', 'Ranajoy'],
];
?>
<section class="client-marquee" aria-label="Clients MfunL has worked with">
  <div class="client-marquee__track">
    <?php foreach ([...$logos, ...$logos] as $logo): ?>
      <img src="/assets/images/clients/<?= $logo[0] ?>" alt="<?= htmlspecialchars($logo[1], ENT_QUOTES, 'UTF-8') ?>" title="<?= htmlspecialchars($logo[1], ENT_QUOTES, 'UTF-8') ?>" width="140" height="70" loading="lazy">
    <?php endforeach; ?>
  </div>
</section>
