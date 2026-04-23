// ==================== GLOBAL VARIABLES ====================
const dashboardNavItems = document.querySelectorAll('.nav-item');
const dashboardSections = document.querySelectorAll('.dashboard-section');
const curriculumToggles = document.querySelectorAll('.curriculum-toggle');
const contactForm = document.getElementById('contactForm');
const loginForm = document.getElementById('loginForm');
const signupForm = document.getElementById('signupForm');
const searchInput = document.getElementById('searchInput');
const categoryFilter = document.getElementById('categoryFilter');
const levelFilter = document.getElementById('levelFilter');
const sortFilter = document.getElementById('sortFilter');

// ==================== DASHBOARD NAVIGATION ====================
if (dashboardNavItems.length > 0) {
    dashboardNavItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const sectionId = item.getAttribute('data-section');
            
            // Remove active class from all
            dashboardNavItems.forEach(nav => nav.classList.remove('active'));
            dashboardSections.forEach(section => section.classList.remove('active'));
            
            // Add active to clicked
            item.classList.add('active');
            document.getElementById(sectionId).classList.add('active');
        });
    });
}

// ==================== CURRICULUM TOGGLES ====================
if (curriculumToggles.length > 0) {
    curriculumToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            const icon = toggle.querySelector('.toggle-icon');
            
            // Toggle content visibility
            if (content.style.display === 'none') {
                content.style.display = 'block';
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.style.display = 'none';
                icon.style.transform = 'rotate(-90deg)';
            }
        });
    });
}

// ==================== FORM HANDLING ====================
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        // Simulate form submission
        console.log('Contact form submitted:', data);
        
        // Show success message
        showNotification('Thank you for contacting us! We will get back to you soon.', 'success');
        
        // Reset form
        contactForm.reset();
    });
}

if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        
        if (email && password) {
            // Simulate login
            console.log('Login attempted:', { email });
            showNotification('Login successful! Redirecting to dashboard...', 'success');
            
            // Redirect after 1.5 seconds
            setTimeout(() => {
                window.location.href = 'dashboard.html';
            }, 1500);
        }
    });
}

if (signupForm) {
    signupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const fullname = document.getElementById('fullname').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        
        // Validate passwords match
        if (password !== confirmPassword) {
            showNotification('Passwords do not match!', 'error');
            return;
        }
        
        // Validate password strength (at least 8 characters)
        if (password.length < 8) {
            showNotification('Password must be at least 8 characters long!', 'error');
            return;
        }
        
        if (fullname && email && password) {
            // Simulate signup
            console.log('Signup attempted:', { fullname, email });
            showNotification('Account created successfully! Redirecting to login...', 'success');
            
            // Redirect after 1.5 seconds
            setTimeout(() => {
                window.location.href = 'dashboard.html';
            }, 1500);
        }
    });
}

// ==================== COURSE FILTERING ====================
function filterCourses() {
    const searchTerm = searchInput?.value.toLowerCase() || '';
    const category = categoryFilter?.value || '';
    const level = levelFilter?.value || '';
    const courseCards = document.querySelectorAll('.course-card, .course-card-large');
    
    courseCards.forEach(card => {
        const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
        const courseCategory = card.querySelector('.course-category')?.textContent.toLowerCase() || '';
        
        const matchesSearch = title.includes(searchTerm);
        const matchesCategory = !category || courseCategory.includes(category);
        
        // Show/hide based on filters
        if (matchesSearch && matchesCategory) {
            card.style.display = '';
            card.style.animation = 'fadeInUp 0.3s ease';
        } else {
            card.style.display = 'none';
        }
    });
}

if (searchInput) {
    searchInput.addEventListener('input', filterCourses);
}

if (categoryFilter) {
    categoryFilter.addEventListener('change', filterCourses);
}

// ==================== SMOOTH SCROLLING ====================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && !href.includes('data-section')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// ==================== NOTIFICATIONS ====================
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 80px;
        right: 20px;
        padding: 1rem 1.5rem;
        background-color: ${type === 'success' ? '#10B981' : '#EF4444'};
        color: white;
        border-radius: 5px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        animation: slideIn 0.3s ease;
        z-index: 2000;
        max-width: 400px;
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// ==================== LOGOUT FUNCTION ====================
function logout() {
    showNotification('You have been logged out.', 'success');
    setTimeout(() => {
        window.location.href = 'index.html';
    }, 1000);
    return false;
}

// ==================== ANIMATIONS ====================
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// ==================== ACTIVE NAVIGATION ====================
function setActiveNav() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-links a');
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        const href = link.getAttribute('href');
        if (href === currentPage || (currentPage === '' && href === 'index.html')) {
            link.classList.add('active');
        }
    });
}

// Call on page load
document.addEventListener('DOMContentLoaded', setActiveNav);

// ==================== DARK MODE TOGGLE (Optional) ====================
function initDarkMode() {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (prefersDark && localStorage.getItem('theme') !== 'light') {
        document.body.setAttribute('data-theme', 'dark');
    }
}

// Uncomment to enable dark mode
// document.addEventListener('DOMContentLoaded', initDarkMode);

