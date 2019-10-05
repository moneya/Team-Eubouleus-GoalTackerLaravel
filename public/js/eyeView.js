let password = document.getElementById('password');
let confirmPassword = document.getElementById('password-confirm');
let eye = document.getElementById('eye');

eye.addEventListener('click', togglePass);

function togglePass() {
    eye.classList.toggle('active');

    (password.type == 'password') ? password.type = 'text' : password.type = 'password';
}