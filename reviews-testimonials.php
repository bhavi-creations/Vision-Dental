<?php include 'header.php';?>




  <main id="main">

    <section class="sectionForm">
      <div class="container">
        <div class="abot mt-5">
          <h4 class="abh4">Reviews</h4>
          <p class="abP">"Discover what our patients have to say about their exceptional experiences and results at our dental hospital."</p>
        </div>

        <div class="abtt1 mt-4 mb-4 d-none d-md-block">
          <h2 class="patients">What our Patient says</h2>
          <p class="ppaaatt mt-2">5.0 <span> <img src="assets/img/services/s3.png"
                class="img-fluid dr_img_padding servImgg" alt=""></span> Google Reviews</p>
        </div>
        <div class="row servSection mt-5">
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/ravi.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Ravi Kumar</h4>
            </div>
            <p class="testPara">Actually I visited for root canal and fixing the new caps, I really like the process and they treat me well. They are very friendly and explained me everything. I'm really happy for now 😊.</p>
          </div>
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/shesa reddy.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Sesha Reddy</h4>
            </div>
            <p class="testPara">I had a wonderful experience at this dental hospital. The staff were incredibly professional and attentive, ensuring I was comfortable throughout my treatment.</p>
          </div>
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/murthy.png" alt="" class="userImage img-fluid">
              <h4 class="personame"> Murthy</h4>
            </div>
            <p class="testPara">Visited vision dental hospital for cavity filling underwent 6 teeth very smooth.
              Extremely hygienic and good experience. </p>
          </div>


        </div>
        <div class="row servSect">
          <div class="col-md-4  ">
            <div class="tes">
              <img src="assets/img/vision/velpula.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Velpula Nageswararao</h4>
            </div>
            <p class="testPara">I'm so happy I chose vision Dental hospital for my root canal treatment! The Doctor abhilash sir and entire team is caring and professional, and they truly prioritize patient comfort.</p>
          </div>
          <div class="col-md-4  ">
            <div class="tes">
              <img src="assets/img/vision/rohit.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Rohit Pawar</h4>
            </div>
            <p class="testPara">Started invisible braces, also known as aligners, six months ago. Treatment is almost finished, and I'm pleased with the comfort and experience. Highly Recommended!</p>
          </div>
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/shiva.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Shiva Ram</h4>
            </div>
            <p class="testPara">I went to Vision Multispecialty Dental Hospital yesterday to replace my teeth. They offered me the option of an implant, which I accepted right away. It seems like a very happy, painless experience with excellent hospitality.</p>
          </div>


        </div>
        <div class="row servSect">
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/anand naidu.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Anand Naidu</h4>
            </div>
            <p class="testPara">I had an exceptional experience at vision multi-speciality dental hospital . From the friendly and professional front desk staff to the highly skilled dental team, every aspect of my visit was top-notch.</p>
          </div>
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/sangeetha.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Sangeetha</h4>
            </div>
            <p class="testPara">Outstanding service and care at this dental hospital. The staff is professional and friendly, making each visit comfortable and stress-free. I highly recommend them for anyone in need of dental care.</p>
          </div>
          <div class="col-md-4">
            <div class="tes">
              <img src="assets/img/vision/meghana.png" alt="" class="userImage img-fluid">
              <h4 class="personame">Meghana</h4>
            </div>
            <p class="testPara">I got my all wisdom teeth removed, safe to say its total painless during and after the process. I will recommend the clinic for painless treatments. I am extremely satisfied with the results. </p>
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