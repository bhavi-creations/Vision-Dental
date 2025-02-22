<?php include 'header.php';?>



  <main id="main">

    <section class="sectionForm">
      <div class="container">
        <div class="row servSect">
          <div class="abot mt-5">
            <h4 class="abh4">About Vision Dental – <br>
              Best Dental Clinic In Guntur</h4>
            <p class="abP">"Welcome to Vision Dental, where advanced dental care meets compassionate service to give you a healthy, confident smile."</p>
          </div>
          <div class="col-md-6 dr_content_padding  order-1 order-md-1">
            <h2 class="dr_welcome_text1 mt-4 mb-4">Vision Multi Speciality
              Dental Hospital Guntur
              Best Dental Clinic In
              Guntur
            </h2>
            <p class="poetsen_font1">
              Vision Multispeciality Dental Hospital is dedicated to providing comprehensive dental care
              in a modern and compassionate environment. With a team of skilled dentists and
              state-of-the-art technology, we deliver personalized treatment plans for optimal oral
              health.

              <br>



              From routine check-ups to advanced procedures, our focus is on exceptional patient care and
              creating confident smiles. Trust us for all your dental needs and experience the highest
              standard of dental excellence.
            </p>


          </div>

          <div class="col-md-6 order-3  order-md-2 mt-5">
            <img src="assets/img/about/a1.png" class="img-fluid dr_img_padding abouter" alt="">
          </div>


        </div>
      </div>
    </section>
    <section class="sectionForm">
      <div class="container">
        <div class="row servSect">
          <div class="abot mt-5">
            <h4 class="abh4">Meet our specialists</h4>
            <p class="abP">We use only the best quality materials on the market in order to provide the best
              products to our patients.</p>
          </div>
          <div class="col-md-5   mt-5">
            <img src="assets/img/about/a2.png" class="img-fluid dr_img_padding abouter" alt="">
          </div>
          <div class="col-md-7 dr_content_padding   ">
            <h5 class="poetsen_font11">Dr. Abhilash <span class="spanabout">(  Founder and Chief Doctor
                )</span></h5>
            <p class="poetsen_font1">
              Welcome to Vision Multispeciality Dental Hospital, Guntur, where Dr. Abhilash, our founder
              and chief doctor, leads a dedicated team committed to providing top-notch dental care. With
              over 8 years of experience, Dr. Abhilash is highly skilled in implant surgeries, laser
              photomedicine, and full mouth rehabilitations.

              <br>
              <br>
              Dr. Abhilash's expertise ensures that every patient receives personalized and effective
              treatment. He combines advanced technology with a patient-centered approach, focusing on
              comfort, precision, and long-lasting results. Whether you're looking for secure dental
              implants, minimally invasive laser treatments, or comprehensive full mouth rehabilitation,
              Dr. Abhilash and his team are here to help you achieve a healthy and confident smile.
            </p>
            <div class="d-flex flex-row justify-content-start">
              <p class="get_in_touch" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore()">
                Read More <i class="fa-solid fa-arrow-right"></i></p>
            </div>

          </div>



          <div class="showthisdiv order-2  order-md-3" style="display:none ">
            <p class="poetsen_font1">
              At Vision Multispeciality Dental Hospital, we prioritize your well-being and strive to make
              every visit a positive experience. Experience exceptional dental care with Dr. Abhilash,
              where your comfort and satisfaction are our top priorities.</p>
          </div>
        </div>
        <div class="row imgGap mt-5">
          <div class="col-md-3"></div>
          <div class="col-md-6 someabout"> <img src="assets/img/about/a3.png" class="img-fluid dr_img_paddinger" alt="">
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row servSect mt-2">
          <div class="col-md-5   mt-5">
            <img src="assets/img/about/a4.png" class="img-fluid dr_img_padding abouter" alt="">
          </div>
          <div class="col-md-7 dr_content_padding   ">
            <h5 class="poetsen_font11">Dr. Lathasree <span class="spanabout">(  Co-Founder and Senior
                Dentist )</span></h5>
            <p class="poetsen_font1">
              Meet Dr. Lathasree, the co-founder and senior dentist at Vision Multispeciality Dental
              Hospital, Guntur. With 4 years of valuable clinical experience in some of the country’s
              leading corporate hospitals, Dr. Lathasree brings a wealth of knowledge and expertise to our
              practice.

              <br>
              <br>
              As the wife of Dr. Abhilash, Dr. Lathasree shares his commitment to delivering exceptional
              dental care. Her extensive experience in diverse clinical settings has equipped her with a
              comprehensive understanding of advanced dental procedures and patient management. Her
              dedication to patient-centered care ensures that each individual receives personalized
              attention
            </p>
            <div class="d-flex flex-row justify-content-start">
              <p class="get_in_touch" style="color: #474FA0; cursor: pointer;"
                onclick="toggleReadMore1()">
                Read More <i class="fa-solid fa-arrow-right"></i></p>
            </div>

          </div>



          <div class="showthisdiv1 order-2  order-md-3" style="display:none ">
            <p class="poetsen_font1">


              At Vision Multispeciality Dental Hospital, Dr. Lathasree
              plays a pivotal role in maintaining the highest standards of clinical excellence. Her
              collaborative approach and compassionate demeanor create a reassuring environment for all
              patients. Together with Dr. Abhilash, she strives to provide innovative and effective dental
              solutions, making Vision Multispeciality Dental Hospital a trusted choice for comprehensive
              dental care.</p>
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

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

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