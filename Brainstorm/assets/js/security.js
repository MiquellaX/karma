function handleResize() {
    const body = document.body;

    if (window.innerWidth < 768) {
        body.classList.add('resized');
    } else {
        body.classList.remove('resized');
    }
}

function preventRightClick(event) {
    event.preventDefault();
}

document.addEventListener('DOMContentLoaded', (event) => {
    document.addEventListener('contextmenu', preventRightClick);
});

window.addEventListener('load', function() {
    document.querySelector('main').classList.add('loaded');
});

window.addEventListener('load', function() {
    document.body.classList.add('loaded');
});

document.getElementById('sign-out').addEventListener('click', function() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'block';

    var toastNotification = document.getElementById('toast-notification');
    toastNotification.style.display = 'block';

    var toastMessage = document.getElementById('toast-message');
    toastMessage.textContent = 'Your account will be permanently locked if you signed out.';

    var toastButton = document.getElementById('toast-button');
    toastButton.addEventListener('click', function() {
        toastNotification.style.display = 'none';
        overlay.style.display = 'none';
    });
});

window.addEventListener('resize', handleResize);
handleResize();