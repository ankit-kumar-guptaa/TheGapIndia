<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Collar Staffing Solutions | Gap India</title>
    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('assets/images/executive-search.jpg');
            background-size: cover;
            background-position: center;
            padding: 150px 0 80px;
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
            background: linear-gradient(135deg, #0f172a 0%, #1e40af30 100%);
            opacity: 0.85;
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
            width: 50px;
            height: 3px;
            background: var(--primary);
            bottom: -10px;
            left: 0;
        }

        .feature-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            height: 100%;
            border-bottom: 3px solid transparent;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            border-bottom-color: var(--primary);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #f0f4ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h5 class="text-uppercase text-warning fw-bold mb-3">Contract Staffing Solutions</h5>
            <h1 class="display-4 fw-bold">White Collar Staffing</h1>
            <p class="lead mb-0">Connecting top-tier talent with world-class organizations.</p>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h5 class="text-primary fw-bold text-uppercase">Strategic Hiring</h5>
                    <h2 class="mb-4">Driving Business Growth</h2>
                    <p class="text-secondary lead">Having the right white-collar professionals can be the key to business success.</p>
                    <p class="text-muted">Our white-collar staffing solutions can help you with a diverse pool of candidates skilled in areas such as finance, engineering, IT, and management. Our staffing solutions are geared towards meticulously matching the qualifications, experience, and cultural fit of candidates to your organisation, ensuring you get the talent you need to thrive.</p>
                    <p class="text-muted">We go beyond resumes, evaluating soft skills, leadership potential, and long-term compatibility to build teams that innovate and lead.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="contact.php" class="btn btn-primary-custom">Hire Professionals</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="assets/images/executive-search.jpg" class="img-fluid rounded-4 shadow-lg" alt="White Collar Staffing">
                        <div class="bg-primary text-white p-4 rounded-3 position-absolute bottom-0 start-0 m-4 shadow-lg" style="max-width: 300px;">
                            <h4 class="fw-bold mb-0">Top 1%</h4>
                            <p class="mb-0 small">Talent Pool Access</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shared "Gap India Approach" Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="fw-bold">Why Choose Gap India?</h2>
                    <p class="text-muted">Customized Contract Staffing Solutions that Match your Business Needs</p>
                </div>
            </div>
            
            <div class="card border-0 shadow-sm overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="p-5 bg-white">
                            <i class="fas fa-quote-left text-primary opacity-25 display-4 mb-3"></i>
                            <h4 class="mb-4 lh-base">"At Gap India, we understand that identifying and hiring the right people for your organisation can often feel like navigating a maze. That’s where we step in – your strategic contract staffing solutions partner with a singular goal – to alleviate your staffing headaches and help you focus on what you do best. Whether you are seeking blue, white or grey-collar professionals, our staffing solutions provide you with the perfect fit."</h4>
                            <div class="d-flex align-items-center mt-4">
                                <div class="bg-primary rounded-circle p-2 text-white me-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">Strategic Alignment</h6>
                                    <small class="text-muted">Aligning talent with business goals</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roles We Fill -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-5 text-center fw-bold">Roles We Specialize In</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-laptop-code"></i></div>
                        <h5>IT & Tech</h5>
                        <p class="text-muted small">Developers, System Architects, Project Managers, and Data Scientists.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-coins"></i></div>
                        <h5>Finance & Banking</h5>
                        <p class="text-muted small">Accountants, Financial Analysts, Investment Bankers, and Auditors.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-user-tie"></i></div>
                        <h5>Management</h5>
                        <p class="text-muted small">HR Managers, Operations Heads, and Senior Executives.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
                        <h5>Sales & Marketing</h5>
                        <p class="text-muted small">Sales Directors, Marketing Managers, and Brand Strategists.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-3">Find Your Next Leader</h2>
            <p class="lead mb-4">Let us help you build a team that drives your vision forward.</p>
            <a href="contact.php" class="btn btn-light btn-lg px-5 fw-bold text-primary">Start Hiring</a>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>