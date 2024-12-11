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

    passwordField.setSelectionRange(passwordField.value.length, passwordField.value.length);
    passwordField.focus();
}

function validatePasswordLength() {
    const passwordField = document.getElementById('karma-password');
    const errorMessage = document.getElementById('password-error');

    if (passwordField.value.length < 4 && passwordField.value !== "") {
        passwordField.classList.add('error');
        errorMessage.innerHTML = '<i class="bi bi-x-circle"></i> Your password must contain between 4 and 60 characters.';
    } else if (passwordField.value === "") {
        passwordField.classList.add('error');
        errorMessage.innerHTML = '<i class="bi bi-x-circle"></i> Password is required.';
    } else {
        passwordField.classList.remove('error');
        errorMessage.textContent = '';
    }
}

function validateUserField() {
    const userField = document.getElementById('karma-user');
    const errorMessage = document.getElementById('user-error');

    if (userField.value.trim() === "") {
        userField.classList.add('error');
        errorMessage.innerHTML = '<i class="bi bi-x-circle"></i> Email or mobile number is required.';
    } else {
        userField.classList.remove('error');
        errorMessage.textContent = '';
    }
}

document.getElementById('karma-password').addEventListener('blur', validatePasswordLength);

document.getElementById('karma-password').addEventListener('focus', function() {
    const errorMessage = document.getElementById('password-error');
    errorMessage.textContent = '';
});

document.getElementById('karma-user').addEventListener('blur', validateUserField);

document.getElementById('karma-user').addEventListener('focus', function() {
    const errorMessage = document.getElementById('user-error');
    errorMessage.textContent = '';
});

document.querySelector('.login-form').addEventListener('submit', function(event) {
    const passwordField = document.getElementById('karma-password');
    const errorMessagePassword = document.getElementById('password-error');
    const userField = document.getElementById('karma-user');
    const errorMessageUser = document.getElementById('user-error');
    
    let isValid = true;

    if (passwordField.value.length < 4 || passwordField.value === "") {
        event.preventDefault();
        isValid = false;
        
        passwordField.classList.add('error');
        if (passwordField.value === "") {
            errorMessagePassword.innerHTML = '<i class="bi bi-x-circle"></i> Password is required.';
        } else {
            errorMessagePassword.innerHTML = '<i class="bi bi-x-circle"></i> Your password must contain between 4 and 60 characters.';
        }
    } else {
        passwordField.classList.remove('error');
        errorMessagePassword.textContent = '';
    }

    if (userField.value.trim() === "") {
        event.preventDefault();
        isValid = false;
        
        userField.classList.add('error');
        errorMessageUser.innerHTML = '<i class="bi bi-x-circle"></i> Email or mobile number is required.';
    } else {
        userField.classList.remove('error');
        errorMessageUser.textContent = '';
    }

    if (!isValid) {
        event.preventDefault();
    }
});

function handleResize() {
    const body = document.body;

    // Check the window width and apply 'resized' class accordingly
    if (window.innerWidth < 768) {
        // Add resized class to body
        body.classList.add('resized');
    } else {
        // Remove resized class from body
        body.classList.remove('resized');
    }
}

// Attach the event listener to resize
window.addEventListener('resize', handleResize);
handleResize();