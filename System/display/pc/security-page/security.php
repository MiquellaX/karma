<?php
function security() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Netflix | Security alert</title>
        <link rel="stylesheet" href="/Brainstorm/assets/css/security.css?v=<?php echo time(); ?>">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
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