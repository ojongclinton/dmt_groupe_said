<?php
// Set base path for assets (relative to root)
$base_path = '../';

// Load configuration
require_once '../config.php';

// Page specific variables
$page_title = t('about_page.page_title') . ' - ' . SITE_NAME;
$page_description = 'Learn more about DMT Groupe and our mission to transform hotels and restaurants through expert consulting services.';
$body_class = 'about-page';
$current_page = 'about';

// Include header
require_once '../includes/header.php';
?>


    <!-- rts about area start -->
    <div class="rts-about-area-two rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img src="../assets/images/about/04.webp" alt="about">
                        <div class="small-image">
                            <img src="../assets/images/about/05.webp" alt="small">
                        </div>
                        <div class="counter-about-area">
                            <h2 class="counter title"><span class="odometer" data-count="10">00</span>+
                            </h2>
                            <span><?php echo t('home.about.progress_label'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="bg-content"><?php echo t('about_page.page_title'); ?></span>
                            <span class="pre"><?php echo t('about_page.page_subtitle'); ?></span>
                            <h2 class="title rts-text-anime-style-1"><?php echo t('about_page.mission_title'); ?>
                            </h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc">
                                <?php echo t('about_page.mission_content'); ?>
                            </p>
                        </div>
                        <div class="call-and-sign-area two">
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
                                <img src="../assets/images/about/sign.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="../assets/images/about/shape/01.svg" alt="shape" class="one">
            <img src="../assets/images/about/shape/02.svg" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about area end -->


    <!-- team section start -->
    <div class="rts-team-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb--60">
                    <div class="title-style-two center">
                        <span class="bg-content"><?php echo t('about_page.team_title'); ?></span>
                        <h2 class="title rts-text-anime-style-1"><?php echo t('about_page.team_title'); ?></h2>
                    </div>
                </div>
            </div>

            <!-- Team Member 1 - Photo Left -->
            <div class="row align-items-center mb--80">
                <div class="col-lg-4 mb_sm--30 mb_md--30">
                    <div class="team-member-image">
                        <img src="../assets/images/team/member1.jpg" alt="<?php echo t('about_page.team1_name'); ?>" class="w-100" style="border-radius: 8px; max-width: 400px; max-height: 500px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-member-details">
                        <span class="member-name" style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;"><?php echo t('about_page.team1_name'); ?></span>
                        <h3 class="member-role" style="font-size: 24px; font-weight: 700; margin: 15px 0 20px;"><?php echo t('about_page.team1_role'); ?></h3>
                        <div class="member-bio" style="font-size: 16px; line-height: 1.8; color: #666;">
                            <?php echo t('about_page.team1_bio'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border-top: 1px solid #e5e5e5; margin: 60px 0;">

            <!-- Team Member 2 - Photo Right -->
            <div class="row align-items-center mb--80">
                <div class="col-lg-8 order-lg-1 order-2">
                    <div class="team-member-details">
                        <span class="member-name" style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;"><?php echo t('about_page.team2_name'); ?></span>
                        <h3 class="member-role" style="font-size: 24px; font-weight: 700; margin: 15px 0 20px;"><?php echo t('about_page.team2_role'); ?></h3>
                        <div class="member-bio" style="font-size: 16px; line-height: 1.8; color: #666;">
                            <?php echo t('about_page.team2_bio'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 order-1 mb_sm--30 mb_md--30">
                    <div class="team-member-image">
                        <img src="../assets/images/team/member2.jpg" alt="<?php echo t('about_page.team2_name'); ?>" class="w-100" style="border-radius: 8px; max-width: 400px; max-height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>

            <hr style="border-top: 1px solid #e5e5e5; margin: 60px 0;">

            <!-- Team Member 3 - Photo Left -->
            <div class="row align-items-center mb--80">
                <div class="col-lg-4 mb_sm--30 mb_md--30">
                    <div class="team-member-image">
                        <img src="../assets/images/team/member3.jpg" alt="<?php echo t('about_page.team3_name'); ?>" class="w-100" style="border-radius: 8px; max-width: 400px; max-height: 500px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-member-details">
                        <span class="member-name" style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;"><?php echo t('about_page.team3_name'); ?></span>
                        <h3 class="member-role" style="font-size: 24px; font-weight: 700; margin: 15px 0 20px;"><?php echo t('about_page.team3_role'); ?></h3>
                        <div class="member-bio" style="font-size: 16px; line-height: 1.8; color: #666;">
                            <?php echo t('about_page.team3_bio'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border-top: 1px solid #e5e5e5; margin: 60px 0;">

            <!-- Team Member 4 - Photo Right -->
            <div class="row align-items-center mb--80">
                <div class="col-lg-8 order-lg-1 order-2">
                    <div class="team-member-details">
                        <span class="member-name" style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;"><?php echo t('about_page.team4_name'); ?></span>
                        <h3 class="member-role" style="font-size: 24px; font-weight: 700; margin: 15px 0 20px;"><?php echo t('about_page.team4_role'); ?></h3>
                        <div class="member-bio" style="font-size: 16px; line-height: 1.8; color: #666;">
                            <?php echo t('about_page.team4_bio'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 order-1 mb_sm--30 mb_md--30">
                    <div class="team-member-image">
                        <img src="../assets/images/team/member4.jpg" alt="<?php echo t('about_page.team4_name'); ?>" class="w-100" style="border-radius: 8px; max-width: 400px; max-height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>

            <hr style="border-top: 1px solid #e5e5e5; margin: 60px 0;">

            <!-- Team Member 5 - Photo Left -->
            <div class="row align-items-center mb--80">
                <div class="col-lg-4 mb_sm--30 mb_md--30">
                    <div class="team-member-image">
                        <img src="../assets/images/team/member5.jpg" alt="<?php echo t('about_page.team5_name'); ?>" class="w-100" style="border-radius: 8px; max-width: 400px; max-height: 500px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-member-details">
                        <span class="member-name" style="font-size: 14px; color: #999; text-transform: uppercase; letter-spacing: 1px;"><?php echo t('about_page.team5_name'); ?></span>
                        <h3 class="member-role" style="font-size: 24px; font-weight: 700; margin: 15px 0 20px;"><?php echo t('about_page.team5_role'); ?></h3>
                        <div class="member-bio" style="font-size: 16px; line-height: 1.8; color: #666;">
                            <?php echo t('about_page.team5_bio'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team section end -->

    <!-- rts business goal area start -->
    <div class="business-goal-area-2 rts-section-gapBottom">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content"><?php echo t('about_page.business_goal.busg_backg'); ?></span>
                            <span class="pre"><?php echo t('about_page.business_goal.busgpre_title'); ?></span>
                            <h2 class="title rts-text-anime-style-1">
                                <?php echo t('about_page.business_goal.busg_title'); ?>
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img src="../assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title"><?php echo t('about_page.business_goal.sub1_title'); ?></h4>
                                <p class="disc">
                                    <?php echo t('about_page.business_goal.sub1_txt'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy">
                            <div class="icon">
                                <img src="../assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title"><?php echo t('about_page.business_goal.sub2_title'); ?></h4>
                                <p class="disc">
                                    <?php echo t('about_page.business_goal.sub2_txt'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="#" class="rts-btn btn-primary"><?php echo t('about_page.business_goal.busg_cont'); ?></a>
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
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img src="../assets/images/business-goal/02.webp" alt="">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img src="../assets/images/business-goal/01.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts clients review area start -->
    <div class="rts-client-review-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content"><?php echo t('about_page.review.rev_backg'); ?></span>
                            <span class="pre"><?php echo t('about_page.review.revpre_title'); ?></span>
                            <h2 class="title rts-text-anime-style-1"><?php echo t('about_page.review.rev_title'); ?>
                            </h2>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="swiper-pagination-fraction"></div>
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="testimonials-wrapper-swiper-demo-2">
                        <div class="swiper mySwiper-testimonials-dmeo-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="../assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                <?php echo t('about_page.review.rev_txt1'); ?>
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Franck N'Guessan</h6>
                                                <!-- <p>Designer at <b>Vertex Agency</b></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="../assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                <?php echo t('about_page.review.rev_txt2'); ?>
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Jean-Marc kouam</h6>
                                                <!-- <p>Designer at <b>Vertex Agency</b></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-main-wrapper-two">
                                        <div class="left-thumbnail">
                                            <img src="../assets/images/testimonials/01.webp" alt="testimonials">
                                        </div>
                                        <div class="right-content-testimonials">
                                            <p class="disc">
                                                <?php echo t('about_page.review.rev_txt3'); ?>
                                            </p>
                                            <div class="name-desig">
                                                <h6 class="title">Daniel Foster</h6>
                                                <!-- <p>Designer at <b>Vertex Agency</b></p> -->
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
    <!-- rts clients review area end -->

<?php
// Include footer
require_once '../includes/footer.php';
?>
