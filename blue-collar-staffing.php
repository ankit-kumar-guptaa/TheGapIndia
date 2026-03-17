<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Collar Staffing Solutions | Gap India</title>
    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            padding: 180px 0 100px;
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
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 64, 175, 0.7) 100%);
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: var(--primary);
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }

        .service-card {
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .service-card img {
            height: 220px;
            object-fit: cover;
            width: 100%;
            border-bottom: 4px solid var(--primary);
        }

        .feature-icon-small {
            width: 50px;
            height: 50px;
            background: rgba(var(--primary-rgb), 0.1);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-up">
                    <h5 class="text-uppercase text-warning fw-bold mb-3 ls-2">Industrial Workforce Solutions</h5>
                    <h1 class="display-3 fw-bold mb-4">Blue Collar Staffing</h1>
                    <p class="lead mb-0 text-white-50">Reliable, skilled, and safety-conscious workforce to power your operations. From manufacturing floors to construction sites, we deliver efficiency.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-title">
                        <h5 class="text-primary fw-bold text-uppercase">Maximize Productivity with Skilled Blue-Collar Talent</h5>
                        <!-- <h2 class="mb-0 display-6 fw-bold">Maximize Productivity with Skilled Blue-Collar Talent</h2> -->
                    </div>
                    <p class="text-secondary lead">In industrial sectors, productivity relies on the reliability and skill of your workforce.</p>
                    <p class="text-muted">Gap India understands the unique challenges of blue-collar staffing—high turnover, safety compliance, and skill verification. We provide end-to-end workforce solutions, ensuring you have the right people on the ground, exactly when you need them.</p>
                    <p class="text-muted mb-4">Our candidates undergo strict background checks, skill assessments, and safety briefings before they step onto your site.</p>
                    
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Bulk Hiring</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Payroll Management</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Shift Planning</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Compliance Handling</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="contact.php" class="btn btn-primary btn-lg px-4 shadow-sm">Hire Workforce</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative ps-lg-4">
                        <img src="assets/images/blue-collar.png" class="img-fluid rounded-4 shadow-lg w-100" alt="Factory Worker">
                        <!-- <div class="bg-white p-4 rounded-3 position-absolute bottom-0 start-0 shadow-lg border-start border-5 border-warning" style="max-width: 280px; transform: translate(-20px, 20px);">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-hard-hat text-warning fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="fw-bold mb-0">100%</h4>
                                </div>
                            </div>
                            <p class="mb-0 text-muted small">Verified, background-checked, and safety-trained personnel.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors We Serve -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary fw-bold text-uppercase">Industries We Power</h5>
                <h2 class="fw-bold display-6">Sectors We Serve</h2>
                <p class="text-muted col-lg-8 mx-auto">We specialize in providing skilled and semi-skilled labor for high-demand industries.</p>
            </div>
            
            <div class="row g-4">
                <!-- Manufacturing -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-card overflow-hidden">
                        <img src="https://footbridgecompany.com/wp-content/uploads/2023/07/Manufacturing-Staffing-Expertise-_-FootBridge.jpg" alt="Manufacturing">
                        <div class="card-body p-4">
                            <div class="mb-3 text-primary"><i class="fas fa-industry fa-2x"></i></div>
                            <h5 class="fw-bold">Manufacturing</h5>
                            <p class="text-muted small mb-0">Assembly Line Workers, Machine Operators, Quality Control, and Packers.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Construction -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-card overflow-hidden">
                        <img src="https://img.freepik.com/premium-photo/refinery-blue-collar-worker-standing-by-lpg-pipeline-checking-gas-production-distribution_641503-152684.jpg" alt="Construction">
                        <div class="card-body p-4">
                            <div class="mb-3 text-warning"><i class="fas fa-hammer fa-2x"></i></div>
                            <h5 class="fw-bold">Construction</h5>
                            <p class="text-muted small mb-0">Masons, Carpenters, Electricians, Plumbers, and General Laborers.</p>
                        </div>
                    </div>
                </div>

                <!-- Logistics -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card service-card overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80" alt="Logistics">
                        <div class="card-body p-4">
                            <div class="mb-3 text-success"><i class="fas fa-truck-loading fa-2x"></i></div>
                            <h5 class="fw-bold">Logistics & Warehouse</h5>
                            <p class="text-muted small mb-0">Forklift Operators, Loaders, Delivery Personnel, and Inventory Clerks.</p>
                        </div>
                    </div>
                </div>

                <!-- Facility Management -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card service-card overflow-hidden">
                        <img src="https://silagroup.co.in/wp-content/uploads/2023/07/facility-management-staffs.jpg" alt="Facility Management">
                        <div class="card-body p-4">
                            <div class="mb-3 text-info"><i class="fas fa-broom fa-2x"></i></div>
                            <h5 class="fw-bold">Facility Management</h5>
                            <p class="text-muted small mb-0">Housekeeping Staff, Security Guards, Maintenance Technicians, and Gardeners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h5 class="text-primary fw-bold text-uppercase">Our Commitment</h5>
                    <h2 class="fw-bold display-6">Why Choose Gap India?</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm hover-elevate">
                        <div class="feature-icon-small mb-3 text-danger bg-danger-subtle rounded-circle p-3 d-inline-block">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Safety First</h4>
                        <p class="text-muted">We prioritize safety training and ensure all personnel are equipped with necessary PPE awareness.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm hover-elevate">
                        <div class="feature-icon-small mb-3 text-primary bg-primary-subtle rounded-circle p-3 d-inline-block">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>Full Compliance</h4>
                        <p class="text-muted">We handle all statutory compliances including PF, ESI, and labor laws, minimizing your risk.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm hover-elevate">
                        <div class="feature-icon-small mb-3 text-success bg-success-subtle rounded-circle p-3 d-inline-block">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Scalability</h4>
                        <p class="text-muted">Need 50 workers tomorrow? Our extensive database allows for rapid scaling up or down.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('https://images.unsplash.com/photo-1535732759880-bbd5c7265e3f?auto=format&fit=crop&q=80') center/cover; filter: brightness(0.15);"></div>
        <div class="container position-relative z-2 text-center py-5">
            <h2 class="fw-bold text-white mb-3 display-5">Need a Reliable Workforce?</h2>
            <p class="lead text-white-50 mb-5 col-lg-8 mx-auto">Minimize downtime and maximize productivity with our blue-collar staffing solutions.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="contact.php" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill text-dark">Get Workforce</a>
                <a href="about.php" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold rounded-pill">Learn More</a>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>