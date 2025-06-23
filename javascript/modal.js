document.addEventListener('DOMContentLoaded', () => {
    // Manejo del nombre de bienvenida
    const name = sessionStorage.getItem('welcomeName');
    if (name) {
        const welcomeMessage = `Bienvenido ${name}!`;
        const notification = document.createElement('div');
        notification.className = 'welcome-notification';
        notification.textContent = welcomeMessage;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
        
        sessionStorage.removeItem('welcomeName');
    }

    // MODAL DE IMÁGENES (solo si existe)
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
    const modalImage = document.getElementById('modalImage');
    const closeModal = document.getElementById('closeModal');
    const closeModalBottom = document.getElementById('closeModalBottom');
    const stepImages = document.querySelectorAll('.step-image-container img');

    // Función para abrir el modal
    function openImageModal(imageSrc) {
            if (modalImage) modalImage.src = imageSrc;
        imageModal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevenir scroll
    }

    // Función para cerrar el modal
    function closeImageModal() {
        imageModal.classList.remove('active');
        document.body.style.overflow = ''; // Restaurar scroll
    }

    // Agregar evento click a cada imagen
    stepImages.forEach(img => {
        img.addEventListener('click', () => {
            openImageModal(img.src);
        });
    });

    // Cerrar modal al hacer click en cualquiera de los botones de cerrar
        if (closeModal) closeModal.addEventListener('click', closeImageModal);
        if (closeModalBottom) closeModalBottom.addEventListener('click', closeImageModal);

    // Cerrar modal al hacer click fuera de la imagen
    imageModal.addEventListener('click', (e) => {
        if (e.target === imageModal) {
            closeImageModal();
        }
    });

    // Cerrar modal con la tecla Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && imageModal.classList.contains('active')) {
            closeImageModal();
        }
    });
    }

    // MODALES DE LOGIN Y REGISTRO
    // Funciones globales para abrir/cerrar y mostrar/ocultar contraseñas
    window.openRegistroModal = function() {
        const loginModal = document.getElementById('loginModal');
        const registroModal = document.getElementById('registroModal');
        if (loginModal) loginModal.style.display = 'none';
        if (registroModal) registroModal.style.display = 'flex';
    }
    window.openLoginModal = function() {
        const loginModal = document.getElementById('loginModal');
        const registroModal = document.getElementById('registroModal');
        if (registroModal) registroModal.style.display = 'none';
        if (loginModal) loginModal.style.display = 'flex';
    }
    window.togglePasswordModal = function() {
        const passwordInput = document.getElementById('password-modal');
        if (passwordInput) passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    window.togglePasswordRegistroModal = function() {
        const passwordInput = document.getElementById('password-registro-modal');
        if (passwordInput) passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    window.toggleConfirmPasswordModal = function() {
        const passwordInput = document.getElementById('confirm-password-modal');
        if (passwordInput) passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
    // Cerrar modales de login/registro con Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const loginModal = document.getElementById('loginModal');
            const registroModal = document.getElementById('registroModal');
            if (loginModal && loginModal.style.display === 'flex') loginModal.style.display = 'none';
            if (registroModal && registroModal.style.display === 'flex') registroModal.style.display = 'none';
        }
    });
    // Botón cerrar login
    const closeLoginModalBtn = document.getElementById('closeLoginModal');
    if (closeLoginModalBtn) closeLoginModalBtn.addEventListener('click', function() {
        const loginModal = document.getElementById('loginModal');
        if (loginModal) loginModal.style.display = 'none';
    });
    // Botón cerrar registro
    const closeRegistroModalBtn = document.getElementById('closeRegistroModal');
    if (closeRegistroModalBtn) closeRegistroModalBtn.addEventListener('click', function() {
        const registroModal = document.getElementById('registroModal');
        if (registroModal) registroModal.style.display = 'none';
    });
    // Cerrar login/registro al hacer click fuera
    window.addEventListener('click', function(e) {
        const loginModal = document.getElementById('loginModal');
        if (loginModal && e.target === loginModal) loginModal.style.display = 'none';
        const registroModal = document.getElementById('registroModal');
        if (registroModal && e.target === registroModal) registroModal.style.display = 'none';
    });
    // Botones de login y registro (solo si no usas onclick en HTML)
    const loginBtns = document.querySelectorAll('.login-button, .cta-button, .primary-button');
    if (loginBtns.length) {
        loginBtns.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const loginModal = document.getElementById('loginModal');
                if (loginModal) loginModal.style.display = 'flex';
            });
        });
    }
    const registBtns = document.querySelectorAll('.regist-button');
    if (registBtns.length) {
        registBtns.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                window.openRegistroModal();
            });
        });
    }
    // Validar que las contraseñas coincidan y fortaleza (solo si existen los formularios)
    const registroForm = document.getElementById('registroFormModal');
    if (registroForm) {
        registroForm.addEventListener('submit', function(e) {
        e.preventDefault();
            const password = document.getElementById('password-registro-modal')?.value;
            const confirmPassword = document.getElementById('confirm-password-modal')?.value;
        if (password !== confirmPassword) {
            const errorDiv = document.getElementById('registro-error-modal');
                if (errorDiv) {
            errorDiv.textContent = 'Las contraseñas no coinciden';
            errorDiv.classList.remove('hidden');
                }
            return;
        }
        window.location.href = 'escaneo.html';
    });
        // Fortaleza de contraseña
        const passwordInput = document.getElementById('password-registro-modal');
        if (passwordInput) {
            passwordInput.addEventListener('input', function(e) {
        let strength = 0;
                const val = e.target.value;
        const strengthText = document.getElementById('passwordStrengthText-modal');
        const strengthBar = document.getElementById('passwordStrength-modal');
                if (val.length >= 8) strength += 1;
                if (/\d/.test(val)) strength += 1;
                if (/[a-z]/.test(val)) strength += 1;
                if (/[A-Z]/.test(val)) strength += 1;
                if (/[^A-Za-z0-9]/.test(val)) strength += 1;
                if (strengthText && strengthBar) {
        switch (strength) {
            case 0:
            case 1:
                strengthText.textContent = 'Débil';
                strengthText.className = 'text-red-500';
                strengthBar.className = 'h-2 rounded-full bg-red-500 w-1/4';
                break;
            case 2:
            case 3:
                strengthText.textContent = 'Media';
                strengthText.className = 'text-yellow-500';
                strengthBar.className = 'h-2 rounded-full bg-yellow-500 w-2/4';
                break;
            case 4:
            case 5:
                strengthText.textContent = 'Fuerte';
                strengthText.className = 'text-green-500';
                strengthBar.className = 'h-2 rounded-full bg-green-500 w-full';
                break;
        }
    }
            });
        }
        // Coincidencia de contraseñas
        const confirmPasswordInput = document.getElementById('confirm-password-modal');
        if (confirmPasswordInput) {
            confirmPasswordInput.addEventListener('input', function(e) {
                const password = document.getElementById('password-registro-modal')?.value;
        const confirmPassword = e.target.value;
        const matchMessage = document.getElementById('passwordMatch-modal');
                if (matchMessage) {
        if (password !== confirmPassword) {
            matchMessage.classList.remove('hidden');
        } else {
            matchMessage.classList.add('hidden');
                    }
                }
            });
        }
    }
    // Login submit (solo si existe el formulario)
    const loginForm = document.getElementById('loginFormModal');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        window.location.href = 'historial.html';
    });
    }
});