// filepath: Function/Js/fade animation.js
document.addEventListener("DOMContentLoaded", function() {
    // Fade in main content
    var main = document.getElementById('main-content');
    main.classList.add('show');
    main.style.opacity = 1;

    // Fade in/out for each product section
    const sections = document.querySelectorAll('.fade-section');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          entry.target.style.opacity = 1;
        } else {
          entry.target.classList.remove('show');
          entry.target.style.opacity = 0;
        }
      });
    }, { threshold: 0.2 });

    sections.forEach(section => observer.observe(section));
 });
