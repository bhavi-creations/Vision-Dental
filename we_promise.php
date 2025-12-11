<?php include 'header.php'; ?>



<main id="main">



    <style>
        /* Define Colors based on the image */
        :root {
            --color-teal: #1abc9c;
            --color-purple: #8e44ad;
            --text-light: #ffffff;
            --text-dark: #333333;
            --circle-bg: #f0f0f0;
            --bg-section: #f0f0f0;
        }

        /* --- Section Styling --- */
        .advantage-main-section {
            padding: 50px 0;
            background-color: var(--bg-section);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            overflow: hidden;
        }

        /* --- Mock Background Image (for the girl's face in the image) --- */
        .mock-background-element {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);

            background: url('https://placehold.co/300x300/f0f0f0/f0f0f0?text=Girl+Image+Placeholder') no-repeat center bottom;
            opacity: 0.1;
            width: 300px;
            height: 300px;
            z-index: 5;
            pointer-events: none;
        }

        /* --- Item Structure and Layout --- */
        .advantage-list-wrapper {
            position: relative;
            z-index: 10;
        }

        .advantage-item-row {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        /* --- Numbering Circle Styling --- */
        .index-circle-wrapper {
            position: relative;
            z-index: 10;
        }

        .item-index-circle {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            color: var(--text-dark);
            font-size: 1.5rem;
          color: white;
            /* color: #1abc9c; */
            background-color: var(--circle-bg);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
            border: 2px solid var(--text-light);
        }


        .item-content-bubble {
            padding: 12px 20px 12px 50px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--text-light);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

            margin-left: -30px;
            flex-grow: 1;
            min-height: 50px;
            display: flex;
            align-items: center;
        }

        /* Colors for Bubbles */
        .bubble-teal {
            background-color: var(--color-teal);
        }

        .bubble-purple {
            background-color: var(--color-purple);
        }

        /* Color matching for the index numbers based on the bubble color (Teal has White/Light Grey number) */
        .bubble-teal+.index-circle-wrapper .item-index-circle {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .bubble-purple+.index-circle-wrapper .item-index-circle {
            color: var(--color-purple);
            background-color: rgba(255, 255, 255, 0.8);
        }


        @media (max-width: 768px) {
            .advantage-item-row {
                justify-content: center;
            }

            .item-content-bubble {
                font-size: 1rem;
            }
        }
    </style>
    </head>

    <body>

        <section class="advantage-main-section">
            <div class="container advantage-list-wrapper">
                <div class="row">

                    <div class="col-md-6  col-lg-4">

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-teal">1</div>
                            </div>
                            <div class="item-content-bubble bubble-teal">Painless Dental Treatments</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-purple">2</div>
                            </div>
                            <div class="item-content-bubble bubble-purple">Highly Ethical Dentistry</div>
                        </div>


                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-teal">3</div>
                            </div>
                            <div class="item-content-bubble bubble-teal">Highest Treatment Quality</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-purple">4</div>
                            </div>
                            <div class="item-content-bubble bubble-purple">Near-Zero Waiting Time</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-teal">5</div>
                            </div>
                            <div class="item-content-bubble bubble-teal">5-step Sterilisation Protocol</div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center d-block d-md-none d-lg-block">
                        <img src="./assets/img/we_promise_2.png" alt="" class="img-fluid">
                        <!-- <img src="assets/img/about/a11.png" class="img-fluid dr_img_padding abouter" alt="" style="border-radius: 4px;"> -->
                    </div>

                    <div class="col-md-6 col-lg-4">

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-purple">6</div>
                            </div>
                            <div class="item-content-bubble bubble-purple">Transparent Pricing Policy</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-teal">7</div>
                            </div>
                            <div class="item-content-bubble bubble-teal">Expert & Experienced Team Of Dentists</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-purple">8</div>
                            </div>
                            <div class="item-content-bubble bubble-purple">Courteous Staff</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-teal">9</div>
                            </div>
                            <div class="item-content-bubble bubble-teal">Excellent Hospitality</div>
                        </div>

                        <div class="advantage-item-row">
                            <div class="index-circle-wrapper">
                                <div class="item-index-circle bubble-purple">10</div>
                            </div>
                            <div class="item-content-bubble bubble-purple">Unforgettable Dental Visit Experience</div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center d-none d-md-block d-lg-none">
                        <img src="./assets/img/we_promise_2.png" alt="" class="img-fluid d-lg-none">
                        <!-- <img src="assets/img/about/a11.png" class="img-fluid dr_img_padding abouter" alt="" style="border-radius: 4px;"> -->
                    </div>
                </div>

                <div class="mock-background-element d-none d-md-block"></div>

            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>



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