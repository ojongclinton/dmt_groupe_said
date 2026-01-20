<?php
// Load configuration
require_once 'config.php';

// Page specific variables
$page_title = 'Invena Business Consulting HTML Template';
$page_description = 'Invena – A modern and responsive HTML template for consulting businesses. Perfect for finance, corporate, and agency websites.';
$body_class = 'index-one';
$current_page = 'home';

// Include header
require_once 'includes/header.php';
?>

    <!-- rts banner area start -->
    <div class="rts-banner-area banner-style-one bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span><?php echo t('home.banner.welcome'); ?>!</span> <?php echo t('home.banner.subtitle'); ?>
                        </p>
                        <h1 class="title rts-text-anime-style-1">
                            <?php echo t('home.banner.title_part1'); ?> <span><?php echo t('home.banner.title_part2'); ?></span> <?php echo t('home.banner.title_part3'); ?>
                        </h1>
                        <p class="disc banner-para">
                            <?php echo t('home.banner.description'); ?>
                        </p>
                        <a href="pages/contact.php" class="rts-btn btn-primary color-h-black"><?php echo t('home.banner.cta_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-iamge-area">
            <img src="assets/images/banner/shape/04.png" alt="" class="one">
            <img src="assets/images/banner/shape/circle.svg" alt="" class="two">
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts-about area start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <span class="pre"><?php echo t('home.about.pre_title'); ?></span>
                            <h2 class="title rts-text-anime-style-1"><?php echo t('home.about.title_part1'); ?> <br>
                                <?php echo t('home.about.title_part2'); ?>
                            </h2>
                        </div>
                        <p class="disc">
                            <?php echo t('home.about.description'); ?>
                        </p>
                        <div class="call-and-sign-area">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span><?php echo t('home.about.call_us'); ?></span>
                                    <a href="tel:<?php echo CONTACT_PHONE; ?>">
                                        <h6 class="title"><?php echo CONTACT_PHONE; ?></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="sign-area">
                                <img src="assets/images/about/sign.svg" alt="">
                            </div>
                        </div>
                        <a href="pages/about.php" class="rts-btn btn-primary"><?php echo t('home.about.button'); ?></a>
                    </div>
                </div>
                <div class="col-lg-7 pl--70">
                    <div class="thumbnail-about-and-progress-1">

                        <div class="thumbnail-about-1">
                            <img src="assets/images/about/01.webp" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">

                            <div class="progress-area-wrapper images-r">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                    </svg>
                                </div>
                                <h5 class="title"><?php echo t('home.about.progress_label'); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->

    <!-- rts latest service area start -->
    <div class="rts-latest-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre"><?php echo t('home.services.pre_title'); ?></span>
                        <h2 class="title rts-text-anime-style-1"><?php echo t('home.services.title'); ?>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <section class="main-wrapper-sticky">
                        <!-- Service 1: Hotel Operations -->
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/04.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service1_title'); ?></h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    <?php echo t('home.services.service1_desc'); ?>
                                </p>
                                <a href="pages/services.php" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Service 2: Restaurant Marketing -->
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/05.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service2_title'); ?></h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    <?php echo t('home.services.service2_desc'); ?>
                                </p>
                                <a href="pages/services.php" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Service 3: Staff Training -->
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/06.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service3_title'); ?></h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    <?php echo t('home.services.service3_desc'); ?>
                                </p>
                                <a href="pages/services.php" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Service 4: Certification -->
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/07.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service4_title'); ?></h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    <?php echo t('home.services.service4_desc'); ?>
                                </p>
                                <a href="pages/services.php" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Service 5: Digitalization -->
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/12.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service5_title'); ?></h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    <?php echo t('home.services.service5_desc'); ?>
                                </p>
                                <a href="pages/services.php" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Service 6: Concept Design -->
                        <!-- <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service6_title'); ?></h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    <?php echo t('home.services.service6_desc'); ?>
                                </p>
                                <a href="pages/services.php" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div> -->
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- rts latest service area end -->

    <!-- rts just a consultancy area  -->
    <div class="just-a-consultancy-area rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="consultancy-thumbnail-area">
                        <div class="large-image">
                            <img src="assets/images/about/02.webp" alt="thumbnail">
                        </div>
                        <div class="small-iamge images-r">
                            <img src="assets/images/about/03.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_sm--15 mt_md--100 mt_sm--100">
                    <div class="consultancy-style-one">
                        <div class="title-style-one left mb--30">
                            <span class="pre"><?php echo t('home.consultancy.pre_title'); ?></span>
                            <h2 class="title rts-text-anime-style-1"><?php echo t('home.consultancy.title_part1'); ?> <br>
                                <?php echo t('home.consultancy.title_part2'); ?>
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="icon">
                                <img src="assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title"><?php echo t('home.consultancy.best_consulting_title'); ?></h4>
                                <p class="disc">
                                    <?php echo t('home.consultancy.best_consulting_desc'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <div class="icon">
                                <img src="assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title"><?php echo t('home.consultancy.support_title'); ?></h4>
                                <p class="disc">
                                    <?php echo t('home.consultancy.support_desc'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="pages/contact.php" class="rts-btn btn-primary"><?php echo t('home.consultancy.button'); ?></a>
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts just a consultancy area  end -->

    <!-- rts fun facts area start -->
    <div class="rts-fun-facts-area rts-section-gapBottom mt--30">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="assets/images/fun-facts/01.svg" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="1200">00</span>+
                        </h2>
                        <span class="bototm"><?php echo t('home.fun_facts.business_solution'); ?></span>
                    </div>
                </div>
                <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="assets/images/fun-facts/02.svg" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="2.2">00</span>k
                        </h2>
                        <span class="bototm"><?php echo t('home.fun_facts.solution_experts'); ?></span>
                    </div>
                </div>
                <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                    <div class="signle-fun-facts-one">
                        <div class="icon">
                            <img src="assets/images/fun-facts/03.svg" alt="fun-facts">
                        </div>
                        <h2 class="counter title"><span class="odometer" data-count="196">00</span>k
                        </h2>
                        <span class="bototm"><?php echo t('home.fun_facts.worldwide_partner'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts fun facts area end -->

    <!-- eorking process areas start -->
    <div class="working-process-one bg-main rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre"><?php echo t('home.process.pre_title'); ?></span>
                        <h2 class="title rts-text-anime-style-1"><?php echo t('home.process.title'); ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 align-items-center">
                <div class="col-lg-6">
                    <div class="working-process-main-wrapper">
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="assets/images/process/icon/01.svg" alt="process">
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">01</span>
                                </div>
                                <h5 class="title"><?php echo t('home.process.step1_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.process.step1_desc'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="assets/images/process/icon/02.svg" alt="process">
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">02</span>
                                </div>
                                <h5 class="title"><?php echo t('home.process.step2_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.process.step2_desc'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="assets/images/process/icon/03.svg" alt="process">
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">03</span>
                                </div>
                                <h5 class="title"><?php echo t('home.process.step3_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.process.step3_desc'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-working-procss-one" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                        <img src="assets/images/process/01.webp" alt="working-process">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- eorking process areas end -->

<?php
// Include footer
require_once 'includes/footer.php';
?>
