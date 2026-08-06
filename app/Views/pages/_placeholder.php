<?php
/** @var string $title */
?>
<?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
<section class="placeholder-page">
  <div class="wrap">
    <h1><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
    <p>This page is part of the proven route architecture and is coming in the next build phase.</p>
    <a class="btn btn--accent" href="/contact/">Contact Us</a>
  </div>
</section>
