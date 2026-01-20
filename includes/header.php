<!DOCTYPE html>
<html lang="<?php echo get_current_lang(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : t('home.banner.description'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/fav.png">
    <title><?php echo isset($page_title) ? $page_title : SITE_NAME . ' - ' . SITE_TAGLINE; ?></title>
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/plugins/fontawesome.css" as="style">
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/plugins/swiper.css" as="style">
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/plugins/metismenu.css" as="style">
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/plugins/magnifying-popup.css" as="style">
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/plugins/odometer.css" as="style">
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/vendor/bootstrap.min.css" as="style">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="<?php echo $base_path; ?>assets/images/banner/21.webp" />
    <link rel="stylesheet preload" href="<?php echo $base_path; ?>assets/css/style.css" as="style">

    <style>
    /* Language Switcher Styles */
    .header-lang-switcher {
        display: inline-flex;
        gap: 5px;
        align-items: center;
        margin-left: 15px;
    }
    .header-lang-switcher .lang-link {
        padding: 4px 10px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .header-lang-switcher .lang-link:hover {
        background-color: #f0f0f0;
        border-color: #ccc;
    }
    .header-lang-switcher .lang-link.active {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    </style>
</head>

<body class="<?php echo isset($body_class) ? $body_class : 'index-one'; ?>">

    <header class="header-one header--sticky">
        <div class="header-top-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one-wrapper">
                            <div class="left">
                                <div class="mail">
                                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><i class="fal fa-envelope"></i>
                                        <?php echo CONTACT_EMAIL; ?></a>
                                </div>
                                <div class="working-time">
                                    <p><i class="fal fa-clock"></i> <?php echo t('common.working_hours'); ?> <?php echo WORKING_HOURS; ?></p>
                                </div>
                            </div>
                            <div class="right">
                                <ul class="top-nav">
                                    <li><a href="<?php echo $base_path; ?>pages/about.php"><?php echo t('nav.about_company'); ?></a></li>
                                    <li><a href="<?php echo $base_path; ?>pages/contact.php"><?php echo t('nav.contact'); ?></a></li>
                                </ul>
                                <ul class="social-wrapper-one">
                                    <li><a href="<?php echo $social_links['facebook']; ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $social_links['twitter']; ?>" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $social_links['instagram']; ?>" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a class="mr--0" href="<?php echo $social_links['linkedin']; ?>" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <!-- Language Switcher in top bar -->
                                <div class="header-lang-switcher">
                                    <?php
                                    $languages = [
                                        'fr' => 'FR',
                                        'en' => 'EN',
                                    ];
                                    foreach ($languages as $code => $name):
                                        $is_current = ($code === get_current_lang());
                                    ?>
                                        <a href="<?php echo lang_url($code); ?>"
                                           class="lang-link <?php echo $is_current ? 'active' : ''; ?>"
                                           title="<?php echo $code === 'fr' ? 'Français' : 'English'; ?>">
                                            <?php echo $name; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-main-one-wrapper">
                            <div class="thumbnail">
                                <a href="<?php echo $base_path; ?>index.php">
                                    <img src="<?php echo $base_path; ?>assets/images/logo/01.svg" alt="<?php echo SITE_NAME; ?>">
                                </a>
                            </div>
                            <div class="main-header">
                                <div class="nav-area">
                                    <ul class="">
                                        <!-- Accueil - Direct Link -->
                                        <li class="main-nav">
                                            <a href="<?php echo $base_path; ?>index.php"><?php echo t('nav.home'); ?></a>
                                        </li>

                                        <!-- Services - Mega Menu Dropdown -->
                                        <li class="main-nav has-dropdown mega-menu">
                                            <a href="<?php echo $base_path; ?>pages/services.php"><?php echo t('nav.service'); ?></a>
                                            <div class="rts-mega-menu service-mega-menu-style">
                                                <div class="wrapper">
                                                    <div class="container">
                                                        <div class="row g-5">
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item parent-nav">
                                                                    <li>
                                                                        <a href="<?php echo $base_path; ?>pages/services.php">
                                                                            <div class="single-service-menu">
                                                                                <div class="icon">
                                                                                    <img src="<?php echo $base_path; ?>assets/images/service/04.svg" alt="service">
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h5 class="title"><?php echo t('home.services.service1_title'); ?></h5>
                                                                                    <p class="details">
                                                                                        <?php echo t('home.services.service1_desc'); ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_path; ?>pages/services.php">
                                                                            <div class="single-service-menu">
                                                                                <div class="icon">
                                                                                    <img src="<?php echo $base_path; ?>assets/images/service/05.svg" alt="service">
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h5 class="title"><?php echo t('home.services.service2_title'); ?></h5>
                                                                                    <p class="details">
                                                                                        <?php echo t('home.services.service2_desc'); ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_path; ?>pages/services.php">
                                                                            <div class="single-service-menu">
                                                                                <div class="icon">
                                                                                    <img src="<?php echo $base_path; ?>assets/images/service/06.svg" alt="service">
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h5 class="title"><?php echo t('home.services.service3_title'); ?></h5>
                                                                                    <p class="details">
                                                                                        <?php echo t('home.services.service3_desc'); ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item parent-nav">
                                                                    <li>
                                                                        <a href="<?php echo $base_path; ?>pages/services.php">
                                                                            <div class="single-service-menu">
                                                                                <div class="icon">
                                                                                    <img src="<?php echo $base_path; ?>assets/images/service/07.svg" alt="service">
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h5 class="title"><?php echo t('home.services.service4_title'); ?></h5>
                                                                                    <p class="details">
                                                                                        <?php echo t('home.services.service4_desc'); ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_path; ?>pages/services.php">
                                                                            <div class="single-service-menu">
                                                                                <div class="icon">
                                                                                    <img src="<?php echo $base_path; ?>assets/images/service/12.svg" alt="service">
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h5 class="title"><?php echo t('home.services.service5_title'); ?></h5>
                                                                                    <p class="details">
                                                                                        <?php echo t('home.services.service5_desc'); ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_path; ?>pages/services.php">
                                                                            <div class="single-service-menu">
                                                                                <div class="icon">
                                                                                    <img src="<?php echo $base_path; ?>assets/images/service/01.svg" alt="service">
                                                                                </div>
                                                                                <div class="info">
                                                                                    <h5 class="title"><?php echo t('home.services.service6_title'); ?></h5>
                                                                                    <p class="details">
                                                                                        <?php echo t('home.services.service6_desc'); ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="menu-thumb pl--20">
                                                                    <img src="<?php echo $base_path; ?>assets/images/banner/24.webp" alt="">
                                                                    <a href="<?php echo $base_path; ?>pages/contact.php" class="rts-btn btn-primary mt--20" style="display: block; text-align: center;"><?php echo t('buttons.free_diagnosis'); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- À propos - Direct Link -->
                                        <li class="main-nav">
                                            <a href="<?php echo $base_path; ?>pages/about.php"><?php echo t('nav.about_company'); ?></a>
                                        </li>

                                        <!-- Contact - Direct Link -->
                                        <li class="main-nav">
                                            <a href="<?php echo $base_path; ?>pages/contact.php"><?php echo t('nav.contact'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="loader-wrapper">
                                    <div class="loader">
                                    </div>
                                    <div class="loader-section section-left"></div>
                                    <div class="loader-section section-right"></div>
                                </div>
                                <div class="button-area">
                                    <a href="<?php echo $base_path; ?>pages/contact.php" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn"><?php echo t('buttons.contact_us'); ?></a>
                                    <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                        <img class="menu-light" src="<?php echo $base_path; ?>assets/images/icons/01.svg" alt="Menu-icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
