<?php
include './db.connection/db_connection.php'; // Include your database connection file

// Retrieve service filter from GET request
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL query with optional service filter
$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
  $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

// Initialize statement
$stmt = $conn->prepare($sql);

// Bind parameters if service is set
if (!empty($service)) {
  $stmt->bind_param("s", $service);
}

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
?>


<?php
$page_title = 'Dental Blogs & Treatment Insights | Vision Dental Hospital';
$page_description = 'Read expert dental blogs and treatment guides from Vision Dental Hospital in Guntur covering implants, braces, root canals, pediatric care, and cosmetic dentistry.';
$page_keywords = 'dental blogs in Guntur, root canal treatment blog, clear aligners guide, dental implants information, pediatric dentist tips';
$meta_robots = 'index,follow';
include 'header.php';
?>


<main>
  <!-- Filter Buttons -->
  <div class="container">
    <div class="filter_buttons redirect_section mt-4">
      <a href="blogs?service="><button class="redirect_blog_srivice">All</button></a>
      <a href="blogs?service=root canal"><button class="redirect_blog_srivice">Root Canal</button></a>
      <a href="blogs?service=teeth braces"><button class="redirect_blog_srivice">Teeth Braces</button></a>
      <a href="blogs?service=pediatric dentist"><button class="redirect_blog_srivice"> Pediatric Dentist</button></a>
      <a href="blogs?service=paedodontist doctors"><button class="redirect_blog_srivice">Paedodontist Doctors </button></a>
      <a href="blogs?service=clear aligners"><button class="redirect_blog_srivice"> Clear Aligners</button></a>
      <a href="blogs?service=laminate veneers"><button class="redirect_blog_srivice">Laminate Veneers</button></a>
      <a href="blogs?service=crown bridge"><button class="redirect_blog_srivice">Crown & Bridge</button></a>
      <a href="blogs?service=dental implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
      <a href="blogs?service=dentures treatments"><button class="redirect_blog_srivice">Dentures Treatments</button></a>
      <a href="blogs?service=invisalign"><button class="redirect_blog_srivice">Invisalign </button></a>
      <a href="blogs?service=jaw corrective"><button class="redirect_blog_srivice">Jaw Corrective</button></a>
      <a href="blogs?service=laser gum"><button class="redirect_blog_srivice">Laser & Gum</button></a>
      <a href="blogs?service=smile designing"><button class="redirect_blog_srivice">Smile Designing</button></a>
      <a href="blogs?service=smile makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
      <a href="blogs?service=teeth alignment"><button class="redirect_blog_srivice"> Teeth Alignment</button></a>
      <a href="blogs?service=tooth extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
      <a href="blogs?service=tooth cleaning"><button class="redirect_blog_srivice">Tooth Cleaning</button></a>
      <a href="blogs?service=gum depigment"><button class="redirect_blog_srivice">Gum Depigment</button></a>
      <a href="blogs?service=teeth whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs?service=laser gum surgery"><button class="redirect_blog_srivice">Laser Gum Surgery</button></a>
      <a href="blogs?service=mouth ulcers"><button class="redirect_blog_srivice">Mouth Ulcers</button></a>
      <a href="blogs?service=precancerous lesion"><button class="redirect_blog_srivice">Precancerous Lesion</button></a>
      <a href="blogs?service=laser crown lengthening"><button class="redirect_blog_srivice">Laser Crown Lengthening</button></a>
    </div>
  </div>

  <!-- Blogs Section -->
  <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid row">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
              echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog/{$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog/{$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog/{$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
            }
          } else {
            echo "<p>No blog posts found.</p>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- ======= Footer ======= -->
<?php include('./footer.php'); ?>

<!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>




</body>

</html>

<?php
$stmt->close();
$conn->close();
?>