<?php include 'header.php'; ?>
<style>
  :root {
    --teal: #0D9488;
    --teal-light: #CCFBF1;
    --cream: #FDFAF6;
    --charcoal: #1C2130;
    --soft-gray: #F3F4F6;
    --accent: #F59E0B;
  }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--charcoal);
  }

  /* HERO */
  .hero-section {
    background: white;
    /* background: linear-gradient(135deg, #0D9488 0%, #134E4A 60%, #064E3B 100%); */
    position: relative;
    overflow: hidden;
    padding: 100px 0 80px;
  }

  .hero-section::before {
    content: '';
    position: absolute;
    top: -80px;
    right: -80px;
    width: 420px;
    height: 420px;
    background: radial-gradient(circle, rgba(255, 255, 255, .07) 0%, transparent 70%);
    border-radius: 50%;
  }

  .hero-section::after {
    content: '';
    position: absolute;
    bottom: -60px;
    left: -60px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(245, 158, 11, .12) 0%, transparent 70%);
    border-radius: 50%;
  }

  .badge-pill {
    background: #cb31af;
    /* background: rgba(255, 255, 255, .15); */
    border: 1px solid rgba(255, 255, 255, .3);
    color: #fff;
    font-size: .78rem;
    letter-spacing: .12em;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 50px;
    backdrop-filter: blur(6px);
  }

  .hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.4rem, 5vw, 3.8rem);
    font-weight: 900;
    color: #000000;
    line-height: 1.15;
  }

  .hero-title span {
    color: #6a2d5f;
    /* color: var(--accent); */

  }

  .hero-subtitle {
    color: rgba(0, 0, 0, 0.82);
    font-size: 1.05rem;
    font-weight: 300;
    max-width: 540px;
  }

  .btn-book {
    background: #6a2d5f;
    /* background: var(--accent); */

    color: white;
    /* color: var(--charcoal); */
    font-weight: 600;
    font-size: .95rem;
    padding: 14px 30px;
    border-radius: 50px;
    border: none;
    transition: all .3s ease;
    box-shadow: 0 4px 20px rgba(245, 158, 11, .4);
  }

  /* .btn-book:hover {
    background: #FBBF24;
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(245, 158, 11, .5);
    
  } */

  .btn-outline-hero {
    border: 1.5px solid rgba(255, 255, 255, .5);
    color: #ffffff;
    font-weight: 900;
    font-size: .95rem;
    padding: 14px 28px;
    border-radius: 50px;
    background: transparent;
    transition: all .3s ease;
    border: 2px solid black;
  }

  /* .btn-outline-hero:hover {
    background: rgba(255, 255, 255, .12);
    border-color: #fff;
    color: #fff;
  } */

  .stat-card {
    background: #6a2b5f;
    /* background: rgba(255, 255, 255, .1); */
    border: 1px solid rgba(255, 255, 255, .2);
    border-radius: 16px;
    padding: 20px 24px;
    backdrop-filter: blur(8px);
    text-align: center;
  }

  .stat-num {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    color: #ffffff;
    /* color: var(--accent);#6a2d5f */
    line-height: 1;
  }

  .stat-label {
    font-size: .78rem;
    color: rgba(255, 255, 255, .75);
    margin-top: 4px;
    text-transform: uppercase;
    letter-spacing: .06em;
  }

  /* SECTIONS */
  .section-label {
    font-size: .78rem;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: #6a2d5f;
    /* color: var(--teal); */
    font-weight: 600;
  }

  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    color: var(--charcoal);
  }

  /* WHY */
  .why-section {
    padding: 90px 0;
    background: var(--cream);
  }

  .why-card {
    background: #fff;
    border-radius: 20px;
    padding: 32px 28px;
    border: 2px dotted #6a2b5f;
    transition: all .3s ease;
    height: 100%;
  }

  .why-card:hover {
    /* border-color: var(--teal);  */
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(13, 148, 136, .12);
  }

  .why-icon {
    width: 54px;
    height: 54px;
    background: #6a2d5f;
    /* background: var(--teal-light); */
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: white;
    /* color: var(--teal); */
    margin-bottom: 18px;
    transition: all .3s ease;
  }

  /* .why-card:hover .why-icon {
    background: var(--teal);
    color: #fff;
  } */

  .why-card h6 {
    font-weight: 600;
    font-size: 1rem;
    color: var(--charcoal);
  }

  .why-card p {
    font-size: .88rem;
    color: #6B7280;
    line-height: 1.6;
    margin: 0;
  }

  /* TREATMENTS */
  .treatments-section {
    background: #6a2b5f;

    padding: 90px 0;
  }

  .treatments-section .section-label {
    color: var(--accent);
  }

  .treatments-section .section-title {
    color: #fff;
  }

  .treatment-item {
    display: flex;
    align-items: flex-start;
    gap: 18px;
    padding: 24px;
    border-radius: 16px;
    background: rgba(255, 255, 255, .05);
    border: 2px dotted white;
    transition: all .3s ease;
    height: 100%;
  }

  /* .treatment-item:hover {
    background: rgba(13, 148, 136, .15);
    border-color: var(--teal);
  } */

  .treatment-num {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 900;
    color: #ffffff;
    /* color: var(--teal); */
    line-height: 1;
    min-width: 36px;
  }

  .treatment-item h6 {
    color: #fff;
    font-weight: 600;
    font-size: .98rem;
    margin-bottom: 4px;

  }

  .treatment-item p {
    color: rgba(255, 255, 255, .55);
    font-size: .84rem;
    margin: 0;
    line-height: 1.6;
  }

  /* LOCATION */
  .location-section {
    padding: 90px 0;
    background: var(--soft-gray);
  }

  .location-card {
    background: #fff;
    border-radius: 24px;
    padding: 48px 40px;
    box-shadow: 0 8px 40px rgba(0, 0, 0, .07);
  }

  .map-placeholder {
    background: linear-gradient(135deg, var(--teal-light), #D1FAE5);
    border-radius: 16px;
    height: 260px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 12px;
    border: 2px dashed var(--teal);
  }

  .map-placeholder i {
    font-size: 3rem;
    color: var(--teal);
  }

  .map-placeholder span {
    font-size: .88rem;
    color: var(--teal);
    font-weight: 500;
  }

  .landmark-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid #F3F4F6;
  }

  .landmark-item:last-child {
    border-bottom: none;
  }

  .landmark-item i {
    color: #6a2d5f;
    /* color: var(--teal); */
    font-size: 1rem;
    min-width: 20px;
  }

  .landmark-item span {
    font-size: .9rem;
    color: #374151;
  }

  /* FAQ */
  .faq-section {
    padding: 90px 0;
    background: var(--cream);
  }

  .accordion-button {
    font-weight: 600;
    font-size: .95rem;
    color: var(--charcoal);
    background: #fff;
  }

  .accordion-button:not(.collapsed) {
    color: white;
    background: #6a2d5f;
    /* background: var(--teal-light); */
    box-shadow: none;
  }

  .accordion-button:not(.collapsed)::after {
    filter: invert(40%) sepia(80%) saturate(400%) hue-rotate(140deg);
  }

  .accordion-item {
    border-radius: 14px !important;
    overflow: hidden;
    border: 1px solid #E5E7EB !important;
    margin-bottom: 12px;
  }

  .accordion-body {
    font-size: .9rem;
    color: #6B7280;
    line-height: 1.7;
  }

  /* CTA */
  .cta-section {
    background: white;
    /* background: linear-gradient(135deg, var(--teal) 0%, #134E4A 100%); */
    padding: 80px 0;
  }

  .cta-section h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.8rem, 4vw, 2.8rem);
    color: #000000;
    /* color: #fff; */
    font-weight: 700;
  }

  .cta-section p {
    color: rgba(0, 0, 0, 0.8);
    /* color: rgba(255, 255, 255, .8); */
    font-size: 1rem;
  }

  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(24px)
    }

    to {
      opacity: 1;
      transform: translateY(0)
    }
  }

  .fade-up {
    animation: fadeUp .7s ease both;
  }

  .delay-2 {
    animation-delay: .22s;
  }
