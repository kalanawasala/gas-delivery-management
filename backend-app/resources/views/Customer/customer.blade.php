<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard - GasByGas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheets">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheets">
    <style>
        :root {
            --primary-color: #ff6b35;
            --secondary-color: #e8cb3b;
            --sidebar-width: 250px;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: var(--sidebar-width);
            background: #557804;
            color: white;
            position: fixed;
            height: 100vh;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link {
            color: rgba(252, 252, 252, 0.8);
            padding: 0.8rem 1rem;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background: rgba(180, 139, 139, 0.1);
        }

       .navbar{
        background: #3d3a1225;
        }
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 20px;
        }

        .status-card {
            border-radius: 10px;
            border: none;
            transition: transform 0.3s ease;
        }

        .status-card:hover {
            transform: translateY(-5px);
        }

        .notification-item {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .notification-item:hover {
            background: #f3b871;
        }

        .token-card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .main-content {
                margin-left: 0;
            }
            .sidebar.active {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="p-3">
                <img src="img/logo.png" alt="GasByGas Logo" class="img-fluid mb-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-home me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Customer_GasRequest_Form.html">
                            <i class="fas fa-shopping-cart me-2"></i> Request Gas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Customer_Token_Management.html">
                            <i class="fas fa-ticket-alt me-2"></i> Token Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user me-2"></i> Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-bell me-2"></i> Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Customer_View_Nearest_Outlets.html">
                            <i class="fas fa-map-marker-alt me-2"></i> Nearby Outlets
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light mb-4 shadow-sm rounded">
                <div class="container-fluid">
                    <button class="navbar-toggler border-0" type="button" id="sidebarToggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="ms-auto d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="notificationDropdown" data-bs-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                                <span class="badge bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">New notification</a>
                                <a class="dropdown-item" href="#">Another notification</a>
                            </div>
                        </div>
                        <div class="dropdown ms-3">
                            <button class="btn btn-link text-dark dropdown-toggle d-flex align-items-center" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                                <img src="/img/user.png" class="rounded-circle me-2" wialt="Profile" width="30px">
                                John Doe
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="container-fluid">
                <!-- Status Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="card status-card bg-primary text-white">
                            <div class="card-body">
                                <h6 class="card-title">Active Tokens</h6>
                                <h2 class="mb-0">3</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card status-card bg-success text-white">
                            <div class="card-body">
                                <h6 class="card-title">Available Stock</h6>
                                <h2 class="mb-0">150</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card status-card bg-warning text-white">
                            <div class="card-body">
                                <h6 class="card-title">Pending Requests</h6>
                                <h2 class="mb-0">2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card status-card bg-info text-white">
                            <div class="card-body">
                                <h6 class="card-title">Total Orders</h6>
                                <h2 class="mb-0">25</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Tokens -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Active Tokens</h5>
                            </div>
                            <div class="card-body">
                                <div class="token-card p-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Token #12345</h6>
                                            <p class="text-muted mb-0">Expires: 2024-01-15</p>
                                        </div>
                                        <span class="badge bg-success">Active</span>
                                    </div>
                                </div>
                                <div class="token-card p-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Token #12346</h6>
                                            <p class="text-muted mb-0">Expires: 2024-01-20</p>
                                        </div>
                                        <span class="badge bg-warning">Pending</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title mb-0">Recent Notifications</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="notification-item p-3">
                                    <h6 class="mb-1">Gas Delivery Update</h6>
                                    <p class="text-muted mb-0">Your order #12345 will be delivered today</p>
                                </div>
                                <div class="notification-item p-3">
                                    <h6 class="mb-1">Payment Confirmed</h6>
                                    <p class="text-muted mb-0">Payment received for order #12346</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar Toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Responsive sidebar
        function checkWidth() {
            if (window.innerWidth <= 768) {
                document.querySelector('.sidebar').classList.remove('active');
            }
        }

        window.addEventListener('resize', checkWidth);
    </script>
</body>
</html>