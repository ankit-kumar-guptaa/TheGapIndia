<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Non-IT Staffing Services - Administrative, Finance, Sales, HR, and Operations hiring solutions.">
    <title>Non-IT Staffing | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2032&auto=format&fit=crop');
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

        .industry-card {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .industry-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Service Overview</h5>
            <h1 class="display-3 fw-bold">Non-IT Staffing</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Streamlined hiring for business support, operations, and management roles.</p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg mb-4" alt="Office Staff">
                    <div class="bg-light p-4 rounded-4 border-start border-4 border-warning">
                        <h5 class="mb-3">Operational Excellence</h5>
                        <ul class="list-unstyled feature-list mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Rapid deployment of staff</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Comprehensive background checks</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Temporary and permanent staffing</li>
                            <li><i class="fas fa-check-circle"></i> Compliance management</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Supporting Your Business Growth</h2>
                    <p class="text-muted mb-4">Every successful organization needs a strong backbone. Our Non-IT staffing services ensure that your administrative, operational, and managerial functions run smoothly with the right people in place.</p>
                    <p class="text-muted mb-4">Whether you need to scale up your sales force, find a meticulous accountant, or hire a dynamic HR manager, Gap India provides end-to-end staffing solutions tailored to your corporate culture.</p>
                    
                    <h5 class="mt-5 mb-3">Sectors We Cover:</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-chart-line"></i> Sales & Business Development</li>
                                <li><i class="fas fa-calculator"></i> Finance & Accounting</li>
                                <li><i class="fas fa-users"></i> Human Resources & Admin</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-headset"></i> Customer Support / BPO</li>
                                <li><i class="fas fa-truck"></i> Logistics & Supply Chain</li>
                                <li><i class="fas fa-bullhorn"></i> Marketing & Communications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Where We Serve</h5>
                <h2 class="fw-bold">Industries We Cater To</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Providing specialized staffing solutions across diverse sectors.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fas fa-shopping-cart"></i></div>
                        <h5>Retail & E-commerce</h5>
                        <p class="text-muted small mb-0">Sales associates, store managers, and logistics coordinators.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fas fa-industry"></i></div>
                        <h5>Manufacturing</h5>
                        <p class="text-muted small mb-0">Production supervisors, quality control, and plant managers.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fas fa-hospital"></i></div>
                        <h5>Healthcare</h5>
                        <p class="text-muted small mb-0">Administrative staff, receptionists, and facility managers.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fas fa-hotel"></i></div>
                        <h5>Hospitality</h5>
                        <p class="text-muted small mb-0">Front desk, guest relations, and event coordinators.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fas fa-university"></i></div>
                        <h5>BFSI</h5>
                        <p class="text-muted small mb-0">Loan officers, branch managers, and financial advisors.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="industry-card">
                        <div class="industry-icon"><i class="fas fa-shipping-fast"></i></div>
                        <h5>Logistics</h5>
                        <p class="text-muted small mb-0">Supply chain executives, warehouse managers, and dispatchers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg" alt="Team Meeting">
                </div>
                <div class="col-lg-7 order-lg-1" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Value Proposition</h5>
                    <h2 class="fw-bold mb-4">Why Partner with Gap India?</h2>
                    <p class="text-muted mb-5">We understand that every non-IT role is critical to your daily operations. Our approach focuses on reliability, speed, and cultural fit.</p>
                    
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary"><i class="fas fa-stopwatch fa-2x"></i></div>
                        <div>
                            <h5>Quick Turnaround</h5>
                            <p class="text-muted">We maintain a large database of pre-screened candidates, allowing us to fill positions in record time.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary"><i class="fas fa-users-cog fa-2x"></i></div>
                        <div>
                            <h5>Flexible Staffing Models</h5>
                            <p class="text-muted">Whether you need temporary staff for a peak season or permanent employees, we have a solution for you.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-4 text-primary"><i class="fas fa-file-contract fa-2x"></i></div>
                        <div>
                            <h5>Compliance Adherence</h5>
                            <p class="text-muted">We handle all statutory compliances, ensuring you are risk-free and focused on your core business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">How We Work</h5>
                <h2 class="fw-bold">Our Staffing Process</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">A simple, transparent, and efficient workflow.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-clipboard-list fa-lg"></i>
                        </div>
                        <h5>1. Request</h5>
                        <p class="text-muted small">You share your requirements, including job descriptions, budget, and timeline.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-search fa-lg"></i>
                        </div>
                        <h5>2. Source</h5>
                        <p class="text-muted small">We tap into our database and networks to identify the best-fit candidates.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-check fa-lg"></i>
                        </div>
                        <h5>3. Screen</h5>
                        <p class="text-muted small">We conduct interviews and background checks to validate skills and reliability.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-handshake fa-lg"></i>
                        </div>
                        <h5>4. Deploy</h5>
                        <p class="text-muted small">The candidate joins your team, and we handle the onboarding paperwork.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Common Queries</h5>
                <h2 class="fw-bold">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Can you provide staff on a temporary basis?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, we specialize in both temporary and contract staffing solutions to help you manage seasonal peaks or project-based needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you handle payroll for outsourced staff?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Absolutely. For our staffing clients, we manage the entire payroll process, including PF, ESI, and tax deductions, ensuring full compliance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    How quickly can you fill a position?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    For standard roles, we can typically share profiles within 24-48 hours. Our extensive database allows for rapid deployment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-dark text-white text-center" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-attachment: fixed;">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Need Staffing Solutions?</h2>
            <p class="lead mb-4 text-white-50">Get the right people for your business, fast and hassle-free.</p>
            <button class="btn btn-primary-custom btn-lg rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#hireModal">Request Staffing</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>