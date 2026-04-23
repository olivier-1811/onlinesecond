 <?php
        include 'conect.php';
    
        $ff="SELECT*FROM user ";
        $fff=mysqli_query($conn,$ff);
        while($user=mysqli_fetch_assoc( $fff )){
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - StudyHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <div class="logo">StudyHub</div>
        <ul class="nav-links">
            <li><a href="indexx.php">Home</a></li>
            <li><a href="coyes.php">Courses</a></li>
            <li><a href="aboutt.php">About</a></li>
            <li><a href="contactt.php">Contact</a></li>
            <li><a href="dashboard.php" class="btn-login active">Dashboard</a></li>
            <li><a href="logout.php" class="btn-signup">Logout</a></li>
        </ul>
    </div>
</nav>
<section class="dashboard" >
        <div class="container" ">
            <!-- Sidebar -->
            <aside class="dashboard-sidebar">
                <div class="user-profile">
                    <div class="user-avatar">👤</div>
                    <h3><?php echo $user['fullname']; ?></h3>
                    <p><?php echo $user['email']; ?></p>
                </div>
           </aside>
            <nav class="sidebar-nav" style="margin-bottom: 50%;">
                <a href="#" class="nav-item active">📊 Overview</a>
                <a href="course.php" class="nav-item">📚 My Courses</a>
                <a href="#" class="nav-item">📈 Progress</a>
                <a href="#" class="nav-item">🎓 Certificates</a>
                <a href="#" class="nav-item">⚙️ Settings</a>
                <a href="#" class="nav-item">❓ Help</a>
            </nav>
        
</section>
        <main class="dashboard-content">

            <section class="dashboard-section active">
                <h2>Welcome back, <?php echo $user['fullname']; ?>!</h2>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">📚</div>
                        <div class="stat-info">
                            <h4>Courses Enrolled</h4>
                            <p class="stat-number">5</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">⏱️</div>
                        <div class="stat-info">
                            <h4>Hours Learned</h4>
                            <p class="stat-number">42</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">🎓</div>
                        <div class="stat-info">
                            <h4>Certificates Earned</h4>
                            <p class="stat-number">2</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">🔥</div>
                        <div class="stat-info">
                            <h4>Current Streak</h4>
                            <p class="stat-number">7 days</p>
                        </div>
                    </div>
                </div>

                <h3>In Progress Courses</h3>

                <div class="courses-list">
                    <div class="course-item">
                        <h4>Web Development Bootcamp</h4>
                        <p>75% Completed</p>
                    </div>

                    <div class="course-item">
                        <h4>Python for Everyone</h4>
                        <p>45% Completed</p>
                    </div>

                    <div class="course-item">
                        <h4>UI/UX Design Fundamentals</h4>
                        <p>60% Completed</p>
                    </div>
                </div>
            </section>

        </main>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; 2026 StudyHub by KADOYIMANA OLIVIER devs</p>
        <p>E-mail:olivierkadoyimana3@gmail.com</p>
        <p>IG:youn_gv1</p>
        <p>Number:0795457548</p>
    </div>
</footer>

</body>
</html>
<?php } ?>