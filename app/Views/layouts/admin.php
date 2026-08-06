<?php
/** @var string $content */
/** @var \App\Core\Seo $seo */
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?= $seo->renderMeta() ?>
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body class="admin <?= htmlspecialchars($bodyClass ?? '', ENT_QUOTES, 'UTF-8') ?>">
<?= $content ?>
<script src="/assets/js/admin.js" defer></script>
</body>
</html>
