import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// Configuration
const CONFIG = {
  particles: {
    density: 120,
    color: "#2EC4B6",
    opacity: 0.7,
    speed: 3
  },
  aircraft: {
    minSize: 40,
    maxSize: 90
  },
  floaters: {
    intensity: 30
  }
};

document.addEventListener('DOMContentLoaded', () => {
  // Initialize all components
  initHeroSection();
  initNavigation();
  initServiceCards();
  initPortfolioCards();
  initAnimations();
  initEventListeners();
  
  // Debugging
  console.log("All components initialized");
});

function initHeroSection() {
  // Hero section timeline
  const heroTL = gsap.timeline({
    defaults: { ease: "power3.out", duration: 1 }
  });

  heroTL
    .from(".hero-title", { 
      y: 50, 
      opacity: 0, 
      duration: 1.2 
    })
    .from(".hero-subtitle", { 
      y: 30, 
      opacity: 0 
    }, "-=0.7")
    .from(".hero-button", { 
      y: 20, 
      opacity: 0, 
      scale: 0.9 
    }, "-=0.5");

  // Continuous animations
  gsap.to(".hero-button", {
    y: -2,
    scale: 1.02,
    duration: 2,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut"
  });

  // Initialize particles if available
  if (typeof particlesJS !== 'undefined') {
    initParticles();
  } else {
    console.warn("particles.js not loaded - skipping particle effects");
  }
}

function initParticles() {
  particlesJS('particles-js', {
    particles: {
      number: {
        value: CONFIG.particles.density,
        density: {
          enable: true,
          value_area: 800
        }
      },
      color: {
        value: CONFIG.particles.color
      },
      shape: {
        type: "circle"
      },
      opacity: {
        value: CONFIG.particles.opacity,
        random: true
      },
      size: {
        value: 3,
        random: true
      },
      line_linked: {
        enable: true,
        distance: 150,
        color: CONFIG.particles.color,
        opacity: 0.4,
        width: 1
      },
      move: {
        enable: true,
        speed: CONFIG.particles.speed,
        direction: "none",
        random: true,
        straight: false,
        out_mode: "out"
      }
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: {
          enable: true,
          mode: "repulse"
        },
        onclick: {
          enable: true,
          mode: "push"
        }
      }
    }
  });
}

function initNavigation() {
  // Smooth scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      if (this.getAttribute('target') === '_blank' || 
          this.getAttribute('href').startsWith('http')) {
        return;
      }
      
      e.preventDefault();
      const target = this.getAttribute('href');
      
      gsap.to(window, {
        duration: 1.2,
        scrollTo: {
          y: target,
          offsetY: 100
        },
        ease: "power2.inOut"
      });

      // Update URL
      if (history.pushState) {
        history.pushState(null, null, target);
      }
    });
  });

  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      gsap.fromTo(mobileMenu, 
        { y: -20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.3 }
      );
    });

    // Close menu when clicking links
    document.querySelectorAll('#mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        gsap.to(mobileMenu, {
          y: -20,
          opacity: 0,
          duration: 0.2,
          onComplete: () => mobileMenu.classList.add('hidden')
        });
      });
    });
  }

  // Active link highlighting
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('.nav-link');

  function updateActiveNav() {
    let current = '';
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (window.scrollY >= (sectionTop - sectionHeight / 3)) {
        current = section.getAttribute('id');
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  }

  // ScrollTrigger for nav updates
  sections.forEach(section => {
    ScrollTrigger.create({
      trigger: section,
      start: "top center",
      end: "bottom center",
      onEnter: updateActiveNav,
      onEnterBack: updateActiveNav
    });
  });

  window.addEventListener('scroll', updateActiveNav);
  updateActiveNav(); // Initial call
}

