<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Gap India - Get in touch for your manpower and recruitment needs.">
    <title>Contact Us | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax Effect */
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
            background: linear-gradient(135deg, rgb(22 32 54 / 80%) 0%, rgba(15, 23, 42, 0.9) 100%);
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .contact-info-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            height: 100%;
            border-top: 5px solid var(--accent);
            transition: transform 0.3s ease;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
        }

        .contact-icon-box {
            width: 50px;
            height: 50px;
            background: rgba(37, 99, 235, 0.1); /* Professional Blue tint */
            color: var(--accent); /* Professional Blue */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 20px;
            margin-right: 20px;
            transition: 0.3s;
        }

        .contact-info-card:hover .contact-icon-box {
            background: var(--accent);
            color: white;
        }

        .form-section {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            padding: 40px;
            border-top: 5px solid var(--primary); /* Navy Blue Top Border */
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-accent text-uppercase letter-spacing-2 mb-3">We Make It Possible</h5>
            <h1 class="display-3 fw-bold">Contact Us</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Have a question or need a custom solution? We're here to help you bridge the gap.</p>
        </div>
    </section>

    <!-- CONTACT CONTENT -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Contact Info -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-card">
                        <h3 class="mb-4">Get in Touch</h3>
                        <p class="text-muted mb-5">Reach out to us for any inquiries regarding our recruitment services, or just to say hello.</p>

                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon-box">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Our Location</h6>
                                <p class="text-muted mb-0">281, DDA, Badarpur, New Delhi, 110044</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon-box">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Email Us</h6>
                                <p class="text-muted mb-0">hr@gapindia.com</p>
                                <p class="text-muted mb-0">director@gapindia.com</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-5">
                            <div class="contact-icon-box">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Call Us</h6>
                                <p class="text-muted mb-0">+91-9990411626</p>
                            </div>
                        </div>

                        <h5 class="mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="form-section h-100">
                        <h3 class="mb-4">Send us a Message</h3>
                        <form id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control bg-white border shadow-sm py-3" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control bg-white border shadow-sm py-3" placeholder="john@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control bg-white border shadow-sm py-3" placeholder="+91...">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Subject</label>
                                    <select name="subject" class="form-select bg-white border shadow-sm py-3">
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Hire Talent">Hire Talent</option>
                                        <option value="Job Application">Job Application</option>
                                        <option value="Partnership">Partnership</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Message <span class="text-danger">*</span></label>
                                    <textarea name="message" class="form-control bg-white border shadow-sm" rows="5" placeholder="How can we help you?" required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary-custom btn-lg w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section>
        <div class="container-fluid p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.183492728284!2d77.2941!3d28.5041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDMwJzE0LjgiTiA3N8KwMTcnMzguOCJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            
            // Disable button and show loading state
            btn.innerText = 'Sending...';
            btn.disabled = true;

            const formData = new FormData(form);

            fetch('backend/submit_contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    // Redirect to Thank You page
                    window.location.href = 'thank-you.php';
                    form.reset();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            })
            .finally(() => {
                // Restore button state
                btn.innerText = originalText;
                btn.disabled = false;
            });
        });
    </script>

</body>

</html>