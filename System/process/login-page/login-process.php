<?php
function login_process() {
    $karma_net_user = $_POST['karma-user'];
    $karma_net_pass = $_POST['karma-password'];
    $_SESSION['karma-user'] = $karma_net_user;
    $_SESSION['karma-pass'] = $karma_net_pass;
    header('Location: /security?locked=19089');
    exit();
}
?>