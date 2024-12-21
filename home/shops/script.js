document.addEventListener("DOMContentLoaded", () => {
    // Handle toggling sections
    const headers = document.querySelectorAll(".filter-header");
  
    headers.forEach(header => {
      header.addEventListener("click", () => {
        const targetId = header.getAttribute("data-target");
        const target = document.getElementById(targetId);
        const arrow = header.querySelector(".arrow");
  
        // Toggle visibility
        target.classList.toggle("hidden");
  
        // Rotate arrow
        arrow.classList.toggle("open");
      });
    });
  
    // Price Range Slider
    const priceSlider = document.getElementById("price-slider");
    const priceMin = document.getElementById("price-min");
  
    priceSlider.addEventListener("input", () => {
      priceMin.textContent = `$${priceSlider.value}`;
    });
  
    // Color Selection Logic
    const colorCircles = document.querySelectorAll(".color-circle");
  
    colorCircles.forEach(circle => {
      circle.addEventListener("click", () => {
        // Remove 'selected' class from all circles
        colorCircles.forEach(c => c.classList.remove("selected"));
  
        // Add 'selected' class to the clicked circle
        circle.classList.add("selected");
      });
    });
  });
  