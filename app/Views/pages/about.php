<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/MfunL-About-Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>About <span class="accent">MfunL</span></h1>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap section-width text-center">
  <h2 class="h-2">Driving Digital Growth for Healthcare Brands</h2>
  <h3 class="h-3">Struggling to turn online visibility into actual patient visits?
  </h3>
  <p>MfunL has been the driving force behind healthcare brands that build trust, enhance visibility, and achieve measurable patient growth. While our digital marketing journey began in 2018, our focused expertise in healthcare digital marketing spans over 4 years. We have helped doctors, clinics, and hospitals strengthen their digital presence and connect meaningfully with patients.</p>
  <p>
  Our expertise lies in healthcare SEO, healthcare Google Ads, and Healthcare Social Media Marketing — together forming the backbone of successful digital marketing for healthcare. From optimising search visibility to building authority through content and targeted ads, we ensure every platform works together to achieve sustainable visibility and steady patient flow.</p>
  <p>
  We help doctors, surgeons, clinics, and hospitals go beyond visibility — to achieve measurable patient growth. Our approach focuses on boosting patient footfall and enhancing conversion rates through data-driven SEO, strategic content marketing, and impactful social media campaigns.</p>
  <p>
  Whether you’re an emerging clinic or a well-established hospital, we ensure your digital presence attracts the right audience, builds patient trust, and transforms online inquiries into confirmed appointments.</p>
</section>

<section class="section-gap section-width">
  <h2 class="h-2 text-center">Who We Serve</h2>
  <h3 class="h-3 text-center">Serving All Healthcare Segments</h3>
  <div class="we-serve">

  <!-- Medical Practitioners -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <circle cx="12" cy="7" r="4"></circle>
        <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
        <path d="M18 9v4"></path>
        <path d="M16 11h4"></path>
      </svg>
    </div>

    <h4>Medical Practitioners</h4>

  </div>


  <!-- Clinics -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M3 21h18"></path>
        <path d="M5 21V7l7-4 7 4v14"></path>
        <path d="M9 10h6"></path>
        <path d="M12 7v6"></path>
        <path d="M9 21v-5h6v5"></path>
      </svg>
    </div>

    <h4>Clinics</h4>

  </div>


  <!-- Hospitals -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M4 21V5h16v16"></path>
        <path d="M9 3h6v4H9z"></path>
        <path d="M10 11h4"></path>
        <path d="M12 9v4"></path>
        <path d="M8 21v-5h8v5"></path>
      </svg>
    </div>

    <h4>Hospitals</h4>

  </div>


  <!-- Diagnostic Centers -->
  <div class="serve-card">

    <div class="serve-icon" aria-hidden="true">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M9 3h6"></path>
        <path d="M10 3v6l-5 9a2 2 0 0 0 1.8 3h10.4a2 2 0 0 0 1.8-3l-5-9V3"></path>
        <path d="M8 15h8"></path>
        <circle cx="10" cy="18" r="1"></circle>
        <circle cx="14" cy="17" r="1"></circle>
      </svg>
    </div>

    <h4>Diagnostic Centers</h4>

  </div>

</div>
</section>


<section class="section-gap our-mission text-center">

  <div class="mission-box">
    <h3>Mission</h3>

    <h4>Driving Trust and Patient Growth</h4>

    <p>
      To help doctors, clinics, and hospitals gain trust, increase patient footfall, and build a strong online presence.We specialise in the healthcare industry — helping doctors, clinics, and hospitals gain patient trust, boost footfall, and build a strong, credible online presence.
    </p>

    <p>
      At MfunL, our niche expertise means every strategy we create is built for healthcare brands — compliant, empathetic, and results driven. We don’t just bring you leads; we help you nurture and convert them into appointments, ensuring sustainable growth and long-term success in an ever-competitive healthcare landscape.
    </p>
  </div>


  <div class="vision-box">
    <h3>Vision</h3>

    <h4>Expanding Reach with Purpose</h4>

    <p>
      To become the most trusted digital growth partner for healthcare clients, helping doctors, clinics, and hospitals reach the right patients with ease and credibility.
    </p>

    <p>
      We envision a world where quality healthcare is accessible to all — powered by strategic digital marketing that turns visibility into trust, and trust into measurable patient growth.
    </p>
  </div>

</section>

