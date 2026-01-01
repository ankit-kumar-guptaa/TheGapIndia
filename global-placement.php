<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Global Placement Services - Connecting Indian talent with global opportunities. Visa assistance, international recruitment, and cross-border hiring solutions.">
    <title>Global Placement | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1526304640152-d4619684e484?q=80&w=2070&auto=format&fit=crop'); /* Globe/International Image */
            background-size: cover;
            background-position: center;
            padding: 150px 0 80px;
            color: white;
            margin-bottom: 0;
            background-attachment: fixed;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 0, 128, 0.9) 0%, rgba(19, 136, 8, 0.8) 100%); /* Navy to Green Gradient */
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .feature-list i {
            color: var(--accent); /* Saffron */
            margin-right: 10px;
        }

        .service-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 4px solid var(--accent);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .flag-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-white text-uppercase letter-spacing-2 mb-3" style="color: #FF9933 !important;">International Opportunities</h5>
            <h1 class="display-3 fw-bold">Global Placement Services</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Bridging borders to connect world-class Indian talent with global enterprises.</p>
        </div>
    </section>

    <!-- INTRODUCTION SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/images/global.jpg" class="img-fluid rounded-4 shadow-lg mb-4" alt="Global Business">
                    <div class="bg-light p-4 rounded-4 border-start border-4 border-primary">
                        <h5 class="mb-3">Why Go Global with Gap India?</h5>
                        <ul class="list-unstyled feature-list mb-0">
                            <li class="mb-2"><i class="fas fa-globe-asia"></i> Access to Global Talent Pools</li>
                            <li class="mb-2"><i class="fas fa-passport"></i> Comprehensive Visa Assistance</li>
                            <li class="mb-2"><i class="fas fa-handshake"></i> Cultural Fit Assessment</li>
                            <li><i class="fas fa-plane-departure"></i> Seamless Relocation Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Expanding Horizons Beyond Borders</h2>
                    <p class="text-muted mb-4">In an increasingly interconnected world, talent knows no boundaries. Gap India's Global Placement division specializes in identifying high-potential professionals from India and placing them in prestigious organizations across the Middle East, Europe, North America, and APAC regions.</p>
                    <p class="text-muted mb-4">We understand the complexities of international recruitment, from regulatory compliance to cultural nuances. Our dedicated team ensures a smooth transition for both the employer and the employee, fostering long-term international partnerships.</p>
                    
                    <h5 class="mt-5 mb-3" style="color: var(--primary);">Our Global Reach:</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-map-marker-alt"></i> Middle East (UAE, Saudi Arabia)</li>
                                <li><i class="fas fa-map-marker-alt"></i> North America (USA, Canada)</li>
                                <li><i class="fas fa-map-marker-alt"></i> Europe (UK, Germany)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-map-marker-alt"></i> Southeast Asia (Singapore)</li>
                                <li><i class="fas fa-map-marker-alt"></i> Australia & New Zealand</li>
                                <li><i class="fas fa-map-marker-alt"></i> Remote Global Roles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase letter-spacing-2" style="color: var(--accent);">Comprehensive Solutions</h5>
                <h2 class="fw-bold" style="color: var(--primary);">International Recruitment Services</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">End-to-end support for cross-border hiring.</p>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-primary"><i class="fas fa-search-location fa-3x"></i></div>
                            <h4 class="card-title fw-bold mb-3">Talent Sourcing</h4>
                            <p class="card-text text-muted">Identifying candidates with the right skills and willingness to relocate. We screen for language proficiency and technical expertise required for international roles.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-success"><i class="fas fa-file-contract fa-3x"></i></div>
                            <h4 class="card-title fw-bold mb-3">Visa & Documentation</h4>
                            <p class="card-text text-muted">Guiding candidates through the complex visa application processes, work permits, and necessary legal documentation for different countries.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-warning"><i class="fas fa-plane fa-3x"></i></div>
                            <h4 class="card-title fw-bold mb-3">Relocation Support</h4>
                            <p class="card-text text-muted">Assisting with travel arrangements, temporary housing, and pre-departure orientation to ensure candidates settle in quickly.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-danger"><i class="fas fa-balance-scale fa-3x"></i></div>
                            <h4 class="card-title fw-bold mb-3">Compliance & Legal</h4>
                            <p class="card-text text-muted">Ensuring all hiring practices adhere to the labor laws of both the source and destination countries to mitigate risks.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-info"><i class="fas fa-language fa-3x"></i></div>
                            <h4 class="card-title fw-bold mb-3">Cultural Training</h4>
                            <p class="card-text text-muted">Providing sensitization workshops to help candidates understand the work culture and social norms of their new country.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body p-4 text-center">
                            <div class="mb-3 text-dark"><i class="fas fa-user-shield fa-3x"></i></div>
                            <h4 class="card-title fw-bold mb-3">Background Checks</h4>
                            <p class="card-text text-muted">Conducting rigorous international background verification including criminal records, education, and employment history.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Key Industries We Serve</h2>
                    <p class="text-muted mb-4">We specialize in placing talent across various high-demand sectors globally.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center border-0 px-0 mb-2">
                            <span class="badge bg-primary rounded-pill me-3"><i class="fas fa-user-nurse"></i></span>
                            <div>
                                <h6 class="mb-0 fw-bold">Healthcare & Nursing</h6>
                                <small class="text-muted">Doctors, Nurses, Allied Health Professionals</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center border-0 px-0 mb-2">
                            <span class="badge bg-success rounded-pill me-3"><i class="fas fa-hard-hat"></i></span>
                            <div>
                                <h6 class="mb-0 fw-bold">Construction & Engineering</h6>
                                <small class="text-muted">Civil Engineers, Project Managers, Skilled Labor</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center border-0 px-0 mb-2">
                            <span class="badge bg-warning text-dark rounded-pill me-3"><i class="fas fa-laptop-code"></i></span>
                            <div>
                                <h6 class="mb-0 fw-bold">Information Technology</h6>
                                <small class="text-muted">Software Developers, Data Scientists, IT Support</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center border-0 px-0 mb-2">
                            <span class="badge bg-danger rounded-pill me-3"><i class="fas fa-oil-can"></i></span>
                            <div>
                                <h6 class="mb-0 fw-bold">Oil & Gas</h6>
                                <small class="text-muted">Petrochemical Engineers, Safety Officers, Technicians</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 order-lg-1" data-aos="fade-right">
                    <img src="assets/images/global2.jpg" class="img-fluid rounded-4 shadow" alt="Global Industries">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-dark text-white text-center" style="background: linear-gradient(90deg, #1e3a8a 0%, #000080 100%);">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Ready to Hire Globally?</h2>
            <p class="lead mb-4 text-white-50">Connect with the best Indian talent for your international projects.</p>
            <button class="btn btn-lg rounded-pill px-5 fw-bold" style="background-color: var(--accent); color: white;" data-bs-toggle="modal" data-bs-target="#hireModal">Partner With Us</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>