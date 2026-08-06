<?php
/** @var array<int,array{label:string,url:string}> $crumbs */
$crumbs ??= [];
if (!$crumbs) {
    return;
}
?>
<nav class="breadcrumbs" aria-label="Breadcrumb">
  <ol>
    <?php foreach ($crumbs as $i => $crumb): ?>
      <?php if ($i === count($crumbs) - 1): ?>
        <li aria-current="page"><?= htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8') ?></li>
      <?php else: ?>
        <li><a href="<?= htmlspecialchars($crumb['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ol>
</nav>
