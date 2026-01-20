<?php
// Set base path for assets (relative to root)
$base_path = '../';

// Load configuration
require_once '../config.php';

// Page specific variables
$page_title = t('services_page.title') . ' - ' . SITE_NAME;
$page_description = t('home.services.page_intro');
$body_class = 'service-page';
$current_page = 'services';

// Include header
require_once '../includes/header.php';
?>

    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area small-h">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="pre"><?php echo t('nav.home'); ?> / <?php echo t('services_page.breadcrumb'); ?></span>
                        <span class="bg-title"><?php echo t('services_page.breadcrumb'); ?></span>
                        <h1 class="title rts-text-anime-style-1">
                            <?php echo t('services_page.title'); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="<?php echo $base_path; ?>assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="<?php echo $base_path; ?>assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="<?php echo $base_path; ?>assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>
    <!-- about us area wrapper main end -->



    <!-- service area start -->
    <div class="our-service-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-service-main-wrapper-10">
                        <!-- Service 1 -->
                        <div class="signle-service-style-10">
                            <div class="content-area-wrapper">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/icons/11.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service1_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.services.service1_desc'); ?>
                                </p>
                                <a href="<?php echo $base_path; ?>pages/service-hotel-operations.php" class="arrow-right-btn"><?php echo t('buttons.learn_more'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/07.webp" alt="service">
                            </div>
                        </div>
                        <!-- Service 2 -->
                        <div class="signle-service-style-10">
                            <div class="content-area-wrapper">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/icons/12.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service2_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.services.service2_desc'); ?>
                                </p>
                                <a href="<?php echo $base_path; ?>pages/service-restaurant-marketing.php" class="arrow-right-btn"><?php echo t('buttons.learn_more'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/08.webp" alt="service">
                            </div>
                        </div>
                        <!-- Service 3 -->
                        <div class="signle-service-style-10 order-control-sm-device">
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/09.webp" alt="service">
                            </div>
                            <div class="content-area-wrapper">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/icons/13.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service3_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.services.service3_desc'); ?>
                                </p>
                                <a href="<?php echo $base_path; ?>pages/service-staff-training.php" class="arrow-right-btn"><?php echo t('buttons.learn_more'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Service 4 -->
                        <div class="signle-service-style-10 order-control-sm-device">
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/10.webp" alt="service">
                            </div>
                            <div class="content-area-wrapper">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/icons/14.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service4_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.services.service4_desc'); ?>
                                </p>
                                <a href="<?php echo $base_path; ?>pages/service-certification.php" class="arrow-right-btn"><?php echo t('buttons.learn_more'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Service 5 -->
                        <div class="signle-service-style-10">
                            <div class="content-area-wrapper">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/icons/11.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service5_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.services.service5_desc'); ?>
                                </p>
                                <a href="<?php echo $base_path; ?>pages/service-digitalization.php" class="arrow-right-btn"><?php echo t('buttons.learn_more'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/07.webp" alt="service">
                            </div>
                        </div>
                        <!-- Service 6 -->
                        <div class="signle-service-style-10">
                            <div class="content-area-wrapper">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/icons/12.svg" alt="service">
                                </div>
                                <h5 class="title"><?php echo t('home.services.service6_title'); ?></h5>
                                <p class="disc">
                                    <?php echo t('home.services.service6_desc'); ?>
                                </p>
                                <a href="<?php echo $base_path; ?>pages/service-concept-design.php" class="arrow-right-btn"><?php echo t('buttons.learn_more'); ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/08.webp" alt="service">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- working process areas start -->
    <div class="working-process-one bg-main rts-section-gap without-clip-radious">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="title-style-one">
                        <span class="pre"><?php echo t('home.process.pre_title'); ?></span>
                        <h2 class="title rts-text-anime-style-1"><?php echo t('home.process.title'); ?>
                        </h2>
                    </div>
                    <div class="working-process-main-wrapper mt--60">
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/process/icon/01.svg" alt="process">
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
                                    <img src="<?php echo $base_path; ?>assets/images/process/icon/02.svg" alt="process">
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
                                    <img src="<?php echo $base_path; ?>assets/images/process/icon/03.svg" alt="process">
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
                        <img src="<?php echo $base_path; ?>assets/images/process/03.webp" alt="working-process">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- working process areas end -->

    <!-- faq area start -->
    <div class="rts-faq-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center">
                        <span class="pre">FAQ</span>
                        <h2 class="title rts-text-anime-style-1"><?php echo t('services_page.faq_title'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full mt--40">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-left">
                        <img src="<?php echo $base_path; ?>assets/images/faq/02.webp" alt="faq-image area">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo t('services_page.faq1_question'); ?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo t('services_page.faq1_answer'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?php echo t('services_page.faq2_question'); ?>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo t('services_page.faq2_answer'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo t('services_page.faq3_question'); ?>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo t('services_page.faq3_answer'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?php echo t('services_page.faq4_question'); ?>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo t('services_page.faq4_answer'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?php echo t('services_page.faq5_question'); ?>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo t('services_page.faq5_answer'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

    <!-- brand area start -->
    <!-- <div class="rts-brand-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-list-area-wrapper">
                        <div class="left-paragraph">
                            <p><?php echo t('services_page.trusted_clients'); ?></p>
                        </div>
                        <div class="right-brand-area-wrapper">
                            <div class="single-image">
                                <img src="<?php echo $base_path; ?>assets/images/brand/01.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="<?php echo $base_path; ?>assets/images/brand/02.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="<?php echo $base_path; ?>assets/images/brand/03.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="<?php echo $base_path; ?>assets/images/brand/04.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="<?php echo $base_path; ?>assets/images/brand/05.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="<?php echo $base_path; ?>assets/images/brand/06.webp" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- brand area end -->

    <!-- testimonials area start -->
    <div class="rts-testimonials-area-five bg_image rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-style-five">
                            <span class="pre"><?php echo t('services_page.testimonials_pre'); ?></span>
                            <h2 class="title rts-text-anime-style-1"><?php echo t('services_page.testimonials_title'); ?>
                            </h2>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="swiper-button-prevs"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                            <div class="swiper-pagination-fractions"></div>
                            <div class="swiper-button-nexts"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-12">
                    <div class="swiper mySwiper-testimonials-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">
                                    <div class="thumbnail">
                                        <img src="<?php echo $base_path; ?>assets/images/testimonials/03.webp" alt="testimonials">
                                    </div>
                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title"><?php echo t('services_page.testimonial1_name'); ?></h5>
                                            <span><?php echo t('services_page.testimonial1_role'); ?></span>
                                        </div>
                                        <p class="disc">
                                            "<?php echo t('services_page.testimonial1_text'); ?>"
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="<?php echo $base_path; ?>assets/images/testimonials/icons/03.webp" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">
                                    <div class="thumbnail">
                                        <img src="<?php echo $base_path; ?>assets/images/testimonials/04.webp" alt="testimonials">
                                    </div>
                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title"><?php echo t('services_page.testimonial2_name'); ?></h5>
                                            <span><?php echo t('services_page.testimonial2_role'); ?></span>
                                        </div>
                                        <p class="disc">
                                            "<?php echo t('services_page.testimonial2_text'); ?>"
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="<?php echo $base_path; ?>assets/images/testimonials/icons/04.webp" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">
                                    <div class="thumbnail">
                                        <img src="<?php echo $base_path; ?>assets/images/testimonials/03.webp" alt="testimonials">
                                    </div>
                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title"><?php echo t('services_page.testimonial3_name'); ?></h5>
                                            <span><?php echo t('services_page.testimonial3_role'); ?></span>
                                        </div>
                                        <p class="disc">
                                            "<?php echo t('services_page.testimonial3_text'); ?>"
                                        </p>
                                        <div class="body-end">
                                            <a href="#"><img src="<?php echo $base_path; ?>assets/images/testimonials/icons/03.webp" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials area end -->


<?php
// Include footer
require_once '../includes/footer.php';
?>
