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
                                                <h3>Financial Wealth<br /> Management</h3>
                                                <p>Discover how a leading wealth management firm deployed AIRA
                                                    Intelligent
                                                    Automation to gain a <span class="font-bd">360°</span> view of
                                                    client assets, boosting <span class="font-bd">operational
                                                        efficiency by 75%,</span> while clients enjoyed instant,
                                                    personalised portfolio
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
                            <div class="swiper-slide">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-5 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Financial Wealth<br /> Management</h3>
                                                <p>Discover how a leading wealth management firm deployed AIRA
                                                    Intelligent
                                                    Automation to gain a <span class="font-bd">360°</span> view of
                                                    client assets, boosting <span class="font-bd">operational
                                                        efficiency by 75%,</span> while clients enjoyed instant,
                                                    personalised portfolio
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
                        </div>
                    </div>
                    <div class="swiper-nav d-flex align-items-center">
                        <div class="swiper-button swiper-button-next">
                            <em class="icon-next"></em>
                        </div>
                        <div class="swiper-button swiper-button-prev">
                            <em class="icon-prev"></em>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !! Trusted by Fortune -->

        <!-- Solution at your fingertips -->
        <section class="solutionHome py-80 pt-0 bgGrediantSection">
            <div class="container">
                <div class="commonHead text-center">
                    <h2 class="commonHead_title">Solution at your fingertips</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="solutionHomeCard h-100">
                            <div class="solutionHomeCard_img overflow-hidden">
                                <img src="<?php echo IMAGES_URL ?>/homepage/simplify.png" class="img-fluid w-100"
                                    alt="Simplify" />
                            </div>
                            <div class="solutionHomeCard_cnt">
                                <h3>Simplify</h3>
                                <p>Eliminate Redundancies, Focus on Key Metrics, Integrate Data Streams seamlessly</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solutionHomeCard h-100">
                            <div class="solutionHomeCard_img overflow-hidden">
                                <img src="<?php echo IMAGES_URL ?>/homepage/automate.png" class="img-fluid w-100"
                                    alt="Simplify" />
                            </div>
                            <div class="solutionHomeCard_cnt">
                                <h3>Automate</h3>
                                <p>Easily Build Workflows, deploy AI Agents & Trigger Smart Responses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solutionHomeCard h-100">
                            <div class="solutionHomeCard_img overflow-hidden">
                                <img src="<?php echo IMAGES_URL ?>/homepage/transform.png" class="img-fluid w-100"
                                    alt="Simplify" />
                            </div>
                            <div class="solutionHomeCard_cnt">
                                <h3>Transform</h3>
                                <p>Enable end-to-end visibility with AI-powered predictive & real-time insights;
                                    Orchestrate pro-active actions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!! Solution at your fingertips -->

        <!-- Use Cases that work - We've got you covered -->
        <section class="ourWorks py-80 bgGrediantSection">
            <div class="container">
                <div class="commonHead text-center">
                    <h2 class="commonHead_title mb-0">Use Cases that work - We've got you covered</h2>
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Profile</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Home</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Home</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!! Use Cases that work - We've got you covered -->
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