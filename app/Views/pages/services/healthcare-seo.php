<?php
/** @var string $title */
/** @var array<int,array{label:string,url:string}> $crumbs */
?>
<section class="page-hero">
  <img class="page-hero__bg" src="/assets/images/MfunL-SEO-Banner.webp" alt="" width="1920" height="800" loading="eager" fetchpriority="high">
  <div class="page-hero__overlay" aria-hidden="true"></div>

  <div class="wrap page-hero__inner">
    <h1>Healthcare SEO/AEO/GEO</h1>
    <p class="page-hero__sub">Strengthen your clinic&rsquo;s online presence with strategic healthcare SEO that drives real patient growth.</p>
    <?= \App\Core\View::partial('breadcrumbs', ['crumbs' => $crumbs ?? []]) ?>
  </div>
</section>

<section class="section-gap-both section-width content-tabs">
  <div class="content-tabs__inner">
    <div class="content-tabs__nav">
      <?= \App\Core\View::partial('service-nav', ['current' => 'healthcare-seo']) ?>

      <?= \App\Core\View::partial('side-contact') ?>
    </div>

    <div class="content-tabs__panels">

      <div class="content-tabs__panel" id="seo-tab-invisible">
        <h2 class="h-2">Ranking #1 Is No Longer the Same as Being Found</h2>
        <h3 class="h-3">MfunL builds visibility across all three layers at once: classic search rankings, direct answers, and AI citations.</h3>
        <p>Your website can hold the top organic position and still lose the patient. Here&rsquo;s what changed.</p>
        <p>When someone searches a symptom, a procedure or a specialist near them, most healthcare queries now return an AI-generated summary before a single blue link appears. The patient reads the answer. They act on it. They never scroll.</p>
        <p>And a growing share of patients skip the search box entirely &mdash; asking ChatGPT, Gemini, Perplexity or an on-device assistant which hospital to go to, whether their symptom is serious, or what a procedure costs. If your practice isn&rsquo;t inside those answers, you are not in the running. Not ranked lower &mdash; absent.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Showing-Up-on-Google.webp" alt="Ranking #1 Is No Longer the Same as Being Found" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="seo-tab-difference">
        <h2 class="h-2">Three Disciplines, One Outcome &mdash; More Patients</h2>
        <h3 class="h-3">It&rsquo;s how patients find you before they find someone else.</h3>
        <p>Healthcare SEO improves where your website ranks in search results. Healthcare AEO (Answer Engine Optimization) structures your content so search engines and voice assistants can lift a direct, complete answer from your page. Healthcare GEO (Generative Engine Optimization) builds the authority, structure and entity signals that make AI assistants like ChatGPT, Gemini, Perplexity and Google AI Overviews cite and recommend your practice by name.</p>
        <p>They aren&rsquo;t replacements for each other. SEO is the foundation, AEO is the format, GEO is the reputation.</p>

        <div class="content-tabs__table-wrap">
          <table class="content-tabs__table">
            <thead>
              <tr>
                <th scope="col"><span class="sr-only">Dimension</span></th>
                <th scope="col">SEO</th>
                <th scope="col">AEO</th>
                <th scope="col">GEO</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Goal</th>
                <td>Rank in search results</td>
                <td>Win the answer box</td>
                <td>Get cited by name in AI answers</td>
              </tr>
              <tr>
                <th scope="row">Surface</th>
                <td>Google, Bing organic + Maps</td>
                <td>Featured Snippets, People Also Ask, Voice Search</td>
                <td>ChatGPT, Gemini, Perplexity, Copilot, AI Overviews</td>
              </tr>
              <tr>
                <th scope="row">Unit of Work</th>
                <td>The page</td>
                <td>The passage</td>
                <td>The entity</td>
              </tr>
              <tr>
                <th scope="row">Content Style</th>
                <td>Keyword-led, in-depth</td>
                <td>Question-led, direct, self-contained</td>
                <td>Fact-dense, sourced, structured</td>
              </tr>
              <tr>
                <th scope="row">Key Levers</th>
                <td>Technical health, content depth, links, Google Business Profile</td>
                <td>Question research, answer-first formatting, FAQ &amp; HowTo schema</td>
                <td>Structured data, citations, third-party mentions, reviews, consistent entity data</td>
              </tr>
              <tr>
                <th scope="row">Measured By</th>
                <td>Rankings, organic sessions, calls</td>
                <td>Snippet ownership, zero-click visibility</td>
                <td>Share of AI answers, citation frequency, AI-referred sessions</td>
              </tr>
              <tr>
                <th scope="row">Realistic Timeline</th>
                <td>3&ndash;6 months</td>
                <td>4&ndash;10 weeks</td>
                <td>2&ndash;5 months for first citations</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h4>Why You Can&rsquo;t Skip Any of Them</h4>
        <p>AI systems still crawl the open web to build their answers &mdash; so weak SEO means weak GEO. But the sources AI engines cite increasingly diverge from the sites that rank highest organically. Ranking well is now necessary but no longer sufficient.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/What-is-Healthcare-SEO.webp" alt="SEO, AEO &amp; GEO: What&rsquo;s the Difference?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="seo-tab-different">
        <h2 class="h-2">Health Content Is Held to a Higher Standard Than Any Other Category</h2>
        <h3 class="h-3">It is the strategy that puts your healthcare practice on the digital map.</h3>
        <p>Search engines and AI platforms treat health as a &ldquo;your money or your life&rdquo; topic. That means the bar for what gets shown, quoted and recommended is deliberately higher &mdash; and it moves.</p>
        <p>In practice, four things decide whether a healthcare site clears that bar:</p>
        <ol class="content-tabs__list content-tabs__list--ordered">
          <li><strong>Verifiable expertise.</strong> Content attributed to a named, credentialled clinician outperforms anonymous content. Every treatment page should carry an author or medical reviewer with qualifications, registration number and a linked profile.</li>
          <li><strong>Accountability and transparency.</strong> Clear ownership, physical address, registration details, real contact routes, visible policies. Anonymous health content is structurally disadvantaged.</li>
          <li><strong>Accuracy and currency.</strong> Health guidance changes. Pages with genuine, dated updates are favoured over pages that haven&rsquo;t moved in two years.</li>
          <li><strong>Compliance.</strong> Indian medical practitioners operate under professional conduct and advertising codes that restrict how care can be promoted and what claims can be made. Generalist agencies routinely write copy that puts a doctor&rsquo;s registration at risk. We don&rsquo;t.</li>
        </ol>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-is-Healthcare-SEO-Necessary.webp" alt="Why Healthcare Is Different" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="seo-tab-what-we-do">
        <h2 class="h-2">A Complete Visibility Stack for Hospitals, Clinics and Practitioners</h2>

        <h4>Foundation: Healthcare SEO</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Technical audit and site health &mdash; Core Web Vitals, crawlability, indexation, mobile experience and site architecture.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Patient-intent keyword research mapped to specialty, procedure, symptom and location.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Treatment and procedure page builds optimised for both ranking and AI extraction.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Medical blog strategy answering real patient questions.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Google Business Profile optimisation for every location and every practitioner.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> &ldquo;Near me&rdquo; and local pack strategy including multi-location and multi-branch setups.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Healthcare directory and citation consistency across Practo, Justdial, Lybrate, Google, Apple Maps and more.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Ethical, relevant link acquisition from medical associations, health publications, academic resources and press coverage.</li>
        </ul>

        <h4>Layer Two: Answer Engine Optimization (AEO)</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Question mining from real patient language, People Also Ask, voice queries and clinic front-desk conversations.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Answer-first content restructuring with direct answers in the first 40&ndash;60 words.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Structured data implementation including FAQPage, MedicalWebPage, Physician, MedicalClinic, Hospital, Service and Breadcrumb schema.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Featured Snippet and People Also Ask optimisation for priority procedures.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Voice-search formatting for conversational search queries.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Symptom &rarr; Condition &rarr; Treatment &rarr; Specialist content clusters that mirror the real patient journey.</li>
        </ul>

        <h4>Layer Three: Generative Engine Optimization (GEO)</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> AI visibility audit across ChatGPT, Gemini, Perplexity, Copilot and Google AI Overviews.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Entity building using consistent machine-readable information about doctors, hospitals, specialties and locations.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Citation-worthy content including original data, expert commentary and sourceable facts.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Extractable content structure using definition blocks, comparison tables, FAQs and concise answer sections.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> AI crawler accessibility review covering robots.txt, CDN configuration and GPTBot, ClaudeBot, Google-Extended and PerplexityBot access.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Third-party authority through reviews, health directories, associations, forums and press mentions.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> AI reputation monitoring and correction of inaccurate AI-generated information.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Scheduled content refresh cycles to keep important pages inside the AI citation pool.</li>
        </ul>

        <h4>Reporting</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Monthly dashboard covering rankings, organic sessions, calls, form submissions and appointments.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Share-of-answer tracking across leading AI platforms.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> AI-referred traffic segmentation inside GA4.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Quarterly strategy reviews with your marketing team or management.</li>
        </ul>

        <p><strong>Want to know where you currently stand in AI answers? Get a Free AI Visibility Audit or Call <a href="tel:+918336920676">+91 8336920676</a></strong></p>
      </div>

      <div class="content-tabs__panel" id="seo-tab-how-we-work">
        <h2 class="h-2">A 90-Day Path From Invisible to Cited</h2>

        <h4>Weeks 1&ndash;2 &mdash; Diagnosis</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Technical audit covering site health, crawlability, Core Web Vitals and indexation.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Competitor mapping and patient-intent keyword research across specialties, treatments and locations.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> AI visibility baseline across ChatGPT, Gemini, Perplexity, Copilot and Google AI Overviews.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Receive a detailed report showing where you appear, where competitors dominate and the opportunities nobody has claimed yet.</li>
        </ul>

        <h4>Weeks 3&ndash;6 &mdash; Foundation</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Technical SEO improvements and website architecture optimisation.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Structured data implementation for healthcare entities, services and FAQs.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Google Business Profile optimisation and healthcare directory consistency.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Verification that search crawlers and AI bots can fully access and understand your content.</li>
        </ul>

        <h4>Weeks 5&ndash;12 &mdash; Content Build</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Creation and optimisation of priority treatment, procedure and specialty pages.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Question-led content answering real patient concerns.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Content written or reviewed by qualified medical writers.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Answer-first formatting with clinician attribution to improve trust and AI extractability.</li>
        </ul>

        <h4>Month 3 Onward &mdash; Authority &amp; Compounding</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Continuous publishing of high-value healthcare content.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Link building, media mentions and review generation.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Ongoing entity reinforcement across your digital presence.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Monthly performance measurement across SEO, AEO and GEO.</li>
        </ul>

        <h4>Ongoing &mdash; Iterate</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> AI-generated answers evolve every week.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> We re-run your priority prompts every month across leading AI platforms.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Based on the results, we refine content, strengthen authority signals and improve your visibility continuously.</li>
        </ul>
      </div>

      <div class="content-tabs__panel" id="seo-tab-who-we-serve">
        <h2 class="h-2">Built for Every Kind of Healthcare Practice</h2>
        <p>Our strategies are tailored for every type of healthcare organisation, from individual practitioners to multi-location hospital groups.</p>

        <h4>We Work With</h4>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Hospitals &mdash; General hospitals, multispecialty hospitals, superspecialty hospitals, daycare centres, eye hospitals, cancer hospitals and nursing homes.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Clinics &mdash; Dental clinics, aesthetic &amp; wellness clinics, ayurvedic clinics, fertility &amp; IVF centres, hearing aid centres and multispecialty clinics.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Individual Practitioners &mdash; Surgeons across every specialty, dermatologists, gynecologists, diagnostic centres &amp; laboratories.</li>
        </ul>

        <h4>Across India</h4>
        <p>Headquartered in Kolkata, we work with healthcare brands across Hyderabad, Bhubaneswar, Ahmedabad, Noida, Guwahati and many other cities throughout India.</p>
      </div>

      <div class="content-tabs__panel" id="seo-tab-boosts">
        <h2 class="h-2">What We Offer</h2>
        <h3 class="h-3">The proven strategies to boost visibility and bring in more patients.</h3>
        <p>Our healthcare SEO services cover everything you need to get found:</p>

        <div class="content-tabs__grid">
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Keyword-research.webp" alt="Keyword research and content planning" class="b-rad" loading="lazy">
            <p>Keyword research and content planning</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/SEO-optimised.webp" alt="SEO-optimised treatment pages and blogs" class="b-rad" loading="lazy">
            <p>SEO-optimised treatment pages and blogs</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Technical-audits.webp" alt="Technical audits and hospital website optimisation" class="b-rad" loading="lazy">
            <p>Technical audits and hospital website optimisation</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Local-SEO.webp" alt="Local SEO for doctors and clinics" class="b-rad" loading="lazy">
            <p>Local SEO for doctors and clinics</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Google-My-Business.webp" alt="Google My Business setup and posts" class="b-rad" loading="lazy">
            <p>Google My Business setup and posts</p>
          </div>
          <div class="content-tabs__grid-item">
            <img src="/assets/images/Monthly-SEO-performance.webp" alt="Monthly SEO performance reports" class="b-rad" loading="lazy">
            <p>Monthly SEO performance reports</p>
          </div>
        </div>

        <p><strong>Ready to rank higher and attract more patients? Let MfunL handle your SEO strategy &mdash; Call <a href="tel:8336920676">8336920676</a></strong></p>
      </div>

      <div class="content-tabs__panel" id="seo-tab-why-us">
        <h2 class="h-2">How MfunL Makes SEO Work for You?</h2>
        <h3 class="h-3">We don&rsquo;t just bring traffic; we get you real appointments.</h3>
        <p>At MfunL, we specialise in healthcare SEO strategies that improve your online presence and connect you with patients. Here&rsquo;s how we do it:</p>
        <ul class="content-tabs__list">
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> SEO-Optimised Treatment Pages that enhance service visibility and boost patient trust.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Health Blogs optimised for search to answer real patient queries and rank higher.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> SEO-Driven Social Media Content that builds local authority and attracts organic traffic.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Content Calendars aligned with seasonal healthcare trends to create timely, SEO-rich posts.</li>
          <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> GMB Posts, Ad Copy, and Video Scripts optimised to improve local rankings and drive patient appointments.</li>
        </ul>
        <p>Let MfunL turn your expertise into content that educates, connects, and converts.</p>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/Why-Partner-with-MfunL-for-Medical-Content.webp" alt="How MfunL Makes SEO Work for You?" loading="lazy">
      </div>

      <div class="content-tabs__panel" id="seo-tab-faq">
        <h2 class="h-2">Questions Hospital and Clinic Owners Ask Us</h2>
        <div class="faq__accordion">
          <?php
          $seoFaqs = [
              ['question' => 'What is healthcare SEO?', 'answer' => 'Healthcare SEO is the practice of improving a hospital, clinic or doctor’s website so it ranks higher in search results for the terms patients actually use — symptoms, procedures, specialties and “near me” searches. Unlike general SEO, it works within the higher accuracy and trust standards search engines apply to medical content, and within the advertising codes that govern medical practitioners.'],
              ['question' => 'What is AEO in healthcare marketing?', 'answer' => 'AEO, or Answer Engine Optimization, is the practice of structuring healthcare content so a search engine or voice assistant can lift a direct, complete answer straight from your page. It focuses on question-led headings, concise self-contained answers, and structured data such as FAQPage and MedicalWebPage markup.'],
              ['question' => 'What is GEO in healthcare marketing?', 'answer' => 'GEO, or Generative Engine Optimization, is the practice of building the authority, structure and entity signals that make AI assistants — ChatGPT, Gemini, Perplexity, Copilot and Google AI Overviews — cite and recommend a healthcare provider by name. Where SEO targets rankings, GEO targets inclusion in the AI-generated answer itself.'],
              ['question' => 'What’s the difference between SEO, AEO and GEO?', 'answer' => 'SEO gets your page ranked, AEO gets your answer extracted, and GEO gets your brand cited inside AI-generated responses. They share a technical foundation but differ in unit of work: SEO optimises the page, AEO optimises the passage, GEO optimises the entity. A healthcare provider needs all three, because patients now move between traditional search, voice assistants and AI chat within a single decision.'],
              ['question' => 'Does SEO still matter if AI is answering everything?', 'answer' => 'Yes — AI systems build their answers largely from web content they can crawl, so a technically sound, authoritative site remains the prerequisite for AI visibility. What has changed is that ranking first is no longer enough on its own: the sources AI engines cite increasingly differ from the sites that rank highest organically, which is why AEO and GEO are now separate disciplines.'],
              ['question' => 'How do I know if my hospital appears in AI answers?', 'answer' => 'Ask the assistants directly. Take the ten questions your patients most commonly ask, run them through ChatGPT, Gemini, Perplexity and Google AI Overviews, and record whether your practice is named, which competitors are named, and what the answer says about you. Repeat monthly, because AI answers change frequently. MfunL runs this as a free baseline audit.'],
              ['question' => 'Why is my traffic falling even though my rankings haven’t dropped?', 'answer' => 'Because AI summaries now answer many health questions on the results page itself, so fewer people click through even to top-ranked pages. This shows up as stable or improving rankings alongside falling sessions. The fix is not more rankings — it’s becoming the source the summary quotes, and shifting your measurement from clicks to appointments.'],
              ['question' => 'How long does healthcare SEO take to show results?', 'answer' => 'Most healthcare websites see meaningful movement in rankings and enquiries within three to six months, with local and Google Business Profile improvements often visible within four to eight weeks. AEO gains tend to arrive faster than SEO gains; GEO citations typically start appearing between month two and month five. Competition in your specialty and city, your site’s current condition, and publishing consistency are the main variables.'],
              ['question' => 'Can a single doctor or small clinic compete with large hospital chains?', 'answer' => 'Yes, and often more easily than in traditional SEO. Large chains compete on domain authority, but AI assistants and local search reward specificity — a clearly defined specialty, a defined service area, complete and consistent business data, genuine patient reviews, and content that answers narrow questions well. A single well-optimised practice can be the cited source for a specific procedure in a specific city even when it can’t outrank a national chain overall.'],
              ['question' => 'Do we still need a blog?', 'answer' => 'Yes — question-led content is now more valuable than it was, not less. Blogs are how you cover the long tail of symptom, procedure and cost questions that patients ask, and those pages are what AI assistants retrieve when building an answer. The format has changed, though: the useful blog post in 2026 opens with a direct answer, uses question-shaped headings, cites sources, and carries a named medical reviewer.'],
              ['question' => 'What do you actually report on?', 'answer' => 'Rankings and organic sessions, plus calls, form submissions and appointment requests attributed to organic channels, plus share-of-answer across AI platforms and AI-referred traffic segmented in GA4. You get a monthly dashboard and a quarterly strategy review.'],
          ];
          ?>
          <?php foreach ($seoFaqs as $i => $faq): ?>
            <div class="faq-item">
              <h4>
                <button type="button" class="faq-item__question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="seo-faq-answer-<?= $i ?>">
                  <?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?>
                  <span class="faq-item__icon" aria-hidden="true"></span>
                </button>
              </h4>
              <div class="faq-item__answer" id="seo-faq-answer-<?= $i ?>" <?= $i === 0 ? '' : 'hidden' ?>>
                <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <img class="content-tabs__panel-image b-rad" src="/assets/images/faqs-image.webp" alt="Questions Hospital and Clinic Owners Ask Us" loading="lazy">
      </div>

    </div>
  </div>
</section>
