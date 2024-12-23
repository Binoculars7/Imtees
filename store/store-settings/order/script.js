// Select the hamburger menu and sidebar
const hamburger = document.getElementById('hamburger');
const sidebar = document.querySelector('.sidebar');

// Toggle sidebar visibility on hamburger click
hamburger.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');

  // Change the icon of the hamburger menu
  if (sidebar.classList.contains('hidden')) {
    hamburger.innerHTML = '<i class="fa-solid fa-bars"></i>'; // Show "bars" icon
  } else {
    hamburger.innerHTML = '<i class="fa-solid fa-xmark"></i>'; // Show "close" icon
  }
});
