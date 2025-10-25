// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navContent = document.getElementById('nav-content');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    
    if (mobileMenu && navContent) {
        mobileMenu.addEventListener('click', function() {
            navContent.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            if (mobileMenuOverlay) {
                mobileMenuOverlay.classList.toggle('active');
            }
        });
    }
    
    // Close mobile menu when clicking on overlay
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', function() {
            navContent.classList.remove('active');
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
        });
    }
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navContent.classList.contains('active')) {
                navContent.classList.remove('active');
                mobileMenu.classList.remove('active');
                if (mobileMenuOverlay) {
                    mobileMenuOverlay.classList.remove('active');
                }
            }
        });
    });
    
    // Close mobile menu on window resize if screen becomes larger
    window.addEventListener('resize', function() {
        if (window.innerWidth > 992) {
            navContent.classList.remove('active');
            mobileMenu.classList.remove('active');
            if (mobileMenuOverlay) {
                mobileMenuOverlay.classList.remove('active');
            }
        }
    });
});

// === BRO-LEVEL INTERSECTION OBSERVER ===
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {        
        if (entry.isIntersecting) {
            // Element is entering the viewport, add IN-animation
            if (entry.target.classList.contains('about-content')) {
                entry.target.className = 'about-content animate fadeInUp';
            } else if (entry.target.classList.contains('service-card') || entry.target.classList.contains('blog-card')) {
                entry.target.classList.remove('fadeOutUp');
                entry.target.classList.add('fadeInUp');
            } else if (entry.target.classList.contains('img-box')) {
                entry.target.classList.remove('bounceOut');
                entry.target.classList.add('bounceIn');
            } else if (entry.target.classList.contains('service-item')) {
                entry.target.classList.remove('fadeOut');
                entry.target.classList.add('fadeInUp');
            }
        } else {
            // Element is leaving the viewport, add OUT-animation
            if (entry.target.classList.contains('about-content')) {
                entry.target.className = 'about-content animate fadeOutUp';
            } else if (entry.target.classList.contains('service-card') || entry.target.classList.contains('blog-card')) {
                entry.target.classList.remove('fadeInUp');
                entry.target.classList.add('fadeOutUp');
            } else if (entry.target.classList.contains('img-box')) {
                entry.target.classList.remove('bounceIn');
                entry.target.classList.add('bounceOut');
            } else if (entry.target.classList.contains('service-item')) {
                entry.target.classList.remove('fadeInUp');
                entry.target.classList.add('fadeOut');
            }
        }
    });
}, { threshold: 0.15 }); // 15% of the element must be visible

// Observe all the elements you want to animate
document.querySelectorAll('.about-content, .about-images > *, .service-card, .blog-card, .service-item').forEach(el => {
    if (el) {
        observer.observe(el);
    }
});

// STICKY HEADER + SCROLL EFFECTS
window.addEventListener('scroll', () => {
    const topBar = document.querySelector('.header-top-bar');
    const nav = document.querySelector('.main-nav');
    if (topBar && nav) {
        if (window.scrollY > 80) {
            topBar.classList.add('scrolled');
            nav.classList.add('scrolled');
        } else {
            topBar.classList.remove('scrolled');
            nav.classList.remove('scrolled');
        }
    }
});

// === ADMIN LOGIN FORM HANDLER ===
const loginForm = document.getElementById('admin-login-form');

if (loginForm) {
    loginForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // IMPORTANT: This is for front-end demonstration only.
        // Real-world applications require a secure, server-side authentication.
        if (email === 'motaungleon@gmail.com' && password === 'securepassword123') {
            window.location.href = 'uploadblog.html'; // Redirect to upload page on success
        } else {
            alert('Invalid credentials. Please try again.');
        }
    });
}

// === NEWSLETTER SUBSCRIBE HANDLER ===
const newsletterForm = document.getElementById('newsletter-form');

if (newsletterForm) {
    newsletterForm.addEventListener('submit', async (event) => {
        event.preventDefault(); // Prevent page reload

        const emailInput = newsletterForm.querySelector('input[type="email"]');
        const messageDiv = newsletterForm.querySelector('.form-message');
        const email = emailInput.value;

        try {
            const response = await fetch('subscribe.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email: email }),
            });

            const result = await response.json();

            if (messageDiv) {
                messageDiv.textContent = result.message;
                messageDiv.className = result.success ? 'form-message success' : 'form-message error';
            }

            if (result.success) {
                emailInput.value = ''; // Clear the input field on success
            }
        } catch (error) {
            if (messageDiv) {
                messageDiv.textContent = 'A network error occurred. Please try again.';
                messageDiv.className = 'form-message error';
            }
        }
    });
}

// === CONTACT FORM HANDLER ===
const contactForm = document.querySelector('.contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent page reload

        const formData = new FormData(contactForm);
        const name = formData.get('name');
        const email = formData.get('email');
        const subject = formData.get('subject');
        const message = formData.get('message');

        if (name && email && subject && message) {
            // For demonstration, we'll just show an alert.
            // In a real application, you would send this to a server.
            alert(`Thank you for your message, ${name}! We'll get back to you soon.`);
            contactForm.reset(); // Clear the form
        } else {
            alert('Please fill in all required fields.');
        }
    });
}
