document.addEventListener('DOMContentLoaded', () => {
    // Cachear elementos del DOM
    const menuButton = document.querySelector('.mobile-menu-button');
    const navLinks = document.querySelector('.nav-links');
    const SVGPaths = {
        menu: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>',
        close: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>'
    };

    if (!menuButton || !navLinks) return;

    // Estado del menú
    let isMenuOpen = false;
    const svg = menuButton.querySelector('svg');

    // Funciones de utilidad
    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;
        navLinks.classList.toggle('active');
        svg.innerHTML = isMenuOpen ? SVGPaths.close : SVGPaths.menu;
    };

    const closeMenu = () => {
        if (isMenuOpen) {
            isMenuOpen = false;
            navLinks.classList.remove('active');
            svg.innerHTML = SVGPaths.menu;
        }
    };

    // Delegación de eventos para navegación
    const handleNavigation = (e) => {
        const link = e.target.closest('.nav-link');
        if (!link) return;

        const href = link.getAttribute('href');
        if (href.startsWith('#')) {
            e.preventDefault();
            document.querySelector(href)?.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            });
            closeMenu();
        }
    };

    // Optimización de eventos de scroll
    const handleScroll = () => {
        if (isMenuOpen && Math.abs(window.pageYOffset - lastScroll) > 5) {
            closeMenu();
        }
        lastScroll = window.pageYOffset;
    };

    // Configurar eventos
    const setupEventListeners = () => {
        // Eventos de clic
        menuButton.addEventListener('click', toggleMenu);
        navLinks.addEventListener('click', handleNavigation);

        // Eventos de scroll/resize optimizados
        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) closeMenu();
        });
    };

    // Variables de estado
    let lastScroll = window.pageYOffset;
    
    // Inicialización
    const init = () => {
        setupEventListeners();
        // Limpiar estilos iniciales
        navLinks.style.transform = '';
    };

    init();
});