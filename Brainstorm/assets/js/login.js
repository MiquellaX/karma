function togglePassword(event) {
    const passwordField = document.getElementById('karma-password');
    const toggleIcon = document.getElementById('toggle-password');
    
    event.preventDefault();

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
    }
    passwordField.focus();
}
