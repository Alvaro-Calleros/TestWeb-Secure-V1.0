document.getElementById('current-year').textContent = new Date().getFullYear();


document.getElementById('loginForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const submitBtn = document.querySelector('#loginForm button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="loader"></span> Autenticando...';
    submitBtn.disabled = true;

    const formData = {
        email: document.getElementById('email').value.trim(),
        password: document.getElementById('password').value
    };

    try {
        const response = await fetch('php/login.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(formData)
        });

        const text = await response.text();

        let data;
        try {
            data = JSON.parse(text);
        } catch (e) {
            throw new Error('Respuesta inválida del servidor: ' + text);
        }

        if (!response.ok) {
            throw new Error(data.error || 'Error en el servidor');
        }

        if (data.name) {
            sessionStorage.setItem('welcomeName', data.name);
        } else {
            sessionStorage.setItem('welcomeName', 'Usuario');
        }

        window.location.href = data.redirect;


    } catch (error) {
        console.error('Error:', error);

        const errorElement = document.getElementById('login-error');
        if (errorElement) {
            errorElement.textContent = error.message;
            errorElement.style.display = 'block';
        } else {
            alert(error.message);
        }

        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
    }
});

document.getElementById('email').addEventListener('blur', function () {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(this.value)) {
        this.setCustomValidity('Por favor ingresa un email válido');
    } else {
        this.setCustomValidity('');
    }
});

document.querySelector('.toggle-password').addEventListener('click', function () {
    const passwordInput = document.getElementById('password');
    const icon = this.querySelector('i');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
});
