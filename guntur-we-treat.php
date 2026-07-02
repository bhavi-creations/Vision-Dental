<?php
$site_base_url = 'https://visiondentalguntur.com';
$server_request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$server_request_path = parse_url($server_request_uri, PHP_URL_PATH) ?: '/';
$server_request_path = $server_request_path === '' ? '/' : $server_request_path;
if (substr($server_request_path, -4) === '.php') {
  $server_request_path = substr($server_request_path, 0, -4);
}
if ($server_request_path === '/index') {
  $server_request_path = '/';
}

$page_title = isset($page_title) ? $page_title : '';
$page_description = isset($page_description) ? $page_description : 'Vision Dental Hospital in Guntur offers advanced dental treatments with experienced doctors, modern technology, and patient-friendly care.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'dentist in Guntur, best dental hospital in Guntur, dental implants in Guntur, root canal treatment in Guntur, clear aligners in Guntur';
$meta_robots = isset($meta_robots) ? $meta_robots : 'index,follow';

$default_titles = [
  'index' => 'Best Dental Clinic in Guntur | Vision Dental Hospital',
  'about-us' => 'About Vision Dental Hospital in Guntur',
  'appointment' => 'Book Dental Appointment in Guntur | Vision Dental Hospital',
  'blogs' => 'Dental Blogs & Treatment Insights | Vision Dental Hospital',
  'contact-us-vision-multispeciality-dental-hospital' => 'Contact Vision Dental Hospital in Guntur',
  'reviews-testimonials' => 'Patient Reviews & Testimonials | Vision Dental Hospital',
  'smile-gallery' => 'Smile Gallery | Vision Dental Hospital'
];

$script_slug = basename($_SERVER['PHP_SELF'] ?? 'index.php', '.php');
if (empty($page_title)) {
  $page_title = $default_titles[$script_slug] ?? ucfirst(str_replace(['-', '_'], ' ', $script_slug)) . ' | Vision Dental Hospital';
}

$canonical_query = [];
parse_str($_SERVER['QUERY_STRING'] ?? '', $canonical_query);
$canonical_query = array_filter($canonical_query, function ($value) {
  return $value !== '' && $value !== null;
});

$canonical_url = $site_base_url . $server_request_path;
if (!empty($canonical_query)) {
  $canonical_url .= '?' . http_build_query($canonical_query);
}
if (isset($canonical_override) && !empty($canonical_override)) {
  $canonical_url = $canonical_override;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= htmlspecialchars($page_title) ?></title>

  <meta name="google-site-verification" content="H2SztZ2bMfGjPtPTvWlAPlclCAJWgBeVrfyf3ZXvADM" />
  <meta name="title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <meta name="robots" content="<?= htmlspecialchars($meta_robots) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>" />

  <!-- Favicons -->
  <link href="assets/img/vision/fav.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Roboto:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18192734271"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-18192734271');
  </script>



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>




  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10932795730">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-10932795730');
  </script>



  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Dentist",
      "name": "Vision Multispecialty Dental Hospital",
      "url": "https://visiondentalguntur.com/",
      "logo": "https://visiondentalguntur.com/logo.png",
      "description": "Vision Multispecialty Dental Hospital offers expert dental care with advanced treatments in Guntur, Andhra Pradesh.",
      "telephone": ["+91 93914 57072"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Ngo’s Colony Main Road, Corner, 5th Line, opposite Prudhvi Prisitine, Venkata Ramana Colony",
        "addressLocality": "Guntur",
        "addressRegion": "Andhra Pradesh",
        "postalCode": "522004",
        "addressCountry": "India"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 16.2997,
        "longitude": 80.4573
      },
      "medicalSpecialty": [
        "Dentistry",
        "Orthodontics",
        "Cosmetic Dentistry",
        "Implant Dentistry"
      ],
      "openingHours": [
        "Monday-Saturday 09:30-21:00",
        "Sunday 09:30-14:00"
      ],
      "priceRange": "₹₹",
      "sameAs": [
        "https://www.facebook.com/VisionDentalGuntur",
        "https://www.instagram.com/VisionDentalGuntur",
        "https://g.co/kgs/YQpLG4o"
      ]
    }
  </script>



  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
          "@type": "Question",
          "name": "Who is the best dentist in Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "At Vision Multispeciality Dental Hospital, Dr. Abhilash and Dr. Lathasree are among the most trusted and experienced dentists in Guntur, offering top-quality dental care with a focus on patient comfort and precision."
          }
        },
        {
          "@type": "Question",
          "name": "Which is the best dental hospital in Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Vision Dental Guntur is one of the best dental hospitals in Guntur, known for advanced treatments, experienced dentists, and patient-friendly services across all age groups."
          }
        },
        {
          "@type": "Question",
          "name": "What treatments are offered at Vision Dental Hospital?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide comprehensive dental care including root canal treatment, clear aligners, pediatric dentistry, braces, implants, teeth whitening, and smile designing."
          }
        },
        {
          "@type": "Question",
          "name": "Why should I choose Vision Dental Hospital in Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patients choose us for our advanced dental technology, skilled dentists, hygienic environment, and commitment to pain-free, affordable treatments."
          }
        },
        {
          "@type": "Question",
          "name": "Is Vision Dental Guntur open on weekends?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our dental clinic is open on Saturdays and available for appointments on Sundays with prior booking for emergency and scheduled cases."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of root canal treatment in Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Root canal treatment at our clinic is affordable and varies based on the case. Visit our root canal treatment page for more information or book a consultation."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer invisible aligners or braces in Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer both metal braces and clear aligners like Invisalign to help patients achieve a confident smile with modern, discreet solutions."
          }
        },
        {
          "@type": "Question",
          "name": "Are there pediatric dental specialists at Vision Dental?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Our pediatric dentistry team provides gentle, effective dental care tailored for children, ensuring comfort and long-term dental health."
          }
        },
        {
          "@type": "Question",
          "name": "What are patients saying about Vision Dental Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our patients consistently call us the best dental clinic in Guntur for our compassionate staff, painless treatment approach, and excellent results."
          }
        },
        {
          "@type": "Question",
          "name": "How do I book an appointment at Vision Dental Guntur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can easily book an appointment online or call us directly during clinic hours. Walk-ins are also welcome for general check-ups."
          }
        }
      ]
    }
  </script>




