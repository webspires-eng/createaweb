<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Createaweb</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --gt-theme: #C9F31D;
            --gt-theme-rgb: 201, 243, 29;
            --gt-dark: #1C1C1C;
            --gt-darker: #121212;
            --gt-bg: #f8f9fa;
            --gt-bg-card: #ffffff;
            --gt-text: #1C1C1C;
            --gt-text-muted: #6c757d;
            --gt-border: #e9ecef;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body { 
            background: var(--gt-bg); 
            font-family: 'Inter', sans-serif; 
            color: var(--gt-text);
            min-height: 100vh;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.6;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Anton', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--gt-dark);
        }
        
        /* Sidebar */
        .sidebar { 
            height: 100vh; 
            background: var(--gt-dark);
            color: #fff; 
            position: fixed; 
            width: 280px; 
            padding-top: 0;
            overflow: hidden;
            z-index: 1000;
        }
        
        .sidebar-brand {
            padding: 30px 25px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            background: linear-gradient(135deg, rgba(201, 243, 29, 0.15) 0%, transparent 100%);
        }
        
        .sidebar-brand h4 {
            font-family: 'Anton', sans-serif;
            font-weight: 400;
            letter-spacing: 4px;
            font-size: 1.5rem;
            background: linear-gradient(135deg, var(--gt-theme) 0%, #fff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
        }
        
        .sidebar-brand small {
            font-family: 'Inter', sans-serif;
            color: rgba(255,255,255,0.5);
            font-size: 0.75rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 500;
        }
        
        .sidebar-nav {
            padding: 20px 0;
        }
        
        .sidebar-link { 
            font-family: 'Inter', sans-serif;
            color: rgba(255,255,255,0.6); 
            text-decoration: none; 
            padding: 16px 25px; 
            display: flex;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); 
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            margin: 4px 12px;
            border-radius: 12px;
        }
        
        .sidebar-link i {
            width: 24px;
            margin-right: 14px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .sidebar-link:hover { 
            color: #fff; 
            background: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }
        
        .sidebar-link:hover i {
            color: var(--gt-theme);
        }
        
        .sidebar-link.active { 
            color: var(--gt-dark);
            background: var(--gt-theme);
            font-weight: 600;
            box-shadow: 0 4px 20px rgba(201, 243, 29, 0.3);
        }
        
        .sidebar-link.active i {
            color: var(--gt-dark);
        }
        
        .sidebar-divider {
            height: 1px;
            background: rgba(255,255,255,0.1);
            margin: 20px 25px;
        }
        
        .sidebar-link.danger:hover {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
        }
        
        .sidebar-link.danger:hover i {
            color: #ef4444;
        }
        
        /* Main Content */
        .main-content { 
            margin-left: 280px; 
            padding: 30px 40px;
            min-height: 100vh;
        }
        
        /* Top Navbar */
        .top-navbar { 
            background: #fff;
            border-bottom: 1px solid var(--gt-border);
            margin-left: 280px; 
            padding: 20px 40px;
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }
        
        .welcome-text {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            color: var(--gt-text-muted);
        }
        
        .welcome-text strong {
            color: var(--gt-text);
            font-weight: 600;
        }
        
        .user-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .notification-btn {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: var(--gt-bg);
            border: 1px solid var(--gt-border);
            color: var(--gt-text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .notification-btn:hover {
            background: var(--gt-theme);
            border-color: var(--gt-theme);
            color: var(--gt-dark);
        }
        
        .logout-btn { 
            font-family: 'Inter', sans-serif;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ef4444;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 10px 20px;
            border-radius: 10px;
            background: rgba(239, 68, 68, 0.1);
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            background: #ef4444;
            color: #fff;
            transform: translateY(-2px);
        }
        
        /* Cards */
        .card { 
            border: none; 
            border-radius: 16px; 
            background: var(--gt-bg-card);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            border: 1px solid var(--gt-border);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .card-glow {
            position: relative;
            overflow: hidden;
        }
        
        .card-glow::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--gt-theme), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .card-glow:hover::before {
            opacity: 1;
        }
        
        /* Stats Cards */
        .stat-card {
            position: relative;
            overflow: hidden;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .stat-icon.primary {
            background: linear-gradient(135deg, var(--gt-theme), #a8d919);
            color: var(--gt-dark);
        }
        
        .stat-icon.secondary {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff;
        }
        
        .stat-icon.tertiary {
            background: linear-gradient(135deg, #ec4899, #f43f5e);
            color: #fff;
        }
        
        .stat-value {
            font-family: 'Anton', sans-serif;
            font-size: 2.5rem;
            font-weight: 400;
            line-height: 1;
            color: var(--gt-dark);
            letter-spacing: 2px;
        }
        
        .stat-label {
            font-family: 'Inter', sans-serif;
            color: var(--gt-text-muted);
            font-size: 0.9rem;
            font-weight: 500;
            margin-top: 5px;
        }
        
        .stat-link {
            font-family: 'Inter', sans-serif;
            color: var(--gt-dark);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }
        
        .stat-link:hover {
            color: var(--gt-theme);
            gap: 10px;
        }
        
        /* Buttons */
        .btn-theme {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--gt-theme), #a8d919);
            color: var(--gt-dark);
            border: none;
            border-radius: 12px;
            padding: 12px 28px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(201, 243, 29, 0.3);
        }
        
        .btn-theme:hover {
            background: linear-gradient(135deg, #d4f82e, var(--gt-theme));
            color: var(--gt-dark);
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(201, 243, 29, 0.4);
        }
        
        .btn-theme-outline {
            font-family: 'Inter', sans-serif;
            background: transparent;
            color: var(--gt-dark);
            border: 2px solid var(--gt-dark);
            border-radius: 12px;
            padding: 10px 26px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .btn-theme-outline:hover {
            background: var(--gt-dark);
            color: #fff;
        }
        
        .btn-dark-custom {
            font-family: 'Inter', sans-serif;
            background: var(--gt-dark);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 12px 28px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-dark-custom:hover {
            background: #333;
            color: #fff;
            transform: translateY(-2px);
        }
        
        /* Tables */
        .table {
            color: var(--gt-text);
        }
        
        .table thead th {
            font-family: 'Inter', sans-serif;
            background: var(--gt-bg);
            color: var(--gt-dark);
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 16px;
            border-bottom: 2px solid var(--gt-border);
            border-top: none;
        }
        
        .table tbody td {
            font-family: 'Inter', sans-serif;
            padding: 16px;
            border-bottom: 1px solid var(--gt-border);
            vertical-align: middle;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
        }
        
        .table tbody tr:hover {
            background: rgba(201, 243, 29, 0.05);
        }
        
        .table-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid var(--gt-border);
        }
        
        /* Action Buttons */
        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: 1px solid;
        }
        
        .action-btn.edit {
            background: rgba(99, 102, 241, 0.1);
            border-color: rgba(99, 102, 241, 0.3);
            color: #6366f1;
        }
        
        .action-btn.edit:hover {
            background: #6366f1;
            color: #fff;
        }
        
        .action-btn.delete {
            background: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }
        
        .action-btn.delete:hover {
            background: #ef4444;
            color: #fff;
        }
        
        /* Forms */
        .form-control, .form-select {
            font-family: 'Inter', sans-serif;
            background: #fff;
            border: 1px solid var(--gt-border);
            color: var(--gt-text);
            border-radius: 12px;
            padding: 14px 18px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            background: #fff;
            border-color: var(--gt-theme);
            color: var(--gt-text);
            box-shadow: 0 0 0 3px rgba(201, 243, 29, 0.2);
        }
        
        .form-control::placeholder {
            color: var(--gt-text-muted);
        }
        
        .form-label {
            font-family: 'Inter', sans-serif;
            color: var(--gt-text);
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }
        
        .input-group-text {
            background: var(--gt-bg);
            border: 1px solid var(--gt-border);
            color: var(--gt-dark);
            border-radius: 12px 0 0 12px;
        }
        
        /* Alert */
        .alert-success {
            font-family: 'Inter', sans-serif;
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: #16a34a;
            border-radius: 12px;
            padding: 16px 20px;
        }
        
        /* Page Headers */
        .page-header {
            margin-bottom: 30px;
        }
        
        .page-title {
            font-family: 'Anton', sans-serif;
            font-size: 1.8rem;
            font-weight: 400;
            color: var(--gt-dark);
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .page-title span {
            color: var(--gt-dark);
            background: var(--gt-theme);
            padding: 0 8px;
        }
        
        /* Quick Actions */
        .quick-actions {
            background: linear-gradient(135deg, rgba(201, 243, 29, 0.1) 0%, rgba(201, 243, 29, 0.05) 100%);
            border: 1px solid rgba(201, 243, 29, 0.3);
        }
        
        .quick-actions h3 {
            font-family: 'Anton', sans-serif;
            color: var(--gt-dark);
            font-weight: 400;
            font-size: 1.4rem;
            letter-spacing: 2px;
        }
        
        /* Section Title */
        .section-title {
            font-family: 'Anton', sans-serif;
            font-size: 1.3rem;
            font-weight: 400;
            color: var(--gt-dark);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        /* Breadcrumb */
        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--gt-text-muted);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-in {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        
        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--gt-bg);
        }
        
        ::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--gt-theme);
        }
        
        /* List group items */
        .list-group-item {
            background: transparent;
            border-color: var(--gt-border);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 80px;
            }
            .sidebar-brand h4, .sidebar-brand small, .sidebar-link span {
                display: none;
            }
            .sidebar-link {
                justify-content: center;
                padding: 16px;
                margin: 4px 8px;
            }
            .sidebar-link i {
                margin: 0;
            }
            .main-content, .top-navbar {
                margin-left: 80px;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-brand">
        <h4>CREATEAWEB</h4>
        <small>Admin Panel</small>
    </div>
    <nav class="sidebar-nav">
        <a href="dashboard.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
            <i class="fas fa-th-large"></i>
            <span>Dashboard</span>
        </a>
        <a href="services.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
            <i class="fas fa-concierge-bell"></i>
            <span>Services</span>
        </a>
        <a href="blogs.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'blogs.php' ? 'active' : ''; ?>">
            <i class="fas fa-newspaper"></i>
            <span>Blogs</span>
        </a>
        
        <div class="sidebar-divider"></div>
        
        <a href="../index.php" target="_blank" class="sidebar-link">
            <i class="fas fa-external-link-alt"></i>
            <span>View Website</span>
        </a>
        <a href="logout.php" class="sidebar-link danger">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </nav>
</div>

<nav class="top-navbar">
    <div class="welcome-text">
        Welcome back, <strong><?php echo $_SESSION['admin_user']; ?></strong> 👋
    </div>
    <div class="user-actions">
        <a href="../index.php" target="_blank" class="notification-btn" title="View Website">
            <i class="fas fa-globe"></i>
        </a>
        <a href="logout.php" class="logout-btn">
            <i class="fas fa-power-off"></i>
            Logout
        </a>
    </div>
</nav>

<div class="main-content">
