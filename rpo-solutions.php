<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RPO Solutions - Recruitment Process Outsourcing to streamline your hiring and reduce costs.">
    <title>RPO Solutions | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop');
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

        .feature-list i {
            color: var(--accent);
            margin-right: 10px;
        }

        .rpo-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            height: 100%;
            border-top: 5px solid transparent;
        }

        .rpo-card:hover {
            transform: translateY(-5px);
            border-top-color: var(--accent);
        }

        .stat-box {
            text-align: center;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Service Overview</h5>
            <h1 class="display-3 fw-bold">RPO Solutions</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">End-to-end Recruitment Process Outsourcing for efficiency and scalability.</p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/images/rpo.jpg" class="img-fluid rounded-4 shadow-lg mb-4" alt="Team Collaboration">
                    <div class="bg-light p-4 rounded-4 border-start border-4 border-warning">
                        <h5 class="mb-3">Benefits of RPO</h5>
                        <ul class="list-unstyled feature-list mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Significant cost reduction</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Scalable recruiting capacity</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Improved quality of hire</li>
                            <li><i class="fas fa-check-circle"></i> Enhanced employer brand</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Transforming Your Hiring Process</h2>
                    <p class="text-muted mb-4">Recruitment Process Outsourcing (RPO) is more than just filling vacancies; it's about optimizing your entire talent acquisition strategy. Gap India acts as an extension of your HR team, managing the entire recruitment lifecycle from sourcing to onboarding.</p>
                    <p class="text-muted mb-4">Whether you need to hire hundreds of employees for a new project or streamline your ongoing recruitment needs, our RPO solutions provide the flexibility, technology, and expertise to deliver results.</p>
                    
                    <h5 class="mt-5 mb-3">Core RPO Functions:</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-search"></i> Talent Sourcing & Mapping</li>
                                <li><i class="fas fa-filter"></i> Screening & Assessment</li>
                                <li><i class="fas fa-calendar-check"></i> Interview Scheduling</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-file-contract"></i> Offer Management</li>
                                <li><i class="fas fa-chart-bar"></i> Reporting & Analytics</li>
                                <li><i class="fas fa-user-plus"></i> Onboarding Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODELS SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Flexible Engagement</h5>
                <h2 class="fw-bold">Our RPO Models</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Choose the model that fits your business needs.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="rpo-card">
                        <div class="mb-4 text-primary"><i class="fas fa-building fa-3x"></i></div>
                        <h4>Enterprise RPO</h4>
                        <p class="text-muted">A comprehensive solution where we manage your entire recruitment function across the organization. Ideal for large companies with consistent hiring needs.</p>
                        <ul class="list-unstyled small text-muted mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Full lifecycle management</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dedicated onsite/offsite team</li>
                            <li><i class="fas fa-check text-success me-2"></i> Technology integration</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="rpo-card">
                        <div class="mb-4 text-primary"><i class="fas fa-project-diagram fa-3x"></i></div>
                        <h4>Project RPO</h4>
                        <p class="text-muted">Designed for specific hiring spikes, such as new office openings, product launches, or seasonal ramp-ups. We deploy a team rapidly to meet your deadlines.</p>
                        <ul class="list-unstyled small text-muted mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Short-term engagement</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Scalable resources</li>
                            <li><i class="fas fa-check text-success me-2"></i> Focused delivery</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="rpo-card">
                        <div class="mb-4 text-primary"><i class="fas fa-laptop-medical fa-3x"></i></div>
                        <h4>Hybrid RPO</h4>
                        <p class="text-muted">A customized approach where we manage specific roles, departments, or locations while your internal team handles the rest. Best for augmenting existing capabilities.</p>
                        <ul class="list-unstyled small text-muted mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Flexible scope</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Collaborative approach</li>
                            <li><i class="fas fa-check text-success me-2"></i> Cost-effective</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IMPACT SECTION -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold mb-4">The Impact of RPO</h2>
                    <p class="lead mb-4">By partnering with Gap India, our clients have achieved measurable improvements in their hiring metrics.</p>
                    <button class="btn btn-light rounded-pill px-4 text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#hireModal">Get a Consultation</button>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-md-4 col-6">
                            <div class="stat-box">
                                <h2 class="fw-bold">30%</h2>
                                <p class="mb-0 small">Reduction in Hiring Cost</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="stat-box">
                                <h2 class="fw-bold">40%</h2>
                                <p class="mb-0 small">Faster Time-to-Fill</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="stat-box">
                                <h2 class="fw-bold">95%</h2>
                                <p class="mb-0 small">Offer Acceptance Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Inquiries</h5>
                <h2 class="fw-bold">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How is RPO different from a staffing agency?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    RPO involves outsourcing the entire recruitment function or a specific part of it, acting as an extension of your HR, whereas agencies typically fill individual roles on a transactional basis.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can RPO help with employer branding?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, a key component of our RPO service is enhancing your employer brand to attract top talent naturally and improve offer acceptance rates.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Is RPO suitable for small businesses?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Absolutely. Our "Project RPO" and "Hybrid RPO" models are designed to be flexible and cost-effective for growing businesses with fluctuating hiring needs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->

    <?php include 'include/footer.php'; ?>

</body>

</html>