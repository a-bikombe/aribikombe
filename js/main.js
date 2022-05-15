// VARIABLE DECLARATIONS
const loader = document.querySelector('.loader');

// FUNCTION DECLARATIONS

window.addEventListener('load', function (evt) {
    if (loader !== null) {
        loader.classList.add('hidden');
    }
});

let toggleButton = document.getElementById('navbar-toggler');
let toggleContent = document.getElementById('navbar-supported-content');

toggleButton.addEventListener('click', function (evt) {
    if (toggleButton.getAttribute('aria-expanded') === 'false') {
        toggleButton.setAttribute('aria-expanded', 'true');
        toggleContent.classList.add('show');
    } else {
        toggleButton.setAttribute('aria-expanded', 'false');
        toggleContent.classList.remove('show');
    }
});