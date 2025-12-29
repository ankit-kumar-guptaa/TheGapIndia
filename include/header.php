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

<!-- Fixed Left Sidebar Icons -->
<div class="fixed-social d-none d-lg-flex">
        <a href="tel:+919990411626" class="social-btn btn-phone ring-animation"><i class="fas fa-phone-volume"></i></a>
        <a href="#" class="social-btn btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="social-btn btn-linkedin"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="social-btn btn-facebook"><i class="fab fa-facebook-f"></i></a>
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
                    $service_pages = ['it-recruitment.php', 'non-it-staffing.php', 'oil-gas-hiring.php', 'executive-search.php', 'rpo-solutions.php', 'campus-hiring.php', 'global-placement.php', 'payroll-operations.php'];
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
                            <li><a class="dropdown-item" href="it-recruitment.php">IT Staffing Solutions</a></li>
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