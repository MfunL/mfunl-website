<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero page-hero--plain">
  <div class="wrap page-hero__inner">
    <h1>Healthcare Digital Marketing Pricing in Kolkata</h1>
    <p class="page-hero__sub">Transparent packages for hospitals, clinics and practitioners &mdash; bundled for full coverage, or built one service at a time.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width text-center">
  <h2 class="section-eyebrow">All Four Services, One Plan</h2>
  <p class="section-heading">The <span class="accent">Complete Growth Package</span></p>
  <p>SEO + PPC + Social (Content Marketing) + Website, bundled into a single coordinated plan for practices that want every channel working together.</p>

  <div class="pricing-plans">
    <div class="pricing-plan">
      <h3>Basic</h3>
      <p class="pricing-plan__price">&#8377;90,000<small> /month</small></p>
      <p>All four channels at Basic-tier scope &mdash; a coordinated starting point across SEO, PPC, Social and Website.</p>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </div>

    <div class="pricing-plan pricing-plan--featured">
      <span class="pricing-plan__badge">Most Popular</span>
      <h3>Premium</h3>
      <p class="pricing-plan__price">&#8377;1,35,000<small> /month</small></p>
      <p>All four channels at Premium-tier scope &mdash; deeper keyword coverage, more content, and AI search optimisation included.</p>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </div>

    <div class="pricing-plan">
      <h3>Premium+</h3>
      <p class="pricing-plan__price">&#8377;1,70,000<small> /month</small></p>
      <p>All four channels at our widest scope &mdash; maximum keyword, content and ad coverage for practices ready to scale fast.</p>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </div>
  </div>
</section>

