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
        <!-- Banner Section   -->
        <section class="freeTrialBanner py-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="commonSubHead mb-0">Start Your</h2>
                        <h1><span>Free Trial</span> with AIRA</h1>
                        <p>Experience Seamless Workflow Automation, Intelligent Document Processing, and RPA at Your
                            Fingertips.</p>
                        <p>No credit card required. Take the first step toward transforming your business operations
                            with AIRA’s cutting-edge AI automation platform. During your trial, unlock the power to
                            streamline workflows, optimize processes, and boost efficiency across your organization.</p>
                        <ul class="commonList">
                            <li>Effortless Onboarding</li>
                            <li>Unlimited Automation</li>
                            <li>Exclusive Training Resources</li>
                            <li>Dedicated Support</li>
                        </ul>
                    </div>
                    <div class="col-md-5 offset-md-1 bgGrediantSection bgGrediantSection-sm">
                        <div class="freeTrialBanner_form">
                            <form>
                                <div class="form-group">
                                    <Input type="text" placeholder="First Name *" name="firstName"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <Input type="text" placeholder="Last Name *" name="lastName" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <Input type="email" placeholder="Work Email *" name="workEmail"
                                        class="form-control" />
                                </div>
                                <button class="btn btn-warning btn-rounded iconBtn mx-auto">
                                    <span><em class="icon-arrow-right"></em></span>
                                    Continue
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!! Banner Section   -->
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
                    <a href="<?php echo BASE_URL?>/product/app-integration.php" class="btn btn-warning btn-rounded position-relative d-inline-flex">
                        Know More
                        <em class="icon-arrow-right"></em>
                    </a>
                </div>
            </div>
        </section>
        <!--!! Highly Pre-Integrated Data Connectors  -->

        <section class="faq py-80 pb-0">
            <div class="container">
                <h1 class="text-42 text-center font-bd mb-50">Frequently Asked Question</h1>
                <div class="accordion accordion-flush" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
                                What is AIRA Intelligent Document Processing (IDP)?
                            </button>
                        </h2>
                        <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially uncha
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                                What are AIRA AI Agents?
                            </button>
                        </h2>
                        <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially uncha
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                How do I navigate to the Connections section in AIRA Connection?
                            </button>
                        </h2>
                        <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially uncha
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                                What types of input data are required for creating an AIRA model?
                            </button>
                        </h2>
                        <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially uncha
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                                What role does AI play in hyper-automation?
                            </button>
                        </h2>
                        <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially uncha
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'include/footer.php' ?>
    <?php include 'include/script.php' ?>
</body>

</html>