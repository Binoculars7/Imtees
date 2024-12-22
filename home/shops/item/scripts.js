// Handle color selection
const colorButtons = document.querySelectorAll('.uniqueCart_color');
colorButtons.forEach((button) => {
  button.addEventListener('click', () => {
    // Remove the "selected" class from all color buttons
    colorButtons.forEach((btn) => btn.classList.remove('selected'));
    // Add the "selected" class to the clicked button
    button.classList.add('selected');
    console.log(`Selected color: ${button.dataset.color}`);
  });
});

// Handle size selection
const sizeButtons = document.querySelectorAll('.uniqueCart_size');
sizeButtons.forEach((button) => {
  button.addEventListener('click', () => {
    // Remove the "selected" class from all size buttons
    sizeButtons.forEach((btn) => btn.classList.remove('selected'));
    // Add the "selected" class to the clicked button
    button.classList.add('selected');
    console.log(`Selected size: ${button.dataset.size}`);
  });
});



document.getElementById('uniqueCart_increaseQty').addEventListener('click', () => {
    const quantityElement = document.getElementById('uniqueCart_quantity');
    let quantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = ++quantity;
  });
  
  document.getElementById('uniqueCart_decreaseQty').addEventListener('click', () => {
    const quantityElement = document.getElementById('uniqueCart_quantity');
    let quantity = parseInt(quantityElement.textContent);
    if (quantity > 1) quantityElement.textContent = --quantity;
  });
  

  


  document.addEventListener("DOMContentLoaded", () => {
    const totalPages = 10; // Adjust this to match the total number of pages
    let currentPage = 1;
  
    const prevButton = document.getElementById("custom-pagination-prev");
    const nextButton = document.getElementById("custom-pagination-next");
    const pagesContainer = document.getElementById("custom-pagination-pages");
  
    function renderPagination() {
      pagesContainer.innerHTML = "";
  
      for (let i = 1; i <= totalPages; i++) {
        const pageButton = document.createElement("button");
        pageButton.className = "page-number";
        pageButton.textContent = i;
        pageButton.dataset.page = i;
  
        if (i === currentPage) {
          pageButton.classList.add("active");
        }
  
        pageButton.addEventListener("click", () => {
          currentPage = i;
          updatePagination();
        });
  
        pagesContainer.appendChild(pageButton);
      }
    }
  
    function updatePagination() {
      renderPagination();
  
      prevButton.disabled = currentPage === 1;
      nextButton.disabled = currentPage === totalPages;
    }
  
    prevButton.addEventListener("click", () => {
      if (currentPage > 1) {
        currentPage--;
        updatePagination();
      }
    });
  
    nextButton.addEventListener("click", () => {
      if (currentPage < totalPages) {
        currentPage++;
        updatePagination();
      }
    });
  
    // Initial render
    updatePagination();
  });