<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Recruitment Services - Hiring top tech talent for software development, cloud, data science, and cybersecurity roles.">
    <title>IT Recruitment | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=2069&auto=format&fit=crop');
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

        .process-step {
            position: relative;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
            transition: transform 0.3s ease;
        }
        
        .process-step:hover {
            transform: translateY(-5px);
        }

        .process-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--accent);
            opacity: 0.3;
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(var(--primary-rgb), 0.1);
            color: var(--primary);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Service Overview</h5>
            <h1 class="display-3 fw-bold">IT Recruitment</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Connecting innovative companies with world-class technology talent.</p>
        </div>
    </section>

    <!-- OVERVIEW SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/images/it-hiring.png" class="img-fluid rounded-4 shadow-lg mb-4" alt="IT Team">
                    <div class="bg-light p-4 rounded-4 border-start border-4 border-primary">
                        <h5 class="mb-3">Why IT Hiring is Different?</h5>
                        <p class="mb-0 text-muted">Technology evolves faster than any other sector. You need recruiters who speak the language of code, cloud, and infrastructure. Gap India understands the nuances of tech stacks and development methodologies.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Specialized Tech Talent Acquisition</h2>
                    <p class="text-muted mb-4">In the fast-paced world of technology, having the right team is the difference between leading the market and playing catch-up. Gap India specializes in sourcing top-tier IT professionals who not only have the technical skills but also the problem-solving mindset your projects require.</p>
                    
                    <h5 class="mt-4 mb-3">We Recruit For:</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-code"></i> Full Stack Developers</li>
                                <li><i class="fas fa-mobile-alt"></i> Mobile App Devs (iOS/Android)</li>
                                <li><i class="fas fa-database"></i> Data Scientists & Analysts</li>
                                <li><i class="fas fa-cloud"></i> DevOps & Cloud Engineers</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-shield-alt"></i> Cybersecurity Experts</li>
                                <li><i class="fas fa-robot"></i> AI & ML Specialists</li>
                                <li><i class="fas fa-tasks"></i> Product Managers</li>
                                <li><i class="fas fa-paint-brush"></i> UI/UX Designers</li>
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
                <h5 class="text-accent text-uppercase letter-spacing-2">How We Work</h5>
                <h2 class="fw-bold">Our Recruitment Process</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">A streamlined approach to finding your perfect tech match.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step">
                        <div class="process-number">01</div>
                        <div class="mb-3 text-primary"><i class="fas fa-search fa-2x"></i></div>
                        <h5>Requirement Analysis</h5>
                        <p class="text-muted small">We deep dive into your tech stack, project goals, and team culture to understand exactly who you need.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step">
                        <div class="process-number">02</div>
                        <div class="mb-3 text-primary"><i class="fas fa-filter fa-2x"></i></div>
                        <h5>Sourcing & Screening</h5>
                        <p class="text-muted small">Using AI tools and our network, we shortlist candidates and conduct rigorous technical screenings.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step">
                        <div class="process-number">03</div>
                        <div class="mb-3 text-primary"><i class="fas fa-user-check fa-2x"></i></div>
                        <h5>Interview & Selection</h5>
                        <p class="text-muted small">We coordinate interviews and help you assess cultural fit, ensuring a smooth selection process.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-step">
                        <div class="process-number">04</div>
                        <div class="mb-3 text-primary"><i class="fas fa-handshake fa-2x"></i></div>
                        <h5>Onboarding</h5>
                        <p class="text-muted small">We assist with salary negotiation and onboarding to ensure the candidate joins successfully.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold mb-4">Why Choose Gap India for IT Hiring?</h2>
                    <p class="text-muted mb-4">We don't just send resumes; we deliver solutions. Our dedicated IT recruitment team understands the market dynamics and salary trends.</p>
                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary text-white rounded-circle p-3">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5>Fast Turnaround Time</h5>
                            <p class="text-muted small mb-0">We know tech projects can't wait. We aim to present qualified profiles within 48 hours.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="bg-primary text-white rounded-circle p-3">
                                <i class="fas fa-award"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5>Quality Guarantee</h5>
                            <p class="text-muted small mb-0">If a candidate leaves within 3 months, we provide a free replacement. No questions asked.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="accordion shadow-sm" id="accordionExample">
                        <div class="accordion-item border-0 mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Do you test candidates technically?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    Yes, we perform an initial level of technical screening based on your requirements to ensure the candidate knows the basics before they reach you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    What technologies do you cover?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    We cover the entire spectrum: Java, Python, .NET, React, Angular, Node.js, AWS, Azure, GCP, Data Engineering, and emerging tech like Blockchain and IoT.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Can you help with remote hiring?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    Absolutely. We have experience hiring for remote-first companies and can help assess candidates for self-motivation and remote communication skills.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SUCCESS STORIES SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Proven Track Record</h5>
                <h2 class="fw-bold">Success Stories</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">See how we've helped companies build their dream tech teams.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 border-top border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-rocket fa-2x"></i></div>
                        <h5>FinTech Startup Scaling</h5>
                        <p class="text-muted small"><strong>Challenge:</strong> A Series-B funded fintech needed to hire 20+ developers in 2 months.</p>
                        <p class="text-muted small mb-0"><strong>Solution:</strong> We deployed a dedicated team of recruiters, mapped the market for specific skill sets, and successfully closed 22 positions within 45 days, enabling them to launch their product on time.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 border-top border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-cloud-upload-alt fa-2x"></i></div>
                        <h5>Cloud Migration Team</h5>
                        <p class="text-muted small"><strong>Challenge:</strong> An enterprise client moving to AWS needed certified architects and DevOps engineers.</p>
                        <p class="text-muted small mb-0"><strong>Solution:</strong> We sourced candidates with specific AWS certifications and migration experience. The team we assembled successfully executed the migration with zero downtime.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100 border-top border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-code-branch fa-2x"></i></div>
                        <h5>Niche Tech Hiring</h5>
                        <p class="text-muted small"><strong>Challenge:</strong> Finding Rust and Golang developers for a blockchain project.</p>
                        <p class="text-muted small mb-0"><strong>Solution:</strong> Leveraging our deep tech networks and communities, we identified passive candidates who were experts in these niche languages, filling the roles in record time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GLOBAL TALENT SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg" alt="Global Team">
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Beyond Borders</h5>
                    <h2 class="fw-bold mb-4">Global Tech Talent Pool</h2>
                    <p class="text-muted mb-4">Talent knows no boundaries. We help you tap into the global workforce to find the best skills at competitive rates.</p>
                    <ul class="list-unstyled feature-list">
                        <li class="mb-3"><i class="fas fa-globe"></i> <strong>Remote Hiring Experts:</strong> We specialize in setting up remote teams that integrate seamlessly with your onsite staff.</li>
                        <li class="mb-3"><i class="fas fa-clock"></i> <strong>Time Zone Alignment:</strong> Sourcing candidates willing to work in your preferred time zone overlap.</li>
                        <li class="mb-3"><i class="fas fa-file-contract"></i> <strong>Contract & Compliance:</strong> We advise on the best engagement models for international hires.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Ready to Build Your Dream Team?</h2>
            <p class="lead mb-4">Let's discuss your hiring needs and find the best tech talent for your business.</p>
            <button class="btn btn-light btn-lg rounded-pill px-5 text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#hireModal">Start Hiring Now</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>