<!DOCTYPE html>
<html>

<head>
    <?php $pageTitle = 'Workflows' ?>
    <?php include 'include/head-link.php' ?>
    <?php include 'include/constant.php' ?>
</head>

<body class="pt-0">
    <!-- Header Component -->
    <?php include 'include/header.php' ?>
    <main class="mainContent">
        <section class="innerBanner d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 innerBanner_left">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Solutions</a></li>
                                <li class="breadcrumb-item"><a href="#">Industries</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Workflows</li>
                            </ol>
                        </nav>
                        <h1>Workflows</h1>
                        <h2>AIRA makes it easy to connect your </br> preferred apps and systems, weaving</br> them together into purposeful workflows.</h2>
                    </div>
                    <div class="col-md-8 innerBanner_right">
                        <img class="img-fluid" src="<?php echo IMAGES_URL ?>/workflow/banner.png" alt="workflow banner" />
                    </div>
                </div>
            </div>
        </section>

        <section class="workflowAutomation py-80">
            <div class="container">
                <h1 class="text-42 text-center font-bd mb-50">Workflow Automation Features</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="workflowAutomationBox">
                            <img src="<?php echo IMAGES_URL ?>/workflow/complexProcesses.png" alt="complex process" class="img-fluid" />
                            <h2>Handle complex processes effortlessly</h2>
                            <p>Effortlessly manage intricate tasks with our Simple Drag-&-Drop Designer. Select, drag, and drop modules to streamline complex processes in an instant.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="workflowAutomationBox">
                            <img src="<?php echo IMAGES_URL ?>/workflow/quickStart.png" alt="quick start" class="img-fluid" />
                            <h2>Quick start with templates</h2>
                            <p>From project management to marketing strategies, choose the template that fits your needs and kickstart your journey towards efficiency. </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="workflowAutomationBox">
                            <img src="<?php echo IMAGES_URL ?>/workflow/connect.png" alt="Connect to any system" class="img-fluid" />
                            <h2>Connect to any system</h2>
                            <p>Connect to any system effortlessly with our versatile platform, boasting over 100 integrations to suit your needs. </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="workflowAutomationBox">
                            <img src="<?php echo IMAGES_URL ?>/workflow/reuseWork.png" alt="Effortlessly reuse your work" class="img-fluid" />
                            <h2>Effortlessly reuse your work</h2>
                            <p>Whether it's copy-and-paste functionality or smooth import and export options, efficiency is at your fingertips. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Footer Component -->
    <?php include 'include/footer.php' ?>

</body>