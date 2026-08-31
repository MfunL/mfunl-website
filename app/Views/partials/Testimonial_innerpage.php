<?php
/** @var array<int,array{0:string,1:string,2:string}>|null $reviews */

$reviews ??= [
    ['Dr. Jayashree Dutta', 'Cosmetic, Laser Dentist and Certified Implantologist, Magic Smile Dental Clinic', 'Their solutions were innovative, tailored perfectly, and the support team resolved my issues promptly. I&rsquo;m extremely impressed with their services&mdash;implemented smoothly with zero headaches. Highly recommend for anyone needing reliable healthcare networking solutions.'],
    ['Dr. Sandipan Chakraborty', 'Chief Medical Consultant, Ayusya Ayurvedic Superspeciality Treatment Center', 'MfunL is playing a wonderful role in digital marketing&hellip; it helps us find our patients consistently, and we are very thankful to this concern.'],
    ['Dr. Joydeep Ghosh', 'Medical Oncologist in Kolkata', 'They delivered the job right on time and the cost is very competitive. I will strongly recommend MfunL for those who wish to have their website designed and digital marketing handled.'],
    ['Dr. Manoj Khanna', 'Plastic Surgeon in Kolkata', 'It was great visiting the MfunL office for a podcast. What was evident was the efficiency of the entire staff working together in perfect harmony&mdash;a very nice experience.'],
];
?>
<section class="testimonial-inner">
  <div class="wrap section-width">
    <h2 class="h-2 text-center">Hear From the Ones<br>Who <span class="accent">Chose Us.</span></h2>

    <div class="testimonial-inner__swiper-wrap">
      <div class="swiper testimonial-inner__swiper">
        <div class="swiper-wrapper">
          <?php foreach ($reviews as [$name, $role, $quote]): ?>
            <?php
              $bareName = preg_replace('/^Dr\.\s*/', '', $name);
              $initials = '';
              foreach (explode(' ', $bareName) as $part) {
                  $initials .= mb_substr($part, 0, 1);
              }
              $initials = mb_strtoupper(mb_substr($initials, 0, 2));
            ?>
            <div class="swiper-slide">
              <div class="testimonial-inner__card">
                <span class="testimonial-inner__mark" aria-hidden="true">&ldquo;</span>
                <div class="testimonial-inner__stars" aria-hidden="true">★★★★★</div>
                <p class="testimonial-inner__quote"><?= $quote ?></p>
                <div class="testimonial-inner__author">
                  <span class="testimonial-inner__avatar" aria-hidden="true"><?= htmlspecialchars($initials, ENT_QUOTES, 'UTF-8') ?></span>
                  <span class="testimonial-inner__meta">
                    <span class="testimonial-inner__name"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="testimonial-inner__role"><?= htmlspecialchars($role, ENT_QUOTES, 'UTF-8') ?></span>
                  </span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>
