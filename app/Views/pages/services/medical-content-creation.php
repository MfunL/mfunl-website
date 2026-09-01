<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <picture>
    <source media="(max-width: 640px)" srcset="/assets/images/Medical%20Content%20Creation%20Mobile%20Banner.webp">
    <img class="page-hero__bg" src="/assets/images/Medical Content Creation Banner.webp" alt="Medical Content Creation" title="Medical Content Creation" width="1920" height="800" loading="eager" fetchpriority="high">
  </picture>
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Medical Content Creation</h1>
    <p class="page-hero__sub">Create content that builds trust, elevates your brand, and turns patient clicks into confident consultations.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width content-tabs">
  <div class="content-tabs__inner">
    <div class="content-tabs__nav">
      <?= \App\Core\View::partial('service-nav', ['current' => 'medical-content-creation']) ?>

      <?= \App\Core\View::partial('side-contact') ?>
    </div>

    <div class="content-tabs__panels">

      <div class="content-tabs__panel" id="tab-blend">
        <h2 class="h-2">Medical Content that Builds Your Brand</h2>
        <h3 class="h-3">From blogs to reels, creating healthcare content that connects.</h3>
        <p>In the era of Google searches and social media scrolls, is your clinic or hospital visible to patients when they are searching?</p>
        <p>It&rsquo;s time to get noticed, chosen, and trusted through the finest medical content creation that speaks directly to patients, thereby giving your healthcare brand the identity it needs.</p>
        <p>At MfunL, we specialise in creating medical content that helps hospitals, clinics, and doctors connect with patients, therefore leading to more conversions.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Builds Your Brand image.webp" alt="Medical Content that Builds Your Brand" title="Medical Content that Builds Your Brand" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="tab-missing">
        <h2 class="h-2">What is Medical Content Creation?</h2>
        <h3 class="h-3">By turning your medical expertise into content that makes you visible to the right patients.</h3>
        <p>Medical content creation is the art of transforming your medical expertise into a variety of engaging formats that connect with patients &mdash; from blog posts to videos and social media. It&rsquo;s about utilising every form of digital content from website pages and social media posts to YouTube videos, Google ads, email campaigns, and more, to establish a powerful brand presence. Whether you're a multispecialty hospital, a superspeciality clinic, or a surgeon, effective content is the bridge that connects your expertise to the patients who need you.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/What-is-Medical-Content-Creation-img.webp" alt="What is Medical Content Creation?" title="What is Medical Content Creation?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="tab-engage">
        <h2 class="h-2">Why is Medical Content Creation Necessary?</h2>
        <h3 class="h-3">Because patients search online before choosing where to get treated.</h3>
        <p>Without content, you&rsquo;re invisible. 88.2% patients search online for their health concerns and facilities around before actually booking a consultation. (View Source)</p>
        <p>That&rsquo;s why healthcare content creation is no longer a luxury; it&rsquo;s a key part of growing your patient footfall.</p>
        <p><b>Here&rsquo;s more:</b></p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Content is your chance to educate, engage, and build trust with your patients</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Content builds authority and makes your services more discoverable</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> It nurtures relationships, creating a sense of familiarity and trust even before the patient walks into your clinic</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Content marketing provides consistent messaging, which keeps your clinic or practice top of mind for your audience.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Turn patient leads into appointments with conversion-focused messaging.</li>
        </ul>
        <p><strong>Ready to turn content into conversions? Let MfunL build your brand with content that works.</strong></p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-is-Medical-Content-Creation-necessary-img.webp" alt="Why is Medical Content Creation Necessary?" title="Why is Medical Content Creation Necessary?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="tab-deliver">
        <h2 class="h-2">What We Offer</h2>
        <h3 class="h-3">It should connect with patients and bring measurable results.</h3>
        <p>At MfunL, we offer an all-inclusive medical content creation service designed to build your brand and increase patient footfall.</p>
        <p><b>Here&rsquo;s what medical content creation at MfunL includes:</b></p>

        <div class="content-tabs__grid">
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Informative treatment pages focused on patient concerns.webp" alt="Informative treatment pages focused on patient concerns" title="Informative treatment pages focused on patient concerns" class="b-rad" loading="lazy">
            <p>Informative treatment pages focused on patient concerns.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Blog posts that answer actual patient queries.webp" alt="Blog posts that answer actual patient queries" title="Blog posts that answer actual patient queries" class="b-rad" loading="lazy">
            <p>Blog posts that answer actual patient queries, no fluff, no repetition.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Social media content.webp" alt="Social media content" title="Social media content" class="b-rad" loading="lazy">
            <p>Social media content that keeps your healthcare brand visible, relatable, and engaging.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/humanise your story.webp" alt="Humanise your story" title="Humanise your story" class="b-rad" loading="lazy">
            <p>About pages and local clinic pages that highlight your expertise and humanise your story.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Google Business posts.webp" alt="Google Business posts" title="Google Business posts" class="b-rad" loading="lazy">
            <p>Google Business posts and newsletters to keep your brand active and helpful.</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Ad copy.webp" alt="Ad copy" title="Ad copy" class="b-rad" loading="lazy">
            <p>Ad copy, video content, and campaign material for Google, Facebook, Instagram, YouTube and more.</p>
          </div>
        </div>

        <p><strong>Want content that not only informs but builds your healthcare brand? Contact MfunL to make it happen &mdash; Call <a href="tel:8336920676">8336920676</a></strong></p>
      </div>

      <div class="content-tabs__panel" id="tab-why">
        <h2 class="h-2">Why Partner with MfunL for Medical Content?</h2>
        <h3 class="h-3">Because we understand what the healthcare audience wants.</h3>
        <p>MfunL specialises in creating clear, credible, and SEO-friendly content for the healthcare industry. We don&rsquo;t just write, we develop strategic, multi-format content that works across platforms. From websites to social media, we help your healthcare brand stay visible, trustworthy, and patient-focused in today&rsquo;s digital landscape.</p>
        <p><b>Here&rsquo;s how we keep your healthcare brand visible, credible, and patient-friendly:</b></p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Informative treatment pages that don&rsquo;t just explain your services simply and professionally, but also convert.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> SEO-optimised health blogs that answer real patient queries.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Social media content that creates awareness, engages users, and fosters community.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Content calendars aligned with your speciality and seasonal trends.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> GMB posts, ad copy, and video scripts that support your digital strategy, driving visibility and conversions.</li>
        </ul>
        <p>We refine your strategy to ensure your digital presence consistently educates, connects, and delivers real impact.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-Partner.webp" alt="Why Partner with MfunL for Medical Content?" title="Why Partner with MfunL for Medical Content?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="tab-faq">
        <h2 class="h-2">You May Want to Know</h2>
        <div class="faq__accordion">
          <?php
          $mccFaqs = [
              ['question' => 'From blogs to reels to campaigns, here’s what you need to know.', 'answer' => 'We create SEO-friendly website content, health blogs, social media posts, FAQs, ad copy, and more, personalised to your speciality and patient base.'],
              ['question' => 'How is our content different from that of general writers or AI tools?', 'answer' => 'We specialise in healthcare content. Our team understands patient psychology, medical sensitivity, and SEO, ensuring the content connects and converts effectively.'],
              ['question' => 'Will this help with Google rankings?', 'answer' => 'Yes. Our content adheres to on-page SEO best practices, helping your clinic appear in search results when patients look for related services.'],
              ['question' => 'Can we manage everything from blogs to social and ads?', 'answer' => 'Yes. From treatment pages to YouTube scripts, Instagram reels to Google Ads, we handle full-scale content marketing that’s designed to grow your brand.'],
              ['question' => 'How often do you need new content?', 'answer' => 'For best results, we recommend monthly content plans, blogs, GMB posts, and regular updates to key website pages.'],
          ];
          ?>
          <?php foreach ($mccFaqs as $i => $faq): ?>
            <div class="faq-item">
              <h4>
                <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="mcc-faq-answer-<?= $i ?>">
                  <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
                  <span class="faq-item__icon" aria-hidden="true"></span>
                </button>
              </h4>
              <div class="faq-item__answer" id="mcc-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
                <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/faqs-image.webp" alt="You May Want to Know" title="You May Want to Know" loading="lazy">
      </div>

    </div>
  </div>
</section>

