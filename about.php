<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Gap India - Leading provider of manpower outsourcing solutions for Oil & Gas and IT sectors.">
    <title>About Us | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop');
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
            background: linear-gradient(135deg, rgb(22 32 54 / 80%) 0%, rgba(15, 23, 42, 0.9) 100%);
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .feature-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            height: 100%;
            transition: 0.3s;
            border-bottom: 3px solid transparent;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            border-bottom-color: var(--accent);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(249, 115, 22, 0.1);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">We Make It Possible</h5>
            <h1 class="display-3 fw-bold">About GAP India</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Bridging the gap between top talent and leading organizations through agile, scalable, and quality-driven staffing solutions.</p>
        </div>
    </section>

    <!-- INTRODUCTION SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070&auto=format&fit=crop" alt="Office Meeting" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h5 class="text-accent text-uppercase mb-3">Who We Are</h5>
                    <h2 class="mb-4">Leading Provider of Manpower Outsourcing Solutions</h2>
                    <p class="text-muted mb-4">GAP India is a forward-thinking Oil & Gas / IT recruitment firm headquartered in New Delhi. Established with a vision to bridge the gap between top tech talent and leading organizations, we specialize in delivering agile, scalable, and quality-driven staffing solutions.</p>
                    <p class="text-muted mb-4">Our team combines industry expertise with deep market insight to connect companies with the right professionals across the Oil & Gas / IT landscape. From startups to Fortune 500 enterprises, we tailor our recruitment strategies to meet the evolving needs of our clients.</p>
                    <p class="text-muted">At GAP India, we are committed to building long-term partnerships through transparent communication, ethical practices, and a relentless focus on quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>Our Mission</h3>
                        <p class="text-muted">To create the perfect symbiosis between talent and opportunity. We believe that every resume tells a story and every job opening is a new chapter waiting to be written. We are committed to rewriting the narrative of recruitment in India.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-eye"></i></div>
                        <h3>Our Vision</h3>
                        <p class="text-muted">To be the most trusted and innovative recruitment partner for organizations globally, driving excellence in every placement and empowering businesses with the right manpower solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR EXPERTISE -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase">Our Expertise</h5>
                <h2>Oil & Gas / IT Manpower Supply</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Comprehensive recruitment solutions tailored for your industry needs.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="feature-box text-center">
                        <div class="feature-icon mx-auto"><i class="fas fa-search"></i></div>
                        <h5>End-to-End Recruitment</h5>
                        <p class="small text-muted">From entry-level tech roles to C-suite IT leadership – we handle it all with precision.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box text-center">
                        <div class="feature-icon mx-auto"><i class="fas fa-handshake"></i></div>
                        <h5>Permanent & Contract Staffing</h5>
                        <p class="small text-muted">Flexible hiring models to meet dynamic business needs, whether short-term or long-term.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box text-center">
                        <div class="feature-icon mx-auto"><i class="fas fa-filter"></i></div>
                        <h5>Niche Hiring</h5>
                        <p class="small text-muted">Identifying and onboarding top-tier talent for specialized and hard-to-fill roles.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box text-center">
                        <div class="feature-icon mx-auto"><i class="fas fa-user-graduate"></i></div>
                        <h5>Campus & Lateral Hiring</h5>
                        <p class="small text-muted">Strong presence in sourcing fresh talent and experienced professionals across India.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION -->
    <section class="py-5 bg-dark text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <h5 class="text-accent text-uppercase mb-3">Our Value Proposition</h5>
                    <h2 class="mb-4">Benefits of Partnering with GAP India</h2>
                    <p class="text-white-50 mb-4">We don't just provide candidates; we provide solutions that drive your business forward. Our data-driven approach ensures you get the best talent efficiently.</p>
                    <a href="contact.php" class="btn btn-primary-custom">Get Started</a>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex gap-3">
                                <i class="fas fa-check-circle text-accent fa-2x"></i>
                                <div>
                                    <h5 class="mb-2">Cost Savings</h5>
                                    <p class="text-white-50 small">Lower recruitment and operational costs with our efficient processes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-3">
                                <i class="fas fa-check-circle text-accent fa-2x"></i>
                                <div>
                                    <h5 class="mb-2">Efficiency Gains</h5>
                                    <p class="text-white-50 small">Streamlined hiring process and faster onboarding of skilled candidates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-3">
                                <i class="fas fa-check-circle text-accent fa-2x"></i>
                                <div>
                                    <h5 class="mb-2">Faster Hiring Turnaround</h5>
                                    <p class="text-white-50 small">Agile recruitment process reduces time-to-hire significantly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-3">
                                <i class="fas fa-check-circle text-accent fa-2x"></i>
                                <div>
                                    <h5 class="mb-2">Customized Solutions</h5>
                                    <p class="text-white-50 small">Tailored recruitment strategies aligned with your business goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WORK CAPABILITIES -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-accent text-uppercase">Work Capabilities</h5>
                <h2>Data-Driven Insights</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-3 text-accent"><i class="fas fa-users-cog fa-3x"></i></div>
                        <h4>Workforce Consulting</h4>
                        <p class="text-muted">A collaborative, insight-led approach that offers comprehensive, strategic support for workforce planning and execution.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-3 text-accent"><i class="fas fa-chart-line fa-3x"></i></div>
                        <h4>Workforce Analytics</h4>
                        <p class="text-muted">Powerful, practical analytics and insights that reduce risk and speed up business, workforce, and talent decision-making.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-3 text-accent"><i class="fas fa-lightbulb fa-3x"></i></div>
                        <h4>Talent Acquisition</h4>
                        <p class="text-muted">Integrated assessment and analytics expertise that reshapes talent strategies and drives faster, more impactful results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>