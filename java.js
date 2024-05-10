document.addEventListener("DOMContentLoaded", function() {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slider-wrapper img');
    const slideWidth = slides[0].clientWidth;
    let slideIndex = 0;
  
    function nextSlide() {
      slideIndex++;
      if (slideIndex >= slides.length) {
        slideIndex = 0;
      }
      updateSlider();
    }
  
    function updateSlider() {
      sliderWrapper.style.transition = 'transform 0.5s ease-in-out';
      sliderWrapper.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    }
  
    setInterval(nextSlide, 3000); // Change slide every 3 seconds
  });
  