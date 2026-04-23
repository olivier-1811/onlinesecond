<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - StudyHub</title>
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
                <li><a href="contact.php" class="active">Contact</a></li>
                <li><a href="dashboard.php" class="btn-login active">Dashboard</a></li>
            <li><a href="logout.php" class="btn-signup">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Have questions? We'd love to hear from you</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <h2>Send us a Message</h2>
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="your@example.com" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="How can we help?" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" name="category" class="form-input">
                                <option value="">Select a category</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="business">Business Partnership</option>
                                <option value="instructor">Instructor Inquiry</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required placeholder="Tell us more..." class="form-textarea" rows="6"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info-container">
                    <h2>Get in Touch</h2>
                    
                    <div class="contact-info-item">
                        <div class="info-icon">📧</div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>support@studyhub.com</p>
                            <p class="secondary">Response within 24 hours</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="info-icon">💬</div>
                        <div class="info-content">
                            <h3>Live Chat</h3>
                            <p>Available 24/7</p>
                            <p class="secondary">Chat with our support team instantly</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-content">
                            <h3>Phone</h3>
                            <p>+1 (555) 123-4567</p>
                            <p class="secondary">Monday - Friday, 9 AM - 6 PM EST</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Office</h3>
                            <p>123 Learning Avenue</p>
                            <p>San Francisco, CA 94105</p>
                        </div>
                    </div>

                    <div class="social-contact">
                        <h3>Follow Us</h3>
                        <div class="social-buttons">
                            <a href="#" class="social-button">Facebook</a>
                            <a href="#" class="social-button">Twitter</a>
                            <a href="#" class="social-button">LinkedIn</a>
                            <a href="#" class="social-button">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How do I enroll in a course?</h3>
                    <p>Simply browse our course catalog, select a course, and click "Enroll Now". You'll be guided through the payment process (if applicable) and gain instant access to the course materials.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I get a refund?</h3>
                    <p>Yes! We offer a 30-day money-back guarantee if you're not satisfied with a course. Just contact our support team within 30 days of purchase.</p>
                </div>

                <div class="faq-item">
                    <h3>Do I get a certificate?</h3>
                    <p>Upon completing all course materials and passing any assessments, you'll receive a certificate of completion that you can share with employers and add to your resume.</p>
                </div>

                <div class="faq-item">
                    <h3>How long do I have access to a course?</h3>
                    <p>Once you enroll, you have lifetime access to course materials (unless specific limitations apply). You can learn at your own pace with no time restrictions.</p>
                </div>

                <div class="faq-item">
                    <h3>Are there group discounts?</h3>
                    <p>Yes! We offer special pricing for organizations and institutions. Contact our business team at business@studyhub.com for more information.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I become an instructor?</h3>
                    <p>We're always looking for qualified instructors! Visit our instructor portal or email instructor@studyhub.com to apply.</p>
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
