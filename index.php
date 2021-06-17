<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("headmeta.php")
    ?>
</head>

<body>
    <?php
        include("navbar.php");
    ?>
    <!--Header section-->
    <?php
        include("header.php");
    ?>
    <!--Header section-->
    <!-- Services Section -->
    <?php
        include("service-section.php")
    ?>
    <!-- Services Section -->
    <!-- About Section -->
    <div class="about-section  container-fluid">
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header text-center">
                <h3>About Us</h3>
                <img class="separator" src="images/seprator.png" alt="seprator" />
            </div><!-- Section Header /- -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 about-content-left">
                    <div class="about-box">
                        <h5><i class="fas fa-tools"></i>Certified Contractors</h5>
                        <p>Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a
                            wing and a</p>
                    </div>
                    <div class="about-box">
                        <h5><i class="fas fa-tools"></i>We Offer Quality Work</h5>
                        <p>Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a
                            wing and a</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 about-img">
                    <img src="images/about.jpg" alt="about" />
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 about-content-right">
                    <div class="about-box">
                        <h5><i class="fas fa-tools"></i>Dedicated Team</h5>
                        <p>Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a
                            wing and a</p>
                    </div>
                    <div class="about-box">
                        <h5><i class="fas fa-tools"></i>24/7 Avilability</h5>
                        <p>Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a
                            wing and a</p>
                    </div>
                </div>

            </div>
            <button type="button" class="btn btn-dark"><a style="text-decoration: none; color:white;"
                    href="/about.html">Read more >></a></button>
        </div>
        <!-- Container /- -->
    </div><!-- About Section -->
    <!-- Gallery Section -->
    <div class="gallery-section    mb-3">
        <div class="gallery-header container-fluid">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header text-center">
                    <h3>latest projects</h3>
                    <img src="images/seprator.png" alt="seprator" />
                </div><!-- Section Header /- -->

            </div><!-- Container /- -->
        </div>
        <ul class="portfolio-list  row container mx-auto">
            <li class="col-md-3 col-sm-4 col-xs-6  design">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-1.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-1.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing1</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-2.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-2.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing2</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-3.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-3.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing3</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-4.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-4.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing 4</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6  design">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-5.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-5.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6  video">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-6.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-6.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6  photography">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-7.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-7.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-4 col-xs-6  web">
                <div class="content-image-block">
                    <img class="img-thumbnail" src="images/gallery-8.jpg" alt="gallery">
                    <div class="content-block-hover">
                        <a class="zoom-in" href="images/gallery-8.jpg" title="Expand"><i
                                class="icon icon-Search"></i></a>
                        <h5>elecrical testing</h5>
                        <span>lighting</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- Gallery Section /- -->
    <!--CEO's tab-->
    <div class="container row p-5">
        <div class="col-sm-4">
            <img src="/images/gallery-3.jpg" alt="" class="img-thumbnail" style="border-radius: 50%;">
        </div>
        <div class="col-sm-8 p-5">
            <div class="">
                <h1>James S Wilken</h1>
                <strong>Founder and Managing Director</strong>
                <p style="text-align: justify;">
                    Mr. Wilken started his career in 1994 with one of the most reputed engineering companies in the
                    world and worked on a Thermal Power Station project. Before he founded JW Electricals in 2001, he
                    has worked with various engineering companies and headed several prestigious projects around the
                    globe. He has more than 20 years of experience in the design, planning, execution and operation, and
                    maintenance of electrical projects.
                </p>
            </div>
        </div>
    </div>
    <!-- Call Out -->
        <?php
            include("call-out.php");
        ?>
    <!-- Call Out /- -->

    <!-- Testimonial Section -->
    <div class="testimonial-section   container-fluid mt-3">
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header text-center">
                <h3>testimonials</h3>
                <img src="images/seprator.png" alt="seprator" />
            </div><!-- Section Header /- -->
            <!-- Row -->
            <div class="row testimonies  ">
                <div class="col-md-5 card p-4 mt-4">
                    <div class="d-flex">
                        <div class="">
                            <img src="images/testi-1.jpg" alt="testi" />
                        </div>

                        <div class="container">
                            <h5> Sandy Alext</h5>
                            <span>Contractor</span>
                            <p>"time to raise the curtain on the Muppet Show tonight. Fleeing from the Cylon tyranny the
                                last Battlestar – Galactica - " </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 card p-4 mt-4">
                    <div class="d-flex">
                        <div class="">
                            <img src="images/testi-2.jpg" alt="testi" />
                        </div>

                        <div class="container">
                            <h5> Sandy Alext</h5>
                            <span>Contractor</span>
                            <p class="">After extensive research, we selected and engaged Jwelectricals to prepare full
                                elecrical service in our new headquaters. From inception, their customer
                                service was exemplary in courtesy and professionalism.

                                Lastly, and most importantly, we have received numerous compliments on our website and
                                marketing materials, from clients and industry peers. We highly recommend Jwelectricals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 card p-4 mt-4">
                    <div class="d-flex">
                        <div class="">
                            <img src="images/team-3.jpg" alt="testi" class="w-75" />
                        </div>

                        <div class="container">
                            <h5> Sandy Alext</h5>
                            <span>Contractor</span>
                            <p>"time to raise the curtain on the Muppet Show tonight. Fleeing from the Cylon tyranny the
                                last Battlestar – Galactica - " </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 card p-4 mt-4">
                    <div class="d-flex">
                        <div class="">
                            <img src="images/team-2.jpg" alt="testi" class="w-75" />
                        </div>

                        <div class="container">
                            <h5> Sandy Alext</h5>
                            <span>Contractor</span>
                            <p>"time to raise the curtain on the Muppet Show tonight. Fleeing from the Cylon tyranny the
                                last Battlestar – Galactica - " </p>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- Container /- -->
    </div><!-- Testimonial Section /- -->
    <!-- Footer Main -->
    <?php
        include("footer.php")
    ?>
</body>

</html>