function initServiceCards() {
  gsap.utils.toArray('.service-card').forEach((card, index) => {
    const direction = index % 2 === 0 ? -100 : 100;
    
    gsap.set(card, { 
      x: direction,
      opacity: 0
    });
    
    ScrollTrigger.create({
      trigger: card,
      start: "top 80%",
      onEnter: () => {
        gsap.to(card, {
          x: 0,
          opacity: 1,
          duration: 0.8,
          ease: "back.out(1.2)",
          delay: index * 0.15
        });
      },
      onLeaveBack: () => {
        gsap.to(card, {
          x: direction,
          opacity: 0,
          duration: 0.4
        });
      }
    });

    // Hover effects
    const img = card.querySelector('img');
    card.addEventListener('mouseenter', () => {
      gsap.to(card, { y: -5, duration: 0.3 });
      gsap.to(img, { scale: 1.05, duration: 0.5 });
    });
    
    card.addEventListener('mouseleave', () => {
      gsap.to(card, { y: 0, duration: 0.3 });
      gsap.to(img, { scale: 1, duration: 0.5 });
    });
  });
}

function initPortfolioCards() {
  gsap.utils.toArray('.portfolio-card').forEach((card, index) => {
    gsap.set(card, { 
      y: 20,
      opacity: 0
    });
    
    ScrollTrigger.create({
      trigger: card,
      start: "top 80%",
      onEnter: () => {
        gsap.to(card, {
          y: 0,
          opacity: 1,
          duration: 0.8,
          ease: "back.out(1.2)",
          delay: index * 0.1
        });
      },
      onLeaveBack: () => {
        gsap.to(card, {
          y: 20,
          opacity: 0,
          duration: 0.4
        });
      }
    });

    // Hover effects
    const img = card.querySelector('img');
    card.addEventListener('mouseenter', () => {
      gsap.to(card, { y: -5, duration: 0.3 });
      gsap.to(img, { scale: 1.05, duration: 0.5 });
    });
    
    card.addEventListener('mouseleave', () => {
      gsap.to(card, { y: 0, duration: 0.3 });
      gsap.to(img, { scale: 1, duration: 0.5 });
    });
  });
}

function initAnimations() {
  // Floating background elements
  gsap.to(".animate-float-slow", {
    duration: 8,
    x: CONFIG.floaters.intensity,
    y: -CONFIG.floaters.intensity/1.5,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut"
  });
  
  gsap.to(".animate-float-medium", {
    duration: 6,
    x: -CONFIG.floaters.intensity/1.5,
    y: CONFIG.floaters.intensity/2,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
    delay: 1
  });

  gsap.to(".animate-float-fast", {
    duration: 4,
    x: CONFIG.floaters.intensity/2,
    y: -CONFIG.floaters.intensity/3,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
    delay: 0.5
  });

  // Typewriter effect cleanup
  const subtitle = document.querySelector('.typewriter');
  if (subtitle) {
    setTimeout(() => {
      subtitle.style.animation = 'none';
      subtitle.style.borderRight = 'none';
    }, 3500);
  }
}

function initEventListeners() {
  // Button hover effects
  const heroButton = document.querySelector(".hero-button");
  if (heroButton) {
    heroButton.addEventListener('mouseenter', () => {
      gsap.to(".hero-button", {
        y: -3,
        scale: 1.03,
        duration: 0.3
      });
    });
    
    heroButton.addEventListener('mouseleave', () => {
      gsap.to(".hero-button", {
        y: 0,
        scale: 1,
        duration: 0.3
      });
    });
  }

  // Window resize handling
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      ScrollTrigger.refresh();
    }, 200);
  });
}

// Initialize based on document state
if (document.readyState === 'complete') {
  initHeroSection();
  initNavigation();
  initServiceCards();
  initPortfolioCards();
  initAnimations();
  initEventListeners();
} else {
  document.addEventListener('DOMContentLoaded', () => {
    initHeroSection();
    initNavigation();
    initServiceCards();
    initPortfolioCards();
    initAnimations();
    initEventListeners();
  });
}