    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a href="#" class="footer-logo">
                        <img src="/logo.png" alt="GAP India">
                    </a>
                    <p>Recruitment and talent solutions partner for IT and Non-IT organizations across India. We make it possible.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white opacity-75"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-white opacity-75"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white opacity-75"><i class="fab fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="footer-title">Company</h5>
                    <a href="about.php" class="footer-link">About Us</a>
                    <a href="services.php" class="footer-link">Services</a>
                    <a href="industries.php" class="footer-link">Industries</a>
                    <a href="#" class="footer-link">Privacy Policy</a>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="footer-title">For Talent</h5>
                    <a href="#" class="footer-link" data-bs-toggle="modal" data-bs-target="#cvModal">Submit CV</a>
                    <a href="#" class="footer-link">Job Search</a>
                    <a href="#" class="footer-link">Career Advice</a>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-title">Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt text-accent me-2"></i> 281, DDA, Badarpur, New Delhi, 110044</p>
                    <p><i class="fas fa-globe text-accent me-2"></i> gapindia.com</p>
                    <p><i class="fas fa-envelope text-accent me-2"></i> hr@gapindia.com</p>
                    <p><i class="fas fa-phone text-accent me-2"></i> +91-9990411626</p>
                    <p><i class="fas fa-phone-volume text-accent me-2"></i> +91-129-403-1626</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="mb-0 text-white-50">&copy; 2025 Gap India. All Rights Reserved. We Make It Possible.</p>
            </div>
        </div>
    </footer>

    <!-- MODAL 1: HIRE TALENT (Compact Grid) -->
    <div class="modal fade" id="hireModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><i class="fas fa-briefcase text-accent me-2"></i> Hire Talent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="hireForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Your Company" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Person</label>
                                <input type="text" class="form-control" name="contact_person" placeholder="HR Manager" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Official Email</label>
                                <input type="email" class="form-control" name="email" placeholder="hr@company.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="phone" placeholder="+91..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Industry</label>
                                <select class="form-select" name="industry">
                                    <option value="IT / Software">IT / Software</option>
                                    <option value="Oil & Gas">Oil & Gas</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="BFSI">BFSI</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Role Description</label>
                                <input type="text" class="form-control" name="role_description" placeholder="e.g. Java Developer">
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-custom w-100">Request Callback</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 2: SUBMIT CV (Drag & Drop + Grid) -->
    <div class="modal fade" id="cvModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><i class="fas fa-user-circle text-accent me-2"></i> Submit CV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="cvForm" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile</label>
                                <input type="tel" class="form-control" name="mobile" placeholder="+91..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="john@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Current Role</label>
                                <input type="text" class="form-control" name="current_role" placeholder="e.g. Engineer">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Upload Resume (Drag & Drop)</label>
                                <div class="upload-zone" id="dropArea">
                                    <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                    <p class="mb-0 text-muted fw-bold">Drag & Drop files here or click to browse</p>
                                    <p class="small text-muted mb-0">Supported formats: PDF, DOC, DOCX</p>
                                    <input type="file" id="fileInput" name="cv_file" hidden accept=".pdf,.doc,.docx" required>
                                    <!-- File Preview -->
                                    <div id="filePreview" class="file-info" style="display:none;">
                                        <i class="fas fa-check-circle"></i> <span id="fileName">filename.pdf</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-custom w-100">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Init Animation
        AOS.init({
            duration: 800,
            once: true
        });

        // Scroll to Top Logic
        const scrollTopBtn = document.querySelector('.scroll-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        // --- DYNAMIC CLIENT SLIDER SCRIPT ---
        // Generates pa-1 to pa-40 images automatically
        const logoMarquee = document.getElementById('logoMarquee');
        const baseUrl = "https://grconsultants.in/public/front/imgs/gr/pa-";

        // Loop 1 to 40
        for (let i = 1; i <= 37; i++) {
            const div = document.createElement('div');
            div.className = 'client-logo-card';

            const img = document.createElement('img');
            img.src = `${baseUrl}${i}.png`;
            img.alt = `Client ${i}`;
            img.loading = "lazy"; // Performance optimization

            div.appendChild(img);
            logoMarquee.appendChild(div);
        }

        // Clone the content for smooth infinite loop
        const clones = logoMarquee.innerHTML;
        logoMarquee.innerHTML += clones;


        // --- DRAG & DROP LOGIC ---
        const dropArea = document.getElementById('dropArea');
        const fileInput = document.getElementById('fileInput');
        const filePreview = document.getElementById('filePreview');
        const fileName = document.getElementById('fileName');

        // Prevent default drag behaviors
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
            document.body.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Highlight drop area when item is dragged over it
        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            dropArea.classList.add('dragover');
        }

        function unhighlight(e) {
            dropArea.classList.remove('dragover');
        }

        // Handle dropped files
        dropArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            var dt = e.dataTransfer;
            var files = dt.files;
            handleFiles(files);
            // Manually assign files to input for form submission
            fileInput.files = files;
        }

        // Handle click to browse
        dropArea.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', function() {
            handleFiles(this.files);
        });

        function handleFiles(files) {
            if (files.length > 0) {
                const file = files[0];
                fileName.textContent = file.name;
                filePreview.style.display = 'inline-flex';
            }
        }

        // --- AJAX SUBMISSION LOGIC ---

        // 1. Hire Talent Form
        document.getElementById('hireForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerText = 'Sending...';
            btn.disabled = true;

            const formData = new FormData(form);

            fetch('backend/submit_hire.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    // Redirect to Thank You page
                    window.location.href = 'thank-you.php';
                    form.reset();
                    bootstrap.Modal.getInstance(document.getElementById('hireModal')).hide();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            })
            .finally(() => {
                btn.innerText = originalText;
                btn.disabled = false;
            });
        });

        // 2. CV Submission Form
        document.getElementById('cvForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerText = 'Uploading...';
            btn.disabled = true;

            const formData = new FormData(form);

            fetch('backend/submit_cv.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    // Redirect to Thank You page
                    window.location.href = 'thank-you.php';
                    form.reset();
                    if (filePreview) filePreview.style.display = 'none';
                    bootstrap.Modal.getInstance(document.getElementById('cvModal')).hide();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            })
            .finally(() => {
                btn.innerText = originalText;
                btn.disabled = false;
            });
        });
    </script>
</body>

</html>