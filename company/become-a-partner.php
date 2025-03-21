<!DOCTYPE html>
<html>

<head>
    <?php $pageTitle = 'Become a Partner' ?>
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
                            <li class="breadcrumb-item active" aria-current="page">Become a Partner</li>
                        </ol>
                    </nav>
                    <h1>Become an AIRA partner.</h1>
                    <p class="text-18">Please fill out this form and a representative will reach out to your<br />
                        email/phone
                        as soon as possible!</p>
                </div>

                <div class="contactUsForm">
                    <form class="mb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Company Name" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Company Website" class="form-control" />
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option default>State/Province</option>
                                        <option>India</option>
                                        <option>UAS</option>
                                        <option>UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Street" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" placeholder="City" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Postal Code" class="form-control" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" placeholder="Company Description"
                                        id=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option default>Years in Business</option>
                                        <option>India</option>
                                        <option>UAS</option>
                                        <option>UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option default>Number of Employees</option>
                                        <option>India</option>
                                        <option>UAS</option>
                                        <option>UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="No. of Certified Technical Resources"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option default>Already Selling RPA</option>
                                        <option>India</option>
                                        <option>UAS</option>
                                        <option>UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Other RPA Vendors you Work with"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <!-- <div class="d-flex align-items-center form-check">
                            <input type="checkbox" class=" form-check-input custom-control-inline" />
                            <label class="form-check-label">Your use of this website is subject to the AIRA</label>
                        </div> -->

                        <button class="btn btn-warning btn-rounded iconBtn ms-auto">
                            <span><em class="icon-arrow-right"></em></span>
                            Send Message
                        </button>
                    </form>
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