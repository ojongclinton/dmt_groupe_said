    <div class="rts-footer-area pt--100 pb--100 pt_sm--50 pb_sm--40 footer-two footer-bg-two">
        <div class="container">
            <div class="row">
                <!-- single wized -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized left">
                        <h3 class="title animated fadeIn">
                            <span><?php echo t('footer.ready_to'); ?></span> <br>
                            <?php echo t('footer.work_with_us'); ?>
                        </h3>
                        <p class="disc">
                            <?php echo t('footer.description'); ?>
                        </p>
                        <a class="rts-btn btn-primary" href="<?php echo $base_path; ?>pages/contact.php"><?php echo t('buttons.contact_us'); ?></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title"><?php echo t('footer.our_services'); ?></h5>
                            <img src="<?php echo $base_path; ?>assets/images/footer/01.png" alt="DMT_Footer">
                        </div>
                        <div class="wized-2-body">
                            <ul>
                                <li><a href="<?php echo $base_path; ?>pages/service-hotel-operations.php"><i class="fal fa-chevron-double-right"></i><?php echo t('home.services.service1_title'); ?></a></li>
                                <li><a href="<?php echo $base_path; ?>pages/service-restaurant-marketing.php"><i class="fal fa-chevron-double-right"></i><?php echo t('home.services.service2_title'); ?></a></li>
                                <li><a href="<?php echo $base_path; ?>pages/service-staff-training.php"><i class="fal fa-chevron-double-right"></i><?php echo t('home.services.service3_title'); ?></a></li>
                                <li><a href="<?php echo $base_path; ?>pages/service-certification.php"><i class="fal fa-chevron-double-right"></i><?php echo t('home.services.service4_title'); ?></a></li>
                                <li><a href="<?php echo $base_path; ?>pages/service-digitalization.php"><i class="fal fa-chevron-double-right"></i><?php echo t('home.services.service5_title'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                    <div class="footer-two-single-wized">
                        <div class="wized-title-area">
                            <h5 class="wized-title"><?php echo t('footer.contact_us'); ?></h5>
                            <img src="<?php echo $base_path; ?>assets/images/footer/01.png" alt="DMT_Footer">
                        </div>
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="disc">
                                    <span><?php echo t('footer.call_us_247'); ?></span>
                                    <a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a>
                                </div>
                            </div>
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="disc">
                                    <span><?php echo t('footer.work_with_us_email'); ?></span>
                                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <!-- single wized -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized right">
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="disc">
                                    <span><?php echo t('footer.our_location'); ?></span>
                                    <a href="#"><?php echo CONTACT_ADDRESS; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
            </div>
        </div>
    </div>
    <div class="rts-copy-right-1 ptb--10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc">
                            <?php echo t('footer.copyright'); ?>
                            <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>. <?php echo t('footer.all_rights'); ?>
                        </p>
                        <div class="right">
                            <ul>
                                <li><a href="<?php echo $base_path; ?>pages/about.php"><?php echo t('nav.about_company'); ?></a></li>
                                <li><a href="<?php echo $base_path; ?>pages/contact.php"><?php echo t('footer.contact'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="<?php echo $base_path; ?>index.php"><img class="logo" src="<?php echo $base_path; ?>assets/images/logo/01.svg" alt="<?php echo SITE_NAME; ?>"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    <?php echo t('home.about.description'); ?>
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title"><?php echo t('common.get_in_touch'); ?></div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="https://dmtgroupe.com">www.dmtgroupe.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#"><?php echo CONTACT_ADDRESS; ?></a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="<?php echo $social_links['facebook']; ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $social_links['twitter']; ?>" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $social_links['instagram']; ?>" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $social_links['linkedin']; ?>" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <!-- Accueil - Direct Link -->
                    <li>
                        <a href="<?php echo $base_path; ?>index.php" class="main"><?php echo t('nav.home'); ?></a>
                    </li>

                    <!-- Services - Dropdown -->
                    <li class="#">
                        <a href="<?php echo $base_path; ?>pages/services.php" class="main" aria-expanded="false"><?php echo t('nav.service'); ?></a>
                        <!-- <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="<?php echo $base_path; ?>pages/service-hotel-operations.php"><?php echo t('home.services.service1_title'); ?></a></li>
                            <li><a href="<?php echo $base_path; ?>pages/service-restaurant-marketing.php"><?php echo t('home.services.service2_title'); ?></a></li>
                            <li><a href="<?php echo $base_path; ?>pages/service-staff-training.php"><?php echo t('home.services.service3_title'); ?></a></li>
                            <li><a href="<?php echo $base_path; ?>pages/service-certification.php"><?php echo t('home.services.service4_title'); ?></a></li>
                            <li><a href="<?php echo $base_path; ?>pages/service-digitalization.php"><?php echo t('home.services.service5_title'); ?></a></li>
                            <li><a href="<?php echo $base_path; ?>pages/service-concept-design.php"><?php echo t('home.services.service6_title'); ?></a></li>
                        </ul> -->
                    </li>

                    <!-- À propos - Direct Link -->
                    <li>
                        <a href="<?php echo $base_path; ?>pages/about.php" class="main"><?php echo t('nav.about_company'); ?></a>
                    </li>

                    <!-- Contact - Direct Link -->
                    <li>
                        <a href="<?php echo $base_path; ?>pages/contact.php" class="main"><?php echo t('nav.contact'); ?></a>
                    </li>

                    <!-- Language Switcher for Mobile -->
                    <li class="mobile-lang-switcher" style="margin-top: 20px; padding: 10px 0; border-top: 1px solid #eee;">
                        <span style="color: #666; font-size: 14px; margin-right: 10px;">
                            <?php echo get_current_lang() === 'fr' ? 'Langue:' : 'Language:'; ?>
                        </span>
                        <?php
                        $languages = [
                            'fr' => 'Français',
                            'en' => 'English',
                        ];
                        foreach ($languages as $code => $name):
                            $is_current = ($code === get_current_lang());
                        ?>
                            <a href="<?php echo lang_url($code); ?>"
                               style="display: inline-block; padding: 5px 12px; margin: 0 5px; border-radius: 4px; text-decoration: none; <?php echo $is_current ? 'background: #007bff; color: white;' : 'background: #f0f0f0; color: #333;'; ?>">
                                <?php echo strtoupper($code); ?>
                            </a>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="<?php echo $social_links['facebook']; ?>" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $social_links['twitter']; ?>" aria-label="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $social_links['instagram']; ?>" aria-label="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $social_links['linkedin']; ?>" aria-label="linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- inner menu area desktop End -->


    <!-- offcanvase search - REMOVED -->

    <div id="anywhere-home" class="">
    </div>

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <script defer src="<?php echo $base_path; ?>assets/js/plugins/jquery.js"></script>

    <script defer src="<?php echo $base_path; ?>assets/js/plugins/odometer.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/jquery-appear.js"></script>


    <script defer src="<?php echo $base_path; ?>assets/js/plugins/gsap.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/split-text.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/scroll-trigger.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/smooth-scroll.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/metismenu.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/popup.js"></script>

    <script defer src="<?php echo $base_path; ?>assets/js/vendor/bootstrap.min.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/swiper.js"></script>
    <script defer src="<?php echo $base_path; ?>assets/js/plugins/contact.form.js"></script>

    <script defer src="<?php echo $base_path; ?>assets/js/main.js"></script>
</body>

</html>
