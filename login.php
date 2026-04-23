
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StudyHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="auth-page">
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">StudyHub</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="auth-container">
        <div class="auth-box">
            <h1>Welcome Back</h1>
            <p class="auth-subtitle">Sign in to your StudyHub account</p>

           <form action="log.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="your@example.com" class="form-input">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="php" id="password" name="password" required placeholder="••••••••" class="form-input">
                </div>

                <div class="form-group checkbox">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <input type="submit" value="login">
            </form>

            <div class="auth-divider">Or continue with</div>

            <div class="social-login">
                <button class="btn btn-social" title="Login with Google">
                    <span>🔍</span> Google
                </button>
                <button class="btn btn-social" title="Login with GitHub">
                    <span>⚙️</span> GitHub
                </button>
            </div>

            <p class="auth-link">
                <a href="#" class="link">Forgot your password?</a>
            </p>

            <p class="auth-switch">
                Don't have an account? <a href="signup.php" class="link">Sign up here</a>
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer footer-auth">
        <div class="container">
            <p>&copy; 2026 StudyHub. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
