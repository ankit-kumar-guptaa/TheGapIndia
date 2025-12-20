<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thank You - Gap India">
    <title>Thank You | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .thank-you-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            background-image: url('assets/img/pattern.png'); /* Optional texture */
        }

        .thank-you-card {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
            text-align: center;
            max-width: 600px;
            width: 90%;
            position: relative;
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        .thank-you-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
        }

        .success-icon-box {
            width: 100px;
            height: 100px;
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.3s both;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.5); }
            to { opacity: 1; transform: scale(1); }
        }

        .btn-home {
            padding: 12px 35px;
            font-weight: 600;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <section class="thank-you-section">
        <div class="thank-you-card">
            <div class="success-icon-box">
                <i class="fas fa-check"></i>
            </div>
            
            <h1 class="display-5 fw-bold mb-3 text-dark">Thank You!</h1>
            <p class="lead text-muted mb-4">Your submission has been received successfully. We appreciate you contacting Gap India.</p>
            
            <p class="mb-5 text-secondary">Our team will review your details and get back to you shortly. A confirmation email has been sent to your inbox.</p>
            
            <a href="index.php" class="btn btn-primary-custom btn-home">
                <i class="fas fa-arrow-left me-2"></i> Back to Home
            </a>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <!-- Override footer modal scripts to prevent double binding if included in footer -->
    <script>
        // Optional: Any specific JS for this page
    </script>

</body>

</html>