window.addEventListener('DOMContentLoaded', (event) => {
    const button = document.querySelector('.hamburger-button');
    const dropdown = document.querySelector('.dropdown-content');

    // Hide the dropdown menu initially
    dropdown.style.display = 'none';

    button.addEventListener('click', () => {
        dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    });
});