</head>


<body>






  <header id="header">
    <div class="container d-flex align-items-center onlypad  ">
      <div class="logo-text-container d-flex align-items-center" style="z-index: 999;">
        <a href="https://visiondentalguntur.com/">
          <img src="assets/img/vision/large_icon.png" class="img-fluid nav_logo_image " alt="">
        </a>
      </div>

      <nav id="navbar" class="navbar order-lg-0">
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul>
          <li class="nav-item active"><a class="nav-link scrollto " href="https://visiondentalguntur.com/">Home</a></li>
          <!-- <li>
            <a class="nav-link scrollto" href="about-vision-dental-best-dental-clinic-in-guntur">About</a>
          </li> -->



          <li class="unique-nav-item " style="--i: 1.1s">
            <a href="#" class="unique-nav-link">Owners<i class="fas fa-caret-down"></i></a>
            <div class="unique-dropdown">
              <ul class="unique-dropdown-list  new_nav_bg navbar_new_section">


                <li class="unique-dropdown-item">
                  <a href="about-us.php" class="unique-dropdown-link">About us</i></a>

                </li>


                <li class="unique-dropdown-item">
                  <a href="we_promise.php" class="unique-dropdown-link">We promise</i></a>

                </li>


                <div class="unique-arrow"></div>
              </ul>
            </div>
          </li>












          <li class="unique-nav-item " style="--i: 1.1s">
            <a href="treatment-in-vision-multispeciality-dental-hospital.php" class="unique-nav-link">Treatments<i class="fas fa-caret-down"></i></a>
            <div class="unique-dropdown">
              <ul class="unique-dropdown-list  new_nav_bg navbar_new_section">


                <li class="unique-dropdown-item">
                  <a href="#" class="unique-dropdown-link">Pain Relief<i class="fas fa-caret-down"></i></a>
                  <div class="unique-dropdown second-level  nav_div_mrg nav_div_mrg_one">
                    <ul class="unique-dropdown-list inside_nav_drop_down sub_section1 pain_relieft_sub_service">
                      <li class="unique-dropdown-item">
                        <a href="root-canal-treatments-in-guntur.php" class="unique-dropdown-link">Root Canal Treatment</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="wisdom-tooth-removel-treatments-in-guntur.php" class="unique-dropdown-link"> Wisdom Tooth Removel</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="jaw-pain-correction-treatments-in-guntur.php" class="unique-dropdown-link"> Jaw Pain / Correction</a>
                      </li>

                      <div class="unique-arrow"></div>
                    </ul>
                  </div>
                </li>
                <li class="unique-dropdown-item">
                  <a href="#" class="unique-dropdown-link">Teeth Replacement<i class="fas fa-caret-down"></i></a>
                  <div class="unique-dropdown second-level  nav_div_mrg nav_div_mrg_two">
                    <ul class="unique-dropdown-list inside_nav_drop_down sub_section1">
                      <li class="unique-dropdown-item">
                        <a href="dentaldentures-treatments-in-guntur.php" class="unique-dropdown-link">Dentures</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="dentalcrown-bridge-treatment-in-guntur.php" class="unique-dropdown-link">Crowns & Bridges</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="dental-implants-treatments-in-guntur.php" class="unique-dropdown-link">Dental Implants</a>
                      </li>

                      <div class="unique-arrow"></div>
                    </ul>
                  </div>
                </li>
                <li class="unique-dropdown-item">
                  <a href="#" class="unique-dropdown-link">Teeth Alignment <i class="fas fa-caret-down"></i></a>
                  <div class="unique-dropdown second-level  nav_div_mrg nav_div_mrg_three">
                    <ul class="unique-dropdown-list inside_nav_drop_down  sub_section1">

                      <li class="unique-dropdown-item">
                        <a href="invisalignaligners-clearaligners-treatment-in-guntur.php" class="unique-dropdown-link"> Invisalign</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="clear-aligners-treatment-in-guntur.php" class="unique-dropdown-link"> Clear Aligners</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="dentalbraces-treatments-in-guntur.php" class="unique-dropdown-link">Braces</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="laminate-veneers-treatments-in-guntur.php" class="unique-dropdown-link">Laminate Veneers</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="smile-designing-treatments-in-guntur.php" class="unique-dropdown-link"> Smile Designing</a>
                      </li>

                      <div class="unique-arrow"></div>
                    </ul>
                  </div>
                </li>

                <li class="unique-dropdown-item">
                  <a href="#" class="unique-dropdown-link">Laser Veda<i class="fas fa-caret-down"></i></a>
                  <div class="unique-dropdown second-level  nav_div_mrg nav_div_mrg_four">
                    <ul class="unique-dropdown-list inside_nav_drop_down sub_section1  pain_relieft_sub_service">
                      <li class="unique-dropdown-item">
                        <a href="laser-assisted-teeth-cleaning-treatments-in-guntur.php" class="unique-dropdown-link"> Laser assisted Teeth Cleaning</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="gum-depigmentation-treatments-in-guntur.php" class="unique-dropdown-link"> Gum Depigmentation</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="laser-teeth-whitening-treatments-in-guntur.php" class="unique-dropdown-link"> Laser Teeth Whitening</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="laser-gum-surgeries-treatments-in-guntur.php" class="unique-dropdown-link"> Laser Gum Surgeries</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="mouth-ulcers-treatments-in-guntur.php" class="unique-dropdown-link"> Mouth Ulcers</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="precancerous-lesion-in-mouth-treatments-in-guntur.php" class="unique-dropdown-link"> Precancerous Lesion in Mouth</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="laser-crown-lengthening-treatments-in-guntur.php" class="unique-dropdown-link"> Laser Crown Lengthening</a>
                      </li>


                      <div class="unique-arrow"></div>
                    </ul>
                  </div>
                </li>


                <li class="unique-dropdown-item">
                  <a href="#" class="unique-dropdown-link"> Child Dentistry<i class="fas fa-caret-down"></i></a>
                  <div class="unique-dropdown second-level nav_div_mrg nav_div_mrg_five">
                    <ul class="unique-dropdown-list inside_nav_drop_down sub_section1 pain_relieft_sub_service">
                      <li class="unique-dropdown-item">
                        <a href="pediatric-dentist-treatments-in-guntur.php" class="unique-dropdown-link">Pediatric Dentist</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="paedodontist-doctors-treatments-in-guntur.php" class="unique-dropdown-link">Paedodontist Doctors</a>
                      </li>


                      <div class="unique-arrow"></div>
                    </ul>
                  </div>
                </li>



















                <li class="unique-dropdown-item">
                  <a href="#" class="unique-dropdown-link">Areas We Serve <i class="fas fa-caret-down"></i></a>
                  <div class="unique-dropdown second-level  nav_div_mrg nav_div_mrg_three">
                    <ul class="unique-dropdown-list inside_nav_drop_down  sub_section1">



  <li class="unique-dropdown-item">
                        <a href="guntur-we-treat.php" class="unique-dropdown-link">  Guntur We Treat</a>
                      </li>


                      <li class="unique-dropdown-item">
                        <a href="dental-hospital-in-arundelpet-guntur.php" class="unique-dropdown-link"> Arundalpet</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="dental-clinic-in-brodipeta-guntur.php" class="unique-dropdown-link"> Brodipeta </a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="dentist-in-old-guntur.php" class="unique-dropdown-link"> Old Guntur</a>
                      </li>
                      <li class="unique-dropdown-item">
                        <a href="dentist-in-lakshmipuram-guntur.php" class="unique-dropdown-link"> Lakshmipuram</a>
                      </li>

                    


                      <div class="unique-arrow"></div>
                    </ul>
                  </div>
                </li>











                <div class="unique-arrow"></div>
              </ul>
            </div>
          </li>


          <li><a class="nav-link scrollto" href="equipment-in-vision-multispeciality-dental-hospital-in-guntur.php">Equipment</a></li>
          <li><a class="nav-link" href="blogs.php">Blogs</a></li>
          <!-- <li><a class="nav-link scrollto" href="reviews-testimonials.php">Reviews</a></li>
          <li><a class="nav-link scrollto" href="smile-gallery.php">Smile Gallery</a></li> -->
          <!-- <li><a class="nav-link scrollto d-none -d-lg- d-xl-none" href="contact">Contact us</a></li> -->
          <li><a class="nav-link scrollto d-block d-lg-none d-xl-block" href="contact-us-vision-multispeciality-dental-hospital.php">Contact us</a></li>
          <li><a class="nav-link scrollto d-block d-lg-none d-xl-block" href="appointment.php">Appointment</a></li>


          <li class="call-nav ">
            <a href="tel:+919391457072" class="text-dark text-decoration-none">
              <div class="rounded-4  text-center" style="background:#6a2d5f; ">
                <div class="rounded-4 p-2" style="background: rgba(255,255,255,0.95);">
                  <!-- Icon + Text -->
                  <div class="d-flex align-items-center justify-content-center gap-1 mb-2">
                    <div class="rounded-circle p-2" style="background: #6a2d5f;">
                      <i class="bi bi-headset text-white fs-4"></i>
                    </div>
                    <small class="fw-medium text-primary">Contact us</small>
                  </div>
                  <!-- Phone Number -->
                  <h6 class="mb-0 fw-bold">
                    +91 93914 57072
                  </h6>
                </div>
              </div>
            </a>




          </li>
          <!-- <p class="design-label">Design 8: Glass Card</p> -->




          <!-- <li><a href="appointment" class="appointment-btn scrollto d-lg-none" style="z-index: 999;">
              Appointment
            </a></li> -->
        </ul>
      </nav>

      <!-- <a href="appointment" class="appointment-btn scrollto d-none d-lg-block d-flex justify-content-center" style="z-index: 999;">
        Appointment
      </a> -->
    </div>


    <?php
    // Define hospital details dynamically
    $hospital_name = "Vision Dental Guntur";
    $hospital_url = "https://visiondentalguntur.com/";
    $hospital_address = [
      "streetAddress" => "Ngo’s Colony Main Road, Corner, 5th Line, opposite Prudhvi Prisitine, Venkata Ramana Colony",
      "addressLocality" => "Guntur",
      "addressRegion" => "Andhra Pradesh",
      "postalCode" => "522004",
      "addressCountry" => "India"
    ];
    $hospital_phone = ["+91 93914 57072"];
    $hospital_logo = "https://visiondentalguntur.com/logo.png";
    $hospital_description = "Vision Dental Guntur offers expert dental care with advanced treatments in Guntur, Andhra Pradesh.";
    $hospital_specialties = ["Dentistry", "Orthodontics", "Cosmetic Dentistry", "Implant Dentistry"];
    $hospital_opening_hours = [
      "Monday-Saturday" => "09:30-21:00",
      "Sunday" => "09:30-14:00"
    ];

    // Convert opening hours to Schema.org format
    $opening_hours_array = [];
    foreach ($hospital_opening_hours as $day => $time) {
      $opening_hours_array[] = "$day $time";
    }

    // Generate JSON-LD Schema Markup
    $schema_data = [
      "@context" => "https://schema.org",
      "@type" => "Dentist",
      "name" => $hospital_name,
      "url" => $hospital_url,
      "logo" => $hospital_logo,
      "description" => $hospital_description,
      "telephone" => $hospital_phone,
      "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => $hospital_address["streetAddress"],
        "addressLocality" => $hospital_address["addressLocality"],
        "addressRegion" => $hospital_address["addressRegion"],
        "postalCode" => $hospital_address["postalCode"],
        "addressCountry" => $hospital_address["addressCountry"]
      ],
      "medicalSpecialty" => $hospital_specialties,
      "openingHours" => $opening_hours_array,
      "sameAs" => [
        "https://www.facebook.com/VisionDentalGuntur",
        "https://www.instagram.com/VisionDentalGuntur"
      ],
    ];
    ?>
    <script type="application/ld+json">
      <?= json_encode($schema_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    </script>







    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var resizeTimer;

        function resetMobileNav(firstLevelLinks, secondLevelLinks) {
          firstLevelLinks.forEach(function(link) {
            link.onclick = null;
          });
          secondLevelLinks.forEach(function(link) {
            link.onclick = null;
          });
        }

        function initMobileNav() {
          var firstLevelLinks = document.querySelectorAll('.unique-nav-item > .unique-nav-link');
          var secondLevelLinks = document.querySelectorAll('.unique-dropdown-item > .unique-dropdown-link');
          var allDropdowns = document.querySelectorAll('.unique-dropdown, .second-level');
          var navItems = document.querySelectorAll('.unique-nav-item, .unique-dropdown-item');

          resetMobileNav(firstLevelLinks, secondLevelLinks);

          if (window.innerWidth < 992) {
            firstLevelLinks.forEach(function(link) {
              link.onclick = function(e) {
                e.preventDefault();
                e.stopPropagation();

                var parent = link.parentElement;
                var dropdown = link.nextElementSibling;
                var isOpen = parent.classList.contains('active');

                document.querySelectorAll('.unique-nav-item').forEach(function(item) {
                  if (item !== parent) {
                    item.classList.remove('active');
                    item.querySelectorAll('.unique-dropdown').forEach(function(menu) {
                      menu.classList.remove('show');
                      menu.style.display = 'none';
                    });
                  }
                });

                document.querySelectorAll('.second-level').forEach(function(menu) {
                  menu.classList.remove('show');
                  menu.style.display = 'none';
                });
                document.querySelectorAll('.unique-dropdown-item').forEach(function(item) {
                  item.classList.remove('active');
                });

                if (isOpen) {
                  parent.classList.remove('active');
                  if (dropdown) {
                    dropdown.classList.remove('show');
                    dropdown.style.display = 'none';
                  }
                } else {
                  parent.classList.add('active');
                  if (dropdown) {
                    dropdown.classList.add('show');
                    dropdown.style.display = 'block';
                  }
                }
              };
            });

            secondLevelLinks.forEach(function(link) {
              link.onclick = function(e) {
                var secondLevel = link.nextElementSibling;

                if (secondLevel && secondLevel.classList.contains('second-level')) {
                  e.preventDefault();
                  e.stopPropagation();

                  var parent = link.parentElement;
                  var isOpen = parent.classList.contains('active');

                  Array.from(parent.parentElement.children).forEach(function(item) {
                    if (item !== parent && item.classList && item.classList.contains('unique-dropdown-item')) {
                      item.classList.remove('active');
                      item.querySelectorAll('.second-level').forEach(function(menu) {
                        menu.classList.remove('show');
                        menu.style.display = 'none';
                      });
                    }
                  });

                  if (isOpen) {
                    parent.classList.remove('active');
                    secondLevel.classList.remove('show');
                    secondLevel.style.display = 'none';
                  } else {
                    parent.classList.add('active');
                    secondLevel.classList.add('show');
                    secondLevel.style.display = 'block';
                  }
                }
              };
            });
          } else {
            navItems.forEach(function(item) {
              item.classList.remove('active');
            });
            allDropdowns.forEach(function(menu) {
              menu.classList.remove('show');
              menu.removeAttribute('style');
            });
          }
        }

        initMobileNav();

        window.addEventListener('resize', function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(initMobileNav, 250);
        });
      });
    </script>



  </header>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vision Multispeciality Dental Hospital — Guntur</title>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
