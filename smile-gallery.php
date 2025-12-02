<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "vision";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

// Fetch gallery data
$query = "SELECT * FROM gallery ORDER BY id DESC";
$result = $conn->query($query);
?>

<?php include 'header.php'; ?>




<main id="main">

  <section class="sectionForm  ">
    <div class="container">
      <div class="abotu mt-5">
        <h4 class="abh4">Smile Gallery</h4>
        <p class="abP">"Explore our smile gallery to see the exceptional transformations achieved by our skilled team."</p>
      </div>
      <div class="row servSect">

        <div class="col-md-2 ">
          <img src="assets/img/about/i1.png" alt="" class="   iimage">
          <img src="assets/img/about/i2.png" alt="" class="img-fluid iimage1">
        </div>
        <div class="col-md-4">
          <img src="assets/img/about/g1 (1).png" alt="" class="img-fluid main_img_one">

        </div>
        <div class="col-md-4"> <img src="assets/img/about/g2.png" alt="" class="img-fluid main_img_two">
        </div>
        <div class="col-md-2"></div>

      </div>
      <img src="assets/img/about/i3.png" alt="" class="img-fluid iimage2">
      <img src="assets/img/about/i4.png" alt="" class="img-fluid iimage3">
      <div class="row servSecttt ">

        <div class="col-md-4"> <img src="assets/img/about/g3 (1).png" alt="" class="img-fluid main_img_three">
        </div>
        <div class="col-md-4">
          <img src="assets/img/about/g4.png" alt="" class="img-fluid main_img_center">
        </div>
        <div class="col-md-4"> <img src="assets/img/about/g5.png" alt="" class="img-fluid main_img_four">
        </div>


      </div>

      <div class="row servSecttttt mt-4">


        <div class="col-md-2"> <img src="assets/img/about/i5.png" alt="" class="img-fluid iimage4">
          <img src="assets/img/about/i6.png" alt="" class="  iimage5">
        </div>
        <div class="col-md-4"> <img src="assets/img/about/g6.png" alt="" class="img-fluid main_img_five ">
        </div>
        <div class="col-md-4"> <img src="assets/img/about/g7.png" alt="" class="img-fluid main_img_six">
        </div>
        <div class="col-md-2"></div>
      </div>


    </div>
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