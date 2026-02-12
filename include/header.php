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
        background: linear-gradient(90deg, #0f172a 0%, #1e40af 50%, #0f172a 100%); /* Professional Navy -> Blue -> Navy */
        background-size: 200% 200%;
        animation: gradientProfessional 15s ease infinite;
        color: #ffffff; /* White Text */
        height: 40px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        display: flex;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-bottom: 1px solid rgba(255,255,255,0.1);
        overflow: hidden;
    }

    @keyframes gradientProfessional {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
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

    /* Nested Dropdown CSS */
    .dropdown-menu {
        border: none;
        border-radius: 8px; /* Slightly sharper for professional look */
        box-shadow: 0 5px 25px rgba(0,0,0,0.15); /* Stronger shadow for separation */
        padding: 8px 0;
        animation: fadeIn 0.2s ease;
        background-color: #ffffff;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(5px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .dropdown-item {
        padding: 12px 25px; /* More breathing room */
        transition: all 0.2s;
        font-weight: 600; /* Bolder text */
        color: #000000 !important; /* Force PURE BLACK text */
        font-size: 15px;
    }

    .dropdown-item:hover, .dropdown-item:focus, .dropdown-item.active {
        background-color: #f0f4ff; /* Light blue tint */
        color: var(--primary) !important;
        padding-left: 30px; /* Enhanced slide effect */
    }

    /* Hide default Bootstrap caret for submenu */
    .dropdown-menu .dropdown-submenu .dropdown-toggle::after {
        display: none !important;
    }

    /* Submenu Styling */
    .dropdown-menu .dropdown-submenu {
        position: relative;
    }

    /* Ensure icon color matches text on hover */
    .dropdown-item:hover i, .dropdown-item:focus i, .dropdown-item.active i {
        color: var(--primary) !important;
    }

    /* Desktop Submenu Positioning */
    @media (min-width: 992px) {
        .dropdown-menu .dropdown-submenu .dropdown-menu {
            top: 0 !important; /* Force align with top */
            left: 100% !important; /* Force completely to the right */
            margin-top: -5px !important;
            margin-left: 0px !important;
            display: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease;
            position: absolute !important; /* Ensure absolute positioning */
        }

        /* Hover Behavior */
        .dropdown-menu .dropdown-submenu:hover > .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
        }
    }

    /* Mobile Submenu Styling */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-submenu .dropdown-menu {
            position: static;
            margin-left: 15px;
            display: none;
            border: none;
            box-shadow: none;
            background: #f9fafb; /* Slightly different bg for contrast */
            border-left: 2px solid var(--primary);
            padding-left: 0;
        }
        .dropdown-menu .dropdown-submenu .dropdown-menu.show {
            display: block;
        }
        .dropdown-menu .dropdown-submenu .dropdown-toggle::after {
             transform: rotate(90deg); /* Point down on mobile */
        }
        .dropdown-item {
            color: #333 !important; /* Ensure readable on mobile too */
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
                            Services <i class="fas fa-chevron-down fa-xs ms-1"></i>
                        </a>
                        <ul class="dropdown-menu">
                              <!-- Contract Staffing Nested Menu -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle d-flex justify-content-between align-items-center" href="#">
                                    Contract Staffing Solutions 
                                    <i class="fas fa-chevron-right" style="font-size: 11px;"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blue-collar-staffing.php">Blue Collar Staffing Solutions</a></li>
                                    <li><a class="dropdown-item" href="white-collar-staffing.php">White Collar Staffing Solutions</a></li>
                                    <li><a class="dropdown-item" href="grey-collar-staffing.php">Grey Collar Staffing Solutions</a></li>
                                </ul>
                            </li>

                            <li><a class="dropdown-item" href="it-staffing-solutions.php">IT Staffing Solutions</a></li>
                            
                          

                            <!-- <li><a class="dropdown-item" href="non-it-staffing.php">Non-IT Staffing</a></li> -->
                            <li><a class="dropdown-item" href="oil-gas-hiring.php">Oil & Gas Staffing</a></li>
                               <li><a class="dropdown-item" href="payroll-operations.php">Payroll and Operations</a></li>
                            <li><a class="dropdown-item" href="executive-search.php">Executive Search</a></li>
                            <!-- <li><a class="dropdown-item" href="rpo-solutions.php">RPO Solutions</a></li> -->
                            <li><a class="dropdown-item" href="global-placement.php">Global Placement</a></li>
                         
                            <li><a class="dropdown-item" href="campus-hiring.php">Campus Hiring</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'blog.php' || strpos($current_page, 'blog-') !== false) ? 'active' : ''; ?>" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>" href="faq.php">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                </ul>
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <button class="btn btn-outline-custom text-primary border-primary" style="color:var(--primary); border-color:var(--primary);" data-bs-toggle="modal" data-bs-target="#cvModal">Upload CV</button>
                    <button class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Talent</button>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Handle Nested Dropdowns on Mobile
        document.addEventListener("DOMContentLoaded", function(){
            document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function(element){
                element.addEventListener('click', function (e) {
                    if (window.innerWidth < 992) {
                        e.preventDefault();
                        e.stopPropagation();
                        let nextEl = this.nextElementSibling;
                        if(nextEl && nextEl.classList.contains('dropdown-menu')){
                            nextEl.classList.toggle('show');
                        }
                    }
                });
            });
        });
    </script>