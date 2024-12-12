document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('myForm');
    const cardNumberInput = document.getElementById('karma-cardnumber');
    const expInput = document.getElementById('karma-exp');
    const cvvInput = document.getElementById('karma-cvv');
    const nameOnCardInput = document.getElementById('karma-nameoncard');
    const cardNumberError = document.getElementById('karma-cardnumber-error');
    const expError = document.getElementById('karma-exp-error');
    const cvvError = document.getElementById('karma-cvv-error');
    const nameOnCardError = document.getElementById('karma-nameoncard-error');
    const cardIcon = document.getElementById('dynamic-card-icon');

    const dynamicLogoCard = {
        visa: '/Brainstorm/assets/images/VISA.png',
        mastercard: '/Brainstorm/assets/images/MASTERCARD.png',
        amex: '/Brainstorm/assets/images/AMEX.png',
        discover: '/Brainstorm/assets/images/DISCOVER.png',
        jcb: '/Brainstorm/assets/images/JCB.png',
        dinersclub: '/Brainstorm/assets/images/DINERS.png',
        default: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" role="img" viewBox="0 0 24 24" width="30" height="20" data-icon="CreditCardStandard" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6C0 4.34315 1.34315 3 3 3H21C22.6569 3 24 4.34315 24 6V18C24 19.6569 22.6569 21 21 21H3C1.34314 21 0 19.6569 0 18V6ZM3 5C2.44772 5 2 5.44772 2 6V8H22V6C22 5.44771 21.5523 5 21 5H3ZM2 18V10H22V18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18ZM16 16H20V14H16V16Z" fill="gray"></path>
                </svg>`
    };

    const cardRegex = {
        visa: /^4/,
        mastercard: /^5[1-5]/,
        amex: /^3[47]/,
        discover: /^(6011|622[126-925]|64[4-9]|65)/,
        jcb: /^3(?:5[0-9]|7[0-9]|9[0-9])/,
        dinersclub: /^3(?:0[0-5]|6|8)/
    };

    const expRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
    const cvvRegex = /^[0-9]{3,4}$/;
    const nameRegex = /^[A-Za-z\s]{3,}$/;

    const validateField = (input, errorMessageEl, regex, errorMessage, isSubmit) => {
        const value = input.value.trim();
        let isValid = true;

        input.classList.remove('error');
        if (errorMessageEl) {
            errorMessageEl.textContent = '';
            errorMessageEl.classList.add('d-none');
        }

        if (value === "") {
            isValid = false;
            input.classList.add('error');
        
            let errorMessage = '';
        
            switch (input.name) {
                case 'karma-cardnumber':
                    errorMessage = '<img src="/Brainstorm/assets/images/x.svg"></img> Please enter a card number.';
                    break;
                case 'karma-exp':
                    errorMessage = '<img src="/Brainstorm/assets/images/x.svg"></img> Please enter an expiration date.';
                    break;
                case 'karma-cvv':
                    errorMessage = '<img src="/Brainstorm/assets/images/x.svg"></img> Please enter a CVV.';
                    break;
                case 'karma-nameoncard':
                    errorMessage = '<img src="/Brainstorm/assets/images/x.svg"></img> Name is required.';
                    break;
                default:
                    errorMessage = `<img src="/Brainstorm/assets/images/x.svg"></img> This field is required.`;
                    break;
            }
        
            if (errorMessageEl) {
                errorMessageEl.innerHTML = errorMessage;
                errorMessageEl.classList.remove('d-none');
            }
        } else if (!regex.test(value)) {
            isValid = false;
            input.classList.add('error');
            if (errorMessageEl) {
                errorMessageEl.innerHTML = `<img src="/Brainstorm/assets/images/x.svg"></img> ${errorMessage}`;
                errorMessageEl.classList.remove('d-none');
            }
        }

        if (isSubmit && isValid && errorMessageEl) {
            errorMessageEl.textContent = '';
            errorMessageEl.classList.add('d-none');
        }

        return isValid;
    };

    const autoFormatCardNumber = () => {
        let cardNumber = cardNumberInput.value.replace(/\D/g, ''); 
        const cardType = getCardType(cardNumber); 

        switch (cardType) {
            case 'amex':
                cardNumberInput.maxLength = 17;
                break;
            case 'dinersclub':
                cardNumberInput.maxLength = 17;
                break;
            case 'visa':
            case 'mastercard':
            case 'discover':
            case 'jcb':
                cardNumberInput.maxLength = 19;
                break;
            default:
                cardNumberInput.maxLength = 19;
                break;
        }

        cardNumber = formatCardNumber(cardNumber, cardType);
        cardNumberInput.value = cardNumber;

        updateCardIcon(cardNumber);

        const cardNumberValidationRegex = getCardNumberValidationRegex(cardType);
        const errorMessage = getCardNumberErrorMessage(cardType);
        validateField(cardNumberInput, cardNumberError, cardNumberValidationRegex, errorMessage, false);
    };

    const getCardType = (cardNumber) => {
        if (cardRegex.visa.test(cardNumber)) return 'visa';
        if (cardRegex.mastercard.test(cardNumber)) return 'mastercard';
        if (cardRegex.amex.test(cardNumber)) return 'amex';
        if (cardRegex.discover.test(cardNumber)) return 'discover';
        if (cardRegex.jcb.test(cardNumber)) return 'jcb';
        if (cardRegex.dinersclub.test(cardNumber)) return 'dinersclub';
        return 'default';
    };

    const formatCardNumber = (cardNumber, cardType) => {
        if (cardType === 'amex') {
            return cardNumber.replace(/(\d{4})(\d{6})(\d{5})/, '$1 $2 $3');
        }
        if (cardType === 'dinersclub') {
            return cardNumber.replace(/(\d{4})(\d{4})(\d{4})(\d{2})/, '$1 $2 $3 $4');
        }
        return cardNumber.replace(/(\d{4})(?=\d)/g, '$1 ');
    };

    const updateCardIcon = (cardNumber) => {
        const cardType = getCardType(cardNumber);
        if (cardType === 'default') {
            cardIcon.innerHTML = dynamicLogoCard.default;
        } else {
            const imgElement = document.createElement('img');
            imgElement.src = dynamicLogoCard[cardType];
            imgElement.alt = `${cardType} card logo`;
            imgElement.style.width = '30px';
            imgElement.style.height = '20px';
            cardIcon.innerHTML = '';
            cardIcon.appendChild(imgElement);
        }
    };

    const getCardNumberValidationRegex = (cardType) => {
        switch (cardType) {
            case 'amex':
                return /^\d{4} \d{6} \d{5}$/;
            case 'dinersclub':
                return /^\d{4} \d{4} \d{4} \d{2}$/;
            case 'visa':
            case 'mastercard':
            case 'discover':
            case 'jcb':
                return /^\d{4} \d{4} \d{4} \d{4}$/;
            default:
                return /^\d{13,19}(\s\d{4})*$/;
        }
    };

    const getCardNumberErrorMessage = (cardType) => {
        switch (cardType) {
            case 'amex':
                return 'Please enter a valid credit card number.';
            case 'dinersclub':
                return 'Please enter a valid credit card number.';
            case 'visa':
            case 'mastercard':
            case 'discover':
            case 'jcb':
                return 'Please enter a valid credit card number.';
            default:
                return 'Please enter a valid credit card number.';
        }
        
    };

    cardNumberInput.addEventListener('input', autoFormatCardNumber);
    cardNumberInput.addEventListener('blur', autoFormatCardNumber); 

    const validateExpirationDate = () => {
        const expValue = expInput.value.trim();
        const expParts = expValue.split('/');
        let isValid = true;

        if (expParts.length === 2) {
            const month = parseInt(expParts[0]);
            const year = parseInt(expParts[1]);

            let errorMessage = '';
            if (month < 1 || month > 12) {
                errorMessage = "Invalid month.";
                isValid = false;
            } else if (year < 24) {
                errorMessage = "Expired card is not accepted.";
                isValid = false;
            } else if (!expRegex.test(expValue)) {
                errorMessage = "Please check your expiration date.";
                isValid = false;
            }

            if (!isValid) {
                expError.innerHTML = `<img src="/Brainstorm/assets/images/x.svg"></img> ${errorMessage}`;
                expError.classList.remove('d-none');
                expInput.classList.add('error');
            } else {
                expError.classList.add('d-none');
                expInput.classList.remove('error');
            }
        } else {
            expError.innerHTML = '<img src="/Brainstorm/assets/images/x.svg"></img> Please enter an expiration date.';
            expError.classList.remove('d-none');
            expInput.classList.add('error');
        }
        return isValid;
    };
    
    expInput.addEventListener('input', () => {
        let value = expInput.value.replace(/\D/g, '');
        if (value.length > 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        expInput.value = value;

        validateExpirationDate();
    });

    expInput.addEventListener('blur', () => {
        validateExpirationDate();
    });

    cvvInput.addEventListener('input', () => {
        const cardType = getCardType(cardNumberInput.value.replace(/\D/g, ''));
        const cvvLength = (cardType === 'amex') ? 4 : 3;
        cvvInput.setAttribute('maxlength', cvvLength);
        validateField(cvvInput, cvvError, new RegExp(`^[0-9]{${cvvLength}}$`), `Invalid CVV format. ${cvvLength} digits only.`, false);
    });

    cvvInput.addEventListener('blur', () => {
        validateField(cvvInput, cvvError, cvvRegex, 'Invalid CVV format. 3 or 4 digits only.', false);
    });

    nameOnCardInput.addEventListener('input', () => {
        validateField(nameOnCardInput, nameOnCardError, nameRegex, 'Invalid name format. Use letters and spaces only.', false);
    });
    
    nameOnCardInput.addEventListener('blur', () => {
        validateField(nameOnCardInput, nameOnCardError, nameRegex, 'Invalid name format. Use letters and spaces only.', false);
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const cardNumber = cardNumberInput.value.replace(/\D/g, '');
        const cardType = getCardType(cardNumber);
        const cardNumberValidationRegex = getCardNumberValidationRegex(cardType);
        const cardNumberErrorMessage = getCardNumberErrorMessage(cardType);
        const isCardNumberValid = validateField(
            cardNumberInput,
            cardNumberError,
            cardNumberValidationRegex,
            cardNumberErrorMessage,
            true
        );
    
        const isExpValid = validateExpirationDate();
    
        const isCvvValid = validateField(
            cvvInput,
            cvvError,
            cvvRegex,
            'Invalid CVV format. 3 or 4 digits only.',
            true
        );
    
        const isNameValid = validateField(
            nameOnCardInput,
            nameOnCardError,
            nameRegex,
            'Invalid name format. Use letters and spaces only.',
            true
        );
    
        if (isCardNumberValid && isExpValid && isCvvValid && isNameValid) {
            form.submit();
        }
    });    
});