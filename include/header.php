 <!-- Preloader -->
<div id="preloader">
    <div class="loader-content">
        <img src="logo.png" alt="GAP India Logo" class="loader-logo">
        <div class="loader-circle"></div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        const loader = document.getElementById('preloader');
        setTimeout(() => {
            if (loader) {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        }, 500); // Minimum 0.5s display time
    });
</script>

<!-- TOP WELCOME BAR (Marquee) -->
<div class="top-bar-marquee">
    <div class="marquee-wrapper">
        <div class="marquee-text">
            <span>🇮🇳 <b>Welcome to GapIndia</b> – Bridging the Gap Between Talent & Opportunity! &nbsp;&nbsp;|&nbsp;&nbsp; 🚀 <b>One-Stop Solution:</b> IT & Non-IT Staffing, Global Placement, RPO & Payroll Operations. &nbsp;&nbsp;|&nbsp;&nbsp; 📞 <b>Contact Us:</b> +91-9990411626 &nbsp;&nbsp;|&nbsp;&nbsp; 📧 <b>Email:</b> info@thegapindia.com</span>
            <span>🇮🇳 <b>Welcome to GapIndia</b> – Bridging the Gap Between Talent & Opportunity! &nbsp;&nbsp;|&nbsp;&nbsp; 🚀 <b>One-Stop Solution:</b> IT & Non-IT Staffing, Global Placement, RPO & Payroll Operations. &nbsp;&nbsp;|&nbsp;&nbsp; 📞 <b>Contact Us:</b> +91-9990411626 &nbsp;&nbsp;|&nbsp;&nbsp; 📧 <b>Email:</b> info@thegapindia.com</span>
        </div>
    </div>
</div>

<style>
    /* Top Bar Styling */
    .top-bar-marquee {
        background: linear-gradient(90deg, #FF9933 0%, #ffffff 50%, #138808 100%); /* Indian Flag: Saffron -> White -> Green */
        background-size: 200% 200%;
        animation: gradientBG 10s ease infinite;
        color: #000080; /* Navy Text */
        height: 40px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        display: flex;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-bottom: 2px solid #000080; /* Navy Line for contrast */
        overflow: hidden;
    }

    .marquee-text {
        display: inline-block;
        white-space: nowrap;
        animation: scrollText 25s linear infinite;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 0.5px;
        text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.8); /* Ensure visibility on dark colors */
    }

    .marquee-text span {
        padding-right: 50px;
    }

    @keyframes scrollText {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Adjust Navbar Position */
    nav.navbar.fixed-top {
        top: 40px !important; /* Push navbar down */
        transition: top 0.3s;
    }

    /* Adjust Body Padding to account for Top Bar + Navbar */
    /* Assuming original navbar height ~80px, adding 40px extra */
    body {
        padding-top: 120px; /* Adjust based on actual theme needs, usually it's handled by padding on sections */
    }
    
    /* Mobile Adjustment */
    @media (max-width: 991px) {
        .top-bar-marquee {
            height: 35px;
            font-size: 12px;
        }
        nav.navbar.fixed-top {
            top: 35px !important;
        }
        .marquee-text {
            font-size: 12px;
        }
    }
</style>

<!-- Fixed Left Sidebar Icons -->
<div class="fixed-social d-none d-lg-flex">
        <a href="tel:+919990411626" class="social-btn btn-phone ring-animation"><i class="fas fa-phone-volume"></i></a>
        <a href="https://wa.me/919990411626" class="social-btn btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.linkedin.com/in/gap-india-aaa946374/" class="social-btn btn-linkedin"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/gapindia1_/" class="social-btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
    </div>

    <!-- Scroll To Top -->
    <div class="scroll-top" onclick="window.scrollTo(0,0)"><i class="fas fa-arrow-up"></i></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- NEW LOGO -->
                <img src="/logo.png" alt="GAP India Logo">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#gapNav">
                <i class="fas fa-bars fs-4"></i>
            </button>
            <div class="collapse navbar-collapse" id="gapNav">
                <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    $service_pages = ['it-recruitment.php', 'non-it-staffing.php', 'it-non-it-staffing.php', 'oil-gas-hiring.php', 'executive-search.php', 'rpo-solutions.php', 'campus-hiring.php', 'global-placement.php', 'payroll-operations.php'];
                    $is_services_active = in_array($current_page, $service_pages) ? 'active' : '';
                ?>
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About Us</a></li>
                    
                    <!-- Dropdown with Fix -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $is_services_active; ?>" href="#" role="button" data-bs-toggle="dropdown">
                            Staffing Solutions <i class="fas fa-chevron-down fa-xs ms-1"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="it-non-it-staffing.php">IT & Non-IT Staffing</a></li>
                            <!-- <li><a class="dropdown-item" href="non-it-staffing.php">Non-IT Staffing</a></li> -->
                            <li><a class="dropdown-item" href="oil-gas-hiring.php">Oil & Gas Staffing</a></li>
                            <li><a class="dropdown-item" href="executive-search.php">Executive Search</a></li>
                            <li><a class="dropdown-item" href="rpo-solutions.php">RPO Solutions</a></li>
                            <li><a class="dropdown-item" href="global-placement.php">Global Placement</a></li>
                            <li><a class="dropdown-item" href="payroll-operations.php">Payroll and Operations</a></li>
                            <li><a class="dropdown-item" href="campus-hiring.php">Campus Hiring</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'industries.php') ? 'active' : ''; ?>" href="industries.php">Industries</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                </ul>
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <button class="btn btn-outline-custom text-primary border-primary" style="color:var(--primary); border-color:var(--primary);" data-bs-toggle="modal" data-bs-target="#cvModal">Upload CV</button>
                    <button class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Talent</button>
                </div>
            </div>
        </div>
    </nav>