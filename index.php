<?php include 'header.php'; ?>

<!-- ======video======-->


<section autoplay muted loop class="only_first">
  <video id="myVideo" width="100%" height="auto" autoplay muted loop>
    <source src="assets/img/treat/vision.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <!-- <button id="unmuteButton">Unmute</button> -->
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('myVideo');
    const unmuteButton = document.getElementById('unmuteButton');

    // Function to unmute and play the video
    unmuteButton.addEventListener('click', () => {
      video.muted = false; // Unmute the video
      video.play(); // Play the video
      unmuteButton.style.display = 'none'; // Hide the unmute button
    });
  });
</script>



<section class="banner_bg_color">
  <div class="container first_section">
    <div class="row ">
      <div class="col-md-6 first_banner_col">
        <img src="assets/img/vision/large_icon.png" class="img-fluid banner_image_logo  d-none d-lg-block" alt="">
        <h1 class="banner_head">A smile is a curve <br>
          that sets <br>
          everything straight</h1>
        <p class="banner_para">Vision Multispeciality Dental Hospital in Guntur offers expert dental care with advanced technology and a patient-first approach.</p>

        <div class="d-flex">
          <button class="banner_contact_us"><a href="contact.php" style="color:#fff">Contact us</a> </button>
          <button class="banner_read_more"><a href="about.php" style="color:black">Read more</a></button>

        </div>


      </div>
      <div class="col-md-6">
        <img src="assets/img/vision/banner_pic.png" class="img-fluid" alt="">

      </div>

    </div>
  </div>
</section>


