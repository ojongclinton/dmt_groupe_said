<?php
// Set base path for assets (relative to root)
$base_path = '../';

// Load configuration
require_once '../config.php';

// Page specific variables
$page_title = t('nav.contact') . ' - ' . SITE_NAME;
$page_description = 'Contact DMT Groupe for expert consulting services for hotels and restaurants. Get in touch with our team to discuss your project.';
$body_class = 'contact-page';
$current_page = 'contact';

// Include header
require_once '../includes/header.php';
?>


    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Contact</span>
                        <h1 class="title rts-text-anime-style-1">
                            <?php echo t('nav.contact'); ?>
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


    <!-- contact areas main -->
    <div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-info-area-wrapper-p new">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span><?php echo t('footer.call_us_247'); ?></span>
                                <a href="tel:+25621452156">(+256) 2145.2156</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span><?php echo t('footer.work_with_us_email'); ?></span>
                                <a href="mailto:info@dmtgroupe.com">info@dmtgroupe.com</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-wrapper">
                                <span><?php echo t('footer.our_location'); ?></span>
                                <a href="#">Douala, Cameroun</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-p new">
                        <form class="form__content" method="post" action="mailer.php" id="contact-form">
                            <h3 class="title"><?php echo t('contact_page.page_subtitle'); ?></h3>
                            <input name="name" id="name" type="text" placeholder="<?php echo t('contact_page.form_name_placeholder'); ?>" required>
                            <input type="email" name="email" id="email" placeholder="your@email.com" required>
                            <input name="phone" id="phone" type="tel" placeholder="<?php echo t('contact_page.form_phone_placeholder'); ?>">
                            <textarea name="message" id="message" placeholder="<?php echo t('contact_page.form_message_placeholder'); ?>" required></textarea>

                            <button class="rts-btn btn-primary" type="submit"><?php echo t('contact_page.form_submit'); ?></button>
                        </form>
                        <div id="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact areas main end -->

        <div class="google-map-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248778.1226535137!2d-86.69566092360928!3d37.327475452900615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8842734c8b1953c9%3A0x771f6f4ec5ccdffc!2sKentucky%2C%20USA!5e0!3m2!1sen!2sbd!4v1741757435755!5m2!1sen!2sbd" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// Include footer
require_once '../includes/footer.php';
?>
