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
                                        <div class="col-md-5 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Telecommunications </h3>
                                                <p>Gain insights into how a major telecom provider automated <span class="font-bd">80%</span> of
                                                customer interactions, <span class="font-bd">reducing wait times by 60%</span> and enhancing service
                                                with <span class="font-bd">24/7 AIRA AI agents</span></p>
                                                <button class="btn btn-warning btn-rounded">
                                                    Know More <em class="icon-arrow-right"></em>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-7 h-100">
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
                                        <div class="col-md-5 h-100">
                                            <div class="trustedSwiper_left">
                                                <h3>Manufacturing </h3>
                                                <p>Find out how a leading manufacturer achieved operational excellence by integrating AIRA intelligent document processing (IDP) with generative AI to improve <span class="font-bd">order fulfilment speed by 50%</span></p>
                                                <button class="btn btn-warning btn-rounded">
                                                    Know More <em class="icon-arrow-right"></em>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-7 h-100">
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
                                <div class="col-md-4 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
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
                                <div class="col-md-8 tab-content" id="v-pills-tabContent">
                                    <!-- 1 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade show active" id="v-manufacturing"
                                        role="tabpanel" aria-labelledby="v-manufacturing-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/manufacturing.png"
                                                alt="manufacturing" />
                                            <div class="tabContent_cnt">
                                                <h3>Redefine what’s possible in production.</h3>
                                                <button class="btn btn-warning btn-rounded position-relative">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </button>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <button class="btn btn-warning btn-rounded position-relative">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </button>
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
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="departments" role="tabpanel" aria-labelledby="departments-tab"
                            tabindex="0">
                            <div class="commonTabVert_mid commonBorder row align-items-start g-0">
                                <div class="col-md-4 nav flex-column nav-pills" id="v-pills-tab" role="tablist"
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
                                <div class="col-md-8 tab-content" id="v-pills-tabContent">
                                    <!-- 1 -->
                                    <div class="commonTabVert_mid_tab tab-pane fade show active" id="v-manufacturing"
                                        role="tabpanel" aria-labelledby="v-manufacturing-tab" tabindex="0">
                                        <div class="tabContent position-relative">
                                            <img src="<?php echo IMAGES_URL ?>/homepage/industries/manufacturing.png"
                                                alt="manufacturing" />
                                            <div class="tabContent_cnt">
                                                <h3>Redefine what’s possible in production.</h3>
                                                <button class="btn btn-warning btn-rounded position-relative">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </button>
                                            </div>
                                            <div class="tabContent_btm row g-3">
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <button class="btn btn-warning btn-rounded position-relative">
                                                    Know More
                                                    <em class="icon-arrow-right"></em>
                                                </button>
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
                                                            <p class="mb-0">Reduced Operational Costs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                                                <div class="col-md-3">
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
                    <div class="col-md-5">
                        <h3 class="commonSubHead">All-in-one, All that you need</h3>
                        <ul class="commonList">
                            <li>Intuitive User Interface</li>
                            <li>Real-time Data Integration</li>
                            <li>Customizable AI Models</li>
                            <li>Task-based AI Agents</li>
                            <li>Interactive User Input Forms</li>
                        </ul>
                    </div>
                    <div class="col-md-7 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-1.png" class="w-100"
                                alt="innovate-one" />
                            <button class="btn btn-warning btn-rounded">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- innovate section 2  -->
                <div class="row align-items-center py-80 pt-0">
                    <div class="col-md-7 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-2.png" class="w-100"
                                alt="innovate-one" />
                            <button class="btn btn-warning btn-rounded right">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5 ps-4">
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
                    <div class="col-md-5">
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
                    <div class="col-md-7 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-3.png" class="w-100"
                                alt="innovate-one" />
                            <button class="btn btn-warning btn-rounded top">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- innovate section 4  -->
                <div class="row align-items-center">
                    <div class="col-md-7 bgGrediantSection bgGrediantSection-sm">
                        <div class="innovateSec_img position-relative">
                            <img src="<?php echo IMAGES_URL ?>/homepage/innovate-4.png" class="w-100"
                                alt="innovate-one" />
                            <button class="btn btn-warning btn-rounded right">
                                Know More
                                <em class="icon-arrow-right"></em>
                            </button>
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
                    <a href="#!" class="btn btn-warning btn-rounded position-relative">
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