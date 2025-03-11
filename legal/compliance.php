<html>

<head>
    <?php $pageTitle = 'Compliance' ?>
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
                                <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Legal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Compliance</li>
                            </ol>
                        </nav>
                        <h1>Compliance at <br />AIRA</h1>
                        <h2>We prioritize your data security, ensuring continuous compliance with regulatory and
                            information security standards.</h2>
                    </div>
                    <div class="col-md-8 innerBanner_right">
                        <img class="img-fluid" src="<?php echo IMAGES_URL ?>/legal/compliance.png"
                            alt="compliance banner" />
                    </div>
                </div>
            </div>
        </section>

        <section class="compliance py-80">
            <div class="container">
                <div class="row commonHead">
                    <div class="col-md-4">
                        <h2 class="commonHead_title">What We Do</h2>
                    </div>
                    <div class="col-md-6 offset-md-2">
                        <p>Delivering groundbreaking AI-driven innovations to streamline your business processes and
                        drive unprecedented growth.</p>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-md-4">
                        <div class="compliance_card commonBorder text-center">
                            <img src="<?php echo IMAGES_URL?>/legal/ISOIEC.png" class="img-fluid" alt="ISOIEC"/>
                            <p>ISO/IEC 27001</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compliance_card commonBorder text-center">
                            <img src="<?php echo IMAGES_URL?>/legal/soc-2.png" class="img-fluid" alt="soc-2"/>
                            <p>SOC 2</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compliance_card commonBorder text-center">
                            <img src="<?php echo IMAGES_URL?>/legal/soc-3.png" class="img-fluid" alt="soc-3"/>
                            <p>SOC 3</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compliance_card commonBorder text-center">
                            <img src="<?php echo IMAGES_URL?>/legal/gdpr.png" class="img-fluid" alt="gdpr"/>
                            <p>GDPR</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compliance_card commonBorder text-center">
                            <img src="<?php echo IMAGES_URL?>/legal/qualys-ssl.png" class="img-fluid" alt="qualys-ssl"/>
                            <p>Qualys SSL</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="compliance_card commonBorder text-center">
                            <img src="<?php echo IMAGES_URL?>/legal/google-api-disclosure.png" class="img-fluid" alt="google-api-disclosure"/>
                            <p>Google API Disclosure</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include './../include/footer.php' ?>
    <?php include './../include/script.php' ?>
</body>

</html>