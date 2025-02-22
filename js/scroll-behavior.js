// Select the element you want to add/remove the class from
const targetElement = document.querySelector('#back-to-top');

// Function to add/remove class based on scroll position
function toggleClassOnScroll() {
    const scrollPosition = window.scrollY; // Get the vertical scroll position
    const threshold = 2000; // Set a threshold value in pixels for when to add/remove the class

    if (scrollPosition > threshold) {
        targetElement.classList.add('scrolled');
    } else {
        targetElement.classList.remove('scrolled');
    }
}

if(targetElement) {
    window.addEventListener('scroll', toggleClassOnScroll);
}