<section class="section-gap-both section-width text-center" data-pricing-tabs>
  <h2 class="section-eyebrow">Or Build Your Own</h2>
  <p class="section-heading">Pick a Service, Compare Tiers, <span class="accent">Choose What Fits</span></p>

  <div class="pricing-jump-nav" role="tablist" aria-label="Choose a service">
    <button type="button" class="is-active" role="tab" aria-selected="true" aria-controls="seo-pricing" data-tab-btn="seo-pricing">SEO</button>
    <button type="button" role="tab" aria-selected="false" aria-controls="ppc-pricing" data-tab-btn="ppc-pricing">Google Ads (PPC)</button>
    <button type="button" role="tab" aria-selected="false" aria-controls="social-pricing" data-tab-btn="social-pricing">Social Media</button>
    <button type="button" role="tab" aria-selected="false" aria-controls="website-pricing" data-tab-btn="website-pricing">Website Design</button>
  </div>

  <div id="seo-pricing" class="pricing-tab-panel" role="tabpanel">
    <h3 class="h-2">SEO</h3>
    <div class="price-table-wrap">
      <table class="price-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Basic<span class="price-table__tier-price">&#8377;35,000</span></th>
            <th>Premium<span class="price-table__tier-price">&#8377;50,000</span></th>
            <th>Premium+<span class="price-table__tier-price">&#8377;60,000</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>SEO (Website &amp; GMB)</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>AI Search (ChatGPT + Claude + Gemini)</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Competitor Analysis</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Keyword Research</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Website On-page &amp; Off-page Audit + Issue Fixes</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Primary Keywords</td><td>12&ndash;15</td><td>15&ndash;20</td><td>20&ndash;30</td></tr>
          <tr><td>Secondary Keywords</td><td>15&ndash;20</td><td>20&ndash;30</td><td>30&ndash;50</td></tr>
          <tr><td>GMB Keywords</td><td>8</td><td>12</td><td>20</td></tr>
          <tr><td>SE Ranking &mdash; Faster Website Ranking AI Tool</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Localo &mdash; Faster Local Search Optimisation AI Tool</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Content Calendar</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Topic Research</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Website Blogs (1200&ndash;1300 words)</td><td>2</td><td>4</td><td>6</td></tr>
          <tr><td>GMB Blogs (1200&ndash;1300 characters)</td><td>10</td><td>20</td><td>30</td></tr>
          <tr><td>Backlinks</td><td>15</td><td>25</td><td>30</td></tr>
          <tr><td>Blog Commenting</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>GMB Review Reply</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>ORM</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Monthly Report</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
        </tbody>
      </table>
    </div>
    <p class="pricing-service-cta"><strong>Not sure which SEO tier fits your practice? Talk it through with our team &mdash; no obligation. Call <a href="tel:8336920676">8336920676</a></strong><br>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </p>
  </div>

  <div id="ppc-pricing" class="pricing-tab-panel" role="tabpanel" hidden>
    <h3 class="h-2">Google Ads (PPC)</h3>
    <div class="price-table-wrap">
      <table class="price-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Basic<span class="price-table__tier-price">&#8377;20,000</span></th>
            <th>Premium<span class="price-table__tier-price">&#8377;40,000</span></th>
            <th>Premium+<span class="price-table__tier-price">&#8377;60,000</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Campaign Strategy &amp; Planning</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Keyword Research &amp; Targeting</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Ad Creation &amp; Optimization</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Bid Price Management &amp; Budget Optimization</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>A/B Testing &amp; Performance Optimization</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Tracking &amp; Analytics</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Regular Reporting &amp; Insights</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Compliance &amp; Policy Adherence</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Continuous Monitoring &amp; Adjustments</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Ongoing Communication &amp; Support</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Departments</td><td>1&ndash;2</td><td>2&ndash;4</td><td>4&ndash;8</td></tr>
          <tr><td>Landing Pages</td><td>1&ndash;2</td><td>2&ndash;4</td><td>4&ndash;8</td></tr>
          <tr><td>Monthly Report</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr class="price-table__highlight"><td>Minimum Ad Budget (additional to service fee)</td><td>&#8377;40,000</td><td>&#8377;1,20,000</td><td>&#8377;1,80,000</td></tr>
        </tbody>
      </table>
    </div>
    <p class="pricing-service-cta"><strong>Want a PPC plan sized to your ad budget? We&rsquo;ll walk you through spend vs. package cost. Call <a href="tel:8336920676">8336920676</a></strong><br>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </p>
  </div>

  <div id="social-pricing" class="pricing-tab-panel" role="tabpanel" hidden>
    <h3 class="h-2">Social Media (Content Marketing)</h3>
    <div class="price-table-wrap">
      <table class="price-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Basic<span class="price-table__tier-price">&#8377;35,000</span></th>
            <th>Premium<span class="price-table__tier-price">&#8377;45,000</span></th>
            <th>Premium+<span class="price-table__tier-price">&#8377;50,000</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Platforms</td><td>FB + IG + YT</td><td>FB + IG + YT + LinkedIn</td><td>FB + IG + YT + LinkedIn</td></tr>
          <tr><td>Competitor Analysis</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Social Media Optimization</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Content Calendar (Start of the Month)</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Topic Research</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Editing &amp; Compositing</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Organic Post</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>YouTube SEO</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Collaborations with &ldquo;Bactar Babu&rdquo; Platform</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Paid Campaign (View / Reach / Engagement / Lead / Re-Target)</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Shooting</td><td>1&times; monthly</td><td>2&times; monthly</td><td>2&times; monthly</td></tr>
          <tr><td>Still Designs</td><td>2</td><td>4</td><td>6</td></tr>
          <tr><td>Carousel Designs</td><td>1</td><td>2</td><td>4</td></tr>
          <tr><td>Short Videos (Reels)</td><td>9</td><td>12</td><td>15</td></tr>
          <tr><td>Long Videos</td><td>2</td><td>4</td><td>6</td></tr>
          <tr><td>Monthly Report</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr class="price-table__highlight"><td>Minimum Ad Budget (additional to service fee)</td><td>&#8377;20,000</td><td>&#8377;50,000</td><td>&#8377;80,000</td></tr>
        </tbody>
      </table>
    </div>
    <p class="pricing-service-cta"><strong>Curious what a month of content actually looks like? Ask us for sample reels and posts from real clinics. Call <a href="tel:8336920676">8336920676</a></strong><br>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </p>
  </div>

  <div id="website-pricing" class="pricing-tab-panel" role="tabpanel" hidden>
    <h3 class="h-2">Website Design</h3>
    <div class="price-table-wrap">
      <table class="price-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Basic<span class="price-table__tier-price">&#8377;30,000</span></th>
            <th>Premium<span class="price-table__tier-price">&#8377;55,000</span></th>
            <th>Premium+<span class="price-table__tier-price">&#8377;75,000</span></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Page Count</td><td>10&ndash;12</td><td>25&ndash;30</td><td>40+</td></tr>
          <tr><td>Professional Design</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Mobile Friendly Website</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Call &amp; WhatsApp Button</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Google Map Integration</td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Website Optimisation</td><td>Not AI Friendly</td><td>AI Friendly</td><td>AI Friendly</td></tr>
          <tr><td>Content Approach</td><td>Standard</td><td>AI LLM SEO Optimised</td><td>AI LLM SEO Optimised</td></tr>
          <tr><td>Google Search Setup</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Website Speed Optimization</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Homepage Google Schema</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>On Page SEO</td><td><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td><td><i class="fa-solid fa-circle-check" aria-hidden="true"></i></td></tr>
          <tr><td>Support Duration</td><td>1 Month</td><td>2 Months</td><td>3 Months</td></tr>
        </tbody>
      </table>
    </div>

    <p>Annual add-ons apply to every plan once your site is live:</p>
    <div class="price-table-wrap">
      <table class="price-table">
        <thead>
          <tr><th>Service</th><th>Yearly Cost</th></tr>
        </thead>
        <tbody>
          <tr><td>Domain</td><td>&#8377;1,550</td></tr>
          <tr><td>Hosting (1 GB VPS CDN Shared Server)</td><td>&#8377;5,000</td></tr>
          <tr><td>SSL Certificate</td><td>&#8377;5,000</td></tr>
          <tr><td>Website Maintenance (10&ndash;15 updates/year)</td><td>&#8377;12,000</td></tr>
          <tr class="price-table__highlight"><td>Total</td><td>&#8377;23,550</td></tr>
        </tbody>
      </table>
    </div>
    <p class="pricing-service-cta"><strong>Need a website that&rsquo;s ready for AI search too? Ask about our LLM-optimised content approach. Call <a href="tel:8336920676">8336920676</a></strong><br>
      <button type="button" class="btn btn--accent" data-open-modal="lead-modal">Book a Free Consultation</button>
    </p>
  </div>