<div class="container teeth_card_container d-none d-md-block">
  <div class="row">
    <div class="col-4  ">
      <svg xmlns="http://www.w3.org/2000/svg" class="card_tooth_size" viewBox="0 0 431 432" fill="none">
        <g filter="url(#filter0_d_122_1295)">
          <path d="M284.228 361C273.358 361 263.366 355.071 258.154 345.527L232.522 298.53C229.121 292.297 222.597 288.426 215.5 288.426C208.401 288.426 201.879 292.297 198.475 298.532L172.849 345.524C167.641 355.069 157.649 361 146.772 361C133.532 361 121.958 352.519 117.97 339.894L77.7093 212.397C69.9396 187.787 66 162.231 66 136.444C66 95.3943 99.3898 62 140.428 62C177.27 62 187.708 75.9518 215.5 75.9518C243.296 75.9518 253.737 62 290.56 62C331.61 62 365 95.3943 365 136.444C365 162.231 361.06 187.787 353.293 212.397L313.032 339.894C309.042 352.519 297.468 361 284.228 361Z" fill="white" />
          <path d="M232.961 298.29L232.961 298.29C229.472 291.897 222.78 287.926 215.5 287.926C208.218 287.926 201.528 291.897 198.037 298.292L198.037 298.293L172.41 345.285C167.289 354.669 157.466 360.5 146.772 360.5C133.75 360.5 122.369 352.16 118.447 339.744L78.1861 212.246C70.4318 187.685 66.5 162.18 66.5 136.444C66.5 95.6704 99.666 62.5 140.428 62.5C158.774 62.5 170.537 65.9707 181.203 69.4512C181.956 69.6972 182.705 69.9433 183.45 70.1883C193.261 73.4143 202.499 76.4518 215.5 76.4518C228.505 76.4518 237.746 73.4132 247.558 70.1866C248.302 69.9421 249.048 69.6966 249.8 69.4512C260.465 65.9707 272.224 62.5 290.56 62.5C331.334 62.5 364.5 95.6704 364.5 136.444C364.5 162.18 360.568 187.685 352.816 212.246L312.555 339.744C308.631 352.16 297.25 360.5 284.228 360.5C273.541 360.5 263.718 354.671 258.593 345.287C258.593 345.287 258.593 345.287 258.592 345.287L232.961 298.29Z" stroke="#9A9A9A" stroke-opacity="0.2" />
        </g>



        <image href="assets/img/vision/appoit_icon.png" class="teeth_icon" />


        <text class="teeth_heading" x="50%" y="30%" text-anchor="middle" fill="#333" dy=".3em"><a href="appointment.php"> Online Appointment </a> </text>

        <text class="teeth_first_para_card" x="50%" y="45%" text-anchor="middle" fill="#333" dy=".3em"><a href="appointment.php"> Vision Multispeciality Dental </a> </text>

        <text class="teeth_sub_heading" x="50%" y="60%" text-anchor="middle" fill="#333" dy=".3em"><a href="appointment.php"> Make a appointment </a></text>

        <defs>
          <filter id="filter0_d_122_1295" x="0.400002" y="0.982377" width="430.2" height="430.2" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
            <feOffset dy="4.58238" />
            <feGaussianBlur stdDeviation="32.8" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_122_1295" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_122_1295" result="shape" />
          </filter>
        </defs>
      </svg>
    </div>
    <div class="col-4  ">
      <svg xmlns="http://www.w3.org/2000/svg" class="card_tooth_size" viewBox="0 0 431 432" fill="none">
        <g filter="url(#filter0_d_122_1295)">
          <path d="M284.228 361C273.358 361 263.366 355.071 258.154 345.527L232.522 298.53C229.121 292.297 222.597 288.426 215.5 288.426C208.401 288.426 201.879 292.297 198.475 298.532L172.849 345.524C167.641 355.069 157.649 361 146.772 361C133.532 361 121.958 352.519 117.97 339.894L77.7093 212.397C69.9396 187.787 66 162.231 66 136.444C66 95.3943 99.3898 62 140.428 62C177.27 62 187.708 75.9518 215.5 75.9518C243.296 75.9518 253.737 62 290.56 62C331.61 62 365 95.3943 365 136.444C365 162.231 361.06 187.787 353.293 212.397L313.032 339.894C309.042 352.519 297.468 361 284.228 361Z" fill="white" />
          <path d="M232.961 298.29L232.961 298.29C229.472 291.897 222.78 287.926 215.5 287.926C208.218 287.926 201.528 291.897 198.037 298.292L198.037 298.293L172.41 345.285C167.289 354.669 157.466 360.5 146.772 360.5C133.75 360.5 122.369 352.16 118.447 339.744L78.1861 212.246C70.4318 187.685 66.5 162.18 66.5 136.444C66.5 95.6704 99.666 62.5 140.428 62.5C158.774 62.5 170.537 65.9707 181.203 69.4512C181.956 69.6972 182.705 69.9433 183.45 70.1883C193.261 73.4143 202.499 76.4518 215.5 76.4518C228.505 76.4518 237.746 73.4132 247.558 70.1866C248.302 69.9421 249.048 69.6966 249.8 69.4512C260.465 65.9707 272.224 62.5 290.56 62.5C331.334 62.5 364.5 95.6704 364.5 136.444C364.5 162.18 360.568 187.685 352.816 212.246L312.555 339.744C308.631 352.16 297.25 360.5 284.228 360.5C273.541 360.5 263.718 354.671 258.593 345.287C258.593 345.287 258.593 345.287 258.592 345.287L232.961 298.29Z" stroke="#9A9A9A" stroke-opacity="0.2" />
        </g>



        <image href="assets/img/vision/emergrncy_icon.png" class="teeth_icon" />


        <text class="teeth_heading" x="50%" y="30%" text-anchor="middle" fill="#333" dy=".3em"> <a href="contact.php"> Emergency Call</a></text>
        <text class="teeth_first_para_card" x="50%" y="40%" text-anchor="middle" fill="#333" dy=".3em"> <a href="contact.php"> Vision Multispeciality Dental </a></text>
        >
        <text class="teeth_para_card" x="50%" y="50%" text-anchor="middle" fill="#2B93B8" dy=".3em"> <a href="contact.php"> +919391457072</a></text>
        <text class="teeth_sub_heading" x="50%" y="60%" text-anchor="middle" fill="#333" dy=".3em"> <a href="contact.php"> Contact Us</a></text>
        >

        <defs>
          <filter id="filter0_d_122_1295" x="0.400002" y="0.982377" width="430.2" height="430.2" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
            <feOffset dy="4.58238" />
            <feGaussianBlur stdDeviation="32.8" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_122_1295" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_122_1295" result="shape" />
          </filter>
        </defs>
      </svg>
    </div>
    <div class="col-4  ">
      <svg xmlns="http://www.w3.org/2000/svg" class="card_tooth_size" viewBox="0 0 431 432" fill="none">
        <g filter="url(#filter0_d_122_1295)">
          <path d="M284.228 361C273.358 361 263.366 355.071 258.154 345.527L232.522 298.53C229.121 292.297 222.597 288.426 215.5 288.426C208.401 288.426 201.879 292.297 198.475 298.532L172.849 345.524C167.641 355.069 157.649 361 146.772 361C133.532 361 121.958 352.519 117.97 339.894L77.7093 212.397C69.9396 187.787 66 162.231 66 136.444C66 95.3943 99.3898 62 140.428 62C177.27 62 187.708 75.9518 215.5 75.9518C243.296 75.9518 253.737 62 290.56 62C331.61 62 365 95.3943 365 136.444C365 162.231 361.06 187.787 353.293 212.397L313.032 339.894C309.042 352.519 297.468 361 284.228 361Z" fill="white" />
          <path d="M232.961 298.29L232.961 298.29C229.472 291.897 222.78 287.926 215.5 287.926C208.218 287.926 201.528 291.897 198.037 298.292L198.037 298.293L172.41 345.285C167.289 354.669 157.466 360.5 146.772 360.5C133.75 360.5 122.369 352.16 118.447 339.744L78.1861 212.246C70.4318 187.685 66.5 162.18 66.5 136.444C66.5 95.6704 99.666 62.5 140.428 62.5C158.774 62.5 170.537 65.9707 181.203 69.4512C181.956 69.6972 182.705 69.9433 183.45 70.1883C193.261 73.4143 202.499 76.4518 215.5 76.4518C228.505 76.4518 237.746 73.4132 247.558 70.1866C248.302 69.9421 249.048 69.6966 249.8 69.4512C260.465 65.9707 272.224 62.5 290.56 62.5C331.334 62.5 364.5 95.6704 364.5 136.444C364.5 162.18 360.568 187.685 352.816 212.246L312.555 339.744C308.631 352.16 297.25 360.5 284.228 360.5C273.541 360.5 263.718 354.671 258.593 345.287C258.593 345.287 258.593 345.287 258.592 345.287L232.961 298.29Z" stroke="#9A9A9A" stroke-opacity="0.2" />
        </g>


        <image href="assets/img/vision/doc_icon.png" class="teeth_icon" />


        <text class="teeth_heading" x="50%" y="30%" text-anchor="middle" fill="#333" dy=".3em"><a href="about.php"> Our Doctors </a></text>

        <text class="teeth_first_para_card" x="50%" y="45%" text-anchor="middle" fill="#333" dy=".3em"> <a href="about.php"> Vision Multispeciality Dental </a></text>

        <text class="teeth_sub_heading" x="50%" y="60%" text-anchor="middle" fill="#333" dy=".3em"><a href="about.php"> Doctors </a></text>


        <defs>
          <filter id="filter0_d_122_1295" x="0.400002" y="0.982377" width="430.2" height="430.2" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
            <feOffset dy="4.58238" />
            <feGaussianBlur stdDeviation="32.8" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_122_1295" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_122_1295" result="shape" />
          </filter>
        </defs>
      </svg>

    </div>
  </div>
