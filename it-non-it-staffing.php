<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT & Non-IT Staffing Solutions - Comprehensive recruitment for Technology, Engineering, Sales, Finance, and Operations. One partner for all your hiring needs.">
    <title>IT & Non-IT Staffing | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        /* --- PAGE HEADER (Parallax) --- */
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070&auto=format&fit=crop'); /* Tech + Office Blend */
            background-size: cover;
            background-position: center;
            padding: 160px 0 90px;
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
            background: rgba(15, 23, 42, 0.85); /* Professional Dark Overlay */
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }
        
        /* --- SECTOR TABS --- */
        .nav-pills .nav-link {
            background-color: white;
            color: var(--text-dark);
            border: 1px solid #e2e8f0;
            margin: 0 10px;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary); /* Navy */
            color: white;
            border-color: var(--primary);
            box-shadow: 0 4px 6px rgba(0,0,128,0.1);
        }

        .nav-pills .nav-link:hover:not(.active) {
            background-color: #f8fafc;
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-1px);
        }

        /* --- CARDS --- */
        .role-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            transition: 0.3s;
            border: 1px solid #f1f5f9;
            height: 100%;
        }

        .role-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border-color: var(--primary);
        }

        .role-card.it { border-left: none; }
        .role-card.non-it { border-left: none; }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 20px;
            background: #f8fafc;
            color: var(--primary);
        }

        .icon-box.it { background: #f8fafc; color: var(--primary); }
        .icon-box.non-it { background: #f8fafc; color: var(--primary); }

        /* --- COMPARISON SECTION --- */
        .comparison-box {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid #f1f5f9;
        }

        
        @media (max-width: 768px) {
            .comparison-box { background: white; }
        }

    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-white text-uppercase letter-spacing-2 mb-3">One Partner. All Roles.</h5>
            <h1 class="display-3 fw-bold">IT & Non-IT Staffing</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">From coding geniuses to sales superstars, we build your complete workforce.</p>
        </div>
    </section>

    <!-- INTRO SPLIT -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h5 class="text-primary text-uppercase letter-spacing-2">Unified Recruitment Strategy</h5>
                    <h2 class="fw-bold mb-4">Why Split Your Hiring Vendors?</h2>
                    <p class="text-muted mb-4">Managing multiple recruitment agencies for different departments creates silos, inconsistent hiring quality, and administrative headaches. <strong>Gap India</strong> unifies your talent acquisition strategy.</p>
                    <p class="text-muted mb-4">We maintain dedicated, specialized teams for both sectors:</p>
                    
                    <div class="d-flex gap-4 mt-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-box it mb-0 me-3" style="width:50px; height:50px;"><i class="fas fa-laptop-code"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Tech Specialized</h6>
                                <small class="text-muted">Developers, Cloud, Data</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box non-it mb-0 me-3" style="width:50px; height:50px;"><i class="fas fa-user-tie"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Business Ops</h6>
                                <small class="text-muted">Sales, HR, Finance</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="assets/images/it.jpg" class="img-fluid rounded-4 shadow" alt="Unified Team">
                        <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded-top-4 shadow border-bottom border-4 border-warning m-4 d-none d-md-block">
                            <h3 class="fw-bold text-dark mb-0">5000+</h3>
                            <small class="text-muted">Professionals Placed Globally</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TABS SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Explore Our Expertise</h2>
                <p class="text-muted">Toggle between our specialized verticals.</p>
                
                <ul class="nav nav-pills justify-content-center mt-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-it-tab" data-bs-toggle="pill" data-bs-target="#pills-it" type="button" role="tab" aria-selected="true"><i class="fas fa-microchip me-2"></i> IT Recruitment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-nonit-tab" data-bs-toggle="pill" data-bs-target="#pills-nonit" type="button" role="tab" aria-selected="false"><i class="fas fa-briefcase me-2"></i> Non-IT Staffing</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <!-- IT CONTENT -->
                <div class="tab-pane fade show active" id="pills-it" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="role-card it">
                                <div class="icon-box it"><i class="fab fa-java"></i></div>
                                <h5>Software Development</h5>
                                <p class="text-muted small">Java, Python, .NET, Full Stack (MERN/MEAN), C++, Golang, Rust.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="role-card it">
                                <div class="icon-box it"><i class="fas fa-cloud"></i></div>
                                <h5>Cloud & DevOps</h5>
                                <p class="text-muted small">AWS/Azure Architects, DevOps Engineers, Kubernetes, Docker, CI/CD pipelines.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="role-card it">
                                <div class="icon-box it"><i class="fas fa-database"></i></div>
                                <h5>Data & Analytics</h5>
                                <p class="text-muted small">Data Scientists, Data Engineers, Big Data (Hadoop/Spark), PowerBI/Tableau Analysts.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="role-card it">
                                <div class="icon-box it"><i class="fas fa-shield-alt"></i></div>
                                <h5>Cybersecurity</h5>
                                <p class="text-muted small">Ethical Hackers, SOC Analysts, InfoSec Managers, Network Security Engineers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                            <div class="role-card it">
                                <div class="icon-box it"><i class="fas fa-mobile-alt"></i></div>
                                <h5>Mobile Technologies</h5>
                                <p class="text-muted small">iOS (Swift), Android (Kotlin), Flutter, React Native, Hybrid Apps.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                            <div class="role-card it">
                                <div class="icon-box it"><i class="fas fa-robot"></i></div>
                                <h5>Emerging Tech</h5>
                                <p class="text-muted small">AI/ML Engineers, Blockchain Developers, IoT Specialists, RPA Developers.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NON-IT CONTENT -->
                <div class="tab-pane fade" id="pills-nonit" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="role-card non-it">
                                <div class="icon-box non-it"><i class="fas fa-chart-line"></i></div>
                                <h5>Sales & Marketing</h5>
                                <p class="text-muted small">B2B Sales, Digital Marketing Managers, SEO Specialists, Content Writers, Brand Managers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="role-card non-it">
                                <div class="icon-box non-it"><i class="fas fa-coins"></i></div>
                                <h5>Banking & Finance</h5>
                                <p class="text-muted small">Chartered Accountants, Financial Analysts, Investment Bankers, Loan Officers, Audit Managers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="role-card non-it">
                                <div class="icon-box non-it"><i class="fas fa-users"></i></div>
                                <h5>Human Resources</h5>
                                <p class="text-muted small">HR Managers, Talent Acquisition Specialists, Payroll Executives, L&D Managers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="role-card non-it">
                                <div class="icon-box non-it"><i class="fas fa-industry"></i></div>
                                <h5>Manufacturing & Engineering</h5>
                                <p class="text-muted small">Plant Managers, Quality Control, Mechanical/Electrical Engineers, Supply Chain Managers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="role-card non-it">
                                <div class="icon-box non-it"><i class="fas fa-hospital-user"></i></div>
                                <h5>Healthcare & Pharma</h5>
                                <p class="text-muted small">Medical Representatives, Hospital Administrators, Pharmacists, Lab Technicians.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="role-card non-it">
                                <div class="icon-box non-it"><i class="fas fa-headset"></i></div>
                                <h5>BPO & Customer Service</h5>
                                <p class="text-muted small">Customer Support Execs, Tele-callers, Operations Managers, Language Specialists.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UNIFIED PROCESS -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase letter-spacing-2">Our Methodology</h5>
                    <h2 class="fw-bold mb-4">How We Balance Both Worlds</h2>
                    <p class="text-muted">While the skill sets differ, our commitment to quality remains constant. We use domain-specific screening processes for each vertical.</p>
                    
                    <ul class="list-group list-group-flush mt-4">
                        <li class="list-group-item border-0 px-0 d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <div>
                                <strong>Technical Assessments</strong>
                                <p class="small text-muted mb-0">For IT: HackerRank/LeetCode style coding tests.</p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0 d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <div>
                                <strong>Behavioral & Case Studies</strong>
                                <p class="small text-muted mb-0">For Non-IT: Role-play and situation-based interviews.</p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0 d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                            <div>
                                <strong>Cultural Fitment</strong>
                                <p class="small text-muted mb-0">Universal screening for values and adaptability.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="comparison-box p-5 d-none d-lg-block">
                        <div class="row">
                            <div class="col-6 text-center border-end">
                                <div class="text-primary mb-3"><i class="fas fa-code fa-3x"></i></div>
                                <h4 class="fw-bold">For IT Clients</h4>
                                <ul class="list-unstyled text-start small text-muted mt-3">
                                    <li class="mb-2">✓ Tech-savvy Recruiters</li>
                                    <li class="mb-2">✓ GitHub/StackOverflow Sourcing</li>
                                    <li class="mb-2">✓ Fast Tech Screening</li>
                                </ul>
                            </div>
                            <div class="col-6 text-center">
                                <div class="text-success mb-3"><i class="fas fa-briefcase fa-3x"></i></div>
                                <h4 class="fw-bold">For Non-IT Clients</h4>
                                <ul class="list-unstyled text-start small text-muted mt-3">
                                    <li class="mb-2">✓ Industry Veterans</li>
                                    <li class="mb-2">✓ LinkedIn/Portal Sourcing</li>
                                    <li class="mb-2">✓ Soft Skills Assessment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-dark text-white text-center" style="background: linear-gradient(90deg, #000080 0%, #138808 100%);">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Hiring for Mixed Roles?</h2>
            <p class="lead mb-4 text-white-50">We are the only vendor you need for your entire organizational chart.</p>
            <button class="btn btn-lg rounded-pill px-5 fw-bold" style="background-color: var(--accent); color: white;" data-bs-toggle="modal" data-bs-target="#hireModal">Start Hiring</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>