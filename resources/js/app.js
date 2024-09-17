import './bootstrap';


document.getElementById('avatar-btn').addEventListener('click', function() {
    const dropdownMenu = document.getElementById('avatar-menu');
    
    // Toggle the 'hidden' class
    dropdownMenu.classList.toggle('hidden');
  });
  
  // Close the dropdown if the user clicks outside of it
  window.addEventListener('click', function(e) {
    const button = document.getElementById('avatar-btn');
    const dropdownMenu = document.getElementById('avatar-menu');
    
    if (!button.contains(e.target) && !dropdownMenu.contains(e.target)) {
      dropdownMenu.classList.add('hidden');
    }
  });