<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grey Collar Staffing Solutions | Gap India</title>
    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('assets/images/oil-gas.jpeg');
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
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 64, 175, 0.8) 100%);
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
                    <h5 class="text-uppercase text-warning fw-bold mb-3 ls-2">Specialized Technical Workforce</h5>
                    <h1 class="display-3 fw-bold mb-4">Grey Collar Staffing</h1>
                    <p class="lead mb-0 text-white-50">Bridging the gap between white and blue collar. We provide the certified technical experts essential for modern operations.</p>
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
                        <h5 class="text-primary fw-bold text-uppercase">Empower Your Business with Reliable Grey-Collar Staffing</h5>
                        <!-- <h2 class="mb-0 display-6 fw-bold">The Perfect Blend of Skills</h2> -->
                    </div>
                    <p class="text-secondary lead">The modern workforce needs more than just labor or management—it needs specialized technical skill.</p>
                    <p class="text-muted">Grey-collar roles combine the hands-on nature of blue-collar work with the technical knowledge of white-collar professions. From IT technicians to healthcare support staff, these roles are critical for maintaining complex systems and services.</p>
                    <p class="text-muted mb-4">Gap India specializes in sourcing candidates with specific certifications, technical diplomas, and practical experience to ensure your operations run without a hitch.</p>
                    
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Certified Professionals</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Diploma Holders</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Technical Screening</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span class="fw-semibold">Skill Verification</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="contact.php" class="btn btn-primary btn-lg px-4 shadow-sm">Hire Specialists</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative ps-lg-4">
                        <img src="assets/images/grey-collar.png" class="img-fluid rounded-4 shadow-lg w-100" alt="Technical Expert">
                        <!-- <div class="bg-white p-4 rounded-3 position-absolute bottom-0 start-0 shadow-lg border-start border-5 border-info" style="max-width: 280px; transform: translate(-20px, 20px);">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-certificate text-info fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="fw-bold mb-0">Certified</h4>
                                </div>
                            </div>
                            <p class="mb-0 text-muted small">Access to a pool of certified and diploma-holding professionals.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roles We Fill -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary fw-bold text-uppercase">Technical Roles</h5>
                <h2 class="fw-bold display-6">Specialized Roles We Fill</h2>
                <p class="text-muted col-lg-8 mx-auto">Connecting you with the skilled technicians and support staff that keep your business running.</p>
            </div>
            
            <div class="row g-4">
                <!-- IT Support -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-card overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?auto=format&fit=crop&q=80" alt="IT Support">
                        <div class="card-body p-4">
                            <div class="mb-3 text-primary"><i class="fas fa-microchip fa-2x"></i></div>
                            <h5 class="fw-bold">IT Support</h5>
                            <p class="text-muted small mb-0">Network Technicians, Helpdesk Support, Hardware Engineers, and System Admins.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Healthcare -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-card overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80" alt="Healthcare">
                        <div class="card-body p-4">
                            <div class="mb-3 text-success"><i class="fas fa-user-nurse fa-2x"></i></div>
                            <h5 class="fw-bold">Healthcare Support</h5>
                            <p class="text-muted small mb-0">Nursing Assistants, Lab Technicians, Phlebotomists, and Caregivers.</p>
                        </div>
                    </div>
                </div>

                <!-- Skilled Trades -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card service-card overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?auto=format&fit=crop&q=80" alt="Skilled Trades">
                        <div class="card-body p-4">
                            <div class="mb-3 text-warning"><i class="fas fa-wrench fa-2x"></i></div>
                            <h5 class="fw-bold">Skilled Trades</h5>
                            <p class="text-muted small mb-0">HVAC Technicians, Certified Welders, Electricians, and Machinists.</p>
                        </div>
                    </div>
                </div>

                <!-- Safety & Security -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card service-card overflow-hidden">
                        <img src="https://redbrickworks.com/wp-content/uploads/2021/02/security-safety.jpeg" alt="Safety">
                        <div class="card-body p-4">
                            <div class="mb-3 text-danger"><i class="fas fa-shield-alt fa-2x"></i></div>
                            <h5 class="fw-bold">Safety & Security</h5>
                            <p class="text-muted small mb-0">Safety Officers, Security Supervisors, Fire Safety Technicians, and CCTV Operators.</p>
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
                    <h5 class="text-primary fw-bold text-uppercase">The Gap India Standard</h5>
                    <h2 class="fw-bold display-6">Why Trust Our Specialists?</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm hover-elevate">
                        <div class="feature-icon-small mb-3 text-primary bg-primary-subtle rounded-circle p-3 d-inline-block">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <h4>Verified Skills</h4>
                        <p class="text-muted">We don't just check resumes; we verify technical certifications and conduct practical assessments.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm hover-elevate">
                        <div class="feature-icon-small mb-3 text-info bg-info-subtle rounded-circle p-3 d-inline-block">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Continuous Training</h4>
                        <p class="text-muted">We encourage continuous learning, ensuring our pool of candidates stays updated with the latest tech.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm hover-elevate">
                        <div class="feature-icon-small mb-3 text-warning bg-warning-subtle rounded-circle p-3 d-inline-block">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Operational Readiness</h4>
                        <p class="text-muted">Our candidates are ready to hit the ground running, minimizing training time and maximizing uptime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80') center/cover; filter: brightness(0.15);"></div>
        <div class="container position-relative z-2 text-center py-5">
            <h2 class="fw-bold text-white mb-3 display-5">Need Specialized Talent?</h2>
            <p class="lead text-white-50 mb-5 col-lg-8 mx-auto">Find the certified experts you need to keep your business moving forward.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="contact.php" class="btn btn-primary btn-lg px-5 py-3 fw-bold rounded-pill">Hire Experts</a>
                <a href="about.php" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold rounded-pill">Learn More</a>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>