//MOBILE NAVIGATION FIX

document.addEventListener("DOMContentLoaded", function () {
    const dropdownParents = document.querySelectorAll(".nav-menu li.menu-item-has-children > a");
  
    dropdownParents.forEach(parent => {
      parent.addEventListener("click", function (e) {
        if (window.innerWidth <= 768) { // Only for mobile
          e.preventDefault();
          let submenu = this.nextElementSibling;
          if (submenu.style.display === "block") {
            submenu.style.display = "none";
          } else {
            submenu.style.display = "block";
          }
        }
      });
    });
  });

  // counter block function


  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');

    const startCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const increment = target / 100; // Adjust speed

      let current = 0;
      const updateCounter = () => {
        if (current < target) {
          current += increment;
          counter.textContent = Math.floor(current);
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      };
      updateCounter();
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startCounter(entry.target);
          observer.unobserve(entry.target); // Stop observing after animation
        }
      });
    }, { threshold: 0.5 }); // Trigger when 50% of the element is visible

    counters.forEach(counter => observer.observe(counter));
  });


  document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        type: 'loop',
      perPage: 5,      
      perMove: 1,       
      autoplay: true,   
      interval: 2000,   
      pauseOnHover: true, 
      arrows: false,    
      pagination: false,
      gap: '20px'
    }).mount();
  });

  // header shrink on scroll
  jQuery(function ($) {
    function checkScroll() {
        if ($(window).scrollTop() > 50) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    }

    // Run immediately when the script loads
    checkScroll();

    // Run on scroll
    $(window).on("scroll", checkScroll);

    // Run again when the page is fully loaded
    $(window).on("load", checkScroll);
});




  