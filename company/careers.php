<!DOCTYPE html>
<html>

<head>
    <?php $pageTitle = 'Careers' ?>
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
                                <li class="breadcrumb-item active" aria-current="page">Careers</li>
                            </ol>
                        </nav>
                        <h1>Work with us</h1>
                        <h2>We're excited that you're considering joining our dynamic and innovative team.</h2>
                    </div>
                    <div class="col-md-8 innerBanner_right">
                        <img class="img-fluid" src="<?php echo IMAGES_URL ?>/company/careers/careers-banner.png"
                            alt="careers-banner" />
                    </div>
                </div>
            </div>
        </section>

        <section class="workflowAutomation py-80">
            <div class="container">
                <h2 class="text-42 text-center font-bd mb-50">Benefits of joining the AIRA team</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/company/careers/essential-skills.png" alt="Essential Skills"
                                class="img-fluid" />
                            <h2>Essential Skills</h2>
                            <p>At AIRA, you'll have the opportunity to acquire critical skills that are essential for
                                your career success. Our dynamic work environment and hands-on projects ensure that
                                you're always learning and growing professionally.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/company/careers/boosted-productivity.png"
                                alt="Boosted Productivity" class="img-fluid" />
                            <h2>Boosted Productivity</h2>
                            <p>Join a team that values efficiency and innovation. Our collaborative culture and advanced
                                tools are designed to help you work smarter and achieve your goals more effectively.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/company/careers/gaining-understanding.png"
                                alt="Gaining Understanding" class="img-fluid" />
                            <h2>Gaining Understanding</h2>
                            <p>Through regular discussions and explanations with your peers and mentors, you'll deepen
                                your understanding of complex concepts and technologies. This collaborative learning
                                approach helps you tackle challenges with confidence.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="workflowAutomationBox commonBorder">
                            <img src="<?php echo IMAGES_URL ?>/company/careers/improved-communication.png"
                                alt="Improved Communication" class="img-fluid" />
                            <h2>Improved Communication</h2>
                            <p>Working in a diverse team environment at AIRA will enhance your communication skills.
                                You'll engage in meaningful dialogues, present your ideas, and learn to listen actively,
                                all of which are crucial for professional growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="openingSec py-80">
            <div class="container">
                <h1 class="text-42 text-center font-bd mb-50">Open Positions</h1>

                <div class="openingSec_wrapper">
                    <div class="openingSec_item d-flex align-items-center justify-content-between">
                        <div class="openingSec_item_cnt">
                            <p>Technical Architect</p>
                            <p>Indore, India</p>
                        </div>
                        <button class="btn btn-warning btn-rounded" type="button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Apply Now <em class="icon icon-arrow-right"></em>
                        </button>
                    </div>
                    <div class="openingSec_item d-flex align-items-center justify-content-between">
                        <div class="openingSec_item_cnt">
                            <p>Lead UI Engineer</p>
                            <p>Indore, India</p>
                        </div>
                        <button class="btn btn-warning btn-rounded" type="button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Apply Now <em class="icon icon-arrow-right"></em>
                        </button>
                    </div>
                    <div class="openingSec_item d-flex align-items-center justify-content-between">
                        <div class="openingSec_item_cnt">
                            <p>Associate Engineer</p>
                            <p>Indore, India</p>
                        </div>
                        <button class="btn btn-warning btn-rounded" type="button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Apply Now <em class="icon icon-arrow-right"></em>
                        </button>
                    </div>
                    <div class="openingSec_item d-flex align-items-center justify-content-between">
                        <div class="openingSec_item_cnt">
                            <p>Senior Data Scientist</p>
                            <p>Indore, India</p>
                        </div>
                        <button class="btn btn-warning btn-rounded" type="button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Apply Now <em class="icon icon-arrow-right"></em>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="Blog py-80 pb-0">
            <div class="container">
                <h1 class="text-42 text-center font-bd">Intelligent Automation Insights</h1>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="blogBox">
                            <div class="blogBox">
                                <div class="blogBox_date">
                                    June 26th 2024
                                </div>
                                <img src="<?php echo IMAGES_URL ?>/homepage/blog-1.png" alt="blog" class="img-fluid" />
                                <p>How RPA and Artificial Intelligence are Used in Intelligent Process Au...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="blogBox">
                            <div class="blogBox">
                                <div class="blogBox_date">
                                    June 26th 2024
                                </div>
                                <img src="<?php echo IMAGES_URL ?>/homepage/blog-2.png" alt="blog" class="img-fluid" />
                                <p>How to Create a Process Document That Will Save your Time...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <div class="blogBox">
                            <div class="blogBox">
                                <div class="blogBox_date">
                                    June 26th 2024
                                </div>
                                <img src="<?php echo IMAGES_URL ?>/homepage/blog-3.png" alt="blog" class="img-fluid" />
                                <p>Is Hyper-Automation a New Solution for Cybersecurity?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-warning btn-rounded mx-auto mt-3">View All <em class="icon icon-arrow-right"></em></button>
            </div>
        </section>
    </main>
    <?php include './../include/footer.php' ?>
    <?php include './../include/script.php' ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>