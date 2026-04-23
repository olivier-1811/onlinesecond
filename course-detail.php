<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details - StudyHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">StudyHub</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php" class="btn-login">Login</a></li>
                <li><a href="signup.php" class="btn-signup">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <!-- Course Header -->
    <section class="course-header">
        <div class="container">
            <div class="course-header-content">
                <div class="course-header-left">
                    <div class="course-category-badge">Web Development</div>
                    <h1>Web Development Bootcamp</h1>
                    <p class="course-tagline">Learn to build responsive websites with HTML, CSS, JavaScript, and modern frameworks</p>
                    
                    <div class="course-meta-info">
                        <span class="rating">⭐ 4.8 (2,450 reviews)</span>
                        <span class="students">👥 15.2k students enrolled</span>
                        <span class="level">📚 Beginner to Intermediate</span>
                        <span class="duration">⏱️ 40 hours</span>
                    </div>

                    <div class="course-instructor">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%2385C1E7'/%3E%3Ctext x='50' y='65' font-size='50' text-anchor='middle' fill='white'%3E👨%3C/text%3E%3C/svg%3E" alt="Instructor" class="instructor-avatar">
                        <div class="instructor-info">
                            <p class="instructor-label">Instructor</p>
                            <h3>James Wilson</h3>
                            <p class="instructor-title">Senior Web Developer</p>
                        </div>
                    </div>
                </div>

                <div class="course-header-right">
                    <div class="course-preview">
                        <div class="preview-box">📹</div>
                        <p>Preview this course</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Content -->
    <section class="course-content">
        <div class="container">
            <div class="course-main">
                <!-- Course Description -->
                <div class="course-section">
                    <h2>About This Course</h2>
                    <p>This comprehensive web development bootcamp will teach you everything you need to know to build modern, responsive websites and web applications. Whether you're a complete beginner or have some programming experience, this course will take you from basics to advanced concepts.</p>
                    
                    <h3>What You'll Learn</h3>
                    <ul class="learning-points">
                        <li>✅ HTML5 structure and semantic markup</li>
                        <li>✅ CSS3 styling, flexbox, and CSS Grid</li>
                        <li>✅ JavaScript fundamentals and ES6+</li>
                        <li>✅ DOM manipulation and event handling</li>
                        <li>✅ Responsive web design principles</li>
                        <li>✅ Introduction to popular frameworks (React basics)</li>
                        <li>✅ Version control with Git and GitHub</li>
                        <li>✅ Web performance optimization</li>
                    </ul>

                    <h3>Course Requirements</h3>
                    <ul class="requirements-list">
                        <li>A computer with internet connection</li>
                        <li>Text editor (VS Code recommended)</li>
                        <li>No prior programming experience required</li>
                    </ul>
                </div>

                <!-- Curriculum -->
                <div class="course-section">
                    <h2>Course Curriculum</h2>
                    <div class="curriculum">
                        <div class="curriculum-section">
                            <button class="curriculum-toggle">
                                <span class="toggle-icon">▼</span>
                                <span class="section-title">Section 1: HTML Fundamentals</span>
                                <span class="section-stats">6 lessons • 3 hours</span>
                            </button>
                            <div class="curriculum-content">
                                <div class="lesson">
                                    <span class="lesson-icon">📹</span>
                                    <span class="lesson-title">Introduction to HTML</span>
                                    <span class="lesson-duration">15 min</span>
                                </div>
                                <div class="lesson">
                                    <span class="lesson-icon">📹</span>
                                    <span class="lesson-title">HTML Elements and Tags</span>
                                    <span class="lesson-duration">25 min</span>
                                </div>
                                <div class="lesson">
                                    <span class="lesson-icon">📹</span>
                                    <span class="lesson-title">Forms and Inputs</span>
                                    <span class="lesson-duration">30 min</span>
                                </div>
                                <div class="lesson">
                                    <span class="lesson-icon">📹</span>
                                    <span class="lesson-title">Semantic HTML5</span>
                                    <span class="lesson-duration">20 min</span>
                                </div>
                                <div class="lesson">
                                    <span class="lesson-icon">✏️</span>
                                    <span class="lesson-title">Project: Create Your First Website</span>
                                    <span class="lesson-duration">45 min</span>
                                </div>
                                <div class="lesson">
                                    <span class="lesson-icon">❓</span>
                                    <span class="lesson-title">Quiz: HTML Basics</span>
                                    <span class="lesson-duration">15 min</span>
                                </div>
                            </div>
                        </div>

                        <div class="curriculum-section">
                            <button class="curriculum-toggle">
                                <span class="toggle-icon">▶</span>
                                <span class="section-title">Section 2: CSS Mastery</span>
                                <span class="section-stats">8 lessons • 5 hours</span>
                            </button>
                            <div class="curriculum-content" style="display: none;">
                                <!-- Lessons here -->
                            </div>
                        </div>

                        <div class="curriculum-section">
                            <button class="curriculum-toggle">
                                <span class="toggle-icon">▶</span>
                                <span class="section-title">Section 3: JavaScript Essentials</span>
                                <span class="section-stats">10 lessons • 8 hours</span>
                            </button>
                            <div class="curriculum-content" style="display: none;">
                                <!-- Lessons here -->
                            </div>
                        </div>

                        <div class="curriculum-section">
                            <button class="curriculum-toggle">
                                <span class="toggle-icon">▶</span>
                                <span class="section-title">Section 4: Responsive Design</span>
                                <span class="section-stats">6 lessons • 4 hours</span>
                            </button>
                            <div class="curriculum-content" style="display: none;">
                                <!-- Lessons here -->
                            </div>
                        </div>

                        <div class="curriculum-section">
                            <button class="curriculum-toggle">
                                <span class="toggle-icon">▶</span>
                                <span class="section-title">Section 5: Advanced Topics & Projects</span>
                                <span class="section-stats">8 lessons • 15 hours</span>
                            </button>
                            <div class="curriculum-content" style="display: none;">
                                <!-- Lessons here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews -->
                <div class="course-section">
                    <h2>Student Reviews</h2>
                    <div class="reviews">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">👨</div>
                                    <div>
                                        <h4>Michael Chen</h4>
                                        <p class="review-date">2 weeks ago</p>
                                    </div>
                                </div>
                                <div class="review-rating">⭐⭐⭐⭐⭐</div>
                            </div>
                            <p class="review-text">"Excellent course! The instructor explains concepts clearly and the projects are practical. I built my first website after completing this course."</p>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">👩</div>
                                    <div>
                                        <h4>Sarah Johnson</h4>
                                        <p class="review-date">1 month ago</p>
                                    </div>
                                </div>
                                <div class="review-rating">⭐⭐⭐⭐⭐</div>
                            </div>
                            <p class="review-text">"Great course for beginners! The pace is perfect and the instruction is clear. I feel confident starting my web development journey."</p>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">👨</div>
                                    <div>
                                        <h4>David Rodriguez</h4>
                                        <p class="review-date">1 month ago</p>
                                    </div>
                                </div>
                                <div class="review-rating">⭐⭐⭐⭐</div>
                            </div>
                            <p class="review-text">"Very comprehensive course. Would love to see more advanced React content, but overall great value."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="course-sidebar">
                <div class="course-card-sidebar">
                    <div class="price-section">
                        <h2>$49.99</h2>
                        <p class="original-price"><strike>$99.99</strike></p>
                        <p class="discount">50% off - Limited time</p>
                    </div>

                    <button class="btn btn-primary btn-large">Enroll Now</button>
                    <button class="btn btn-outline btn-large">Add to Wishlist ❤️</button>

                    <div class="course-includes">
                        <h4>This course includes:</h4>
                        <ul>
                            <li>✅ 40 hours of video content</li>
                            <li>✅ Lifetime access</li>
                            <li>✅ 10+ practical projects</li>
                            <li>✅ Downloadable resources</li>
                            <li>✅ Certificate of completion</li>
                            <li>✅ Q&A support forum</li>
                            <li>✅ Money-back guarantee (30 days)</li>
                        </ul>
                    </div>

                    <div class="course-stats-sidebar">
                        <div class="stat">
                            <span class="stat-label">Level</span>
                            <span class="stat-value">Beginner</span>
                        </div>
                        <div class="stat">
                            <span class="stat-label">Duration</span>
                            <span class="stat-value">40 hours</span>
                        </div>
                        <div class="stat">
                            <span class="stat-label">Students</span>
                            <span class="stat-value">15.2k</span>
                        </div>
                        <div class="stat">
                            <span class="stat-label">Rating</span>
                            <span class="stat-value">4.8/5</span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>StudyHub</h4>
                    <p>Empowering learners worldwide with quality education</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="courses.html">Browse Courses</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">LinkedIn</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 StudyHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
