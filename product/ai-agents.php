<!DOCTYPE html>
<html>

<head>
    <?php $pageTitle = 'AI Agents' ?>
    <?php include './../include/head-link.php' ?>
    <?php include './../include/constant.php' ?>
</head>

<body class="pt-0">
    <!-- Header Component -->
    <?php include './../include/header.php' ?>
    <main class="mainContent">
        <section class="innerBanner d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 innerBanner_left">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">AI Agents</li>
                            </ol>
                        </nav>
                        <h1>AI Agents</h1>
                        <h2>Meet your new team members: AI Agents that learn your business from the inside out</h2>
                    </div>
                    <div class="col-md-8 innerBanner_right">
                        <img class="img-fluid" src="<?php echo IMAGES_URL ?>/products/ai-agents/ai-agents-banner.png"
                            alt="ai-agents-banner" />
                    </div>
                </div>
            </div>
        </section>

        <section class="workflowAutomation py-80">
            <div class="container">
                <h1 class="text-42 text-center font-bd mb-50">Lwading Your Organization into the Future</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/icon-2.png"
                                alt="Cognitive Capabilities" class="img-fluid" />
                            <h2>Cognitive Capabilities</h2>
                            <p>Empower your business with AI-driven intelligence; From Natural Language Processing (NLP)
                                that understands human conversations to Intelligent Document Processing that extracts
                                insights from images and documents, our AI agents bring human-like comprehension to
                                automation. With speech recognition and deep learning, they continuously evolve,
                                enabling smarter, more intuitive decision-making </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/icon-2.png"
                                alt="Process Automation & Orchestration" class="img-fluid" />
                            <h2>Process Automation & Orchestration</h2>
                            <p>Unlock seamless process automation with AI-powered orchestration, whether it’s
                                integrating Robotic Process Automation (RPA) for routine tasks or aligning with Business
                                Process Management (BPM) for complex workflows, our AI agents ensure intelligent,
                                efficient execution</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/icon-3.png"
                                alt="Predictive & Prescriptive Analytics" class="img-fluid" />
                            <h2>Predictive & Prescriptive Analytics</h2>
                            <p>Stay ahead of the curve with AI-powered predictive and prescriptive analytics! Leverage
                                historical data to forecast trends, mitigate risks, and detect anomalies before they
                                impact operations </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/icon-4.png"
                                alt="Conversational & Interactive Capabilities" class="img-fluid" />
                            <h2>Conversational & Interactive Capabilities</h2>
                            <p>Deliver next-level customer experiences with AI-powered conversational interfaces, from
                                intelligent chatbots that provide real-time assistance to multichannel AI-driven
                                communication, our solutions ensure seamless interaction </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="automatedWorkflow">
            <div class="automatedWorkflowList noImg">
                <div class="container">
                    <div class="row align-items-center mb-84">
                        <div class="col-md-6">
                            <h2 class="text-42 font-sm"> Insights for Decisions </h2>
                            <p>Gain actionable insights from data to drive informed decision-making, unlocking the power
                                of information for strategic navigation. Harness the potential of data-driven insights
                                as a compass in navigating complex scenarios, steering towards success.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/details-1.png" class="img-fluid"
                                alt="Insights for Decisions" />
                        </div>
                    </div>
                    <div class="row align-items-center mb-84">
                        <div class="col-md-6">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/details-2.png" class="img-fluid"
                                alt="Task Automation Boost " />
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-42 font-sm">Task Automation Boost </h2>
                            <p> Automating repetitive tasks elevates efficiency and productivity. This streamlining
                                liberates time for strategic initiatives, fostering innovation. With automation,
                                businesses can seamlessly scale operations and accelerate success.</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="text-42 font-sm">Personalized Customer<br/> Engagement </h2>
                            <p>Personalized customer engagement enhances connections by delivering tailored experiences.
                                Through targeted messaging and customized offers, businesses anticipate needs, fostering
                                satisfaction and brand advocacy.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo IMAGES_URL ?>/products/ai-agents/details-3.png" class="img-fluid"
                                alt="Personalized Customer Engagement" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq py-80">
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
                    <a href="<?php echo BASE_URL ?>/product/app-integration.php"
                        class="btn btn-warning btn-rounded position-relative d-inline-flex">
                        Know More
                        <em class="icon-arrow-right"></em>
                    </a>
                </div>
            </div>
        </section>
        <!--!! Highly Pre-Integrated Data Connectors  -->

    </main>
    <!-- Footer Component -->
    <?php include './../include/footer.php' ?>
    <?php include './../include/script.php' ?>

</body>