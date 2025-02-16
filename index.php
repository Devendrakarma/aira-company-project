<!DOCTYPE html>
<html>

<head>
    <?php $pageTitle = 'Home' ?>
    <?php include 'include/head-link.php' ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body class="pt-0">
    <!-- Header Component -->
    <?php include 'include/header.php' ?>
    <main class="mainContent">
        <!-- Banner Section  -->
        <section class="bannerSec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="bannerSec_cnt">
                            <h1>Transform with Purpose, Automate with AI Agents</h1>
                            <p>Effortlessly automate complex processes and solve real-world business problems with
                                AI-driven actionable insights</p>
                            <button class="btn btn-light btn-rounded">
                                Know More <em class="icon-arrow-right"></em>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="swiper-container fadeSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider.png"
                                        alt="banner-slider" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider.png"
                                        alt="banner-slider" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider.png"
                                        alt="banner-slider" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider.png"
                                        alt="banner-slider" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !! Banner Section  -->

        <!-- Trusted by Fortune -->
        <section class="trustedSec py-80">
            <div class="container">
                <div class="commonHead text-center">
                    <h2 class="commonHead_title mb-0">Trusted by Fortune 500 companies and Enterprises alike</h2>
                </div>
                <div class="position-relative">
                    <div class="swiper trustedSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-5 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Financial Wealth<br/> Management</h3>
                                                <p>Discover how a leading wealth management firm deployed AIRA Intelligent
                                                    Automation to gain a <span class="font-bd">360°</span> view of client assets, boosting <span class="font-bd">operational
                                                    efficiency by 75%,</span> while clients enjoyed instant, personalised portfolio
                                                    insights anytime, anywhere</p>
                                                <button class="btn btn-warning btn-rounded">
                                                    Know More <em class="icon-arrow-right"></em>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-7 h-100">
                                            <div class="trustedSwiper_right ms-auto">
                                                <img src="<?php echo IMAGES_URL ?>/homepage/trusted-slider.png"
                                                    alt="trusted-slider" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">Slide 2</div>
                        </div>
                    </div>
                    <div class="swiper-nav d-flex align-items-center">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !! Trusted by Fortune -->
    </main>
    <!-- Footer Component -->
    <?php include 'include/footer.php' ?>
    <script>
        var swiper = new Swiper(".fadeSlider", {
            spaceBetween: 30,
            effect: "fade",
            autoplay: { delay: 2000, disableOnInteraction: false, },
            loop: true,
            speed: 1000,
        });
        var trustedSwiper = new Swiper(".trustedSwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>