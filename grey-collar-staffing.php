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
            <h1 class="display-4 fw-bold">Grey Collar Staffing</h1>
            <p class="lead mb-0">Specialized technical expertise bridging the gap.</p>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h5 class="text-primary fw-bold text-uppercase">Technical Expertise</h5>
                    <h2 class="mb-4">The Perfect Blend of Skills</h2>
                    <p class="text-secondary lead">In today’s dynamic business landscape, grey-collar positions are on the rise.</p>
                    <p class="text-muted">These roles bridge the gap between traditional blue and white collar, combining technical skills with hands-on experience. Our grey-collar staffing solutions identify and deliver candidates with the unique blend of skills required for roles in maintenance, healthcare support, and other specialized fields.</p>
                    <p class="text-muted">Gap India understands the specific certifications and practical know-how required for these critical roles, ensuring you get professionals who are technically proficient and operationally sound.</p>
                    
                    <div class="d-flex gap-3 mt-4">
                        <a href="contact.php" class="btn btn-primary-custom">Hire Specialists</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="assets/images/oil-gas.jpeg" class="img-fluid rounded-4 shadow-lg" alt="Grey Collar Staffing">
                        <div class="bg-primary text-white p-4 rounded-3 position-absolute bottom-0 start-0 m-4 shadow-lg" style="max-width: 300px;">
                            <h4 class="fw-bold mb-0">Certified</h4>
                            <p class="mb-0 small">Technical Professionals</p>
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
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">Specialized Skills</h6>
                                    <small class="text-muted">Technical proficiency guaranteed</small>
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
            <h2 class="mb-5 text-center fw-bold">Technical Roles We Fill</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-microchip"></i></div>
                        <h5>IT Support</h5>
                        <p class="text-muted small">Network technicians, helpdesk support, and hardware specialists.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-user-nurse"></i></div>
                        <h5>Healthcare</h5>
                        <p class="text-muted small">Nursing assistants, lab technicians, and patient care staff.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-wrench"></i></div>
                        <h5>Skilled Trades</h5>
                        <p class="text-muted small">Electricians, plumbers, HVAC technicians, and welders.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <h5>Security & Safety</h5>
                        <p class="text-muted small">Security supervisors, safety officers, and fire safety technicians.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-3">Need Technical Experts?</h2>
            <p class="lead mb-4">Get the specialized skills your business needs to operate smoothly.</p>
            <a href="contact.php" class="btn btn-light btn-lg px-5 fw-bold text-primary">Hire Specialists</a>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>