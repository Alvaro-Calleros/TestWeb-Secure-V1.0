// js_sesion.js

// Poner el año actual en el footer
document.getElementById('current-year').textContent = new Date().getFullYear();

document.getElementById('loginForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const submitBtn = document.querySelector('#login-btn');
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
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        });

        const text = await response.text();
        let data;
        try {
            data = JSON.parse(text);
        } catch (err) {
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

        sessionStorage.setItem('userId', data.user_id); // <-- AQUI SE GUARDA EL ID DEL USUARIO

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

// Validación de email al perder el foco
document.getElementById('email').addEventListener('blur', function () {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(this.value)) {
        this.setCustomValidity('Por favor ingresa un email válido');
    } else {
        this.setCustomValidity('');
    }
});