// ==================== SEARCH FUNCTIONALITY ====================
function searchCourses(query) {
    const courseCards = document.querySelectorAll('.course-card, .course-card-large');
    let results = [];
    
    courseCards.forEach(card => {
        const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
        const description = card.querySelector('p')?.textContent.toLowerCase() || '';
        
        if (title.includes(query.toLowerCase()) || description.includes(query.toLowerCase())) {
            results.push({
                title: card.querySelector('h3')?.textContent,
                description: card.querySelector('p')?.textContent
            });
        }
    });
    
    return results;
}

// ==================== SCROLL TO TOP BUTTON ====================
function createScrollToTopButton() {
    const button = document.createElement('button');
    button.innerHTML = '↑';
    button.id = 'scrollToTop';
    button.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: #5B21B6;
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        display: none;
        z-index: 1000;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    `;
    
    document.body.appendChild(button);
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
    
    button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    button.addEventListener('hover', () => {
        button.style.transform = 'scale(1.1)';
    });
}

document.addEventListener('DOMContentLoaded', createScrollToTopButton);

// ==================== ENROLLMENT TRACKING ====================
class EnrollmentTracker {
    constructor() {
        this.enrolledCourses = JSON.parse(localStorage.getItem('enrolledCourses')) || [];
    }
    
    enrollCourse(courseId, courseName) {
        if (!this.enrolledCourses.find(c => c.id === courseId)) {
            this.enrolledCourses.push({
                id: courseId,
                name: courseName,
                enrollmentDate: new Date().toISOString(),
                progress: 0
            });
            this.save();
            return true;
        }
        return false;
    }
    
    updateProgress(courseId, progress) {
        const course = this.enrolledCourses.find(c => c.id === courseId);
        if (course) {
            course.progress = progress;
            this.save();
        }
    }
    
    save() {
        localStorage.setItem('enrolledCourses', JSON.stringify(this.enrolledCourses));
    }
    
    getEnrolledCourses() {
        return this.enrolledCourses;
    }
}

// Initialize tracker
const tracker = new EnrollmentTracker();

// ==================== USER SESSION MANAGEMENT ====================
class UserSession {
    constructor() {
        this.user = JSON.parse(localStorage.getItem('user')) || null;
    }
    
    login(email, fullname) {
        this.user = {
            email,
            fullname,
            loginTime: new Date().toISOString()
        };
        this.save();
        return this.user;
    }
    
    logout() {
        this.user = null;
        localStorage.removeItem('user');
        localStorage.removeItem('enrolledCourses');
    }
    
    isLoggedIn() {
        return this.user !== null;
    }
    
    getUser() {
        return this.user;
    }
    
    save() {
        if (this.user) {
            localStorage.setItem('user', JSON.stringify(this.user));
        }
    }
}

// Initialize session
const session = new UserSession();

// ==================== RESPONSIVE NAVBAR ====================
function handleResponsiveNav() {
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelector('.nav-links');
    
    if (window.innerWidth <= 768) {
        if (!document.getElementById('mobileMenuBtn')) {
            const menuBtn = document.createElement('button');
            menuBtn.id = 'mobileMenuBtn';
            menuBtn.textContent = '☰';
            menuBtn.style.cssText = `
                background: none;
                border: none;
                font-size: 1.5rem;
                cursor: pointer;
                color: #5B21B6;
                display: block;
            `;
            
            navbar.querySelector('.container').appendChild(menuBtn);
            
            menuBtn.addEventListener('click', () => {
                navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '60px';
                navLinks.style.left = '0';
                navLinks.style.right = '0';
                navLinks.style.flexDirection = 'column';
                navLinks.style.gap = '1rem';
                navLinks.style.padding = '1rem';
                navLinks.style.backgroundColor = 'white';
                navLinks.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
            });
        }
    }
}

window.addEventListener('resize', handleResponsiveNav);
document.addEventListener('DOMContentLoaded', handleResponsiveNav);

// ==================== FORM VALIDATION ====================
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePassword(password) {
    // At least 8 characters, one uppercase, one lowercase, one number
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@$!%*?&]{8,}$/;
    return re.test(password);
}

// ==================== LAZY LOADING ====================
function setupLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.getAttribute('data-src');
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => observer.observe(img));
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        images.forEach(img => {
            img.src = img.getAttribute('data-src');
            img.removeAttribute('data-src');
        });
    }
}

document.addEventListener('DOMContentLoaded', setupLazyLoading);

// ==================== PAGE LOAD ANALYTICS ====================
function trackPageView() {
    const pageInfo = {
        url: window.location.href,
        title: document.title,
        timestamp: new Date().toISOString()
    };
    
    console.log('Page View:', pageInfo);
    // In production, send this to analytics service
}

document.addEventListener('DOMContentLoaded', trackPageView);

// ==================== AUTO-SAVE FORM DATA ====================
function setupAutoSave() {
    const forms = document.querySelectorAll('form:not(#contactForm):not(#loginForm):not(#signupForm)');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('change', () => {
                const formData = new FormData(form);
                const data = Object.fromEntries(formData);
                localStorage.setItem(`formData_${form.id}`, JSON.stringify(data));
            });
        });
    });
}

document.addEventListener('DOMContentLoaded', setupAutoSave);

console.log('StudyHub script loaded successfully!');
