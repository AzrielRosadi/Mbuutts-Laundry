document.addEventListener('DOMContentLoaded', function () {
  const elements = document.querySelectorAll('.animate-on-scroll');
  const flipCards = document.querySelectorAll('.flip-card');

  // Animasi scroll
  const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              entry.target.classList.add('animate');
          }
      });
  });

  elements.forEach((el) => observer.observe(el));

  // Flip untuk mobile
  flipCards.forEach((card) => {
      card.addEventListener('click', () => {
          if (window.innerWidth < 768) {
              card.classList.toggle('flipped');
          }
      });
  });
});
