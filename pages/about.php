<?php
// Load configuration
require_once '../config.php';

// Page specific variables
$page_title = 'About Us - Invena Business Consulting';
$page_description = 'Learn more about Invena Business Consulting and our team of experts.';
$body_class = 'about-page';
$current_page = 'about';

// Include header
require_once '../includes/header.php';
?>

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">About Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="../index.php">Home</a>
                        <span> / </span>
                        <a href="#" class="active">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- rts-about area start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <span class="pre">About Our Company</span>
                            <h2 class="title rts-text-anime-style-1">Leading Business <br>
                                Consulting Agency
                            </h2>
                        </div>
                        <p class="disc">
                            We believe in the power of collaboration and personalized solutions. By understanding our
                            clients' unique needs and goals, we tailor our approach to deliver strategic insights,
                            creative solutions, and measurable results that drive sustainable growth.
                        </p>
                        <p class="disc mt--20">
                            Our team of experienced consultants brings together decades of expertise across various
                            industries, enabling us to provide comprehensive business solutions that address your
                            most challenging obstacles.
                        </p>
                        <div class="call-and-sign-area mt--40">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="tel:<?php echo CONTACT_PHONE; ?>">
                                        <h6 class="title"><?php echo CONTACT_PHONE; ?></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--70 mt_md--50 mt_sm--50">
                    <div class="thumbnail-about-and-progress-1">
                        <div class="thumbnail-about-1">
                            <img src="../assets/images/about/01.webp" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">
                            <div class="progress-area-wrapper images-r">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="95" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">95</text>
                                    </svg>
                                </div>
                                <h5 class="title">Success Rate</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->

    <!-- rts mission vision area start -->
    <div class="rts-mission-vision-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Our Values</span>
                        <h2 class="title rts-text-anime-style-1">Mission & Vision
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                <div class="col-lg-6">
                    <div class="mission-vision-item">
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="title">Our Mission</h3>
                        <p class="disc">
                            To empower businesses with innovative strategies and personalized solutions that drive
                            sustainable growth and long-term success. We are committed to delivering exceptional
                            value through our expertise, integrity, and dedication to client success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-vision-item">
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="title">Our Vision</h3>
                        <p class="disc">
                            To be the premier business consulting partner recognized globally for transforming
                            challenges into opportunities and helping organizations achieve their full potential
                            through strategic innovation and excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts mission vision area end -->

    <!-- rts cta area start -->
    <div class="rts-cta-area-one rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-area-wrapper-one bg_image">
                        <div class="left-areas">
                            <span class="pre">Ready to Get Started?</span>
                            <h3 class="title">Let's Grow Your Business Together</h3>
                        </div>
                        <div class="right-area">
                            <a href="contact.php" class="rts-btn btn-primary">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->

<?php
// Include footer
require_once '../includes/footer.php';
?>
