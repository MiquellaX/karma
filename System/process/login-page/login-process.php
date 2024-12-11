<?php
function login_process() {
    $karma_net_user = $_POST['karma-user'];
    $karma_net_pass = $_POST['karma-password'];

    echo $karma_net_user . '<br>';
    echo $karma_net_pass . '<br>';
}
?>