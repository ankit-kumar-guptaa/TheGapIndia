<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Campus Hiring Services - Connecting businesses with fresh talent from top universities across India.">
    <title>Campus Hiring | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop');
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

        .process-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 5px solid rgba(var(--primary-rgb), 0.1);
            transition: all 0.3s;
        }

        .process-circle:hover {
            border-color: var(--accent);
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Service Overview</h5>
            <h1 class="display-3 fw-bold">Campus Hiring</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Bridging the gap between academia and industry with fresh, energetic talent.</p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg mb-4" alt="Graduates">
                    <div class="bg-light p-4 rounded-4 border-start border-4 border-warning">
                        <h5 class="mb-3">Why Hire Freshers?</h5>
                        <ul class="list-unstyled feature-list mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Eager to learn and adapt</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Cost-effective talent acquisition</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Long-term retention potential</li>
                            <li><i class="fas fa-check-circle"></i> Tech-savvy generation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Building Your Future Workforce</h2>
                    <p class="text-muted mb-4">Campus hiring is a strategic initiative to infuse your organization with fresh perspectives and latest academic knowledge. Gap India simplifies this complex process by acting as a bridge between your company and top educational institutions across the country.</p>
                    <p class="text-muted mb-4">We handle everything from campus selection and branding to assessment and onboarding, ensuring you get access to the best entry-level talent without the logistical headaches.</p>
                    
                    <h5 class="mt-5 mb-3">Our Campus Solutions:</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-university"></i> Tier 1, 2 & 3 College Connect</li>
                                <li><i class="fas fa-bullhorn"></i> Pre-placement Talks</li>
                                <li><i class="fas fa-pencil-alt"></i> Online & Offline Assessments</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-user-friends"></i> Group Discussions & Interviews</li>
                                <li><i class="fas fa-clipboard-check"></i> Offer Rollout Management</li>
                                <li><i class="fas fa-chalkboard-teacher"></i> Internship Programs</li>
                            </ul>
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
                <h5 class="text-accent text-uppercase letter-spacing-2">From Campus to Corporate</h5>
                <h2 class="fw-bold">Our Campus Drive Workflow</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">A structured approach to mass hiring.</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-circle">
                        <i class="fas fa-handshake fa-3x text-primary"></i>
                    </div>
                    <h5>1. College Connect</h5>
                    <p class="text-muted small">We identify and partner with colleges that match your hiring criteria and tech stack.</p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-circle">
                        <i class="fas fa-laptop-code fa-3x text-primary"></i>
                    </div>
                    <h5>2. Assessment</h5>
                    <p class="text-muted small">Conducting aptitude and technical tests to filter the best candidates from the pool.</p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-circle">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h5>3. Interviews</h5>
                    <p class="text-muted small">Coordinating technical and HR rounds efficiently, often completing the process in one day.</p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-circle">
                        <i class="fas fa-file-signature fa-3x text-primary"></i>
                    </div>
                    <h5>4. Rollout</h5>
                    <p class="text-muted small">Managing offer letters and keeping candidates engaged until their joining date.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NETWORK SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold mb-4">Pan-India Network</h2>
                    <p class="text-muted mb-4">We have established strong relationships with placement cells across the country, giving you access to a diverse talent pool.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-map-marker-alt text-accent me-3"></i> <strong>North India:</strong> Delhi NCR, Punjab, UP</li>
                        <li class="mb-3"><i class="fas fa-map-marker-alt text-accent me-3"></i> <strong>South India:</strong> Bangalore, Chennai, Hyderabad</li>
                        <li class="mb-3"><i class="fas fa-map-marker-alt text-accent me-3"></i> <strong>West India:</strong> Mumbai, Pune, Gujarat</li>
                        <li><i class="fas fa-map-marker-alt text-accent me-3"></i> <strong>East India:</strong> Kolkata, Bhubaneswar</li>
                    </ul>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded-4 shadow" alt="College Campus">
                </div>
            </div>
        </div>
    </section>

    <!-- TRAINING SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Skill Bridge</h5>
                <h2 class="fw-bold">Campus to Corporate Training</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">We don't just find talent; we prepare them for your organization.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white p-4 rounded shadow-sm h-100 border-bottom border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-code fa-2x"></i></div>
                        <h5>Technical Bootcamps</h5>
                        <p class="text-muted small">Intensive crash courses in Java, Python, .NET, or Full Stack development tailored to your project needs before joining.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-4 rounded shadow-sm h-100 border-bottom border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-comments fa-2x"></i></div>
                        <h5>Soft Skills & Etiquette</h5>
                        <p class="text-muted small">Training on email writing, corporate communication, and workplace professionalism to ensure smooth assimilation.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white p-4 rounded shadow-sm h-100 border-bottom border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-project-diagram fa-2x"></i></div>
                        <h5>Project Readiness</h5>
                        <p class="text-muted small">Simulated project environments to help freshers understand agile methodologies and collaborative tools like Jira/Git.</p>
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
                                    What is the minimum batch size for a campus drive?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We cater to all sizes, but typically a dedicated campus drive is most cost-effective for hiring 10+ candidates. For smaller numbers, we recommend our pooled campus drives.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can you conduct drives in Tier-2/3 cities?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, we have a strong network in Tier-2 and Tier-3 cities where talent retention is often higher and costs are optimized.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you handle logistics for the recruitment team?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, we provide end-to-end support including travel and stay arrangements for your technical panel if they visit the campus, or we can manage the entire process virtually.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-dark text-white text-center">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Plan Your Campus Drive</h2>
            <p class="lead mb-4 text-white-50">Tap into the potential of young India. Let's schedule your next recruitment drive.</p>
            <button class="btn btn-primary-custom btn-lg rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#hireModal">Start Campus Hiring</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>