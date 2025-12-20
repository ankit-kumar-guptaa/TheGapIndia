<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Executive Search Services - Finding C-suite leaders and senior executives for your organization.">
    <title>Executive Search | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop');
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

        .methodology-step {
            padding: 30px;
            background: #fff;
            border-left: 4px solid var(--accent);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        
        .methodology-step:hover {
            transform: translateX(10px);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Service Overview</h5>
            <h1 class="display-3 fw-bold">Executive Search</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Identifying and attracting visionary leaders to drive your business forward.</p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=2071&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg mb-4" alt="Executive Meeting">
                    <div class="bg-light p-4 rounded-4 border-start border-4 border-warning">
                        <h5 class="mb-3">Our Approach</h5>
                        <ul class="list-unstyled feature-list mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Confidentiality assured</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Deep market mapping</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Rigorous assessment process</li>
                            <li><i class="fas fa-check-circle"></i> Cultural fit analysis</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Leadership That Matters</h2>
                    <p class="text-muted mb-4">Finding the right leadership is critical for any organization's long-term success. Our Executive Search practice is dedicated to identifying C-suite executives and senior leaders who not only possess the required experience but also align with your company's vision and values.</p>
                    <p class="text-muted mb-4">We act as your strategic partner, leveraging our extensive network and discreet approach to connect you with top-tier talent that is often not actively looking for new opportunities.</p>
                    
                    <h5 class="mt-5 mb-3">Leadership Roles:</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-user-tie"></i> CEOs, COOs, CFOs, CTOs</li>
                                <li><i class="fas fa-users-cog"></i> Vice Presidents & Directors</li>
                                <li><i class="fas fa-chart-pie"></i> Business Unit Heads</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled feature-list">
                                <li><i class="fas fa-handshake"></i> Board Members</li>
                                <li><i class="fas fa-globe-americas"></i> Country Managers</li>
                                <li><i class="fas fa-lightbulb"></i> Innovation Leads</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- METHODOLOGY SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">How We Search</h5>
                    <h2 class="fw-bold mb-4">Our Executive Search Methodology</h2>
                    <p class="text-muted mb-4">We follow a disciplined and systematic process to ensure we find the perfect match for your leadership needs. Our methodology is designed to be thorough, discreet, and effective.</p>
                    <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-primary">
                        <h5 class="mb-3"><i class="fas fa-user-secret text-primary me-2"></i> Unmatched Discretion</h5>
                        <p class="text-muted small mb-0">We understand the sensitivity of executive hires. Our team operates with the highest level of confidentiality to protect your brand and the candidate's privacy.</p>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="methodology-step">
                        <h5>01. Discovery & Strategy</h5>
                        <p class="text-muted small mb-0">We collaborate with stakeholders to define the role, key competencies, and cultural requirements.</p>
                    </div>
                    <div class="methodology-step">
                        <h5>02. Market Mapping</h5>
                        <p class="text-muted small mb-0">We analyze the market to identify potential candidates within target industries and competitors.</p>
                    </div>
                    <div class="methodology-step">
                        <h5>03. Candidate Engagement</h5>
                        <p class="text-muted small mb-0">We discreetly approach potential candidates to gauge interest and assess suitability.</p>
                    </div>
                    <div class="methodology-step">
                        <h5>04. Assessment & Presentation</h5>
                        <p class="text-muted small mb-0">We conduct in-depth interviews and psychometric assessments before presenting the shortlist.</p>
                    </div>
                    <div class="methodology-step">
                        <h5>05. Negotiation & Onboarding</h5>
                        <p class="text-muted small mb-0">We facilitate offer negotiations and support the transition process for a successful start.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONFIDENTIALITY SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=2074&auto=format&fit=crop" class="img-fluid rounded-4 shadow-lg" alt="Confidential Meeting">
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Our Promise</h5>
                    <h2 class="fw-bold mb-4">Strict Confidentiality Assured</h2>
                    <p class="text-muted mb-4">We know that replacing a C-suite executive or creating a new strategic role often requires absolute secrecy. We have protocols in place to ensure information security.</p>
                    <ul class="list-unstyled feature-list">
                        <li class="mb-3"><i class="fas fa-lock"></i> <strong>Non-Disclosure Agreements:</strong> We sign strict NDAs with all parties involved.</li>
                        <li class="mb-3"><i class="fas fa-shield-alt"></i> <strong>Secure Communication:</strong> All candidate data is handled through encrypted channels.</li>
                        <li class="mb-3"><i class="fas fa-user-secret"></i> <strong>Discreet Outreach:</strong> We approach candidates without initially revealing your company identity until necessary.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SUCCESS STORIES SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase letter-spacing-2">Track Record</h5>
                <h2 class="fw-bold">Recent Placements</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Leadership roles we have successfully filled.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white p-4 rounded shadow-sm h-100 border-top border-4 border-dark">
                        <h5 class="mb-1">Chief Technology Officer</h5>
                        <p class="text-primary small mb-3">FinTech Unicorn</p>
                        <p class="text-muted small">Sourced a visionary CTO from Silicon Valley to lead the digital transformation of a major Indian fintech player.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-4 rounded shadow-sm h-100 border-top border-4 border-dark">
                        <h5 class="mb-1">VP of Sales</h5>
                        <p class="text-primary small mb-3">SaaS Enterprise</p>
                        <p class="text-muted small">Identified a high-performing sales leader who expanded the company's revenue by 200% within the first year.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white p-4 rounded shadow-sm h-100 border-top border-4 border-dark">
                        <h5 class="mb-1">Manufacturing Head</h5>
                        <p class="text-primary small mb-3">Automotive Giant</p>
                        <p class="text-muted small">Placed an operations expert with 20+ years of experience to oversee a new plant setup in Gujarat.</p>
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
                                    How long does an executive search take?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Typically, a retained executive search takes between 8 to 12 weeks, depending on the complexity of the role and market conditions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What is your fee structure?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    We work on a retained model for executive search, with fees paid in milestones (engagement, shortlist, and completion).
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you offer a guarantee period?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, we offer a replacement guarantee of up to 6 months to ensuring the leader you hire is the right long-term fit.
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
            <h2 class="fw-bold mb-3">Find Your Next Leader</h2>
            <p class="lead mb-4 text-white-50">Partner with us to secure the visionary leadership your company deserves.</p>
            <button class="btn btn-outline-light btn-lg rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#hireModal">Start Executive Search</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>