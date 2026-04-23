<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Start Guide - StudyHub</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, #5B21B6, #EC4899);
            color: white;
            padding: 40px 20px;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 10px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        h2 {
            color: #5B21B6;
            margin-top: 30px;
            margin-bottom: 20px;
            border-bottom: 2px solid #5B21B6;
            padding-bottom: 10px;
        }

        h3 {
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            color: #d63384;
        }

        pre {
            background-color: #1f1f1f;
            color: #d4d4d4;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            margin: 15px 0;
            font-size: 0.9rem;
        }

        pre code {
            color: #d4d4d4;
            padding: 0;
            background: none;
        }

        ol, ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        li {
            margin-bottom: 10px;
            line-height: 1.8;
        }

        .step {
            background-color: #f0f7ff;
            border-left: 4px solid #3B82F6;
            padding: 15px;
            margin: 15px 0;
            border-radius: 3px;
        }

        .tip {
            background-color: #f0fdf4;
            border-left: 4px solid #10B981;
            padding: 15px;
            margin: 15px 0;
            border-radius: 3px;
        }

        .warning {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 15px;
            margin: 15px 0;
            border-radius: 3px;
        }

        .file-structure {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #EC4899;
            margin: 15px 0;
            border-radius: 3px;
            font-family: monospace;
            white-space: pre;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f9f9f9;
            font-weight: 600;
        }

        .btn {
            display: inline-block;
            background-color: #5B21B6;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;
        }

        .btn:hover {
            background-color: #7C3AED;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
            margin-top: 40px;
        }

        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .feature-item {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #5B21B6;
        }

        .feature-item h4 {
            color: #5B21B6;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>📚 StudyHub Quick Start Guide</h1>
            <p>Get up and running with StudyHub in 5 minutes</p>
        </header>

        <section>
            <h2>✅ What You'll Need</h2>
            <ul>
                <li>A modern web browser (Chrome, Firefox, Safari, Edge)</li>
                <li>A text editor (VS Code, Sublime Text, or any editor)</li>
                <li>Basic understanding of HTML, CSS, JavaScript (optional)</li>
            </ul>
        </section>

        <section>
            <h2>🚀 5-Minute Setup</h2>

            <div class="step">
                <h3>Step 1: Download Files</h3>
                <p>Download all project files to a folder on your computer:</p>
                <ul>
                    <li>index.html</li>
                    <li>courses.html, course-detail.html</li>
                    <li>dashboard.html</li>
                    <li>login.html, signup.html</li>
                    <li>about.html, contact.html</li>
                    <li>styles.css</li>
                    <li>script.js</li>
                </ul>
            </div>

            <div class="step">
                <h3>Step 2: Open in Browser</h3>
                <p>Simply double-click on <code>index.html</code> to open it in your default browser.</p>
                <p>Or right-click → "Open with" → select your browser</p>
            </div>

            <div class="step">
                <h3>Step 3: Navigate the Site</h3>
                <ul>
                    <li>Explore the home page</li>
                    <li>Browse courses</li>
                    <li>Try the login/signup features</li>
                    <li>Visit the dashboard</li>
                </ul>
            </div>

            <div class="step">
                <h3>Step 4: Test Features</h3>
                <ul>
                    <li>Try searching and filtering courses</li>
                    <li>Fill out contact form</li>
                    <li>Navigate dashboard sections</li>
                    <li>Expand curriculum toggles</li>
                </ul>
            </div>

            <div class="step">
                <h3>Step 5: Customize (Optional)</h3>
                <p>Edit file contents in your text editor to personalize:</p>
                <ul>
                    <li>Change colors in <code>styles.css</code></li>
                    <li>Update course content in HTML files</li>
                    <li>Modify functionality in <code>script.js</code></li>
                </ul>
            </div>
        </section>

        <section>
            <h2>📁 File Organization</h2>
            
            <p>Keep all files in the same folder:</p>
            
            <div class="file-structure">php/
├── index.html
├── courses.html
├── course-detail.html
├── dashboard.html
├── login.html
├── signup.html
├── about.html
├── contact.html
├── styles.css
├── script.js
└── README.md</div>

            <div class="warning">
                <strong>Important:</strong> All HTML files must be in the same folder as <code>styles.css</code> and <code>script.js</code> for the website to work properly.
            </div>
        </section>

        <section>
            <h2>🌐 Local Server Setup (Optional)</h2>

            <p>For advanced features and to avoid browser security issues, you can run a local server:</p>

            <h3>Using Python 3:</h3>
            <pre><code>python -m http.server 8000</code></pre>

            <h3>Using Python 2:</h3>
            <pre><code>python -m SimpleHTTPServer 8000</code></pre>

            <h3>Using Node.js:</h3>
            <pre><code>npm install -g http-server
http-server</code></pre>

            <h3>Using PHP:</h3>
            <pre><code>php -S localhost:8000</code></pre>

            <p>Then visit: <code>http://localhost:8000</code></p>
        </section>

        <section>
            <h2>🏃 Quick Navigation</h2>

            <table>
                <tr>
                    <th>Page</th>
                    <th>File</th>
                    <th>Purpose</th>
                </tr>
                <tr>
                    <td>Home</td>
                    <td>index.html</td>
                    <td>Landing page with features and popular courses</td>
                </tr>
                <tr>
                    <td>Courses</td>
                    <td>courses.html</td>
                    <td>Browse, search, and filter all courses</td>
                </tr>
                <tr>
                    <td>Course Details</td>
                    <td>course-detail.html</td>
                    <td>Individual course information and curriculum</td>
                </tr>
                <tr>
                    <td>Dashboard</td>
                    <td>dashboard.html</td>
                    <td>Student dashboard with progress and settings</td>
                </tr>
                <tr>
                    <td>Login</td>
                    <td>login.html</td>
                    <td>User authentication</td>
                </tr>
                <tr>
                    <td>Sign Up</td>
                    <td>signup.html</td>
                    <td>New user registration</td>
                </tr>
                <tr>
                    <td>About</td>
                    <td>about.html</td>
                    <td>Company information and team</td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>contact.html</td>
                    <td>Contact form and support information</td>
                </tr>
            </table>
        </section>

        <section>
            <h2>💡 Key Features to Try</h2>

            <div class="feature-list">
                <div class="feature-item">
                    <h4>🔍 Search & Filter</h4>
                    <p>Go to Courses page and try searching for keywords or filtering by category.</p>
                </div>
                <div class="feature-item">
                    <h4>📊 Dashboard</h4>
                    <p>Click Dashboard to see student progress tracking and course information.</p>
                </div>
                <div class="feature-item">
                    <h4>📚 Curriculum</h4>
                    <p>View course details and click to expand curriculum sections.</p>
                </div>
                <div class="feature-item">
                    <h4>📝 Contact Form</h4>
                    <p>Test the contact form on the Contact page - it shows success messages.</p>
                </div>
                <div class="feature-item">
                    <h4>🔐 Authentication</h4>
                    <p>Try signing up and logging in with sample credentials.</p>
                </div>
                <div class="feature-item">
                    <h4>📱 Responsive</h4>
                    <p>Resize your browser window to see responsive design in action.</p>
                </div>
            </div>
        </section>

        <section>
            <h2>🎨 Customization Quick Tips</h2>

            <h3>Change Brand Colors</h3>
            <p>Open <code>styles.css</code> and find the color variables at the top:</p>
            <pre><code>:root {
    --primary-color: #5B21B6;      /* Purple - change this */
    --secondary-color: #EC4899;    /* Pink - change this */
    --accent-color: #F59E0B;       /* Orange - change this */
}</code></pre>

            <h3>Update Logo Text</h3>
            <p>In each HTML file, find and change:</p>
            <pre><code>&lt;div class="logo"&gt;StudyHub&lt;/div&gt;</code></pre>

            <h3>Change Course Information</h3>
            <p>Edit course cards in <code>index.html</code> and <code>courses.html</code>:</p>
            <pre><code>&lt;div class="course-card"&gt;
    &lt;h3&gt;Your Course Title&lt;/h3&gt;
    &lt;p&gt;Your description&lt;/p&gt;
&lt;/div&gt;</code></pre>

            <h3>Add Your Company Info</h3>
            <p>Update <code>about.html</code> and <code>contact.html</code> with your information</p>
        </section>

        <section>
            <h2>🔗 Page Linking</h2>

            <p>All navigation is already set up. The menu links are:</p>
            <pre><code>&lt;a href="index.html"&gt;Home&lt;/a&gt;
&lt;a href="courses.html"&gt;Courses&lt;/a&gt;
&lt;a href="about.html"&gt;About&lt;/a&gt;
&lt;a href="contact.html"&gt;Contact&lt;/a&gt;
&lt;a href="login.html"&gt;Login&lt;/a&gt;
&lt;a href="signup.html"&gt;Sign Up&lt;/a&gt;
&lt;a href="dashboard.html"&gt;Dashboard&lt;/a&gt;</code></pre>

            <p>All links are relative paths, so they work automatically as long as files are in the same folder.</p>
        </section>

        <section>
            <h2>✨ Advanced Features</h2>

            <h3>Local Storage</h3>
            <p>The website uses browser LocalStorage to save:</p>
            <ul>
                <li>User session data</li>
                <li>Enrolled courses</li>
                <li>Form data</li>
            </ul>
            <p>Data persists even after closing the browser!</p>

            <h3>Form Validation</h3>
            <p>Email and password inputs are validated automatically.</p>

            <h3>Notifications</h3>
            <p>Toast notifications appear when you submit forms or perform actions.</p>

            <h3>Search Functionality</h3>
            <p>Course search filters results in real-time as you type.</p>
        </section>

        <section>
            <h2>📚 Learning Path</h2>

            <ol>
                <li><strong>Understand the Structure:</strong> Read README.md to understand files and folder organization</li>
                <li><strong>Explore the Design:</strong> Open each page in browser to see the layout</li>
                <li><strong>Study the Code:</strong> Open HTML/CSS/JS files in text editor to understand code</li>
                <li><strong>Make Changes:</strong> Edit colors, text, and content to make it your own</li>
                <li><strong>Add Features:</strong> Extend functionality by adding new JavaScript</li>
                <li><strong>Deploy:</strong> Host on web server when ready to go live</li>
            </ol>
        </section>

        <section>
            <h2>⚡ Performance Tips</h2>

            <ul>
                <li>Minimize CSS/JavaScript by removing unused code</li>
                <li>Optimize images before using them</li>
                <li>Use CSS Grid and Flexbox for layouts (already done!)</li>
                <li>Lazy load images if adding more content</li>
                <li>Minify CSS and JS before deploying to production</li>
            </ul>
        </section>

        <section>
            <h2>🐛 Troubleshooting</h2>

            <h3>Styles Not Loading?</h3>
            <div class="tip">
                <strong>Solution:</strong> Make sure <code>styles.css</code> is in the same folder as the HTML file. Check file paths in HTML head.
            </div>

            <h3>JavaScript Not Working?</h3>
            <div class="tip">
                <strong>Solution:</strong> Check browser console (F12) for errors. Ensure <code>script.js</code> is in the same folder.
            </div>

            <h3>Links Not Working?</h3>
            <div class="tip">
                <strong>Solution:</strong> Check that all HTML files are in the same folder. Use relative paths like <code>href="about.html"</code>
            </div>

            <h3>Forms Not Submitting?</h3>
            <div class="tip">
                <strong>Solution:</strong> Check browser console for JavaScript errors. Ensure form IDs match the script.js selectors.
            </div>

            <h3>Responsive Not Working?</h3>
            <div class="tip">
                <strong>Solution:</strong> Ensure viewport meta tag is in HTML head: <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code>
            </div>
        </section>

        <section>
            <h2>🚀 Next Steps</h2>

            <h3>For Learning:</h3>
            <ul>
                <li>Study the HTML structure and CSS organization</li>
                <li>Understand how JavaScript handles interactivity</li>
                <li>Experiment with CSS properties and JavaScript functions</li>
                <li>Try modifying components and seeing the results</li>
            </ul>

            <h3>For Customization:</h3>
            <ul>
                <li>Change colors and fonts to match your brand</li>
                <li>Update course content with real courses</li>
                <li>Add your company information</li>
                <li>Customize forms and pages</li>
            </ul>

            <h3>For Development:</h3>
            <ul>
                <li>Set up a backend API (see api-documentation.html)</li>
                <li>Integrate database for real data storage</li>
                <li>Add payment processing for course enrollment</li>
                <li>Implement email notifications</li>
                <li>Deploy to a web server</li>
            </ul>
        </section>

        <section>
            <h2>📖 Additional Resources</h2>

            <ul>
                <li><a href="README.md">📄 Full Documentation (README.md)</a></li>
                <li><a href="api-documentation.html">🔌 API Documentation</a></li>
                <li><a href="project-config.json">⚙️ Project Configuration</a></li>
                <li><strong>Browser DevTools:</strong> Press F12 to inspect elements and debug</li>
                <li><strong>MDN Web Docs:</strong> https://developer.mozilla.org/ for HTML/CSS/JS reference</li>
            </ul>
        </section>

        <section>
            <h2>🎉 You're All Set!</h2>

            <p>Your StudyHub platform is ready to use! Here's what you have:</p>

            <ul>
                <li>✅ 8 fully functional pages</li>
                <li>✅ Responsive design for all devices</li>
                <li>✅ Interactive features with JavaScript</li>
                <li>✅ Form validation and notifications</li>
                <li>✅ Progress tracking system</li>
                <li>✅ Smooth animations and transitions</li>
                <li>✅ Professional styling with CSS</li>
                <li>✅ Local storage for data persistence</li>
            </ul>

            <p><a href="index.html" class="btn">Start Exploring StudyHub →</a></p>
        </section>

        <footer>
            <p>StudyHub Quick Start Guide v1.0 | Last Updated: February 2026</p>
            <p>Happy Learning! 🚀</p>
        </footer>
    </div>
</body>
</html>
