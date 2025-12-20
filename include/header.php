 <!-- Fixed Left Sidebar Icons -->
    <div class="fixed-social d-none d-lg-flex">
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
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    
                    <!-- Dropdown with Fix -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="it-recruitment.php">IT Recruitment</a></li>
                            <li><a class="dropdown-item" href="non-it-staffing.php">Non-IT Staffing</a></li>
                            <li><a class="dropdown-item" href="oil-gas-hiring.php">Oil & Gas Hiring</a></li>
                            <li><a class="dropdown-item" href="executive-search.php">Executive Search</a></li>
                            <li><a class="dropdown-item" href="rpo-solutions.php">RPO Solutions</a></li>
                            <li><a class="dropdown-item" href="campus-hiring.php">Campus Hiring</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="industries.php">Industries</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <button class="btn btn-outline-custom text-primary border-primary" style="color:var(--primary); border-color:var(--primary);" data-bs-toggle="modal" data-bs-target="#cvModal">Upload CV</button>
                    <button class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#hireModal">Hire Talent</button>
                </div>
            </div>
        </div>
    </nav>