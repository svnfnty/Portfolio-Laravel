// Portfolio Application
class PortfolioApp {
    constructor() {
        this.csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
        this.init();
    }
    
    init() {
        this.initMobileMenu();
        this.initSmoothScroll();
        this.initContactForm();
        this.initCurrentYear();
        this.initAnimations();
    }
    
    // Mobile Menu
    initMobileMenu() {
        const menuButton = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', (e) => {
                e.stopPropagation();
                mobileMenu.classList.toggle('hidden');
                const icon = menuButton.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!menuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    const icon = menuButton.querySelector('i');
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-times');
                }
            });
        }
    }
    
    // Smooth Scrolling
    initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = anchor.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobileMenu');
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        const menuButton = document.getElementById('mobileMenuBtn');
                        if (menuButton) {
                            const icon = menuButton.querySelector('i');
                            icon.classList.add('fa-bars');
                            icon.classList.remove('fa-times');
                        }
                    }
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    // Contact Form
    initContactForm() {
        const form = document.getElementById('contactForm');
        if (!form) return;
        
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitButton.disabled = true;
            
            try {
                // For demo - simulate API call
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                // In production, uncomment this:
                /*
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': this.csrfToken,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(Object.fromEntries(formData))
                });
                
                const data = await response.json();
                if (data.success) {
                    this.showToast(data.message);
                    form.reset();
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
                */
                
                // Demo success
                this.showToast('Thank you for your message! I\'ll get back to you soon.');
                form.reset();
                
            } catch (error) {
                this.showToast(error.message || 'Error sending message. Please try again.', 'error');
            } finally {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }
    
    // Update Copyright Year
    initCurrentYear() {
        const yearElement = document.getElementById('currentYear');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    }
    
    // Scroll Animations
    initAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        // Observe project cards and skill cards
        document.querySelectorAll('.hover-card, .bg-white.rounded-2xl').forEach(el => {
            observer.observe(el);
        });
    }
    
    // Toast Notification
    showToast(message, type = 'success') {
        // Create toast if doesn't exist
        let toast = document.getElementById('toast');
        let toastMessage = document.getElementById('toastMessage');
        
        if (!toast) {
            toast = document.createElement('div');
            toast.id = 'toast';
            toast.className = 'fixed top-24 right-4 z-50 transform translate-x-full transition-transform duration-300';
            toast.innerHTML = `
                <div class="${type === 'error' ? 'bg-red-500' : 'bg-green-500'} text-white px-6 py-3 rounded-lg shadow-lg max-w-sm">
                    <div class="flex items-center gap-3">
                        <i class="fas ${type === 'error' ? 'fa-exclamation-circle' : 'fa-check-circle'}"></i>
                        <span id="toastMessage">${message}</span>
                    </div>
                </div>
            `;
            document.body.appendChild(toast);
            toastMessage = document.getElementById('toastMessage');
        }
        
        // Update message and type
        const toastContent = toast.querySelector('div');
        const icon = toastContent.querySelector('i');
        
        toastContent.className = `${type === 'error' ? 'bg-red-500' : 'bg-green-500'} text-white px-6 py-3 rounded-lg shadow-lg max-w-sm`;
        icon.className = `fas ${type === 'error' ? 'fa-exclamation-circle' : 'fa-check-circle'}`;
        toastMessage.textContent = message;
        
        // Show toast
        toast.classList.remove('translate-x-full');
        
        // Hide after 5 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
        }, 5000);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const app = new PortfolioApp();
    window.PortfolioApp = app;
});