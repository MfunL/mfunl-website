<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */

$tvEvents = [
    [
        'heading' => 'Promotional Event for Kolkatar Harry',
        'paragraphs' => [
            "MfunL is proud to have been a social partner of Kolkatar Harry's promotional event. Kolkatar Harry is a Bengali language comedy film for children starring Soham Chakraborty, Priyanka Sarkar, Laboni Sarkar, Arindam Ganguly, Dipankar Dey, Prosenjit Chatterjee, and Oishika Guhathakurta in the lead role.",
        ],
        'videos' => ['OlhJrGhms6k', '214oA9uGeSo', 'sA3uJLbfki4', 'rYNce7cFLcc', 'UZez2j1m8ws', 'exPUEunvL1w', 'mc9IljUad28'],
    ],
    [
        'heading' => "Proud to Be a Part of Ranbir (as a doll) & Alia's (as a doll) Fairy Tale Wedding at 21 Pally",
        'paragraphs' => [
            "In honour of our very own Ranbir Kapoor and Alia Bhatt’s wedding, Tutopia, in partnership with MfunL, arranged a successful event to bless their first steps toward a happy life full of love and sweetness.",
        ],
        'videos' => ['uLyWJUXinwI', 'nGihEXBNj_o', 'epD4zducqrc', 'hYOuugO--Ec', '6nZvB5mdE_I'],
    ],
    [
        'heading' => 'A wonderful silent rally with an empowering message',
        'paragraphs' => [
            'Thank you all the E-Papers for covering our silent rally against the age-old myth of women being impure at the time of the menstrual cycle and tell the world how beautiful she is…',
            'Special thanks to the casting crew of “Brahma Janen Gopon Kommoti” including Ritabhari Chakraborty and Soham Majumdar for taking part in the rally.',
        ],
        'videos' => ['2rW8zEwWdJ0', '1BtE4GEkh3U', 'Du52biS3C6s', 'Da2kGt0fe3w', '2rJcMDkMlAY', 'qmk0OQkt6T0', '1aP3qzOgpBs', 'YGuW-sz4Dt0', 'JguLFxxa9ro', '1YKDGMo60aA'],
    ],
    [
        'heading' => 'MfunL is honoured to be associated with Team "Password" & 21 Pally Puja, Ballygunge Phari',
        'paragraphs' => [
            'Poster launch of the upcoming movie “Password” of superstar Dev, at 21 Pally Puja premises, on the same day the theme video of 21 Pally puja was also launched. MfunL is the proud social media partner of 21 Pally Puja. The grand event was covered by leading TV Channels.',
        ],
        'videos' => ['ZnnTCc_3vI0', 'rGH0gMOqPbM', '6AquRLjQn_Y', 'ok0Pb_JPLk4', 'RtR0QOSGQ_I'],
    ],
    [
        'heading' => "MfunL's Puja & Havan ceremony for the well being of the Doctors covered by leading television channels.",
        'paragraphs' => [
            'We are proud to share with you a few glimpses from MfunL’s press release event, as covered by several leading News Channels and Newspapers of Kolkata. Some of the reputed names among those present were ABP Ananda, ZEE 24 Ghanta, Aakash Aath, and S News. The launch of this unique campaign is aimed at sensitising the citizen to reach out and ensure the safety and well being & prosperity of the doctors & the medical fraternity.',
        ],
        'videos' => ['HX0I2-9Oshg', 'ag8LM__QWBA', '_SB4Z_jsBSw', 'IEq8I78jpJw', 'JD2aatcZS-s', 'xiRo3CYrDkI', 'YPdQjRt5WNM'],
    ],
    [
        'heading' => "Media coverage of MfunL's event",
        'paragraphs' => [
            'We are proud to share with you a few glimpses from MfunL’s press release event, as covered by several leading News Channels and Newspapers of Kolkata. Some of the reputed names among those present were ABP Ananda, ZEE 24 Ghanta, Aakash Aath, and S News. One of the most eye-catching aspects of the event was definitely the theme around which it centered. With tiny-tots dressed as emminent politicians, our theme aimed to put across a serious message to viewers in a playful tone. During a time as crucial as the elections, the overall message for peace was very well-received.',
        ],
        'videos' => ['1dS3hS5YoTI', 'xDN3-4qn6mY', 'gxMfqmk1aWI'],
    ],
];
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/tv-channels-banner.webp" alt="Our Press Releases via TV Channels" title="Our Press Releases via TV Channels" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Our Press Releases via TV Channels</h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width-80">
  <?php foreach ($tvEvents as $event): ?>
    <div class="tv-event">
      <h2 class="h-2"><?= $event['heading'] ?></h2>
      <div class="article-prose">
        <?php foreach ($event['paragraphs'] as $paragraph): ?>
          <p><?= $paragraph ?></p>
        <?php endforeach; ?>
      </div>
      <div class="testimonial-video-grid">
        <?php foreach ($event['videos'] as $videoId): ?>
          <div class="testimonial-video">
            <iframe src="https://www.youtube.com/embed/<?= htmlspecialchars($videoId, ENT_QUOTES, 'UTF-8') ?>" title="YouTube video player" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</section>
