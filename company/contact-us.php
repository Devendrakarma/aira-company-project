<html>

<head>
    <?php $pageTitle = 'Contact Us' ?>
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
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                    <h1>How can we help you?</h1>
                    <p class="text-18">Please fill out this form and a representative will reach out to your<br />
                        email/phone as soon as possible!</p>
                </div>

                <div class="contactUsForm">
                    <form class="mb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Phone Number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option default>Choose Country</option>
                                        <option>India</option>
                                        <option>UAS</option>
                                        <option>UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" placeholder="Message" id=""></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" id="login">
                                <label class="form-check-label" for="login">Your use of this website is subject to the
                                    AIRA <a href="<?php echo BASE_URL ?>/legal/terms-of-use.php"
                                        class="link-secondary">Terms</a>, <a
                                        href="<?php echo BASE_URL ?>/legal/privacy-policy.php"
                                        class="link-secondary">Privacy
                                        Policy.</a></label>
                            </div>
                        </div>

                        <button class="btn btn-warning btn-rounded iconBtn ms-auto">
                            <span><em class="icon-arrow-right"></em></span>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="locationsSec py-80 pb-0">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-md-4">
                        <p class="customBadge">Location</p>
                        <h3 class="text-42 font-bd">Global Locations</h3>
                        <p class="text-18">AIRA empowers businesses to optimize their connectivity and scalability
                            through a single integration and workflow automation platform.</p>
                    </div>
                    <div class="col-md-7 offset-md-1">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/usa.png" alt="USA" />
                                    <p>USA - California</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/fra.png" alt="france" />
                                    <p>France - Strasbourg</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/ind.png" alt="ind" />
                                    <p>India - New Delhi</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/ind.png" alt="ind" />
                                    <p>India - Indore</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/saudi.png" alt="saudi" />
                                    <p>Saudi Arabia- Riyadh</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/uae.png" alt="uae" />
                                    <p>United Arab Emirates - Dubai</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/tunis.png" alt="tunis" />
                                    <p>Tunisia - Tunis </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="locationsSec_loc">
                                    <img src="<?php echo IMAGES_URL ?>/company/about-us/srilanka.png" alt="srilanka" />
                                    <p>Sri Lanka - Colombo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="text-center">
                    <p class="customBadge">Location</p>
                    <h3 class="text-42 font-bd">Global Locations</h3>
                    <p class="text-18">AIRA empowers businesses to optimize their connectivity and scalability<br />
                        through a single integration and workflow automation platform.</p>
                </div>

                <div class="text-center py-80 pb-0">
                    <img src="<?php echo IMAGES_URL ?>/company/about-us/location-map.png" alt="location-map" />
                </div>
            </div>
        </section>

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

    <?php include './../include/footer.php' ?>
    <?php include './../include/script.php' ?>
</body>

</html>