document.addEventListener('DOMContentLoaded', function () {

    console.log('nav.js loaded');

    const dropdownToggle = document.querySelector('[data-dropdown-toggle]');
    const dropdown = document.getElementById('dropdown');

    if (dropdownToggle && dropdown) {
        dropdownToggle.addEventListener('click', function () {
            dropdown.classList.toggle('open');
        });
    }
});
