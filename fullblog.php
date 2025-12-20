<?php
include './db.connection/db_connection.php';

/* ===============================
   AJAX LIKE / DISLIKE HANDLE
================================ */
if (isset($_POST['action']) && isset($_POST['blog_id'])) {

    session_start();
    $blog_id = intval($_POST['blog_id']);
    $reaction = $_POST['action']; // like / dislike

    // One user = one reaction (session based)
    $user_key = session_id();

    // Already reacted?
    $check = $conn->prepare("
        SELECT id, reaction 
        FROM blog_reactions 
        WHERE blog_id = ? AND created_at = ?
    ");
    $check->bind_param("is", $blog_id, $user_key);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo json_encode(["status" => "already"]);
        exit;
    }

    $insert = $conn->prepare("
        INSERT INTO blog_reactions (blog_id, reaction, created_at)
        VALUES (?, ?, ?)
    ");
    $insert->bind_param("iss", $blog_id, $reaction, $user_key);
    $insert->execute();

    echo json_encode(["status" => "success"]);
    exit;
}

/* ===============================
   FETCH BLOG
================================ */
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$stmt = $conn->prepare("
    SELECT title, main_content, full_content 
    FROM blogs WHERE id = ?
");
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$stmt->bind_result($title, $main_content, $full_content);
$stmt->fetch();
$stmt->close();

/* ===============================
   COUNT REACTIONS
================================ */
$like_count = $conn->query("
    SELECT COUNT(*) as c 
    FROM blog_reactions 
    WHERE blog_id=$blog_id AND reaction='like'
")->fetch_assoc()['c'];

$dislike_count = $conn->query("
    SELECT COUNT(*) as c 
    FROM blog_reactions 
    WHERE blog_id=$blog_id AND reaction='dislike'
")->fetch_assoc()['c'];
?>


<?php include 'header.php'; ?>



<main>
    <!-- ======= Blogs Section ======= -->
    <!-- <div class="page-header bg-more-light tittle-image">
            <?php
            if (!empty($title_image)) {
                $title_image_path = "./admin/uploads/photos/{$title_image}";
                echo "<img class='img-fluid img_sts' src='{$title_image_path}' style='width: 3000px;  ' alt='Title Image'>";
            } else {
                echo "<img class='img-fluid img_sts' src='assets/images/title images2/Deep_vein_thrombosis_title_image_one_stop_vascular_solutions.webp' style='width: 3000px;' alt='Deep_vein_thrombosis_title_image_one_stop_vascular_solutions'>";
            }
            ?>
        </div> -->

    <div class="container blog-detailed blog-detailed-sidebar" style="padding-bottom: 0px;padding-top: 50px;">

        <div class="container blog-detailed" style="padding-top: 50px;">

            <!-- Language buttons -->
            <div class="d-flex justify-content-center mb-3">
                <button id="english-btn" class="lang-btn btn btn-sm me-2 english-btn">English</button>
                <button id="telugu-btn" class="lang-btn btn btn-sm telugu-btn mx-4">తెలుగు</button>
            </div>


            <?php if (!empty($service)) { ?>
                <div class="text-center mb-3">
                    <span class="badge_service_name px-4 py-2">
                        <?= htmlspecialchars($service) ?>
                    </span>
                </div>
            <?php } ?>

            <!-- Image -->
            <div class="text-center mb-4">
                <?php if (!empty($section1_image)): ?>
                    <img src="./admin/uploads/photos/<?php echo $section1_image; ?>"
                        class="img-fluid "
                        style="width:600px;
           ">
                <?php else: ?>
                    <!-- <p>No Image Available</p> -->
                <?php endif; ?>
            </div>

            <!-- Video / Image -->
            <div class="d-block d-lg-none"><?php
                                            if (!empty($video)) {
                                                $video_path = "./admin/uploads/videos/{$video}";
                                                echo "<video class='main-video' controls
    style='max-width:100%; height:auto; object-fit:contain; display:block; margin:0 auto;'>
    <source src='{$video_path}' type='video/mp4'>
    Your browser does not support the video tag.
  </video>";
                                            } elseif (!empty($main_image)) {
                                                $main_image_path = "./admin/uploads/photos/{$main_image}";;
                                            }
                                            ?>
            </div>


            <div class="d-none d-lg-block">

                <?php
                if (!empty($video)) {
                    $video_path = "./admin/uploads/videos/{$video}";
                    echo "<video class='main-video' controls
    style='width:700px; height:425px; object-fit:contain; display:block; margin:0 auto;'>
    <source src='{$video_path}' type='video/mp4'>
    Your browser does not support the video tag.
  </video>";
                } elseif (!empty($main_image)) {
                    $main_image_path = "./admin/uploads/photos/{$main_image}";;
                }
                ?>
            </div>




            <!-- SERVICE BADGE -->
            <!-- SERVICE BADGE -->



            <!-- Title -->
            <h4 class="blog-title text-center mt-5" style="color:#283779; font-weight:800;">
                <span id="title-en"><?php echo $title; ?></span>
                <!-- <span id="title-te" style="display:none;"><?php echo $telugu_title; ?></span> -->
            </h4>

            <!-- Contents -->
            <div class="main-content " style="text-align:justify;">
                <div id="main-en"><?php echo $main_content; ?></div>
                <!-- <div id="main-te" style="display:none;"><?php echo $telugu_main_content; ?></div> -->
            </div>

            <div class="full-content ">
                <div id="full-en"><?php echo $full_content; ?></div>
                <div id="full-te" style="display:none;"><?php echo $telugu_full_content; ?></div>
            </div>



        </div>

        <div class="reaction-box text-center my-4">
            <button id="likeBtn" class="reaction-btn like-btn">
                👍 Like <span id="likeCount"><?= $like_count ?></span>
            </button>

            <button id="dislikeBtn" class="reaction-btn dislike-btn">
                👎 Dislike <span id="dislikeCount"><?= $dislike_count ?></span>
            </button>
        </div>



        <div class="container">
            <div class="blogs_side my-5">
                <div class="side-bar">
                    <h1 class="d-flex justify-content-center my-3">LATEST BLOGS</h1>
                    <div class="swiper blog-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            // DB connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT id, title, main_image FROM blogs ORDER BY created_at DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $sidebar_image_path = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                    $title_short = strlen($row['title']) > 50 ? substr($row['title'], 0, 50) . '...' : $row['title'];

                                    echo "
                            <div class='swiper-slide d-flex justify-content-center'>
                                <div class='custom-card background_sidebar text-center' 
                                    style='width:100%; max-width:400px; height:350px; display:flex; flex-direction:column; justify-content:flex-start; align-items:center; padding:10px; border-radius:8px; box-shadow:0px 2px 10px rgba(0,0,0,0.1);'>
                                    <div style='flex:1; display:flex; align-items:center; justify-content:center; width:100%; overflow:hidden;'>
                                        <img src='{$sidebar_image_path}' class='img-fluid' style='width:100%; height:100%; object-fit:cover;' alt='Blog Image'>
                                    </div>
                                    <a href='fullblog.php?id={$row['id']}'>
                                        <p class='blog-card-text mt-2'>{$title_short}</p>
                                    </a>
                                </div>
                            </div>";
                                }
                            } else {
                                echo "<p>No blog posts found.</p>";
                            }
                            $conn->close();
                            ?>
                        </div>

                        <!-- Navigation -->
                        <!-- <div class="swiper-button-next blog-swiper-button-next"></div>
                    <div class="swiper-button-prev blog-swiper-button-prev"></div> -->

                        <!-- Pagination -->
                        <!-- <div class="swiper-pagination blog-swiper-pagination"></div> -->
                    </div>
                </div>
            </div>
        </div>


    </div>

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

<script>
    // Initialize Swiper
    var blogSwiper = new Swiper(".blog-swiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".blog-swiper-button-next",
            prevEl: ".blog-swiper-button-prev",
        },
        pagination: {
            el: ".blog-swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            520: {
                slidesPerView: 2
            },
            950: {
                slidesPerView: 3
            },
        },
    });
</script>






<!-- LANGUAGE SWITCH SCRIPT -->
<script>
    document.getElementById("english-btn").onclick = function() {
        document.getElementById("title-en").style.display = "block";
        document.getElementById("main-en").style.display = "block";
        document.getElementById("full-en").style.display = "block";

        document.getElementById("title-te").style.display = "none";
        document.getElementById("main-te").style.display = "none";
        document.getElementById("full-te").style.display = "none";
    };

    document.getElementById("telugu-btn").onclick = function() {
        document.getElementById("title-en").style.display = "none";
        document.getElementById("main-en").style.display = "none";
        document.getElementById("full-en").style.display = "none";

        document.getElementById("title-te").style.display = "block";
        document.getElementById("main-te").style.display = "block";
        document.getElementById("full-te").style.display = "block";
    };
</script>





<script>
    function react(action) {
        fetch("", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "action=" + action + "&blog_id=<?= $blog_id ?>"
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === "success") {
                    location.reload(); // reload to show saved count
                } else {
                    alert("Already reacted!");
                }
            });
    }

    document.getElementById("likeBtn").onclick = () => react("like");
    document.getElementById("dislikeBtn").onclick = () => react("dislike");
</script>



</body>

</html>