document.addEventListener('DOMContentLoaded', () => {
  const hero = document.querySelector('.hero-section');
  const title = document.querySelector('.hero-title');
  const subtitle = document.querySelector('.hero-subtitle');
  const cta = document.querySelector('.hero-cta');

  // GSAP animations
  gsap.from(title, {
    duration: 1.5,
    y: 50,
    opacity: 0,
    ease: "power3.out"
  });

  gsap.from(subtitle, {
    duration: 1.5,
    y: 50,
    opacity: 0,
    ease: "power3.out",
    delay: 0.3
  });

  gsap.from(cta, {
    duration: 1,
    y: 20,
    opacity: 0,
    ease: "back.out(1.7)",
    delay: 0.6
  });

  gsap.to(hero, {
    scrollTrigger: {
      trigger: hero,
      start: "top top",
      end: "bottom top",
      scrub: true
    },
    y: 100,
    ease: "none"
  });
});