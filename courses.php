<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - StudyHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">StudyHub</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php" class="active">Courses</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php" class="btn-login">Login</a></li>
                <li><a href="signup.php" class="btn-signup">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Explore Our Courses</h1>
            <p>Find the right course for your learning goals</p>
        </div>
    </section>

    <!-- Filters Section -->
    <section class="filters-section">
        <div class="container">
            <div class="filters">
                <input type="text" id="searchInput" placeholder="Search courses..." class="search-box">
                
                <select id="categoryFilter" class="filter-select">
                    <option value="">All Categories</option>
                    <option value="web">Web Development</option>
                    <option value="programming">Programming</option>
                    <option value="data">Data & Analytics</option>
                    <option value="design">Design</option>
                    <option value="business">Business</option>
                </select>

                <select id="levelFilter" class="filter-select">
                    <option value="">All Levels</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>

                <select id="sortFilter" class="filter-select">
                    <option value="popular">Most Popular</option>
                    <option value="rating">Highest Rated</option>
                    <option value="newest">Newest</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Courses Grid -->
    <section class="courses-section">
        <div class="container">
            <div class="courses-grid-large">
                <div class="course-card-large">
                    <div class="course-category">Web Development</div>
                    <div class="course-image-large">📖</div>
                    <h3>Web Development Bootcamp</h3>
                    <p>Learn to build responsive websites with HTML, CSS, JavaScript, and modern frameworks.</p>
                    <div class="course-details">
                        <span>⭐ 4.8 (2,450)</span>
                        <span>👥 15.2k</span>
                        <span>⏱️ 40 hours</span>
                    </div>
                    <div class="course-price">$49.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Programming</div>
                    <div class="course-image-large">🐍</div>
                    <h3>Python for Everyone</h3>
                    <p>Master Python programming from basics to advanced concepts including OOP and data structures.</p>
                    <div class="course-details">
                        <span>⭐ 4.9 (3,120)</span>
                        <span>👥 21.5k</span>
                        <span>⏱️ 45 hours</span>
                    </div>
                    <div class="course-price">$44.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Data & Analytics</div>
                    <div class="course-image-large">📊</div>
                    <h3>Data Science Masterclass</h3>
                    <p>Learn data analysis, visualization, and machine learning with real-world projects.</p>
                    <div class="course-details">
                        <span>⭐ 4.7 (1,890)</span>
                        <span>👥 10.8k</span>
                        <span>⏱️ 50 hours</span>
                    </div>
                    <div class="course-price">$59.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Design</div>
                    <div class="course-image-large">🎨</div>
                    <h3>UI/UX Design Fundamentals</h3>
                    <p>Create beautiful digital experiences using design principles, tools, and best practices.</p>
                    <div class="course-details">
                        <span>⭐ 4.6 (1,234)</span>
                        <span>👥 8.5k</span>
                        <span>⏱️ 35 hours</span>
                    </div>
                    <div class="course-price">$39.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Web Development</div>
                    <div class="course-image-large">⚛️</div>
                    <h3>React.js Complete Guide</h3>
                    <p>Build modern interactive web applications with React, Redux, and modern JavaScript.</p>
                    <div class="course-details">
                        <span>⭐ 4.8 (2,876)</span>
                        <span>👥 18.9k</span>
                        <span>⏱️ 48 hours</span>
                    </div>
                    <div class="course-price">$54.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Programming</div>
                    <div class="course-image-large">☕</div>
                    <h3>Java Programming Essentials</h3>
                    <p>Learn Java from fundamentals to advanced OOP concepts and design patterns.</p>
                    <div class="course-details">
                        <span>⭐ 4.7 (2,345)</span>
                        <span>👥 12.3k</span>
                        <span>⏱️ 42 hours</span>
                    </div>
                    <div class="course-price">$49.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Data & Analytics</div>
                    <div class="course-image-large">🤖</div>
                    <h3>Machine Learning Bootcamp</h3>
                    <p>Build intelligent systems with TensorFlow, PyTorch, and pandas for real-world applications.</p>
                    <div class="course-details">
                        <span>⭐ 4.9 (2,567)</span>
                        <span>👥 14.3k</span>
                        <span>⏱️ 55 hours</span>
                    </div>
                    <div class="course-price">$69.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Programming</div>
                    <div class="course-image-large">🦀</div>
                    <h3>Rust Programming Language</h3>
                    <p>Master systems programming with Rust for safe and efficient code.</p>
                    <div class="course-details">
                        <span>⭐ 4.8 (876)</span>
                        <span>👥 5.2k</span>
                        <span>⏱️ 38 hours</span>
                    </div>
                    <div class="course-price">$44.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Business</div>
                    <div class="course-image-large">💼</div>
                    <h3>Digital Marketing Essentials</h3>
                    <p>Learn SEO, social media, email marketing, and analytics for online success.</p>
                    <div class="course-details">
                        <span>⭐ 4.5 (1,123)</span>
                        <span>👥 7.8k</span>
                        <span>⏱️ 30 hours</span>
                    </div>
                    <div class="course-price">$39.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Design</div>
                    <div class="course-image-large">🖌️</div>
                    <h3>Graphic Design Masterclass</h3>
                    <p>Create stunning graphics using Photoshop, Illustrator, and design principles.</p>
                    <div class="course-details">
                        <span>⭐ 4.6 (1,892)</span>
                        <span>👥 9.4k</span>
                        <span>⏱️ 36 hours</span>
                    </div>
                    <div class="course-price">$34.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Programming</div>
                    <div class="course-image-large">📱</div>
                    <h3>Mobile App Development</h3>
                    <p>Build iOS and Android apps using React Native, Flutter, and native technologies.</p>
                    <div class="course-details">
                        <span>⭐ 4.7 (2,456)</span>
                        <span>👥 11.2k</span>
                        <span>⏱️ 48 hours</span>
                    </div>
                    <div class="course-price">$54.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>

                <div class="course-card-large">
                    <div class="course-category">Web Development</div>
                    <div class="course-image-large">🗄️</div>
                    <h3>Database Design & SQL</h3>
                    <p>Master SQL, NoSQL, and database design for scalable applications.</p>
                    <div class="course-details">
                        <span>⭐ 4.8 (1,765)</span>
                        <span>👥 9.7k</span>
                        <span>⏱️ 35 hours</span>
                    </div>
                    <div class="course-price">$44.99</div>
                    <a href="course-detail.php" class="btn btn-secondary">Enroll Now</a>
                </div>
            </div>
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
