<?php
$reviews = [

    [
        'Dr. Jayashree Dutta',
        '(Cosmetic, Laser Dentist and Certified Implantologist, Magic Smile Dental Clinic)',
        '“Their solutions were innovative, tailored perfectly, and the support team resolved my issues promptly.” I’m extremely impressed with their services. The solutions were innovative, perfectly strategised, and implemented smoothly with zero headaches. Their technical skills are top-notch, and the support team handled every question quickly and efficiently. Highly recommend for anyone needing reliable healthcare networking solutions.'
    ],

    [
        'Dr. Sandipan Chakraborty',
        '(Chief Medical Consultant, Ayusya Ayurvedic Superspeciality Treatment Center)',
        '“MfunL is playing a wonderful role in digital marketing… we are very thankful to this concern.” MfunL is playing an wonderful role in digital marketing arena...helps us very to find our patients and we r very thankful to this concern.'
    ],

    [
        'Dr. Joydeep Ghosh',
        '(Medical Oncologist in Kolkata)',
        '“They delivered the job right on time and the cost is very competitive.” I have asked MfunL to make my website for the first time and I am very happy with their performance. They delivered the job right on time and the cost is very competitive. I will strongly recommend MfunL for those who wish to have their website designed and Digital marketing.'
    ],

    [
        'Dr. Manoj Khanna',
        '(Plastic Surgeon in Kolkata)',
        'It was great visiting the MfunL office today for a podcast. What was evident was the efficiency of the entire staff and everyone working together in perfect harmony. Mr. Kuntal Chatterjee, as expected, was a very knowledgeable interviewer, with very apt questions. A very nice experience. Thank you very much MfunL.'
    ],

];
?>

<section class="testimonials">
  <div class="wrap">
    <h2 class="section-eyebrow">GMB Reviews</h2>
    <p class="section-heading">Hear From the Ones <br>
      Who <span class="mark">Chose Us.</span></p>
    <div class="swiper testimonials__swiper">
      <div class="swiper-wrapper">
        <?php foreach ($reviews as [$name, $role, $quote]): ?>
          <div class="swiper-slide">
            <div class="testimonial-card">
              <img class="testimonial-card__quote-icon" src="/assets/images/quote_4992672.png" width="32" height="32" alt="quotation" title="quotation" loading="lazy">
              <div class="testimonial-card__stars">
                ★★★★★
              </div>

              <p class="testimonial-card__quote">
                <?= htmlspecialchars($quote, ENT_QUOTES, 'UTF-8') ?>
              </p>

              <div class="testimonial-card__reviewer">
                <p class="testimonial-card__name">
                  <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
                </p>
                <p class="testimonial-card__role">
                  <?= htmlspecialchars($role, ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- Navigation arrows -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <!-- Pagination dots -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