<section class="section-gap section-width">
  <h2 class="h-2 text-center">Information About Our Team Members</h2>
  <div class="member-stat">

  <!-- Gender Ratio -->
  <div class="stat-col">

    <h3 class="stat-title">Gender Ratio</h3>

    <div class="gender-wrap">

      <!-- Female -->
      <div class="gender-circle female">

        <svg
          class="gender-icon"
          viewBox="0 0 100 120"
          aria-hidden="true"
        >
          <circle cx="50" cy="29" r="21"></circle>

          <path d="
            M28 50
            C30 44 38 40 50 40
            C62 40 70 44 72 50
            L76 82
            C77 88 82 93 89 96
            C92 98 94 102 94 108
            H6
            C6 102 8 98 11 96
            C18 93 23 88 24 82
            Z
          "></path>
        </svg>

        <div class="gender-label">
          Female
          <strong>35%</strong>
        </div>

      </div>


      <!-- Male -->
      <div class="gender-circle male">

        <svg
          class="gender-icon"
          viewBox="0 0 100 120"
          aria-hidden="true"
        >
          <circle cx="50" cy="28" r="20"></circle>

          <path d="
            M26 53
            C31 45 39 42 50 42
            C61 42 69 45 74 53
            C79 61 82 74 82 101
            C72 106 61 108 50 108
            C39 108 28 106 18 101
            C18 74 21 61 26 53
            Z
          "></path>
        </svg>

        <div class="gender-label">
          Male
          <strong>65%</strong>
        </div>

      </div>

    </div>
  </div>


  <!-- Age Bracket Ratio -->
  <div class="stat-col">

    <h3 class="stat-title">Age Bracket Ratio</h3>

    <div class="chart-layout">

      <div
        class="age-pie-chart"
        role="img"
        aria-label="Age Bracket Ratio: 68 percent 20 Years to 29 Years, 20 percent 30 Years to 39 Years, 12 percent 40 Years and above"
      >

        <span class="age-value age-value-blue">68%</span>

        <span class="age-value age-value-orange">20%</span>

        <span class="age-value age-value-purple">12%</span>

        <span class="pie-center" aria-hidden="true"></span>

      </div>


      <div class="stat-legend">

        <div class="legend-item">
          <span class="legend-dot blue"></span>
          <span>20 Years to 29 Years</span>
        </div>

        <div class="legend-item">
          <span class="legend-dot orange"></span>
          <span>30 Years to 39 Years</span>
        </div>

        <div class="legend-item">
          <span class="legend-dot purple"></span>
          <span>40 Years +</span>
        </div>

      </div>

    </div>
  </div>


  <!-- Education Ratio -->
  <div class="stat-col">

    <h3 class="stat-title">Education Ratio</h3>

    <div class="chart-layout">

      <div
        class="education-pie-chart"
        role="img"
        aria-label="Education Ratio: 75 percent Graduate and 25 percent Post Graduate"
      >

        <span class="education-value edu-value-blue">75%</span>

        <span class="education-value edu-value-orange">25%</span>

        <span class="pie-center" aria-hidden="true"></span>

      </div>


      <div class="stat-legend">

        <div class="legend-item">
          <span class="legend-dot blue"></span>
          <span>Graduate</span>
        </div>

        <div class="legend-item">
          <span class="legend-dot orange"></span>
          <span>Post Graduate</span>
        </div>

      </div>

    </div>
  </div>

</div>
</section>

<section class="col-2 section-gap force">
  <div class="section-width">
    <h2 class="h-2 text-center">Meet Our Driving Force</h2>
    <h3 class="h-3 text-center">The Key People Behind Our Success</h3>
  </div>
  <div class="mt">
  <div class="directors">

  <!-- Director 1 -->
  <div class="director-card">
    <div class="director-image">
      <img
        src="/assets/images/Anurag-Chirimar-bw.webp"
        alt="Anurag Chirimar"
        title="Anurag Chirimar"
        class="director-img default-img"
      >

      <img
        src="/assets/images/Anurag-Chirimar.webp"
        alt="Anurag Chirimar"
        title="Anurag Chirimar"
        class="director-img hover-img"
        aria-hidden="true"
      >
    </div>

    <div class="director-caption">
      <h4>Anurag Chirimar</h4>
      <p>Director</p>
    </div>
  </div>


  <!-- Director 2 -->
  <div class="director-card">
    <div class="director-image">
      <img 
        src="/assets/images/Subrata-Roy-bw.webp"
        alt="Subrata Roy"
        title="Subrata Roy"
        class="director-img default-img"
      >

      <img 
        src="/assets/images/Subrata-Roy.webp"
        alt="Subrata Roy"
        title="Subrata Roy"
        class="director-img hover-img"
        aria-hidden="true"
      >
    </div>

    <div class="director-caption">
      <h4>Subrata Roy</h4>
      <p>Director</p>
    </div>
  </div>


  <!-- Director 3 -->
  <div class="director-card">
    <div class="director-image">
      <img 
        src="/assets/images/Kuntal-Chatterjee-bw.webp"
        alt="Kuntal Chatterjee"
        class="director-img default-img"
      >

      <img 
        src="/assets/images/Kuntal-Chatterjee.webp"
        alt="Kuntal Chatterjee"
        title="Kuntal Chatterjee"
        class="director-img hover-img"
        aria-hidden="true"
      >
    </div>

    <div class="director-caption">
      <h4>Kuntal Chatterjee</h4>
      <p>CEO</p>
    </div>
  </div>

</div>
</div>
</section>

