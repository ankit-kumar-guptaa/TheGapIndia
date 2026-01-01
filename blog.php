<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gap India Blog - Insights on Recruitment, Staffing Trends, and HR Solutions.">
    <title>Blog & Insights | Gap India</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .page-header {
            position: relative;
            background-image: url('assets/images/it.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 41, 59, 0.8) 100%); /* Professional Navy */
            z-index: 1;
        }

        .page-header .container {
            position: relative;
            z-index: 2;
        }

        .blog-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .blog-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 240px;
        }

        .blog-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover .blog-img-wrapper img {
            transform: scale(1.1);
        }

        .blog-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            z-index: 2;
        }

        .blog-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-date {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .blog-date i {
            margin-right: 5px;
            color: var(--accent);
        }

        .blog-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.4;
            color: var(--primary);
        }

        .blog-title a {
            color: var(--primary);
            text-decoration: none;
            transition: 0.3s;
        }

        .blog-title a:hover {
            color: var(--accent);
        }

        .blog-excerpt {
            color: #64748b;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .read-more-btn {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: 0.3s;
        }

        .read-more-btn i {
            margin-left: 5px;
            transition: 0.3s;
        }

        .read-more-btn:hover {
            color: var(--primary);
        }

        .read-more-btn:hover i {
            transform: translateX(5px);
        }
    </style>
</head>

<body>

    <?php include 'include/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-center" data-aos="fade-up">
            <h5 class="text-white text-uppercase letter-spacing-2 mb-3">Insights & News</h5>
            <h1 class="display-3 fw-bold">Our Blog</h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 700px;">Expert perspectives on recruitment, talent management, and the future of work.</p>
        </div>
    </section>

    <!-- BLOG GRID -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-4">
                
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card">
                        <div class="blog-img-wrapper">
                            <span class="blog-category">Recruitment</span>
                            <img src="assets/images/it-hiring.png" alt="Future of Hiring">
                        </div>
                        <div class="blog-body">
                            <div class="blog-date"><i class="far fa-calendar-alt"></i> Jan 15, 2026</div>
                            <h3 class="blog-title"><a href="blog-future-of-hiring.php">The Future of Hiring: AI & Automation in Recruitment</a></h3>
                            <p class="blog-excerpt">Explore how Artificial Intelligence is transforming the recruitment landscape, from resume screening to predictive analytics.</p>
                            <a href="blog-future-of-hiring.php" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card">
                        <div class="blog-img-wrapper">
                            <span class="blog-category">IT Staffing</span>
                            <img src="assets/images/it.jpg" alt="IT Trends">
                        </div>
                        <div class="blog-body">
                            <div class="blog-date"><i class="far fa-calendar-alt"></i> Jan 10, 2026</div>
                            <h3 class="blog-title"><a href="blog-it-staffing-trends.php">Top IT Staffing Trends to Watch in 2026</a></h3>
                            <p class="blog-excerpt">Stay ahead of the curve with these key trends shaping the IT staffing industry, from cybersecurity demands to remote dev teams.</p>
                            <a href="blog-it-staffing-trends.php" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-card">
                        <div class="blog-img-wrapper">
                            <span class="blog-category">Work Culture</span>
                            <img src="assets/images/hybrid.jpg" alt="Hybrid Work">
                        </div>
                        <div class="blog-body">
                            <div class="blog-date"><i class="far fa-calendar-alt"></i> Jan 05, 2026</div>
                            <h3 class="blog-title"><a href="blog-hybrid-work.php">Navigating the Hybrid Work Model: A Guide</a></h3>
                            <p class="blog-excerpt">Best practices for employers to manage and motivate teams in a hybrid work environment, ensuring productivity and well-being.</p>
                            <a href="blog-hybrid-work.php" class="read-more-btn">Read Article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>