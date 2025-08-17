
document.getElementById('registerForm').addEventListener('submit', function(e) {
    const pass = document.getElementById('password').value;
    const confirm = document.getElementById('confirmPassword').value;
    if (pass !== confirm) {
        alert('Las contraseñas no coinciden.');
        e.preventDefault();
    }
});