<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - StudyHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="auth-page">
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">StudyHub</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="a.php">Courses</a></li>
                <li><a href="a.php">About</a></li>
                <li><a href="a.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sign Up Section -->
    <section class="auth-container">
        <div class="auth-box">
            <h1>Create Account</h1>
            <p class="auth-subtitle">Join thousands of learners on StudyHub</p>

            <form class="auth-form" id="signupForm" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required placeholder="John Doe" class="form-input">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="your@example.com" class="form-input">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="At least 8 characters" class="form-input">
                    <small>Must contain uppercase, lowercase, and numbers</small>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="••••••••" class="form-input">
                </div>

                <div class="form-group checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        I agree to the <a href="#" class="link">Terms of Service</a> and <a href="#" class="link">Privacy Policy</a>
                    </label>
                </div>

                <input type="submit" value="Create Account">
            </form>

            <div class="auth-divider">Or sign up with</div>

            <div class="social-login">
                <button class="btn btn-social" title="Sign up with Google">
                    <span>🔍</span> Google
                </button>
                <button class="btn btn-social" title="Sign up with GitHub">
                    <span>⚙️</span> GitHub
                </button>
            </div>

            <p class="auth-switch">
                Already have an account? <a href="login.php" class="link">Login here</a>
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
