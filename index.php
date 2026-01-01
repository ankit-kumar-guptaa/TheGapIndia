<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gap India - Leading Provider of Manpower Outsourcing Solutions. Recruitment & Staffing for IT, Oil & Gas, and Non-IT sectors.">
    <title>Gap India | Leading Manpower Outsourcing</title>

    <?php include 'include/assets.php'; ?>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- 1. PARALLAX HERO SECTION -->
    <section class="hero" id="home">
        <!-- Background & Text Carousel -->
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="hero-bg-img" style="background-image: url('assets/images/hero-1.png');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container hero-content" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="hero-badge">Since 2023 • New Delhi</div>
                        <h1>Delivering the Right Talent <br> <span style="color: var(--accent);">with the Right Skills at the Right Time</span></h1>
                        <p>Recruitment,Payroll, Staffing & Tech Solutions to take your business to the next level.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="hero-bg-img" style="background-image: url('assets/images/hero-2.jpg');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container hero-content" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="hero-badge">Trusted by 500+ Clients</div>
                        <h1>Delivering the Right Talent <br> <span style="color: var(--accent);">with the Right Skills at the Right Time</span></h1>
                        <p>Recruitment,Payroll, Staffing & Tech Solutions to take your business to the next level.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Buttons (Fixed Overlay) -->
        <div class="hero-btns-static">
            <button class="btn btn-primary-custom btn-lg" data-bs-toggle="modal" data-bs-target="#hireModal">Find Talent</button>
            <button class="btn btn-outline-custom btn-lg" data-bs-toggle="modal" data-bs-target="#cvModal">Find a Job</button>
        </div>

        <!-- Glassmorphism Client Slider with Exact 40 Logos -->
        <div class="hero-clients">
            <div class="marquee">
                <div class="marquee-content" id="logoMarquee">
                    <!-- Script will inject images pa-1 to pa-40 here -->
                </div>
            </div>
        </div>
    </section>



    
    <!-- 2. ABOUT US SECTION -->
    <section id="about" class="py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase mb-3">About Gap India</h5>
                    <h2 class="mb-4 display-5">We Don't Just Fill Roles,<br> We Build Futures.</h2>
                    <p class="text-secondary mb-4">Founded in 2023, The GAP India is a dynamic recruitment solutions provider based in New Delhi. We specialize in both IT and non-IT hiring, offering end-to-end talent acquisition services to clients across diverse industries.</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <h2 class="text-primary display-4 fw-bold mb-0">500+</h2>
                            <p class="text-muted small">Successful Placements</p>
                        </div>
                        <div class="col-6">
                            <h2 class="text-accent display-4 fw-bold mb-0">98%</h2>
                            <p class="text-muted small">Client Retention</p>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-outline-custom text-primary border-primary mt-4" style="color:var(--primary); border-color:var(--primary);">Learn More</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/images/about-1.png" class="img-fluid rounded-4 shadow-lg" alt="Team">
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: LEADERSHIP MESSAGE -->
    <section class="py-5 bg-white">
        <div class="container" data-aos="fade-up">
            <div class="leadership-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h4 class="text-accent mb-3">Vision from Leadership</h4>
                        <h2 class="mb-4">Driving Excellence in Every Placement</h2>
                        <p class="text-muted fs-5 fst-italic mb-4">"At GAP India, our mission is simple yet profound: to create the perfect symbiosis between talent and opportunity. We believe that every resume tells a story and every job opening is a new chapter waiting to be written. We are committed to rewriting the narrative of recruitment in India."</p>
                        <div class="d-flex align-items-center">
                            <!-- <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="60" alt="Director"> -->
                            <div>
                                <h5 class="mb-0">Gajendra Kumar Sharma</h5>
                                <small class="text-muted">Managing Director, GAP India</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block text-center">
                        <img src="assets/images/vision.jpg" alt="Vision" class="img-fluid" style="max-height: 250px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICES SECTION (Clean Cards - Image Top) -->
    <section id="services" class="bg-light py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase">Our Expertise</h5>
                <h2>Comprehensive Services</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Clear, transparent, and result-oriented recruitment strategies.</p>
            </div>

            <div class="row g-4">
                <!-- IT Recruitment -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="assets/images/it.jpg" alt="IT Recruitment">
                        </div>
                        <div class="service-body">
                            <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                            <h3 class="service-title">IT Recruitment</h3>
                            <p class="service-desc">Expert hiring for Software Dev, Cloud, Data AI, and Cybersecurity roles.</p>
                            <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#hireModal">Hire IT Talent <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Oil & Gas -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="assets/images/oil-gas.jpeg" alt="Oil & Gas">
                        </div>
                        <div class="service-body">
                            <div class="service-icon"><i class="fas fa-oil-can"></i></div>
                            <h3 class="service-title">Oil & Gas</h3>
                            <p class="service-desc">Specialized manpower for Upstream, Midstream, Downstream projects.</p>
                            <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#hireModal">Find Engineers <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Non-IT / Manufacturing -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="assets/images/manufacturing.jpg" alt="Manufacturing">
                        </div>
                        <div class="service-body">
                            <div class="service-icon"><i class="fas fa-cogs"></i></div>
                            <h3 class="service-title">Manufacturing</h3>
                            <p class="service-desc">Staffing for Plant Operations, Auto, Pharma, Retail & Logistics.</p>
                            <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Staff <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Executive Search -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="assets/images/executive-search.jpg" alt="Executive Search">
                        </div>
                        <div class="service-body">
                            <div class="service-icon"><i class="fas fa-user-tie"></i></div>
                            <h3 class="service-title">Executive Search</h3>
                            <p class="service-desc">Headhunting C-Suite leaders and Directors to drive strategy.</p>
                            <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#hireModal">Find Leaders <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- RPO -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="assets/images/rpo.jpg" alt="RPO">
                        </div>
                        <div class="service-body">
                            <div class="service-icon"><i class="fas fa-tasks"></i></div>
                            <h3 class="service-title">RPO Services</h3>
                            <p class="service-desc">End-to-end recruitment process outsourcing for bulk hiring.</p>
                            <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#hireModal">Outsource HR <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Campus Hiring -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-img-wrapper">
                            <img src="assets/images/campus-hiring.jpg" alt="Campus">
                        </div>
                        <div class="service-body">
                            <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
                            <h3 class="service-title">Campus Hiring</h3>
                            <p class="service-desc">Sourcing fresh, energetic talent directly from top campuses.</p>
                            <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#hireModal">Campus Drives <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE US (Modern Grid) -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row text-center mb-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto">
                    <h5 class="text-accent text-uppercase">Why Gap India?</h5>
                    <h2>Your Trusted Growth Partner</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-card text-center">
                        <div class="why-icon"><i class="fas fa-check-circle"></i></div>
                        <h5>Pre-Vetted Talent</h5>
                        <p class="text-muted small mb-0">Rigorous screening process to ensure only top-quality candidates reach you.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-card text-center">
                        <div class="why-icon"><i class="fas fa-bolt"></i></div>
                        <h5>Fast Turnaround</h5>
                        <p class="text-muted small mb-0">Agile recruitment process significantly reduces your time-to-hire.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-card text-center">
                        <div class="why-icon"><i class="fas fa-coins"></i></div>
                        <h5>Cost Effective</h5>
                        <p class="text-muted small mb-0">Customized solutions that maximize ROI on your manpower investment.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-card text-center">
                        <div class="why-icon"><i class="fas fa-headset"></i></div>
                        <h5>Dedicated Support</h5>
                        <p class="text-muted small mb-0">Continuous post-placement support and optimization for your team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: CLIENT TESTIMONIALS -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase">Testimonials</h5>
                <h2>What Our Partners Say</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card h-100">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="text-muted">"Gap India transformed our hiring process. Their ability to find niche IT talent within days is unmatched in the industry."</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px; height:40px;">RK</div>
                            <div>
                                <h6 class="mb-0">Rohit Khanna</h6>
                                <small class="text-muted">CTO, TechFlow Solutions</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card h-100">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="text-muted">"We needed 50+ specialized engineers for our new refinery project. Gap India delivered quality candidates ahead of schedule."</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px; height:40px;">AM</div>
                            <div>
                                <h6 class="mb-0">Anjali Mehta</h6>
                                <small class="text-muted">HR Head, PetroGlobal</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card h-100">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        <p class="text-muted">"Professional, reliable, and cost-effective. Their manufacturing staffing solutions helped us scale production seamlessly."</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px; height:40px;">VS</div>
                            <div>
                                <h6 class="mb-0">Vikram Singh</h6>
                                <small class="text-muted">Ops Manager, AutoCorp</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. HIRING PROCESS (Now with Parallax) -->
    <section class="section-parallax py-5">
        <div class="section-overlay"></div>
        <div class="container py-5 position-relative" style="z-index: 2;">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase text-white">Workflow</h5>
                <h2 class="text-white">Our Hiring Process</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <div class="text-accent fs-1 mb-3"><i class="fas fa-comments"></i></div>
                        <h5>Engage</h5>
                        <p class="small text-muted">Discuss requirements</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <div class="text-accent fs-1 mb-3"><i class="fas fa-search-location"></i></div>
                        <h5>Source</h5>
                        <p class="small text-muted">Identify top talent</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <div class="text-accent fs-1 mb-3"><i class="fas fa-user-check"></i></div>
                        <h5>Select</h5>
                        <p class="small text-muted">Screen & Interview</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <div class="text-accent fs-1 mb-3"><i class="fas fa-handshake"></i></div>
                        <h5>Onboard</h5>
                        <p class="small text-muted">Successful Hiring</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. INDUSTRIES GRID -->
    <section id="industries" class="py-5 bg-light">
        <div class="container text-center py-5" data-aos="fade-up">
            <h5 class="text-accent text-uppercase mb-4">Industries We Serve</h5>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-laptop-code text-accent me-2"></i> IT Services
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-burn text-accent me-2"></i> Oil & Gas
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-university text-accent me-2"></i> BFSI
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-heartbeat text-accent me-2"></i> Healthcare
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-car text-accent me-2"></i> Automotive
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-shopping-cart text-accent me-2"></i> Retail & FMCG
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-broadcast-tower text-accent me-2"></i> Telecom
                </span>
                <span class="badge rounded-pill bg-white text-dark border p-3 fs-6 shadow-sm">
                    <i class="fas fa-truck text-accent me-2"></i> Logistics
                </span>
            </div>
        </div>
    </section>

<?php include 'include/footer.php'; ?>
