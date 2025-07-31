<?php include 'header.php';?>



  <main id="main">

    <section id="contact" class="contact my-5">
      <div class="container">

        <div class="section-title text-center">
          <h2 class="contct_text">Contact</h2>
        </div>

      </div>



      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row d-flex flex-row justify-content-center">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>
                     
                    Ngo’s Colony Main Road, Corner, 5th Line, <br>  opposite prudhvi prisitine, Venkata Ramana Colony, <br> Guntur, Andhra Pradesh 522004
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3 style="font-family:Mulish;">Email Us</h3>
                  <p style="font-family:Mulish;"> visiondentalguntur@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3 style="font-family:Mulish;">Call Us</h3>
                  <p style="font-family:Mulish;"> +91 93914 57072 </p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contactform.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name" required="" style="font-family:Mulish;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control just_font" name="contactemail" id="email" placeholder="Your Email" style="font-family:Mulish;" required="">
                </div>

                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" style="font-family:Mulish;">
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="contactnumber" id="number" placeholder="Phone" required="" style="font-family:Mulish;">
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="contactmessage" rows="7" placeholder="Message" required=" " style="font-family:Mulish;"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" class="list_cont_btn">Send Message</button></div>
            </form>
          </div>



        </div>

      </div>
    </section>

    <section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.416759153765!2d80.40892811086457!3d16.30163613310894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a75e8e72e323b%3A0xc24e52047b5202de!2sVision%20MultiSpeciality%20Dental%20Hospital%20Guntur%20%7C%20Best%20Dentist%20in%20Guntur%20%7C%20Best%20Dental%20Hospital%20in%20Guntur!5e0!3m2!1sen!2sin!4v1753944933567!5m2!1sen!2sin"  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    

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