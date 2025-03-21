<html>

<head>
    <?php $pageTitle = 'Press Releases' ?>
    <?php include './../include/head-link.php' ?>
    <?php include './../include/constant.php' ?>
</head>

<body class="pt-0">
    <!-- Header Component -->
    <?php include './../include/header.php' ?>
    <main class="mainContent">
        <section class="innerBanner innerBanner-sm">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb position-relative">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Press Releases</li>
                        </ol>
                    </nav>
                    <h1 class="mb-0">AIRA Latest<br /> Announcements</h1>
                </div>
            </div>
        </section>

        <section class="Blog py-80 pb-0">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center mb-5">
                    <button class="btn btn-filterBtn active btn-rounded me-2">
                        All <em class="icon icon-close"></em>
                    </button>
                    <button class="btn btn-filterBtn btn-rounded me-2">
                        AI In Action
                    </button>
                    <button class="btn btn-filterBtn btn-rounded me-2">
                        Banking and Insurance
                    </button>
                    <button class="btn btn-filterBtn btn-rounded me-2">
                        Education
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?php echo BASE_URL ?>/resources/case-study-details.php">
                            <div class="blogBox">
                                <div class="blogBox">
                                    <div class="blogBox_date">
                                        June 26th 2024
                                    </div>
                                    <img src="<?php echo IMAGES_URL ?>/homepage/blog-1.png" alt="blog"
                                        class="img-fluid" />
                                    <p>AI-Powered CRM Automation: 
                                    AIRA Customer 360...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?php echo BASE_URL ?>/resources/case-study-details.php">
                            <div class="blogBox">
                                <div class="blogBox">
                                    <div class="blogBox_date">
                                        June 26th 2024
                                    </div>
                                    <img src="<?php echo IMAGES_URL ?>/homepage/blog-2.png" alt="blog"
                                        class="img-fluid" />
                                    <p>How Intelligent Automation Reduces Cost and Transforms Growth...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?php echo BASE_URL ?>/resources/case-study-details.php">
                            <div class="blogBox">
                                <div class="blogBox">
                                    <div class="blogBox_date">
                                        June 26th 2024
                                    </div>
                                    <img src="<?php echo IMAGES_URL ?>/homepage/blog-3.png" alt="blog"
                                        class="img-fluid" />
                                    <p>Hyper-automation in Logistics and Supply Chain Management...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?php echo BASE_URL ?>/resources/case-study-details.php">
                            <div class="blogBox">
                                <div class="blogBox">
                                    <div class="blogBox_date">
                                        June 26th 2024
                                    </div>
                                    <img src="<?php echo IMAGES_URL ?>/resources/blogs/blog-4.png" alt="blog"
                                        class="img-fluid" />
                                    <p>Simple Strategies to Win the Automation Game...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?php echo BASE_URL ?>/resources/case-study-details.php">
                            <div class="blogBox">
                                <div class="blogBox">
                                    <div class="blogBox_date">
                                        June 26th 2024
                                    </div>
                                    <img src="<?php echo IMAGES_URL ?>/resources/blogs/blog-5.png" alt="blog"
                                        class="img-fluid" />
                                    <p>How to Beat the Competition by Automating 5 Major Processes...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?php echo BASE_URL ?>/resources/case-study-details.php">
                            <div class="blogBox">
                                <div class="blogBox">
                                    <div class="blogBox_date">
                                        June 26th 2024
                                    </div>
                                    <img src="<?php echo IMAGES_URL ?>/resources/blogs/blog-6.png" alt="blog"
                                        class="img-fluid" />
                                    <p>Enhancing Healthcare Operations with Software Bots: Leveraging Intelli...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="btn btn-light btn-rounded learnMoreBtn mx-auto">
                    Load More
                </button>
            </div>
        </section>
    </main>
    <?php include './../include/footer.php' ?>
    <?php include './../include/script.php' ?>
</body>

</html>