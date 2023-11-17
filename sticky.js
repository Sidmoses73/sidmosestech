// JavaScript to make the header sticky when scrolling
window.addEventListener('scroll', () => {
    const header = document.querySelector('.sticky-header');
    const scrollY = window.scrollY;

    if (scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