</div>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/img/vision/doc_main_img.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-6">

        <h1 class="doc_head_text">
          Vision Multispeciality Dental Hospital Dentist In Guntur</h1>
        <p class="doc_para_text">Welcome to Vision Multispeciality Dental Hospital, Guntur, where Dr. Abhilash, our esteemed founder and chief doctor, leads our dedicated team. With over 8 years of extensive experience in the field of dentistry,
          Dr. Abhilash is renowned for his expertise in implant surgeries, laser photomedicines, and full mouth rehabilitations.</p>
        <button class="read_more_btn_vision"><a href="about.php" style="color: white;"> Read More</a></button>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container text-center testmonials_section_space">
    <div class="row  d-flex fex-row justify-content-center">
      <h1 class="test_cont_head">What We Do for Your Teeth</h1>
      <p class="test_cont_para">The mouth is the gateway to a person’soverall health.</p>
      <button class="list_cont_btn"> <a href="treatment.php" style="text-decoration: none; color:#fff">List Of all Services</a></button>
    </div>
  </div>


  <div class="custom-slide-container swiper">
    <div class="custom-slide-content">
      <div class="custom-card-wrapper swiper-wrapper py-5">

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-implant">Dental
                  Implant</h2>
                <p class="custom-description">Surgical placement of artificial tooth roots</p>
              </div>

              <a href="implants.php" class="service_btn_readmore"> <button class="custom-button"> Read More</button></a>

            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>

        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-whitening ">Teeth
                  Whitening</h2>
                <p class="custom-description">Cosmetic treatment to enhance the whiteness of teeth</p>
              </div>

              <a href="teeth.php" class="service_btn_readmore"> <button class="custom-button">Read More</button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>

        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-fillings">Teeth
                  Fillings</h2>
                <p class="custom-description">Restorative procedures to repair cavities and damaged teeth</p>

              </div>
              <a href="teeth.php" class="service_btn_readmore"> <button class="custom-button">Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-root">Root
                  Canal</h2>
                <p class="custom-description">Effective root canal treatment to save your tooth</p>
              </div>
              <a href="root.php" class="service_btn_readmore"> <button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-braces ">Teeth
                  Braces</h2>
                <p class="custom-description">Transform your smile with our expert teeth braces</p>
              </div>
              <a href="braces.php" class="service_btn_readmore"><button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>

        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-pediatric">Pediatric
                  Dentist</h2>
                <p class="custom-description">Specialized care for children’s dental health and comfort</p>

              </div>
              <a href="pediatric.php" class="service_btn_readmore"> <button class="custom-button">Read More </button></a>
            </div>
            <div class="col-6">

              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">


            </div>
          </div>



        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-aligners">Clear
                  Aligners</h2>
                <p class="custom-description">Clear aligners straighten teeth discreetly and comfortably without braces</p>
              </div>
              <a href="aligners.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-cosnetic ">Cosmetic
                  Dentistry</h2>
                <p class="custom-description">Laminate Veneers offers personalized treatments to enhance and perfect your smile</p>
              </div>
              <a href="cosmetic.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>

        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-crowns">Crowns &
                  Bridges</h2>
                <p class="custom-description">Crowns and bridges restore function and enhance dental aesthetics</p>

              </div>
              <a href="crowns.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">

              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">


            </div>
          </div>



        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-dentues">Dentures Treatment
                </h2>
                <p class="custom-description">Comfortable and natural-looking dentures for restored confidence</p>
              </div>
              <a href="dentures.php" class="service_btn_readmore"> <button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-invisalign ">
                  Invisalign</h2>
                <p class="custom-description">Invisalign uses clear aligners to straighten teeth discreetly and effectively</p>
              </div>
              <a href="invisalign.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-jaw">Jaw
                  Correction</h2>
                <p class="custom-description">Effective jaw corrective treatments for improved function and alignment</p>

              </div>
              <a href="jaw.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">

              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">


            </div>
          </div>

        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-laser">Laser
                  & Gum</h2>
                <p class="custom-description">Advanced laser treatments for healthier gums and precision</p>
              </div>
              <a href="laser.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-designing ">Smile
                  Designing</h2>
                <p class="custom-description">Custom smile designing for a radiant, confident appearance</p>
              </div>
              <a href="smile.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-makeover">Smile
                  Makeover</h2>
                <p class="custom-description">Complete smile makeover for a stunning, confident transformation</p>

              </div>
              <a href="make.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">

              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">


            </div>
          </div>

        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-alignment">Teeth
                  Alignment</h2>
                <p class="custom-description">Achieve perfect teeth alignment with advanced orthodontic solutions</p>
              </div>
              <a href="teeth.php" class="service_btn_readmore"> <button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-extraction">Tooth
                  Extraction</h2>
                <p class="custom-description">Safe and efficient tooth extraction for optimal oral health</p>
              </div>
              <a href="tooth.php" class="service_btn_readmore"> <button class="custom-button">Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-cleaning">Tooth
                  Cleaning</h2>
                <p class="custom-description">Thorough tooth cleaning for a healthier, brighter smile</p>

              </div>
              <a href="laserTooth.php" class="service_btn_readmore"><button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">

              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">


            </div>
          </div>

        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-depigment">
                  Gum Depigment</h2>
                <p class="custom-description">Brighten your smile with effective gum depigmentation treatment</p>
              </div>
              <a href="gum.php" class="service_btn_readmore"><button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-surgery ">
                  Gum Surgery</h2>
                <p class="custom-description">Gum surgery treats gum disease, reduces pain, and promotes healing</p>
              </div>
              <a href="laserGum.php" class="service_btn_readmore"><button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_three swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-ulcers">Mouth
                  Ulcers</h2>
                <p class="custom-description">Mouth ulcers cause discomfort, pain, and need effective treatment options</p>

              </div>
              <a href="mouth.php" class="service_btn_readmore"> <button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">

              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">


            </div>
          </div>

        </div>

        <div class="custom-card custom_card_bg_one swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-lesion">
                  Lesion</h2>
                <p class="custom-description">Precancerous lesions require early detection and prompt treatment</p>
              </div>
              <a href="lasion.php" class="service_btn_readmore"> <button class="custom-button"> Read More</button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/mam_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>


        <div class="custom-card custom_card_bg_two swiper-slide">
          <div class="row">
            <div class="col-6">
              <div class="custom-card-content">
                <h2 class="custom-name-lengthining ">
                  Crown Lengthening</h2>
                <p class="custom-description">Laser crown lengthening enhances tooth visibility and gum health</p>
              </div>
              <a href="laserCrown.php" class="service_btn_readmore"> <button class="custom-button"> Read More </button></a>
            </div>
            <div class="col-6">
              <img src="assets/img/vision/sir_ser.png" alt="" class="img-fluid custom-card-img ">
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- <div class="swiper-button-next custom-swiper-navBtn"></div>
             <div class="swiper-button-prev custom-swiper-navBtn"></div> -->
    <div class="custom-swiper-pagination position_og_peagination"></div>
  </div>

  <script>
    var swiper = new Swiper(".custom-slide-content", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: ".custom-swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      autoplay: {
        delay: 3000, // Time in milliseconds between automatic slides (3 seconds here)
        disableOnInteraction: false, // Keeps autoplay active even after manual swiping
      },
      navigation: {
        nextEl: ".swiper-button-next.custom-swiper-navBtn",
        prevEl: ".swiper-button-prev.custom-swiper-navBtn",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>



</section>


<section>
  <div class="container why_choose_container">
    <div class="row">
      <div class="col-md-5">
        <h1 class="why_choose_head">Why Choose 
          Vision Multi speciality
          Dental</h1>
        <p class="why_choose_para">"We provide comprehensive dental care, from routine check-ups to advanced procedures, all in one place. Our skilled team offers personalized treatment for your best oral health. Visit the Best Dentist in Guntur."</p>
        <button class="view_all_buttton"><a href="equipment.php" style="color: #fff;">View all</a> </button>
      </div>
      <div class="col-md-7">
        <img src="assets/img/vision/group chair.png" class="img-fluid group_chair_img" alt="">
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container text-center testmonials_section_space">
    <div class="row  d-flex fex-row justify-content-center">
      <h1 class="test_cont_head">Our Patients Testimonials</h1>
      <p class="test_cont_para">The mouth is the gateway to a person’soverall health.</p>
      <button class="test_cont_btn"> <a href="testimonials.php" style="text-decoration: none; color:#fff">View all</a></button>
    </div>
  </div>


  <div class="slide-container swiper">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper only_padding_top_for_card_div">
        <div class="card swiper-slide card_border_radious">

          <div class="card-content ">
            <h2 class="  text_card_head">Best Service
            </h2>
            <p class="description_in_card">“I had a wonderful experience at this dental hospital. The staff were incredibly...”</p>


          </div>
          <div class="d-flex profile_card_div_dp">
            <div class="">
              <img src="assets/img/vision/shesa reddy.png" class="img-fluid dp_image_testmonials" alt="">
            </div>
            <div class="">
              <h3 class="revier_name">Sesha Reddy</h3>
              <!-- <p class="revier_occuption">fjngjfkv</p> -->
            </div>
          </div>
        </div>
        <div class="card swiper-slide card_border_radious">

          <div class="card-content ">
            <h2 class="  text_card_head">Good Result
            </h2>
            <p class="description_in_card">“Started invisible braces, also known as aligners, six months ago. Treatment...”</p>


          </div>
          <div class="d-flex profile_card_div_dp">
            <div class="">
              <img src="assets/img/vision/rohit.png" class="img-fluid dp_image_testmonials" alt="">
            </div>
            <div class="">
              <h3 class="revier_name">Rohit Pawar
              </h3>
              <!-- <p class="revier_occuption">fjngjfkv</p> -->
            </div>
          </div>
        </div>
        <div class="card swiper-slide card_border_radious">

          <div class="card-content ">
            <h2 class="  text_card_head">Highly Recommend
            </h2>
            <p class="description_in_card">“I had an exceptional experience at vision multi-speciality dental hospital . From...”</p>


          </div>
          <div class="d-flex profile_card_div_dp">
            <div class="">
              <img src="assets/img/vision/anand naidu.png" class="img-fluid dp_image_testmonials" alt="">
            </div>
            <div class="">
              <h3 class="revier_name">Anand Naidu
              </h3>
              <!-- <p class="revier_occuption">fjngjfkv</p> -->
            </div>
          </div>
        </div>

        <div class="card swiper-slide card_border_radious">

          <div class="card-content ">
            <h2 class="  text_card_head">Friendly Staff
            </h2>
            <p class="description_in_card">“Outstanding service and care at this dental hospital. The staff is professional...”</p>


          </div>
          <div class="d-flex profile_card_div_dp">
            <div class="">
              <img src="assets/img/vision/sangeetha.png" class="img-fluid dp_image_testmonials" alt="">
            </div>
            <div class="">
              <h3 class="revier_name">Sangeetha</h3>
              <!-- <p class="revier_occuption">fjngjfkv</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- <div class="swiper-button-next swiper-navBtn"></div>
             <div class="swiper-button-prev swiper-navBtn"></div> -->
    <div class="swiper-pagination  "></div>
  </div>

  <script>
    var swiper = new Swiper(".slide-content", {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000, // Time in milliseconds between automatic slides (3 seconds here)
        disableOnInteraction: false, // Keeps autoplay active even after manual swiping
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</section>


<section class="lady_doc_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h1 class="head_tag_doc_mam">For Best Dentist in Guntur
          and <span class="doc_span_text">Top Dental Care In
            Guntur</span> Solutions, Enroll With Us Now.</h1>
        <p class="call_text_bg_green">Call - +91 9391 457072</p>


        <div class="d-flex justify-content-between">
          <div class="">
            <h1 class="num_head_tag">07+ </h1>
            <p class="num_para_tag"> Years Experience</p>
          </div>
          <div class="">
            <h1 class="num_head_tag"> 2697</h1>
            <p class="num_para_tag"> Happy Smile</p>
          </div>
          <div class="">
            <h1 class="num_head_tag"> 1489 </h1>
            <p class="num_para_tag"> Root Canal</p>
          </div>
        </div>
      </div>

      <div class="col-md-2 d-none d-md-block"></div>
      <div class="col-md-5">
        <img src="assets/img/vision/lady_doc_img.png" class="img-fluid" alt="">
      </div>

    </div>
  </div>
</section>

<section class="blog_section ">
  <div class="container">
    <div class="section-title text-center">

      <h2 class="ask_heading mb-5">Blogs & articles </h2>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <?php
      include './db.connection/db_connection.php';

      // Fetch latest 3 blogs with video
      $sql = "SELECT id, title, main_content, main_image, video FROM blogs ORDER BY created_at DESC LIMIT 3";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "<div class='row'>"; // Start row for card layout

        while ($row = $result->fetch_assoc()) {
          $blog_id = $row['id'];
          $title = $row['title'];
          $main_content = $row['main_content'];
          $main_image = $row['main_image'];
          $video = $row['video'];

          echo "<div class='col-md-4 mb-4'>"; // Create 3 equal-width columns for medium devices
          echo "<div class='card h-100'>"; // Start card

          // Display the blog title
          echo "<div class='card-body'>";


          // Display video if available
          if (!empty($video)) {
            $video_path = "./admin/uploads/videos/{$video}";
            echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
          }
          // If no video, display main image
          elseif (!empty($main_image)) {
            $main_image_path = "./admin/uploads/photos/{$main_image}";
            echo "<img class='card-img-top img-fluid' src='{$main_image_path}' alt='Blog Image'>";
          }
          echo "<h5 class='card-title my-3'>" . htmlspecialchars($title) . "</h5>";
          // Display a short portion of the blog content
          echo "<p class='card-text'>" . substr($main_content, 0, 90) . "...</p>";

          // Link to full blog post
          echo "<a href='fullblog.php?id={$blog_id}' class='btn btn-primary'>Read more</a>";

          echo "</div>"; // End card body
          echo "</div>"; // End card
          echo "</div>"; // End column
        }

        echo "</div>"; // End row
      } else {
        echo "No blog posts found.";
      }

      $conn->close();
      ?>



      <div class="mt-5 d-none d-md-block">
        <a href="blogs.php" style="text-decoration: none;">
          <p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More<i
              class="fa-solid fa-arrow-right mt-1"></i></p>
        </a>
      </div>

      <div class="d-flex flex-row justify-content-center mt-4">
        <a href="blogs.php" style="text-decoration: none;">
          <p class="view_more_btn d-md-none">View More<i class="fa-solid fa-arrow-right"></i></p>
        </a>
      </div>

    </div>
  </div>

</section>

<section class="ask_qus_sec">
  <div class="container  ">
    <div class="text-center">
      <h1 class="ask_heading">Frequently Ask Question</h1>
      <!-- <p class="ask_para">Lorem ipsum dolor sit amet consectetur. Molestie sagittis sit habitasse vivamus vulputate lectus pharetra nibh diam. </p> -->
    </div>
    <div class="row mt-5">

      <div class="col-lg-6">


        <div class="faq">
          <ul class="faq-list">
            <li class="padding_in_list">
              <div class="question ">
                <!-- <p class="list_p_tag"><span class="list_type_style">. </span>Is a root canal treatment painful? -->
                <p class="list_p_tag"><span class="list_type_style">. </span>Who is the best dentist in Guntur?

                  <span class="toggle-icon toggle_padding_icon_one">+</span>
                </p>
              </div>

              <div class="answer">
                <!-- No, with modern anesthesia and techniques, root canal treatments are usually not painful. -->
                Dr. Abhilash and Dr. Lathasree at Vision Multi Specialty Dental Hospital are widely regarded as two of the best dentists in Guntur. With years of experience and expertise in advanced dental treatments, they offer personalized, painless care for all age groups
              </div>
            </li>
            <hr class="hr_line">
            <li>
              <div class="question ">
                <!-- <p class="list_p_tag"><span class="list_type_style">. </span> How long does a root canal treatment take? -->
                <p class="list_p_tag"><span class="list_type_style">. </span>What treatments are offered at Hospital?

                  <span class="toggle-icon toggle_padding_icon_two">+</span>
                </p>
              </div>

              <div class="answer">
                <!-- No, with modern anesthesia and techniques, root canal treatments are usually not painful. -->
                At Vision Multi Specialty Dental Hospital in Guntur, we offer a full range of treatments including dental implants, root canal therapy, braces, teeth whitening, crowns, bridges, pediatric dentistry, and smile designing
              </div>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-lg-6">


        <div class="faq">
          <ul class="faq-list">


            <li>
              <div class="question ">
                <!-- <p class="list_p_tag"><span class="list_type_style">. </span> Are root canal treatments expensive? -->
                <p class="list_p_tag"><span class="list_type_style">. </span>Which is the best dental hospital in Guntur?
                  <span class="toggle-icon toggle_padding_icon_three">+</span>
                </p>
              </div>

              <div class="answer">
                <!-- No, with modern anesthesia and techniques, root canal treatments are usually not painful. -->

                Vision Multi Specialty Dental Hospital is considered the best dental hospital in Guntur for its modern technology, experienced dental team, and patient-centered approach. Led by Dr. Abhilash and Dr. Lathasree, the hospital provides comprehensive dental solutions including implants, root canals, braces, and cosmetic dentistr
              </div>
            </li>
            <hr class="hr_line">

            <li>
              <div class="question ">
                <!-- <p class="list_p_tag"><span class="list_type_style">. </span>Can I drive after a root canal treatment? -->
                <p class="list_p_tag"><span class="list_type_style">. </span>Why I choose Vision Dental Hospital in Guntur?
                  <span class="toggle-icon toggle_padding_icon_four">+</span>
                </p>
              </div>

              <div class="answer">
                <!-- No, with modern anesthesia and techniques, root canal treatments are usually not painful. -->
                Patients choose Vision Dental Hospital for its strong reputation, experienced doctors like Dr. Abhilash and Dr. Lathasree, affordable pricing, and advanced treatment options. Whether it’s preventive care or smile makeovers, the hospital ensures quality and comfort
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.question').click(function() {
        var $answer = $(this).next('.answer');
        var $icon = $(this).find('.toggle-icon');

        // Toggle the answer visibility
        $answer.slideToggle();

        // Change icon text
        $icon.text($icon.text() === '+' ? '-' : '+');

        // Toggle background color by adding/removing the active-bg class
        $(this).toggleClass('active-bg');
        $answer.toggleClass('active-bg');
      });
    });
  </script>


</section>





<?php include('./footer.php'); ?>

<script>
  let currentSlide = 0;

  function moveSlide(step) {
    const slides = document.querySelectorAll('.carousel .slide');
    const totalSlides = slides.length;
    currentSlide = (currentSlide + step + totalSlides) % totalSlides;
    document.querySelector('.carousel').style.transform = `translateX(-${currentSlide * 100}%)`;
  }
</script>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


<!-- Swiper JS -->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<!--Uncomment this line-->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>


</body>

</html>