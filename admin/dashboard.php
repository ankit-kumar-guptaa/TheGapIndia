<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

require_once '../backend/db_config.php';

// Fetch Stats
$stats = [];
$stats['hire'] = $pdo->query("SELECT COUNT(*) FROM hire_requests")->fetchColumn();
$stats['cv'] = $pdo->query("SELECT COUNT(*) FROM cv_submissions")->fetchColumn();
$stats['contact'] = $pdo->query("SELECT COUNT(*) FROM contact_queries")->fetchColumn();

// Fetch Recent Hire Requests
$hire_stmt = $pdo->query("SELECT * FROM hire_requests ORDER BY created_at DESC LIMIT 5");
$hire_requests = $hire_stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch Recent CVs
$cv_stmt = $pdo->query("SELECT * FROM cv_submissions ORDER BY created_at DESC LIMIT 5");
$cv_submissions = $cv_stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch Recent Contacts
$contact_stmt = $pdo->query("SELECT * FROM contact_queries ORDER BY created_at DESC LIMIT 5");
$contact_queries = $contact_stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Gap India Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #f1f5f9;
        }
        .sidebar {
            width: 250px;
            background: #0f172a;
            min-height: 100vh;
            color: white;
            position: fixed;
        }
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
        .nav-link {
            color: #94a3b8;
            padding: 12px 20px;
            display: flex;
            align-items: center;
        }
        .nav-link:hover, .nav-link.active {
            background: #1e293b;
            color: #f97316;
        }
        .nav-link i {
            width: 25px;
        }
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .table-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <div class="p-4 border-bottom border-secondary">
            <h4 class="fw-bold m-0">Gap India <span class="text-warning">.</span></h4>
        </div>
        <nav class="nav flex-column mt-4">
            <a href="#" class="nav-link active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#hire-requests" class="nav-link"><i class="fas fa-briefcase"></i> Hire Requests</a>
            <a href="#cv-submissions" class="nav-link"><i class="fas fa-file-alt"></i> CV Submissions</a>
            <a href="#contact-queries" class="nav-link"><i class="fas fa-envelope"></i> Contact Queries</a>
            <a href="logout.php" class="nav-link mt-auto"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h2 class="fw-bold">Dashboard Overview</h2>
            <div class="d-flex align-items-center">
                <span class="me-3">Welcome, <strong><?php echo htmlspecialchars($_SESSION['admin_user']); ?></strong></span>
                <div class="bg-warning rounded-circle" style="width: 40px; height: 40px;"></div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="stat-card">
                    <div>
                        <h6 class="text-muted mb-1">Total Hire Requests</h6>
                        <h2 class="fw-bold mb-0"><?php echo $stats['hire']; ?></h2>
                    </div>
                    <div class="stat-icon bg-primary bg-opacity-10 text-primary">
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div>
                        <h6 class="text-muted mb-1">CVs Received</h6>
                        <h2 class="fw-bold mb-0"><?php echo $stats['cv']; ?></h2>
                    </div>
                    <div class="stat-icon bg-success bg-opacity-10 text-success">
                        <i class="fas fa-file-upload"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div>
                        <h6 class="text-muted mb-1">Contact Queries</h6>
                        <h2 class="fw-bold mb-0"><?php echo $stats['contact']; ?></h2>
                    </div>
                    <div class="stat-icon bg-warning bg-opacity-10 text-warning">
                        <i class="fas fa-comments"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Row -->
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="table-card">
                    <h5 class="fw-bold mb-4">Submission Trends</h5>
                    <canvas id="submissionChart" height="120"></canvas>
                </div>
            </div>
            <div class="col-lg-4">
                 <div class="table-card h-100">
                    <h5 class="fw-bold mb-4">Distribution</h5>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Tables -->
        
        <!-- Hire Requests -->
        <div class="table-card" id="hire-requests">
            <h5 class="fw-bold mb-3 text-primary">Recent Hire Requests</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Company</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($hire_requests as $req): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($req['company_name']); ?></td>
                            <td><?php echo htmlspecialchars($req['contact_person']); ?></td>
                            <td><?php echo htmlspecialchars($req['email']); ?></td>
                            <td><?php echo htmlspecialchars($req['role_description']); ?></td>
                            <td><?php echo date('M d, Y', strtotime($req['created_at'])); ?></td>
                            <td><span class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill"><?php echo $req['status']; ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if(empty($hire_requests)) echo "<tr><td colspan='6' class='text-center py-3'>No records found</td></tr>"; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- CV Submissions -->
        <div class="table-card" id="cv-submissions">
            <h5 class="fw-bold mb-3 text-success">Recent CV Submissions</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>CV</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cv_submissions as $cv): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($cv['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($cv['current_role']); ?></td>
                            <td><?php echo htmlspecialchars($cv['email']); ?></td>
                            <td><?php echo htmlspecialchars($cv['mobile']); ?></td>
                            <td>
                                <a href="../backend/<?php echo $cv['file_path']; ?>" target="_blank" class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i> View</a>
                            </td>
                            <td><?php echo date('M d, Y', strtotime($cv['created_at'])); ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if(empty($cv_submissions)) echo "<tr><td colspan='6' class='text-center py-3'>No records found</td></tr>"; ?>
                    </tbody>
                </table>
            </div>
        </div>

         <!-- Contact Queries -->
         <div class="table-card" id="contact-queries">
            <h5 class="fw-bold mb-3 text-warning">Recent Contact Queries</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contact_queries as $q): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($q['name']); ?></td>
                            <td><?php echo htmlspecialchars($q['subject']); ?></td>
                            <td><?php echo htmlspecialchars($q['email']); ?></td>
                            <td style="max-width: 300px;" class="text-truncate"><?php echo htmlspecialchars($q['message']); ?></td>
                            <td><?php echo date('M d, Y', strtotime($q['created_at'])); ?></td>
                        </tr>
                        <?php endforeach; ?>
                         <?php if(empty($contact_queries)) echo "<tr><td colspan='5' class='text-center py-3'>No records found</td></tr>"; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        // Charts
        const ctx = document.getElementById('submissionChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Hire Requests', 'CVs', 'Contact Queries'],
                datasets: [{
                    label: 'Total Submissions',
                    data: [<?php echo $stats['hire']; ?>, <?php echo $stats['cv']; ?>, <?php echo $stats['contact']; ?>],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(16, 185, 129, 0.7)',
                        'rgba(245, 158, 11, 0.7)'
                    ],
                    borderRadius: 5
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        const ctxPie = document.getElementById('pieChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'doughnut',
            data: {
                labels: ['Hire', 'CV', 'Contact'],
                datasets: [{
                    data: [<?php echo $stats['hire']; ?>, <?php echo $stats['cv']; ?>, <?php echo $stats['contact']; ?>],
                    backgroundColor: [
                        '#3b82f6',
                        '#10b981',
                        '#f59e0b'
                    ]
                }]
            }
        });
    </script>
</body>
</html>
