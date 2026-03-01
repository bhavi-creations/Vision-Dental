<?php include 'header.php'; ?>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet"> -->

<style>
    :root {
        --arundel-blue: #004a99;
        --arundel-accent: #6a2b5f;
        --arundel-dark: #111111;
        --arundel-bg: #fdfdfd;
    }

    .arundel_page_section {
        font-family: 'Outfit', sans-serif;
        background-color: var(--arundel-bg);
        padding: 80px 0;
        color: #333;
    }

    /* Badge & Titles */
    .arundel_badge {
        color: #6a2b5f;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.85rem;
        border-bottom: 2px solid var(--arundel-accent);
        display: inline-block;
        margin-bottom: 15px;
    }

    .arundel_title {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: 900;
        color: var(--arundel-dark);
        line-height: 1.2;
        margin-bottom: 25px;
    }

    .arundel_text_blue {
        color: #ffffff;
        /* color: var(--arundel-blue); */
    }

    .arundel_text_blue_section{
        color:#6a2b5f;
    }

    /* Service Grid Layout */
    .arundel_service_card {
        background: #fff;
        border: 1px solid #6a2b5f;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        transition: 0.3s all ease-in-out;
        height: 100%;
    }

    .arundel_service_card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 74, 153, 0.1);
        border-color: var(--arundel-blue);
    }

    .arundel_service_icon {
        width: 70px;
        height: 70px;
        line-height: 70px;
        background: #6a2b5f;
        /* background: rgba(0, 74, 153, 0.05); */
        color:white;
        /* color: var(--arundel-blue); */
        border-radius: 50%;
        font-size: 1.8rem;
        margin: 0 auto 20px;
        display: block;
    }

    /* Why Choose Us Dark Box */
    .arundel_features_box {
        background: #6a2b5f;
        /* background: var(--arundel-dark); */
        color: #fff;
        border-radius: 30px;
        padding: 50px;
        margin-top: 60px;
    }

    .arundel_feature_item {
        margin-bottom: 20px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .arundel_feature_item i {
        /* color: var(--arundel-accent); */
        color: white;
        font-size: 1.2rem;
        margin-top: 5px;
    }

    /* Directions / Navigation Styling */
    .arundel_nav_card {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .arundel_nav_step {
        border-left: 2px dashed var(--arundel-blue);
        padding-left: 25px;
        position: relative;
        margin-bottom: 20px;
    }

    .arundel_nav_step::before {
        content: '\f3c5';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        left: -12px;
        top: 0;
        background: #fff;
        color: var(--arundel-blue);
    }

    /* CTA Button */
    .arundel_btn_call {
        background: #6a2b5f;
        /* background: var(--arundel-blue); */
        color: #fff;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: 0.3s;
    }

    .arundel_btn_call:hover {
        background: var(--arundel-dark);
        color: var(--arundel-accent);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .arundel_title {
            font-size: 2.2rem;
        }
    }
    .fw-bold{
        color: #6a2b5f;
    }

    .fw-bold-section{
        color: white;
    }
</style>

<section class="arundel_page_section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <span class="arundel_badge">Arundelpet, Guntur</span>
                <h1 class="arundel_title">Advanced & Trusted <br><span class="arundel_text_blue_section">Dental Excellence</span></h1>
                <p class="lead mb-4 text-muted">
                    If you are searching for a reliable dental hospital in Arundelpet, Vision Multispeciality Dental Hospital offers modern technology, experienced doctors, and a patient-focused approach.
                </p>
                <a href="tel:#" class="arundel_btn_call">
                    <i class="fas fa-phone-alt"></i> Call for Consultation
                </a>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="position-relative">
                    <img src="./assets/img/equipment_arundelpet-guntur.png" alt="Dental Hospital" class="img-fluid rounded-4 shadow-lg">
                    <div style="position: absolute; top: -20px; right: -20px; background: var(--arundel-accent); padding: 20px; border-radius: 15px; font-weight: 800; font-size: 0.9rem; color: white;">
                        Modern <br> Infrastructure
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-12 text-center mb-4">
                <h2 class="arundel_title">Comprehensive Treatments</h2>
                <p class="text-muted">Complete dental solutions for all age groups under one roof.</p>
            </div>

            <div class="col-md-4">
                <a href="dental-implants-treatments-in-guntur.php">
                    <div class="arundel_service_card">
                        <span class="arundel_service_icon"><i class="fas fa-tooth"></i></span>
                        <h5 class="fw-bold">Dental Implants</h5>
                        <p class="small text-muted">Advanced solutions to restore function and appearance with long-lasting results.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="root-canal-treatments-in-guntur.php">
                    <div class="arundel_service_card">
                        <span class="arundel_service_icon"><i class="fas fa-microscope"></i></span>
                        <h5 class="fw-bold">Root Canal (RCT)</h5>
                        <p class="small text-muted">Painless procedures using modern rotary systems to save infected teeth.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="clear-aligners-treatment-in-guntur.php">
                    <div class="arundel_service_card">
                        <span class="arundel_service_icon"><i class="fas fa-align-center"></i></span>
                        <h5 class="fw-bold">Braces & Aligners</h5>
                        <p class="small text-muted">Orthodontic treatment for correcting misaligned teeth in children and adults.</p>
                    </div>
                </a>
            </div>
        </div>



        <div class="arundel_features_box">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-white mb-4">Why Arundelpet Residents <br><span class="arundel_text_blue">Choose Us?</span></h2>
                    <div class="arundel_feature_item">
                        <i class="fas fa-user-md"></i>
                        <span>Experienced and qualified dental specialists</span>
                    </div>
                    <div class="arundel_feature_item">
                        <i class="fas fa-shield-virus"></i>
                        <span>Strict sterilization and hygiene protocols</span>
                    </div>
                    <div class="arundel_feature_item">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Clear explanation of procedures and costs</span>
                    </div>
                    <div class="arundel_feature_item">
                        <i class="fas fa-users"></i>
                        <span>Friendly and supportive multispeciality staff</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="arundel_nav_card text-dark h-100">
                        <h4 class="fw-bold mb-4 text-center">Directions from Arundelpet</h4>
                        <div class="arundel_nav_step">
                            <strong>The Junction:</strong> Head towards the main junction in Arundelpet.
                        </div>
                        <div class="arundel_nav_step">
                            <strong>The Route:</strong> Follow directions toward Vision Multispeciality Hospital.
                        </div>
                        <div class="arundel_nav_step">
                            <strong>Parking:</strong> Dedicated parking facilities available for our patients.
                        </div>
                        <div class="text-center mt-3">
                            <a href="https://share.google/Ia8aMisICDAK1Qxd9" target="_blank" class="btn btn-outline-primary w-100 rounded-pill fw-bold-section">Open Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <!-- <p class="fw-bold mb-0">Routine check-ups are recommended every 6 months.</p>
            <p class="text-muted small">Healthy teeth, confident smile — we are proud to serve Guntur.</p> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.416759153765!2d80.40892811086457!3d16.30163613310894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a75e8e72e323b%3A0xc24e52047b5202de!2sVision%20MultiSpeciality%20Dental%20Hospital%20Guntur%20%7C%20Best%20Dentist%20in%20Guntur%20%7C%20Best%20Dental%20Hospital%20in%20Guntur!5e0!3m2!1sen!2sin!4v1753944933567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</section>