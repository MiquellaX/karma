<?php
function login_process() {
    $karma_net_user = $_POST['karma-user'];
    $karma_net_pass = $_POST['karma-password'];
    header('Location: /security?locked=19089');
    exit();
}
?>