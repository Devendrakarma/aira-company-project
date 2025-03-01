<!DOCTYPE html>
<html>

<head>
    <?php $pageTitle = 'Sitemap' ?>
    <?php include 'include/head-link.php' ?>
    <?php include 'include/constant.php' ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body class="pt-0">
    <!-- Header Component -->
    <?php include 'include/header.php' ?>
    <main class="mainContent">
        <section class="sitemap">
            <div>
                <a href="<?php echo BASE_URL?>/index.php">Homepage</a>
                <a href="<?php echo BASE_URL?>/manufacturing.php">Manufacturing</a>
                <a href="<?php echo BASE_URL?>/workflow.php">Workflow</a>
                <a href="<?php echo BASE_URL?>/Textiles.php">Textiles</a>
                <a href="<?php echo BASE_URL?>/telecom.php">Telecom</a>
                <a href="<?php echo BASE_URL?>/Retail.php">Retail</a>
                <a href="<?php echo BASE_URL?>/Pharma.php">Pharma</a>
                <a href="<?php echo BASE_URL?>/Oil&Gas.php">Oil&Gas</a>
                <a href="<?php echo BASE_URL?>/Hospitality.php">Hospitality</a>
                <a href="<?php echo BASE_URL?>/Healthcare.php">Healthcare</a>
            </div>
        </section>
    </main>
    <?php include 'include/footer.php' ?>
</body>
</html>
