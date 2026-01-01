<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Payroll and Operations Services - Streamline your HR processes with our comprehensive payroll management, compliance, and operational support solutions.">
    <title>Payroll & Operations | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=2070&auto=format&fit=crop'); /* Finance/Office Image */
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
            background: linear-gradient(135deg, rgba(19, 136, 8, 0.85) 0%, rgba(0, 0, 128, 0.9) 100%); /* Green to Navy Gradient */
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .feature-list i {
            color: var(--accent); /* Saffron */
            margin-right: 10px;
        }

        .stat-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            text-align: center;
            border-bottom: 5px solid var(--primary);
            transition: 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-bottom-color: var(--accent);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 10px;
        }
        
        .process-step {
            position: relative;
            padding-left: 50px;
            margin-bottom: 30px;
        }
        
        .process-step::before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 35px;
            height: 35px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            z-index: 2;
        }

        .process-step:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 17px;
            top: 40px;
            width: 2px;
            height: calc(100% - 10px);
            background: #e2e8f0;
            z-index: 1;
        }
        
        /* Step numbers */
        .process-step:nth-child(1)::before { content: '1'; }
        .process-step:nth-child(2)::before { content: '2'; }
        .process-step:nth-child(3)::before { content: '3'; }
        .process-step:nth-child(4)::before { content: '4'; }

    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-white text-uppercase letter-spacing-2 mb-3" style="color: #FF9933 !important;">Operational Excellence</h5>
            <h1 class="display-3 fw-bold">Payroll & Operations</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Seamless payroll management and HR operations to let you focus on your core business.</p>
        </div>
    </section>

    <!-- INTRODUCTION SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <img src="assets/images/payroll-opertions.jpg" class="img-fluid rounded-4 shadow-lg mb-4" alt="Payroll Processing">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-3 bg-light rounded text-center border border-success bg-opacity-10">
                                <h3 class="fw-bold text-success mb-0">100%</h3>
                                <small class="text-muted">Compliance Accuracy</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-light rounded text-center border border-primary bg-opacity-10">
                                <h3 class="fw-bold text-primary mb-0">24/7</h3>
                                <small class="text-muted">Support Access</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <h2 class="mb-4">Simplify Your HR Operations</h2>
                    <p class="text-muted mb-4">Managing payroll and HR operations in-house can be time-consuming, error-prone, and resource-intensive. Gap India offers end-to-end payroll outsourcing and operational support designed to ensure accuracy, timeliness, and full legal compliance.</p>
                    <p class="text-muted mb-4">From calculating salaries and taxes to managing employee benefits and statutory filings, our expert team handles the complexities so you can focus on strategic growth.</p>
                    
                    <div class="bg-white p-4 rounded shadow-sm border-start border-4 border-warning mt-4">
                        <h5 class="mb-3">Why Outsource Payroll?</h5>
                        <ul class="list-unstyled feature-list mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Eliminate Payroll Errors</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Ensure Statutory Compliance (PF, ESIC, TDS)</li>
                            <li class="mb-2"><i class="fas fa-check-circle"></i> Data Security & Confidentiality</li>
                            <li><i class="fas fa-check-circle"></i> Cost Reduction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-uppercase letter-spacing-2" style="color: var(--accent);">Our Offerings</h5>
                <h2 class="fw-bold" style="color: var(--primary);">Comprehensive Operational Solutions</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">More than just salary processing.</p>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fas fa-calculator fa-5x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3 mt-2">Payroll Processing</h4>
                        <p class="text-muted mb-4">Accurate calculation of gross-to-net salaries, including allowances, deductions, overtime, and bonuses. We generate precise pay slips and bank transfer files.</p>
                        <a href="#" class="text-decoration-none fw-bold text-primary">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fas fa-gavel fa-5x text-success"></i>
                        </div>
                        <h4 class="fw-bold mb-3 mt-2">Statutory Compliance</h4>
                        <p class="text-muted mb-4">Complete management of PF, ESIC, PT, LWF, and TDS filings. We ensure you stay compliant with all changing labor laws and regulations.</p>
                        <a href="#" class="text-decoration-none fw-bold text-success">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fas fa-user-shield fa-5x text-warning"></i>
                        </div>
                        <h4 class="fw-bold mb-3 mt-2">Benefits Administration</h4>
                        <p class="text-muted mb-4">Managing employee insurance, medical claims, leave encashment, and reimbursements efficiently to enhance employee satisfaction.</p>
                        <a href="#" class="text-decoration-none fw-bold text-warning">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- PROCESS SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold mb-4">Our Payroll Workflow</h2>
                    <p class="text-muted mb-5">A systematic approach to ensure zero errors every month.</p>
                    
                    <div class="process-step">
                        <h5 class="fw-bold">Data Collection</h5>
                        <p class="text-muted small">Gathering attendance, leave, and variable pay data from your systems.</p>
                    </div>
                    <div class="process-step">
                        <h5 class="fw-bold">Processing & Validation</h5>
                        <p class="text-muted small">Calculating salaries and running multiple audit checks for accuracy.</p>
                    </div>
                    <div class="process-step">
                        <h5 class="fw-bold">Approval & Disbursement</h5>
                        <p class="text-muted small">Sending reports for your approval followed by salary bank transfers.</p>
                    </div>
                    <div class="process-step">
                        <h5 class="fw-bold">Reporting & Compliance</h5>
                        <p class="text-muted small">Generating MIS reports and filing statutory returns with government bodies.</p>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="p-4 bg-light rounded-4 border border-2 border-primary position-relative">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?q=80&w=2070&auto=format&fit=crop" class="img-fluid rounded-3 shadow" alt="Dashboard">
                        <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white rounded shadow border-start border-4 border-success d-none d-md-block" style="max-width: 250px;">
                            <h6 class="mb-1 fw-bold">Secure Data</h6>
                            <p class="small text-muted mb-0">256-bit encryption for all sensitive employee financial data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-dark text-white text-center" style="background: linear-gradient(90deg, #138808 0%, #000080 100%);">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Optimize Your Operations Today</h2>
            <p class="lead mb-4 text-white-50">Let us handle the numbers while you handle the business.</p>
            <button class="btn btn-lg rounded-pill px-5 fw-bold" style="background-color: white; color: var(--primary);" data-bs-toggle="modal" data-bs-target="#hireModal">Get a Quote</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>