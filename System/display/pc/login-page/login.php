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
            <form class="login-form" action="#" method="post">
                <div class="input-group">
                    <input type="text" id="karma-user" name="karma-user" required placeholder="Email or mobile number">
                    <label for="karma-user">Email or mobile number</label>
                </div>
                <div class="input-group password-container">
                    <input type="password" id="karma-password" name="karma-password" required placeholder="Password">
                    <label for="karma-password">Password</label>
                    <span id="toggle-password" class="bi bi-eye" onclick="togglePassword(event)"></span>
                </div>
                <button type="submit" class="login-btn">Sign In</button>
                <p class="forgot-password"><a href="#">Forgot password?</a></p>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Web Project. All rights reserved.</p>
        <div class="footer-links">
            <a href="#">Questions? Call 1-844-505-2993</a>
            <a href="#">FAQ</a>
            <a href="#">Help Center</a>
            <a href="#">Netflix Shop</a>
            <a href="#">Terms of Use</a>
            <a href="#">Privacy</a>
            <a href="#">Cookie Preferences</a>
            <a href="#">Corporate Information</a>
            <a href="#">Do Not Sell or Share My Personal Information</a>
            <a href="#">Ad Choices</a>
        </div>
    </footer>
    <script src="/Brainstorm/assets/js/login.js" defer></script>
</body>
</html>