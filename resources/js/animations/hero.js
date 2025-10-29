export function initHeroAnimations() {
  const heroSection = document.querySelector('.hero-section');
  
  if (!heroSection) return;
  
  // Animation timeline
  const tl = gsap.timeline();
  
  tl.from('.hero-title', {
    duration: 1.5,
    y: 50,
    opacity: 0,
    ease: "power3.out"
  })
  .from('.hero-subtitle', {
    duration: 1.5,
    y: 50,
    opacity: 0,
    ease: "power3.out"
  }, "-=1.2")
  .from('.hero-cta', {
    duration: 1,
    y: 20,
    opacity: 0,
    ease: "back.out(1.7)"
  }, "-=1");

  // Scroll effect
  gsap.to(heroSection, {
    scrollTrigger: {
      trigger: heroSection,
      start: "top top",
      end: "bottom top",
      scrub: true
    },
    y: 100,
    ease: "none"
  });
}