<section class="section-gap section-width">
    <div class="value-row"> 
        <div class="value-col">
            <h2 class="h-2">Our Values</h2>
            <h3 class="h-3">Built on Purposeful Growth</h3>
            <p>
              Every strategy is designed to boost patient footfall, improve conversions, and support long-term practice growth.
            </p>
            <p>
              We prioritise quality over quantity, always aiming for meaningful impact over numbers.
            </p>
            <p>
              Our work doesn’t end with generating leads; we help turn those leads into confirmed appointments.
            </p>
            <p>
              Every healthcare brand is unique, so we craft digital strategies that align with your goals and identity.
            </p>
            <p>
              With over six years of experience, we’ve been delivering measurable digital growth for healthcare clients, helping them build credibility, trust, and a steady flow of patients.
            </p>
            <a href="tel:8336920676" class="btn btn--accent"><i class="fa-solid fa-phone" aria-hidden="true"></i> 8336920676</a>
        </div>
        <div class="value-col">
          <img src="/assets/images/Our-Values.webp" alt="Our Values" width="100%" height="auto" loading="lazy">
        </div>
    </div>
</section>

<section class="section-width team mt">
    <h2 class="h-2 text-center">As a team</h2>
    <h3 class="h-3 text-center">We are a focused team of specialists working together to help healthcare brands grow and succeed:</h3>
  <div class="team-container">

    <div class="team-grid">
      <div class="team-card">
        <i class="fa-solid fa-chart-line"></i>
        <h4>Seo Strategists</h4>
      </div>

      <div class="team-card">
        <i class="fa-solid fa-bullseye"></i>
        <h4>Performance Marketers</h4>
      </div>

      <div class="team-card">
        <i class="fa-solid fa-code"></i>
        <h4>Website Designers and Developers</h4>
      </div>

      <div class="team-card">
        <i class="fa-solid fa-pen-nib"></i>
        <h4>Content Writers</h4>
      </div>

      <div class="team-card">
        <i class="fa-solid fa-film"></i>
        <h4>Motion Graphic Designers</h4>
      </div>

      <div class="team-card">
        <i class="fa-solid fa-users"></i>
        <h4>Social Media Experts</h4>
      </div>

      <div class="team-card">
        <i class="fa-solid fa-handshake"></i>
        <h4>Sales & Marketing Experts</h4>
      </div>
    </div>

    <div class="team-work">
      <h3 class="h-3">Below are the key aspects of our work culture that have brought success to us:</h3>

      <div class="team-points">

        <div class="team-point">
          <i class="fa-solid fa-gears"></i>
          <p>Our team operates in a streamlined manner to produce the best results.</p>
        </div>

        <div class="team-point">
          <i class="fa-solid fa-lightbulb"></i>
          <p>We believe in constant innovation, strategic planning, careful preparation, effective execution, and delivering results.</p>
        </div>

        <div class="team-point">
          <i class="fa-solid fa-arrow-trend-up"></i>
          <p>We stay up-to-date with the latest healthcare marketing trends.</p>
        </div>

        <div class="team-point">
          <i class="fa-solid fa-user-check"></i>
          <p>Our digital marketing team is capable of meeting the expectations of clients in the most effective ways.</p>
        </div>

      </div>
    </div>

  </div>
</section>

<?php
$aboutFaqs = [
    ['question' => 'What services does MfunL offer?', 'answer' => 'MfunL offers a full range of digital marketing services for the healthcare industry. This includes SEO (search engine optimisation), Google Ads (PPC), content marketing, social media management, lead generation, website design, and training on converting online leads into patients.'],
    ['question' => 'How is MfunL different from other digital marketing agencies?', 'answer' => 'MfunL does not stop at just giving you leads. We follow up with you and your team and train you on how to convert those leads. We believe that your growth is our success, so we focus on building long-term relationships and always support you, even after delivering results.'],
    ['question' => 'Who are our clients?', 'answer' => 'We primarily work with clinics, hospitals, medical startups and other healthcare brands seeking to expand their online presence and attract more patients through digital channels.'],
    ['question' => 'Is MfunL only for established hospitals, or do you also help clinics and start-ups?', 'answer' => 'We help both established hospitals and new clinics or start-ups. Regardless of where you are in your growth journey, we offer customized solutions to fit your unique needs and goals.'],
    ['question' => 'How do we help with lead generation in healthcare?', 'answer' => 'Our team utilises proven digital marketing strategies, including targeted ads, search engine optimization, and engaging social media campaigns, to attract more patient inquiries for you.'],
    ['question' => "What makes MfunL's approach to healthcare marketing special?", 'answer' => 'Our strategies are personalised for each client. We focus on transparency, honest communication, regular updates, and creative solutions that deliver tangible results in the healthcare space.'],
    ['question' => 'Does MfunL offer training or support to our staff?', 'answer' => 'Yes, after helping you generate leads, we also train your team on how to convert these leads into patient appointments. Our support continues even after delivering your marketing campaigns.'],
];
?>
<section class="section-gap section-width">
  <h2 class="h-2 text-center">You May Want to Know</h2>
  <h3 class="h-3 text-center">Know Us. Grow With Us.</h3>
  <div class="faq__accordion">
    <?php foreach ($aboutFaqs as $i => $faq): ?>
      <div class="faq-item">
        <h4>
          <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="about-faq-answer-<?= $i ?>">
            <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
            <span class="faq-item__icon" aria-hidden="true"></span>
          </button>
        </h4>
        <div class="faq-item__answer" id="about-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
          <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
