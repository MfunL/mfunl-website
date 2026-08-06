<?php
/**
 * Static fallback so the homepage never depends on a live Instagram API
 * call. Uses the real preview clips in public/assets/video/.
 */
$videos = [
    '/assets/video/insta-video-1.mp4',
    '/assets/video/insta-video-2.mp4',
    '/assets/video/insta-video-3.mp4',
    '/assets/video/insta-video-4.mp4',
];
?>
<section class="instagram-feed">
  <div class="wrap">
    <h2 class="section-eyebrow">Transforming Healthcare Marketing, One Post at a Time</h2>
    <p class="section-heading"><span class="mark">Reels, Posts, Results</span> – See How Our Content Drives Healthcare Success!</p>
    <div class="instagram-feed__grid">
      <?php foreach ($videos as $video): ?>
        <a class="instagram-feed__tile" href="https://www.instagram.com/mfunl/" target="_blank" rel="noopener" aria-label="View post on Instagram">
          <video src="<?= htmlspecialchars($video, ENT_QUOTES, 'UTF-8') ?>" muted loop playsinline autoplay preload="metadata"></video>
          <button type="button" class="instagram-feed__mute" aria-label="Unmute video" aria-pressed="true">
            <i class="fa-solid fa-volume-xmark" aria-hidden="true"></i>
          </button>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="instagram-feed__actions">
      <a class="btn btn--accent" href="https://www.instagram.com/mfunl/" target="_blank" rel="noopener">Follow on Instagram</a>
    </div>
  </div>
</section>
