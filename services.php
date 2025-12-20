<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gap India Services - IT Recruitment, Non-IT Staffing, Oil & Gas Hiring, Executive Search, and more.">
    <title>Our Services | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            padding: 150px 0 80px;
            color: white;
            margin-bottom: 0;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgb(22 32 54 / 85%) 0%, rgba(15, 23, 42, 0.95) 100%);
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .service-detail-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            transition: 0.3s;
            border: 1px solid #f1f5f9;
        }

        .service-detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-color: var(--accent);
        }

        .service-img-top {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .service-body {
            padding: 30px;
        }

        .service-icon-lg {
            width: 70px;
            height: 70px;
            background: var(--white);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 28px;
            margin-top: -65px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
            z-index: 2;
        }

        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, #0f172a 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 400px;
            height: 100%;
            background: radial-gradient(circle, rgba(249, 115, 22, 0.1) 0%, rgba(0,0,0,0) 70%);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Comprehensive Solutions</h5>
            <h1 class="display-3 fw-bold">Our Services</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">From executive search to large-scale recruitment, we provide end-to-end staffing solutions tailored to your business needs.</p>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Service 1: IT Recruitment -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" id="it-recruitment">
                    <div class="service-detail-card">
                        <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=2069&auto=format&fit=crop" class="service-img-top" alt="IT Recruitment">
                        <div class="service-body">
                            <div class="service-icon-lg"><i class="fas fa-laptop-code"></i></div>
                            <h3>IT Recruitment</h3>
                            <p class="text-muted mb-4">We specialize in finding top-tier tech talent, from software developers and data scientists to cybersecurity experts and IT leadership.</p>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Software Development</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Cloud & DevOps</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Data Science & AI</li>
                            </ul>
                            <div class="d-grid gap-2">
                                <a href="it-recruitment.php" class="btn btn-outline-dark rounded-pill">Learn More</a>
                                <button class="btn btn-primary-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#hireModal">Hire IT Talent</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Non-IT Staffing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" id="non-it-staffing">
                    <div class="service-detail-card">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2032&auto=format&fit=crop" class="service-img-top" alt="Non-IT Staffing">
                        <div class="service-body">
                            <div class="service-icon-lg"><i class="fas fa-briefcase"></i></div>
                            <h3>Non-IT Staffing</h3>
                            <p class="text-muted mb-4">Providing skilled professionals for administrative, operational, finance, HR, and sales roles across various industries.</p>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Finance & Accounting</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Sales & Marketing</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Operations & Admin</li>
                            </ul>
                            <div class="d-grid gap-2">
                                <a href="non-it-staffing.php" class="btn btn-outline-dark rounded-pill">Learn More</a>
                                <button class="btn btn-primary-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Staff</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Oil & Gas Hiring -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" id="oil-gas">
                    <div class="service-detail-card">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070&auto=format&fit=crop" class="service-img-top" alt="Oil & Gas">
                        <div class="service-body">
                            <div class="service-icon-lg"><i class="fas fa-oil-can"></i></div>
                            <h3>Oil & Gas Hiring</h3>
                            <p class="text-muted mb-4">Specialized recruitment for the energy sector, connecting you with engineers, project managers, and technical experts.</p>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Upstream & Downstream</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Design Engineering</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Safety & Compliance</li>
                            </ul>
                            <div class="d-grid gap-2">
                                <a href="oil-gas-hiring.php" class="btn btn-outline-dark rounded-pill">Learn More</a>
                                <button class="btn btn-primary-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Experts</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Executive Search -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" id="executive-search">
                    <div class="service-detail-card">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop" class="service-img-top" alt="Executive Search">
                        <div class="service-body">
                            <div class="service-icon-lg"><i class="fas fa-user-tie"></i></div>
                            <h3>Executive Search</h3>
                            <p class="text-muted mb-4">Identifying and recruiting C-suite executives and senior leaders who can drive your organization's vision and growth.</p>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> C-Level Executives</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Directors & VPs</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Board Members</li>
                            </ul>
                            <div class="d-grid gap-2">
                                <a href="executive-search.php" class="btn btn-outline-dark rounded-pill">Learn More</a>
                                <button class="btn btn-primary-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#hireModal">Find Leaders</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: RPO Solutions -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" id="rpo">
                    <div class="service-detail-card">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" class="service-img-top" alt="RPO Solutions">
                        <div class="service-body">
                            <div class="service-icon-lg"><i class="fas fa-tasks"></i></div>
                            <h3>RPO Solutions</h3>
                            <p class="text-muted mb-4">Recruitment Process Outsourcing to manage your entire hiring lifecycle, reducing costs and improving efficiency.</p>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> High-Volume Hiring</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Process Optimization</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Employer Branding</li>
                            </ul>
                            <div class="d-grid gap-2">
                                <a href="rpo-solutions.php" class="btn btn-outline-dark rounded-pill">Learn More</a>
                                <button class="btn btn-primary-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#hireModal">Start RPO</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Campus Hiring -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" id="campus-hiring">
                    <div class="service-detail-card">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop" class="service-img-top" alt="Campus Hiring">
                        <div class="service-body">
                            <div class="service-icon-lg"><i class="fas fa-graduation-cap"></i></div>
                            <h3>Campus Hiring</h3>
                            <p class="text-muted mb-4">Connecting you with the brightest fresh talent from top universities and colleges across India.</p>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Fresh Graduates</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Internships</li>
                                <li class="mb-2"><i class="fas fa-check text-accent me-2"></i> Campus Drives</li>
                            </ul>
                            <div class="d-grid gap-2">
                                <a href="campus-hiring.php" class="btn btn-outline-dark rounded-pill">Learn More</a>
                                <button class="btn btn-primary-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#hireModal">Plan Campus Drive</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta-section">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in">
                    <h2 class="mb-4">Ready to Transform Your Workforce?</h2>
                    <p class="lead text-white-50 mb-5">Whether you need a single expert or an entire team, Gap India delivers quality manpower solutions that drive results.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <button class="btn btn-primary-custom btn-lg" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Talent Now</button>
                        <button class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#cvModal">Looking for a Job?</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>