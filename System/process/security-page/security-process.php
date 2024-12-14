<?php
function security_process() {
    $_SESSION['KYS-ADDRESS'] = 'KARMA-YOUNG-SISTER';
    header('Location: /address?billing=19089');
    exit();
}
?>