<style>
  :root{
    --blue:#004a99;
    --plum:#6a2b5f;
    --ink:#111111;
    --paper:#fdfdfd;
    --blue-tint:#eaf1fb;
    --plum-tint:#f5eaf1;
    --line:#e2e2e2;
    --muted:#5c5c5c;
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    background:var(--paper);
    color:var(--ink);
    font-family:'Inter',sans-serif;
    font-size:1rem;
    line-height:1.65;
  }
  h1,h2,h3,.display-font{
    font-family:'Fraunces',serif;
    letter-spacing:-0.01em;
  }
  .eyebrow{
    font-family:'IBM Plex Mono',monospace;
    font-size:0.72rem;
    letter-spacing:0.16em;
    text-transform:uppercase;
    color:var(--plum);
    display:flex;
    align-items:center;
    gap:.5rem;
  }
  .eyebrow::before{
    content:"";
    width:22px;height:1px;background:var(--plum);
    display:inline-block;
  }
  a{color:var(--blue);}
  .btn-primary{
    background:var(--blue);
    border-color:var(--blue);
    font-weight:600;
    border-radius:2px;
    padding:.75rem 1.6rem;
  }
  .btn-primary:hover{background:#003a79;border-color:#003a79;}
  .btn-outline-plum{
    border:1.5px solid var(--plum);
    color:var(--plum);
    font-weight:600;
    border-radius:2px;
    padding:.7rem 1.5rem;
    background:transparent;
  }
  .btn-outline-plum:hover{background:var(--plum);color:#fff;}

  /* ---------- NAV ---------- */
  .navbar{
    background:var(--paper);
    border-bottom:1px solid var(--line);
    padding:.9rem 0;
  }
  .brand-mark{
    font-family:'Fraunces',serif;
    font-weight:600;
    font-size:1.25rem;
    color:var(--ink);
  }
  .brand-mark span{color:var(--blue);}
  .nav-link{
    font-weight:500;
    font-size:.92rem;
    color:var(--ink) !important;
    margin:0 .6rem;
  }
  .nav-link:hover{color:var(--blue) !important;}

  /* ---------- HERO ---------- */
  .hero{
    background:linear-gradient(180deg,var(--blue-tint) 0%, var(--paper) 78%);
    position:relative;
    overflow:hidden;
    padding-top:4.5rem;
  }
  .hero h1{
    font-size:clamp(2.3rem,4.6vw,3.6rem);
    font-weight:600;
    color:var(--ink);
  }
  .hero h1 em{
    font-style:normal;
    color:var(--blue);
    border-bottom:3px solid var(--plum);
  }
  .hero p.lead{
    color:var(--muted);
    max-width:34rem;
    font-size:1.08rem;
  }
  .hero-stats{
    display:flex;
    gap:2.2rem;
    margin-top:2.4rem;
    flex-wrap:wrap;
  }
  .hero-stats div strong{
    display:block;
    font-family:'Fraunces',serif;
    font-size:1.7rem;
    color:var(--blue);
  }
  .hero-stats div span{
    font-size:.78rem;
    color:var(--muted);
    text-transform:uppercase;
    letter-spacing:.06em;
  }

  /* ---------- ARCH DIVIDER (signature element) ---------- */
  .arch-divider{width:100%;display:block;}

  /* ---------- SECTION ---------- */
  section{padding:5rem 0;}
  .section-title{
    font-size:clamp(1.7rem,3vw,2.3rem);
    font-weight:600;
    margin-top:.4rem;
    margin-bottom:1rem;
  }
  .section-lead{color:var(--muted);max-width:38rem;}

  /* ---------- SERVICE CARDS ---------- */
  .svc-card{
    border:1px solid var(--line);
    background:var(--paper);
    padding:1.6rem 1.4rem;
    height:100%;
    transition:.25s ease;
    border-radius:2px;
  }
  .svc-card:hover{
    border-color:var(--blue);
    box-shadow:0 10px 24px -14px rgba(0,74,153,.35);
    transform:translateY(-3px);
  }
  .svc-card i{
    font-size:1.4rem;
    color:var(--plum);
  }
  .svc-card h3{
    font-family:'Inter',sans-serif;
    font-size:1.02rem;
    font-weight:600;
    margin:.8rem 0 .3rem;
  }
  .svc-card p{font-size:.86rem;color:var(--muted);margin:0;}

  /* ---------- TECH STRIP ---------- */
  .tech-section{
    background:var(--ink);
    color:var(--paper);
  }
  .tech-section .eyebrow{color:#c9a9be;}
  .tech-section .eyebrow::before{background:#c9a9be;}
  .tech-item{
    border-top:1px solid #333;
    padding:1.1rem 0;
    display:flex;
    align-items:center;
    gap:1rem;
  }
  .tech-item:last-child{border-bottom:1px solid #333;}
  .tech-item i{color:var(--plum-tint);font-size:1.15rem;width:28px;text-align:center;}
  .tech-item span{font-size:.95rem;}

  /* ---------- WHY CHOOSE ---------- */
  .why-item{
    display:flex;
    gap:.9rem;
    padding:1rem 0;
    border-bottom:1px solid var(--line);
  }
  .why-item i{color:var(--blue);font-size:1.1rem;margin-top:.15rem;}
  .why-item h4{font-size:.98rem;font-weight:600;margin:0 0 .2rem;}
  .why-item p{font-size:.85rem;color:var(--muted);margin:0;}

  /* ---------- COVERAGE / AREAS ---------- */
  .coverage{background:var(--plum-tint);}
  .area-pill{
    display:inline-block;
    font-size:.78rem;
    padding:.35rem .75rem;
    margin:.22rem;
    border:1px solid rgba(106,43,95,.3);
    color:var(--plum);
    background:#fff;
    border-radius:20px;
  }
  .coverage-map-note{
    font-size:.82rem;
    color:var(--muted);
  }

  /* ---------- CTA BANNER ---------- */
  .cta-banner{
    background:var(--blue);
    color:#fff;
    text-align:center;
    padding:4rem 0;
  }
  .cta-banner h2{font-size:clamp(1.6rem,3.4vw,2.2rem);}
  .cta-banner .btn-light{
    font-weight:600;
    border-radius:2px;
    padding:.8rem 2rem;
    color:var(--blue);
  }
  .keyword-line{
    font-size:.85rem;
    color:#cfe0f5;
    max-width:44rem;
    margin:1rem auto 0;
  }

  /* ---------- FOOTER ---------- */
  footer{
    background:var(--ink);
    color:#bdbdbd;
    padding:2.6rem 0 1.4rem;
    font-size:.85rem;
  }
  footer h5{color:#fff;font-family:'Fraunces',serif;font-weight:600;font-size:1.05rem;}
  footer a{color:#bdbdbd;text-decoration:none;}
  footer a:hover{color:var(--plum-tint);}
  .foot-line{border-top:1px solid #2c2c2c;margin-top:2rem;padding-top:1.2rem;font-size:.76rem;color:#7c7c7c;}

  @media (max-width:767px){
    section{padding:3.2rem 0;}
    .hero{padding-top:2rem;}
  }
</style>
</head>
<body>

<!-- NAV -->
<!-- <nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand brand-mark" href="#">Vision <span>Dental</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="nav">
      <a class="nav-link" href="#services">Treatments</a>
      <a class="nav-link" href="#technology">Technology</a>
      <a class="nav-link" href="#why">Why Us</a>
      <a class="nav-link" href="#coverage">Areas We Serve</a>
      <a class="btn btn-primary ms-lg-3 mt-2 mt-lg-0" href="#book">Book Consultation</a>
    </div>
  </div>
</nav> -->

<!-- HERO -->
<header class="hero">
  <div class="container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <p class="eyebrow">Guntur's Multispeciality Dental Hospital</p>
        <h1 class="mt-3">A healthy smile, <em>trusted across Guntur</em></h1>
        <p class="lead mt-3">From Brodipet to Tadepalli, Mangalagiri to Chinakakani — families choose Vision Multispeciality Dental Hospital for advanced technology, experienced specialists and honest, personalised treatment plans.</p>
        <div class="d-flex gap-3 flex-wrap mt-4">
          <a href="appointment.php" class="btn btn-primary">Book Your Consultation</a>

           <a href="treatment-in-vision-multispeciality-dental-hospital.php" class="btn btn-primary">Explore Treatments</a>
          <!-- <a href="treatment-in-vision-multispeciality-dental-hospital.php" class="btn btn-outline-plum">Explore Treatments</a> -->
        </div>
        <div class="hero-stats">
          <div><strong>16+</strong><span>Dental Treatments</span></div>
          <div><strong>60+</strong><span>Localities Served</span></div>
          <div><strong>CBCT</strong><span>3D Digital Imaging</span></div>
        </div>
      </div>
      <div class="col-lg-5">
        <svg viewBox="0 0 360 340" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto;">
          <path d="M40 260 C 40 120, 320 120, 320 260" fill="none" stroke="#004a99" stroke-width="2" opacity="0.25"/>
          <g>
            <!-- stylised upper dental arch made of 10 tooth blocks -->
            <path d="M50 250 Q 180 60 310 250" fill="none" stroke="#6a2b5f" stroke-width="1.5" stroke-dasharray="4 5" opacity="0.5"/>
            <g fill="#fdfdfd" stroke="#004a99" stroke-width="2">
              <rect x="42" y="228" width="26" height="34" rx="8"/>
              <rect x="72" y="196" width="26" height="40" rx="8"/>
              <rect x="103" y="160" width="27" height="46" rx="9"/>
              <rect x="135" y="132" width="28" height="50" rx="9"/>
              <rect x="168" y="120" width="28" height="52" rx="9" stroke="#6a2b5f"/>
              <rect x="200" y="132" width="28" height="50" rx="9"/>
              <rect x="232" y="160" width="27" height="46" rx="9"/>
              <rect x="263" y="196" width="26" height="40" rx="8"/>
              <rect x="293" y="228" width="26" height="34" rx="8"/>
            </g>
          </g>
          <text x="180" y="305" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" fill="#5c5c5c" letter-spacing="1">GUIDED · DIGITAL · PRECISE</text>
        </svg>
      </div>
    </div>
  </div>
</header>

<!-- ARCH DIVIDER -->
<svg class="arch-divider" viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 0 Q 360 60 720 20 T 1440 0 V60 H0 Z" fill="#eaf1fb"/>
</svg>

<!-- SERVICES -->
<section id="services">
  <div class="container">
    <p class="eyebrow">Comprehensive Care</p>
    <h2 class="section-title">Complete dental care, under one roof</h2>
    <p class="section-lead">Personalised treatment plans for every age group — from routine check-ups to complete smile transformations.</p>
    <div class="row g-3 mt-3">
      <!-- 16 treatments -->
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-bezier2"></i><h3>Dental Implants</h3><p>Long-lasting, natural-feeling replacements.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-grid-3x3"></i><h3>Full Mouth Rehabilitation</h3><p>Complete restoration of form and function.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-arrows-collapse"></i><h3>Invisalign & Clear Aligners</h3><p>Straighten teeth without metal braces.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-stars"></i><h3>Smile Designing</h3><p>Custom smile makeovers, planned digitally.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-activity"></i><h3>Root Canal Treatment</h3><p>Pain-free, precise endodontic care.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-scissors"></i><h3>Wisdom Tooth Removal</h3><p>Safe, guided extraction procedures.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-lightning-charge"></i><h3>Laser Dentistry</h3><p>Minimally invasive, faster healing.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-gem"></i><h3>Cosmetic Dentistry</h3><p>Aesthetic solutions for a confident smile.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-shield-check"></i><h3>Dental Veneers</h3><p>Thin shells for a flawless smile line.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-diamond"></i><h3>Zirconia Crowns</h3><p>Strong, tooth-coloured crowns.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-brightness-high"></i><h3>Teeth Whitening</h3><p>Safe, visible brightening in one visit.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-emoji-smile"></i><h3>Children's Dentistry</h3><p>Gentle, child-friendly dental care.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-heart-pulse"></i><h3>Gum Disease Treatment</h3><p>Restoring healthy gums and support.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-camera"></i><h3>Digital Smile Design</h3><p>Preview your new smile before treatment.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-calendar-check"></i><h3>Preventive Dental Care</h3><p>Regular care to avoid bigger problems.</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-card"><i class="bi bi-exclamation-circle"></i><h3>Emergency Dental Care</h3><p>Prompt attention when it matters most.</p></div></div>
    </div>
  </div>
</section>

<!-- TECHNOLOGY -->
<section id="technology" class="tech-section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <p class="eyebrow">Precision, Built In</p>
        <h2 class="section-title" style="color:#fdfdfd;">Advanced technology for better outcomes</h2>
        <p style="color:#bdbdbd;max-width:30rem;">We combine clinical expertise with modern technology for accurate diagnosis, comfortable treatment, faster results and reduced chair time.</p>
      </div>
      <div class="col-lg-7">
        <div class="tech-item"><i class="bi bi-badge-3d"></i><span>Digital CBCT 3D Imaging</span></div>
        <div class="tech-item"><i class="bi bi-file-earmark-medical"></i><span>Digital OPG X-Ray</span></div>
        <div class="tech-item"><i class="bi bi-cpu"></i><span>Intraoral Scanner</span></div>
        <div class="tech-item"><i class="bi bi-lightning"></i><span>Laser Dentistry</span></div>
        <div class="tech-item"><i class="bi bi-vector-pen"></i><span>Digital Smile Design</span></div>
        <div class="tech-item"><i class="bi bi-crosshair"></i><span>Guided Implant Surgery</span></div>
        <div class="tech-item"><i class="bi bi-box"></i><span>3D Printing Technology</span></div>
        <div class="tech-item"><i class="bi bi-droplet-half"></i><span>International Sterilisation Protocols</span></div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section id="why">
  <div class="container">
    <p class="eyebrow">Why Patients Choose Us</p>
    <h2 class="section-title">Care built around trust</h2>
    <div class="row g-4 mt-2">
      <div class="col-md-6">
        <div class="why-item"><i class="bi bi-award"></i><div><h4>Experienced Specialists</h4><p>Highly qualified dentists across every discipline.</p></div></div>
        <div class="why-item"><i class="bi bi-cpu-fill"></i><div><h4>Advanced Technology</h4><p>Digital tools for accurate, efficient treatment.</p></div></div>
        <div class="why-item"><i class="bi bi-person-check"></i><div><h4>Personalised Plans</h4><p>Treatment tailored to your specific needs.</p></div></div>
        <div class="why-item"><i class="bi bi-house-heart"></i><div><h4>Comfortable Environment</h4><p>A hygienic, calming space for every visit.</p></div></div>
      </div>
      <div class="col-md-6">
        <div class="why-item"><i class="bi bi-chat-square-text"></i><div><h4>Transparent Explanations</h4><p>Clear communication before every procedure.</p></div></div>
        <div class="why-item"><i class="bi bi-calendar2-week"></i><div><h4>Flexible Scheduling</h4><p>Appointments that work around your day.</p></div></div>
        <div class="why-item"><i class="bi bi-credit-card"></i><div><h4>EMI Facilities</h4><p>Affordable options for eligible procedures.</p></div></div>
        <div class="why-item"><i class="bi bi-emoji-smile-upside-down"></i><div><h4>Long-Term Oral Health</h4><p>Focused on results that last for years.</p></div></div>
      </div>
    </div>
  </div>
</section>

<!-- COVERAGE / AREAS -->
<section id="coverage" class="coverage">
  <div class="container">
    <p class="eyebrow">Conveniently Accessible</p>
    <h2 class="section-title">Serving Guntur and the capital region</h2>
    <p class="section-lead coverage-map-note">Patients travel to us every month from across Guntur city, its developing suburbs and nearby districts — with excellent road connectivity and ample parking.</p>
    <div class="mt-4">
      <span class="area-pill">Amaravathi Road</span><span class="area-pill">Ankireddypalem</span><span class="area-pill">APHB Colony</span><span class="area-pill">Arundelpet</span><span class="area-pill">Ashok Nagar</span><span class="area-pill">AT Agraharam</span><span class="area-pill">Autonagar</span><span class="area-pill">Balaji Nagar</span><span class="area-pill">Basava Taraka Rama Nagar</span><span class="area-pill">Bharatpet</span><span class="area-pill">Brodipet</span><span class="area-pill">Brindavan Gardens</span><span class="area-pill">Budampadu</span><span class="area-pill">Chandramouli Nagar</span><span class="area-pill">Chinakakani</span><span class="area-pill">Chowdavaram</span><span class="area-pill">Etukuru</span><span class="area-pill">Gandhi Nagar</span><span class="area-pill">Gorantla</span><span class="area-pill">Gujjanagundla</span><span class="area-pill">GV Thota</span><span class="area-pill">Jonnalagadda</span><span class="area-pill">Kanna Vari Thota</span><span class="area-pill">Kaza</span><span class="area-pill">Koritepadu</span><span class="area-pill">Koppuravuru</span><span class="area-pill">Kothapet</span><span class="area-pill">Krishna Nagar</span><span class="area-pill">Lala Pet</span><span class="area-pill">Lakshmipuram</span><span class="area-pill">Lam</span><span class="area-pill">Mangalagiri</span><span class="area-pill">Mirchi Yard</span><span class="area-pill">Nallacheruvu</span><span class="area-pill">Nallapadu</span><span class="area-pill">Namburu</span><span class="area-pill">Navabharat Nagar</span><span class="area-pill">Neerukonda</span><span class="area-pill">Old Guntur</span><span class="area-pill">Pattabhipuram</span><span class="area-pill">Pedakakani</span><span class="area-pill">Pedapalakaluru</span><span class="area-pill">Perecherla</span><span class="area-pill">R Agraharam</span><span class="area-pill">Reddypalem</span><span class="area-pill">Shankar Vilas</span><span class="area-pill">Sitarama Nagar</span><span class="area-pill">Srinivasa Rao Thota</span><span class="area-pill">Swarnabharathi Nagar</span><span class="area-pill">SVN Colony</span><span class="area-pill">Syamala Nagar</span><span class="area-pill">Tadikonda</span><span class="area-pill">Tadepalli</span><span class="area-pill">Tobacco Market Area</span><span class="area-pill">Undavalli</span><span class="area-pill">Venigandla</span><span class="area-pill">Venugopal Nagar</span><span class="area-pill">Vidyanagar</span><span class="area-pill">Vijayapuri Colony</span><span class="area-pill">Vinjanampadu</span><span class="area-pill">Vaddeswaram</span>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="book" class="cta-banner">
  <div class="container">
    <p class="eyebrow" style="color:#a9c6ea;justify-content:center;">Book Your Consultation</p>
    <p class="eyebrow" style="display:none;"></p>
    <h2 class="mt-2 mb-3">Searching for the best dental hospital in Guntur?</h2>
    <a href="tel:+9193914 57072" class="btn btn-success"><i class="bi bi-telephone-fill me-2"></i>Schedule Your Consultation</a>
    <p class="keyword-line">Dental implants in Guntur · Invisalign treatment · Smile designing · Root canal treatment · Laser dentistry — ethical, evidence-based, patient-centred care for individuals and families across Guntur.</p>
  </div>
</section>

<!-- FOOTER -->
<!-- <footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <h5>Vision Multispeciality Dental Hospital</h5>
        <p class="mt-2">Advanced dentistry, delivered with care — for Guntur and the surrounding region.</p>
      </div>
      <div class="col-md-4">
        <h5>Explore</h5>
        <p class="mt-2 mb-1"><a href="#services">Treatments</a></p>
        <p class="mb-1"><a href="#technology">Technology</a></p>
        <p class="mb-1"><a href="#why">Why Choose Us</a></p>
        <p class="mb-1"><a href="#coverage">Areas We Serve</a></p>
      </div>
      <div class="col-md-4">
        <h5>Visit Us</h5>
        <p class="mt-2 mb-1">Guntur, Andhra Pradesh</p>
        <p class="mb-1">Open for consultations — flexible scheduling</p>
      </div>
    </div>
    <div class="foot-line">© 2026 Vision Multispeciality Dental Hospital, Guntur. All rights reserved.</div>
  </div>
</footer> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



