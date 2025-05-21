document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', (e) => {
        const href = link.getAttribute('href');

        if (href.startsWith('#')) {
            e.preventDefault(); 

            const targetElement = document.querySelector(href);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.remove('active');

            const menuButton = document.querySelector('.mobile-menu-button');
            if (menuButton) {
                menuButton.querySelector('svg').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
            }
        }
    });
});
