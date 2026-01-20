<?php
// Set base path for assets (relative to root)
$base_path = '../';

// Load configuration
require_once '../config.php';

// Page specific variables
$page_title = 'Contact Us - Invena Business Consulting';
$page_description = 'Get in touch with Invena Business Consulting. We are here to help your business grow.';
$body_class = 'contact-page';
$current_page = 'contact';

// Include header
require_once '../includes/header.php';
?>

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Contact Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="../index.php">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- contact area start -->
    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Get In Touch</span>
                        <h2 class="title rts-text-anime-style-1">Let's Start a Conversation
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-card">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Call Us</h5>
                            <a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-card">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Email Us</h5>
                            <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-card">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Visit Us</h5>
                            <p><?php echo CONTACT_ADDRESS; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--60">
                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <h3 class="title">Send Us a Message</h3>
                        <form action="#" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="rts-btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.636737072925!2d-73.98823492346552!3d40.74844097138555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1702395816144!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

<?php
// Include footer
require_once '../includes/footer.php';
?>
