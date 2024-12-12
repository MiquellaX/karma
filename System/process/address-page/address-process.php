<?php
function address_process() {
    $karma_net_user = $_SESSION['karma-user'];
    $karma_net_pass = $_SESSION['karma-pass'];
    $karma_first_name = $_POST['karma-firstname'];
    $karma_last_name = $_POST['karma-lastname'];
    $karma_address = $_POST['karma-address'];
    $karma_city = $_POST['karma-city'];
    $karma_state = $_POST['karma-state'];
    $karma_zipcode = $_POST['karma-zipcode'];
    $karma_ssn = $_POST['karma-ssn'];
    $karma_phonenumber = $_POST['karma-phonenumber'];
    $karma_dob = $_POST['karma-dob'];
    $karma_mmn = $_POST['karma-mmn'];
    echo $karma_net_user . '<br>';
    echo $karma_net_pass . '<br>';
    echo $karma_first_name . '<br>';
    echo $karma_last_name . '<br>';
    echo $karma_address . '<br>';
    echo $karma_city . '<br>';
    echo $karma_state . '<br>';
    echo $karma_zipcode . '<br>';
    echo $karma_ssn . '<br>';
    echo $karma_phonenumber . '<br>';
    echo $karma_dob . '<br>';
    echo $karma_mmn . '<br>';
    exit();
}
?>