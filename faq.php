<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Frequently Asked Questions - Gap India. Find answers about our recruitment, staffing, payroll, and global placement services.">
    <title>FAQ | Gap India - Frequently Asked Questions</title>
    <?php include 'include/assets.php'; ?>
    <style>
        /* FAQ Page Specific Styles */
        .faq-hero {
            background: linear-gradient(rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.9)), url('assets/images/hero-1.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 150px 0 80px;
            text-align: center;
            color: var(--white);
        }

        .faq-section {
            padding: 80px 0;
            background-color: var(--bg-light);
        }

        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 10px !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .accordion-button {
            background-color: #fff;
            color: var(--primary);
            font-weight: 600;
            font-size: 1.1rem;
            padding: 20px 25px;
            transition: all 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--primary-light);
            color: var(--white);
            box-shadow: none;
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
        }

        .accordion-body {
            background-color: #fff;
            padding: 25px;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .faq-category-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }

        .faq-category-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--accent);
        }
        
        /* Sticky Sidebar for Categories */
        .faq-sidebar {
            position: sticky;
            top: 100px;
        }
        
        .faq-nav-link {
            display: block;
            padding: 12px 20px;
            margin-bottom: 8px;
            color: var(--text-light);
            background: #fff;
            border-radius: 8px;
            transition: all 0.3s;
            text-decoration: none;
            font-weight: 500;
            border-left: 3px solid transparent;
        }
        
        .faq-nav-link:hover, .faq-nav-link.active {
            background: #fff;
            color: var(--primary);
            border-left-color: var(--accent);
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transform: translateX(5px);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- FAQ HERO SECTION -->
    <header class="faq-hero">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-up">Frequently Asked Questions</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Find answers to common questions about our services, process, and policies.</p>
        </div>
    </header>

    <!-- FAQ CONTENT SECTION -->
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <!-- Sidebar Navigation (Desktop) -->
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="faq-sidebar" data-aos="fade-right">
                        <h4 class="mb-4 text-dark fw-bold">Categories</h4>
                        <div class="nav flex-column">
                            <a href="#general" class="faq-nav-link active" onclick="scrollToSection('general')">General Questions</a>
                            <a href="#jobseekers" class="faq-nav-link" onclick="scrollToSection('jobseekers')">For Job Seekers</a>
                            <a href="#employers" class="faq-nav-link" onclick="scrollToSection('employers')">For Employers</a>
                            <a href="#services" class="faq-nav-link" onclick="scrollToSection('services')">Our Services</a>
                        </div>
                    </div>
                </div>

                <!-- Accordion Content -->
                <div class="col-lg-9">
                    
                    <!-- General Questions -->
                    <div id="general" class="mb-5" data-aos="fade-up">
                        <h3 class="faq-category-title">General Questions</h3>
                        <div class="accordion" id="accordionGeneral">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gen1">
                                        What is Gap India?
                                    </button>
                                </h2>
                                <div id="gen1" class="accordion-collapse collapse show" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        Gap India is a premier manpower outsourcing and staffing agency based in New Delhi. We bridge the gap between talented professionals and organizations looking for the right skills. We specialize in IT & Non-IT staffing, Global Placement, Payroll Operations, and Executive Search.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen2">
                                        Where are you located?
                                    </button>
                                </h2>
                                <div id="gen2" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        Our headquarters is located in New Delhi, India. However, we serve clients and candidates globally, with a strong presence in the PAN India region and international markets for global placements.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen3">
                                        How can I contact you?
                                    </button>
                                </h2>
                                <div id="gen3" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                                    <div class="accordion-body">
                                        You can reach us via phone at <strong>+91-9990411626</strong> or email us at <strong>info@thegapindia.com</strong>. Alternatively, you can fill out the form on our <a href="contact.php">Contact Us</a> page.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- For Job Seekers -->
                    <div id="jobseekers" class="mb-5" data-aos="fade-up">
                        <h3 class="faq-category-title">For Job Seekers</h3>
                        <div class="accordion" id="accordionSeekers">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seek1">
                                        Is there any registration fee for candidates?
                                    </button>
                                </h2>
                                <div id="seek1" class="accordion-collapse collapse" data-bs-parent="#accordionSeekers">
                                    <div class="accordion-body">
                                        No, we do not charge any registration or placement fee from candidates. Our services are completely free for job seekers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seek2">
                                        How do I apply for a job?
                                    </button>
                                </h2>
                                <div id="seek2" class="accordion-collapse collapse" data-bs-parent="#accordionSeekers">
                                    <div class="accordion-body">
                                        You can browse our latest openings on our website or simply click on the "Find a Job" / "Upload CV" button in the menu to submit your resume directly to our database. Our recruiters will contact you if your profile matches an open position.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seek3">
                                        What kind of industries do you hire for?
                                    </button>
                                </h2>
                                <div id="seek3" class="accordion-collapse collapse" data-bs-parent="#accordionSeekers">
                                    <div class="accordion-body">
                                        We hire for a wide range of industries including IT/Software, BPO/KPO, Oil & Gas, Banking & Finance, Healthcare, Manufacturing, Retail, and more.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- For Employers -->
                    <div id="employers" class="mb-5" data-aos="fade-up">
                        <h3 class="faq-category-title">For Employers</h3>
                        <div class="accordion" id="accordionEmployers">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emp1">
                                        How quickly can you fill a position?
                                    </button>
                                </h2>
                                <div id="emp1" class="accordion-collapse collapse" data-bs-parent="#accordionEmployers">
                                    <div class="accordion-body">
                                        The turnaround time depends on the specific role and requirements. However, for standard positions, we typically share qualified profiles within 24-48 hours. For niche or executive roles, it may take slightly longer.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emp2">
                                        Do you offer a replacement guarantee?
                                    </button>
                                </h2>
                                <div id="emp2" class="accordion-collapse collapse" data-bs-parent="#accordionEmployers">
                                    <div class="accordion-body">
                                        Yes, we offer a replacement guarantee period (typically 90 days) for all our placements. If a candidate leaves within this period, we provide a free replacement.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emp3">
                                        Do you handle background verification?
                                    </button>
                                </h2>
                                <div id="emp3" class="accordion-collapse collapse" data-bs-parent="#accordionEmployers">
                                    <div class="accordion-body">
                                        Yes, upon request, we can conduct preliminary background checks including employment history and reference checks. Comprehensive background verification can be arranged through our partners.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services -->
                    <div id="services" class="mb-5" data-aos="fade-up">
                        <h3 class="faq-category-title">Our Services</h3>
                        <div class="accordion" id="accordionServices">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#srv1">
                                        What is RPO (Recruitment Process Outsourcing)?
                                    </button>
                                </h2>
                                <div id="srv1" class="accordion-collapse collapse" data-bs-parent="#accordionServices">
                                    <div class="accordion-body">
                                        RPO is a form of business process outsourcing where an employer transfers all or part of its recruitment processes to an external provider like Gap India. We act as an extension of your HR department, managing the entire hiring lifecycle.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#srv2">
                                        Do you provide payroll management services?
                                    </button>
                                </h2>
                                <div id="srv2" class="accordion-collapse collapse" data-bs-parent="#accordionServices">
                                    <div class="accordion-body">
                                        Yes, we offer end-to-end payroll operations services. We handle salary processing, statutory compliance (PF, ESI, TDS), and tax filings, ensuring accurate and timely payroll for your employees.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-5" style="background: var(--primary); color: white;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Still have questions?</h2>
            <p class="mb-4 text-light opacity-75">We are here to help. Reach out to our team for personalized assistance.</p>
            <a href="contact.php" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary">Contact Us</a>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script>
        // Smooth scroll for sidebar links
        function scrollToSection(id) {
            event.preventDefault();
            const element = document.getElementById(id);
            const headerOffset = 120; // Adjust based on your header height
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
            
            // Update active link
            document.querySelectorAll('.faq-nav-link').forEach(link => link.classList.remove('active'));
            event.target.classList.add('active');
        }
    </script>
</body>

</html>
