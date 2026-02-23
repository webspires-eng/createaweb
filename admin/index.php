<?php
session_start();
require_once '../include/db.php';


// $_SESSION['admin_id'] = 1;
// $_SESSION['admin_user'] = "admin";
// $_SESSION['admin_logged_in'] = true;
if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_user'] = $admin['username'];
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Createaweb</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --gt-theme: #f5a623;
            --gt-theme-rgb: 245, 166, 35;
            --gt-dark: #1C1C1C;
            --gt-darker: #121212;
            --gt-dark-card: #1a1a1a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--gt-darker);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
            position: relative;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 20% 80%, rgba(245, 166, 35, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 40% 40%, rgba(245, 166, 35, 0.03) 0%, transparent 30%);
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -30px) rotate(3deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(-3deg);
            }
        }

        /* Grid Pattern */
        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(245, 166, 35, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 166, 35, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            pointer-events: none;
        }

        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 440px;
            padding: 20px;
        }

        .login-card {
            background: rgba(26, 26, 26, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 50px 40px;
            border-radius: 24px;
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.5),
                0 0 0 1px rgba(255, 255, 255, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(245, 166, 35, 0.1);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--gt-theme), rgba(245, 166, 35, 0.3), var(--gt-theme));
            background-size: 200% 100%;
            animation: shimmer 3s ease infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .brand-logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .brand-logo h2 {
            font-family: 'Anton', sans-serif;
            font-size: 2rem;
            font-weight: 400;
            letter-spacing: 6px;
            background: linear-gradient(135deg, var(--gt-theme) 0%, #fff 50%, var(--gt-theme) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 3s ease infinite;
            text-transform: uppercase;
        }

        @keyframes gradient {
            0% {
                background-position: 0% center;
            }

            50% {
                background-position: 100% center;
            }

            100% {
                background-position: 0% center;
            }
        }

        .brand-logo p {
            color: #666;
            font-size: 0.85rem;
            margin-top: 8px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            display: block;
            color: #999;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #555;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #fff;
            border-radius: 14px;
            padding: 16px 18px 16px 50px;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            width: 100%;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.05);
            border-color: var(--gt-theme);
            color: #fff;
            box-shadow: 0 0 0 4px rgba(245, 166, 35, 0.1);
            outline: none;
        }

        .form-control:focus+i,
        .form-control:not(:placeholder-shown)+i {
            color: var(--gt-theme);
        }

        .form-control::placeholder {
            color: #555;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--gt-theme), #a8d919);
            color: var(--gt-darker);
            border: none;
            font-weight: 700;
            width: 100%;
            border-radius: 14px;
            padding: 16px;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(245, 166, 35, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #d4f82e, var(--gt-theme));
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(245, 166, 35, 0.4);
        }

        .btn-login:active {
            transform: translateY(-1px);
        }

        .error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 24px;
            text-align: center;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .error i {
            font-size: 1.1rem;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            color: var(--gt-theme);
        }

        .back-link i {
            margin-right: 6px;
        }

        /* Animation on load */
        .login-card {
            animation: cardAppear 0.6s ease forwards;
        }

        @keyframes cardAppear {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .form-group {
            animation: fadeInUp 0.5s ease forwards;
            opacity: 0;
        }

        .form-group:nth-child(1) {
            animation-delay: 0.2s;
        }

        .form-group:nth-child(2) {
            animation-delay: 0.3s;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.4s;
        }

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
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="brand-logo">
                <h2>CREATEAWEB</h2>
                <p>Admin Portal</p>
            </div>

            <?php if ($error): ?>
                <div class="error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-wrapper">
                        <input type="text" name="username" class="form-control" placeholder="Enter your username"
                            required autocomplete="off">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" class="form-control" placeholder="Enter your password"
                            required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </div>
            </form>

            <a href="../index.php" class="back-link">
                <i class="fas fa-arrow-left"></i>Back to Website
            </a>
        </div>
    </div>
</body>

</html>