<?php include 'header.php';?>



  <main id="main">

    <section class="sectionForm">
      <div class="container">
        <div class="row servSect">
          <div class="abot mt-5">
            <h4 class="abh4">Our Dental equipment</h4>
            <p class="abP">"With the latest dental technology and advanced equipment, we provide precise, effective, and comfortable care for every patient."</p>
          </div>
          <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>

              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>

            </div>
            <div class="carousel-inner mb-5">
              <div class="carousel-item active" data-bs-interval="10000">

                <div class="row">
                  <div class="col-md-6">

                    <h2 class="dr_welcome_text1 mt-4 mb-4">CBCT Machine
                    </h2>
                    <p class="poetsen_font1">
                      Discover premium dental care at Vision Multispeciality Dental Hospital, Guntur! 🌟 Proud to be the ONLY dental clinic in Guntur equipped with an advanced CBCT machine for precise 3D X-rays. 🦷💎 Experience top-notch diagnostics and personalized treatment under one roof. Your smile, our priority! 😊 #DentalCareGuntur #CBCT3DXray #VisionDentalGuntur"
                    </p>
                    <p class="poetsen_font1">
                      At Vision Multispeciality Dental Hospital, Guntur, we are proud to offer cutting-edge diagnostics with our advanced CBCT (Cone Beam Computed Tomography) machine. This state-of-the-art technology provides highly detailed 3D imaging for precise diagnosis and treatment planning. As the only dental clinic in Guntur with an in-house CBCT machine, we ensure accurate, efficient, and comfortable care for all your dental needs."
                    </p>

                    <p class="poetsen_font1">
                    Vision Multispeciality Dental Hospital in Guntur is equipped with an advanced OPG (Orthopantomogram) machine, providing panoramic X-rays for a comprehensive view of your teeth, jaws, and surrounding structures. This cutting-edge technology ensures accurate diagnosis and effective treatment planning, making us a trusted choice for exceptional dental care                    </p>


                  </div>
                  <div class="col-md-6">
                    <img src="assets/img/vision/cbct.png" alt="" class="equipment-img img-fluid">
                    <img src="assets/img/vision/dental_x_ray.png" alt="" class="equipment-img img-fluid">


                  </div>
                </div>


              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row">
                  <div class="col-md-6">
                   
                    </h2>
                   
                    <h2 class="dr_welcome_text1 mt-4 mb-4">
                      World Class Laser Technology
                    </h2>
                    <p class="poetsen_font1">
                      "Experience advanced dental care at Vision Multispeciality Dental Hospital, Guntur, with world-class laser technology. Our cutting-edge lasers offer painless, precise, and efficient dental treatments, including gum surgeries, cavity fillings, and teeth whitening. We also specialize in photomedicine, harnessing the power of light for faster healing and enhanced oral health. Redefining dental care with innovation and excellence!"
                    </p>
                  </div>
                  <div class="col-md-6">
                    <img src="assets/img/vision/laser.png" alt="" class="chair_image img-fluid">
                  </div>
                </div>

              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    
                    <h2 class="dr_welcome_text1 mt-4 mb-4">Highest Standarad Sterilization protocols
                    </h2>

                   
                    <p class="poetsen_font1">
                      "Our Class B Autoclave at Vision Multispeciality Dental Hospital ensures the highest level of sterilization, meeting international standards. With advanced vacuum technology, it effectively sterilizes all dental instruments, including complex and hollow tools, ensuring a safe and hygienic environment for every patient. Your safety is our priority!"
                    </p>
                    <p class="poetsen_font1">
                      At Vision Multispeciality Dental Hospital, we follow a rigorous 5-step sterilization protocol to ensure maximum safety:
                    </p>
                    <ul>
                      <li> Pre-cleaning: Manual cleaning to remove debris from instruments.</li>
                      <li> Ultrasonic Cleaning: Deep cleaning using ultrasonic waves to eliminate residues.</li>
                      <li>Packaging: Instruments are sealed in sterilization pouches.</li>
                      <li> Autoclaving: High-pressure steam sterilization using a Class B autoclave for complete disinfection.</li>
                      <li>Storage: Sterilized instruments are safely stored in a sterile environment until use.</li>
                    </ul>
                   
                  </div>
                  <div class="col-md-6">
                  
                    <img src="assets/img/vision/sterlization.png" alt="" class="equipment-img img-fluid">

                  </div>
                </div>

              </div>

              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-6">
                  
                    <h2 class="dr_welcome_text1 mt-4 mb-4">3D intra oral scanner
                    </h2>

                    
                    <p class="poetsen_font1">
                      At Vision Multispeciality Dental Hospital, Guntur, we utilize advanced 3D Intraoral Scanner technology for precise, comfortable, and quick digital impressions. This cutting-edge device eliminates the need for traditional molds, offering enhanced accuracy for crowns, bridges, aligners, and other treatments. Experience modern dentistry at its finest!"
                    </p>


                    
                  </div>
                  <div class="col-md-6">
                
                    <img src="assets/img/vision/3d intra.png" alt="" class="equipment-img img-fluid">

                  </div>
                </div>

              </div>

             

            </div>


          </div>
        </div>
    </section>

    <script>
      function toggleReadMore() {
        var showThisDiv = document.querySelector('.showthisdiv');
        var readMoreText = document.querySelector('.get_in_touch');

        if (showThisDiv.style.display === "none") {
          showThisDiv.style.display = "block";
          readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
        } else {
          showThisDiv.style.display = "none";
          readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
        }
      }
    </script>
    <script>
      function toggleReadMore1() {
        var showThisDiv = document.querySelector('.showthisdiv1');
        var readMoreText = document.querySelector('.get_in_touch');

        if (showThisDiv.style.display === "none") {
          showThisDiv.style.display = "block";
          readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
        } else {
          showThisDiv.style.display = "none";
          readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
        }
      }
    </script>

  </main>

  

  <?php include('./footer.php'); ?>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>