<?php
// Set base path for assets (relative to root)
$base_path = '../';

// Load configuration
require_once '../config.php';

// Page specific variables
$page_title = t('home.services.service2_title') . ' - ' . SITE_NAME;
$page_description = t('home.services.service2_desc');
$body_class = 'service-details-page';
$current_page = 'services';

// Include header
require_once '../includes/header.php';
?>

    <div class="breadcrumb-service-detals-one">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-service-details-1 large-height bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="title-area-left">
                                        <span class="bg-title"><?php echo t('service_detail_restaurant.restaurant_consulting'); ?></span>
                                        <h1 class="title rts-text-anime-style-1">
                                            <?php echo t('home.services.service2_title'); ?>
                                        </h1>
                                        <p class="disc">
                                            <?php echo t('home.services.service2_desc'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts business details area left main -->
    <div class="rts-service-details-area-main-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="service-details-left-area mt--0 rts-section-gapTop">
                        <h3 class="title rts-text-anime-style-1"><?php echo t('service_detail_restaurant.main_title'); ?></h3>
                        <p class="disc"><?php echo t('service_detail_restaurant.intro_p1'); ?></p>
                        <p class="disc"><?php echo t('service_detail_restaurant.intro_p2'); ?></p>
                        <div class="service-short-main-wrapper">
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/05.svg" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm"><?php echo t('service_detail_restaurant.box1_title'); ?></h5>
                                    <p class="disc"><?php echo t('service_detail_restaurant.box1_desc'); ?></p>
                                </div>
                            </div>
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/06.svg" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm"><?php echo t('service_detail_restaurant.box2_title'); ?></h5>
                                    <p class="disc"><?php echo t('service_detail_restaurant.box2_desc'); ?></p>
                                </div>
                            </div>
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/07.svg" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm"><?php echo t('service_detail_restaurant.box3_title'); ?></h5>
                                    <p class="disc"><?php echo t('service_detail_restaurant.box3_desc'); ?></p>
                                </div>
                            </div>
                            <div class="single-short-service">
                                <div class="icon">
                                    <img src="<?php echo $base_path; ?>assets/images/service/08.svg" alt="">
                                </div>
                                <div class="inner-content">
                                    <h5 class="title-sm"><?php echo t('service_detail_restaurant.box4_title'); ?></h5>
                                    <p class="disc"><?php echo t('service_detail_restaurant.box4_desc'); ?></p>
                                </div>
                            </div>
                        </div>
                        <p class="disc mt--30"><?php echo t('service_detail_restaurant.methodology_intro'); ?></p>
                        <h3 class="title mt--50 rts-text-anime-style-1"><?php echo t('service_detail_restaurant.approach_title'); ?></h3>
                        <p class="disc"><?php echo t('service_detail_restaurant.approach_intro'); ?></p>
                        <p class="disc"><?php echo t('service_detail_restaurant.approach_desc'); ?></p>
                        <div class="single-step-service-details">
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/12.webp" alt="service">
                            </div>
                            <div class="inner">
                                <h5 class="title-f"><?php echo t('service_detail_restaurant.step1_title'); ?></h5>
                            </div>
                            <div class="feature">
                                <p class="single"><?php echo t('service_detail_restaurant.step1_feat1'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step1_feat2'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step1_feat3'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step1_feat4'); ?></p>
                            </div>
                        </div>
                        <div class="single-step-service-details">
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/13.webp" alt="service">
                            </div>
                            <div class="inner">
                                <h5 class="title-f"><?php echo t('service_detail_restaurant.step2_title'); ?></h5>
                            </div>
                            <div class="feature">
                                <p class="single"><?php echo t('service_detail_restaurant.step2_feat1'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step2_feat2'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step2_feat3'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step2_feat4'); ?></p>
                            </div>
                        </div>
                        <div class="single-step-service-details">
                            <div class="thumbnail">
                                <img src="<?php echo $base_path; ?>assets/images/service/10.webp" alt="service">
                            </div>
                            <div class="inner">
                                <h5 class="title-f"><?php echo t('service_detail_restaurant.step3_title'); ?></h5>
                            </div>
                            <div class="feature">
                                <p class="single"><?php echo t('service_detail_restaurant.step3_feat1'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step3_feat2'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step3_feat3'); ?></p>
                                <p class="single"><?php echo t('service_detail_restaurant.step3_feat4'); ?></p>
                            </div>
                        </div>
                        <div class="accordion faq-wrapper-inner-page mt--50" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo t('service_detail_restaurant.faq1_q'); ?>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo t('service_detail_restaurant.faq1_a'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php echo t('service_detail_restaurant.faq2_q'); ?>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo t('service_detail_restaurant.faq2_a'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <?php echo t('service_detail_restaurant.faq3_q'); ?>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo t('service_detail_restaurant.faq3_a'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <?php echo t('service_detail_restaurant.faq4_q'); ?>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo t('service_detail_restaurant.faq4_a'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <?php echo t('service_detail_restaurant.faq5_q'); ?>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo t('service_detail_restaurant.faq5_a'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts business details area left main end -->


    <!-- Contact Form Section -->
    <style>
        .service-contact-form input[type="text"],
        .service-contact-form input[type="email"],
        .service-contact-form input[type="tel"],
        .service-contact-form textarea {
            border: 1px solid #ddd;
            padding: 12px 15px;
            width: 100%;
            border-radius: 4px;
        }
        .service-contact-form input[type="text"]:focus,
        .service-contact-form input[type="email"]:focus,
        .service-contact-form input[type="tel"]:focus,
        .service-contact-form textarea:focus {
            border-color: var(--color-primary);
            outline: none;
        }
        .service-contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .service-contact-form label .required {
            color: #e74c3c;
        }
        .service-contact-form .checkbox-label {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 12px;
            cursor: pointer;
            font-weight: 400;
        }
        .service-contact-form .checkbox-label input[type="checkbox"] {
            margin-top: 4px;
            width: 16px;
            height: 16px;
        }
        .contact-form-wrapper-service {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.08);
        }
    </style>
    <div class="rts-contact-form-area rts-section-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact-form-wrapper-service">
                        <div class="text-center mb--40">
                            <h3 class="title rts-text-anime-style-1"><?php echo t('service_detail_restaurant.form_title'); ?></h3>
                            <p class="disc"><?php echo t('service_detail_restaurant.form_subtitle'); ?></p>
                        </div>
                        <form action="<?php echo $base_path; ?>includes/process-form.php" method="post" class="service-contact-form">
                            <input type="hidden" name="service_type" value="restaurant_marketing">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb--20">
                                        <label for="name"><?php echo t('service_detail_restaurant.form_name'); ?> <span class="required">*</span></label>
                                        <input type="text" id="name" name="name" placeholder="<?php echo t('service_detail_restaurant.form_name_placeholder'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb--20">
                                        <label for="company"><?php echo t('service_detail_restaurant.form_company'); ?></label>
                                        <input type="text" id="company" name="company" placeholder="<?php echo t('service_detail_restaurant.form_company_placeholder'); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb--20">
                                        <label for="phone"><?php echo t('service_detail_restaurant.form_phone'); ?> <span class="required">*</span></label>
                                        <input type="tel" id="phone" name="phone" placeholder="<?php echo t('service_detail_restaurant.form_phone_placeholder'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb--20">
                                        <label for="email"><?php echo t('service_detail_restaurant.form_email'); ?></label>
                                        <input type="email" id="email" name="email" placeholder="<?php echo t('service_detail_restaurant.form_email_placeholder'); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb--20">
                                        <label for="country"><?php echo t('service_detail_restaurant.form_country'); ?> <span class="required">*</span></label>
                                        <input type="text" id="country" name="country" placeholder="<?php echo t('service_detail_restaurant.form_country_placeholder'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb--20">
                                        <label for="city"><?php echo t('service_detail_restaurant.form_city'); ?> <span class="required">*</span></label>
                                        <input type="text" id="city" name="city" placeholder="<?php echo t('service_detail_restaurant.form_city_placeholder'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb--20">
                                        <label><?php echo t('service_detail_restaurant.form_services'); ?> <span class="required">*</span></label>
                                        <div class="checkbox-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="services[]" value="marketing_digital">
                                                        <span><?php echo t('service_detail_restaurant.form_service_opt1'); ?></span>
                                                    </label>
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="services[]" value="menu_redesign">
                                                        <span><?php echo t('service_detail_restaurant.form_service_opt2'); ?></span>
                                                    </label>
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="services[]" value="culinary_storytelling">
                                                        <span><?php echo t('service_detail_restaurant.form_service_opt3'); ?></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="services[]" value="customer_journey">
                                                        <span><?php echo t('service_detail_restaurant.form_service_opt4'); ?></span>
                                                    </label>
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="services[]" value="restaurant_branding">
                                                        <span><?php echo t('service_detail_restaurant.form_service_opt5'); ?></span>
                                                    </label>
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" name="services[]" value="other">
                                                        <span><?php echo t('service_detail_restaurant.form_service_opt6'); ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb--20">
                                        <label for="message"><?php echo t('service_detail_restaurant.form_message'); ?></label>
                                        <textarea id="message" name="message" rows="4" placeholder="<?php echo t('service_detail_restaurant.form_message_placeholder'); ?>"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="rts-btn btn-primary"><?php echo t('service_detail_restaurant.form_submit'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->


<?php
// Include footer
require_once '../includes/footer.php';
?>