</style>
</head>

<body>

  <!-- HERO -->
  <section class="hero-section">
    <div class="container position-relative" style="z-index:1">
      <div class="row align-items-center g-5">
        <div class="col-lg-7 fade-up">
          <span class="badge-pill mb-4 d-inline-block">📍 Serving Brodipet, Guntur</span>
          <h1 class="hero-title mb-4">Your Trusted<br><span>Dental Care</span><br>Partner in Guntur</h1>
          <p class="hero-subtitle mb-5">Vision Multispeciality Dental Hospital brings advanced dental care, experienced specialists, and a patient-first experience — all within easy reach from Brodipet.</p>
          <div class="d-flex flex-wrap gap-3">
            <a href="appointment.php" class="btn btn-book"><i class="bi bi-telephone-fill me-2"></i>Book Appointment</a>
            <a href="treatment-in-vision-multispeciality-dental-hospital.php" class="btn btn-outline-hero">Explore Treatments</a>
          </div>
        </div>
        <div class="col-lg-5 fade-up delay-2">
          <div class="row g-3">
            <div class="col-6">
              <div class="stat-card">
                <div class="stat-num">8+</div>
                <div class="stat-label">Years of clinical experience</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-card">
                <div class="stat-num">6+</div>
                <div class="stat-label">Specialities</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-card">
                <div class="stat-num">2K+</div>
                <div class="stat-label">Happy Patients</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-card">
                <div class="stat-num">100%</div>
                <div class="stat-label">Safe & Hygienic</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="why-section">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-label">Why Choose Us</span>
        <h2 class="section-title mt-2">The Vision Difference</h2>
        <p class="text-muted mt-2" style="max-width:520px;margin:0 auto;font-size:.95rem;">Patients across Brodipet trust us for the quality, comfort, and transparency we bring to every visit.</p>
      </div>
      <div class="row g-4">
        <div class="col-sm-6 col-lg-4">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-award-fill"></i></div>
            <h6>Experienced Specialists</h6>
            <p>Highly qualified dental doctors across all specialities ensuring world-class care for every patient.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-cpu-fill"></i></div>
            <h6>Modern Equipment</h6>
            <p>Digital X-rays, rotary endodontic systems, and advanced sterilization units for precise, safe treatment.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 13L10 6L14 10L21 3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16 3H21V8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 18H21" stroke="white" stroke-width="2" stroke-opacity="0.2" stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="21" cy="3" r="1" fill="white" />
              </svg>
            </div>
            <h6>Strict Hygiene Protocols</h6>
            <p>Every instrument and surface is sterilized following international hygiene standards for your safety.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-receipt-cutoff"></i></div>
            <h6>Transparent Pricing</h6>
            <p>No hidden costs. We explain your complete treatment plan and costs upfront before any procedure begins.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-emoji-smile-fill"></i></div>
            <h6>Friendly Environment</h6>
            <p>Our clinic is designed to be warm and stress-free — from the waiting area to the dental chair.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-exclamation-circle-fill"></i></div>
            <h6>Emergency Dental Care</h6>
            <p>We attend to dental emergencies like severe tooth pain, swelling, and broken teeth with priority care.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TREATMENTS -->
  <section class="treatments-section" id="treatments">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6"><span class="section-label">Our Specialities</span>
          <h2 class="section-title mt-2">Comprehensive Dental<br>Treatments Under One Roof</h2>
        </div>
        <div class="col-lg-6">
          <p style="color:rgba(255,255,255,.65);font-size:.95rem;line-height:1.8;">As a multispeciality dental hospital near Brodipet, we offer advanced treatments for every dental need — from routine check-ups to smile transformations.</p>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-6 col-lg-4">
          <a href="dental-implants-treatments-in-guntur.php">
            <div class="treatment-item">
              <div class="treatment-num">01</div>
              <div>
                <h6>Dental Implants</h6>
                <p>Permanent, natural-looking solutions for missing teeth that restore your smile and confidence.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="root-canal-treatments-in-guntur.php">
            <div class="treatment-item">
              <div class="treatment-num">02</div>
              <div>
                <h6>Root Canal Treatment</h6>
                <p>Painless RCT using modern techniques to save your natural tooth and eliminate severe pain.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="wisdom-tooth-removel-treatments-in-guntur.php">
            <div class="treatment-item">
              <div class="treatment-num">03</div>
              <div>
                <h6>Wisdom Tooth Extraction</h6>
                <p>Wisdom tooth extraction to remove impacted or painful third molars — relieving discomfort and preventing infection.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="treatment-item">
            <a href="dentalbraces-treatments-in-guntur.php">
              <div class="treatment-num">04</div>
              <div>
                <h6>Braces & Aligners</h6>
                <p>Metal, ceramic braces, and clear aligners for a perfectly aligned smile at any age.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="treatment-item">
            <div class="treatment-num">05</div>
            <a href="smile-designing-treatments-in-guntur.php">
              <div>
                <h6>Smile Designing</h6>
                <p>Cosmetic dentistry tailored to your facial features for a naturally beautiful smile makeover.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <a href="pediatric-dentist-treatments-in-guntur.php">
            <div class="treatment-item">
              <div class="treatment-num">06</div>
              <div>
                <h6>Pediatric Dentistry</h6>
                <p>Gentle, specialized dental care for children in a fun, friendly, and stress-free environment.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- LOCATION -->
  <section class="location-section">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-label">Location</span>
        <h2 class="section-title mt-2">Conveniently Located Near Brodipet</h2>
        <p class="text-muted mt-2" style="max-width:500px;margin:0 auto;font-size:.95rem;">A short drive from Brodipet main road with ample parking and easy public transport access.</p>
      </div>
      <div class="location-card">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="map-placeholder">
              <!-- <i class="bi bi-geo-alt-fill"></i>
              <span>Vision Multispeciality Dental Hospital</span> -->
              <!-- <a href="" class="btn btn-sm mt-1" style="background:var(--teal);color:#fff;border-radius:50px;padding:6px 18px;font-size:.8rem;">Open in Google Maps</a> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.416759153765!2d80.40892811086457!3d16.30163613310894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a75e8e72e323b%3A0xc24e52047b5202de!2sVision%20MultiSpeciality%20Dental%20Hospital%20Guntur%20%7C%20Best%20Dentist%20in%20Guntur%20%7C%20Best%20Dental%20Hospital%20in%20Guntur!5e0!3m2!1sen!2sin!4v1753944933567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
          </div>
          <div class="col-lg-6">
            <h5 class="mb-4" style="font-family:'Playfair Display',serif;font-weight:700;">Nearby Landmarks & Directions</h5>
            <div class="landmark-item"><i class="bi bi-geo-alt-fill"></i><span>Short drive from Brodipet Main Road</span></div>
            <div class="landmark-item"><i class="bi bi-geo-alt-fill"></i><span>Close to Arundelpet & Old Guntur</span></div>
            <div class="landmark-item"><i class="bi bi-geo-alt-fill"></i><span>Near major commercial & residential areas</span></div>
            <div class="landmark-item"><i class="bi bi-car-front-fill"></i><span>Ample parking available near the clinic</span></div>
            <div class="landmark-item"><i class="bi bi-telephone-fill"></i><span>Call us for phone navigation assistance</span></div>
            <a href="tel:+91 93914 57072" class="btn btn-book mt-4 d-inline-flex align-items-center gap-2"><i class="bi bi-telephone-fill"></i> Call for Directions</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center mb-5">
            <span class="section-label">FAQ</span>
            <h2 class="section-title mt-2">Frequently Asked Questions</h2>
          </div>
          <div class="accordion" id="dentalFAQ">
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Is your dental clinic close to Brodipet?</button></h2>
              <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#dentalFAQ">
                <div class="accordion-body">Yes! Our clinic is located within easy reach from Brodipet, making it convenient for regular visits and follow-up appointments. Patients from Brodipet, Arundelpet, and Old Guntur appreciate the minimal travel time.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Do you provide emergency dental treatment?</button></h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#dentalFAQ">
                <div class="accordion-body">Yes, we attend to dental emergencies with priority care — including severe tooth pain, swelling, broken or chipped teeth, and other urgent dental conditions. Call us immediately and our team will guide you.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">How often should I visit a dentist?</button></h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#dentalFAQ">
                <div class="accordion-body">It is recommended to visit a dental clinic at least once every six months for a routine check-up and professional cleaning. Regular visits help detect problems early and maintain optimal oral health.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Do you offer transparent pricing before treatment?</button></h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#dentalFAQ">
                <div class="accordion-body">Absolutely. Before starting any procedure, we clearly explain your full treatment plan, estimated cost, duration, and available options — so you can make informed decisions with no surprises.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section text-center">
    <div class="container">
      <h2 class="mb-3">Ready for a Healthier Smile?</h2>
      <p class="mb-5">Book your appointment today — early scheduling recommended for faster consultation.</p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="tel:+91 93914 57072" class="btn btn-book d-inline-flex align-items-center gap-2" style="font-size:1rem;padding:16px 36px;"><i class="bi bi-telephone-fill"></i> Call Now to Book</a>
        <a href="treatment-in-vision-multispeciality-dental-hospital.php" class="btn btn-outline-hero d-inline-flex align-items-center gap-2" style="font-size:1rem;padding:16px 32px;"><i class="bi bi-grid-fill"></i> View All Treatments</a>
      </div>
      <p class="mt-4" style="color:rgba(0, 0, 0, 0.6);font-size:.85rem;">📍 Serving Brodipet, Arundelpet, Old Guntur & surrounding areas</p>
    </div>
  </section>

</body>