document.getElementById('current-year').textContent = new Date().getFullYear();

const passwordInput = document.getElementById('password');
const passwordStrength = document.getElementById('passwordStrength');
const passwordStrengthText = document.getElementById('passwordStrengthText');
const confirmPasswordInput = document.getElementById('confirmPassword');
const passwordMatch = document.getElementById('passwordMatch');

passwordInput.addEventListener('input', function () {
    const password = passwordInput.value;
    let strength = 0;

    if (password.length >= 8) {
        strength += 25;
    }

    if (/[a-z]/.test(password)) {
        strength += 25;
    }

    if (/[A-Z]/.test(password)) {
        strength += 25;
    }

    if (/[0-9!@#$%^&*(),.?":{}|<>]/.test(password)) {
        strength += 25;
    }

    passwordStrength.style.width = strength + '%';

    passwordStrength.className = 'password-strength-bar';
    passwordStrengthText.className = 'password-strength-text';

    if (strength < 25) {
        passwordStrength.classList.add('password-strength-weak');
        passwordStrengthText.textContent = 'Muy débil';
        passwordStrengthText.style.color = '#ef4444';
    } else if (strength < 50) {
        passwordStrength.classList.add('password-strength-weak');
        passwordStrengthText.textContent = 'Débil';
        passwordStrengthText.style.color = '#f97316';
    } else if (strength < 75) {
        passwordStrength.classList.add('password-strength-medium');
        passwordStrengthText.textContent = 'Media';
        passwordStrengthText.style.color = '#f59e0b';
    } else {
        passwordStrength.classList.add('password-strength-strong');
        passwordStrengthText.textContent = 'Fuerte';
        passwordStrengthText.style.color = '#10b981';
    }

    checkPasswordsMatch();
});

confirmPasswordInput.addEventListener('input', checkPasswordsMatch);

function checkPasswordsMatch() {
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (confirmPassword === '') {
        passwordMatch.classList.remove('visible', 'success', 'error');
        return;
    }

    if (password === confirmPassword) {
        passwordMatch.textContent = '¡Las contraseñas coinciden!';
        passwordMatch.className = 'password-match visible success';
    } else {
        passwordMatch.textContent = 'Las contraseñas no coinciden';
        passwordMatch.className = 'password-match visible error';
    }
}

document.getElementById('registerForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    if (!document.getElementById('terms').checked) {
        alert('Debes aceptar los términos y condiciones');
        return;
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
        alert('Las contraseñas no coinciden');
        return;
    }

    const formData = {
        firstName: document.getElementById('firstName').value.trim(),
        lastName: document.getElementById('lastName').value.trim(),
        email: document.getElementById('email').value.trim(),
        organization: document.getElementById('organization').value.trim(), 
        password: passwordInput.value
    };


    try {
        const response = await fetch('php/registro.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.error || 'Error en el registro');
        }

        alert('¡Registro exitoso! Serás redirigido automáticamente');
        setTimeout(() => {
            window.location.href = 'sesion.php';
        }, 2000);

    } catch (error) {
        console.error('Error:', error);
        alert(error.message);
    }
}); 