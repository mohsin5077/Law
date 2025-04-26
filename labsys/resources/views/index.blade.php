@extends('layouts.home_layout')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" />

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">Electronics Testing
                    and Test Laboratory</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    We treat your product with the same level of commitment and sense of ownership as if it was our own
                </p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#about" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3>Our Mission & Vision</h3>
                        <img src="aboutimg1.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <div class="color">
                            <p>At SRS Electronical Engineering, our mission is to revolutionize the world of electronics
                                through innovation, precision, and integrity. We strive to create cutting-edge solutions
                                that not only meet industry demands but also anticipate future needs. Our work is driven by
                                a deep commitment to quality and a passion for pushing technological boundaries .</p>
                            <p>Our vision is to become a leading force in electronic engineering — a name synonymous with
                                reliability, creativity, and excellence. We aim to inspire progress by building smarter
                                systems, fostering long-term partnerships, and contributing to a more connected and
                                efficient world. </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                            <h3>Our Team</h3>
                            <div class="color2">
                                Behind every successful project at SRS Electrical Engineering is a team of dedicated
                                professionals driven by expertise, innovation, and passion. Our team is the heartbeat of
                                everything we do.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> <span>Skilled Professionals: A team of
                                            experienced engineers, technicians, project managers, and support staff.
                                            .</span></li>
                                    <li><i class="bi bi-check-circle-fill"></i> <span>Commitment to Safety: Focused on
                                            ensuring safety, precision, and client satisfaction in every project. </span>
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> <span>Continuous Growth: We learn, grow, and
                                            lead as a team, building trust and expertise.
                                        </span></li>
                                </ul>
                                <p>
                                    At SRS, it's not just about wires and circuits—it's about people working with purpose.
                                    We continue to grow, learn, and lead together, powered by trust and a passion for
                                    engineering excellence.
                                </p>
                            </div>



                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://youtu.be/iNfZmMwOED0?si=70qUCTcdZRuNYHz8"
                                    class="glightbox pulsating-play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Featured Srvices<br></p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/cpri.avif" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Central Power Research Institute</h3>
                                </a>
                                <p>The Central Power Research Institute (CPRI) primarily focuses on the research and
                                    development of power systems and electrical equipment.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/producttesting.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a href="producttesting.html" class="stretched-link">
                                    <h3>Product Testing</h3>
                                </a>
                                <p>The goal here is to showcase the variety of product testing options available, , the
                                    importance of quality assurance, and how these tests ensure that automated lab systems
                                    and their components are efficient, reliable, and meet industry standards.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/pm1.png" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a href="PMA.html" class="stretched-link">
                                    <h3>Predictive Maintenance and Analytics
                                    </h3>
                                </a>
                                <p>Instead of relying on fixed maintenance schedules or reacting to breakdowns, labs can now
                                    adopt a proactive approach that maximizes equipment lifespan and minimizes unexpected
                                    downtimes.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->


        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <i class="bi bi-clipboard-check"></i>


                            <h4 class="d-none d-lg-block">Functional Testing</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <i class="bi bi-gear"></i>
                            <h4 class="d-none d-lg-block">Integration Testing</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <i class="bi bi-terminal"></i>
                            <h4 class="d-none d-lg-block">Data Accuracy Testing</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                            <i class="bi bi-check-circle"></i> <!-- Represents success/pass -->
                            <h4 class="d-none d-lg-block">Security Testing</h4>
                        </a>
                    </li>
                </ul><!-- End Tab Nav -->

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>FUNCTIONAL TESTING <br>
                                    Overview:</h3>
                                <p class="fst-italic">
                                    Functional testing is a type of software testing that focuses on verifying whether the
                                    software or system behaves according to the specified functional requirements. In the
                                    context of a Lab Automation System, functional testing ensures that all the system's
                                    features, such as automated processes, data input, and equipment control, work as
                                    intended. </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i>
                                        <spab>To confirm that the Lab Automation System meets the specified requirements.
                                        </spab>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> <span>To check if the system performs its intended
                                            functions correctly and provides the desired outcomes. </span>.</li>
                                    <li><i class="bi bi-check2-all"></i> <span>To ensure that all automated workflows, data
                                            processing, and integrations function as expected. </span></li>
                                </ul>
                                <p>
                                    For a Lab Automation System, functional testing may involve testing a process like
                                    automating the sample testing for a chemical analysis machine. This would ensure that
                                    the sample is correctly loaded, the correct tests are performed, data is collected, and
                                    the test results are reported accurately to the user. </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/pic1.avif" alt="" class="img-fluid"> <br>
                                <img src="assets/img/pic2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->

                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>INTEGRATION TESTING <br> Overview:</h3>
                                <p class="fst-italic">
                                    Integration testing is a type of software testing where individual software modules are
                                    combined and tested as a group to ensure they work together as expected. It focuses on
                                    identifying issues that may arise when different components of the system interact with
                                    each other.
                                </p>

                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Testing if the software properly controls
                                            laboratory instruments like spectrometers, microscopes, or automated
                                            analyzers.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Ensuring smooth communication between
                                            various modules of the system, such as data collection, analysis, reporting, and
                                            storage.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Verifying that the system correctly stores
                                            and retrieves data from the database, and that the database communicates
                                            seamlessly with other system components.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>If the system interfaces with third-party
                                            applications or services (e.g., cloud storage, analysis tools), integration
                                            testing ensures these systems work together.</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/pic3.avif" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->

                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>DATA ACCURACY TESTING <br> Overview: </h3>
                                <p>
                                    Data Accuracy Testing is critical in systems where precise data is crucial for correct
                                    results, such as in Lab Automation Systems. In such environments, ensuring that data is
                                    correctly input, processed, stored, and output is paramount. Any error in data accuracy
                                    can lead to incorrect conclusions, wrong lab results, or even potential hazards in
                                    critical environments.

                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Ensure that data entering the system
                                            (whether from users, instruments, or external sources) is correctly captured and
                                            processed.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Make sure that the outputs and test results
                                            generated by the system are accurate, based on the input data.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Ensuring that all incoming data (from
                                            sensors, user inputs, automated lab equipment, etc.) is captured accurately.
                                        </span></li>
                                </ul>
                                <p class="fst-italic">
                                    Ensuring that the system correctly retrieves the stored data and outputs it accurately
                                    to reports, dashboards, or other user interfaces.
                                    Validating that data displayed on user screens or in reports matches the original data
                                    input and processed results.

                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/data.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->

                    <div class="tab-pane fade" id="features-tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>SECURITY TESTING <br> Overview: </h3>
                                <p>
                                    Security Testing ensures that the Lab Automation System is protected against potential
                                    threats and vulnerabilities that could compromise the integrity, confidentiality, and
                                    availability of sensitive data. This is especially important in laboratory environments
                                    where patient records, test results, and proprietary research data are handled.
                                </p>
                                <!-- <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                      </p> -->
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Identify vulnerabilities in the system’s
                                            network and software components. </span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Ensure data protection against unauthorized
                                            access or leaks. </span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Validate user authentication and role-based
                                            access control. </span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/st.webp" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->

                </div>

            </div>

        </section><!-- /Features Section -->


        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">
            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="" />

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec
                                        porttitora entum suscipit rhoncus. Accusantium quam,
                                        ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure
                                        esse labore quem cillum quid cillum eram malis quorum
                                        velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim
                                        sint quorum nulla quem veniam duis minim tempor labore
                                        quem eram duis noster aute amet eram fore quis sint
                                        minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla
                                        culpa multos export minim fugiat minim velit minim dolor
                                        enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="" />
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure
                                        aliqua veniam tempor noster veniam enim culpa labore duis
                                        sunt culpa nulla illum cillum fugiat legam esse veniam
                                        culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonials Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>CHECK OUR TEAM</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="pic">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
        </section>
        <!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>CONNECT WITH US</p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>
                    </div>

                    @if (session('success'))
                        <div style="color: green;">{{ session('success') }}</div>
                    @endif

                    <div class="col-lg-6">
                        <form action="{{ url('contact-submit') }}" method="post" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="500">
                            @csrf
                            @method('POST')
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required />
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required />
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required />
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                                </div>

                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Form -->

            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection
