<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation - StudyHub</title>
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
            max-width: 1000px;
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
            margin-top: 40px;
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

        .endpoint {
            background-color: #f0f0f0;
            padding: 10px;
            border-left: 4px solid #5B21B6;
            margin: 15px 0;
            border-radius: 3px;
            font-weight: 500;
        }

        .method {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-right: 10px;
            color: white;
        }

        .get {
            background-color: #10B981;
        }

        .post {
            background-color: #3B82F6;
        }

        .put {
            background-color: #F59E0B;
        }

        .delete {
            background-color: #EF4444;
        }

        .example {
            background-color: #f9f9f9;
            border-left: 4px solid #EC4899;
            padding: 15px;
            margin: 15px 0;
            border-radius: 3px;
        }

        ul, ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        li {
            margin-bottom: 8px;
        }

        .note {
            background-color: #cffafe;
            border-left: 4px solid #06b6d4;
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

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>StudyHub API Documentation</h1>
            <p>Backend Integration Guide for StudyHub Frontend</p>
        </header>

        <section>
            <h2>🚀 Getting Started</h2>
            <p>This document outlines the API endpoints and data structures needed to fully integrate a backend with the StudyHub platform.</p>
            
            <div class="note">
                <strong>Note:</strong> The current frontend is fully functional with client-side data using LocalStorage. To integrate with a backend, follow the endpoints and data structures below.
            </div>
        </section>

        <section>
            <h2>📋 API Base URL</h2>
            <pre><code>https://api.studyhub.com/v1</code></pre>
            
            <h3>Authentication</h3>
            <p>All endpoints (except login/signup) require authentication via JWT token in the Authorization header:</p>
            <pre><code>Authorization: Bearer {token}</code></pre>
        </section>

        <section>
            <h2>👤 Authentication Endpoints</h2>

            <h3>User Registration</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /auth/register
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "fullname": "John Doe",
  "email": "john@example.com",
  "password": "SecurePass123"
}</code></pre>

            <p><strong>Response (201 Created):</strong></p>
            <pre><code>{
  "id": "user_12345",
  "fullname": "John Doe",
  "email": "john@example.com",
  "token": "eyJhbGc...",
  "createdAt": "2026-02-06T10:30:00Z"
}</code></pre>

            <hr>

            <h3>User Login</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /auth/login
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "email": "john@example.com",
  "password": "SecurePass123"
}</code></pre>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "id": "user_12345",
  "fullname": "John Doe",
  "email": "john@example.com",
  "token": "eyJhbGc...",
  "loginAt": "2026-02-06T10:30:00Z"
}</code></pre>

            <hr>

            <h3>Logout</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /auth/logout
            </div>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "message": "Logged out successfully"
}</code></pre>
        </section>

        <section>
            <h2>📚 Course Endpoints</h2>

            <h3>Get All Courses</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /courses
            </div>

            <p><strong>Query Parameters:</strong></p>
            <table>
                <tr>
                    <th>Parameter</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>page</td>
                    <td>integer</td>
                    <td>Page number (default: 1)</td>
                </tr>
                <tr>
                    <td>limit</td>
                    <td>integer</td>
                    <td>Items per page (default: 10)</td>
                </tr>
                <tr>
                    <td>category</td>
                    <td>string</td>
                    <td>Filter by category</td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>string</td>
                    <td>Filter by level (beginner, intermediate, advanced)</td>
                </tr>
                <tr>
                    <td>sort</td>
                    <td>string</td>
                    <td>Sort by (popular, rating, newest, price)</td>
                </tr>
            </table>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "data": [
    {
      "id": "course_001",
      "title": "Web Development Bootcamp",
      "description": "Learn web development...",
      "instructor": {
        "id": "user_456",
        "name": "James Wilson"
      },
      "category": "Web Development",
      "level": "Beginner",
      "price": 49.99,
      "rating": 4.8,
      "reviews": 2450,
      "students": 15200,
      "duration": 40,
      "thumbnail": "image_url",
      "createdAt": "2024-01-15T00:00:00Z"
    }
  ],
  "pagination": {
    "page": 1,
    "limit": 10,
    "total": 123
  }
}</code></pre>

            <hr>

            <h3>Get Course Details</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /courses/{courseId}
            </div>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "id": "course_001",
  "title": "Web Development Bootcamp",
  "description": "Comprehensive web development course...",
  "instructor": {
    "id": "user_456",
    "name": "James Wilson",
    "bio": "Senior Web Developer",
    "avatar": "image_url"
  },
  "category": "Web Development",
  "level": "Beginner",
  "price": 49.99,
  "originalPrice": 99.99,
  "rating": 4.8,
  "reviews": 2450,
  "students": 15200,
  "duration": 40,
  "curriculum": [
    {
      "sectionId": "sec_001",
      "title": "HTML Fundamentals",
      "duration": 3,
      "lessons": [
        {
          "lessonId": "les_001",
          "title": "Introduction to HTML",
          "type": "video",
          "duration": 15,
          "videoUrl": "video_url"
        }
      ]
    }
  ],
  "reviews": [
    {
      "id": "review_001",
      "userId": "user_789",
      "name": "Michael Chen",
      "rating": 5,
      "text": "Excellent course!",
      "createdAt": "2026-01-20T00:00:00Z"
    }
  ]
}</code></pre>

            <hr>

            <h3>Enroll in Course</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /courses/{courseId}/enroll
            </div>

            <p><strong>Response (201 Created):</strong></p>
            <pre><code>{
  "enrollmentId": "enroll_001",
  "courseId": "course_001",
  "userId": "user_12345",
  "enrolledAt": "2026-02-06T10:30:00Z",
  "progress": 0,
  "status": "active"
}</code></pre>
        </section>

        <section>
            <h2>👨‍🎓 User/Student Endpoints</h2>

            <h3>Get User Profile</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /users/{userId}
            </div>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "id": "user_12345",
  "fullname": "John Doe",
  "email": "john@example.com",
  "avatar": "image_url",
  "bio": "Passionate learner",
  "joinedAt": "2024-06-15T00:00:00Z",
  "statistics": {
    "coursesEnrolled": 5,
    "coursesCompleted": 2,
    "hoursLearned": 42,
    "certificates": 2
  }
}</code></pre>

            <hr>

            <h3>Update User Profile</h3>
            <div class="endpoint">
                <span class="method put">PUT</span> /users/{userId}
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "fullname": "John Doe",
  "bio": "Updated bio",
  "phone": "+1 (555) 123-4567"
}</code></pre>

            <hr>

            <h3>Get Enrolled Courses</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /users/{userId}/courses
            </div>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "data": [
    {
      "enrollmentId": "enroll_001",
      "courseId": "course_001",
      "title": "Web Development Bootcamp",
      "progress": 75,
      "enrolledAt": "2025-12-01T00:00:00Z",
      "status": "in-progress"
    }
  ]
}</code></pre>

            <hr>

            <h3>Update Course Progress</h3>
            <div class="endpoint">
                <span class="method put">PUT</span> /users/{userId}/courses/{courseId}/progress
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "progress": 75,
  "lastAccessedAt": "2026-02-06T10:30:00Z"
}</code></pre>
        </section>

        <section>
            <h2>🎓 Certificate Endpoints</h2>

            <h3>Generate Certificate</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /certificates/generate
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "courseId": "course_001",
  "certificateType": "completion"
}</code></pre>

            <p><strong>Response (201 Created):</strong></p>
            <pre><code>{
  "id": "cert_001",
  "userId": "user_12345",
  "courseId": "course_001",
  "certificateUrl": "pdf_url",
  "verificationCode": "ABC123XYZ",
  "issuedAt": "2026-02-06T10:30:00Z"
}</code></pre>

            <hr>

            <h3>Verify Certificate</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /certificates/verify/{verificationCode}
            </div>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "valid": true,
  "certificate": {
    "id": "cert_001",
    "studentName": "John Doe",
    "courseName": "Web Development Bootcamp",
    "issuedAt": "2026-02-06T00:00:00Z"
  }
}</code></pre>
        </section>

        <section>
            <h2>💬 Review Endpoints</h2>

            <h3>Add Course Review</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /courses/{courseId}/reviews
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "rating": 5,
  "title": "Excellent course",
  "text": "This course exceeded my expectations..."
}</code></pre>

            <hr>

            <h3>Get Course Reviews</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /courses/{courseId}/reviews
            </div>

            <p><strong>Query Parameters:</strong></p>
            <table>
                <tr>
                    <th>Parameter</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>page</td>
                    <td>integer</td>
                    <td>Page number</td>
                </tr>
                <tr>
                    <td>limit</td>
                    <td>integer</td>
                    <td>Items per page</td>
                </tr>
                <tr>
                    <td>sort</td>
                    <td>string</td>
                    <td>Sort by (recent, helpful, rating)</td>
                </tr>
            </table>
        </section>

        <section>
            <h2>📨 Contact Form Endpoint</h2>

            <h3>Submit Contact Form</h3>
            <div class="endpoint">
                <span class="method post">POST</span> /contact
            </div>

            <p><strong>Request Body:</strong></p>
            <pre><code>{
  "name": "John Doe",
  "email": "john@example.com",
  "subject": "Course Inquiry",
  "category": "general",
  "message": "I have a question about..."
}</code></pre>

            <p><strong>Response (201 Created):</strong></p>
            <pre><code>{
  "id": "msg_001",
  "status": "received",
  "message": "Thank you for contacting us. We'll get back to you soon.",
  "createdAt": "2026-02-06T10:30:00Z"
}</code></pre>
        </section>

        <section>
            <h2>🔍 Search Endpoint</h2>

            <h3>Global Search</h3>
            <div class="endpoint">
                <span class="method get">GET</span> /search
            </div>

            <p><strong>Query Parameters:</strong></p>
            <table>
                <tr>
                    <th>Parameter</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>q</td>
                    <td>string</td>
                    <td>Search query (required)</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>string</td>
                    <td>courses, instructors, users</td>
                </tr>
                <tr>
                    <td>limit</td>
                    <td>integer</td>
                    <td>Max results (default: 10)</td>
                </tr>
            </table>

            <p><strong>Response (200 OK):</strong></p>
            <pre><code>{
  "courses": [
    {
      "id": "course_001",
      "title": "Web Development...",
      "category": "Web Development"
    }
  ],
  "instructors": [],
  "total": 1
}</code></pre>
        </section>

        <section>
            <h2>⚠️ Error Responses</h2>

            <h3>400 Bad Request</h3>
            <pre><code>{
  "status": 400,
  "error": "Bad Request",
  "message": "Invalid request parameters",
  "errors": [
    {
      "field": "email",
      "message": "Invalid email format"
    }
  ]
}</code></pre>

            <h3>401 Unauthorized</h3>
            <pre><code>{
  "status": 401,
  "error": "Unauthorized",
  "message": "Authentication required or token expired"
}</code></pre>

            <h3>403 Forbidden</h3>
            <pre><code>{
  "status": 403,
  "error": "Forbidden",
  "message": "You do not have permission to access this resource"
}</code></pre>

            <h3>404 Not Found</h3>
            <pre><code>{
  "status": 404,
  "error": "Not Found",
  "message": "Resource not found"
}</code></pre>

            <h3>500 Server Error</h3>
            <pre><code>{
  "status": 500,
  "error": "Internal Server Error",
  "message": "An unexpected error occurred"
}</code></pre>
        </section>

        <section>
            <h2>📊 Data Structures</h2>

            <h3>User Object</h3>
            <pre><code>{
  "id": "user_12345",
  "fullname": "John Doe",
  "email": "john@example.com",
  "avatar": "image_url",
  "bio": "Bio text",
  "createdAt": "ISO8601",
  "updatedAt": "ISO8601"
}</code></pre>

            <h3>Course Object</h3>
            <pre><code>{
  "id": "course_001",
  "title": "Course Title",
  "description": "Description",
  "category": "Category",
  "level": "Beginner|Intermediate|Advanced",
  "price": 49.99,
  "rating": 4.8,
  "duration": 40,
  "instructor": { /* User Object */ },
  "createdAt": "ISO8601"
}</code></pre>

            <h3>Enrollment Object</h3>
            <pre><code>{
  "id": "enroll_001",
  "userId": "user_12345",
  "courseId": "course_001",
  "progress": 75,
  "status": "active|completed|dropped",
  "enrolledAt": "ISO8601",
  "completedAt": "ISO8601 (nullable)"
}</code></pre>
        </section>

        <section>
            <h2>🔐 Authentication Flow</h2>

            <ol>
                <li>User signs up with email and password</li>
                <li>Server returns JWT token</li>
                <li>Client stores token in localStorage</li>
                <li>Client includes token in Authorization header for subsequent requests</li>
                <li>Server validates token and returns response</li>
                <li>Client handles 401 errors by redirecting to login</li>
            </ol>

            <div class="note">
                <strong>JWT Token:</strong> The token should expire after 24 hours. Implement refresh tokens for extended sessions.
            </div>
        </section>

        <section>
            <h2>💡 Implementation Tips</h2>

            <ul>
                <li>Use environment variables for API base URL</li>
                <li>Implement request interceptors for token handling</li>
                <li>Cache frequently accessed data (courses, user profile)</li>
                <li>Implement rate limiting to prevent abuse</li>
                <li>Use HTTPS for all API requests</li>
                <li>Validate all user inputs on the frontend</li>
                <li>Implement proper error handling and user feedback</li>
                <li>Log API errors for debugging</li>
            </ul>
        </section>

        <section>
            <h2>🚀 Deployment Checklist</h2>

            <ul>
                <li>[ ] API endpoints tested in development</li>
                <li>[ ] Database migrations completed</li>
                <li>[ ] Authentication system implemented</li>
                <li>[ ] HTTPS certificates configured</li>
                <li>[ ] CORS headers configured</li>
                <li>[ ] Rate limiting implemented</li>
                <li>[ ] Error logging configured</li>
                <li>[ ] Database backups automated</li>
                <li>[ ] API documentation deployed</li>
                <li>[ ] Performance monitoring enabled</li>
            </ul>
        </section>

        <footer>
            <p>StudyHub API Documentation v1.0 | Last Updated: February 2026</p>
            <p>For questions or updates, contact: api-support@studyhub.com</p>
        </footer>
    </div>
</body>
</html>
