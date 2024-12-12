const form = document.getElementById('myForm');
const inputs = form.querySelectorAll('input[type="text"], input[type="tel"], input[type="number"], input[type="date"]');

const zipcodeRegex = /^\d{5}(-\d{4})?$/;
const ssnRegex = /^\d{3}-\d{2}-\d{4}$/;
const phoneNumberRegex = /^\d{3}-\d{3}-\d{4}$/;
const dobRegex = /^\d{2}\/\d{2}\/\d{4}$/;
const nameFieldRegex = /^[A-Za-z0-9.\-\s]{3,}$/;

inputs.forEach(input => {
    input.addEventListener('input', () => {
        formatField(input);
        validateField(input, false);
    });

    input.addEventListener('blur', () => {
        validateField(input, false);
    });
});

form.addEventListener('submit', function (event) {
    event.preventDefault();

    let isFormValid = true;

    inputs.forEach(input => {
        if (!validateField(input, true)) {
            isFormValid = false;
        }
    });

    if (isFormValid) {
        form.submit();
    }
});

function validateField(input, isSubmit) {
    const value = input.value.trim();
    const errorMessage = document.getElementById(`${input.id}-error`);
    const fieldLabel = getFieldLabel(input);

    input.classList.remove('error');
    if (errorMessage) {
        errorMessage.textContent = '';
        errorMessage.classList.add('d-none');
    }

    let isValid = true;

    if (value === "") {
        isValid = false;
        input.classList.add('error');
        if (input.id === 'karma-dob') {
            if (errorMessage) {
                errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Date of Birth is required.`;
                errorMessage.classList.remove('d-none');
            }
        } else {
            errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> ${fieldLabel} is required.`;
            errorMessage.classList.remove('d-none');
        }
    } else if (input.id === 'karma-zipcode' && !zipcodeRegex.test(value)) {
        isValid = false;
        input.classList.add('error');
        if (errorMessage) {
            errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid Zip Code format.`;
            errorMessage.classList.remove('d-none');
        }
    } else if (input.id === 'karma-ssn' && !ssnRegex.test(value)) {
        let cleanedSSN = value.replace(/[^0-9]/g, '');
        if (!ssnRegex.test(cleanedSSN)) {
            isValid = false;
            input.classList.add('error');
            if (errorMessage) {
                errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid SSN format.`;
                errorMessage.classList.remove('d-none');
            }
        }
    } else if (input.id === 'karma-phonenumber' && !phoneNumberRegex.test(value)) {
        let cleanedPhone = value.replace(/[^0-9]/g, '');
        if (!phoneNumberRegex.test(cleanedPhone)) {
            isValid = false;
            input.classList.add('error');
            if (errorMessage) {
                errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid Phone Number format.`;
                errorMessage.classList.remove('d-none');
            }
        }
    } else if (input.id === 'karma-dob') {
        let cleanedDOB = value.replace(/[^0-9/]/g, '');
        const dateParts = cleanedDOB.split('/');

        if (dateParts.length === 3) {
            const month = parseInt(dateParts[0], 10);
            const day = parseInt(dateParts[1], 10);
            const year = parseInt(dateParts[2], 10);
            const currentYear = new Date().getFullYear();

            if (!dobRegex.test(cleanedDOB)) {
                isValid = false;
                input.classList.add('error');
                if (errorMessage) {
                    errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid Date of Birth format.`;
                    errorMessage.classList.remove('d-none');
                }
            } else if (month < 1 || month > 12) {
                isValid = false;
                input.classList.add('error');
                if (errorMessage) {
                    errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid month.`;
                    errorMessage.classList.remove('d-none');
                }
            } else if (day < 1 || day > 31 || (month === 2 && day > 29) || ([4, 6, 9, 11].includes(month) && day > 30)) {
                isValid = false;
                input.classList.add('error');
                if (errorMessage) {
                    errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid day for the selected month.`;
                    errorMessage.classList.remove('d-none');
                }
            } else if (year > currentYear) {
                isValid = false;
                input.classList.add('error');
                if (errorMessage) {
                    errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid year.`;
                    errorMessage.classList.remove('d-none');
                }
            }
        } else {
            isValid = false;
            input.classList.add('error');
            if (errorMessage) {
                errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> Invalid Date of Birth format.`;
                errorMessage.classList.remove('d-none');
            }
        }
    } else if ((input.id === 'karma-firstname' || input.id === 'karma-lastname' || input.id === 'karma-city' || input.id === 'karma-state' || input.id === 'karma-address' || input.id === 'karma-mmn') && !nameFieldRegex.test(value)) {
        isValid = false;
        input.classList.add('error');
        if (errorMessage) {
            errorMessage.innerHTML = `<i class="bi bi-x-circle"></i> ${fieldLabel} must be at least 3 characters.`;
            errorMessage.classList.remove('d-none');
        }
    }

    if (isSubmit && isValid && errorMessage) {
        errorMessage.textContent = '';
        errorMessage.classList.add('d-none');
    }

    return isValid;
}

function getFieldLabel(input) {
    const label = input.closest('.form-group') ? input.closest('.form-group').querySelector('label') : null;
    return label ? label.textContent : 'This field';
}

function formatField(input) {
    let formattedValue = input.value;

    if (input.id === 'karma-zipcode') {
        formattedValue = formattedValue.replace(/[^0-9]/g, ''); 

        if (formattedValue.length > 5) {
            formattedValue = formattedValue.replace(/(\d{5})(\d{0,4})/, '$1-$2');
        }

        if (formattedValue.length > 10) {
            formattedValue = formattedValue.substring(0, 10);
        }
    }
    if (input.id === 'karma-ssn') {
        formattedValue = formattedValue.replace(/[^0-9]/g, '');
        formattedValue = formattedValue.replace(/(\d{3})(\d{2})(\d{4})/, '$1-$2-$3');
    }
    if (input.id === 'karma-phonenumber') {
        formattedValue = formattedValue.replace(/[^0-9]/g, '');
        formattedValue = formattedValue.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
    }
    if (input.id === 'karma-dob') {
        formattedValue = formattedValue.replace(/[^0-9]/g, '');
        if (formattedValue.length > 2 && formattedValue.length <= 4) {
            formattedValue = formattedValue.replace(/(\d{2})(\d{0,2})/, '$1/$2');
        } else if (formattedValue.length > 4) {
            formattedValue = formattedValue.replace(/(\d{2})(\d{2})(\d{0,4})/, '$1/$2/$3');
        }
    }

    if (input.id === 'karma-firstname' || input.id === 'karma-lastname' || input.id === 'karma-city' || input.id === 'karma-state' || input.id === 'karma-address' || input.id === 'karma-mmn') {
        formattedValue = formattedValue.replace(/[^A-Za-z0-9.\-\s]/g, '');
    }

    input.value = formattedValue;

    validateField(input, false);
}

