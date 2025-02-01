<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            background: #3931af;
            color: white;
            padding-top: 20px;
        }
        .sidebar .nav-link {
            color: white;
            padding: 15px 20px;
            margin: 5px 0;
        }
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.1);
        }
        .main-content {
            padding: 20px;
        }
        .dashboard-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .logout-btn {
            position: absolute;
            bottom: 20px;
            width: calc(10% - 20px);
            margin: 0 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <h4 class="text-center mb-4">Admin Panel</h4>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#"><i class="fas fa-home me-2"></i> Dashboard</a>
                    <a class="nav-link" href="#"><i class="fas fa-users me-2"></i> Students</a>
                    <a class="nav-link" href="#"><i class="fas fa-book me-2"></i> Courses</a>
                    <a class="nav-link" href="#"><i class="fas fa-file-alt me-2"></i> Applications</a>
                    <a class="nav-link" href="#"><i class="fas fa-cog me-2"></i> Settings</a>
                </nav>
                <a href="{{ url('admin/logout') }}" class="btn btn-light logout-btn"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
            </div>

            {{--  <!-- Main Content -->  --}}
            <div class="col-md-9 col-lg-10 main-content">
                <h2 class="mb-4">Dashboard Overview</h2>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="dashboard-card">
                            <h5><i class="fas fa-users text-primary me-2"></i>Total Students</h5>
                            <h3 class="mt-3">0</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dashboard-card">
                            <h5><i class="fas fa-book text-success me-2"></i>Total Courses</h5>
                            <h3 class="mt-3">4</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dashboard-card">
                            <h5><i class="fas fa-file-alt text-warning me-2"></i>Pending Applications</h5>
                            <h3 class="mt-3">0</h3>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card mt-4">
                    <h4>Recent Applications</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-bs-toggle="modal" data-bs-target="#studentModal" style="cursor: pointer;">
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>BS Nursing</td>
                                    <td>Pending</td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Approve</button>
                                        <button class="btn btn-danger btn-sm">Decline</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <!-- Student Details Modal -->  --}}
    <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="studentModalLabel">Student Application Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Personal Information</h6>
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Email:</strong> johndoe@example.com</p>
                            <p><strong>Phone:</strong> +92 300 1234567</p>
                            <p><strong>Course:</strong> BS Nursing</p>
                            <p><strong>CNIC:</strong> 12345-1234567-1</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Educational Background</h6>
                            <p><strong>Last Degree:</strong> Intermediate</p>
                            <p><strong>Institute:</strong> ABC College</p>
                            <p><strong>Percentage:</strong> 85%</p>
                            <p><strong>Year of Passing:</strong> 2023</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h6>Documents</h6>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-primary">View CNIC</button>
                                <button class="btn btn-sm btn-primary">View Certificates</button>
                                <button class="btn btn-sm btn-primary">View Medical Records</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Approve Application</button>
                    <button type="button" class="btn btn-danger">Decline Application</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
