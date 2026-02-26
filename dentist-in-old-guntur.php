<?php include 'header.php'; ?>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet"> -->

<style>
    :root {
        --oldguntur-primary: #007bff;
        --oldguntur-dark: #1a1a1a;
        --oldguntur-accent: #ffd700;
        --oldguntur-bg: #f4f7f6;
    }

    .oldguntur_section {
        font-family: 'Outfit', sans-serif;
        background-color: var(--oldguntur-bg);
        padding: 80px 0;
    }

    /* Hero Styling */
    .oldguntur_hero_card {
        background: white;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
        padding: 50px;
    }

    .oldguntur_badge {
        background: rgba(0, 123, 255, 0.1);
        color: var(--oldguntur-primary);
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        margin-bottom: 20px;
        display: inline-block;
    }

    .oldguntur_title {
        font-family: 'Playfair Display', serif;
        font-size: 2.8rem;
        font-weight: 900;
        color: var(--oldguntur-dark);
        margin-bottom: 25px;
    }

    /* Service Icons */
    .oldguntur_service_box {
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        transition: 0.3s;
        border: 1px solid #eee;
        height: 100%;
    }

    .oldguntur_service_box:hover {
        border-color: var(--oldguntur-primary);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .oldguntur_icon {
        font-size: 2rem;
        color: var(--oldguntur-primary);
        margin-bottom: 15px;
        display: block;
    }

    /* Features Dark Section */
    .oldguntur_features {
        background: var(--oldguntur-dark);
        color: white;
        border-radius: 30px;
        padding: 60px;
        margin-top: 50px;
    }

    .oldguntur_feature_list {
        list-style: none;
        padding: 0;
    }

    .oldguntur_feature_list li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .oldguntur_feature_list i {
        color: var(--oldguntur-accent);
    }

    /* CTA Button */
    .oldguntur_btn {
        background: var(--oldguntur-primary);
        color: white;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }

    .oldguntur_btn:hover {
        background: #0056b3;
        color: white;
        box-shadow: 0 10px 20px rgba(0, 123, 255, 0.3);
    }
</style>

<section class="oldguntur_section">
    <div class="container">
        <div class="oldguntur_hero_card mb-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="oldguntur_badge">Serving Old Guntur Residents</span>
                    <h1 class="oldguntur_title">Your Trusted Local <span style="color: var(--oldguntur-primary);">Dentist in Old Guntur</span></h1>
                    <p class="text-muted mb-4">
                        Vision Multispeciality Dental Hospital provides comprehensive dental care with advanced technology and a patient-first approach. We serve families looking for safe, comfortable, and affordable dental treatment.
                    </p>
                    <a href="tel:#" class="oldguntur_btn"><i class="fas fa-calendar-check me-2"></i> Book Your Appointment</a>
                </div>
                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <img src="./assets/img/old_guntur.png" alt="Old Guntur Dental Care" class="img-fluid rounded-4">
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-12 text-center mb-3">
                <h2 class="fw-bold">Our Multispeciality Treatments</h2>
                <p class="text-muted">Wide range of treatments under one roof for Old Guntur patients.</p>
            </div>

            <div class="col-md-4">
                <a href="dental-implants-treatments-in-guntur.php">
                    <div class="oldguntur_service_box text-center">
                        <i class="fas fa-tooth oldguntur_icon"></i>
                        <h5 class="fw-bold">Dental Implants</h5>
                        <p class="small text-muted">Permanent and natural-looking replacement for missing teeth.</p>
                    </div>
                </a>
            </div>


            [Image of dental implant structure]

            <div class="col-md-4">
                <a href="root-canal-treatments-in-guntur.php">
                    <div class="oldguntur_service_box text-center">
                        <i class="fas fa-file-medical-alt oldguntur_icon"></i>
                        <h5 class="fw-bold">Root Canal (RCT)</h5>
                        <p class="small text-muted">Painless procedures to save your natural tooth from infection.</p>
                    </div>
                </a>
            </div>


            [Image of stages of root canal treatment]

            <div class="col-md-4">
                <a href="dentalbraces-treatments-in-guntur.php">
                    <div class="oldguntur_service_box text-center">
                        <i class="fas fa-teeth-smile oldguntur_icon"></i>
                        <h5 class="fw-bold">Braces & Aligners</h5>
                        <p class="small text-muted">Orthodontic solutions for children and adults from Old Guntur.</p>
                    </div>
                </a>
            </div>


            [Image of types of dental braces and clear aligners]

        </div>

        <div class="oldguntur_features">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Why Patients Choose Our Hospital?</h2>
                    <ul class="oldguntur_feature_list">
                        <li><i class="fas fa-check-circle"></i> Experienced dental specialists</li>
                        <li><i class="fas fa-check-circle"></i> Modern equipment & digital diagnostics</li>
                        <li><i class="fas fa-check-circle"></i> Strict sterilization & hygiene standards</li>
                        <li><i class="fas fa-check-circle"></i> Transparent and affordable pricing</li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="bg-white p-4 rounded-4 text-dark">
                        <h5 class="fw-bold"><i class="fas fa-map-marked-alt me-2 text-primary"></i> Easy Access from Old Guntur</h5>
                        <p class="small text-muted">Our clinic is located within easy reach, making it convenient for residents and easily accessible from main roads. You can use the map given below for directions.</p>
                        <hr>
                        <p class="mb-0 small fw-bold text-primary">Short drive • Minimal waiting time • Parking Available</p>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.416759153765!2d80.40892811086457!3d16.30163613310894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a75e8e72e323b%3A0xc24e52047b5202de!2sVision%20MultiSpeciality%20Dental%20Hospital%20Guntur%20%7C%20Best%20Dentist%20in%20Guntur%20%7C%20Best%20Dental%20Hospital%20in%20Guntur!5e0!3m2!1sen!2sin!4v1753944933567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <!-- <p class="mb-0 fw-bold">Is it an emergency? We treat severe pain and urgent issues.</p>
            <p class="text-muted small">Your healthy smile begins with expert care — Vision Multispeciality Dental Hospital.</p> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.416759153765!2d80.40892811086457!3d16.30163613310894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a75e8e72e323b%3A0xc24e52047b5202de!2sVision%20MultiSpeciality%20Dental%20Hospital%20Guntur%20%7C%20Best%20Dentist%20in%20Guntur%20%7C%20Best%20Dental%20Hospital%20in%20Guntur!5e0!3m2!1sen!2sin!4v1753944933567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</section>