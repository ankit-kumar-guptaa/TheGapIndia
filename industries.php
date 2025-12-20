<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Industries We Serve - Gap India provides specialized manpower for IT, Oil & Gas, Healthcare, BFSI, and more.">
    <title>Industries We Serve | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop');
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

        .industry-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            height: 350px;
            display: block;
            text-decoration: none;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .industry-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .industry-card:hover .industry-bg {
            transform: scale(1.1);
        }

        .industry-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.1) 100%);
            z-index: 1;
            transition: 0.3s;
        }

        .industry-card:hover .industry-overlay {
            background: linear-gradient(to top, rgba(249, 115, 22, 0.9) 0%, rgba(0,0,0,0.4) 100%);
        }

        .industry-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 25px;
            z-index: 2;
            color: white;
        }

        .industry-icon {
            font-size: 32px;
            margin-bottom: 15px;
            color: var(--accent);
            transition: 0.3s;
        }

        .industry-card:hover .industry-icon {
            color: white;
            transform: scale(1.1);
        }

        .industry-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .industry-desc {
            font-size: 14px;
            color: rgba(255,255,255,0.8);
            margin-bottom: 0;
            opacity: 0;
            transform: translateY(20px);
            transition: 0.3s ease;
            max-height: 0;
        }

        .industry-card:hover .industry-desc {
            opacity: 1;
            transform: translateY(0);
            max-height: 100px;
            margin-bottom: 15px;
        }

        .industry-arrow {
            display: inline-flex;
            align-items: center;
            font-weight: 600;
            font-size: 14px;
            color: white;
            opacity: 0;
            transform: translateX(-10px);
            transition: 0.3s ease 0.1s;
        }

        .industry-card:hover .industry-arrow {
            opacity: 1;
            transform: translateX(0);
        }

        .cta-section {
            background: var(--bg-light);
            padding: 80px 0;
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">Industries We Serve</h5>
            <h1 class="display-3 fw-bold">Specialized Expertise</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Deep industry knowledge to find the perfect fit for specialized roles across diverse sectors.</p>
        </div>
    </section>

    <!-- INDUSTRIES GRID -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Industry 1: Oil & Gas -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1516937941344-00b4ec0c46f6?q=80&w=2032&auto=format&fit=crop" class="industry-bg" alt="Oil & Gas">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-oil-can"></i></div>
                            <h3 class="industry-title">Oil & Gas</h3>
                            <p class="industry-desc">Upstream, downstream, and offshore engineering roles.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 2: IT / Software -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=2069&auto=format&fit=crop" class="industry-bg" alt="IT / Software">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-laptop-code"></i></div>
                            <h3 class="industry-title">IT & Software</h3>
                            <p class="industry-desc">Software development, cloud computing, and AI solutions.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 3: BFSI -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1601597111158-2fceff292cd4?q=80&w=2076&auto=format&fit=crop" class="industry-bg" alt="BFSI">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-landmark"></i></div>
                            <h3 class="industry-title">BFSI</h3>
                            <p class="industry-desc">Banking, Financial Services, and Insurance sector hiring.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 4: Healthcare -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop" class="industry-bg" alt="Healthcare">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-user-md"></i></div>
                            <h3 class="industry-title">Healthcare</h3>
                            <p class="industry-desc">Medical professionals, biotech, and life sciences staffing.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 5: E-commerce -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?q=80&w=2070&auto=format&fit=crop" class="industry-bg" alt="E-commerce">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-shopping-cart"></i></div>
                            <h3 class="industry-title">E-commerce</h3>
                            <p class="industry-desc">Retail, logistics, and digital marketplace roles.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 6: Telecom -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop" class="industry-bg" alt="Telecom">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-broadcast-tower"></i></div>
                            <h3 class="industry-title">Telecom</h3>
                            <p class="industry-desc">5G, network engineering, and connectivity solutions.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 7: Manufacturing -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop" class="industry-bg" alt="Manufacturing">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-industry"></i></div>
                            <h3 class="industry-title">Manufacturing</h3>
                            <p class="industry-desc">Automation, robotics, and industrial engineering.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>

                <!-- Industry 8: Media -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="industry-card">
                        <img src="https://images.unsplash.com/photo-1603739903239-8b6e64c3b185?q=80&w=2071&auto=format&fit=crop" class="industry-bg" alt="Media">
                        <div class="industry-overlay"></div>
                        <div class="industry-content">
                            <div class="industry-icon"><i class="fas fa-video"></i></div>
                            <h3 class="industry-title">Media</h3>
                            <p class="industry-desc">Digital content, entertainment, and creative arts.</p>
                            <div class="industry-arrow">Explore <i class="fas fa-arrow-right ms-2"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta-section">
        <div class="container">
            <div class="bg-primary-custom rounded-4 p-5 text-center text-white position-relative overflow-hidden" data-aos="zoom-in" style="background: linear-gradient(135deg, var(--accent), #ff8533);">
                <div class="position-relative z-2">
                    <h2 class="mb-3">Partner with Industry Experts</h2>
                    <p class="lead mb-4 opacity-90">We understand your industry's unique challenges. Let's find the talent that fits your niche.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <button class="btn btn-light text-accent fw-bold btn-lg" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Talent</button>
                        <button class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#cvModal">Find a Job</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

</body>

</html>