</section>

<section class="section-gap-both section-width text-center">
  <h2 class="section-eyebrow">The Shift</h2>
  <p class="section-heading">What Changed Between <span class="accent">2020 and 2026</span></p>
  <p>Six years ago, a good rank on Google was close to a complete strategy. That era has ended. Four things happened at once:</p>

  <div class="reason-grid">
    <div class="reason-card">
      <h4>Search stopped being a list. It became an answer.</h4>
      <p>AI systems now compose answers from multiple sources instead of handing patients a ranked list of links &mdash; which means being #1 on Google is no longer enough on its own.</p>
    </div>
    <div class="reason-card">
      <h4>Trust moved outside your website.</h4>
      <p>Patients decide on review pages, in comments, and through social shares long before they ever land on your homepage, so reputation management now carries as much weight as the site itself.</p>
    </div>
    <div class="reason-card">
      <h4>The journey stopped being a straight line.</h4>
      <p>Awareness, search, verification and decision now happen across multiple touchpoints, not in one neat sequence &mdash; and each one needs its own presence.</p>
    </div>
    <div class="reason-card">
      <h4>Cost of a single channel keeps climbing.</h4>
      <p>Healthcare CPCs keep rising every year. Leaning on one paid channel without an organic base or brand recall to fall back on gets more expensive with every passing quarter.</p>
    </div>
  </div>

  <p>None of this means any one channel has stopped working. It means no single channel can finish the job alone anymore.</p>
</section>

<section class="section-gap-both section-width text-center">
  <h2 class="section-eyebrow">The Patient Journey</h2>
  <p class="section-heading">Follow <span class="accent">One Real Patient</span></p>

  <div class="price-table-wrap">
    <table class="price-table">
      <thead>
        <tr><th>Stage</th><th>What the Patient Does</th><th>What Has to Exist</th></tr>
      </thead>
      <tbody>
        <tr><td>1. Trigger</td><td>Notices a symptom. Doesn&rsquo;t know your name yet.</td><td>Social content, awareness campaigns</td></tr>
        <tr><td>2. Search</td><td>Types &ldquo;best gynaecologist near me&rdquo; / asks an AI chatbot</td><td>SEO, Google Maps SEO, AI search optimisation</td></tr>
        <tr><td>3. Verify</td><td>Reads reviews, checks your profile, compares you to two others</td><td>Reputation management, Google Business Profile, social proof</td></tr>
        <tr><td>4. Decide</td><td>Opens your website on a phone. Judges you in 6 seconds.</td><td>Fast, credible, mobile-first website with easy booking</td></tr>
        <tr><td>5. Act</td><td>Calls, fills a form, or WhatsApps &mdash; often at 10 p.m.</td><td>Google Ads capture, conversion-ready landing page, follow-up system</td></tr>
      </tbody>
    </table>
  </div>

  <p><strong>Ask yourself honestly: at which of these five stages does your practice currently disappear?</strong></p>
  <a class="btn btn--accent" href="https://wa.me/917439775869" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Chat on WhatsApp</a>
</section>

<section class="section-gap-both section-width text-center">
  <h2 class="section-eyebrow">The Leaks</h2>
  <p class="section-heading">What Actually Happens When You <span class="accent">Buy Only One</span></p>

  <div class="reason-grid">
    <div class="reason-card">
      <h4>If you buy only SEO</h4>
      <p>You rank well, but conversions stay flat because the website is slow, reviews are thin, and the booking process isn&rsquo;t clear.</p>
    </div>
    <div class="reason-card">
      <h4>If you buy only Google Ads</h4>
      <p>Enquiries show up immediately, but you&rsquo;re paying full price for every one of them, building zero brand equity, and costs keep climbing the moment you stop.</p>
    </div>
    <div class="reason-card">
      <h4>If you buy only Social Media</h4>
      <p>You build a following and brand recall, but there&rsquo;s no search visibility to capture the demand you&rsquo;re creating.</p>
    </div>
    <div class="reason-card">
      <h4>If you buy only a Website</h4>
      <p>It&rsquo;s a beautiful brochure in a room nobody enters.</p>
    </div>
  </div>

  <p>Every one of these four is a genuinely good investment. Each one, alone, leaks. Holistic marketing simply means plugging the leaks in the same quarter instead of discovering them one at a time over three years.</p>
</section>

<?= \App\Core\View::partial('cta-band', [
    'heading' => 'Not sure which plan fits your practice?',
    'subheading' => "Book a free 15-minute call and we'll help you find the right starting point.",
]) ?>
