export class Navbar {
  constructor() {
    this.nav = document.querySelector('nav');
    if (this.nav) {
      this.init();
    }
  }
  
  init() {
    // Mobile menu toggle
    const menuBtn = this.nav.querySelector('.menu-btn');
    if (menuBtn) {
      menuBtn.addEventListener('click', () => {
        this.nav.classList.toggle('menu-open');
      });
    }
    
    // Smooth scrolling
    this.nav.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          gsap.to(window, {
            duration: 1,
            scrollTo: target,
            ease: "power2.inOut"
          });
        }
      });
    });
  }
}