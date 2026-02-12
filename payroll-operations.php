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
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 41, 59, 0.8) 100%); /* Professional Navy Gradient */
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
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Streamline operations to drive measurable gains in efficiency and productivity.</p>
        </div>
    </section>

    <!-- INTRODUCTION SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <img src="assets/images/payroll-opertions.jpg" class="img-fluid rounded-4 shadow-lg mb-4" alt="Payroll Processing">
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <h2 class="mb-4">Optimize Operational Processes</h2>
                    <p class="text-muted mb-4">Whether it is processing payrolls, tracking attendance, managing leave, or maintaining employee records, the complexities in managing your organization’s payroll and operational tasks can be a resource-draining endeavor.</p>
                    <p class="text-muted mb-4">At Gap India we address your payroll and operations challenges across blue, white and grey collar roles and provide tailored outsourcing solutions that empower your organization to thrive.</p>
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
            </div>
            <div class="row g-4">
                <!-- Service 1: Payroll Processing and Compliance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden border-top border-4 border-primary">
                        <div class="mb-3 text-primary"><i class="fas fa-file-invoice-dollar fa-3x"></i></div>
                        <h4 class="fw-bold mb-3 mt-2">Payroll Processing & Compliance</h4>
                        <p class="text-muted mb-4">We take care of the entire payroll process and reimbursements ensuring that employees are paid accurately and on time, while staying fully compliant with tax laws. Our payroll experts remain up-to-date on tax regulations and compliance standards.</p>
                    </div>
                </div>
                <!-- Service 2: Attendance Tracking and Leave Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden border-top border-4 border-success">
                        <div class="mb-3 text-success"><i class="fas fa-clock fa-3x"></i></div>
                        <h4 class="fw-bold mb-3 mt-2">Attendance & Leave Management</h4>
                        <p class="text-muted mb-4">We offer efficient attendance tracking solutions, simplifying the process and reducing manual errors. Hopper, our attendance tracking and leave management system ensures that employees can request and receive approval for leave seamlessly.</p>
                    </div>
                </div>
                <!-- Service 3: Employee Records Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white p-4 rounded shadow-sm h-100 position-relative overflow-hidden border-top border-4 border-warning">
                        <div class="mb-3 text-warning"><i class="fas fa-id-card fa-3x"></i></div>
                        <h4 class="fw-bold mb-3 mt-2">Employee Records Management</h4>
                        <p class="text-muted mb-4">We maintain and update employee records with a high level of accuracy, providing an easy-to-access and reliable database for your organization. Our records management systems streamline HR processes, reducing operational bottlenecks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUTORY COMPLIANCE SECTION -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                    <h5 class="text-uppercase letter-spacing-2" style="color: var(--accent);">Regulatory Confidence</h5>
                    <h2 class="fw-bold mb-4">Navigate Compliance with Confidence</h2>
                    <p class="text-muted mb-4">Statutory compliance refers to the legal framework that an organization must adhere to while dealing with its employees. It includes responsibilities that ensure a company is secure from government penal actions, financial losses & brand defamation while staying fair & just to its employees.</p>
                    <p class="text-muted mb-4">At Gap India, we help you navigate the complex landscape of HR compliance across blue, white and grey collar roles, ensuring that your organization is not only protected but also poised for success.</p>
                    <p class="text-muted">Navigate compliance with confidence while focussing on your core business goals.</p>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                     <div class="row g-4">
                        <!-- Legal Expertise -->
                        <div class="col-md-12">
                            <div class="d-flex p-4 bg-light rounded shadow-sm border-start border-4 border-primary">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-white p-3 rounded-circle shadow-sm text-primary">
                                        <i class="fas fa-gavel fa-2x"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Legal Expertise</h5>
                                    <p class="text-muted mb-0">We maintain a team of legal experts who stay updated on the latest labor laws and statutory requirements, ensuring that your organization remains in full compliance. Our experts proactively identify and address compliance risks.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Industry-Specific Knowledge -->
                        <div class="col-md-12">
                            <div class="d-flex p-4 bg-light rounded shadow-sm border-start border-4 border-success">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-white p-3 rounded-circle shadow-sm text-success">
                                        <i class="fas fa-industry fa-2x"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Industry-Specific Knowledge</h5>
                                    <p class="text-muted mb-0">We have a deep understanding of industry-specific compliance requirements, tailoring our solutions to meet the unique needs of your organization. This industry-centric approach ensures that your organization remains fully compliant.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Compliance Management -->
                        <div class="col-md-12">
                            <div class="d-flex p-4 bg-light rounded shadow-sm border-start border-4 border-warning">
                                <div class="flex-shrink-0 me-3">
                                    <div class="bg-white p-3 rounded-circle shadow-sm text-warning">
                                        <i class="fas fa-tasks fa-2x"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Compliance Management</h5>
                                    <p class="text-muted mb-0">We provide compliance management systems that streamline your compliance processes, reducing administrative burdens. These systems facilitate efficient compliance monitoring and reporting.</p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-5 bg-dark text-white text-center" style="background: linear-gradient(90deg, #0f172a 0%, #1e40af 100%);">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Optimize Your Operations Today</h2>
            <p class="lead mb-4 text-white-50">Let us handle the numbers while you handle the business.</p>
            <button class="btn btn-lg rounded-pill px-5 fw-bold" style="background-color: white; color: var(--primary);" data-bs-toggle="modal" data-bs-target="#hireModal">Get a Quote</button>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>