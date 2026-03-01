<?php include 'header.php'; ?>
<style>
    :root {
        --vision-blue: #0056b3;
        --vision-dark: #0a192f;
        --vision-gold: #FFD700;
        --vision-light: #f8f9fa;
    }

    .vision_hospital_section {
        font-family: 'Outfit', sans-serif;
        background-color: #ffffff;
        padding: 80px 0;
        color: var(--vision-dark);
    }

    /* Header Styling */
    .vision_badge {
        background: #6a2b5f;
        /* background: rgba(0, 86, 179, 0.1); */
        color: white;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 15px;
    }

    .vision_main_title {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: 900;
        color: var(--vision-dark);
        margin-bottom: 25px;
        line-height: 1.2;
    }

    .vision_main_title span {
        color: #6a2b5f;
    }

    /* Service Card Styling */
    .vision_service_card {
        background: var(--vision-light);
        border: 2px dotted #6a2b5f;
        border-radius: 20px;
        padding: 30px;
        height: 100%;
        transition: all 0.3s ease;
        border-bottom: 4px solid transparent;

    }

    .vision_service_card:hover {
        transform: translateY(-10px);
        background: #ffffff;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        border-bottom: 4px solid #6a2b5f;
    }

    .vision_icon_box {
        width: 60px;
        height: 60px;
        background: #6a2b5f;
        color: white;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    /* Why Choose Us Section */
    .vision_why_choose {
        background: #6a2b5f;
        color: white;
        border-radius: 30px;
        padding: 50px;
        margin-top: 60px;
    }

    .vision_list_item {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .vision_list_item i {
        color: #ffffff;
        font-size: 1.2rem;
    }

    /* CTA Button */
    .vision_cta_btn {
        background: #6a2b5f;
        color: white;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
        border: 2px solid var(--vision-blue);
    }

    .vision_cta_btn:hover {
        background: transparent;
        color: var(--vision-blue);
    }

    /* Image Wrapper */
    .vision_img_container {
        position: relative;
    }

    .vision_img_container img {
        border-radius: 30px;
        width: 100%;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .vision_experience_tag {
        position: absolute;
        bottom: 30px;
        left: -20px;
        background: #6a2b5f;
        color: #ffffff;
        padding: 20px;
        border-radius: 15px;
        font-weight: 800;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .vision_main_title {
            font-size: 2.2rem;
        }

        .vision_experience_tag {
            position: static;
            margin-top: 20px;
        }
    }
</style>

<section class="vision_hospital_section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <span class="vision_badge"><i class="fas fa-map-marker-alt me-2"></i> Lakshmipuram, Guntur</span>
                <h1 class="vision_main_title">Trusted <span>Dental Care</span> Nearby You</h1>
                <p class="lead text-muted mb-4">
                    Vision Multispeciality Dental Hospital is your local destination for comprehensive dental care. Our experienced professionals provide personalised treatment with modern technology.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:#" class="vision_cta_btn"><i class="fas fa-phone-alt me-2"></i> Call Now to Book</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="vision_img_container text-center">
                    <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=800&q=80" alt="Vision Dental Hospital">
                    <div class="vision_experience_tag">
                        Modern Tech <br> & Safety First
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-12 text-center mb-4">
                <h2 class="fw-bold">Our Dental Services</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background: var(--vision-blue); border-radius: 2px;"></div>
            </div>

            <div class="col-md-4">
                <div class="vision_service_card">
                    <div class="vision_icon_box"><i class="fas fa-notes-medical"></i></div>
                    <h4>Routine Checkups</h4>
                    <p class="text-muted small">Regular exams help detect early signs of decay or gum disease before they become serious.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vision_service_card">
                    <div class="vision_icon_box"><i class="fas fa-tooth"></i></div>
                    <h4>Root Canal (RCT)</h4>
                    <p class="text-muted small">Gentle root canal treatment to save your natural tooth from persistent pain or sensitivity.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="vision_service_card">
                    <div class="vision_icon_box"><i class="fas fa-smile"></i></div>
                    <h4>Dental Implants</h4>
                    <p class="text-muted small">Designed to restore both function and aesthetics, giving you back your confidence.</p>
                </div>
            </div>
        </div>

        <div class="vision_why_choose">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Why Lakshmipuram Residents <br><span style="color: #ffffff">Choose Us?</span></h2>
                    <div class="vision_list_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Skilled and friendly dentists with years of experience</span>
                    </div>
                    <div class="vision_list_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Advanced dental technology and digital diagnostics</span>
                    </div>
                    <div class="vision_list_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Clear explanations of treatment options and costs</span>
                    </div>
                    <div class="vision_list_item">
                        <i class="fas fa-check-circle"></i>
                        <span>Clean, safe, and hygienic environment</span>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 text-center">
                    <div class="p-4 border  rounded-4">
                        <i class="fas fa-clinic-medical fa-3x mb-3 text-warning"></i>
                        <h4>Easy Access</h4>
                        <p class="small opacity-75">Close to Lakshmipuram main road. Easy access from major residential areas by car, bike, or auto-rickshaw.</p>
                        <hr class="border-secondary">
                        <p class="mb-0 fw-bold">Open for Appointments Today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-center mt-5">
    <!-- <p class="mb-0 fw-bold">Is it an emergency? We treat severe pain and urgent issues.</p>
            <p class="text-muted small">Your healthy smile begins with expert care — Vision Multispeciality Dental Hospital.</p> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.416759153765!2d80.40892811086457!3d16.30163613310894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a75e8e72e323b%3A0xc24e52047b5202de!2sVision%20MultiSpeciality%20Dental%20Hospital%20Guntur%20%7C%20Best%20Dentist%20in%20Guntur%20%7C%20Best%20Dental%20Hospital%20in%20Guntur!5e0!3m2!1sen!2sin!4v1753944933567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>