<?php
/** @var \App\Core\Seo $seo */
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" media="print" onload="this.media='all'">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

<link rel="icon" href="/assets/images/favicon.jpg" sizes="32x32">
<link rel="apple-touch-icon" href="/assets/images/favicon-180.jpg">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="/assets/css/site.css?v=<?= @filemtime(dirname(__DIR__, 3) . '/public/assets/css/site.css') ?: '1' ?>">

<?= $seo->renderMeta() ?>
<?= $seo->organizationJsonLd() ?>
<?= $seo->websiteJsonLd() ?>
