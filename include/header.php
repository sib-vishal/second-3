<header class="header">
    <div class="top_header">
        <div class="containerFull">
            <div class="row align-items-center">
                <div class="col-lg-4 logo_img">
                    <img src="web-assets/images/logo.png" alt="">
                </div>
                <div class="col-lg-8 ">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-lg-7">
                            <p class="text-end">
                                Should you have inquiries, contact us:
                            </p>
                            <p class="text-end">
                                <a class="title text_secondary" href="#">215-673-2778</a>
                            </p>

                        </div>
                        <div class="col-lg-4">
                            <a class="btn_1" href="#">
                                Download Brochure
                            </a>

                        </div>

                    </div>
                    <div class="row align-items-center justify-content-end ">
                        <div class="col-md-7 ">
                            <div class="d-flex pt-2 gap-1 justify-content-end">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <a class="btn_1" href="#">
                                Covid Updates
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="bottom_header mt-3">
        <div class="containerFull">
            <ul class="header-links">
                <li><a class="<?php if ($page == 'home') {
                    echo 'active';
                } ?>" href="index.php">Home</a></li>
                <li><a class="<?php if ($page == 'about') {
                    echo 'active';
                } ?>" href="about-us.php">About Us</a></li>
                <li><a class="<?php if ($page == 'services') {
                    echo 'active';
                } ?>" href="services.php">Our Services</a></li>
                <li><a class="<?php if ($page == 'gallery') {
                    echo 'active';
                } ?>" href="gallery.php">Our Gallery</a></li>
                <li><a class="<?php if ($page == 'resources') {
                    echo 'active';
                } ?>" href="resource.php">Resources</a></li>
                <li><a class="<?php if ($page == 'employment') {
                    echo 'active';
                } ?>" href="employment.php">Employment</a></li>
                <li><a class="<?php if ($page == 'refer') {
                    echo 'active';
                } ?>" href="#">Refer a Client</a></li>
                <li><a class="<?php if ($page == 'blog') {
                    echo 'active';
                } ?>" href="blog.php">Blog</a></li>
                <li><a class="<?php if ($page == 'contact') {
                    echo 'active';
                } ?>" href="contact-us.php">Contact Us</a></li>
            </ul>


        </div>
    </div>

</header>

<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header border-bottom">
        <h5 id="mobileMenuLabel">Second Bloom</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled menu_item">

            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>
</div>