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
                    <div class="col-md-5 col-lg-5 order-md-0 order-2">
                        <div class="bannerSec_cnt">
                            <h1>Transform with Purpose, Automate with AI Agents</h1>
                            <p>Effortlessly automate complex processes and solve real-world business problems with
                                AI-driven actionable insights</p>
                            <a href="<?php echo BASE_URL ?>/solutions" class="btn btn-light btn-rounded d-inline-flex">
                                Know More <em class="icon-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 order-md-2 order-1">
                        <div class="swiper-container fadeSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider-1.png" class="w-100"
                                        alt="banner-slider" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider-2.png" class="w-100"
                                        alt="banner-slider" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo IMAGES_URL ?>/homepage/banner-slider-3.png" class="w-100"
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
                                        <div class="col-md-6 col-lg-5 order-md-0 order-2 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Financial Wealth<br /> Management</h3>
                                                <p>Discover how a leading wealth management firm deployed AIRA
                                                    Intelligent
                                                    Automation to gain a <span class="font-bd">360°</span> view of
                                                    client assets, boosting <span class="font-bd">operational
                                                        efficiency by 75%,</span> while clients enjoyed instant,
                                                    personalised portfolio
                                                    insights anytime, anywhere</p>
                                                <a href="<?php echo BASE_URL ?>/resources/case-study-details.php"
                                                    class="btn btn-warning btn-rounded d-inline-flex">
                                                    Know More <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 order-md-0 order-1 h-100">
                                            <div class="trustedSwiper_right ms-auto">
                                                <img src="<?php echo IMAGES_URL ?>/homepage/trusted-slider-1.png"
                                                    alt="trusted-slider" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-5 order-md-0 order-2 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Telecommunications </h3>
                                                <p>Gain insights into how a major telecom provider automated <span
                                                        class="font-bd">80%</span> of
                                                    customer interactions, <span class="font-bd">reducing wait times by
                                                        60%</span> and enhancing service
                                                    with <span class="font-bd">24/7 AIRA AI agents</span></p>
                                                <a href="<?php echo BASE_URL ?>/resources/case-study-details.php"
                                                    class="btn btn-warning btn-rounded d-inline-flex">
                                                    Know More <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 order-md-0 order-1 h-100">
                                            <div class="trustedSwiper_right ms-auto">
                                                <img src="<?php echo IMAGES_URL ?>/homepage/trusted-slider-2.png"
                                                    alt="trusted-slider" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-5 order-md-0 order-2 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Manufacturing </h3>
                                                <p>Find out how a leading manufacturer achieved operational excellence
                                                    by integrating AIRA intelligent document processing (IDP) with
                                                    generative AI to improve <span class="font-bd">order fulfilment
                                                        speed by 50%</span></p>
                                                <a href="<?php echo BASE_URL ?>/resources/case-study-details.php"
                                                    class="btn btn-warning btn-rounded d-inline-flex">
                                                    Know More <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-7 order-md-0 order-1 h-100">
                                            <div class="trustedSwiper_right ms-auto">
                                                <img src="<?php echo IMAGES_URL ?>/homepage/trusted-slider-3.png"
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
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
                <div class="commonTabVert">
                    <ul class="commonTabVert_top nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="industries-tab" data-bs-toggle="pill"
                                data-bs-target="#industries" type="button" role="tab" aria-controls="industries"
                                aria-selected="true">Industries</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="departments-tab" data-bs-toggle="pill"
                                data-bs-target="#departments" type="button" role="tab" aria-controls="departments"
                                aria-selected="false">Departments</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="industries" role="tabpanel"
                            aria-labelledby="industries-tab" tabindex="0">
                            <div class="commonTabVert_mid commonBorder row align-items-start g-0">
                                <div class="col-md-12 col-lg-12 col-xl-4 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link d-flex align-items-center active" id="v-manufacturing-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-manufacturing" type="button" role="tab"
                                        aria-controls="v-manufacturing" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/tool.png" height="28"
                                                alt="tool" />
                                        </div>
                                        Manufacturing
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-banking-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-banking" type="button" role="tab"
                                        aria-controls="v-banking" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/bank.png" height="28"
                                                alt="bank" />
                                        </div>
                                        Banking, Finance & Insurance
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-telecom-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-telecom" type="button" role="tab"
                                        aria-controls="v-telecom" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/phone.png" height="28"
                                                alt="phone" />
                                        </div>
                                        Telecom
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-retail-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-retail" type="button" role="tab"
                                        aria-controls="v-retail" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/shopping-cart.png"
                                                height="28" alt="shopping-cart" />
                                        </div>
                                        Retail
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-healthcare-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-healthcare" type="button" role="tab"
                                        aria-controls="v-healthcare" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/heart-pulse.png"
                                                height="28" alt="heart-pulse" />
                                        </div>
                                        Healthcare
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-pharma-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pharma" type="button" role="tab"
                                        aria-controls="v-pharma" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/pills.png" height="28"
                                                alt="pills" />
                                        </div>
                                        Pharma
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-hospitality-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-hospitality" type="button" role="tab"
                                        aria-controls="v-hospitality" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/bed.png" width="29"
                                                height="20" alt="bed" />
                                        </div>
                                        Hospitality
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-textiles-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-textiles" type="button" role="tab"
                                        aria-controls="v-textiles" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/football-shirt.png"
                                                height="28" alt="football-shirt" />
                                        </div>
                                        Textiles
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-oil-gas-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-oil-gas" type="button" role="tab"
                                        aria-controls="v-oil-gas" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/flask-round.png"
                                                height="28" alt="flask-round" />
                                        </div>
                                        Oil & Gas
                                    </button>

                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-8 tab-content" id="v-pills-tabContent">
                                    <!-- 1 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade show active" id="v-manufacturing"
                                        role="tabpanel" aria-labelledby="v-manufacturing-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/manufacturing.png"
                                                alt="manufacturing" />
                                            <div class="tabContent_cnt">
                                                <h3>Redefine what’s possible in production.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/manufacturing.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-50%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Downtime Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Cost Savings</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Operational Efficiency</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">5-15%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Enhanced Revenues</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-banking" role="tabpanel"
                                        aria-labelledby="v-banking-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/banking.png"
                                                alt="banking" />
                                            <div class="tabContent_cnt">
                                                <h3>Move beyond just counting and calculating.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/bfsi.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-40%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Financial Risk Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-40%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Regulatory Compliance</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Higher Customer Satisfaction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-telecom" role="tabpanel"
                                        aria-labelledby="v-telecom-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/telecom.png"
                                                alt="telecom" />
                                            <div class="tabContent_cnt">
                                                <h3>Transform the way the world connects.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/telecom.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">5-15%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Network Uptime</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Improved Network Capacity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-40%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Maintenance Costs Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Customer Experience</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-retail" role="tabpanel"
                                        aria-labelledby="v-retail-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/retail.png"
                                                alt="retail" />
                                            <div class="tabContent_cnt">
                                                <h3>Elevate the shopping experience.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/retail.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Higher Sales & Revenue</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-40%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Financial Risk Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Higher Customer Satisfaction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-healthcare" role="tabpanel"
                                        aria-labelledby="v-healthcare-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/healthcare.png"
                                                alt="healthcare" />
                                            <div class="tabContent_cnt">
                                                <h3>Move beyond just treating and healing.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/healthcare.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Resource Allocation</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Improved Operational Efficiency</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Costs Savings</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">30-70%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Patient Outcomes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-pharma" role="tabpanel"
                                        aria-labelledby="v-pharma-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/pharma.png"
                                                alt="pharma" />
                                            <div class="tabContent_cnt">
                                                <h3>Accelerate innovation in medicine.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/pharma.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduction in Inventory Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">2-5%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Enhanced Market Share</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Launch Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-15%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Enhanced Customer Satisfaction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 7 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-hospitality" role="tabpanel"
                                        aria-labelledby="v-hospitality-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/hospitality.png"
                                                alt="hospitality" />
                                            <div class="tabContent_cnt">
                                                <h3>Revolutionize guest experiences.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/hospitality.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Increased Revenues</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Enhanced Brand Perception</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Increased Operational Efficiency</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 8 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-textiles" role="tabpanel"
                                        aria-labelledby="v-textiles-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/textiles.png"
                                                alt="textiles" />
                                            <div class="tabContent_cnt">
                                                <h3>Weave innovation into tradition.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/textiles.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Revenue Enhancement</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Higher Average Order Value</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Inventory Cost Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Order Lead Times</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 9 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-oil-gas" role="tabpanel"
                                        aria-labelledby="v-oil-gas-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/oil-gas.png"
                                                alt="oil-gas" />
                                            <div class="tabContent_cnt">
                                                <h3>Move beyond just drilling and refining.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/industries/oil-gas.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">5-15%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Increased Production Rates</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0"> Lower Inventory Holding Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 ">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-15%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Environmental Compliance</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="departments" role="tabpanel" aria-labelledby="departments-tab"
                            tabindex="0">
                            <div class="commonTabVert_mid commonBorder row align-items-start g-0">
                                <div class="col-md-12 col-lg-12 col-xl-4 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link d-flex align-items-center active" id="v-datacenter-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-datacenter" type="button" role="tab"
                                        aria-controls="v-datacenter" aria-selected="true">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/database.png" height="28"
                                                alt="database" />
                                        </div>
                                        Data Center
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-logistics-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-logistics" type="button" role="tab"
                                        aria-controls="v-logistics" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/truck.png" height="28"
                                                alt="truck" />
                                        </div>
                                        Logistics
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-it-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-it" type="button" role="tab"
                                        aria-controls="v-it" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/laptop-code.png"
                                                height="28" alt="laptop-code" />
                                        </div>
                                        IT
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-hr-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-hr" type="button" role="tab"
                                        aria-controls="v-hr" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/user-search.png"
                                                height="28" alt="user-search" />
                                        </div>
                                        HR
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-supply-chain-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-supply-chain" type="button" role="tab"
                                        aria-controls="v-supply-chain" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/box-check.png" height="28"
                                                alt="box-check" />
                                        </div>
                                        Supply Chain
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-finance-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-finance" type="button" role="tab"
                                        aria-controls="v-finance" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/dollar-square.png"
                                                height="28" alt="dollar-square" />
                                        </div>
                                        Finance
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-sales-marketing-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-sales-marketing" type="button"
                                        role="tab" aria-controls="v-sales-marketing" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/chart-pie.png" width="29"
                                                height="29" alt="chart-pie" />
                                        </div>
                                        Sales and Marketing
                                    </button>

                                    <button class="nav-link d-flex align-items-center" id="v-customer-support-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-customer-support" type="button"
                                        role="tab" aria-controls="v-customer-support" aria-selected="false">
                                        <div class="iconBox">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/icons/hand-holding-user.png"
                                                height="28" alt="hand-holding-user" />
                                        </div>
                                        Customer Support
                                    </button>

                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-8 tab-content" id="v-pills-tabContent">
                                    <!-- 1 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade show active" id="v-datacenter"
                                        role="tabpanel" aria-labelledby="v-datacenter-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/datacenter.png"
                                                alt="datacenter" />
                                            <div class="tabContent_cnt">
                                                <h3>Elevate above storage and servers.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/datacenter.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Downtime Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Lower Energy Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-35%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Increased Resource Utilization</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved SLA Compliance</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-logistics" role="tabpanel"
                                        aria-labelledby="v-logistics-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/logistics.png"
                                                alt="logistics" />
                                            <div class="tabContent_cnt">
                                                <h3>Step past delivering and tracking.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/logistics.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Inventory Costs Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-35%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Operational Efficiency</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Order Fulfillment Speed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-it" role="tabpanel"
                                        aria-labelledby="v-it-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/it.png" alt="it" />
                                            <div class="tabContent_cnt">
                                                <h3>Transform beyond maintaining and supporting.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/it-department.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-40%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Downtime Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-40%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved MTTR</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Infrastructure Costs </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-hr" role="tabpanel"
                                        aria-labelledby="v-hr-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/hr.png" alt="hr" />
                                            <div class="tabContent_cnt">
                                                <h3>Rise above hiring and managing.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/hr.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Recruitment Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Increased Employee Productivity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced
                                                                Time-to-Hire </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Attrition </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-supply-chain" role="tabpanel"
                                        aria-labelledby="v-supply-chain-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/supply-chain.png"
                                                alt="supply-chain" />
                                            <div class="tabContent_cnt">
                                                <h3>Advance past planning and procuring.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/supply-chain.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Inventory Costs Reduction</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Operational Efficiency</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">30-50%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Supply Chain Disruptions </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-finance" role="tabpanel"
                                        aria-labelledby="v-finance-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/finance.png"
                                                alt="finance" />
                                            <div class="tabContent_cnt">
                                                <h3>Go further than balancing and allocating.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/finance.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6 col-lg-3">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Enhanced Cashflow Management </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6 col-lg-3">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved Operational Efficiency </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">5-15%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Faster Risk Mitigation </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 7 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-sales-marketing"
                                        role="tabpanel" aria-labelledby="v-sales-marketing-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/sales-and-marketing.png"
                                                alt="sales-and-marketing" />
                                            <div class="tabContent_cnt">
                                                <h3>Move ahead of pitching and persuading.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/sales-and-marketing.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Higher Revenues & Profitability </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Churn</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Enhanced Customer Lifetime Value </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Marketing Operational Costs </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 8 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade" id="v-customer-support"
                                        role="tabpanel" aria-labelledby="v-customer-support-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/customer-support.png"
                                                alt="customer-support" />
                                            <div class="tabContent_cnt">
                                                <h3>Progress past answering and assisting.</h3>
                                                <a href="<?php echo BASE_URL ?>/solutions/departments/customer-support.php"
                                                    class="btn btn-warning btn-rounded position-relative d-inline-flex">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </a>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">20-30%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Average Resolution Time </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">10-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Customer Churn</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/up-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-20%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Improved First Contact Resolution (FCR) Rate
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="btmCard w-100">
                                                        <div class="btmCard_head d-flex align-items-center">
                                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/down-arrow.png"
                                                                width="36" height="36" alt="icon"
                                                                class="w-auto flex-shrink-0">
                                                            <span class="btmCard_text">15-25%</span>
                                                        </div>
                                                        <div class="btmCard_btm">
                                                            <p class="mb-0">Reduced Customer Support costs </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!! Use Cases that work - We've got you covered -->

        <!-- Innovate with AIRA AI Agents -->
        <section class="innovateSec py-80">
            <div class="container">
                <div class="commonHead text-center">
                    <h2 class="commonHead_title">Innovate with AIRA AI Agents</h2>
                </div>
                <!-- innovate section 1  -->
                <div class="row align-items-center py-80 pt-0">
                    <div class="col-md-6 col-lg-5 col-sm-12 order-md-0 order-2">
                        <h3 class="commonSubHead">All-in-one, All that you need</h3>
                        <ul class="commonList">
                            <li>Intuitive User Interface</li>
                            <li>Real-time Data Integration</li>
                            <li>Customizable AI Models</li>
                            <li>Task-based AI Agents</li>
                            <li>Interactive User Input Forms</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-7 col-sm-12 order-md-0 order-1 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-1.png" class="w-100"
                                alt="innovate-one" />
                            <a href="<?php echo BASE_URL?>/product/workflow.php" class="btn btn-warning btn-rounded d-inline-flex">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- innovate section 2  -->
                <div class="row align-items-center py-80 pt-0">
                    <div class="col-md-6 col-lg-7 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-2.png" class="w-100"
                                alt="innovate-one" />
                            <a href="<?php echo BASE_URL?>/product/ai-in-action.php" class="btn btn-warning btn-rounded d-inline-flex right">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 ps-4">
                        <h3 class="commonSubHead">Scale Generative AI to maximize business value</h3>
                        <ul class="commonList">
                            <li>Multi-LLM Support</li>
                            <li>Flexible Adoption</li>
                            <li>Ease of Deployment</li>
                            <li>Multi-Database Selection </li>
                        </ul>
                    </div>
                </div>
                <!-- innovate section 3  -->
                <div class="row align-items-center py-80 pt-0">
                    <div class="col-md-6 col-lg-5 col-sm-12 order-md-0 order-2">
                        <h3 class="commonSubHead">Make AIRA AI Agent your own Virtual Assistant</h3>
                        <ul class="commonList">
                            <li>24/7 Availability</li>
                            <li>Instant Query Responses</li>
                            <li>Action Initiation & Orchestration</li>
                            <li>Third-party Integration</li>
                            <li>Intelligent Case Routing</li>
                            <li>Multilingual Support</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-7 col-sm-12 order-md-0 order-1 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-3.png" class="w-100"
                                alt="innovate-one" />
                            <a href="<?php echo BASE_URL?>/product/ai-agents.php" class="btn btn-warning btn-rounded d-inline-flex top">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- innovate section 4  -->
                <div class="row align-items-center">
                    <div class="col-md-7 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-4.png" class="w-100"
                                alt="innovate-one" />
                            <a href="<?php echo BASE_URL?>/product/intelligent-document-processing.php" class="btn btn-warning btn-rounded d-inline-flex right">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 ps-4">
                        <h3 class="commonSubHead">Automated Document handling with AIRA IDP</h3>
                        <ul class="commonList">
                            <li>Multi-Format Support</li>
                            <li>Document Segregation</li>
                            <li>Multi-Language Support</li>
                            <li>Table Extraction </li>
                            <li>Automated Validation Rules</li>
                            <li>Rules-Based Extraction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--!! Innovate with AIRA AI Agents -->

        <!-- Highly Pre-Integrated Data Connectors  -->
        <section class="dataConnectors py-80">
            <div class="container z-1 glow">
                <h1 class="text-42 text-center font-bd mb-50">Highly Pre-Integrated Data Connectors </h1>
                <div class="dataConnectors_slider mb-4">
                    <div class="swiper dataConnectorsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/sap.png" class="img-fluid"
                                        alt="SAP" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/salesforce.png"
                                        class="img-fluid" alt="salesforce" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/open-ai.png"
                                        class="img-fluid" alt="Open AI" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/hubspot.png"
                                        class="img-fluid" alt="hubspot" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/oracle.png"
                                        class="img-fluid" alt="oracle" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/teams.png"
                                        class="img-fluid" alt="teams" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/shopify.png"
                                        class="img-fluid" alt="shopify" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/sap.png" class="img-fluid"
                                        alt="SAP" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dataConnectors_slider">
                    <div class="swiper dataConnectorsSwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/sap.png" class="img-fluid"
                                        alt="SAP" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/salesforce.png"
                                        class="img-fluid" alt="salesforce" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/open-ai.png"
                                        class="img-fluid" alt="Open AI" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/hubspot.png"
                                        class="img-fluid" alt="hubspot" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/oracle.png"
                                        class="img-fluid" alt="oracle" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/teams.png"
                                        class="img-fluid" alt="teams" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/shopify.png"
                                        class="img-fluid" alt="shopify" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="dataConnectorsBox">
                                    <img src="<?php echo IMAGES_URL ?>/common/data-connector/sap.png" class="img-fluid"
                                        alt="SAP" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dataConnectors_footer">
                    <p>Plug and Play integration with COTS and Legacy Data Systems</p>
                    <a href="<?php echo BASE_URL?>/product/app-integration.php" class="btn btn-warning btn-rounded position-relative d-inline-flex">
                        Know More
                        <em class="icon-arrow-right"></em>
                    </a>
                </div>
            </div>
        </section>
        <!--!! Highly Pre-Integrated Data Connectors  -->
    </main>
    <!-- Footer Component -->
    <?php include 'include/footer.php' ?>
    <?php include 'include/script.php' ?>
    <script>
        var swiper = new Swiper(".fadeSlider", {
            spaceBetween: 30,
            effect: "fade",
            autoplay: { delay: 2000, disableOnInteraction: false },
            loop: true,
            speed: 1000,
        });
        var trustedSwiper = new Swiper(".trustedSwiper", {
            autoplay: true,
            delay: 3500,
            speed: 1500,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>