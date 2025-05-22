"use strict";

// filepath: Function/Js/fade animation.js
document.addEventListener("DOMContentLoaded", function () {
  // Fade in main content
  var main = document.getElementById('main-content');
  main.classList.add('show');
  main.style.opacity = 1; // Fade in/out for each product section

  var sections = document.querySelectorAll('.fade-section');
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        entry.target.style.opacity = 1;
      } else {
        entry.target.classList.remove('show');
        entry.target.style.opacity = 0;
      }
    });
  }, {
    threshold: 0.2
  });
  sections.forEach(function (section) {
    return observer.observe(section);
  });
});